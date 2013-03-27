<?

function recaptcha_show($render_html = false){
  $html = recaptcha_get_html(RECAPTCHA_PUBLIC_KEY);
  if($render_html) echo $html;
}

function recaptcha_valid(){
  if(! defined('RECAPTCHA_VALIDATED')){
    $resp = recaptcha_check_answer (
      RECAPTCHA_PRIVATE_KEY,
      $_SERVER["REMOTE_ADDR"],
      $_POST["recaptcha_challenge_field"],
      $_POST["recaptcha_response_field"]
    );
    
    define('RECAPTCHA_VALIDATED', $resp->is_valid);
  }
  
  return RECAPTCHA_VALIDATED;
}