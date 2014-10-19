<?php
App::uses('AppModel', 'Model');
/**
 * Measurement Model
 *
 * @property Station $Station
 */
class Measurement extends AppModel {



	public function getLast() {
		return $this->find('first', array(
			'order' => 'id DESC'
		));
	}
}
