<?php$route = '/results_outcome_measure/';$app->post($route, function ()  use ($app){	$request = $app->request();	$_GET = $request->params();	if(isset($_GET['outcome_measure_id'])){ $outcome_measure_id = $_GET['outcome_measure_id']; } else { $outcome_measure_id = '';}	if(isset($_GET['outcome_id'])){ $outcome_id = $_GET['outcome_id']; } else { $outcome_id = '';}	if(isset($_GET['outcome_measure_title'])){ $outcome_measure_title = $_GET['outcome_measure_title']; } else { $outcome_measure_title = '';}	if(isset($_GET['measure_description'])){ $measure_description = $_GET['measure_description']; } else { $measure_description = '';}	if(isset($_GET['unit_of_measure'])){ $unit_of_measure = $_GET['unit_of_measure']; } else { $unit_of_measure = '';}	if(isset($_GET['measure_type'])){ $measure_type = $_GET['measure_type']; } else { $measure_type = '';}	if(isset($_GET['dispersion'])){ $dispersion = $_GET['dispersion']; } else { $dispersion = '';}		$query = "INSERT INTO results_outcome_measure(";		if(isset($outcome_measure_id)){ $query .= $outcome_measure_id . ","; }		if(isset($outcome_id)){ $query .= $outcome_id . ","; }		if(isset($outcome_measure_title)){ $query .= $outcome_measure_title . ","; }		if(isset($measure_description)){ $query .= $measure_description . ","; }		if(isset($unit_of_measure)){ $query .= $unit_of_measure . ","; }		if(isset($measure_type)){ $query .= $measure_type . ","; }		if(isset($dispersion)){ $query .= $dispersion . ","; }		$query .= ") VALUES(";		if(isset($outcome_measure_id)){ $query .= "'" . mysql_real_escape_string($outcome_measure_id) . "',"; }		if(isset($outcome_id)){ $query .= "'" . mysql_real_escape_string($outcome_id) . "',"; }		if(isset($outcome_measure_title)){ $query .= "'" . mysql_real_escape_string($outcome_measure_title) . "',"; }		if(isset($measure_description)){ $query .= "'" . mysql_real_escape_string($measure_description) . "',"; }		if(isset($unit_of_measure)){ $query .= "'" . mysql_real_escape_string($unit_of_measure) . "',"; }		if(isset($measure_type)){ $query .= "'" . mysql_real_escape_string($measure_type) . "',"; }		if(isset($dispersion)){ $query .= "'" . mysql_real_escape_string($dispersion) . "',"; }		$query .= ")";		mysql_query($query) or die('Query failed: ' . mysql_error());		$ReturnObject = array();		$ReturnObject['message'] = "Results_outcome_measure Added!";	$app->response()->header("Content-Type", "application/json");	echo stripslashes(format_json(json_encode($ReturnObject)));	});?>