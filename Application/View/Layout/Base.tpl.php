<html>
    <head>
        <title>Paste <?php echo (isset($title)) ? ' | '.$title : ''; ?></title>
		<link type="text/css" href="http://static.hoa-project.net/Css/Keynote.css" rel="stylesheet" />
  		<link type="text/css" href="/Css/UI.css" rel="stylesheet" />
	</head>
	<body>
	<header>
		<a href="/" class="plain"><img alt="Hoa" src="http://static.hoa-project.net/Image/Hoa_small.png" /></a>
	</header>
	<article id="main">
		<?php
        $this->block('content');
        $this->endBlock();
        ?>
	</article>
	<script src="http://static.hoa-project.net/Javascript/Prism.js"></script>
	<script src="http://static.hoa-project.net/Javascript/Prism.hoa.js"></script>
	<script src="http://static.hoa-project.net/Javascript/Prism.plugin.line.js"></script>

</body>
</html>
