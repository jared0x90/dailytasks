<? render_template('standard-header'); ?>
      <div style="text-align: center;">
        <h3>Login</h3>
        <form action="/" method="POST">
          <input type="hidden"   name="action"   value="login">
          <input type="hidden"   name="view"     value="home">
          <input type="text"     name="email"    placeholder="your@email.com"><br>
          <input type="password" name="password" placeholder="your password"><br>
          <input type="submit"   value="Login">
        </form>     
        
        <h3>Alpha Sign Up</h3>
        <form action="/" method="POST">
          <input type="hidden" name="action"   value="signup">
          <input type="hidden" name="view"     value="signup">
          <input type="text"   name="email"    placeholder="your@email.com"><br>
          <?= recaptcha_show(true); ?><br>
          <input type="submit" value="Sign Up">
        </form>
   
      </div>


<? render_template('standard-footer'); 