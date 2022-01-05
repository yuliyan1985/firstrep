<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>document</title>
</head>
<body>


	<h1>Task For The Day</h1>

	<ul>
		
		<?php foreach ($task as $heading =>$value ): ?>

		
		<li> 

			<strong><?= $heading; ?>: </strong> <?= $value ?>

		</li>	

	<?php endforeach; ?>

	</ul>


</body>
</html>


