<?php

class BookingModel
{

public function insertBooking( $bookingdate, $bookingtime, $nbplace)
    {
        $database = new Database();

        $sql = 'INSERT INTO `booking`(`Id`, `BookingDate`, `BookingTime`, `NumberOfSeats`, `User_Id`, `CreationTimestamp`) VALUES  (0,?,?,?,1,Now())';
          $database->executeSql($sql,
        [
            
            $bookingdate,
            $bookingtime,
            $nbplace
            
        ]);
    
    }
    
    
   
    
}
