<?php
    namespace App\Http\Controllers;
    use Request;

    class ClienteController extends Controller{

  
        public function listar(){

            $nomes = array(
                ["id" => "0", "nome" => "Johw",   "email" => "johw@johw.com", "pass"=>"pass"],
                ["id" => "1", "nome" => "Nathan", "email" => "nathan@johw.com", "pass"=>"pass"],
                ["id" => "2", "nome" => "jclima", "email" => "jclima@johw.com", "pass"=>"pass"]
            );

            $data = date("Y-m-d");
            
            if($data > '2019-05-12'){
                $msg = "As instriçoes estão encerradas!";
            } 
                else {
                    $msg = "Preencha o formulário para de inscrição abaixo:";
            }

            return view("lista")->with("msg", $msg)->with("nomes", $nomes);
        } 

        public function cadastrar(){
            
            return view("cadastro");
        }

        public function editar($id){
           // $idParm = Request::route("id");

            return view("edicao")->with("id", $id);
        }
    }

?>