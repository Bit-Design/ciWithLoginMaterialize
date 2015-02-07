<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php echo $title; ?> | Yvan Raymaekers</title>
	<link rel="stylesheet" href="<?php echo base_url() . APPPATH ?>views/css/materialize.min.css" />
	<link rel="stylesheet" href="<?php echo base_url() . APPPATH ?>views/stylesheets/app.css" />
	<!-- <link rel="stylesheet" href="<?php echo base_url() . APPPATH ?>views/css/font-awesome.min.css"> -->
</head>
<body>
	<?php echo $header; ?>
	<?php echo $content; ?>
	<?php echo $footer; ?>
	<script src="<?php echo base_url() . APPPATH ?>views/js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript">
		var app_url = '<?php echo base_url() . APPPATH; ?>';
		var viewName = '<?php echo $viewName; ?>';
		//adding class active to nav (for collapsible the a tag must have active as wel to have it collapsed on page load)
		$("." + viewName).addClass('active');
		$("." + viewName).parent().parent().parent().children().addClass('active');
	</script>
	<script src="<?php echo base_url() . APPPATH ?>views/js/materialize.min.js"></script>
	<script src="<?php echo base_url() . APPPATH ?>views/js/master.js"></script>
</body>
</html>