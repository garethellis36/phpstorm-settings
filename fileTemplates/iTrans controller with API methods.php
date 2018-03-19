<?php

App::uses("ApiController", "Controller");

class $NAME extends ApiController
{
    public function beforeFilter()
    {
        \$this->Auth->allow([
            //list API methods here
        ]);
    }

}
