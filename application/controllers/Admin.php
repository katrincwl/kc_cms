<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Admin_Controller {

	public $data = null;


	public function index(){
		// Available header params: page_title, meta_description, meta_keywords, og_title, og_description, og_type, og_image
		$this->data["page_title"] = "KC Admin Panel";
		$this->data["meta_description"] = "KC Admin Panel";

		$this->data["custom_js"] = array("public/js/tinymce/tinymce.min.js","public/js/tinymce/jquery.tinymce.min.js");
		$this->data["custom_css"] = array("public/css/admin/sidebar.css");
		$this->load->view('partials/admin_header', $this->data);
		$this->load->view('admin/index', $this->data);
		$this->load->view('partials/admin_footer', $this->data);
	}



	/************************************** Company news related function **************************************/
	/* Render a form for creating the news */
	public function create_news()
	{
		$this->load->model('news_model');

		$this->data['page_title'] = 'Admin Panel - Create news';

		$this->data["custom_js"] = array('bottom' => array("public/js/tinymce/tinymce.min.js","public/js/tinymce/jquery.tinymce.min.js",
		 	"bower_components/moment/min/moment.min.js", 
		 	"bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js",
		 	"bower_components/blueimp-file-upload/js/vendor/jquery.ui.widget.js",
		 	"bower_components/blueimp-file-upload/js/jquery.fileupload.js",
		 	"public/js/admin/news/create.js"));
		$this->data["custom_css"] = array("public/css/admin/sidebar.css", 
			"bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css",
		 	"bower_components/blueimp-file-upload/css/jquery.fileupload.css");


		$this->data['publish_date'] = mysql_datetime();
		$this->data['title'] = 'Create a news';
		$this->load->view('partials/admin_header', $this->data);
		$this->load->view('admin/news/create', $this->data);
		$this->load->view('partials/admin_footer', $this->data);

	}


	public function list_news(){
		//Retrieve all news
		$this->load->model('news_model');
		$n_query = $this->news_model->get_all_news();
		$newses = $n_query->custom_result_object('NewsEntity');
		$this->data["newses"] = $newses;


		$this->data["page_title"] = "Admin Panel - List of news";
		$this->data["meta_description"] = "KC Admin Panel";

		$this->data["custom_js"] = array("bottom" => array("bower_components/datatables/media/js/jquery.dataTables.min.js", "bower_components/jquery-confirm2/dist/jquery-confirm.min.js"));
		$this->data["custom_css"] = array("public/css/admin/sidebar.css", "bower_components/datatables/media/css/jquery.dataTables_themeroller.css", "bower_components/jquery-confirm2/dist/jquery-confirm.min.css");
		$this->load->view('partials/admin_header', $this->data);
		$this->load->view('admin/news/list', $this->data);
		$this->load->view('partials/admin_footer', $this->data);

	}

	public function edit_news($id){
		//Get the news for update
		$this->load->model('news_model');
		$n_query = $this->news_model->get_news_by_id(array($id));
		$newses = $n_query->custom_result_object('NewsEntity');

		$this->data["page_title"] = "Admin Panel - Update news";
		$this->data["meta_description"] = "KC Admin Panel";
		$this->data["custom_js"] = array("bottom" => array("public/js/tinymce/tinymce.min.js","public/js/tinymce/jquery.tinymce.min.js",
		 	"bower_components/moment/min/moment.min.js", 
		 	"bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js",
		 	"public/js/admin/news/create.js"));
		$this->data["custom_css"] = array("public/css/admin/sidebar.css", 
			"bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css");
			
		$this->load->view('partials/admin_header', $this->data);

		if ($newses != null){
			$news = $newses[0];
			$this->data['id'] = $news->id;
			$this->data['publish_date'] = $news->publish_date;
			$this->data['news_title'] = $news->title;
			$this->data['content'] = $news->content;
			$this->data['title'] = "Update news";

			$this->load->view('admin/news/edit', $this->data);
		}else{
			$this->load->view('admin/news/not_found', $this->data);
		}
		$this->load->view('partials/admin_footer', $this->data);

	}

	public function save_news($id = null){
		$this->load->model('news_model');
		$this->news_model->set_news($id);
		redirect('admin/list_news','refresh');
	}
	
	public function delete_news(){
		$nid = $this->input->get_post('id');
		$this->load->model('news_model');
		echo $this->news_model->delete_news($nid);
	}
}
