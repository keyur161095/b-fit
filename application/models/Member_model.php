<?php

class Member_model extends CI_Model
{


  public function add($data)
  {
    $this->db->insert('members', $data);
  }

  public function inactivate($data)
  {
    $this->db->where('id', $data['id']);
    $this->db->update('members', array('status' => 0, 'reason_fot_leaving' => $data['reason']));
  }

}

?>
