<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    public function view_users($dept){
        $this->db->select('userID, username, pass, email, department, role');
        $this->db->from('users');
        $this->db->where('department', $dept);
        $query = $this->db->get();
        return $query->result();
    }

    public function user_details(){
        $this->db->select('userID, username, email, pass, department, role');
        $this->db->from('users');
        $query = $this->db->get();
        return $query->row();
    }

    public function create_user($user){
        $this->db->insert('users',$user);
        return $this->db->insert_id();
    }

    public function update_user($user, $update){
        $this->db->where('userID', $user);
        $this->db->update('users', $update);
        return $this->db->affected_rows();
    }

}

