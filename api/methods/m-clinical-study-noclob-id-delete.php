<?php$route = '/clinical_study_noclob/:id/';$app->delete($route, function ($id)  use ($app){	$request = $app->request();	$_GET = $request->params();	$Query = "DELETE FROM clinical_study_noclob WHERE id = '" . $id . "'";	mysql_query($Query) or die('Query failed: ' . mysql_error());	$ReturnObject = array();	$ReturnObject['message'] = "Clinical_study_noclob Deleted!";	$ReturnObject['id'] = $id;	$app->response()->header("Content-Type", "application/json");	echo stripslashes(format_json(json_encode($ReturnObject)));	});?>