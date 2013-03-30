<?

$signup_error = true;
$signup_error_reason = '';

# Check for a valid step 2 key that is 40 characters long
if(!isset($_REQUEST['key'])){
  $signup_error_reason = LANGUAGE_SIGNUP2_NO_KEY;
}else{
  $request_key_input = string_filter_alphanum($_REQUEST['key']);
  if($request_key_input != $_REQUEST['key']){
    $signup_error_reason = LANGUAGE_SIGNUP2_BAD_KEY_CHARS;
  }else{
    if(strlen($request_key_input) != SHA1_KEYLENGTH){
      $signup_error_reason = LANGUAGE_SIGNUP2_BAD_KEY_LENGTH;
    }else{
      # It looks like the user is providing a valid key. Let's check the database
      $users = $db->selectCollection(COLLECTION_USERS);
      $user_result = $users->findOne(array('validation_key' => $request_key_input));
      if($user_result){
        # yay, we found what we were looking for
        $signup_error = false;
      }else{
        $signup_error_reason = LANGUAGE_SIGNUP2_BAD_KEY_NOT_FOUND;
      }
    }
  }
}