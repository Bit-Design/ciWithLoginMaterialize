<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Page Title - <?php echo $title; ?></title>
	<link rel="stylesheet" href="<?php echo base_url() . APPPATH ?>views/stylesheets/app.css" />
	<link rel="stylesheet" href="<?php echo base_url() . APPPATH ?>views/css/materialize.min.css" />
	<script>
		var app_url = '<?php echo base_url() . APPPATH; ?>';
	</script>
</head>
<body>
<div class="container"> <!--remove container div if full width is needed -->
		<?php echo $header; ?>
		<?php echo $content; ?>
		<?php echo $footer; ?>
</div>
	<script src="<?php echo base_url() . APPPATH ?>views/js/jquery-2.1.1.min.js"></script>
	<script src="<?php echo base_url() . APPPATH ?>views/js/materialize.min.js"></script>
	<!-- self made -->
	<script src="<?php echo base_url() . APPPATH ?>views/js/master.js"></script>
</body>
</html>