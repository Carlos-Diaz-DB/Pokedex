<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Pokédex en el mundo Pokémon es una enciclopedia virtual portátil de alta tecnología que los entrenadores Pokémon llevan consigo para registrar las fichas de todas las diversas especies Pokémon con las que se encuentran durante su viaje como entrenadores.">

    <meta name="Keywords" content="Pokedex, Pokemon, Pikachu">
    <link rel="stylesheet" type="text/css" href="bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="icon" type="image/png" href="iconos/icono.png" />
	<title>Pokedex</title>
</head>
<body>
<div id="agrupar" name="general">
	<header id="cabecera" name="cabeceraindex">
		<div>
			<img src="iconos/logo.png" id="logo" alt="Logo pokedex">
			<img src="iconos/logo2.png" id="logo2" alt="Logo pokemon">
			<img src="iconos/logo3.gif" id="logo3" title="Grrrrr" alt=Logo charizard">
		</div>
	</header>
<div>
	<nav id="navegacion" name="principal">
		<ul style="height: 100%;width:100%">
			<li id="listaMenu" class="hidden-md-up"><a href="index.php"><img src="iconos/home.png" style="height:60px" title="Inicio"></a></li>   
			<li id="listaMenu" class="hidden-md-up"><a href="php,html/pokemon.php"><img src="iconos/pokeball.png" style="height:60px" title="Pokedex"></a></li>
			<li id="listaMenu" class="hidden-md-up"><a href="juego.php"><img src="iconos/plays.png" style="height:60px" title="Minijuegos"></a></li>
			<li id="listaMenu" class="hidden-md-up"><a href="php,html/acercade.html"><img src="iconos/about.png" style="height:60px" title="Acerca de"></a></li>
			<!-- a partir de un tamaño chico y extrachico -->
			<li id="listaMenu2" class="hidden-sm-down"><a href="index.php"><img src="iconos/home.png" style="height:100px" title="Inicio"></a></li>   
			<li id="listaMenu2" class="hidden-sm-down"><a href="php,html/pokemon.php"><img src="iconos/pokeball.png" style="height:100px" title="Pokedex"></a></li>
			<li id="listaMenu2" class="hidden-sm-down"><a href="juego.php"><img src="iconos/plays.png" style="height:100px" title="Minijuegos"></a></li>
			<li id="listaMenu2" class="hidden-sm-down"><a href="php,html/acercade.html"><img src="iconos/about.png" style="height:100px" title="Acerca de"></a></li>
		</ul>
	</nav>
</div>
<br>
	<section id="info">
		<article name="informacionp">
			<br>
			<br>
			<div class="container">
				<h2 name="tituloarticle">Pokedex</h2>
				<p name="descpokedex">Pokédex (ポケモン図鑑 Pokémon Zukan en japonés, o Pokémon Dexter, también llamado Indexador Pokémon), en el mundo Pokémon es una enciclopedia virtual portátil de alta tecnología que los entrenadores Pokémon llevan consigo para registrar las fichas de todas las diversas especies Pokémon con las que se encuentran durante su viaje como entrenadores. En general, cuando se cumplen ciertos requisitos, la capacidad de la Pokédex se puede aumentar permitiendo almacenar datos de otros Pokémon, que no son comunes, como los legendarios y Pokémon que no son originarios de esa región. A dicha Pokédex "ampliada" se la conoce como Pokédex Nacional. Según el episodio EP068 de la primera temporada en el anime, fue creada por el profesor Westwood V; sin embargo, en los videojuegos, el creador es el profesor Oak.
		       </p>
		       <br>
		       <br>
				<h2 name="tituloarticle">Funcionamiento</h2>
	            <p name="descpokedex">La Pokédex funciona de manera simple, pues está organizada en entradas. Cuando se obtiene por primera vez, éstas están vacías y ni siquiera muestran el nombre del Pokémon al que pertenecen; solo su número. Cuando se avista un Pokémon por primera vez, por ejemplo en un combate, la Pokédex lo registra superficialmente, asociando el nombre del Pokémon y su imagen a su número. Pero cuando el Pokémon es capturado, la Pokédex ya es capaz de escanear el Pokémon y de registrar sus datos básicos al completo: tipo, grito, localización, peso, altura, huella, forma y descripción general. El aparato diferencia entre unos casos y otros, y muestra el número de Pokémon de cada uno, avistados y capturados. La Pokédex no está completa hasta que no se han registrado todos los Pokémon. También poseen un sistema de sincronización simultáneo, pues cuando tres Pokédex se encuentran o están cerca comienzan a resonar; es útil cuando se quiere encontrar una en concreto y a su portador.</p>
        	</div>

			<a href="http://es.pokemon.wikia.com/wiki/Pok%C3%A9dex" target="_blank">Mas informacion</a>
		</article>

		<!--Seccion del reproductor de video-->
			<video controls  class="col-md-5 col-sm-12">
				<source src="videos/video.mp4" type="">
			</video>
		<!--Fin de seccion de reproductor de video-->
	</section>

	<footer name="piedepagina">
		2018 cDIAZs
	</footer>
</div>
</body>
</html>