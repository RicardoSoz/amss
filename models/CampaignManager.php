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

    public function campaignid($id){
        $manager = new DatabaseManager();
        return $manager->campaignid($id);
    }

    public function update_register($data){
        $manager = new DatabaseManager();
        return $manager->update_register($data);
    }

    public function register($data){
        $manager = new DatabaseManager();
        return $manager->register($data);
    }

    public function delete($campaignId){
        $manager = new DatabaseManager();
        return $manager->delete($campaignId);
    }

}
