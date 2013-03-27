<? render_template('standard-header'); 

if(! isset($signup_error)){
  # User did not complete form properly as the signup action was not processed
  echo 'Invalid sign-up detected.';
}else{
  if ($signup_error){
    # User failed to complete the singup process properly.
    echo '<h3>Sorry</h3>';
    echo $signup_error_reason;

  }else{ 
    # User succeeded in completing the signup process.
    ?>
    <h3>Greetings fellow homo-sapien</h3>
    <p>Check your email to complete the registration process!</p>
    <?
  }
}


render_template('standard-footer'); 