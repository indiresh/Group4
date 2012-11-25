<?php
    //This file stores all basic functions
    
    function mysql_prep($value){
    	$magic_quotes_active = get_magic_quotes_gpc();
		$new_enough_php = function_exists("mysql_real_escape_string");
		//i.e PHP >= v4.3.0
		if ($new_enough_php) {
			// PHP >= v4.3.0
			if ($magic_quotes_active) {$value = stripslashes($value);} 
				$value = mysql_real_escape_string($value);
		} else {
			//before PHP v 4.3.0, if magic quotes aren't already on then add slashes manually
			if (!$magic_quotes_active) {
				$value = addslashes($value);}
				//if magic quotes are active, then the slashes already exist
		}
		return $value;
    }
    
	function redirect_to($location = NULL) {
		if ($location != NULL) {
			header("Location: {$location}");
			exit;
		}
	}
	
    function confirm_query($result_set){
    	if (!$result_set) {
			die("Database query failed: " . mysql_error());
		}
	}
	
	function get_all_robots() {
		global $connection;
		$query = "SELECT * 
					FROM robots 
					ORDER BY name ASC";
						
		$robot_set = mysql_query($query, $connection);
		confirm_query($robot_set);
		return $robot_set;
	}
	
	function get_pages($page_id) {
		global $connection;
		$query = "SELECT * 
					FROM pages 
					WHERE id= {$page_id}";
							
		$page_set = mysql_query($query, $connection);
		confirm_query($page_set);
		return $page_set;
	}
	
	function get_robot_by_id($robot_id) {
		global $connection;
		$query = "SELECT * ";
		$query .= "FROM robots ";
		$query .= "WHERE id=" . "{$robot_id}";
		$query .= " LIMIT 1";
		$result_set = mysql_query($query, $connection);
		confirm_query($result_set);
		
		if ($robot = mysql_fetch_array($result_set)) {
			return $robot;
		} else {
			return NULL;
		}
	}
	
	function get_page_by_id($page_id){
		global $connection;
		$query = "SELECT * ";
		$query .= "FROM pages ";
		$query .= "WHERE id=" . $page_id . " ";
		//$query .= "LIMIT 1";
		$result_set = mysql_query($query, $connection);
		confirm_query($result_set);
		
		if ($page = mysql_fetch_array($result_set)) {
			return $page;
		} else {
			return NULL;
		}
	}

	function find_selected_page() {
		global $sel_robot;
		global $sel_page;
		
		if (isset($_GET['subj'])) {
			$sel_robot = get_robot_by_id($_GET['subj']);
			$sel_page = NULL;
		} elseif (isset($_GET['page'])) {
			$sel_robot = NULL;
			$sel_page = get_page_by_id($_GET['page']);
		} else {
			$sel_page = NULL;
			$sel_robot = NULL;
		}
	}
	
	function navigation(/*$sel_robot*/) {
			$output = "<ul class=\"robots\">"; 

			$robot_set = get_all_robots();
			
			while ($robot = mysql_fetch_array($robot_set)) {
				$output .= "<li";
				//if ($robot["id"] == $sel_robot['id']) {$output .= " class=\"selected\"";}
				
				$output .= "><a href=\"content.php?subj=" . urlencode($robot["id"]) . 
				"\">{$robot["name"]}</a> </li>";
				
			}
			$output .= "</ul>";
			
			return $output;
	}
	function get_home($sel_page){
		$output = "";
		
		$page_set = get_pages($sel_page["id"]);
		while ($page = mysql_fetch_array($page_set)) {
			
				$output .= "<h2> {$page['date']} </h2>";
				$output .= "<div class=\"comment\">";
				$output .=  "<h3> {$page['name']} </h3>";
				$output .=  "<p> {$page['descr']} </p>";
				$output .= "</div>";
		}
				
		return $output;
	}
	function get_tech_support($sel_page){
		$output = "<h1>Tech Support</h1>";
		
		$page_set = get_pages($sel_page["id"]);
		while ($page = mysql_fetch_array($page_set)) {
			
				$output .= "<p>";
				$output .=  "<b>Q: {$page['name']} </b><br>";
				$output .=  "A. {$page['descr']}";
				}

		return $output;
	}
?>