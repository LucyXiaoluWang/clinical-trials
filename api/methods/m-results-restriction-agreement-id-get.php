<?php$route = '/results_restriction_agreement/:id/';$app->get($route, function ($id)  use ($app){	$request = $app->request();	$_GET = $request->params();	if(isset($_GET['sort'])){ $sort = $_GET['sort']; } else { $sort = '';}	if(isset($_GET['page'])){ $page = $_GET['page']; } else { $page = 0;}	if(isset($_GET['count'])){ $count = $_GET['count']; } else { $count = 25;}	if(isset($_GET['in'])){ $in = $_GET['in']; } else { $in = '';}	$ReturnObject = array();	$Query = "SELECT * FROM results_restriction_agreement WHERE id = '" . $id . "'";	$DatabaseResult = mysql_query($Query) or die('Query failed: ' . mysql_error());	while ($Database = mysql_fetch_assoc($DatabaseResult))		{		$ID = $Database['ID'];		$agreement_id = $Database['agreement_id'];		$nct_id = $Database['nct_id'];		$pi_employee = $Database['pi_employee'];		$restrictive_agreement = $Database['restrictive_agreement'];		$F = array();		$F['ID'] = $ID;		$F['agreement_id'] = $agreement_id;		$F['nct_id'] = $nct_id;		$F['pi_employee'] = $pi_employee;		$F['restrictive_agreement'] = $restrictive_agreement;		array_push($ReturnObject, $F);		}	$app->response()->header("Content-Type", "application/json");	echo stripslashes(format_json(json_encode($ReturnObject)));	});?>