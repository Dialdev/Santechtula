<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Последние выгруженные элементы");
?> 
<h1>Последние выгруженные элементы</h1>
<script src="/bitrix/templates/index/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="/bitrix/templates/index/js/bootstrap.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="/bitrix/templates/index/js/bootstrap-datetimepicker.min.css" media="screen"/>

<form action="/last-sl/" class="form_razd">
	<p>Время выгрузки(лучше указать с округлением в меньшую сторону)</p>
	<p><input size="16" type="text" value="31.1.2017 14:45" readonly class="form_datetime"></p>
	<p><input type="submit" class="form_razd__submit"></p>
</form>
<script type="text/javascript">
    $(".form_datetime").datetimepicker({format: 'dd.mm.yyyy hh:ii'});
    $('.form_razd__submit').click(function(e){
    	$('.search-result').html('');
    	var ajax_data = $('.form_datetime').val();
	   	$.ajax({
	   		type: "GET",
	   		url: "/last-el/ajax.php",
	   		data: "datatime=" + ajax_data,
	   		success: function(data){	   			
	   			$('.search-result').html(data);
	   		}
	   	});
    	e.preventDefault();
    });
</script>
<div class="search-result"></div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>