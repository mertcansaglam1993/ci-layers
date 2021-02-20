<?php 

require_once APPPATH . 'third_party/mertcan.saglam/DataAccess/Mysql/MysqlTodoDal.php';

class TodoManager {

    private $todoDal;

    public function __construct(MysqlTodoDal $todoDal) 
    {
        $this->todoDal = $todoDal;
    }
    
    public function all(): array
    {
        // check token
        return $this->todoDal->all();
    }

}