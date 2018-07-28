<?php

class Get_members extends CI_Model
{

  public function all_members()
  {
    $results = array();
    $this->db->select('name, weight, birth_date, mobile_number, join_date, plan');
    $this->db->order_by("time_added", "desc");
    $this->db->from('members');
    $query = $this->db->get();

    if($query->num_rows() > 0) {
    $results = $query->result();
    }
    return $results;
  }

}

?>
