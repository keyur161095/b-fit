<?php
/**
 *
 */
class Add_member extends CI_Model
{

  public function add($data)
  {
    $this->db->insert('members', $data);
  }
}

 ?>
