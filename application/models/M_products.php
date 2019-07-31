<?php

class M_products extends CI_Model

{
    public function insert($table, $data)
    {
        $query = $this->db->insert($table, $data);
        // INSERT INTO table VALUE ?????
        return $query;
    }
}
