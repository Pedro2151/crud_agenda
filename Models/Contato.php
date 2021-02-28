<?php namespace Models;

use Lib\Model;

class Contato extends Model {
    
    public function __construct ()
    {
        $this->setTable('contato');
        $this->setPrimaryKey('id');
    }

}
