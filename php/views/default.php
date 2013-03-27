<? render_template('standard-header'); ?>
      <div style="text-align: center;">
        <p>Login</p>
        <form action="/" method="POST">
          <input type="hidden"   name="action"   value="login">
          <input type="text"     name="email"    placeholder="your@email.com"><br>
          <input type="password" name="password" placeholder="your password"><br>
          <input type="submit"   value="Login">
        </form>     
        
        <p>Sign Up</p>
        <form action="/" method="POST">
          <input type="hidden" name="action"   value="signup">
          <input type="hidden" name="view"     value="signup">
          <input type="text"   name="email"    placeholder="your@email.com"><br>
          <?= show_recaptcha(true); ?><br>
          <input type="submit" value="Sign Up">
        </form>
   
      </div>


<? render_template('standard-footer'); 