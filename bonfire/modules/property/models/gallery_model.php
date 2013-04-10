<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of gallery_model
 *
 * @author Venkat
 */


class Gallery_model extends BF_Model {
    //put your code here
    var $gallery_path;
    var $gallery_path_url;
    
    function Gallery_model()        {
                parent::__construct();
                $this->gallery_path = realpath(APPPATH . '../images');
                echo "Image path : ";
                echo '$this->gallery_path';
                $this->gallery_path_url = base_url().'/images';
            } // end of cnstruct
            
    function do_upload()        {
    
        $config = array(
                   'allowed_types' => 'jpg|jpeg|gif|png',
                    'upload_path' => $this->gallery_path,
                    'max_size' => 2000
        );
            
            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $image_data = $this->upload->data();
            
            $config = array(
                'source_image' => $image_data['full_path'],
                'new_image' => $this->gallery_path. '/images',
                'maintain_ration' => true
            );
            
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
    }   // end of upload function

            
            
    function get_images()           {
                     $files = scandir($this->gallery_path);
                     $files = array_diff($files, array('.','..','thumbs'));
                     
                     $images = array();
                     
                     foreach ($files as $file)
                     {
                         $images = array ( 'url' => $this->gallery_path_url . $file);
                     }
     } // end of get images
                
            
            
}

?>
