<?php
class BooksController extends AppController {

    public function index() {
        $books = $this->Book->find('all');
        $this->set('books', Set::map($books));
        $this->set('_serialize', 'books');
    }

    public function view($id) {
        $book = $this->Book->findById($id);
        $this->set('book', Set::map($book));
        $this->set('_serialize', 'book');
    }

    public function add() {
        $saved = $this->Book->save($this->request->data);

        if ($saved) {
            $message = 'Saved';
            $id = $this->Book->getLastInsertId();

        } else {
            $message = 'Error';
            $id = null;
        }

        $this->set(array(
            'message' => $message,
            'id' => $id,
            '_serialize' => array('message', 'id')
        ));
    }

    public function edit($id) {
        $this->Book->id = $id;
        if ($this->Book->save($this->request->data)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));
    }

    public function delete($id) {
        if ($this->Book->delete($id)) {
            $message = 'Deleted';
        } else {
            $message = 'Error';
        }
        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));
    }
}
