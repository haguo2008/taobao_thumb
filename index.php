<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8"/>
	<title>淘宝商品图片抓取</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<meta content="yes" name="apple-mobile-web-app-capable" />
	<meta content="black" name="apple-mobile-web-app-status-bar-style" />
	<meta content="telephone=no" name="format-detection" />
	<meta content="email=no" name="format-detection" />
	<meta name="renderer" content="webkit"/>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>
	<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js" charset="utf-8"></script>
</head>
<body>
<div>
	<form action="#" data-action="taobao.php" id="form1" onsubmit="javascript:return page.submit();">
		请输入淘宝/天猫商品的网址：<input type="text" name="url" style="width: 500px;">
		<input type="submit" value="提交">
	</form>
</div>
<div id="result">

</div>
</body>
</html>
<script>
var page = {};
page.submit = function(){
	var form = $('#form1');
	var result =$('#result');
	result.empty();
	$.getJSON(form.attr('data-action') , form.serialize() , function(rets){
		$.each(rets , function(i,ret){
			$('<p><a href="'+ret+'" target="_blank"><img src="'+ret+'" style="height: 100px;"><br/>[打开大图]</a></p>').appendTo(result);
		});
	} );
	return false;
};
</script>
