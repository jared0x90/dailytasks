<?

# This action shares error messages with signup2

$signup_error = true;
$signup_error_reason = '';

var_dump($_REQUEST);

if((! isset($_REQUEST['password']))  || (! isset($_REQUEST['password_confirm']))){
  $signup_error_reason = LANGUAGE_SIGNUP3_NO_PASSWORDS;
}else{
  if($_REQUEST['password'] != $_REQUEST['password_confirm']){
    $signup_error_reason = LANGUAGE_SIGNUP3_PASSWORD_MISMATCH;
  }else{
    if(strlen($_REQUEST['password'] > 128)){
      $signup_error_reason = LANGUAGE_SIGNUP3_PASSWORD_LENGTH;
    }else{
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
              # User found finalize account creation
              $signup_error = false;
              
              # Steps to finish account creation
              #
              # 1. store password hash
              # 2. remove validation key
              # 3. create quick view key
              
              $user_result['password'] = calculate_password_hash($_REQUEST['password']);
              unset($user_result['validation_key']);
              $user_result['quick_view_key'] = quickview_key_create();
            }else{
              $signup_error_reason = LANGUAGE_SIGNUP2_BAD_KEY_NOT_FOUND;
            }
          }        
        }
      }
    }
  }
}