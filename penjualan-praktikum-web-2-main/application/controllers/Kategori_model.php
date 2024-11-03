<?php defined('BASEPATH') or exit('No direct script access allowed');
class kategori_model extends CI_Model
{
    protected $_table = 'kategori';
    protected $primary = 'id';

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}
