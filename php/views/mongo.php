<? 

render_template('standard-header');

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

render_template('standard-footer'); 