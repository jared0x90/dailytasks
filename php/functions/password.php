<?

function calculate_password_hash($password){
  return sha1(SHA1_PASSWORD_SALT . $password . SHA1_PASSWORD_SALT);
}