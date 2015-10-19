<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MY_Controller {
	
	public function index()
	{
		
		$this->load->model('news_model');

		$this->load->library('pagination');


        $this->pagination->initialize(
        	array(
        		'base_url' => site_url('news/index'), 
    			'total_rows' => $this->news_model->record_count()
			)
		);

        $this->debugbar['messages']->addMessage($this->pagination);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 1;
        $this->data["newses"] = $this->news_model->fetch_news($this->pagination->per_page, $page);
        $this->data["links"] = $this->pagination->create_links();

		//Render view
		$this->load->view('partials/header', $this->data);
		$this->load->view('news/list', $this->data);
		$this->load->view('partials/footer');
	}

}
