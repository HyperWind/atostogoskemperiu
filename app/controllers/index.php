<?php

namespace web\controller;

include_once 'rootController.php';

class index extends rootController {

	private $lang;

	public function __construct($_target, $_root) {

		parent::__construct($_target, $_root);

	}

	private function parseJSONContent() {

		$template_path = $this->contentPath . '/' . $this->lang . '.json';

		if (file_exists($template_path)) {

			$JSON = file_get_contents($template_path);

		} else {

			$JSON = '{"backend_error": "not found"}';

		}

		return json_decode($JSON, true);

	}

	public function lang($lang) {

		$this->lang = $lang;

	}

	protected function twigify($app) {

		$render = $this->parseJSONContent();
		$render = array_merge($render, $this->backlog);
		$render['javascripts'] = $this->includeElement($app, $this->jsPath);
		$render['stylesheets'] = $this->includeElement($app, $this->cssPath);
		$render['images'] = $this->includeElement($app, $this->imagePath);

		if (array_key_exists('backend_error', $render)) {

			return file_get_contents($this->root . '/404.html');

		} else {

			return $app->view()->render($this->template, $render);

		}

	}
	
}