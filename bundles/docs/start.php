<?php


/**
 * Load the Markdown library.
 */

if ( ! defined('Parsedown'))
{
	require_once Bundle::path('docs').'/libraries/parsedown.php';
}

/**
 * Get the root path for the documentation Markdown.
 *
 * @return string
 */
function docs_root($bundle)
{
	$dir = Bundle::path($bundle).'docs/';

	switch (true)
	{
		case is_dir(Bundle::path($bundle).'docs/') :
			return Bundle::path($bundle).'docs/';
			break;
		case is_dir(Bundle::path($bundle).'documentation/') :
			return Bundle::path($bundle).'documentation/';
		case DEFAULT_BUNDLE === $bundle && is_dir(path('sys').'documentation/') :
			return path('sys').'documentation/';
			break;
	}

	return null;
}

/**
 * Get the parsed Markdown contents of a given page.
 *
 * @param  string  $page
 * @return string
 */
function docs_document($bundle, $page)
{
	return with(new Parsedown)->text(file_get_contents(docs_root($bundle).$page.'.md'));
}

/**
 * Determine if a documentation page exists.
 *
 * @param  string  $page
 * @return bool
 */
function docs_document_exists($bundle, $page)
{
	return file_exists(docs_root($bundle).$page.'.md');
}

/**
 * Attach the sidebar to the documentation template.
 */
View::composer('docs::template', function($view)
{
	$sidebar = '';

	if (docs_document_exists($view->bundle, 'contents'))
	{
		$sidebar = docs_document($view->bundle, 'contents');
	}

	$view->with('sidebar', $sidebar);
});