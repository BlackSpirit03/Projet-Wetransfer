<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>

  <body>
    <h2>Vous avez reçu un fichier à télécharger !</h2>
    <p>Informations relatives au téléchargement de ce fichier :</p>
    <ul>
      <li><strong>Expéditeur</strong> : {{ $contact->exp_mail }}</li>
      <li><strong>Destinataire</strong> : {{ $contact->dest_mail }}</li>
      <li><strong>Message</strong> : {{ $contact->dest_message }}</li>
      <li><strong>Lien de téléchargement</strong> : <a href="{{ route('download',['by_token'=>$contact->file_name]) }}">{{$contact->real_name}}</a></li>
    </ul>
  </body>

</html>