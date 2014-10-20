<?php
App::uses('AppModel', 'Model');
/**
 * Measurement Model
 *
 * @property Station $Station
 */
class Measurement extends AppModel {



	public function getLast() {


		$measurement = Cache::read('measurement', 'short');

		if (!$measurement) {
			$measurement = $this->find('first', array(
				'order' => 'id DESC'
			));	

			Cache::write('measurement', $measurement, 'short');
		}
		

		return $measurement;
	}
}
