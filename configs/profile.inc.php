<?php
define('FRONT_STYLE', 'default/');
define('ADMIN_STYLE','admin/');
define('SMARTY_SETCACHEDIR',ROOT_PATH.'/cache/');
define('SMARTY_SETTEMPLATEDIR',ROOT_PATH.'/view/');
define('SMARTY_SETCOMPILEDIR',ROOT_PATH.'/compile/');
define('SMARTY_SETCONFIGDIR',ROOT_PATH.'/configs/');
define('SMARTY_CACHING',0);
define('SMARTY_CACHE_LIFETIME',60*60*24);

//last url
define('PREV_URL',@$_SERVER['HTTP_REFERER']);
define('PAGE_SIZE',10);
//upload directory
define('UPLOAD_DIR','upload/');

//database configs
define('DB_DSN','mysql:host=localhost;dbname=mall2');
define('DB_USER','root');
define('DB_PWD', '');
define('DB_CHARESET','SET NAMES UTF8');
//database frefix
define('DB_FREFIX','mengranzhang_wbsd14_ass2_');




?>
