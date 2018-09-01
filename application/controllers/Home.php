<?php defined('BASEPATH') OR exit('no direct script is allowed');?>

<?php
/**
 *
 */
class Home extends CI_Controller
{
  public function index()
  {
    $data['total_members'] = $this->db->where('status', 1);
    $data['total_members'] = $this->db->get('members')->num_rows();

    $result = $this->db->query('SELECT * FROM members WHERE MONTH(join_date) = MONTH(CURRENT_DATE()) AND YEAR(join_date) = YEAR(CURRENT_DATE())');

    $data['members_added_in_current_month'] = $result->num_rows();

    $this->load->view('dashboard', $data);
  }


}
