<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class News_model extends CI_Model{
    function __construct(){
        // Call the Model constructor
        parent::__construct();
    }

     public function record_count() {
        return $this->db->count_all("news");
    }

    public function fetch_news($limit, $page) {
        $start = (intval($page) - 1) * intval($limit);
        $this->db->limit($limit, $start);
        $query = $this->db->get("news");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return [];
   }

    /**
     * @return Result set of all news
     */
    function get_all_news(){
        return $this->db->query('select * from news order by created_at desc');
    }

    /**
     * @param array $ids: array of ids
     * @return Result set of news
     */
    function get_news_by_id($ids){
        if (sizeof($ids) == 1){
            return $this->db->select('*')->where('id', $ids[0])->get('news');
        }else{
            return $this->db->select('*')->where_in('id', $ids)->get('news');
        }
    }

    /**
     * @param int $num : number of records to be limit
     * @return Result set of latest news
     */
    function get_latest_news($num = 1){
        return $this->db->select('*')->where('publish_date <', mysql_datetime())->limit($num)->get('news');
    }

    function delete_news($id){
        if ($id == null){
            return SQL_ERROR_NO_PARAM;
        }else{
            // delete related records (CASCADING)
            $this->db->trans_begin();
            $this->db->delete('news', array('id' => $id));
            $this->db->delete('news_images', array('nid' => $id));
            if ($this->db->trans_status() === FALSE)
            {
                $this->db->trans_rollback();
                return SQL_ERROR;
            }else{
                $this->db->trans_commit();
                return SUCCESS;
            }
        }
    }

    public function set_news($id = null)
    {

        $userId = $this->ion_auth->get_user_id();
        $now = mysql_datetime();
        if ($id != null){
            $data = array(
                'title' => $this->input->post('title'),
                'content' => $this->input->post('content'),
                'updated_by' => $userId,
                'updated_at' => $now,
                'publish_date' => $this->input->post('publish_date')
            );

            return $this->db->update('news', $data, array('id' => $id));
        }else{
            $slug = url_title($this->input->post('title'), 'dash', TRUE);
            $data = array(
                'title' => $this->input->post('title'),
                'slug' => $slug,
                'content' => $this->input->post('content'),
                'created_by' => $userId,
                'created_at' => $now,
                'updated_by' => $userId,
                'updated_at' => $now,
                'publish_date' => $this->input->post('publish_date')
                );

            return $this->db->insert('news', $data);
        }
    }
}