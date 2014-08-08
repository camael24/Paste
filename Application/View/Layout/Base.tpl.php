<!DOCTYPE html>
<html>
	<head>
		<title>Hoa paste <?php echo (isset($title)) ? ' | ' . $title : ''; ?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta http-equiv="content-type" content="text/javascript; charset=utf-8" />
		<meta http-equiv="content-type" content="text/css; charset=utf-8" />
		<meta name="viewport" content="initial-scale=1.0" />

		<link type="text/css" href="http://static.hoa-project.net/Css/Core.css" rel="stylesheet" />
		<link type="text/css" href="http://static.hoa-project.net/Css/UI.css" rel="stylesheet" />
		<?php
			$this->block('style');
			$this->endBlock();
		?>
	</head>
	<body>

	<script src="http://static.hoa-project.net/Javascript/Hoa.js"></script>

			<nav id="menu" aria-selected="false">
		        <ul id="nav-top">
		        	<li><a href="/" class="video">Pasties</a></li>
		        	<li><a href="/paste/new" class="blog">New</a></li>
		        </ul>

		        <ul id="nav-bottom">
		        	<li><a href="/help" class="about">Help</a></li>
		        </ul>
	      	</nav>

		    <div class="body">

		      	<div aria-controls="menu">
		        	<img alt="Menu" src="http://static.hoa-project.net/Image/Icon_menu.png" width="24" height="24" />
		      	</div>

		      	<header>
			      	<a href="/" class="plain">
			          <img alt="Hoa" src="http://static.hoa-project.net/Image/Hoa.png" />
			        </a>
		       </header>

		      	<article id="content">
			      	<?php
                      $this->block('content');
                      $this->endBlock();
                      ?>
			    </article>
		    </div>

	    <script src="http://static.hoa-project.net/Javascript/Prism.js"></script>
	    <script src="http://static.hoa-project.net/Javascript/Prism.hoa.js"></script>
	    <script src="http://static.hoa-project.net/Javascript/Prism.plugin.line.js"></script>
	</body>
</html>
