<?php$route = '/results_baseline_measure/:id/';$app->get($route, function ($id)  use ($app){	$request = $app->request();	$_GET = $request->params();	if(isset($_GET['sort'])){ $sort = $_GET['sort']; } else { $sort = '';}	if(isset($_GET['page'])){ $page = $_GET['page']; } else { $page = 0;}	if(isset($_GET['count'])){ $count = $_GET['count']; } else { $count = 25;}	if(isset($_GET['in'])){ $in = $_GET['in']; } else { $in = '';}	$ReturnObject = array();	$Query = "SELECT * FROM results_baseline_measure WHERE id = '" . $id . "'";	$DatabaseResult = mysql_query($Query) or die('Query failed: ' . mysql_error());	while ($Database = mysql_fetch_assoc($DatabaseResult))		{		$ID = $Database['ID'];		$baseline_id = $Database['baseline_id'];		$rslts_baseline_id = $Database['rslts_baseline_id'];		$baseline_measure_title = $Database['baseline_measure_title'];		$description = $Database['description'];		$units_of_measure = $Database['units_of_measure'];		$measure_type = $Database['measure_type'];		$dispersion = $Database['dispersion'];		$F = array();		$F['ID'] = $ID;		$F['baseline_id'] = $baseline_id;		$F['rslts_baseline_id'] = $rslts_baseline_id;		$F['baseline_measure_title'] = $baseline_measure_title;		$F['description'] = $description;		$F['units_of_measure'] = $units_of_measure;		$F['measure_type'] = $measure_type;		$F['dispersion'] = $dispersion;		array_push($ReturnObject, $F);		}	$app->response()->header("Content-Type", "application/json");	echo stripslashes(format_json(json_encode($ReturnObject)));	});?>