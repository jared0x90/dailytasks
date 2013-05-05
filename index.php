<?
# Copyright 2013 Jared De Blander

# Define our master path

define('PATH_MASTER', dirname(__FILE__) . '/'); 

# Include configuration file

require PATH_MASTER . "php/config.php";

# Include ancillary files

require PATH_PHP . "manifest.php";

# Create connection to mongo database

try{
  $m  = new Mongo(MONGO_URL);
  $db = $m->selectDB(MONGO_DBNAME);
}catch( Exception $e ){
  die ('Database connection failed.');
}

# Start session 

session_start();

# Start AJAX, Action, View handler

try{
  # Sanitize ajax,action,view handler
  if(isset($_REQUEST['ajax'])){
    $sanitize_ajax = string_filter_alphanum($_REQUEST['ajax']);
    if($sanitize_ajax == $_REQUEST['ajax']){
      define('REQUESTED_AJAX', $sanitize_ajax);
    }else{
      # Close Mongo connection
      $m->close();
      
    }
  }
  
  if(isset($_REQUEST['action'])){
    $sanitize_action = string_filter_alphanum($_REQUEST['action']);
    if($sanitize_action == $_REQUEST['action']){
      define('REQUESTED_ACTION', $sanitize_action);
    }
  }
  
  if(isset($_REQUEST['view'])){
    $sanitize_view = string_filter_alphanum($_REQUEST['view']);
    if($sanitize_view == $_REQUEST['view']){
      define('REQUESTED_VIEW', $sanitize_view);
    }
  }
  
  if(defined('REQUESTED_AJAX')){
    # Begin AJAX handler  
    
  }else{
    # Begin action/view hanlder
    # Action handler
    if(defined('REQUESTED_ACTION')){
      $action_file = PATH_ACTIONS . REQUESTED_ACTION . '.php';
      if(file_exists($action_file)){
        require $action_file;
      }else{
        # Attempt to close MongoConnection
        $m->close();
        # Die
        die('Invalid action specified.');        
      }
    }
    
    # View handler
    
    if(defined('REQUESTED_VIEW')){
      $view_file = PATH_VIEWS . REQUESTED_VIEW . '.php';
      if(file_exists($view_file)){
        require $view_file;
      }else{
        # Attempt to close MongoConnection
        $m->close();
        # Die
        die('Invalid view specified.');
      }
    }else{
      if(logged_in()){
        require(PATH_VIEWS . '/home.php');
      }else{
        require(PATH_VIEWS . '/default.php');
      }
    }
    # End action view hanlder
  }  
}catch( Exception $e ){
  # Attempt to close MongoConnection
  $m->close();
  # Die
  die('Failure in request handler.');
}

# Close Mongo connection
$m->close();