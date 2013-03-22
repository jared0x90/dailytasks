<?php

################################################################################
# File paths
################################################################################
define('PATH_PHP',       PATH_MASTER . 'php/');
define('PATH_CSS',       PATH_MASTER . 'css/');
define('PATH_JS',        PATH_MASTER . 'css/');

define('PATH_VIEWS',     PATH_PHP . 'views/');
define('PATH_FUNCTIONS', PATH_PHP . 'functions/');
define('PATH_TEMPLATES', PATH_PHP . 'templates/');

################################################################################
# Mongo Database Configuration
################################################################################
# Complete URL
define('MONGO_URL',  'mongodb://inkly:archon23051@dbh74.mongolab.com:27747/inkly');
# Individual settings
define('MONGO_HOST', 'dbh74.mongolab.com');
define('MONGO_USER', 'inkly');
define('MONGO_PASS', 'archon23051');
define('MONGO_PORT', '27747');
define('MONGO_PATH', '/inkly');
define('MONGO_DBNAME', 'inkly');

