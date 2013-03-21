<?


# Retrieve our path. Returns with no trailing slash. IE /srv/inklys.com
define('PATH_MASTER', dirname(__FILE__)); 
define('PATH_PHP', PATH_MASTER . '/php');
define('PATH_VIEWS', PATH_PHP . '/views');
define('DEBUGGING', (isset($_GET['debug'])));

require(PATH_VIEWS . '/default.php');

echo PATH_MASTER;