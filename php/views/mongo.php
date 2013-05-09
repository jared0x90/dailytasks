<? 

render_template('standard-header');

echo "<h2>Collections</h2>";
echo "<ul>";

// print out list of collections
$collections = $db->listCollections();

foreach( $collections as $collection ) {
  echo "<li>" .  $collection->getName() . "<ul>" ;
  
  $documents = $collection->find();
  foreach($documents as $document){
    if(! isset($_REQUEST['hide'])) echo '<li>'. nl2br(str_replace(' ', '&nbsp;', print_r($document,true))).'</li>';       
  }
  echo "</ul></li>";
}
echo "</ul>";

render_template('standard-footer'); 