<?php
App::uses('AppController', 'Controller');
/**
 * SkillTalents Controller
 *
 * @property SkillTalent $SkillTalent
 */
class SkillTalentsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SkillTalent->recursive = 0;
		$this->set('skillTalents', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->SkillTalent->id = $id;
		if (!$this->SkillTalent->exists()) {
			throw new NotFoundException(__('Invalid skill talent'));
		}
		$this->set('skillTalent', $this->SkillTalent->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SkillTalent->create();
			if ($this->SkillTalent->save($this->request->data)) {
				$this->Session->setFlash(__('The skill talent has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The skill talent could not be saved. Please, try again.'));
			}
		}
		$users = $this->SkillTalent->User->find('list');
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
		$this->SkillTalent->id = $id;
		if (!$this->SkillTalent->exists()) {
			throw new NotFoundException(__('Invalid skill talent'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SkillTalent->save($this->request->data)) {
				$this->Session->setFlash(__('The skill talent has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The skill talent could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->SkillTalent->read(null, $id);
		}
		$users = $this->SkillTalent->User->find('list');
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
		$this->SkillTalent->id = $id;
		if (!$this->SkillTalent->exists()) {
			throw new NotFoundException(__('Invalid skill talent'));
		}
		if ($this->SkillTalent->delete()) {
			$this->Session->setFlash(__('Skill talent deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Skill talent was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
