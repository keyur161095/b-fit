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
    $data['total_active_members'] = $this->db->where('status', 1);
    $data['total_active_members'] = $this->db->get('members')->num_rows();

    //New members added in current month
    $new_members = $this->db->query('SELECT * FROM members WHERE MONTH(join_date) = MONTH(CURRENT_DATE()) AND YEAR(join_date) = YEAR(CURRENT_DATE())');
    $data['members_added_in_current_month'] = $new_members->num_rows();

    //Total expense this month
    $expense_query = $this->db->query('SELECT SUM(amount) FROM expenses WHERE MONTH(date) = MONTH(CURRENT_DATE) AND YEAR(date) = YEAR(CURRENT_DATE)');
    $data['total_expense_this_month'] = $expense_query->row();

    //Total fess collected this month
    $currentMonth = date("Y-m");
    $qry_total_fee = $this->db->query("SELECT SUM(amount) AS sum FROM `fees` WHERE forMonth LIKE '$currentMonth%'");
    $data['total_fees'] = $qry_total_fee->row_array();

    $this->load->view('dashboard', $data);
  }

}
?>
