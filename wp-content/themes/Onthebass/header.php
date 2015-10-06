<!DOCTYPE html>
<html>
<head>
<title><?php bloginfo('name') ;?>	- <?php bloginfo('description')?></title>


<meta name="description" content="Free Web tutorials">
<meta name="generator" content="WordPress" <?php bloginfo('version');?> />
<meta http-equiv="content-type"
	content="<?php bloginfo_rss('html_type');?>; <?php bloginfo('charset');?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>"
	media="all" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0"
	href="<?php bloginfo('rsss2_url');?>" />
<link rel="alternate" type="text/xml" title="RSS .92"
	href="<?php bloginfo('rss_url');?>" />
<link rel="alternate" type="application/Atom+xml" title="Atom 0.3"
	href="<?php bloginfo('atom_url');?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script
	src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>    
	
	
<?php wp_head();?>









</head>
<body>


	<nav class="navbar navbar-inverse ">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#myNavbar">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><h1>On the Ba</h1></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					
					<li  class="active"><a href="<?php echo get_option('home');?>">Agnaldo</a></li>		 
					<?php wp_list_categories('title_li=');?>
       
          </ul>

			</div>
		</div>
	</nav>

	<div class="container2">
		<div class="row">
		<div class="col-md-3" id="jum">
				

			</div>
			<div class="col-md-6" id="jum">
				<div class="jumbotron">
					<h1>Contrabaixo na veia!</h1>
				</div>

			</div>
		</div>
	</div>