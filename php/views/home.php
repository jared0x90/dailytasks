<? render_template('standard-header'); ?>

<p>Logged in as: <?= $_SESSION['user']['email'] ?> [<a href="/?action=logout">logout</a>]</p>
<ul>
  <li><a href="#">View</a></li>
  <li><a href="#">One</a></li>
  <li><a href="#">Two</a></li>
  <li><a href="#">Three</a></li>
</ul>
<? render_template('standard-footer'); 