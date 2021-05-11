<?php

//include ("../models/CampaignManager.php");
require_once( 'C:\xampp\htdocs\Teespring2\models\CampaignManager.php');

class shareCampaignController{

    public function shareCampaignManager($campaignId, $userID){
        $campaignManager = new CampaignManager();

        return $campaignManager->getCampaign($campaignId, $userID);
    }

    public function index(){                
        require_once 'views/layouts/header.php';
        require_once 'views/campaign/index.php';
        require_once 'views/layouts/footer.php';
    }
    //consultar y luego mostrar la informacion en el formulario
    public function edit(){

        $campaignManager = new CampaignManager();
        $campaign = $campaignManager->getCampaign($_GET['id']);

        require_once 'views/layouts/header.php';
        require_once 'views/campaign/edit.php';
        require_once 'views/layouts/footer.php';
    }

    public function update(){
        $_POST['id'] = $_GET['id'];
        $campaignManager = new CampaignManager();
        $campaign = $campaignManager->getCampaign($_GET['id']);

        if($campaignManager->update_register($_POST)){
            header('location:?controller=shareCampaign');
        }else{
            die('Error al actualizar');
        }
    }

    public function all(){
        $campaignManager = new CampaignManager();
        return $campaignManager->all();
    }

    public function campaignid($id){
        $campaignManager = new CampaignManager();
        return $campaignManager->campaignid($id);
    }

    public function share(){
        $campaignManager = new CampaignManager();
        $campaign = $campaignManager->getCampaign($_GET['id']);

        require_once 'views/layouts/header.php';
        require_once 'views/campaign/campaign.php';
        require_once 'views/layouts/footer.php';
    }

    public function copy(){
        return "Holi";
    }

    public function create(){
        require_once 'views/layouts/header.php';
        require_once 'views/campaign/create.php';
        require_once 'views/layouts/footer.php';
    }

    public function store(){
        $campaignManager = new CampaignManager();
        $campaignManager->register($_POST) ? header('location: ?controller=shareCampaign') : 'Error en el registro';
    }

    public function delete(){
        $campaignManager = new CampaignManager();
        $_POST['id'] = $_GET['id'];
        $campaign = $campaignManager->delete($_POST['id']) ? header('location: ?controller=shareCampaign') : 'Error al eliminar Campaña';
    }

}
