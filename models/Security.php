<?php

class Security extends Database{

    public function validateLogin($email){
        try{
            $result = parent::connect()->prepare("SELECT * FROM  users WHERE email = ?");
            //Vincula un parámetro al nombre de variable especificado
            $result->bindParam(1, $email, PDO::PARAM_STR);
            $result->execute();
            //Obtiene la siguiente fila de un conjunto de resultados
            return $result->fetch();
        }catch (Exception $e){
            die($e->getMessage());
        }
    }

    public static function verifyUser(){
        if(!isset($_SESSION['user'])) header('location:?method=login');
    }
    
    public function verifyRole($role){
        if(! $role == $_SESSION['user']['role_id']) header('location:?method=login');
    }

}