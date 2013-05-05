<?

if(isset($_REQUEST['email']) && isset($_REQUEST['password'])){
  $users = $db->selectCollection(COLLECTION_USERS);

  $user_find = array(
    'email' => $_REQUEST['email'],
    'password' => calculate_password_hash($_REQUEST['password'])
  );

  $user = $users->findOne($user_find); 
  if(isset($user['quick_view_key'])){
    $_SESSION['user'] = $user;
  } 
}

