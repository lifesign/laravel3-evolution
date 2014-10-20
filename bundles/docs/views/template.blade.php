<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Laravel: A Framework For Web Artisans</title>
	<meta name="viewport" content="width=device-width">

	{{ HTML::style('bundles/docs/css/style.css') }}
	{{ HTML::script('bundles/docs/js/vendor/modernizr-2.6.2.min.js') }}
</head>
<body>
	<!--[if lt IE 7]>
		<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->
	<div class="wrapper">
		<header>
			<h1>
				{{ Str::title($bundle) }}
			</h1>
		</header>
		<div role="main" class="main">
			<aside class="sidebar">
				{{ $sidebar }}
			</aside>
			<section class="content">
				@yield('content')
				<footer>
					<p>Style fork from <a href="http://github.com/daylerees/docs-reader" title="Documentation reader by Dayle Rees.">Docs reader</a> by <a href="http://daylerees.com" title="Dayle Rees">Dayle Rees</a>.</p>
                </footer>
			</section>
			<div class="clearfix"></div>
		</div>
	</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="{{ URL::to_asset('bundles/docs/js/vendor/jquery-1.8.2.min.js') }}"><\/script>')</script>
	<script src="{{ URL::to_asset('bundles/docs/js/vendor/prettify.js') }}"></script>
	<script src="{{ URL::to_asset('bundles/docs/js/vendor/scroll.js') }}"></script>
	<script src="{{ URL::to_asset('bundles/docs/js/plugins.js') }}"></script>
	<script src="{{ URL::to_asset('bundles/docs/js/main.js') }}"></script>
</body>
</html>
