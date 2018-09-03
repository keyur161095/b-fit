<?php defined('BASEPATH') OR exit('No script is directly allowed'); ?>

<?php
/**
 *
 */
class Members extends CI_Controller
{
  public function getAllMembers() //Active members only
  {
    $config['base_url'] = 'http://localhost/b-fit/index.php?/members/getAllMembers';
    $config['total_rows'] = $this->db->get('members')->num_rows();
    $config['per_page'] = 10;
    $this->pagination->initialize($config);


    $data['results'] = $this->db->where('status', 1);
    $data['results'] = $this->db->order_by('id', 'desc');
    $data['results'] = $this->db->get('members', $config['per_page'], $this->uri->segment(3));
    $this->load->view('all-members', $data);
  }

  public function getInactiveMembers() //inactive members only
  {
    $config['base_url'] = BASE_URL.'members/getInactiveMembers';
    $config['total_rows'] = $this->db->get('members')->num_rows();
    $config['per_page'] = 10;
    $this->pagination->initialize($config);

    $data['results'] = $this->db->where('status', 0);
    $data['results'] = $this->db->get('members', $config['per_page'], $this->uri->segment(3));
    $this->load->view('inactivated_members', $data);
  }



  public function inactivate_member()
  {
    if ($this->input->post('member_id')) {
      $data = array(
        'id'     => $this->input->post('member_id'),
        'reason' => $this->input->post('reason')
      );
        $this->member_model->inactivate($data);
        $this->session->set_flashdata('inactivated', 'Member inactivated');
        redirect('http://localhost/b-fit/index.php?/members/getAllMembers');
    }
    else {
      echo "Something went wrong";
    }

  }

  public function activate_member()
  {
    if ($this->input->post('member_id')) {
      $id = $this->input->post('member_id');
      $this->member_model->activate($id);
      $this->session->set_flashdata('activated', 'Member is now active');
      redirect('http://localhost/b-fit/index.php?/members/getInactiveMembers');
    }
    else {
      echo "something went wrong";
    }

  }

  public function addMember() // load add member view
  {
    $this->load->view('add-member');
  }

  public function submit() // Submit form in add member view
  {
    if ($this->input->post('name')) {
      $data = array(
                    'name' => $this->input->post('name'),
                    'join_date' => $this->input->post('join_date'),
                    'status' => 1,
                    'plan' => $this->input->post('plan'),
                    'email' => $this->input->post('email'),
                    'mobile_number' => $this->input->post('contact'),
                    'weight' => $this->input->post('weight'),
                    'address' => $this->input->post('address'),
                    'birth_date' => $this->input->post('birth_date'),
                    'notes' => $this->input->post('notes')
                    );

      $this->member_model->add($data);
      $this->session->set_flashdata('newMember', 'New member has been added');
      redirect('index.php?/members/getAllMembers');
    }
    else {
      echo "Something went wrong";
    }

  }

  public function addFee()
  {
    if ($this->input->post('member_id')) {
      $memberId = $this->input->post('member_id');
      //To get member id from member table
      $memberIdQry = $this->db->query("SELECT plan FROM members where id = '$memberId'");
      $memberplan = $memberIdQry->row_array();

      //To get member name from member table
      $memberNameQry = $this->db->query("SELECT name FROM members WHERE id = '$memberId'");
      $memberName = $memberNameQry->row_array();

      $data = array(
        'amount'      => $this->input->post('amount'),
        'member_name' => $memberName['name'],
        'member_id'   => $memberId,
        'forMonth'    => $this->input->post('forMonth'),
        'plan'        => $memberplan['plan']
    );
    $this->member_model->addFee($data);
    $this->session->set_flashdata('feeAdded', 'Fee added successfully');
    redirect('index.php?/members/getAllMembers');
    }
    else {
      $memberId = $this->input->post('member_id');
      $qry = $this->db->query("SELECT plan FROM members where id = '$memberId'");
      $memberplan = $qry->row_array();
      var_dump($memberplan);
      echo "something went wrong";
    }
  }

}
