<?php

namespace app\controllers;

use wfm\Controller;

class PostsController extends Controller
{

	public function indexAction() {
		 $this->setMeta( 'Posts page', 'description' ); 
	}

}