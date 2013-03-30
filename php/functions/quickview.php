<?

function quickview_key_create(){
  return sha1(
    SHA1_PASSWORD_SALT .
    microtime(true) .
    rand() .
    rand() . 
    rand() .
    rand() .
    rand() .
    rand() .
    rand() .
    rand()
  );
}
