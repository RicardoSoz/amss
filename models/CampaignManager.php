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

    public function update_register($data){
        $manager = new DatabaseManager();
        return $manager->update_register($data);
    }

}
