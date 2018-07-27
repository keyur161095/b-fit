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
    $data['member'] = $this->add_member->add();
    $this->load->view('add-member', $data);
  }

}
