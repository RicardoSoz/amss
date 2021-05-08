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
        //$campaign = parent::find($_GET['id']);
        
        require_once 'views/layouts/header.php';
        require_once 'views/campaign/edit.php';
        require_once 'views/layouts/footer.php';
    }

    public function all(){
        $campaignManager = new CampaignManager();
        return $campaignManager->all();
    }

    public function share($campaignId){
        $campaignManager = new CampaignManager();
        $campaign = $campaignManager->getCampaign($campaignId);
    }

}
