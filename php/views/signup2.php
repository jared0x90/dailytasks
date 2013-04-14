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
    <h3>Well, hello there <?= $user_result['email'] ?></h3>
    <p>It's time to choo-choo-choose your password!</p>
    <form method="POST" action="/">
      <input type="hidden"   name="action" value="signup3">
      <input type="hidden"   name="view"   value="signup3">
      <input type="hidden"   name="key"    value="<?= $user_result['validation_key']; ?>">
      <input type="password" placeholder="your password"       name="password"><br>
      <input type="password" placeholder="your password again" name="password_confirm"><br>
      <input type="submit" value="Complete Account Creation">
    </form>
    <?
  }
}


render_template('standard-footer'); 