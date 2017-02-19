<?php

namespace zhilchenko\freeradius;

class Module extends \yii\base\Module
{
    /**
     * @var Connection|array|string the DB connection object or the application component ID of the DB connection.
     */
    public $db = 'db';

    public function init()
    {
        parent::init();
    }
}
