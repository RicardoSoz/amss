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

    public function update_register($data){
        $campaign = new Campaign();
        return $campaign->update_register($data);
    }

}
