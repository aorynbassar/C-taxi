<?php
include("user_module.php");
if($user!=null){
?>

<html>

<?php
$page = 'main';

		if(isset($_GET['page'])){

			if($_GET['page']=='main'){

				$page = 'main';

			}else if($_GET['page']=='page'){

				$page = 'page';

			}else if($_GET['page']=='portfolio'){

				$page = 'portfolio';

			}else if($_GET['page']=='blog'){

				$page = 'blog';

			}else if($_GET['page']=='contact'){

				$page = 'contact';

			}

		}
?>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>Taxi</title>

	

	<style type="text/css" media="all">
		@import url("css/style.css");
		@import url("css/nivo-slider.css");
		@import url("css/custom-nivo-slider.css");
		@import url("css/jquery.fancybox.css");
	</style>
	
	

</head>




<body>
	
	
	
	<div id="bgc">
							
		<div class="wrapper">		






			<div id="header">
				<h2> <?php echo "Welcome ".$user->login;?></h2>
				
				<ul>
					<li><a href="?page=main">Главная</a></li>
					<li><a href="?page=page">О нас</a></li>
					<li><a href="?page=portfolio">Портфолио</a></li>
					<li><a href="?page=blog">Блог</a></li>
					<li><a href="?page=contact">Контакт</a></li>
					<li><a href="index.php">Выйти</a></li>
				</ul>
			</div>		
			
			
			
			
			
			<?php

        	include $page.'.php';

        ?>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			<div id="logos">
				<ul>
					
				</ul>
			</div>	
			
			
			
			
			
			
			
			
			
			<div id="footer">
				
			</div>		
			
			
		
		</div>		
		
	
	</div>




	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="js/jquery.easing.pack.js"></script>
	<script type="text/javascript" src="js/DD_belatedPNG.js"></script>
	<script type="text/javascript" src="js/filter.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	
	
	<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
	<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/enstyled.json?callback=twitterCallback2&amp;count=1"></script>
	
		
</body>
</html>
<?php
}
?>
