<? render_template('standard-header'); 

if(! isset($signup_error)){
  # User did not complete form properly as the signup action was not processed
  echo 'Invalid sign-up detected.';
}else{
  if ($signup_error){
    # User failed to complete the singup process properly.
    echo $signup_error_reason;

  }else{ 
    # User succeeded in completing the signup process.
    ?>
    <h3>Well, hello there</h3>
    <p>It's time to choo-choo-choose your password!</p>
    <?
  }
}


render_template('standard-footer'); 