<?php 

function gLoBaLe()
{

	$url = 'http://localhost:50434/WebService1.asmx?WSDL';
	$options = array(
	'cache_wad1' => 0,
	'trace' => 1,
	'stream_context' => stream_context_create(array(
		'ss1' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
		)
	)));
	$client = new SoapClient($url, $options);
	return $client;
}

function connexionBd()
{
$user = "root";
$mdp = " ";
$serveur_et_base = "mysql:host=localhost;dbname=receba";
try
{
$bd = new PDO($serveur_et_base, $user, $mdp);
}
catch(Exception $e)
{
die("Erreur : ".$e->getMessage());
}
return $bd;
}

function getMedicaments()
{

$client = gLoBaLe();
	


	$res = $client->getMedoc();
	$lesRes = $res->getMedocResult->string;
	$tab = array();
	for ($i=0;$i<count($lesRes);$i++)
		$tab[$i]=explode("#",$lesRes[$i]);
	
	
	return $tab;
}

function getEffetTherapeutique($nomMedoc)
{

$client = gLoBaLe();
	
$client = new SoapClient($url, $options);

	$parameters=array('nomMedicament' => $nomMedoc);
	$res = $client->getMedoc($parameters);
	$lesRes = $res->getMedocResult->string;
	$tab = array();
	for ($i=0;$i<count($lesRes);$i++)
		$tab[$i]=explode(";",$lesRes[$i]);
	
	
	return $tab;
}

function getMdpPseudo()
{

$client = gLoBaLe();
	
$client = new SoapClient($url, $options);

	$res = $client->tab2D();
	$lesRes = $res->tab2DResult->string;
	
	return $lesRes;
	
}
