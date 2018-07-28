<?php defined('BASEPATH') OR exit('No script is directly allowed'); ?>

<?php
/**
 *
 */
class Members extends CI_Controller
{
  public function getAllMembers()
  {
    $data['results'] = $this->get_members->all_members();
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

    $this->add_member->add($data);
    redirect('index.php?/members/getAllMembers');
  }

}
