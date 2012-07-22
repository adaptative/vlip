<?php
App::uses('AppController', 'Controller');
/**
 * PhysicalProfiles Controller
 *
 * @property PhysicalProfile $PhysicalProfile
 */
class PhysicalProfilesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PhysicalProfile->recursive = 0;
		$this->set('physicalProfiles', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PhysicalProfile->id = $id;
		if (!$this->PhysicalProfile->exists()) {
			throw new NotFoundException(__('Invalid physical profile'));
		}
		$this->set('physicalProfile', $this->PhysicalProfile->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PhysicalProfile->create();
			if ($this->PhysicalProfile->save($this->request->data)) {
				$this->Session->setFlash(__('The physical profile has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The physical profile could not be saved. Please, try again.'));
			}
		}
		$users = $this->PhysicalProfile->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->PhysicalProfile->id = $id;
		if (!$this->PhysicalProfile->exists()) {
			throw new NotFoundException(__('Invalid physical profile'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PhysicalProfile->save($this->request->data)) {
				$this->Session->setFlash(__('The physical profile has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The physical profile could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PhysicalProfile->read(null, $id);
		}
		$users = $this->PhysicalProfile->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->PhysicalProfile->id = $id;
		if (!$this->PhysicalProfile->exists()) {
			throw new NotFoundException(__('Invalid physical profile'));
		}
		if ($this->PhysicalProfile->delete()) {
			$this->Session->setFlash(__('Physical profile deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Physical profile was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
