<?

function show_recaptcha(){
  echo recaptcha_get_html(RECAPTCHA_PUBLIC_KEY);
}