<?php

include "Campaign.php";

class DatabaseManager{

    public function getCampaign($campaignId){
        $campaign = new Campaign();
        return $campaign->find($campaignId);
    }

    public function all(){
        $campaign = new Campaign();
        return $campaign->all();
    }

    public function campaignid($id){
        $campaign = new Campaign();
        return $campaign->campaignid($id);
    }

    public function update_register($data){
        $campaign = new Campaign();
        return $campaign->update_register($data);
    }

    public function register($data){
        $campaign = new Campaign();
        return $campaign->register($data);
    }

    public function delete($campaignId){
        $campaign = new Campaign();
        return $campaign->delete($campaignId);
    }

}
