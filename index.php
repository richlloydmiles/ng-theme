<?php /**
 * Index Template
**/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hello NG</title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">
	<?php wp_head(); ?>
</head>
<body ng-app="themeapp" >
	<div class="app" ng-controller="themecontroller" ng-init="load()">
		<div class="container">
			<header ng-include="'<?php echo get_stylesheet_directory_uri(); ?>/partials/header.html'">
			</header>
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Brand</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li ng-repeat="page in pages">
								<a href ng-click="goto(page.slug)" >{{ page.title }}</a>
							</li>
						</ul>


					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
			<div ng-view></div>
			<footer ng-include="'<?php echo get_stylesheet_directory_uri(); ?>/partials/footer.html'">
			</footer>	
		</div>
	</div>
	<?php wp_footer(); ?>
</body> 
</html>


