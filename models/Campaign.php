<?php
//Herencia
class Campaign extends Database{

    
    public function all(){
        try{
            $result = parent::connect()->prepare("SELECT * FROM campaign");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function campaignid($id){
        try{
            $result = parent::connect()->prepare(
                "SELECT campaign.id, title, description, link, created, expirationDate, price 
                FROM campaign inner join usercampaign on campaign.id = usercampaign.campaignid  
                WHERE usercampaign.userid = ?");
            $result->bindParam(1, $id, PDO::PARAM_INT);
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function register($data){
        try{
            $result = parent::connect()->prepare("CALL CreateCampaign (?, ?, ?, ?,?, ?, ?)");
            $result->bindParam(1, $data['title'], PDO::PARAM_STR);
            $result->bindParam(2, $data['description'], PDO::PARAM_STR);
            $result->bindParam(3, $data['link'], PDO::PARAM_STR);
            $result->bindParam(4, $data['created'], PDO::PARAM_STR);
            $result->bindParam(5, $data['expirationDate'], PDO::PARAM_STR);
            $result->bindParam(6, $data['price'], PDO::PARAM_STR);
            $result->bindParam(7, $data['userid'], PDO::PARAM_STR);
            return $result->execute();
        }catch (Exception $e){
           die("Error Campaign->register() " . $e->getMessage());
        }
    }
 
    public function find($id){
        try{
            $result = parent::connect()->prepare("SELECT * FROM campaign WHERE id = ?");
            $result->bindParam(1, $id, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function delete($id){
        try{
            $result = parent::connect()->prepare("DELETE FROM campaign WHERE id = ?");
            $result->bindParam(1, $id, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function update_register($data){
        try{ 
            $result = parent::connect()->prepare("UPDATE campaign SET title = ?, description = ?, link = ?, created = ?, expirationDate = ?, price = ? WHERE id = ?");
            $result->bindParam(1, $data['title'], PDO::PARAM_STR);
            $result->bindParam(2, $data['description'], PDO::PARAM_STR);
            $result->bindParam(3, $data['link'], PDO::PARAM_STR);
            $result->bindParam(4, $data['created'], PDO::PARAM_STR);
            $result->bindParam(5, $data['expirationDate'], PDO::PARAM_STR);
            $result->bindParam(6, $data['price'], PDO::PARAM_INT);
            $result->bindParam(7, $data['id'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
            die("Error Campaign->update_register() " . $e->getMessage());
        }
    }
}
