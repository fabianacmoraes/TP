<?php

class Model extends CI_Model{
    public function insert(Usuario $usu){
        $this->db->insert('Usuario', $usu);
    }
    
    public function insert2(Blog $adm){
        $this->db->insert('Blog', $adm);
    }

    public function deletar($id){
        $this->db->where('id', $id);
        return $this->db->delete('Blog');
    }
      
    public function searchAll2(){ 
        $query=$this->db->query("Select * from Blog");
        return $query->result();
    }
    
    public function searchAll(){
        $query=$this->db->query("Select * from Usuario");
        return $query->result();
    }
    
    public function getUser($nome,$senha){
        $this->db->where('nome',$nome);
		$this->db->where('senha',$senha);
		$a = $this->db->get('User');
		if ($a->num_rows()>0){
			if($a->row()->nome === "root"){
				return "admin";
			}else{
				return "comum";
			}
		}else{
			return false;
		}
	}
}