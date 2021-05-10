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

    public function share(){
        require_once 'views/layouts/header.php';
        require_once 'views/campaign/share.php';
        require_once 'views/layouts/footer.php';

        $campaignManager = new CampaignManager();
        $campaign = $campaignManager->getCampaign($_GET['id']);
        echo json_encode($campaign);;
        return $campaign;
    }

}
