<?php

class registerUSerController extends User{
    /**
     * Función que se ejecuta siempre que se crea un objeto.
     * Se puede usar para la seguridad de un controlador.
     */
    public function __construct()
    {
        
    }


    //Mostrar toda la informacion
    public function index(){                
        require_once 'views/layouts/header.php';
        require_once 'views/user/create.php';
        require_once 'views/layouts/footer.php';
    }

    // Mostar la vista del formulario
    public function create(){
        require_once 'views/layouts/header.php';
        require_once 'views/user/create.php';
        require_once 'views/layouts/footer.php';
    }

    //'Validaciones e interaccion model
    public function store(){
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        echo parent::register($_POST) ? header('location: ?controller=registerUser') : 'Error en el registro';
    }

    //Validaciones e interaccion model
    public function update(){
        $_POST['id'] = $_GET['id'];
        if(parent::update_register($_POST)){
            header('location:?controller=user');
        }else{
            die('Error al actualizar');
        }
    }

}