<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_portofolio extends CI_Model
{
    public function SemuaData()
    {
        return $this->db->get('tbl_portofolio')->result_array();
    }
}
