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
					$this-Session->flash("Saved!")
			}
		}
	}
	public function add(){
		if ($this->request->is('post')){
			$this->request->data['query']['user_id']=$this->Auth->user("id");					
			if($this->Query->save($this->request->data)){
					$this-Session->flash("Saved!")
			}
		}
	}
	public function delete($id){
		$associatedtasks=$this->Tasks->find(string $type="all",
				 array $params = array(
					'condition'=>('query_id'=$$id)
				)
			);
		if($associatedtasks==array()){
			$this->Query->delete($id);
			$this->Session->flash("Success!");
		}
		else{
			$this->Session->flash("Can't delete category if tasks still exist with that category");
		}
	}
}