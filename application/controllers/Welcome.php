<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public $header = null;
	public $data = null;
	public $footer = null;
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->header["page_title"] = "RMORE";

		$this->data["news"] = $this->news_model->get_latest_news();
		
		$this->load->view('partials/header', $this->header);
		$this->load->view('welcome_message');
		$this->load->view('partials/footer');
	}
}
