<?php

class MealModel
{

public function afficheMeal()
    {
        $database = new Database();

        $sql = 'SELECT * FROM meal';

        $meal = $database->query($sql);
    return $meal;
    }
    
public function afficheOrder($mealid)
    {
        $database = new Database();

        $sql = 'SELECT * FROM meal where Id='.$mealid;

        $onemeal = $database->queryOne($sql);
    return $onemeal;
    }
    
public function insertMeal( $nom, $desc, $photo, $quantity, $buyprix, $saleprix)
    {
        $database = new Database();

        $sql = 'INSERT INTO meal (Id, Name, Description, Photo, QuantityInStock, BuyPrice, SalePrice) VALUES (?,?,?,?,?,?,?)';
          $database->executeSql($sql,
        [
            0,
            $nom,
            $desc,
            $photo,
            $quantity,
            $buyprix,
            $saleprix
        ]);
    
    }
    
    
   
    
}
