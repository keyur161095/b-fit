<?php defined('BASEPATH') OR exit('no direct script is allowed');?>

<?php
/**
 *
 */
class Home extends CI_Controller
{
  public function index()
  {
    // Total active members
    $data['total_members'] = $this->db->where('status', 1);
    $data['total_members'] = $this->db->get('members')->num_rows();

    //New members added in current month
    $result = $this->db->query('SELECT * FROM members WHERE MONTH(join_date) = MONTH(CURRENT_DATE()) AND YEAR(join_date) = YEAR(CURRENT_DATE())');
    $data['members_added_in_current_month'] = $result->num_rows();

    //Total members all time (Active + Inactive)
    $data['total_members'] = $this->db->get('members')->num_rows();

    $this->load->view('dashboard', $data);
  }

  //Total expense this month
  // $data['$total_expense_this_month'] = $this->db->query('SELECT SUM(amount) FROM expenses WHERE MONTH(date) = MONTH(CURRENT_DATE) AND YEAR(date) = YEAR(CURRENT_DATE)');


  // $this->db->select_sum('amount');
  // $this->db->from('expenses');
  // // $this->db->where('MONTH(date)', 'MONTH(CURRENT_DATE())');
  // $data['$total_expense_this_month'] = $this->db->get();
  // $this->load->view('dashboard', $data);


}
?>
