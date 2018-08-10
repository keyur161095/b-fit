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
     $this->load->view('add_expenses', array('error' => ' ' ));
   }

   public function do_upload()
   {
                $config['upload_path']          = BASE_URL.'uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 2000;
                $config['max_height']           = 1000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('billImage'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('add_expenses', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data()
                                      // 'type' => $this->input->post('expenseType'),
                                      // 'amount' => $this->input->post('expenseAmount'),
                                      // 'date' => $this->input->post('date')
                                     );

                        // $this->db->insert('expenses', $data);
                        // $this->session->set_flashdata('AddExpense', 'New Expenses has been added');
                        $this->load->view('all-members');
                }

   }

 }

 ?>
