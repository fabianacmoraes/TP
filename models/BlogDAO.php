<?php
    class BlogDAO extends CI_Model{
        public function insert(Blog $blog){
		    $this->db->insert('Blog',$blog);
	    }
	    
	    public function queryAll(){
	        $res = $this->db->query("Select * from Blog");
	        return $res->result();  
	    }
	    
	    public function queryAdv(){
	        $res = $this->db->query("Select * from Blog where tipoid = 1");
	        return $res->result();
	    }
	    
	    public function queryAdm(){
	        $res = $this->db->query("Select * from Blog where tipoid = 2");
	        return $res->result();
	    }
	    
	    public function queryCont(){
	        $res = $this->db->query("Select * from Blog where tipoid = 3");
	        return $res->result();
	    }
	    
	    public function queryImob(){
	        $res = $this->db->query("Select * from Blog where tipoid = 4");
	        return $res->result();
	    }
    }