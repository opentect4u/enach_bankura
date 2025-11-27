<?php

/**
 * /application/core/MY_Loader.php
 *
 */
class Template {
    protected $ci;

    public function __construct() {
        $this->ci =& get_instance();
    }

    public function load($template_name, $vars = array(), $isLogin = false)
    {
        // Log data to confirm it is an array
        // log_message('debug', 'Template library loading view: ' . $template_name);
        // log_message('debug', 'Data: ' . print_r($vars, true));

        // Ensure the vars is passed correctly and is an array
        if (!is_array($vars)) {
            $vars = array();
        }
        
        if($isLogin){
            $this->ci->load->view('templates/login_header', $vars);
            $this->ci->load->view($template_name, $vars);
            $this->ci->load->view('templates/login_footer', $vars);
        }else{
            $this->ci->load->view('templates/header', $vars);
            $this->ci->load->view($template_name, $vars);
            $this->ci->load->view('templates/footer', $vars);
        }
    }
}

?>