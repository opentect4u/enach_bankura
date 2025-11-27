<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('transaction_model');
    }

    function transaction_report(){
        $selected = array(
            'flag' => isset($_GET['flag']) ? $_GET['flag'] : 'S'
        );
        
        $result = $this->transaction_model->local_tnx_dtls($selected, $selected['flag']);

        $data = array(
            'header' => 'Registation Report',
            // 'result' => json_decode($result),
            'result' => $result,
            'selected' => $selected
        );
        $this->template->load('report/mandate', $data);
    }

    function get_transaction_data_ajax($flag){
        $result = $this->transaction_model->local_tnx_dtls('', $flag);
        echo json_encode($result);
    }
}