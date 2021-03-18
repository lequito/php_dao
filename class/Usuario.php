<?php

class Usuario {
   private $id;
   private $nome;
   private $email;
   
   public function getId() {
       return $this->id;
   }

   public function getNome() {
       return $this->nome;
   }

   public function getEmail() {
       return $this->email;
   }

   public function setId($id) {
       $this->id = $id;
   }

   public function setNome($nome) {
       $this->nome = $nome;
   }

   public function setEmail($email) {
       $this->email = $email;
   }

   public function loadById($id){
       $sql = new Sql();
       
       $results = $sql->select("SELECT * FROM usuarios WHERE id = :ID ", array(
           ":ID"=>$id
       ));
       
       if (count($results) > 0) {
           $row = $results[0];
           
           $this->setId($row['id']);
           $this->setNome($row['nome']);
           $this->setEmail($row['email']);
       }
   }

   public function __toString(){
       return json_encode(array(
           "id"=> $this->getId(),
           "nome"=> $this->getNome(),
           "email"=> $this->getEmail()
       ));
   }
   
}
