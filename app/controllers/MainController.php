<?php

namespace app\controllers;

use wfm\Controller;

class MainController extends Controller
{

	public function indexAction() {
		$names = $this->model->getNames();
		$this->setMeta( 'Main page', 'description' ); 
		$this->set( compact('names') ); 
	}

}