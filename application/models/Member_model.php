<?php

class Member_model extends CI_Model
{

  public function add($data)
  {
    $this->db->insert('members', $data);
  }

  public function inactivate($id)
  {
    $this->db->where('id', $id);
    $this->db->update('members', array('status' => 0));
  }

}
?>
