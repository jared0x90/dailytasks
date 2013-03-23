<?

function link_create_url($url, $string, $render = false){
  $html = '<a href="'.$url.'">'.$string.'</a>';
  if($render) echo $html;
  return $html;
}
