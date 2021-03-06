<!DOCTYPE html>
<html lang="es">
<head>
	<title>Vampires</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" >
	<meta property='og:locale' content='es_ES'/>
	<meta property='og:type' content='website'/>
	<meta property='og:title' content='History Vam'/>
	<meta property='og:description' content='Encontraras las lecturas mas exoticas, anhelantes de deseo, de odio intenso, te haremos vivir el personaje, Disponible apartir del 13 de Diciembre'/>
	<meta property='og:url' content='http://juanvaldemar.github.io/vam/'/>
	<meta property='og:site_name' content='History Vam'/>
	<meta property="og:image" content="http://lorempixel.com/output/city-q-g-576-232-2.jpg">
	<meta charset="UTF-8">
		<link rel="stylesheet" href="css/stylus.css"> 
		<link rel="stylesheet" href="css/form.css">
	<script src="js/jquery.js"></script>

</head>
<body>

	<header>
		
	</header>
	<nav>
		<ul>
			<a href="#vam"><li>Vampires Ingreso</li></a>
			<a href="#home"><li>Home</li></a>			
<!-- 		<a href="#"><li>Album</li></a>
			<a href="#"><li>Contact</li></a> -->
			<!-- <a href="#nos"><li>Nosotros</li></a> -->
			<a href="#Des"><li>Des</li></a>
		</ul>
		<div class="handle">
 			<span class="action icon-menu-r1"></span>
		</div>
	</nav>
<span class="ir-arriba">!</span>
<div class="container-uno">
	 <div class="wrap">
		<h1 class="titulo center">Vampires</h1>	

		<p class="description centrado">
		Encontraras las lecturas mas 
		exoticas,anhelantes de deseo, 
		de odio intenso, te haremos 
		vivir el personaje, Disponible
		  apartir del 13 de Diciembre
	 </div>

 
	 <div class="redes-sociales center">
	 	<div class="facebook ">
	 		<span class="action icon-facebook inline-block"></span>
	 		<div class="parrafo">
	 			<p class="desc inline-block">Conéctate con Facebook</p>
	 		</div>
	 	</div>	 	
	 	<div class="twitter ">
	 		<span class="action icon-twitter inline-block"></span>
	 		 <div class="parrafo">
	 			<p class="desc inline-block">Conéctate con Twitter</p>
	 		</div>	 		
	 	</div>	 	

	 	<div class="Entrar">
	 			<p class="desc">Entrar</p>
	 	</div>		 	  	
	 </div>
	
	<span>
		 <div class="message center">
	 		<p class="des">Lo sentimos en este momento no esta disponible el servicio</p>	 		
	 	 </div>
	 </span>

	 <div class="login-form desaparecer-registro">	
	 	<h1 class="titulo-form">Registro</h1>
	 	<form class="register">	  
	 	  <input type="email" class="register-input" placeholder="Email address">
	 	  <input type="password" class="register-input" placeholder="Password">
	 	  
			<br>
	 	  <div class="register-switch">
	 	    <input type="radio" name="sex" value="F" id="sex_f" class="register-switch-input" checked>
	 	    <label for="sex_f" class="register-switch-label">Mujer</label>
	 	    <input type="radio" name="sex" value="M" id="sex_m" class="register-switch-input">
	 	    <label for="sex_m" class="register-switch-label">Hombre</label>
	 	  </div>

	 	  <input type="submit" value="Crear Cuenta" class="register-button">

	 	</form>
	 </div> 

	  <div class="login-form desaparecer-logueo">	
	  	<h1 class="titulo-form">Login</h1>
	  	<form class="register">	  
	  	  <input type="email" class="register-input" placeholder="Email address">
	  	  <input type="password" class="register-input" placeholder="Password">
	  	  
	 		<br>
	  	  <input type="submit" value="Ingresar" class="register-button">

	  	</form>
	  </div> 
 	

	<section class="Section">
		<article class="Article">
			<h1 class="">Comparte</h1>
			<p class="">Si te gusta este evento no te olvides de compartirlo <br>
				en las redes sociales junto a tus amigos <br></p>
		</article>

		<article class="Article">
			<h1 class="">Crea</h1>
			<p class="">Si te gusta este evento no te olvides de compartirlo <br>
				en las redes sociales junto a tus amigos <br></p>
		</article>

		<article class="Article">
			<h1 class="">Vive</h1>
			<p class="">Si te gusta este evento no te olvides de compartirlo <br>
				en las redes sociales junto a tus amigos(a) <br></p>
		</article>
		
	</section>
	

	<div class="space-redes">

