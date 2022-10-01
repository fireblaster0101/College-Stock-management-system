<?php

  // DB Params
  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASS', '');
  define('DB_NAME', 'stockdb');



  //set default timezone
  date_default_timezone_set('Asia/Kolkata');

  // App Root
  define('APPROOT', dirname(dirname(__FILE__)));
  // URL Root
  define('URLROOT', 'http://localhost/stock-management/dept');
  // Site Name
  define('SITENAME', 'STOCK MANAGEMENT SYSTEM');
  // App Version
  define('APPVERSION', '1.0.0');