<?php
/*
// connection au serveur bd
include_once($document_root."/admin/fonctions/connection_bd.php");
session_start();

// Ce module récupère la liste des questions et des propositions

// vérification que l'utilisateur est authentifié

// Récupération du paramètre $_GET, organisation de l'array

require(" telechargement_fichier.php");
//récuperation de la liste des questions et propositions du quiz
$utils=$_GET['id_Utilisateur'];
$reqQuestion="SELECT idQuiz FROM QUIZ";
$req = "SELECT quest.idQuestion, quest.intituleQ FROM Quiz qui
		INNER JOIN  ContenirQuestion cq ON qui.idQuiz =  cq.idQuiz
		INNER JOIN  Questions quest ON cq.idQuestion =  quest.idQuestion
		WHERE qui.idQuiz = '$idQ_etudiant'";

$idQ_etudiant=$_GET['id_quiz'];
$values = pg_fetch_object($reqQ , $row, PGSQL_ASSOC);
$j=pg_numrows($reqQ);
$f=pg_fetch_object($reqQuestion,$r, PGSQL_ASSOC);
$intitul=$f->quest.intituleQ;

for($i=0;$i<$j;$i++)
{
	//Ici on récupere les réponses de l'étudiant
	$qcm_etudiant[$idQ_etudiant][$idQ_etudiant]= $_GET['id_qcm']; 
	$qcm_etudiant[$idQ_etudiant][$int_Question]= $_GET['question'];
	$qcm_etudiant[$idQ_etudiant][$intitul][$idQ_etudiant][$idQ_etudiant]=$_GET['question'][$idQ_etudiant][$idQ_etudiant];
	$qcm_etudiant[$idQ_etudiant][$intitul][$idQ_etudiant][$int_Question]= $_GET ['question'][$idQ_etudiant]['proposition'];
	$qcm_etudiant[$idQ_etudiant][$intitul][$idQ_etudiant+1][$int_Question]=$_GET['question'][$idQ_etudiant]['proposition'][$idQ_etudiant]['id'];
	$qcm_etudiant[$idQ_etudiant][$intitul][$idQ_etudiant+2][$int_Question]= $_GET['question'][$idQ_etudiant]['proposition'][$idQ_etudiant]['id'];
	$qcm_etudiant[$idQ_etudiant][$intitul][$idQ_etudiant+2][$int_Question]= $_GET['question'][$idQ_etudiant][$idQ_etudiant] ;
	$qcm_etudiant[$idQ_etudiant][$intitul][$idQ_etudiant+2][$int_Question]= $_GET['question'][$idQ_etudiant]['proposition']; 
	$qcm_etudiant[$idQ_etudiant][$intitul][$idQ_etudiant+3][$int_Question]=$_GET['question'][$idQ_etudiant]['proposition'][$idQ_etudiant]['id'] ;
	$qcm_etudiant[$idQ_etudiant][$intitul][$idQ_etudiant+3][$int_Question]= $_GET['question'][$idQ_etudiant]['proposition'][$idQ_etudiant]['id'];

}
	//$_GET['id_qcm'];
	$_GET['question'];
	$_GET['question'][0]['id'];
	$_GET['question'][0]['proposition'];
	$_GET['question'][0]['proposition'][0]['id'];
	$_GET['question'][0]['proposition'][1]['id'];

	$_GET['question'][1]['id'] ;  
	$_1GET['question'][1]['proposition'];
	$_GET['question'][1]['proposition'][0]['id'] ;//id proposition
	//$_GET['question'][1]['proposition'][1]['id'];



// vérifie que l'utilisateur à bien le droit d'accéder au QCM et recupère typeQCM


// parcours des questions dans l'array $_GET

	// pour chaque question 
	//incrémentation du compteur de question
$i=0;
for($p=0;$i<$j;$i++)
{
	if( $qcm_etudiant[$idQ_etudiant][$intitul]== $qcm[$idQ_etudiant][$idQ_etudiant] && 
	$qcm_etudiant[$idQ_etudiant][$intitul]== $qcm[$idQ_etudiant][$int_Question] &&
	$qcm_etudiant[$idQ_etudiant][$intitul][$idQ_etudiant][$idQ_etudiant]==$qcm[$idQ_etudiant][$intitul][$idQ_etudiant][$idQ_etudiant] &&
	$qcm_etudiant[$idQ_etudiant][$intitul][$idQ_etudiant][$p]==$qcm[$idQ_etudiant][$intitul][$idQ_etudiant][$p] &&
	$qcm_etudiant[$idQ_etudiant][$intitul][$idQ_etudiant+1][$p]==$qcm[$idQ_etudiant][$intitul][$idQ_etudiant+1][$int_Question]  &&
	$qcm_etudiant[$idQ_etudiant][$intitul][$idQ_etudiant+2][$p]== $qcm[$idQ_etudiant][$intitul][$i+2][$p] &&
	$qcm_etudiant[$idQ_etudiant][$intitul][$idQ_etudiant+2][$p]== $qcm[$idQ_etudiant][$intitul][$i+2][$p] &&
	$qcm_etudiant[$idQ_etudiant][$intitul][$idQ_etudiant+2][$p]== $qcm[$idQ_etudiant][$intitul][$i+2][$p]&&
	$qcm_etudiant[$idQ_etudiant][$intitul][$idQ_etudiant+3][$p]==$qcm[$idQ_etudiant][$intitul][$i+3][$p] &&
	$qcm_etudiant[$idQ_etudiant][$intitul][$idQ_etudiant+3][$p]== $qcm[$idQ_etudiant][$intitul][$i+3][$p])
	{
		$note=$note+1;
	}
	else if((empty($qcm_etudiant[$idQ_etudiant][$idQ_etudiant])) && 
		(empty($qcm_etudiant[$idQ_etudiant][$p])) &&
		(empty($qcm_etudiant[$idQ_etudiant][$intitul][$idQ_etudiant][$idQ_etudiant])) &&
		(empty($qcm_etudiant[$idQ_etudiant][$intitul][$idQ_etudiant][$p])) &&
		(empty($qcm_etudiant[$idQ_etudiant][$intitul][$idQ_etudiant+1][$p])) &&
		(empty($qcm_etudiant[$idQ_etudiant][$intitul][$idQ_etudiant+2][$p])) &&
		(empty($qcm_etudiant[$idQ_etudiant][$intitul][$idQ_etudiant+2][$p])) && 
		(empty($qcm_etudiant[$idQ_etudiant][$intitul][$idQ_etudiant+2][$p])) && 
		(empty($qcm_etudiant[$idQ_etudiant][$intitul][$idQ_etudiant+3][$p])) &&
		(empty($qcm_etudiant[$idQ_etudiant][$intitul][$idQ_etudiant+3][$p])))
		{
			$note=$note+0;
		}
		else
		{
			$note=$note-1;
		}
	}


	//vérifier si l'utilisateur a coché aucune réponse isset($_GET['question'][x]['proposition']))
 	//récupération des id des bonne réponses

		// Si le type de qcm est examen enregistrement des propositions validés par l'utilsateur
	
$req = "SELECT typeQuizz FROM QUIZZ WHERE idQuiz= $idQ_etudiant";

	// Si le type de compte est un qcm d'évaluation
	// enregistrement de la participation
$values = pg_fetch_object($req , $row, PGSQL_ASSOC);
/*if($values->typeQuizz=="EVALUATION"){
		$query_evaluation="INSERT INTO PARTICIPER(,$utils,$idQ_etudiant,,$note)";
		pg_execute($db_handle, $query_evaluation);
	}
	else if($values->typeQuizz=="EXAMEN"){
		$query_examen="INSERT INTO PARTICIPER(,$utils,$idQ_etudiant,,$note)";
		pg_execute(BD_PROJET, $query_examen);
	}*/
/*
//A voir dans le code comment mettre la date et idParticiper correctement

//Participer(idParticiper,#idUtilisateurs,#idQuiz, date,note)
	// mise à jour du compteur de points

// si le type de qcm est examen enregistrement de la note dans la bd 

// fabrication de l'objet JSON pour renvoyer la note
//renvoi de la note
*/
$resultat['note']= 20; 

echo json_encode($resultat);

?>
