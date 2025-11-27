<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('dashboard_model');
    }

    function index(){
        $tot_suc = $this->dashboard_model->dashboard_tnx_data('S');
        $tot_pen = $this->dashboard_model->dashboard_tnx_data('P');
        $tot_fail = $this->dashboard_model->dashboard_tnx_data('F');
        $tot_oth = $this->dashboard_model->dashboard_tnx_data('O');
        // var_dump($tot_suc);exit;
        $data = array(
            'title' => 'Dashboard',
            'header' => 'Dashboard',
            'tot_suc' => $tot_suc[0]->tot_col > 0 ? $tot_suc[0]->tot_col : 0,
            'tot_pen' => $tot_pen[0]->tot_col > 0 ? $tot_pen[0]->tot_col : 0,
            'tot_fail' => $tot_fail[0]->tot_col > 0 ? $tot_fail[0]->tot_col : 0,
            'tot_oth' => $tot_oth[0]->tot_col > 0 ? $tot_oth[0]->tot_col : 0,
        );

        $this->template->load('pages/dashboard', $data);
    }
}
?>