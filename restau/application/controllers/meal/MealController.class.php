<?php

class MealController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
    	/*
    	 * Méthode appelée en cas de requête HTTP GET
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $queryFields contient l'équivalent de $_GET en PHP natif.
    	 */
        
        
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
    	
         if($http->hasUploadedFile('photo') == true)
        {
            $photo = $http->moveUploadedFile('photo', '/images/meals');
        }
        else
        {
            $photo = 'no-photo.png';
        }
            $mealinsert = new MealModel();
			$mealinsert->insertMeal
			(
				$formFields['nom'],
				$formFields['desc'],
				$photo,
				$formFields['quantity'],
				$formFields['buyprix'],
				$formFields['saleprix']
			);

    }
}