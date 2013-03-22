<?


# Retrieve our path. Returns with no trailing slash. IE /srv/inklys.com
define('PATH_MASTER', dirname(__FILE__)); 
define('PATH_PHP', PATH_MASTER . '/php');
define('PATH_VIEWS', PATH_PHP . '/views');
define('DEBUGGING', (isset($_GET['debug'])));

# Decide whether to use AJAX handler or action/view handler

if(isset($_REQUEST['ajax'])){
  # Begin AJAX handler  
  
  # TODO Write AJAX Hanlder
  
  # End AJXAX handler
}else{
  # Begin action/view hanlder
  # Action handler
  
  
  # View handler
  if(isset($_REQUEST["view"])){
    
  }else{
    require(PATH_VIEWS . '/default.php');  
  }
  # End action view hanlder
}
