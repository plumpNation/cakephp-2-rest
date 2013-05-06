<?php
class BooksController extends AppController {

    public function index() {
        $books = $this->Book->find('all');
        $this->set('books', Set::map($books));
        $this->set('_serialize', 'books');
    }

    public function view($id) {
        $book = $this->Book->findById($id);
        $this->set(array(
            'book' => $book,
            '_serialize' => array('book')
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
