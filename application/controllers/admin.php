<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->model('inventory_model');
    }

    public function index(){
        $this->load->view('admin/admin');
    }

    public function user_accounts(){
        $data['departments'] = $this->inventory_model->display_department();
        $data['dept_choice'] = $this->input->post('department');
        $this->load->view('admin/user_account', $data);
    }
    
    public function department_users(){
        $dept = $this->input->post('department');
        $data['users'] = $this->admin_model->view_users($dept);
        $data['departments'] = $this->inventory_model->display_department();
        $data['dept_choice'] = $dept;
        $data['details'] = $this->admin_model->user_details();
        $this->load->view('admin/view_accounts', $data);
    }

    public function add_user(){
        $name = $this->input->post('username');
        $pass = MD5($this->input->post('pass'));
        $email = $this->input->post('email');
        $dept = $this->input->post('department');
        $role = $this->input->post('role');

        $newUser = array(
            'username' => $name,
            'pass' => $pass,
            'email' => $email,
            'role' => $role,
            'department' => $dept
        );
        $this->admin_model->create_user($newUser);

        redirect('admin/department_users');
    }

    public function update_user(){
        $id = $this->input->post('userID');
        $name = $this->input->post('username');
        $pass = MD5($this->input->post('pass'));
        $email = $this->input->post('email');
        $dept = $this->input->post('department');
        $role = $this->input->post('role');
    }
}
