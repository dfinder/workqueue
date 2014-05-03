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
					'condition'=>('query_id'=>$id)
				)
			);
		$query=$this->Query->find(string $type="first",
			 array $params = array('condition'=>('id'=$id)));
		$user_id=$this->Auth->user("id");
		if($associatedtasks==array()){
			if($user_id==$query['Query']['user_id']){
				$this->Query->delete($id);
				$this->Session->flash("Success!");
			}else{
				$this->Session->flash("This isn't your query");
			}
		}
		else{
			$this->Session->flash("Can't delete query if tasks are still associated with it");
		}
	}
}