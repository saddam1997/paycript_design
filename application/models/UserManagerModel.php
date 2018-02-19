<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserManagerModel extends CI_Model
{
  //User Register
  public function dataSave($data)
	{
		return $val=$this->db->insert('users', $data);
	}
  //User Listing
  public function listing()
	{
		$data= $this->db->query('SELECT box_id FROM users ORDER BY  `box_id` DESC
LIMIT 1')->result();
		foreach ($data as $key => $row)
		{
			return $row->box_id;
		}
	}
 //user Login
 public function login($data)
	{

		$condition = "email =" . "'" . $data['email'] . "' AND " . "password =" . "'" . $data['password'] . "'";
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {

			return true;

		} else {

			return false;
		}
	}
  //get user details
  public function details_user($value)
	{
		return $query=$this->db->select('*')->where('email', $value)->get('users')->result();

	}

  //echeck email existance
  public function emailExist($email)
  {
    $query = $this->db->get_where('users', array('email' => $email));
    $count = $query->num_rows();
    if ($count === 0)
    {
          return FALSE;
    }
    else
    {
      return TRUE;
    }
  }

}

 ?>
