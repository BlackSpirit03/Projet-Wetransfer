<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\models\Transfers;
use App\Mail\SendMail;

class UploadController extends Controller
{
    //Passe les champs du formulaire en paramètre
    public function send(Request $request)
    {	

        //Variables contenant des informations supplémentaires pas en bdd (pour l'envoi de mail)
        $realnamefile = $request->file_name->getClientOriginalName();
        $destinataires = [$request->dest_mail,$request->exp_mail];

        //Incription des champs du formulaire dans la database sauf "token" et "nom du fichier"
        $transfer = new Transfers($request->except('csrf_token'));

        //Enregistrement le nom du fichier sélectionné
        $fname = Storage::disk('upload')->put('', $request->file_name);

        //Inscription du nom du fichier dans la database
        $transfer->file_name = $fname;
        $transfer->real_name = $realnamefile;

        //Enregistre les informations dans la database
        $transfer->save();
        
        //Envoi du mail avec le lien vers le fichier
        Mail::to($destinataires)->send(new SendMail($transfer));

        //return redirect()->route('confirmup',compact('transfer'));
    	return view('confirmup', compact('transfer'));

    }
}
