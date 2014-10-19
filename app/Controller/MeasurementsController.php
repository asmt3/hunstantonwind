<?php
App::uses('AppController', 'Controller');
/**
 * Measurements Controller
 *
 * @property Measurement $Measurement
 * @property PaginatorComponent $Paginator
 */
class MeasurementsController extends AppController {

	var $layout = 'ajax';


	function get_last() {
		$this->response->type('json');
		$measurement = $this->Measurement->getLast();
		$this->set(compact('measurement'));
	}


}
