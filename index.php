<?php

require 'vendor/autoload.php';
require 'app/controllers/index.php';
require 'app/controllers/camper.php';

define('ROOT', __DIR__);

$app = new \Slim\Slim(array(
	'debug' => true,
	'mode' => 'development',
	'templates.path' => ROOT . '/app/views',
	'view' => new \Slim\Views\Twig()
));

$app->view()->parserOptions = array(
	'cache' => ROOT . '/public/views'
);

$app->view()->parserExtensions = array(
	new \Slim\Views\TwigExtension()
);

$index = new \web\controller\index('index', ROOT);
$camper = new \web\controller\camper('camper', ROOT);

$app->get('/', function() use($app) {

	$app->redirect($app->urlFor('lang', array('lang' => 'lt')), 301);

});

$app->get('/:lang', function($lang) use($app, $index) {

	$index->lang($lang);

	$index->addArr(array(
		'link_camper' => $app->urlFor('camper', array('lang' => $lang, 'id' => 1)),
		'lt' => $app->urlFor('lang', array('lang' => 'lt')),
		'en' => $app->urlFor('lang', array('lang' => 'en'))
	));

	$index->render($app);

})->name('lang');

$app->get('/:lang/camper/:id', function($lang, $id) use($app, $camper) {

	$camper->lang($lang);

	$camper->addArr(array('link' => $app->urlFor('lang', array('lang' => $lang))));

	$camper->render($app, $id);

})->name('camper');

$app->notFound(function() {

	echo file_get_contents(ROOT . '/404.html');

});

$app->run();
