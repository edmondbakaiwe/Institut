<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<!-- Boxicons -->
	<link href="{{ asset('https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css') }}" rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
	<style>
       /* Style de la boîte de dialogue */
            .dialog {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #D3D3D3;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 800px;
			height: 70%;
            text-align: center;
			margin: 0 auto;
			padding: 10px;
            }
			#dialog.close{
				
				color: white;
				border: none;
				padding: 10px 20px;
				font-size: 16px;
				cursor: pointor;

			}

            /* Style du bouton de fermeture */
            .close {
			background-color: red;
            position: absolute;
            top: 10px;
            right: 15px;
            border: 1px;
            padding: 5px;
            cursor: pointer;
            }

            .close:hover {
            background-color: #ccc;
            }
			label {
			display: block;
			margin-bottom: 10px;
			font-weight: bold;
		}

		/* Style pour les champs de texte */
		input[type="text"],
		input[type="textarea"],
		input[type="file"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
		}

		/* Style pour le bouton "Envoyer" */
		input[type="submit"] {
			background-color: #007bff;
			color: #fff;
			border: none;
			padding: 10px 20px;
			border-radius: 4px;
			cursor: pointer;
		}


    </style>

	<title>Tableau de Bord</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Board</span>
		</a>
		<ul class="side-menu top">
			

			<li class="active">
				<a href="/cours">
					<i class='bx bxs-book' ></i>
					<span class="text">Gestion des cours</span>
				</a>
			</li>

			<li class="activ">
				<a href="/ajout_cours">
					<i class='bx bxs-book' ></i>
					<span class="text">Ajouter les cours </span>
				</a>
			</li>
            
            <li>
				<a href="#">
					<i class='bx bxs-user-plus' ></i>
					<span class="text">Préinscription</span>
				</a>
			</li>
            <li>

            <ul class="menu1">
                    <li>
                        <a href="#">
                            <i class='bx bxs-user'></i>
                            <span class="text">Utilisateur</span>
                        </a>
                        <ul class="sous-menu1">
                            <li><a href="#"><i class='bx bx-chevron-right' ></i>Etudiant</a></li>
                            <li><a href="#"><i class='bx bx-chevron-right' ></i>Enseignant</a></li>
                            <!-- Ajoutez d'autres éléments de sous-menu ici -->
                        </ul>
                    </li>
            </ul>
            </li>

            <br><br><br><br><br>


			<li>
			<a href="#" data-dialog="dialog">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Gerer les actualités du site</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-user-check' ></i>
					<span class="text">Gestion des autorisation</span>
				</a>
			</li>
            <li>
				<a href="#">
					<i class='bx bx-home' ></i>
					<span class="text">Lien vers le site</span>
				</a>
			</li>
		</ul>
		<div id="dialog" class="dialog" style="display: none;">
    <form>
      <label for="titre">Titre :</label>
      <input type="text" id="titre" name="titre" required><br><br>
      <label for="description">Description :</label>
      <input type="textarea" id="description" name="description" required><br><br>
      <label for="image">Votre image :</label>
      <input type="file" id="image" name="image" accept="image/*, video/*"><br><br>

      <input type="submit" value="Envoyer">
    </form>
    <button class="close">Fermer</button>
  </div>
  
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
			<a href="{{ route('logout') }}"
   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
   Logout
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			@yield('content')
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js">
		
	</script>
</body>
</html>