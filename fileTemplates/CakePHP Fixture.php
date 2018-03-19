<?php
App::uses("FakerAware", "Test");

class ${NAME} extends CakeTestFixture
{
    use FakerAware;

    public \$import = array('table' => '${TABLE}');

    public \$records;

    public function init()
    {
        //access Faker with $this->faker()->sth
        \$this->records = [
            
        ];

        parent::init();
    }
}
