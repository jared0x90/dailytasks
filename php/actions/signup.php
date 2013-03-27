<?
$signup_error = true;
$signup_error_reason = '';

# Check for errors in the sign up form. IE no email, bad captcha, etc
if(! recaptcha_valid()){
  $signup_error_reason = LANGUAGE_SIGNUP_BAD_CAPTCHA;
}else{
  if(! isset($_REQUEST['email'])){
    $signup_error_reason = LANGUAGE_SIGNUP_NO_EMAIL;
  }else{
    if( ! filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)){
      $signup_error_reason = LANGUAGE_SIGNUP_BAD_EMAIL;
    }else{
      # Appears user signed up properly. Check for existing account.

      
      $users = $db->selectCollection(COLLECTION_USERS);
      
      $user_result = $users->findOne(array('email' => $_REQUEST['email']));
      
      # TODO: Send emails
      if($user_result){
        $signup_error_reason = LANGUAGE_SIGNUP_EMAIL_ALREADY_EXISTS;
      }else{
        $signup_error = false;
        
        $validation_key = sha1($_REQUEST['email'] . microtime(true) . rand() . rand());
        
        $users->insert(
          array(
            'email' => $_REQUEST['email'], 
            'validation_key' => $validation_key    
          )
        );
      }
    }
  }
}