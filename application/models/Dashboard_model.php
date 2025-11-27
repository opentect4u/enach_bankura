<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    function dashboard_tnx_data($flag){
        $this->db->select('count(id) tot_col');
        switch ($flag) {
            case 'S':
                $this->db->where('txn_status = "0300"');
                break;
            case 'P':
                $this->db->where('txn_status = "0396"');
                break;
            case 'F':
                $this->db->where('txn_status = "0399"');
                break;
            case 'O':
                $this->db->where('txn_status IN ("0398", "0392")');
                break;
            default:
                $this->db->where('txn_status IN ("0398", "0399", "0392")');
                break;
        }
        $query = $this->db->get('td_transaction');
        // echo $this->db->last_query();exit;
        return $query->result();
    }
}
?>