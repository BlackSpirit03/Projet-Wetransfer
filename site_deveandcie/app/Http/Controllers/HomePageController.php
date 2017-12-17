<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Utilisé uniquement pour le test ci-dessous
//use App\models\Transfers;

class HomePageController extends Controller
{
    //
    public function index()
    {	
    	//Test d'affichage d'1 enregistrement de la base
    	//$t = Transfers::find(1);
    	//return($t->dest_message);

    	//Affiche la vue "Welcome"
    	return view('welcome');
    }
}
