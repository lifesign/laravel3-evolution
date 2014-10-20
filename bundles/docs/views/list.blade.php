<h2>Available Documentation</h2>
<ul>
@foreach ($bundles as $bundle)
	<li><a href="{{ URL::to('/docs/'.$bundle.'/home') }}">
    {{ Str::title($bundle == DEFAULT_BUNDLE ? 'laravel' : $bundle) }}
    </a></li>
@endforeach
</ul>