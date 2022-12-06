<?
global $USER;
?>
</div>
<footer>
	<?$APPLICATION->IncludeComponent(
		"citfact:seo",
		"",
		array(
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "3600",
			"CACHE_GROUPS" => "Y"
		),
		false
	);?>
	<?function SetSeoTexts(){
		global $APPLICATION;
		$seotext = $APPLICATION->GetProperty("seotext");

		if ($seotext != ''):
			return $seotext;
		endif;
	}?>
    <div class="b-footer_send-block">

        <?$APPLICATION->IncludeComponent(
	"crealink:mailchimp.form", 
	"footer_template", 
	array(
		"API_KEY" => "93fc9cc333e7924fd0e3c5b353de37cf-us10-us9",
		"CHECK_SUBSCRIBES" => "N",
		"SEND_VERIFICATION" => "N",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"LIST_ID" => "54f91bff78",
		"GROUPINGS" => array(
			0 => "773",
		),
		"GROUPING_14145_GROUPS" => array(
			0 => "64",
		),
		"AJAX_OPTION_ADDITIONAL" => "",
		"GROUPING_14305_GROUPS" => array(
			0 => "1",
		),
		"GROUPING_773_GROUPS" => array(
			0 => "1",
			1 => "4",
		)
	),
	false
);?>

    </div>

    <div class="b-footer-top">
        <ul class="b-footer-link-cont">
            <? $APPLICATION->IncludeComponent("bitrix:menu", "foother_menu", array(
                    "ROOT_MENU_TYPE" => "footer_1",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_CACHE_GET_VARS" => array(),
                    "MAX_LEVEL" => "1",
                    "CHILD_MENU_TYPE" => "footer_1",
                    "USE_EXT" => "N",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "N"
                ),
                false
            );?><?$APPLICATION->IncludeComponent("bitrix:menu", "foother_menu", array(
                    "ROOT_MENU_TYPE" => "footer_5",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_CACHE_GET_VARS" => array(),
                    "MAX_LEVEL" => "1",
                    "CHILD_MENU_TYPE" => "footer_2",
                    "USE_EXT" => "N",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "N"
                ),
                false
            );?><?$APPLICATION->IncludeComponent("bitrix:menu", "foother_menu", array(
                    "ROOT_MENU_TYPE" => "footer_2",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_CACHE_GET_VARS" => array(),
                    "MAX_LEVEL" => "1",
                    "CHILD_MENU_TYPE" => "footer_3",
                    "USE_EXT" => "N",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "N"
                ),
                false
            );?><?$APPLICATION->IncludeComponent("bitrix:menu", "foother_menu", array(
                    "ROOT_MENU_TYPE" => "footer_3",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_CACHE_GET_VARS" => array(),
                    "MAX_LEVEL" => "1",
                    "CHILD_MENU_TYPE" => "footer_4",
                    "USE_EXT" => "N",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "N"
                ),
                false
            );?><?$APPLICATION->IncludeComponent("bitrix:menu", "foother_menu", array(
                    "ROOT_MENU_TYPE" => "footer_4",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_CACHE_GET_VARS" => array(),
                    "MAX_LEVEL" => "1",
                    "CHILD_MENU_TYPE" => "footer_5",
                    "USE_EXT" => "N",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "N"
                ),
                false
            ); ?>
        </ul>
        <div class="b-footer-communication-cont">
            <!--noindex-->
            <div class="b-footer_phone-cont">
                <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/include_tesser/footer_shop.php",
                        "EDIT_TEMPLATE" => ""
                    ),
                    false
                );?>
            </div>
            <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => "/include_tesser/footer_feedback.php",
                    "EDIT_TEMPLATE" => ""
                ),
                false
            );?>
            <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => "/include_tesser/footer_social.php",
                    "EDIT_TEMPLATE" => ""
                ),
                false
            );?>
            <!--/noindex-->
        </div>
    </div>
    <div class="b-footer-bottom">
        <div class="b-footer-bottom-item">
            <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => "/include_tesser/footer_copyright.php",
                    "EDIT_TEMPLATE" => ""
                ),
                false
            );?>
        </div>
    </div>
</footer>

</div>

<?php 

	$arFilter = Array("IBLOCK_ID" => "32");
	$arSelectFields = array( "PROPERTY_TIME_DELAY", "PROPERTY_URL_PATH", "PROPERTY_COOKIE", "ACTIVE", "DETAIL_PICTURE" );
	
	$objItems = CIBlockElement::GetList(
			$arOrder = array( "SORT"=>"ASC" ),
			$arFilter = $arFilter,
			$arSelect = $arSelectFields
	);
	
	$arrCollections = array();
	$arrElements = array();
	
	while($obElement = $objItems->GetNextElement())
	{
		$el = $obElement->GetFields();
		//var_dump($el);
		$activeFlag =  $el['ACTIVE'];
		$timeDelay = $el['PROPERTY_TIME_DELAY_VALUE']*1000;
		$strUrl = $el['PROPERTY_URL_PATH_VALUE'];
		$strCookieName = $el['PROPERTY_COOKIE_VALUE'];
		$detailPicture = CFile::GetPath( $el['DETAIL_PICTURE'] );
	}
	
?>



