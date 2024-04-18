<?php
class Note extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('note_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['last'] = $this->note_model->get_last_note();
        $data['notes'] = $this->note_model->get_note();
        $data['page'] = 'note';
		$this->load->view('templates/header', $data);
		$this->load->view('note/index', $data);
		$this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $data['page'] = 'note';
            $this->load->view('templates/header', $data);
            $this->load->view('note/create');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->note_model->set_note();
            redirect('/note/index');
        }
    }

    public function view($slug)
    {
        $data['note'] = $this->note_model->get_note($slug);
        $data['page'] = 'note';
		$this->load->view('templates/header', $data);
		$this->load->view('note/view', $data);
		$this->load->view('templates/footer');
    }

    public function delete($slug)
    {
        $this->db->delete('note', array('slug' => $slug));
        redirect('note/index');
    }

    public function edit($slug)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $data['note'] = $this->note_model->get_note($slug);
            $data['page'] = 'note';
            $this->load->view('templates/header', $data);
            $this->load->view('note/edit', $data);
            $this->load->view('templates/footer');
        }
        else
        {
            $title = $this->input->post('title');
            $content = $this->input->post('content');

            $data = array(
                'title' => $title,
                'content' => $content
            );

            $this->db->where('slug', $slug);
            $this->db->update('note', $data);
            redirect('/note/index');
        }
    }
}