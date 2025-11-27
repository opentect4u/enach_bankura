<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{
    function login_process($data){
        $this->db->select('id, user_name, user_id, password, user_type, last_login, active_status');
        $this->db->where(array(
            'user_id' => $data['email'],
            'active_status' => 'Y'
        ));
        $query = $this->db->get('md_user');
        // echo $this->db->last_query();exit;
        return $query->row();
    }
}
?>