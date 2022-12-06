<?
global $DOCUMENT_ROOT, $MESS;

IncludeModuleLangFile(__FILE__);

if (class_exists("smedia_yaxmlsearch")) return;

Class smedia_yaxmlsearch extends CModule {
    var $MODULE_ID = "smedia.yaxmlsearch";
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $MODULE_CSS;
    var $MODULE_GROUP_RIGHTS = "Y";

    function smedia_yaxmlsearch() {
        $arModuleVersion = array();

        $path = str_replace("\\", "/", __FILE__);
        $path = substr($path, 0, strlen($path) - strlen("/index.php"));
        include($path."/version.php");

        $this->MODULE_VERSION = $arModuleVersion["VERSION"];
        $this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
        $this->PARTNER_NAME = GetMessage("SMEDIA_YAXMLSEARCH_PARTNER_NAME");
        $this->MODULE_NAME = GetMessage("SMEDIA_YAXMLSEARCH_MODULE_NAME");

        $this->MODULE_DESCRIPTION = GetMessage("SMEDIA_YAXMLSEARCH_MODULE_DESC");
        $this->PARTNER_URI = "http://www.smedia.ru";
    }

    function InstallDB() {
        RegisterModule("smedia.yaxmlsearch");
        return true;
    }

    function UnInstallDB() {
        UnRegisterModule("smedia.yaxmlsearch");
        return true;
    }

    function InstallEvents() {
        return true;
    }

    function UnInstallEvents() {
        return true;
    }

    function InstallFiles($arParams = array()) {  
        CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/smedia.yaxmlsearch/install/components", $_SERVER["DOCUMENT_ROOT"]."/bitrix/components", true, true);
        
        $bReWriteAdditionalFiles = ($arParams["public_rewrite"] == "Y"); 

        if(array_key_exists("public_dir", $arParams) && strlen($arParams["public_dir"]))
        {
            $rsSite = CSite::GetList(($by="sort"),($order="asc"));
            while ($site = $rsSite->Fetch())
            {
                $source = $_SERVER['DOCUMENT_ROOT']."/bitrix/modules/smedia.yaxmlsearch/install/public/";
                $target = $site['ABS_DOC_ROOT'].$site["DIR"].$arParams["public_dir"]."/";
                if(file_exists($source))
                {
                    CheckDirPath($target);
                    $dh = opendir($source);
                    while($file = readdir($dh))
                    {
                        if($file == "." || $file == "..")
                            continue;
                        if($bReWriteAdditionalFiles || !file_exists($target.$file))
                        {
                            $fh = fopen($source.$file, "rb");
                            $php_source = fread($fh, filesize($source.$file));
                            fclose($fh);
                            if(preg_match_all('/GetMessage\("(.*?)"\)/', $php_source, $matches))
                            {
                                IncludeModuleLangFile($source.$file, $site["LANGUAGE_ID"]);
                                foreach($matches[0] as $i => $text)
                                {
                                    $php_source = str_replace(
                                        $text,
                                        '"'.GetMessage($matches[1][$i]).'"',
                                        $php_source
                                    );
                                }
                            }
                            $fh = fopen($target.$file, "wb");
                            fwrite($fh, $php_source);
                            fclose($fh);
                        }
                    }
                }
            }
        }
          
        return true;
    }

    function UnInstallFiles()
    {
        return true;
    }

    function DoInstall() {
        global $DB, $DOCUMENT_ROOT, $APPLICATION, $step;
        $step = IntVal($step);
        if($step < 2)
        {
            $APPLICATION->IncludeAdminFile(GetMessage("SMEDIA_YAXMLSEARCH_INSTALL_TITLE"), $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/smedia.yaxmlsearch/install/step1.php");
        }
        elseif($step == 2)
        {
            if($this->InstallDB())
            {
                $this->InstallEvents();
                $this->InstallFiles(array(
                    "public_dir" => $_REQUEST["public_dir"],
                    "public_rewrite" => $_REQUEST["public_rewrite"],
                ));
            }
            $GLOBALS["errors"] = $this->errors;
            $APPLICATION->IncludeAdminFile(GetMessage("SMEDIA_YAXMLSEARCH_INSTALL_TITLE"), $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/smedia.yaxmlsearch/install/step2.php");
        }
    }

    function DoUninstall() {
        $this->UnInstallDB();
        $this->UnInstallEvents();
        $this->UnInstallFiles();
    }
}
?>