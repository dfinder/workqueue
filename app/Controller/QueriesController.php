<?php
App::uses('AppController', 'Controller');

class QueriesController extends AppController{
	public function beforeFilter{
		parent::beforeFilter();
	}
	public function index(){
		$user_id=$this->Auth->user("id"); //Get user ID
		$queries=$this->Query->find(string $type="all", array $params = array(
				'condition'=>array('user_id'=>$user_id)
			)); //Get Queries
			$this->set(compact('queries')); //Send queries
			$this->
		if ($this->request->is('post')){
				if($this->Query->Task->saveMany($this->request->data)){
					$this-Session->flash
			}
		}
	}
	public function add(){

	}
}