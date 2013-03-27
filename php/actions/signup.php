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
      

      if($user_result){
        # User already exists
        if(isset($user_result['validation_key'])){
          $signup_error_reason = LANGUAGE_SIGNUP_EMAIL_ALREADY_EXISTS;
          mail($_REQUEST['email'], 'DailyTaskLists.com - Create your account (Resent Email)', "You or someone claiming to be you has registered for an account on DailyTaskLists.com and has requested we resend your account setup email.\n\nTo complete account creation please visit the following URL:\n\nhttp://www.dailytasklists.com/?view=signup2&action=signup2&key=".$user_result['validation_key']);
        }else{
          $signup_error_reason = LANGUAGE_SIGNUP_ALREADY_ACTIVATED;
        }
      }else{
        $signup_error = false;
        
        $validation_key = sha1($_REQUEST['email'] . microtime(true) . rand() . rand());
        
        $users->insert(
          array(
            'email' => $_REQUEST['email'], 
            'validation_key' => $validation_key    
          ) 
        );
        mail($_REQUEST['email'], 'DailyTaskLists.com - Create your account', "You or someone claiming to be you has registered for an account on DailyTaskLists.com.\n\nTo complete account creation please visit the following URL:\n\nhttp://www.dailytasklists.com/?view=signup2&action=signup2&key=".$validation_key);
      }
    }
  }
}