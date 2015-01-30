<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php echo $title; ?> | Company</title>
	<link rel="stylesheet" href="<?php echo base_url() . APPPATH ?>views/css/materialize.min.css" />
	<link rel="stylesheet" href="<?php echo base_url() . APPPATH ?>views/stylesheets/app.css" />
	<script>
		var app_url = '<?php echo base_url() . APPPATH; ?>';
	</script>
</head>
<body>
		<?php echo $header; ?>
		<?php echo $content; ?>
		<?php echo $footer; ?>
	<script src="<?php echo base_url() . APPPATH ?>views/js/jquery-2.1.1.min.js"></script>
	<script src="<?php echo base_url() . APPPATH ?>views/js/materialize.min.js"></script>
	<script type="text/javascript">
	//added for navbar working
	$(document).ready(function(){
		$('.dropdown-button').dropdown();
		$('.button-collapse').sideNav({menuWidth: 240, activationWidth: 70, edge: 'left'});
		$('.slider').slider({full_width: true, indicators: true, height: 410, transition: 500, interval: 5000});
	});
</script>
<!-- self made -->
<script src="<?php echo base_url() . APPPATH ?>views/js/master.js"></script>
</body>
</html>