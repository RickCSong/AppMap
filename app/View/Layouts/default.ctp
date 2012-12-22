<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<title><?php echo $this->fetch('title'); ?></title>  	

	<link href="/css/bootstrap.min.css" rel="stylesheet"> <!-- bootstrap -->
  	<link href="/css/bootstrap-responsive.min.css" rel="stylesheet"> <!-- bootstrap responsive -->

	<?php
		echo $this->fetch('css');
	?>
</head>
<body>
	<div id="header">
	</div>

	<div id="container">
		<?php echo $this->fetch('content'); ?>
	</div>

	<footer>

	</footer>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>  <!-- bootstrap -->
	<script type="text/javascript" src="/js/d3.v2.min.js"></script>  <!-- d3 -->

	<?php if ($this->fetch('script')): ?>
		<?php echo $this->fetch('script'); ?>
	<?php endif; ?>
</body>
</html>