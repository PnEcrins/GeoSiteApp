<?php
include ("dbconnect.php");
?>

<!doctype html>
<html ng-app="GeoSiteApp" class="no-js">
	<head>
		<title><?php echo $title;?></title>
		<meta charset="utf-8" />
		<base href="<?php echo $base_url;?>">
		<link href="vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link href="vendors/leaflet/leaflet.css" rel="stylesheet" />
		<link rel="stylesheet" href="vendors/opacity/Control.Opacity.css" />
		<link rel="stylesheet" href="vendors/jquery/jquery-ui-1.10.3.custom.min.css" />
		<link href="vendors/angular-bootstrap/ui-bootstrap-custom-1.1.1-csp.css" rel="stylesheet" />
		<link href="vendors/angular/multiple-select.min.css" rel="stylesheet" />
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="css/style.css" rel="stylesheet" />

		<!-- La balise meta viewport sert à forcer le niveau de zoom pour les navigateurs mobiles, elle est indispensable pour faire l'application en responsive, ici je ne permet pas à l'utilisateur de zoomer (le zoom sur la page n'est pas utile, il l'est par contre pour la carte) -->
		<meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width" />		
	</head>
	<!-- 
		ng-app et ng-controller sont des directives.
		ng-app défini la portée de l'application (le scope)
		ng-controller défini la portée du controller, c'est à dire que les propriétés dans HomeController sont utilisables dans tout le body
	-->
	<!--<body ng-controller="HomeController"> -->
	<body ng-cloak>
		<div ng-include src="'templates/home.html'"></div>
		<div ng-view></div>
		<!-- Biliothèques js -->
		<script src="vendors/jquery/jquery.min.js"></script>	
		<script src="vendors/jquery/jquery-ui-1.10.3.custom.min.js"></script>	
		<script src="vendors/bootstrap/js/bootstrap.min.js"></script>			
		<script src="vendors/pdfjs/pdf.js"></script>
 		<script src="vendors/angular/angular.min.js"></script>
		<script src="vendors/angular/angular-locale_fr-fr.js"></script>
		<script src="vendors/angular/angular-pdf.min.js"></script>
		<script src="vendors/angular/multiple-select.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular-animate.js"></script>
		<script src="vendors/leaflet/leaflet.js"></script>
		<script src="vendors/opacity/Control.Opacity.js"></script>
		<script src="https://code.angularjs.org/1.2.28/angular-route.min.js"></script>
		<script src="vendors/angular-bootstrap/ui-bootstrap-custom-1.1.1.min.js"></script>
		<script src="vendors/angular-bootstrap/ui-bootstrap-custom-tpls-1.1.1.min.js"></script>

		<!-- Modules -->
		<script src="js/app.js"></script>
		
		<!-- Récupération des paramètres PHP des noms de vue pour les passer à AngularJS -->
		<script>
			var vuephotos = '<?php echo $vuephotos; ?>';
			var vuedocuments = '<?php echo $vuedocuments; ?>';
			app.constant("vue", {
						"photos": vuephotos,
						"documents": vuedocuments
						})
		</script>

		<!-- Controllers -->
		<script src="js/controllers/homeController.js"></script>
		<script src="js/controllers/siteDetailController.js"></script>
		<script src="js/controllers/modalNavbarController.js"></script>
		<script src="js/controllers/modalDetailsController.js"></script>			
		<script src="js/controllers/modalAccueilController.js"></script>
		<script src="js/controllers/modalAideController.js"></script>
		<script src="js/controllers/modalContactController.js"></script>
		<script src="js/controllers/modalPneController.js"></script>
		
		<!-- Google Analytics -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', '<?php echo $ID_GA;?>', 'auto');
		  ga('send', 'pageview');

		</script>
		
	</body>
</html>
