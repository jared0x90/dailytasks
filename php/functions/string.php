<?php

function string_filter_alphanum($string){
  return preg_replace("/[^a-zA-Z0-9]+/", "", $string);;
}