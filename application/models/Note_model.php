<?php
class Note_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    public function set_note()
    {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'slug' => $slug
        );

        return $this->db->insert('note', $data);
    }

    public function get_note($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('note');
            return $query->result_array();
        }

        $query = $this->db->get_where('note', array('slug' => $slug));
        return $query->row_array();
    }

    public function get_last_note()
    {
        $query = $this->db->order_by('id', 'DESC')->get('note');
        return $query->row_array();
    }
}