<?php
session_start();
include("app/controller/ingredientesController.php");
include("app/controller/recetasController.php");
include("app/controller/userController.php");
include("app/controller/mainController.php");

if(empty($_GET)) {
	indexPage();
}
else {
	if(isset($_GET["action"])) {
		switch($_GET["action"]) {
		case "login":
			loginUser();
			break;
		case "logout":
			logoutUser();
			break;
		case "register":
			registerUser();
			break;
		case "insertReceta":
			insertReceta();
			break;
		case "datosReceta":
			$datosReceta = datosReceta();
			break;
		}
	}

	if(isset($_GET["page"])) {
		switch($_GET["page"]) {
		case "login":
			loginPage();
			break;
		case "register":
			registerPage();
			break;
		case "about":
			aboutPage();
			break;
		case "search":
			searchPage();
			break;
		case "top":
			topCincoPage();
			break;
		case "receta":
			recetaPage($datosReceta);
			break;
		case "profile":
			profilePage();
			break;
		case "insertReceta":
			insertRecetaPage();
			break;
		default:
			indexPage();
			break;
		}	
	}

}

?>