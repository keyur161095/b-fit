<?php defined('BASEPATH') OR exit('No script is directly allowed'); ?>

<?php
/**
 *
 */
class Members extends CI_Controller
{
  public function getAllMembers()
  {
    $config['base_url'] = 'http://localhost/b-fit/index.php?/members/getAllMembers';
    $config['total_rows'] = $this->db->get('members')->num_rows();
    $config['per_page'] = 5;
    $config['num_links'] = 5;


    $this->pagination->initialize($config);

    $data['results'] = $this->db->get('members', $config['per_page'], $this->uri->segment(3));
    $this->load->view('all-members', $data);
  }

  public function addMember()
  {
    $this->load->view('add-member');
  }

  public function submit()
  {
    $data = array(
                  'name' => $this->input->post('name'),
                  'join_date' => $this->input->post('join_date'),
                  'plan' => $this->input->post('plan'),
                  'email' => $this->input->post('email'),
                  'mobile_number' => $this->input->post('contact'),
                  'weight' => $this->input->post('weight'),
                  'address' => $this->input->post('address'),
                  'birth_date' => $this->input->post('birth_date'),
                  'notes' => $this->input->post('notes')
                  );

    $this->member_model->add($data);
    $this->session->set_flashdata('member', 'New member has been added');
    redirect('index.php?/members/getAllMembers');
  }

  public function inactivate_member()
  {
      $id = $this->input->post('member_id');
      $this->member_model->inactivate($id);
      redirect('http://localhost/b-fit/index.php?/members/getAllMembers');
  }

}
