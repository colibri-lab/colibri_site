<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model
{
    public function __construct()
	  {
		parent::__construct();
    }

    public function getHomeData()
    {
          // $query = $this->db->get("menu_text");
          // return $query->result_array();
    }

     public function getAbouteData()
    {
          // $query = $this->db->get("about_sec");
          // return $query->result_array();
    }
    public function getServicesData()
    {
          // $query = $this->db->get("solutions");
          // return $query->result_array();
    }
    public function getFeaturesData()
    {
          // $query = $this->db->get("unlimited");
          // return $query->result_array();
    }
    // public function getProjectsData()
    // {
    //       $query = $this->db->get("unlimited");
    //       return $query->result_array();
    // }


}
