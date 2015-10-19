<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Pagination Config
 * 
 * Just applying codeigniter's standard pagination config with twitter 
 * bootstrap stylings
 * 
 * @license		http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @author		Mike Funk
 * @link		http://codeigniter.com/user_guide/libraries/pagination.html
 * @email		mike@mikefunk.com
 * 
 * @file		pagination.php
 * @version		1.3.1
 * @date		03/12/2012
 * 
 * Copyright (c) 2011
 */
 
// --------------------------------------------------------------------------
// $config['base_url'] = '';

$config['per_page'] = 2;
$config['uri_segment'] = 3;
$config['num_links'] = 1;
$config['page_query_string'] = false;
$config['use_page_numbers'] = TRUE;
$config['query_string_segment'] = 'page';
// $config['full_tag_open'] = '<nav ><ul class="pager">';
$config['full_tag_open'] = '<nav class="pull-right"><ul class="pagination">';
$config['full_tag_close'] = '</ul></div><!--pagination-->';
$config['first_link'] = '<i class="fa fa-angle-double-left" ></i>';
$config['first_tag_open'] = '<li class="prev page">'; 
$config['first_tag_close'] = '</li>';
$config['last_link'] = '<i class="fa fa-angle-double-right" ></i>';
$config['last_tag_open'] = '<li class="next page">';
$config['last_tag_close'] = '</li>';
$config['next_link'] = '<i class="fa fa-angle-right" ></i>';
$config['next_tag_open'] = '<li class="next page">';
$config['next_tag_close'] = '</li>';
$config['prev_link'] = '<i class="fa fa-angle-left" ></i>';
$config['prev_tag_open'] = '<li class="prev page previous">';
$config['prev_tag_close'] = '</li>';
$config['cur_tag_open'] = '<li class="active"><a href="">';
$config['cur_tag_close'] = '</a></li>';
$config['num_tag_open'] = '<li class="page">';
$config['num_tag_close'] = '</li>';
$config['display_pages'] = true;
// 
$config['anchor_class'] = 'follow_link';
// --------------------------------------------------------------------------
/* End of file pagination.php */
/* Location: ./bookymark/application/config/pagination.php */