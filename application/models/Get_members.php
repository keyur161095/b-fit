<?php

class Get_members extends CI_Model
{

  public function all_members()
  {
    // $query = $this->db->query("SELECT concat(fname ,' ', lname) as name
    //                                   ,weight
    //                                   ,birth_date
    //                                   ,mobile_number
    //                                   ,join_date
    //                                   ,plan
    //                                   FROM members");
    // return $query->row();

    $results = array();
    $this->db->select('fname, weight, birth_date, mobile_number, join_date, plan');
    $this->db->from('members');

    $query = $this->db->get();

    if($query->num_rows() > 0) {
        $results = $query->result();
    }
    return $results;
  }

}

?>
