<!DOCTYPE html>
<html>
	<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<title><?php echo $title ?></title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="/css/style.css" />

	<script src="/js/additional.js" type="text/javascript"></script>

			<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113588613-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		  gtag('config', 'UA-113588613-1');
		</script>

			<!-- VK Share -->
		<script type="text/javascript" src="https://vk.com/js/api/share.js?95" charset="windows-1251"></script>

		<script src="/js/jquery-1.6.2.js" type="text/javascript"></script>
  	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript">
					if (<?php
				if (!$_COOKIE['width']) $_COOKIE['width'] = 0; echo $_COOKIE['width'] ?> != screen.width) {
					$.ajax({
									url: '/ajax/dimension',
									type: 'POST',
										data: {
								      'width' : screen.width,
								      'height' : screen.height
										}
								});
				}
		</script>

		<!--VK Comments-->
		<script type="text/javascript" src="//vk.com/js/api/openapi.js?151"></script>

		<script type="text/javascript">
		  VK.init({apiId: 6343638, onlyWidgets: true});
		</script>

	</head>
	<body>


		<div id="navigation">
			<ul>
				<li class="logo"><a href="/">Ильвир Закирьянов</a></li>
				<li><a href="/blog">Блог</a></li>
				<li><a href="/cv">События</a></li>
				<li><a href="/cv">Портфолио</a></li>
				<li><a href="/cv">Заказать сайт</a></li>
				<li><a href="/cv">Контакты</a></li>
			</ul>
		</div>

<?php
						$left_sb_name = false;
						$right_sb_name = false;
						$routes = explode('/', $_SERVER['REQUEST_URI']);
						include 'application/views/'.$content_view;
						if ($_COOKIE['width'] >= 1024) {
							if ($left_sb_name) require_once 'sidebars/left_'.$left_sb_name.'.php';
							if ($right_sb_name) require_once 'sidebars/right_'.$right_sb_name.'.php';
						}
?>



		<div class="footer">
			some data
		</div>
<script type="text/javascript">
function closeWindow() {
	$(".windowBlock").remove();
}
</script>
	</body>
</html>
