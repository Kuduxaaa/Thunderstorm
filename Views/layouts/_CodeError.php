<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="theme-color" content="#202020">
	<meta name="generator" content="Thunderstorm">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/static/err.css">
	<title>ThunderError</title>
</head>
<body>

	<div class="a">
		<p>ThunderError</p>
		<p><?=date('d-m-Y H:m:s')?></p>
	</div>

	<div class="b">
		<div class="general_info">
			<p class="big">შეცდომა გაქვს ჯიგარო <span class="err_code">[<?=$_DATA['err_code']?>]</span></p>
			<p><b>ThunderError</b>: <?=$_DATA['err_msg']?></p>
			<p>Error on line <?=$_DATA['err_line']?> in <i><?=$_DATA['err_file']?></i></p>
		</div>
		<div class="image">
			<img src="/static/x.png" draggable="false" alt="Bad File :))" class="badfileimg">
		</div>
	</div>

	<div class="container">
		<h1 class="title">Server</h1>
		<div class="info">
			<?php foreach ($_SERVER as $key => $value): ?>
				<p>
					<span class="one"><b><?=$key?></b>: </span>
					<span class="two"><?=$value?></span>
				</p>
			<?php endforeach; ?>

		</div>
	</div>

</body>
</html>