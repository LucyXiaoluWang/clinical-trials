<?php$route = '/results_partflow_mlstn/';$app->post($route, function ()  use ($app){	$request = $app->request();	$_GET = $request->params();	if(isset($_GET['milestone_id'])){ $milestone_id = $_GET['milestone_id']; } else { $milestone_id = '';}	if(isset($_GET['participant_flow_id'])){ $participant_flow_id = $_GET['participant_flow_id']; } else { $participant_flow_id = '';}	if(isset($_GET['milestone_type'])){ $milestone_type = $_GET['milestone_type']; } else { $milestone_type = '';}	if(isset($_GET['milestone_title'])){ $milestone_title = $_GET['milestone_title']; } else { $milestone_title = '';}		$query = "INSERT INTO results_partflow_mlstn(";		if(isset($milestone_id)){ $query .= $milestone_id . ","; }		if(isset($participant_flow_id)){ $query .= $participant_flow_id . ","; }		if(isset($milestone_type)){ $query .= $milestone_type . ","; }		if(isset($milestone_title)){ $query .= $milestone_title . ","; }		$query .= ") VALUES(";		if(isset($milestone_id)){ $query .= "'" . mysql_real_escape_string($milestone_id) . "',"; }		if(isset($participant_flow_id)){ $query .= "'" . mysql_real_escape_string($participant_flow_id) . "',"; }		if(isset($milestone_type)){ $query .= "'" . mysql_real_escape_string($milestone_type) . "',"; }		if(isset($milestone_title)){ $query .= "'" . mysql_real_escape_string($milestone_title) . "',"; }		$query .= ")";		mysql_query($query) or die('Query failed: ' . mysql_error());		$ReturnObject = array();		$ReturnObject['message'] = "Results_partflow_mlstn Added!";	$app->response()->header("Content-Type", "application/json");	echo stripslashes(format_json(json_encode($ReturnObject)));	});?>