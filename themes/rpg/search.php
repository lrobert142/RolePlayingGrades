<?php
$templates = array( 'pages/search.twig', 'pages/archive.twig', 'pages/index.twig' );
$context = Timber::get_context();

$context['title'] = 'Search results for '. get_search_query();
$context['posts'] = Timber::get_posts();

Timber::render( $templates, $context );
