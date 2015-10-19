<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once '/vendor/fzaninotto/faker/src/autoload.php';

/**
 * Author: Mark
 */
class Faker extends CI_Controller {
    public function news($count = 3){
        $faker = Faker\Factory::create('ja_JP');
        for ($i = 1; $i <= $count; $i++){
            $news = new NewsEntity();
            $news->title = $faker->sentence();
            $news->content = $faker->paragraph();
            $tmpDate = $faker->dateTime()->format('Y-m-d H:i:s');
            $news->created_at = $tmpDate;
            $news->updated_at = $tmpDate;
            $news->publish_date = $tmpDate;
            $news->created_by = 1;
            $news->updated_by = 1;
            $this->db->insert('news', $news);
            print_r($news);
        }
    }


}