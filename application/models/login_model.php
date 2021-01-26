<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{


  public function validate($username, $password)
  {
    $this->db->where('username', $username);
    $this->db->where('pass', $password);
    $result = $this->db->get('users', 1);
    return $result;
  }

  public function validate_pass($password)
  {
    $this->db->where('pass', $password);
    $result = $this->db->get('users', 1);
    return $result;
  }

  /*
 public function validate($username,$password){
    $this->db->select('username', 'pass');
    $array = array('username' => $username, 'pass' => md5($password));
    $this->db->where($array);
    $query = $this->db->get('users', 1);   
    
    return $query;
  }
*/

  public function user_role($username)
  {
    $this->db->select('role');
    $this->db->where('username', $username);
    $query = $this->db->get('users');
    $row = $query->row(0);

    return $row->role;
  }

  public function department($username)
  {
    $this->db->select('department');
    $this->db->where('username', $username);
    $query = $this->db->get('users');
    $row = $query->row(0);

    return $row->department;
  }

  public function username($username)
  {
    $this->db->select('username');
    $query = $this->db->get('users');
    $row = $query->row(0);

    return $row->username;
  }

  public function change_details($id, $details)
  {
    $this->db->where('userID', $id);
    $this->db->update('users', $details);
    return $this->db->affected_rows();
  }

  public function get_user_id($username)
  {
    $this->db->select('userID')->from('users')->where('username', $username);
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      $row = $query->row(0);
      return $row->userID;
    }
  }

  /*public function get_user_role($id)
  {
    $this->db->select('role')->from('users')->where('userID', $id);
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      $row = $query->row(0);
      return $row->role;
    }
  }
  */
}

