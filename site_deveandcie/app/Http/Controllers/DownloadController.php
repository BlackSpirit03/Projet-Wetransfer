<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Transfers;

class DownloadController extends Controller
{
    //
    public function send($by_token)
    {	
    	//récupérer les infos dans la bdd à partir de l'id_transfer
    	$transfer = Transfers::where('file_name',$by_token)->get()->first();
    	
    	// affichage
    	return view('download',compact('transfer'));

    }
}
