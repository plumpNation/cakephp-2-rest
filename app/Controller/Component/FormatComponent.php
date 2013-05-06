<?php
App::uses('Component', 'Controller');

class FormatComponent extends Component {
    public function response($rawResponse, $model) {
        return Set::format();
    }
}
