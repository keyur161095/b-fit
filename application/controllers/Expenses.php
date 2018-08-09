<?php
 /**
  *
  */
 class Expenses extends CI_Controller
 {

   // function __construct()
   // {
   //   // code...
   // }

   public function add_expenses_view()
   {
     $this->load->view('add_expenses');
   }

   public function submit_expense()
   {
     $data = array(
       'type' => $this->input->post('expenseType'),
       'amount' => $this->input->post('expenseAmount'),
       'date' => $this->input->post('date')
     );
     $this->db->insert('expenses', $data);
     $this->session->set_flashdata('AddExpense', 'New Expenses has been added');
     $this->load->view('add_expenses');
   }


 }

 ?>
