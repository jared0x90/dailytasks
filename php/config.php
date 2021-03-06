<?php

################################################################################
# File paths
################################################################################
define('PATH_PHP',       PATH_MASTER . 'php/');
define('PATH_CSS',       PATH_MASTER . 'css/');
define('PATH_JS',        PATH_MASTER . 'css/');

define('PATH_ACTIONS',   PATH_PHP . 'actions/');
define('PATH_FUNCTIONS', PATH_PHP . 'functions/');
define('PATH_LANGUAGES', PATH_PHP . 'languages/');
define('PATH_LIBS',      PATH_PHP . 'libs/');
define('PATH_TEMPLATES', PATH_PHP . 'templates/');
define('PATH_VIEWS',     PATH_PHP . 'views/');


################################################################################
# Mongo Database Configuration
################################################################################
# Complete URL
# define('MONGO_URL',  'mongodb://dailytasksadmin:i2HgOnAJKCPE79iYp@ds031947.mongolab.com:31947/dailytasks');
define('MONGO_URL',         'mongodb://mongo1.jwd.me,mongo2.jwd.me,mongo3.jwd.me/');
# define('MONGO_REPLICA_SET', 'rs0');
define('MONGO_DBNAME',      'dailytasks');


# Individual settings
/* 

define('MONGO_HOST', 'ds031947.mongolab.com');
define('MONGO_USER', 'dailytasksadmin');
define('MONGO_PASS', 'i2HgOnAJKCPE79iYp');
define('MONGO_PORT', '31947');
define('MONGO_PATH', '/dailytasks');
define('MONGO_DBNAME', 'dailytasks');

*/
# Collections
define('COLLECTION_USERS', 'users');

################################################################################
# Recaptcha configuration
################################################################################
define('RECAPTCHA_PUBLIC_KEY',  '6Led-d4SAAAAAIRWE537Vt6Z9chDcTzcU_EmzcNY');
define('RECAPTCHA_PRIVATE_KEY', '6Led-d4SAAAAAPVfC_j91RognFzTi5X9_ehkV-19');

################################################################################
# Misc. Constants
################################################################################
define('SHA1_KEYLENGTH', 40);
define('SHA1_PASSWORD_SALT', 'eTmGTejaxyAmlp251bqZzy7YCYEhZr777CFQv6p3JEvFCpO7u1SQAQWgHFbyEldeRmmsWtQ');