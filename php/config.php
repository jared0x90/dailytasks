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
define('MONGO_URL',  'mongodb://dailytasksadmin:i2HgOnAJKCPE79iYp@ds031947.mongolab.com:31947/dailytasks');
# Individual settings
define('MONGO_HOST', 'ds031947.mongolab.com');
define('MONGO_USER', 'dailytasksadmin');
define('MONGO_PASS', 'i2HgOnAJKCPE79iYp');
define('MONGO_PORT', '31947');
define('MONGO_PATH', '/dailytasks');
define('MONGO_DBNAME', 'dailytasks');

