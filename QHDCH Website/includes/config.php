<?php

	//*** this a constant declaration file
    //$dsn = 'mysql:dbname=testdb;host=127.0.0.1';
   define("LANGUAGE_PATH", "languages/");
   
   define("DB_DSN", "mysql:host=localhost; dbname=qhdch_db");
   define("DB_HOST","localhost");
   define("DB_NAME","qhdch_db");
   define("DB_USERNAME", "root");
   define("DB_PASSWORD", "namayan5214316");
   define("TBL_USERS", "users");
   define("TBL_USER_OPTIONS", "useroptions");
   define("TBL_STATUS", "status");
   define("TBL_RECIPES", "recipes");
   define("TBL_POSTS","posts");
   define("TBL_NOTIFICATIONS","notifications");
   define("TBL_GROUPS","groups");
   define("TBL_BLOCKED_USERS","blockedusers");
   define("TBL_FRIENS","friends");
   define("TBL_GROUP_MEMEBERS","groupmembers");
   define("TBL_AUTH_TOKENS","auth_token");
   define("TBL_LOVES","loves");
   define("TBL_LIKES","likes");
   define("TBL_HAHAS","hahas");
   
   
   $DEBUG_ECHO = true;
   
   const SALT_HEADER = "\xDE\xF0\x00\x00";
   



?>
