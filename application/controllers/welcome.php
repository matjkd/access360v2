<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('captcha_model');
    }

    public function index() {
        $segment_active = $this->uri->segment(2);
        if ($segment_active != NULL) {
            $data['menu'] = $this->uri->segment(2);
        } else {
            $data['menu'] = 'home';
        }

        $data['content'] = $this->content_model->get_content($data['menu']);
        $data['captcha'] = $this->captcha_model->initiate_captcha();
        $data['seo_links'] = $this->content_model->get_seo_links();
        foreach ($data['content'] as $row):

            $data['title'] = $row->title;
            $data['sidebox'] = $row->sidebox;
            $data['metatitle'] = $row->meta_title;
            $data['meta_description'] = $row->meta_desc;
        endforeach;
        $data['sidebar'] = "sidebox/side";
        $data['main_content'] = "global/" . $this->config_theme . "/content";
        $data['cats'] = $this->products_model->get_cats();
        $data['products'] = $this->products_model->get_all_products();
        $data['section2'] = 'global/links';
        if ($this->session->flashdata('message')) {
            $data['message'] = $this->session->flashdata('message');
        }

        $data['slideshow'] = 'header/slideshow';
        $this->load->vars($data);
        $this->load->view('template/main');
    }

    function home() {

        $segment_active = $this->uri->segment(3);
        if ($segment_active != NULL) {
            $data['menu'] = $this->uri->segment(3);
        } else {
            $data['menu'] = $this->uri->segment(1);
        }

        $data['content'] = $this->content_model->get_content($data['menu']);
        $data['captcha'] = $this->captcha_model->initiate_captcha();
        foreach ($data['content'] as $row):

            $data['title'] = $row->title;
            $data['sidebox'] = $row->sidebox;
            $data['metatitle'] = $row->meta_title;

        endforeach;
        $data['sidebar'] = "sidebox/side";
        $data['main_content'] = "global/" . $this->config_theme . "/content";
        //$data['cats'] = $this->products_model->get_cats();
        //$data['products'] = $this->products_model->get_all_products();
        $data['section2'] = 'global/links';
        $data['seo_links'] = $this->content_model->get_seo_links();
        if ($this->session->flashdata('message')) {
            $data['message'] = $this->session->flashdata('message');
        }

        $data['slideshow'] = 'header/slideshow';
        $this->load->vars($data);
        $this->load->view('template/main');
    }

    function main() {
        $segment_active = $this->uri->segment(3);
        if ($segment_active != NULL) {
            $data['menu'] = $this->uri->segment(3);
        } else {
            $data['menu'] = 'home';
        }

        $data['content'] = $this->content_model->get_content($data['menu']);
        $data['captcha'] = $this->captcha_model->initiate_captcha();
        foreach ($data['content'] as $row):

            $data['title'] = $row->title;
            $data['sidebox'] = $row->sidebox;
            $data['metatitle'] = $row->meta_title;

        endforeach;
        $data['mainbody'] = "global/" . $this->config_theme . "/cogs";
        $data['main_content'] = "global/" . $this->config_theme . "/cogs";
        $data['cats'] = $this->products_model->get_cats();
        $data['products'] = $this->products_model->get_all_products();
        $data['section2'] = 'global/links';
        if (isset($this->message)) {
            $data['message'] = $this->message;
        }

        $data['slideshow'] = 'header/slideshow';
        $this->load->vars($data);
        $this->load->view('template/main');
    }

    function ajax_content() {
        $segment_active = $this->uri->segment(3);
        if ($segment_active != NULL) {
            $data['menu'] = $this->uri->segment(3);
        } else {
            $data['menu'] = 'home';
        }
        $data['captcha'] = $this->captcha_model->initiate_captcha();
        $data['content'] = $this->content_model->get_content($data['menu']);
        $this->load->vars($data);
        $this->load->view('template/ajax');
    }

    function send() {
        $this->form_validation->set_rules('name', 'name', 'trim|required');
        $this->form_validation->set_rules('phone', 'phone', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
        $this->form_validation->set_rules('subject', 'subject', 'trim');
        $this->form_validation->set_rules('message', 'message', 'trim');
        $this->form_validation->set_rules('captcha', 'captcha', 'trim|required');

        $data['name'] = $this->input->post('name');
        $data['phone'] = $this->input->post('phone');
        $data['email'] = $this->input->post('email');
        $data['subject'] = $this->input->post('subject');
        $data['message'] = $this->input->post('message');
        $word = $this->input->post('captcha');
        $time = $this->input->post('time');
        $ip_address = $this->input->post('ip_address');

        if ($this->form_validation->run() == FALSE) {


            $this->message = validation_errors();
            $this->main();
        } else {

            // check captcha
            // if it returns true the captcha has failed
            if ($this->captcha_model->check($word, $ip_address, $time)) {
                $this->message = 'The captcha was wrong';
                $this->main();
                // end check captcha	
            } else {



                $config_email = $this->config_email;
                $config_company_name = $this->config_company_name;

                $this->postmark->from($config_email, $config_company_name);

                //echo "from($config_email, $config_company_name)<br/>";	

                $this->postmark->to($config_email);



                $this->postmark->cc('mat@redstudio.co.uk');


                $this->postmark->subject('' . $config_company_name . 'Contact Form');
                $this->postmark->message_html("The contact form has been filled in
					<br/>
					Name: " . $data['name'] . "
                                                                             <br/>
					Phone: " . $data['phone'] . "
					<br/>
					email: " . $data['email'] . "
					<br/>
					subject: " . $data['subject'] . "
				    <br/><br/>
					Message: " . $data['message'] . " 
    			
					");
                $this->postmark->send();

                $this->message = 'Your message has been sent. Thank you.';
                $this->main();
            }
        }
    }

    function news() {
                if ($this->session->flashdata('message')) {
            $data['message'] = $this->session->flashdata('message');
        }
        $id = 'news';
        
        $data['content'] = $this->content_model->get_all_news();
        $data['main_content'] = "global/" . $this->config_theme . "/content";
        $data['title'] = "News";

        $data['page'] = "login";
        $this->load->vars($data);
        $this->load->view('template/main');
    }

    function login() {
        if ($this->session->flashdata('message')) {
            $data['message'] = $this->session->flashdata('message');
        }
        $id = 'login';
        $data['content'] = $this->content_model->get_content($id);
        $data['main_content'] = "user/login_form";
        $data['title'] = "Login to Eagle";

        $data['page'] = "login";
        $this->load->vars($data);
        $this->load->view('template/main');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */