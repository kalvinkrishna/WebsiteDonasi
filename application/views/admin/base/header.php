<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin - Bali Radiance</title>

<link href="<?=base_url()?>assets/lumino-css/bootstrap.min.css" rel="stylesheet">
<link href="<?=base_url()?>assets/lumino-css/datepicker3.css" rel="stylesheet">
<link href="<?=base_url()?>assets/lumino-css/bootstrap-table.css" rel="stylesheet">
<link href="<?=base_url()?>assets/lumino-css/styles.css" rel="stylesheet">
<<script src="<?=base_url()?>assets/js/jquery-1.11.1.min.js" type="text/javascript" charset="utf-8" async defer></script>
<!--Icons-->
<script src="<?=base_url()?>assets/lumino-js/lumino.glyphs.js"></script>


<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="height:65px;padding-top:10px;">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img class="admin-logo" src="<?=base_url()?>assets/images/logo2.png"></a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="Admin/Logout" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Logout <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a href="<?=base_url()?>Admin/logout"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar" style="padding-top: 25px;">
		
		<ul class="nav menu">
			<li><a href="tables.html"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> Book List</a></li>

			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg> Product </span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="<?=base_url()?>Admin/Product">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> All Car
						</a>
					</li>
					<li>
						<a class="" href="<?=base_url()?>Admin/Product/cartype">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Car Type
						</a>
					</li>
					
				</ul>
			</li>
			
			<li><a href="tables.html"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Package</a></li>
			<li><a href="forms.html"><svg class="glyph stroked tablet"><use xlink:href="#stroked-tablet-1"/></use></svg> Contact</a></li>
			<li><a href="panels.html"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Profile</a></li>
			<li><a href="<?php echo base_url();?>Admin/Account"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Account</a></li>
			<li><a href="icons.html"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Settings</a></li>
			
			
		</ul>
		<div class="attribution">Template by <a href="http://www.medialoot.com/item/lumino-admin-bootstrap-template/">Medialoot</a><br/><a href="http://www.glyphs.co" style="color: #333;">Develop by Santika</a></div>
	</div><!--/.sidebar-->
		