<?php

function render_template($template){
  # TODO Better error handling
  $template_file = PATH_TEMPLATES . $template . '.php';
  if(file_exists($template_file)){
    include $template_file;
  }else{
    echo $template_file;
  }
}