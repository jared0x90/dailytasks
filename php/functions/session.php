<?

function logged_in(){
  return isset($_SESSION['user']['quick_view_key']);
}