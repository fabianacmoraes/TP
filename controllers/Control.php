<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {
	
	public function index(){
		$this->load->view('index');
	}
	
	public function empresa(){
		$this->load->view('empresa');
	}
	
	public function servicos(){
		$this->load->view('servicos');
	}
	
	public function links(){
		$this->load->view('links');
	}
	
	public function blog(){
		require_once APPPATH."models/insere-blog.php";
	    $this->load->model('model');
	    $m = $this->model;
	    $posts = $m->searchAll2();
	    $data['posts']=$posts;
		$this->load->view('blog',$data);
	}
	
	public function contato(){
		$this->load->view('contato');
	}
	
	public function sucesso(){
		$this->load->view('sucesso');
	}
	
	public function login(){
		$this->load->view('login');
	}
	
	public function adm(){
		$a = $this->session->userdata("_ID");
		if($a === "admin"){
		    $this->load->view('adm');
		} else{
		    echo "<h1>Voce nao esta autorizado para ver esta pagina</h1>";
		}
	}
	
	public function home(){
		$this->load->view('home');
	}
	
	public function paginas(){
		$this->load->view('paginas');
	}
	
	public function doPost(){
		$this->load->view('sucesso');
		require_once APPPATH."models/user.php";
		$this->load->model('model');
		$m = $this->model;
		$m->insert(new Usuario($_POST["nome"],$_POST["telefone"],$_POST["email"],$_POST["assunto"],$_POST["mensagem"]));
	}
	
	public function doPost2(){
		$this->load->view('paginas');
		require_once APPPATH."models/insere-blog.php";
		$this->load->model('model');
		$m = $this->model;
		$m->insert2(new Blog($_POST["titulo"],$_POST["data"],$_POST["texto"]));
	}
	
	public function listar(){
	    require_once APPPATH."models/user.php";
	    $this->load->model('model');
	    $m = $this->model;
	    $usuarios = $m->searchAll();
	    $data['usuarios']=$usuarios;
	    $this->load->view('lista',$data);
	}
	
	public function auth(){
	    $nome = $_POST["nome"];
        $senha = $_POST["senha"];
        $this->load->model("model");
        $usr = $this->model->getUser($nome,$senha);
        if($usr !== false){
            if($usr === "admin"){
                $this->session->set_userdata("_ID","admin");
                redirect("/control/home");
            }else{
                $this->session->set_userdata("_ID","comum");
                $this->session->set_userdata("_NOME",$nome);
                redirect("/control/login");
            }
        }else{
            redirect("/control/login");
        }
    }
    
    public function logout(){
		$this->load->view('logout');
		$this->session->unset_userdata("_ID");
		$this->session->unset_userdata("_NOME");
	}
}