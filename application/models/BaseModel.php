<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * BaseModel
 */
class BaseModel extends CI_Model{

    // public function __construct() {
    //     parent::__construct();
    // }

    protected $table_name;
    protected $primaryKey;
    
    /**
     * selectData
     *
     * @return void
     */
    public function getData()
    {
        return $this->db->get($this->table_name)->result();
    }
    
    /**
     * getSpecifiedData
     *
     * @param  string $field table column which will be get 
     * @return void
     */
    public function getSpecifiedData($field)
    {
        $this->db->select($field);
        return $this->db->get($this->table_name)->result();
    }
    
    /**
     * findSpecifiedData
     *
     * @param  mixed $parameter parameter where
     * @param  mixed $field table column which will be get 
     * @return void
     */
    public function findSpecifiedData($parameter, $field)
    {
        if ($field) {
            $this->db->select($field);
            return $this->db->get($this->table_name,$parameter)->result();
        }
        return $this->db->get_where($this->table_name,$parameter)->result();
    }
    
    /**
     * insert data to database
     *
     * @param  mixed $data Data which will inserted to targeted database
     * @return void
     */
    public function insert($data)
    {
        $this->db->insert($this->table_name,$data);
    }

        
    /**
     * insertBatch data to database
     * Same as Insert, but this function can inserting up to one data
     * @param  mixed $data $data Data which will inserted to targeted database
     * @return void
     */
    public function insertBatch($data)
    {
        $this->db->insert_batch($this->table_name,$data);
    }

    
    /**
     * update
     *
     * @param  mixed $data  Data which will updated to targeted database
     * @param  mixed $parameter parameter need to be as key, can be associative array
     * @return void
     */
    public function update($data,$parameter)
    {
        // $this->db->set($data);
        $this->db->where($parameter);
        $this->db->update($this->table_name,$data);
    }
    
    /**
     * updateBatch
     * Same as update but this function can be updating up to one data
     * @param  mixed $data Data which will updated to targeted database
     * @param  mixed $parameter parameter need to be as key, can be associative array
     * @return void
     */
    public function updateBatch($data,$parameter)
    {
        $this->db->where($parameter);
        $this->db->update_batch($this->table_name,$data);
    }
    
    /**
     * delete
     *
     * @param  mixed $parameter parameter need to be as key, can be associative array
     * @return void
     */
    public function delete($parameter)
    {
        $this->db->where($parameter);
        $this->db->delete($this->table_name);
    }

    

    
}