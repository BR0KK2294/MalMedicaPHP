// JavaScript Document

var x=$(document);
x.ready(inicializarEventos);

function inicializarEventos(){
	var bFarm = $("#btnFarmaco");
	bFarm.click(llamarFarmaco);
	var bRec = $("#btnReceta");
	bRec.click(llamarReceta);
	var bUsr = $("#btnUsuario") ;
	bUsr.click(llamarUsuario);

}

function llamarFarmaco(){
	$('#Contenido').html(" <iframe class='embed-responsive-item' style='width:100%' src='GUIFarmaco.php'></iframe>");
}

function llamarReceta(){
	$('#Contenido').html(" <iframe class='embed-responsive-item' style='width:100%' src='GUIReceta.php'></iframe>");
}

function llamarUsuario(){
	$('#Contenido').html(" <iframe class='embed-responsive-item' style='width:100%' src='GUIUsuarios.php'></iframe>");
}
