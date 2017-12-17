<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller;
use App\models\Transfers;

class ConfirmController extends Controller
{
    //Affichage confirmation upload
    public function upload($transfer)
    {	
    	// Envoi du mail à l'expéditeur et le destinataire
        //Mail::to('exp_mail','dest_mail')
        //    ->send(new SendMail($request->except('_token')));
        // Affichage de la confirmation upload
        return view('confirmup');
    }


    //Affichage confirmation download
    public function download($id_transfer)
    {	
        $transfer = Transfers::find($id_transfer);
        
        //procéder au téléchargement du fichier
        return Storage::disk('upload')->download($transfer->file_name,$transfer->real_name);
        

        //affichage du résultat
        return view('confirmdl');
    }

}
