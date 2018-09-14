<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Firebase extends CI_Controller {


	public function index()
	{
		$this->load->myview('public/firebase','home.php'); 

	}
    public function upload()
    {
     $this->load->myview('public/firebase','fire_base_upload.php');   
    }
     public function download()
    { 
     $this->load->myview('public/firebase','fire_base_download.php');   
    }
    public function downloadJson()
    { 
     $this->load->myview('public/firebase','fire_base_download_json.php');   
    }
     public function downloadJsonUsingPhp()
    { 

   //$this->load->library('Curl');
   //$this->curl->create('https://firebasestorage.googleapis.com/v0/b/fir-realtime-db-d57fc.appspot.com/o/Json%2Fdata.json?alt=media&token=dfaa9c0b-8d83-43bc-9e98-1e8853d05d2d');
    //$data = $this->curl->execute();
    //To Display Returned Data
    $this->load->driver('cache');
    $cache_data=$this->cache->file->get('contacts');
    var_dump($this->cache->file->cache_info);
    var_dump($cache_data);
    }
    public function downloadJsonUsingPhp1()
    { 
      $this->load->driver('cache');
      
     if ( ! $cache_data = $this->cache->get('contacts'))
     {
            $this->load->library('Curl');
            $this->curl->create('https://firebasestorage.googleapis.com/v0/b/fir-realtime-db-d57fc.appspot.com/o/Json%2Fdata.json?alt=media&token=dfaa9c0b-8d83-43bc-9e98-1e8853d05d2d');
            $data = $this->curl->execute();
            //echo $data;
           var_dump($this->cache->file->save('contacts',$data,0));
            echo $this->cache->file->get('contacts');
          //$cache_data=$this->cache->file->get('contacts');
          //var_dump($this->cache->file->cache_info());
     }
     //return $cache_data; 

   /*$data=parse_url('https://firebasestorage.googleapis.com/v0/b/fir-realtime-db-d57fc.appspot.com/o/Json%2Fdata.json?alt=media&token=dfaa9c0b-8d83-43bc-9e98-1e8853d05d2d');
   echo json_encode($data); */ 
    }
   public function readDB()
    {
     $this->load->myview('public/firebase','read_db.php');   
    }
   public function writeDB()
    {
     $this->load->myview('public/firebase','write_db_1.php');   
    }
   public function checkConnectivity()
   {
    $this->load->myview('public/firebase','test_internet.php');   
   }
}

