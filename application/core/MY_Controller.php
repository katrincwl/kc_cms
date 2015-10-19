<?php

use DebugBar\StandardDebugBar;
/**
 * Author: Mark
 */
class MY_Controller extends CI_Controller{
    public $debugbar;
    function __construct(){
        $this->debugbar = new StandardDebugBar();
        $this->debugbarRenderer = $this->debugbar->getJavascriptRenderer();
        // $this->debugbar->addCollector(new DebugBar\DataCollector\ConfigCollector($this->config->config));
        parent::__construct();
    }
}

class Admin_Controller extends MY_Controller{
    
    function __construct(){
        parent::__construct();
        if (!$this->ion_auth->is_admin()){
            $this->session->set_userdata('refered_from', current_url());
            redirect('auth/login', 'refresh');
        }
    }
}