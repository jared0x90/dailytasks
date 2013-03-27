<?

function show_recaptcha($render_html = false){
  $html = recaptcha_get_html(RECAPTCHA_PUBLIC_KEY);
  if($render_html) echo $html;
}