<!-- 			<div 
			class="fb-share-button" 
			data-href="http://juanvaldemar.github.io/vam/" 
			data-layout="box_count">		
			</div>
 -->
	
		<div class="fb-like"
			data-href="http://juanvaldemar.github.io/vam/"
			data-layout="box_count" data-action="like" 
			data-show-faces="true" data-share="true">
		</div>
<br>
<!-- 		<div
		 class="fb-follow"
		 data-href="http://juanvaldemar.github.io/vam/"
		 data-colorscheme="light"
		 data-layout="box_count" 
		 data-show-faces="true">
		</div> -->


	</div>
<!-- Formulario -->
	<form  id="Des" action="enviar_correo.php"  method="post" class="formulario">
	  <label class="titulo asunto">Asunto</label><br/><br/>
	    <input type="text" name="asunto"/><br/><br/>
	   <label class="titulo ">Nombre</label><br/><br/>
	    <input type="text" name="nombre"/><br/><br/>
	  <labe class="titulo mensaje">Mensaje</labe><br/><br/>
	    <textarea class="text-tarea" name="mensaje"></textarea><br>
	    <input class="bottom" type="submit" value="Procesar"/>
	</form>




 
	<footer class="Footer">
		<span class="login">
			<p>Login</p>
		</span>

		<span class="create-account">
			<p>create account</p>

		</span>
	</footer>

</div>
	
<div class="container-dos disable">
	<div class="wrap">
			<h1 class="titulo center">Home</h1>	
	<p class="description">
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis quos possimus quis, aliquid unde veniam mollitia eum maxime consequatur dolorum, porro accusamus laborum ratione dicta saepe, sequi. Vero, fugit, repudiandae? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore nostrum quo soluta aperiam autem blanditiis, voluptas inventore odit, mollitia porro eos nam, corporis saepe voluptatibus est perferendis dolores molestiae repellat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora cum, totam ad corporis doloribus, suscipit, quaerat ipsum esse maiores vitae accusantium molestiae nemo corrupti provident, exercitationem mollitia consectetur dicta quia! </p>
	</div>

</div>
	


	<script>
		$(".handle").on("click", function(){
			$("nav ul").toggleClass("showing");
		});
	</script>

	<script>
		$(".facebook").on("click", function(){
			$("span div").toggleClass("m");
		});
	</script>
	<script>
		$(".twitter").on("click", function(){
			$("span div").toggleClass("m");
		})
	</script>

	<script>
		$(".create-account").on("click", function(){
			$(".login-form").toggle("", function(){
				$(".login-form").removeClass("desaparecer-registro");
			}
		);			
	})
	</script>

	<script>
		$(".login").on("click", function(){
			$(".login-form").toggle("", function(){
				$(".login-form").removeClass("desaparecer-logueo");
			}
		);			
	})
	</script>
 
 <script>
		$(document).ready(function(){
		$('a[href^="#vam"]').on('click',function () {
		  $(".container-uno").toggle("habilitar",function(){
		  	$(".container-dos").toggleClass("disable")
		  

		  }); 		

		});
	});
 </script>


    <script>
   		$(document).ready(function(){
   		$('a[href^="#home"]').on('click',function () {
   		  $(".container-uno").toggle("enable",function(){
   		  	$(".container-dos").toggleClass("disable") 

   		  }); 		

   		});
   	});
    </script>
 
 
 
 <script>
		$(document).ready(function(){
		$('a[href^="#"]').on('click',function (e) {
		    e.preventDefault();

		    var target = this.hash;
		    $target = $(target);

		    $('html, body').stop().animate({
		        'scrollTop': $target.offset().top
		    }, 900, 'swing', function () {
		        window.location.hash = target;
		    });
		});
	});
 </script>

 <script>(function(d, s, id) {
	   var js, fjs = d.getElementsByTagName(s)[0];
	   if (d.getElementById(id)) return;
	   js = d.createElement(s); js.id = id;
	   js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.0";
	   fjs.parentNode.insertBefore(js, fjs);
	 }(document, 'script', 'facebook-jssdk'));
 </script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--  http://www.sitepoint.com/introduction-jquery-scroll-based-animations/ -->

<script>
	$(document).ready(function(){
 
	$('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 500);
	});
 
	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.ir-arriba').slideDown(500);
		} else {
			$('.ir-arriba').slideUp(500);
		}
	});
 
});
</script>
</body>
</html>	