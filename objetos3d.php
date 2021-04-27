
<!DOCTYPE HTML>
<html>
<head>
<title>Explora Tlaxiaco | Inicio</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<!--<script src="js/jquery.easydropdown.js"></script>-->
<!--start slider -->
<link rel="stylesheet" href="css/fwslider.css" media="all">
<script src="js/jquery-ui.min.js"></script>
<script src="js/fwslider.js"></script>

<!--SCRIPT AR's-->
	<script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
    <!--<script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>-->
    <script src="https://rawgit.com/donmccurdy/aframe-extras/master/dist/aframe-extras.loaders.min.js"></script>
	<!--<script src="https://jesstelford.github.io/aframe-click-drag-component/build.js"></script>-->
<!--end slider -->

</head>
<body>
	<div class="header">
		<div class="container">
			<div class="row">
			  <div class="col-md-12">
				 <div class="header-left">
					 <div class="logo">
						<a href="#"><img src="images/logo.png" alt=""/></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<!--<li><a href="shop.html">Shop</a></li>
						    	<li><a href="team.html">Team</a></li>
						    	<li><a href="experiance.html">Events</a></li>
						    	<li><a href="experiance.html">Experiance</a></li>
						    	<li><a href="shop.html">Company</a></li>
								<li><a href="contact.html">Contact</a></li>								
								<div class="clear"></div>-->
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>							
	    		    <div class="clear"></div>
	    	    </div>
	            <div class="header_right">
	    		  <!-- start search-->
				      <div class="search-box">
						<div class="button"><a href="index.php">Salir</a></div>
						</div>
		           <div class="clear"></div>
	       </div>
	      </div>
		 </div>
	    </div>
	</div>
	<div class="banner">
	<!-- start slider -->
       <div id="fwslider">
         <div class="slider_container">
            <div class="slide">
				<style>
					#myEmbeddedScene {
					  width:850px;
					  height:500px;
					}
					a-scene {
						height: 500px;
						width: 850px;
					}
				</style> 
                <!-- Slide image -->
               <!--<img src="images/slider1.jpg" class="img-responsive" alt=""/>-->
			   <center><p>Use las teclas A, S, D, W para moverme en el plano 3D</p></center>
			   <center><p>Use el mouse para mover el plano</p></center>
			   <center><p>Usted puede mover las figuras fosiles</p></center>
			   <p></p>
			   <center>
			   <a-scene embedded>
			   <a-assets>
						   <img id="floor" src="suelo1.jpg">
						   <img id="cielouno" src="cielocorto.jpg">
						   <img id="cielodos" src="cielolargo.png">
						   <a-asset-item id="arbolito" src="arbol.glb"></a-asset-item>
						   <!--<a-asset-item id="pastito" src="pasto.glb"></a-asset-item>-->

					</a-assets>
				<!--<a-entity gltf-model="mc3.glb" scale="2 2 2" position="-1 0.5 -3" rotation="0 90 90"></a-entity>-->

				
				<a-entity gltf-model="mc3.glb" scale="1 1 1" position="2 1.25 -2" rotation="0 0 0">
					<a-animation attribute="rotation" begin="click" repeat="indefinite" to="0 360 0"></a-animation>
					<!--<a-event name="mouseenter" scale="4 6 1"></a-event>-->
				</a-entity>
				<a-entity gltf-model="concha.glb" scale="3 3 3" position="-2 1.25 -3" rotation="0 0 0"></a-entity>

				<a-entity gltf-model="#arbolito" position="0 1.25 10"></a-entity>
				<a-entity gltf-model="#arbolito" position="3 1.25 -9"></a-entity>
				<a-entity gltf-model="#arbolito" position="4 1.25 -1"></a-entity>
				<a-entity gltf-model="#arbolito" position="15 1.25 30"></a-entity>
				<a-entity gltf-model="#arbolito" position="-8 1.25 5"></a-entity>
				<a-entity gltf-model="#arbolito" position="-9 1.25 8"></a-entity>
				<a-entity gltf-model="#arbolito" position="2 1.25 -15"></a-entity>
				<a-entity gltf-model="#arbolito" position="-11 1.25 -7"></a-entity>

				<a-entity gltf-model="#arbolito" position="3 1.25 5"></a-entity>
				<a-entity gltf-model="#arbolito" position="1 1.25 -4"></a-entity>
				<a-entity gltf-model="#arbolito" position="2 1.25 -2"></a-entity>
				<a-entity gltf-model="#arbolito" position="6 1.25 15"></a-entity>
				<a-entity gltf-model="#arbolito" position="-2 1.25 3"></a-entity>
				<a-entity gltf-model="#arbolito" position="-4 1.25 4"></a-entity>
				<a-entity gltf-model="#arbolito" position="-3 1.25 -6"></a-entity>
				<a-entity gltf-model="#arbolito" position="-7 1.25 -1"></a-entity>
					
				<a-camera position="0 1.25 -1">
					<a-cursor color="#FF0000"/>
				</a-camera>

				<a-sky src="#cielouno"s
					   rotation="0 150 0">
				</a-sky>
				<a-plane material="color: #FFFFFF;
								   src: #floor;
								   repeat: 500 500;
								   normal-map: #floor;
								   normal-textura-repeat: 500 500"
						 rotation="-90 0 0"
						 scale="1000 1000 1">
				</a-plane>
			   </a-scene>
			   <script>
				   var entity=document.querySelector( 'a-entity');
				   entity.addEventListener("mouseenter", funtion()
				   {
						entity.setAttribute("scale",
						{
							x:0.5,
							y:2,
							z: 5.9
						});
				   });
			   </script>
			</center>
                <!-- /Slide image -->
                <!-- Texts container -->
                <!--<div class="slide_content">
                    <div class="slide_content_wrap">
                        <h1 class="title">Run Over<br>Everything</h1>
                        <div class="button"><a href="#">See Details</a></div>
                    </div>
                </div>-->
               <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <!--/slide -->
        </div>
        <!--<div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>-->
       </div>
       <!--/slider -->
      </div>
	  <div class="main">
		<div class="content-top">
			<h2>Explore de distintas maneras</h2>
			<p>Puede explorar desde una imagen de 360°, observar objetos, hasta usar la camara con tecnologia AR</p>
			
			<center><div class="button"><a href="#">Vistas 360°</a></div></center>
			<p></p>
				<div class="button"><a href="#">Objetos</a></div>
			<p></p>
				<div class="button"><a href="#">Prehistoria en Tlaxiaco (AR)</a></div>
			<p></p>
			
			<!--<div class="close_but"><i class="close1"> </i></div>-->

		<h3>"Conociendo a detalle"</h3>
			<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo3").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		</div>
	</div>

		<div class="footer">
			
		</div>
</body>	
</html>