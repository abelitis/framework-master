<?php

namespace App\Models;

use CodeIgniter\Model;

class libs_model extends Model
{
    protected $table = 'lib';
    
    // .. other member variables
    protected $db;
    protected $builder;
    
    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table($this->table);
        // OR $this->db = db_connect();
    }

    public function insertdata($data){
        #print_r($data);
        $this->builder->insert($data);
        
    }
}