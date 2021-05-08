<?php

include "DatabaseManager.php";

class CampaignManager{

    public function getCampaign($campaignId){
        $manager = new DatabaseManager();
        return $manager->getCampaign($campaignId);
    }

    public function all(){
        $manager = new DatabaseManager();
        return $manager->all();
    }

}
