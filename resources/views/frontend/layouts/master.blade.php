<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="theme-color" content="#ffffff">
  	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}" />

	<title>Жулдызай Спартакиада</title>
  
  	<link href="https://fonts.googleapis.com/css?family=Poppins:200,200i,400,600,700" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="/fonts/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/A.main.css.pagespeed.cf.lSoq4EEa3z.css">

</head>
<body class="light">
	<div class="wrapper">
		<header class="header">
			@include('frontend.partials._header')
		</header>
			@include('frontend.partials._svg')
		<div class="content" id="content">
			@yield('content')
		</div>
	</div>
	<footer class="footer">
		@include('frontend.partials._footer')
	</footer>
	

	<script src="/js/vendor/jquery.js.pagespeed.jm.29OAZzvhfX.js"></script>
	<script src="/js/vendor/jquery.magnific-popup.min.js+jquery.validate.min.js+map-dark.js.pagespeed.jc.s7zmtXUOWI.js"></script><script>eval(mod_pagespeed_quqGqncorR);</script>
	<script>eval(mod_pagespeed_rkvQPayWJi);</script>
	<script>eval(mod_pagespeed_2HPBan8Lse);</script>
	<script src="/js/vendor,_swiper.jquery.min.js+main.js.pagespeed.jc.FGVjyljmUX.js"></script>
	<script>eval(mod_pagespeed_ldDTB64h9g);</script>
	<script>eval(mod_pagespeed_dtPOymzkwl);</script>
</body>
</html>