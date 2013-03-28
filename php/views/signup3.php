<? render_template('standard-header'); 

if(! isset($signup_error)){
  # User did not complete form properly as the signup action was not processed
  echo 'Invalid sign-up detected.';
}else{
  if ($signup_error){
    # User failed to complete the singup process properly.
    echo "<h3>Sorry</h3>";
    echo $signup_error_reason;

  }else{ 
    # User succeeded in completing the signup process.
    ?>
    <h3>Thank you!</h3>
    <p>You have completed the alpha registration process. You will be notified when your account is ready.</p>
    <?
  }
}


render_template('standard-footer'); 