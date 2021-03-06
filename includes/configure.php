<?php
  define('HTTP_SERVER', '');
  define('HTTPS_SERVER', '');
  define('ENABLE_SSL', false);
  define('HTTP_COOKIE_DOMAIN', '');
  define('HTTPS_COOKIE_DOMAIN', '');
  define('HTTP_COOKIE_PATH', '');
  define('HTTPS_COOKIE_PATH', '');
  define('DIR_WS_HTTP_CATALOG', '');
  define('DIR_WS_HTTPS_CATALOG', '');
  define('DIR_WS_IMAGES', 'images/');

  define('DIR_WS_DOWNLOAD_PUBLIC', 'pub/');
  define('DIR_FS_CATALOG', dirname($_SERVER['SCRIPT_FILENAME']));
  define('DIR_FS_WORK', '/tmp/');
  define('DIR_FS_DOWNLOAD', DIR_FS_CATALOG . 'download/');
  define('DIR_FS_DOWNLOAD_PUBLIC', DIR_FS_CATALOG . 'pub/');
  define('DIR_FS_BACKUP', DIR_FS_CATALOG . 'admin/backups/');

  define('DB_SERVER', '');
  define('DB_SERVER_USERNAME', '');
  define('DB_SERVER_PASSWORD', '');
  define('DB_SERVER_PORT', '');
  define('DB_DATABASE', 'oscommerce');
  define('DB_DATABASE_CLASS', 'mysqli');
  define('DB_TABLE_PREFIX', 'osc_');
  define('DB_SERVER_PERSISTENT_CONNECTIONS', false);
  define('STORE_SESSIONS', '');
?>
