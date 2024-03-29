<?php  include 'server_info.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>System Info</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Server Info</h1>
		<?php if($server): ?>
			<ul class="list-group">
				<?php foreach($server as $key => $value): ?>
				<li class="list-group-item">
					<strong><?php echo $key; ?></strong>
					<?php echo $value; ?>
				</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>

		<h1>Client Info</h1>
		<?php if($client): ?>
			<ul class="list-group">
				<?php foreach($client as $key => $value): ?>
				<li class="list-group-item">
					<strong><?php echo $key; ?></strong>
					<?php echo $value; ?>
				</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</div>

</body>
</html>