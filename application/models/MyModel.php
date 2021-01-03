<?php

/**
 * Created by PhpStorm.
 * User: nahid
 * Date: 1/4/21
 * Time: 12:58 AM
 */
class MyModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->db=$this->load->database('default',TRUE);
    }

    public function getModel()
    {
        return "hello";
    }

    public function connection_test()
    {
        return $rs=$this->db->query('select version()');
    }

}