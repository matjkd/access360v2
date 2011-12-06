<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Gallery_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function Gallery_model() {

        parent::Model();

        $this->gallery_path = './images/uploads';
        $this->gallery_path_url = base_url() . 'images/uploads/';
    }

    function do_upload($id) {

    
        
         $this->gallery_path = './images/uploads';
        $this->gallery_path_url = base_url() . 'images/uploads/';
        
        $config = array(
            'allowed_types' => 'jpg|jpeg|gif|png',
              'upload_path' =>  $this->gallery_path,
            'max_size' => 2000
        );

        $this->load->library('upload', $config);
        if( ! $this->upload->do_upload()){
          
            $error = array('error' => $this->upload->display_errors());
              
              print_r($config);
            print_r($error);
        }
        else
        {
            echo 3;
              $image_data = $this->upload->data();
        }
    


        //resize the images
        $config = array(
            'source_image' => $image_data['full_path'],
           'new_image' => $this->gallery_path . '/thumbs',
            'maintain_ratio' => true,
            'width' =>300,
            'height' => 200
        );

        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
        $this->image_lib->clear();


       
        $upload_data = array($this->upload->data());

        foreach ($upload_data as $row):

            // add this to database $row['file_name'];
            $new_image_data = array(
                'news_image' => $row['file_name'],
              
              
            );

        if($row['file_name']!=NULL){
            $this->db->where('content_id', $id);
            $this->db->update('content', $new_image_data);
        }

        endforeach;
    }

}