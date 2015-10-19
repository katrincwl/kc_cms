<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends MY_Controller {

	public $data = null;

	public function index()
	{

		$this->load->model('products_model');
		$this->load->model('news_model');

		//Retrieve latest products
		$p_query = $this->products_model->get_latest_products(5);
		$products = $p_query->custom_result_object('ProductEntity');

		//Retrieve latest news
		$n_query = $this->news_model->get_latest_news(3);
		$newses = $n_query->custom_result_object('NewsEntity');

		$this->data['products'] = $products;
		$this->data['newses'] = $newses;
        // Available header params: page_title, meta_description, meta_keywords, og_title, og_description, og_type, og_image
		$this->data["page_title"] = CLIENT_NAME." homepage";
		$this->data["meta_description"] = CLIENT_NAME." Homepage";
		$this->data["meta_keywords"] = CLIENT_NAME.", sport, clothes";

		$this->data['custom_css'] = array('bower_components/owl.carousel/dist/assets/owl.carousel.min.css', 'public/css/home/index.css');

		$this->data['custom_js'] = 
		array('bottom' => array('bower_components/jssor-slider/js/jssor.player.ytiframe.min.js','bower_components/jssor-slider/js/jssor.slider.mini.js',
						'bower_components/owl.carousel/dist/owl.carousel.min.js','public/js/home/index.js', 'public/js/home/slider.js'));
		//Render view
		$this->load->view('partials/header', $this->data);
		$this->load->view('home', $this->data);
		$this->load->view('partials/footer');
	}
}
