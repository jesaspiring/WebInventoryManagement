<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Page extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('logged_in') !== TRUE) {
      redirect('login');
    }
    $this->load->model('request_model');
    $this->load->model('login_model');
    $this->load->model('inventory_model');
  }


  public function admin(){
    $this->load->view('admin/admin');
  }

  public function user()
  {
    if ($this->session->userdata('role') == 'Faculty') {
      $data['total_request'] = $this->request_model->countRequest($this->request_model->get_user_id($this->session->userdata('username')));
      $data['total_draft'] =  $this->request_model->countDraftRequest($this->request_model->get_user_id($this->session->userdata('username')));
      $data['processed_request'] = $this->request_model->countProcessedRequest($this->request_model->get_user_id($this->session->userdata('username')));
      $data['delivered_request'] = $this->request_model->countDeliveredRequest($this->request_model->get_user_id($this->session->userdata('username')));
      $data['unread_comments'] = $this->request_model->unread_comments($this->request_model->get_user_id($this->session->userdata('username')));
      $this->load->view('user/home', $data);
    } else if ($this->session->userdata('role') == 'Dean') {
      $data['request_count'] =  $this->request_model->displayUnitRequestNotif();
      $data['unread_comments'] = $this->request_model->unread_comments($this->request_model->get_user_id($this->session->userdata('username')));
      $data['approved'] =  $this->request_model->countApprovedRequest($this->request_model->get_user_id($this->session->userdata('username')));
      $this->load->view('dept_head/home', $data);
    } else {
      echo "Access Denied";
    }
  }

  public function profile()
  {
    if ($this->session->userdata('role') == 'Faculty') {
      $this->load->view('user/profile');
    }else if($this->session->userdata('role') == 'Dean') {
      $this->load->view('dept_head/profile');
    }else if($this->session->userdata('department') == 'Budgeting'){
      $this->load->view('budgeting/profile');
    }else if($this->session->userdata('department') == 'Purchasing'){
      $this->load->view('purchasing/profile');
    }
    else if($this->session->userdata('department') == 'Property Custodian'){
      $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
      $this->load->view('property/profile', $data);
    }
  }

  public function budgeting()
  {
    $data['request_count'] =  $this->request_model->displayBudgetRequestNotif();
    $data['unread_comments'] = $this->request_model->unread_comments($this->request_model->get_user_id($this->session->userdata('username')));
    $data['approved'] =  $this->request_model->countApprovedRequest($this->request_model->get_user_id($this->session->userdata('username')));
   
    $this->load->view('budgeting/home', $data);
  }

  public function purchasing()
  {
    $date = date('F');
    $date_no = date('m');
    $data['unread_comments'] = $this->request_model->unread_comments($this->request_model->get_user_id($this->session->userdata('username')));
    $data['request_count'] =  $this->request_model->displayPurchasingRequestNotif();
    $data['processed'] =  $this->request_model->purchasingTotalProcessed();
    $data['po_count'] =  $this->request_model->poCount();
    $data['month'] = $date;
    $data['monthly_request'] = $this->request_model->monthlyRequest($date_no);
    $this->load->view('purchasing/home', $data);
  }


  public function propertyCust()
  {

    $data['request_count'] =  $this->request_model->displayCustodianRequestNotif();
    $data['inventory_count'] = $this->inventory_model->count_inventory();
    $data['pending'] = $this->inventory_model->count_pending_po();
    $data['no_assigned'] = $this->inventory_model->notAssigned();
    $data['not_recorded'] = $this->inventory_model->notRecorded();
    $this->load->view('property/home', $data);
  }

  public function change_username()
  {
    $username = array('username' => $this->input->post('new_username'));
    $this->login_model->change_details($this->login_model->get_user_id($this->session->userdata('username')), $username);
    $this->session->set_flashdata('msg', 'HElo');
    redirect('login/logout');
  }

  public function change_password()
  {
    $old_pass = MD5($this->input->post('old_pass', TRUE));
    $new_pass = MD5($this->input->post('new_pass', TRUE));
    $confirm_pass = MD5($this->input->post('pass_confirm', TRUE));
    $validate = $this->login_model->validate_pass($old_pass);
    $role = $this->login_model->user_role($this->session->userdata('username'));
    $dept = $this->session->userdata('department');

    if ($validate->num_rows() > 0) {
      if ($new_pass == $confirm_pass) {
        $pass = array('pass' => $confirm_pass);
        $this->login_model->change_details($this->login_model->get_user_id($this->session->userdata('username')), $pass);
        redirect('login/logout');
      } else {
        $this->session->set_flashdata('msg', 'Password do not match');
        redirect('page/profile');
      }
        
        /*
        if ($role == "Faculty" && $dept != "Purchasing" && $dept != "Property Custodian" && $dept != "Budgeting") {
          $this->session->set_flashdata('msg', 'Password do not match');
          redirect('page/profile');
        } else if ($role == "Dean") {
          $this->session->set_flashdata('msg', 'Password do not match');
          redirect('page/profile');
        } else if ($dept == "Purchasing") {
          $this->session->set_flashdata('msg', 'Password do not match');
          redirect('page/profile');
        } else if ($dept == "Property Custodian") {
          $this->session->set_flashdata('msg', 'Password do not match');
          redirect('page/profile');
        }
      }
    } else {

      
      if ($role == "Faculty" && $dept != "Purchasing" && $dept != "Property Custodian" && $dept != "Budgeting") {
        $this->session->set_flashdata('msg', 'Password entered is wrong');
        redirect('page/profile');
      } else if ($role == "Dean") {
        $this->session->set_flashdata('msg', 'Password entered is wrong');
        redirect('page/profile');
      } else if ($dept == "Purchasing") {
        $this->session->set_flashdata('msg', 'Password entered is wrong');
        redirect('page/profile');
      } else if ($dept == "Property Custodian") {
        $this->session->set_flashdata('msg', 'Password entered is wrong');
        redirect('page/profile');
      }
      */
    }
    else{
      $this->session->set_flashdata('msg', 'Password entered is wrong');
        redirect('page/profile');
    }
  }
}
