<?

$signup_error = true;
$signup_error_reason = '';

if((! isset($_REQUEST['password']))  || (! isset($_REQUEST['password_confirm']))){
  $signup_error_reason = LANGUAGE_SIGNUP3_NO_PASSWORDS;
}else{
  if($_REQUEST['password'] != $_REQUEST['password_confirm']){
    $signup_error_reason = LANGUAGE_SIGNUP3_PASSWORD_MISMATCH;
  }else{
    if(strlen($_REQUEST['password'] > 128)){
      $signup_error_reason = LANGUAGE_SIGNUP3_PASSWORD_LENGTH;
    }else{
    
    }
  }
}