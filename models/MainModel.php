<?php 

class MainModel extends CI_Model
{
    public function __construct()
	{
		parent::__construct();
        
        $this->contact_us = trade_contact;
        
	}

    public function contact($data)
    {
        if(!empty($data))
        {
        return $this->db->insert($this->contact_us, $data);
        }
    }

}


?>