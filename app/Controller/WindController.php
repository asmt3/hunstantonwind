<?php

App::uses('AppController', 'Controller');
App::uses('Xml', 'Utility');

class WindController extends AppController {

	var $layout = 'wind';

	public function display() {
		
	}

	
	public function feed() {
		$url = 'http://www.hunstantonwatersports.com/latest-news/rss/index/store_id/1/';


		$xml = Xml::build($url);
		$feed = (array)$xml;

		$this->set(compact('feed'));
	}

	public function twitter() {
		$url = 'http://www.hunstantonwatersports.com/latest-news/rss/index/store_id/1/';


		$xml = Xml::build($url);
		$feed = (array)$xml;

		$this->set(compact('feed'));
	}
}
