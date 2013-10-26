<?php
/**
 * Created by PhpStorm.
 * User: uzytkownikcentrumanaliz
 * Date: 10/26/13
 * Time: 2:46 AM
 */

class InterventionsController extends AppController {
    public $helpers = array(
        'Time',
        'Session',

    );

    public $components = array(
        'Session'
    );

    public function index() {
        $this->paginate = array('limit' =>1);
        $interventions = $this->paginate();
        $this->set(compact('interventions'));
    }

    public function edit($id = null) {
        if(is_null($id)) {
            $this->redirect(array('action' => 'inde'));
        }

        if($this->request->isPost()) {
            $this->Intervention->id = $id;
            $this->Intervention->save($this->data);
            $this->Session->setFlash('Status został zapisany');
            $this->redirect(array('action'=> 'index'));
        }
        $statuses = $this->Intervention->Status->find('list');
        $this->set(compact('id', 'statuses'));
    }

    public function delete($id = null) {
        if(is_null($id)) {
            $this->redirect(array('action' => 'index'));
        }
        $this->Intervention->id = $id;
        $this->Intervention->delete();
        $this->Session->setFlash('Zgłoszenie zostało usunięte');
        $this->redirect(array('action' => 'index'));
    }
}
