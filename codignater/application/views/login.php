<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>login</h1>
	<ul>
		<?php foreach ($menu as $item): ?>
			<li><a href="?= $item['url'] ?>"><?= $item['title'] ?></a></li>
		<?php endforeach; ?>
	</ul>
</body>
</html>