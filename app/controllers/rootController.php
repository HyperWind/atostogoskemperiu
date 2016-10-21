<?php

namespace web\controller;

class rootController {
	
	protected $template, $name, $assets, $cssPath, $jsPath, $contentPath, $imagePath, $root, $backlog;

	public function __construct($_target, $_root) {

		$this->root = $_root;
		$this->name = $_target;
		$this->public = $_root . '/public';
		$this->template = $_target . '/main.twig';
		$this->jsPath = $this->public . '/scripts/' . $_target;
		$this->cssPath = $this->public . '/stylesheets/' . $_target;
		$this->contentPath = $_root . '/app/assets/content/' . $_target;
		$this->imagePath = $this->public . '/images/' . $_target;
		$this->backlog = array();

	}

	protected function twigify($app) {

		return $app->view()->render($this->template, array(
			'javascripts' => $this->includeElement($this->jsPath),
			'stylesheets' => $this->includeElement($this->cssPath)
		));

	}

	public function render($app) {

		echo $this->twigify($app);

	}

	protected function forgePath($path) {

		$diff = str_replace($this->root, '', $path);

		return substr($diff, 1);

	}

	public function addArr($items) {

		$this->backlog = array_merge($this->backlog, $items);

	}

	protected function includeElement($app, $path) {

		$mapped = array();
		$params = $app->router()->getCurrentRoute()->getParams();
		$temp = explode('/', $app->router()->getCurrentRoute()->getPattern());
		$uri = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

		for ($i = 1, $index = 0; $i < count($temp); $i++) {

			if (substr($temp[$i], 0, 1) == ':') {

				$temp[$i] = $params[substr($temp[$i], 1)];
				$index++;

			}

		}

		$pattern = implode($temp, '/');
		$relativePath = str_replace($pattern, '', $uri) . '/';

		if(file_exists($path)) {

			$files = array_diff(scandir($path), array('.', '..'));
	
			foreach ($files as $_ => $val) {
				
				if ($val{0} !== '_') {

					$mapped[$val] = $relativePath . $this->forgePath($path) . '/' . $val;

				}

			}

		}

		return $mapped;

	}
	
}
