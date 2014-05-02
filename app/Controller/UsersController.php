<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController{
	public function beforeFilter() {
    parent::beforeFilter();
    // Allow users to register and logout.
    $this->Auth->allow('register', 'login');
}
	public function register(){
		if ($this->request->is('post')) {
	            $this->User->create();
	            if ($this->User->save($this->request->data)) {
	                $this->Session->setFlash(__('The user has been saved'));
	                return $this->redirect(array('action' => 'index'));
	            }
	            $this->Session->setFlash(
	                __('The user could not be saved. Please, try again.')
	            );
	        }
		}
	function login(){
		if ($this->request->is('post')) {
		        if ($this->Auth->login()) {
		            return $this->redirect($this->Auth->redirect());
		        }
		        $this->Session->setFlash(__('Invalid username or password, try again'));
		    }
	}
	function logout(){
 return $this->redirect($this->Auth->logout());
	}
}