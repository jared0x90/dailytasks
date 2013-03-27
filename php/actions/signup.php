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
      # User signed up properly.
      $signup_error = false;
      
      $users = $db->selectCollection(COLLECTION_USERS);
      
      $users->insert(
        array(
          'email' => $_REQUEST['email'], 
          'validation_key' => sha1($_REQUEST['email'] . microtime(true) . rand() . rand())       
        )
      );
    }
  }
}