<div class="overlay_block" style="display: none;"></div>
                <div class="overlay_block_card_product" id="overlay" style="display: none;"></div>
                <!--  big popup window  -->

                <div class="for-their_popUp" id="popup" style="dispflay: none;">
					<div class="user_popUp_wrap">
						<i class="close_icon"></i>
						<div class="popup-loyalty">
							<div class="popup-loyalty__item popup-for-their__img">
								
							</div>
							
								<div class="popup-loyalty__item">
									<p class="popup-for-their__txt">
									Регистрируйтесь
									<br>
									в программе лояльности
									<br>
									«Для Своих»
									</p>
									<p class="popup-for-their__txt"> Получите скидку 10% и привилегии </p>
								</div>
							<div class="popup-loyalty__item popup-for-their__btn">
								<div class="popup-for-their__btn-item btn-left">
									<span id="" class="btn_checkout">
										<a href="<?= $strUrl ?>">Получить</a>
									</span>
								</div>
								<div class="popup-for-their__btn-item btn-right">
									<span id="cancel" class="btn_shadow-border">
										<a>Отказаться</a>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				
<?php if ( $activeFlag == 'Y' ):?>

                <script src="//yandex.st/jquery/cookie/1.0/jquery.cookie.min.js"></script>
                
                <script type="text/javascript">

                $( document ).ready(function() {
                
                (function($) {
                	$(function() {
                		var ttt = 0;
                	// Проверим, есть ли запись в куках о посещении пользователем вашего сайта
                	// Если запись есть - то всплывающее окно не показываем
                	if (!$.cookie('<?= $strCookieName ?>')) {
                		ttt = setInterval(function () {

							document.getElementById('overlay').style.display='block';
							document.getElementById('popup').style.display='block';

		                	$.cookie('<?= $strCookieName ?>', true, {
		                	expires: 7,
		                	path: '/'
		                	});
							
		                    }, <?= $timeDelay ?>);
                		
                	}

                	$(this).keydown(function(eventObject){
                        if (eventObject.which == 27)
                            $('#popup').hide();
                        	clearInterval(ttt);
                    });
                	
                	$( ".close_icon" ).click(function() {
                		clearInterval(ttt);
                		$("#popup").css("display", "none");
                		$("#overlay").css("display", "none");
                		
                  	});

	                $( "#cancel" ).click(function() {
	                	clearInterval(ttt);
	            		$("#popup").css("display", "none");
	            		$("#overlay").css("display", "none");
	            		
	              	});
                	
                	
                	
                	})
                	})(jQuery);

				if ($.cookie('<?= $strCookieName ?>')) {
					
					  document.getElementById('popup').style.display='none';
					  document.getElementById('overlay').style.display='none';
					}
				
				$( ".close_icon" ).click(function() {

            		$(".design-order_popUp").css("display", "none");
            		$("#overlay").css("display", "none");
            		
              	});
                    
                	
                  	
                });
				
				</script>
				
<?php endif; ?>

                
<div class="design-order_popUp">
	<i class="close_icon"></i>
		<div class="self_popUp_wrap">
			<div class="self_popUp_title">
				<p class="self_popUp_title-red">Спасибо! Ваша заявка принята.</p>
			</div>
		</div>
</div>
                

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter24118141 = new Ya.Metrika({id:24118141,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,params:window.yaParams||{ }});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/24118141" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-59326658-1', 'auto');
  ga('send', 'pageview');
</script>


<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
  _fbq.push(['addPixelId', '442899112546248']);
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', 'PixelInitialized', {}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=442899112546248&amp;ev=PixelInitialized" /></noscript>



<?php if($APPLICATION->sDocPath2 != '/index.php'): ?>

<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = '1IzSm6WbFH';
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();</script>
<!-- {/literal} END JIVOSITE CODE -->


<?php endif; ?>

<link rel="stylesheet" href="//cdn.callbackhunter.com/widget2/tracker.css"> 
<script type="text/javascript" src="//cdn.callbackhunter.com/widget2/tracker.js" charset="UTF-8"></script> 
<script type="text/javascript">var hunter_code="383b25fb02a0ed25030d4ec415e6e7c2";</script>

<script type="text/javascript">
   (function(w, d, e) {
        var a = 'all', b = 'tou'; var src = b + 'c' +'h'; src = 'm' + 'o' + 'd.c' + a + src;
        var jsHost = (("https:" == d.location.protocol) ? "https://" : "http://")+ src;
        s = d.createElement(e); p = d.getElementsByTagName(e)[0]; s.async = 1; s.src = jsHost +"."+"r"+"u/d_client.js?param;ref"+escape(d.referrer)+";url"+escape(d.URL)+";cook"+escape(d.cookie)+";";
        if(!w.jQuery) { jq = d.createElement(e); jq.src = jsHost  +"."+"r"+'u/js/jquery-1.5.1.min.js'; p.parentNode.insertBefore(jq, p);}
        p.parentNode.insertBefore(s, p);
    }(window, document, 'script'));
</script>

<?if($USER->isAdmin() || in_array(8, $USER->GetUserGroupArray())):?>
<script>
    function createQR(i){
        if(i==1){
            type='png';
        }else if(i==2){
            type='svg';
        }else{
            type='eps';
        }
        document.location.href="http://<?=$_SERVER["SERVER_NAME"]?>/local/include/qrcode/create.php?TYPE="+type+"&LINK="+location.href;
    }
</script>
<?endif;?>
<? if ($APPLICATION->GetCurPage(false) === '/'): ?>

<script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=TnkkBN5QVDsatliylRHidbBhFjPM4vlnoUyWdEfECUVWR3zsdU/fhyqtEo0CO*VCPvjEd3cf7qSJCQtHBL9LLD6CFrDoz44DT9emlv1d2c*cpI5vmbxb3s1yxdjfh9*yIR/HUY8xJ4ewEEUWxkYBN7uIjntrLMLgmhNKeX3RNKw-';</script>

<? endif; ?>

</body>
</html>