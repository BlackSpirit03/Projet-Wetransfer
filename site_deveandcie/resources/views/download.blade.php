<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>Téléchargement de Fichier</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	</head>

	<body>
		<main class="container">
			<div class="row justify-content-between">
				<div class="col-5" id="blocleft">

					<div id="msgconfirmup" class="row justify-content-center">
						<h4>Voici votre fichier à télécharger !</h4>
					</div>

					<div id="dest_message" class="row justify-content-center">
						<p><strong>Message :</strong> {{$transfer->dest_message}}</p>
					</div>

					<div id="zonefilename" class="card">
					  <div class="card-body">
						<strong>Fichier :</strong> {{$transfer->real_name}}
					  </div>
					</div>

					<div class="row justify-content-center">
						<a href="{{route('confirmdl',['id_transfer'=>$transfer->id_transfer])}}"><button id="btndl" type="button" class="btn btn-dark">Télécharger</button></a>
					</div>

				</div>

				<div class="col-6" id="blocright">
	                <div class="row justify-content-center">

	                    <figure>
	                        <img src="{{asset('img/logo.png')}}" id="logo" width="30%">
	                        <figcaption><h3>Deve &amp; Cie</h3></figcaption>
	                    </figure>

	                    <p>
	                        Nos vous proposons un service de transfert de fichier, sans connexion.
	                    </p>
	                    
	                </div>
	            </div>
			</div>
		</main>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</body>

</html>