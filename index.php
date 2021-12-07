<?=realpath('index.php')?>// le chemin absolut

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Foody</title>
		<link rel="stylesheet" href="style.css" />
		<link
			rel="stylesheet"
			href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
		/>
	</head>
	<body>
		<nav id="nav" class="nav">
			<h1><span>F</span>oody</h1>
			<ul>
				<li id="label" onclick="mobile()"><i class="fas fa-bars"></i></li>
				<li>Accueil</li>
				<a href="#recipies"><li>Recettes</li></a>
				<a href="#newsletter"><li>Contact</li></a>
				<li>Menu</li>
				<button>S'inscrire</button>
			</ul>
		</nav>

		<header>
			<div class="left">
				<h1>Mangez à votre faim, un resto de luxe sans luxe</h1>
				<p class="description">
					Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat
					veritatis dolorem amet non quasi. Ipsum dolor sit amet consectetur
					adipisicing elit. Facere, omnis corporis.
				</p>
				<button>Commencer</button>
			</div>
			<div class="right">
				<img src="images/header.png" alt="header photo" />
			</div>
		</header>

		<section class="presentation">
			<div class="left">
				<img src="images/plat.png" alt="plat de pates" />
			</div>
			<div class="right">
				<p class="mini-title">À propos de nous</p>
				<h1>Que faisons-nous de spécial dans nos restaurants ?</h1>
				<p class="description">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus
					debitis harum porro illum, nostrum, assumenda dolore repudiandae
					temporibus, qui minus a ab libero dolorem veritatis voluptatibus!
					Distinctio commodi aliquid earum!
				</p>
			</div>
		</section>

		<section id="recipies">
			<p class="mini-title">Nos recettes</p>
			<h2>Qui sont les plus populaires ?</h2>
			<div class="cards">
				<div class="card">
					<img src="images/pizza.png" alt="recette" />
					<h3>Pizza</h3>
					<div class="rating-stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star-half-alt"></i>
					</div>
					<p class="price">15,90€</p>
				</div>
				<div class="card">
					<img src="images/buger.png" alt="recette" />
					<h3>Burger</h3>
					<div class="rating-stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star-half-alt"></i>
					</div>
					<p class="price">12,90€</p>
				</div>
				<div class="card">
					<img src="images/spaghetti.png" alt="recette" />
					<h3>Spaghetti</h3>
					<div class="rating-stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star-half-alt"></i>
					</div>
					<p class="price">11,50€</p>
				</div>
				<div class="card">
					<img src="images/tacos.png" alt="recette" />
					<h3>Tacos</h3>
					<div class="rating-stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star-half-alt"></i>
					</div>
					<p class="price">9,40€</p>
				</div>
			</div>
		</section>

		<section id="newsletter">
			<h1>Inscrivez-vous à notre NewsLetter</h1>
			<form>
				<input type="text" />
				<button>S'abonner</button>
			</form>
		</section>

		<footer>
			<div class="column important">
				<h3>Merci à vous !</h3>
				<p>&copy; Copyright Foody, 2021 | Tous droits réservés</p>
			</div>
			<div class="column">
				<h3>Nos services</h3>
				<p>Boutiques</p>
				<p>Restaurant</p>
				<p>Livraison</p>
			</div>
			<div class="column">
				<h3>Recrutement</h3>
				<p>recrutement@foody.fr</p>
				<p>Postuler pour un emploi</p>
				<p>Job étudiant</p>
			</div>
			<div class="column">
				<h3>Nos locaux</h3>
				<p>Paris</p>
				<p>Marseille</p>
				<p>Toulouse</p>
			</div>
		</footer>

		<script>
			function mobile() {
				var x = document.getElementById('nav');
				if (x.className === 'nav') {
					x.className += ' responsive';
				} else {
					x.className = 'nav';
				}
			}
		</script>
	</body>
</html>
