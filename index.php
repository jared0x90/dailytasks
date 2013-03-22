<?


# Retrieve our path. Returns with no trailing slash. IE /srv/inklys.com
define('PATH_MASTER', dirname(__FILE__)); 
define('PATH_PHP',    PATH_MASTER . '/php');
define('PATH_VIEWS',  PATH_PHP . '/views');

require PATH_PHP . "/config.php";

# Create connection to mongo database

try{
  $m  = new Mongo(MONGO_URL);
  $db = $m->selectDB(MONGO_DBNAME);
}catch( Exception $e ){
  die ('Database connection failed.');
}

#######################
# begin test mongo code
#######################
echo "<h2>Collections</h2>";
echo "<ul>";

// print out list of collections
$cursor = $db->listCollections();
$collection_name = "";
foreach( $cursor as $doc ) {
  echo "<li>" .  $doc->getName() . "</li>";
  $collection_name = $doc->getName();
}
echo "</ul>";
#######################
# end test mongo code
#######################  

# Decide whether to use AJAX handler or action/view handler

if(isset($_REQUEST['ajax'])){
  # Begin AJAX handler  
  
  # TODO Write AJAX Hanlder
  
  # End AJXAX handler
}else{
  # Begin action/view hanlder
  # Action handler
  if(isset($_REQUEST['action'])){
    
  }
  
  # View handler
  if(isset($_REQUEST['view'])){
    
  }else{
    require(PATH_VIEWS . '/default.php');  
  }
  # End action view hanlder
}

# Close Mongo connection
$m->close();

