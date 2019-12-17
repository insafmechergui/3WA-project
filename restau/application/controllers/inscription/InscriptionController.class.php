<?php

class InscriptionController
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
    	/*
    	 * Méthode appelée en cas de requête HTTP POST
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
    	 */
        $inscri = new UserModel();
        $tab=array(
			 'nom'=>$formFields['nom'],
			 'prenom'=>$formFields['prenom'],
			 'address'=>$formFields['address'],
			 'city'=>$formFields['city'],
			 'Code'=>$formFields['Code'],
			 'phone'=>$formFields['phone'],
			 'mail'=>$formFields['mail'],
			 'pass'=>$formFields['pass'],
            );
        $inscri->inscription($tab);
            $http->redirectTo('/');

    }
}