<?php$route = '/mesh_thesaurus/:id/';$app->get($route, function ($id)  use ($app){	$request = $app->request();	$_GET = $request->params();	if(isset($_GET['sort'])){ $sort = $_GET['sort']; } else { $sort = '';}	if(isset($_GET['page'])){ $page = $_GET['page']; } else { $page = 0;}	if(isset($_GET['count'])){ $count = $_GET['count']; } else { $count = 25;}	if(isset($_GET['in'])){ $in = $_GET['in']; } else { $in = '';}	$ReturnObject = array();	$Query = "SELECT * FROM mesh_thesaurus WHERE id = '" . $id . "'";	$DatabaseResult = mysql_query($Query) or die('Query failed: ' . mysql_error());	while ($Database = mysql_fetch_assoc($DatabaseResult))		{		$ID = $Database['ID'];		$mesh_id = $Database['mesh_id'];		$mesh_term = $Database['mesh_term'];		$F = array();		$F['ID'] = $ID;		$F['mesh_id'] = $mesh_id;		$F['mesh_term'] = $mesh_term;		array_push($ReturnObject, $F);		}	$app->response()->header("Content-Type", "application/json");	echo stripslashes(format_json(json_encode($ReturnObject)));	});?>