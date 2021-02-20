<?php 

require_once APPPATH . 'third_party/mertcan.saglam/DataAccess/Interfaces/ITodoDal.php';

class MysqlTodoDal implements ITodoDal {

    private $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
    }
    
    public function all(): array
    {
        $todos = $this->ci->db
            ->where('todo_list_status', 1)
            ->get('todo_list');

            if ($todos->num_rows() > 0) 
            {
                return $todos->result_array();
            } else 
            {
                return [];
            }
    }

}