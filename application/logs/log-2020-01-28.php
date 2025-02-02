<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2020-01-28 01:53:25 --> Config Class Initialized
INFO - 2020-01-28 01:53:25 --> Hooks Class Initialized
DEBUG - 2020-01-28 01:53:25 --> UTF-8 Support Enabled
INFO - 2020-01-28 01:53:25 --> Utf8 Class Initialized
INFO - 2020-01-28 01:53:25 --> URI Class Initialized
INFO - 2020-01-28 01:53:25 --> Router Class Initialized
INFO - 2020-01-28 01:53:25 --> Output Class Initialized
INFO - 2020-01-28 01:53:25 --> Security Class Initialized
DEBUG - 2020-01-28 01:53:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 01:53:25 --> Input Class Initialized
INFO - 2020-01-28 01:53:25 --> Language Class Initialized
INFO - 2020-01-28 01:53:25 --> Language Class Initialized
INFO - 2020-01-28 01:53:25 --> Config Class Initialized
INFO - 2020-01-28 01:53:25 --> Loader Class Initialized
INFO - 2020-01-28 01:53:26 --> Helper loaded: url_helper
INFO - 2020-01-28 01:53:26 --> Helper loaded: file_helper
INFO - 2020-01-28 01:53:26 --> Helper loaded: form_helper
INFO - 2020-01-28 01:53:26 --> Helper loaded: my_helper
INFO - 2020-01-28 01:53:26 --> Database Driver Class Initialized
DEBUG - 2020-01-28 01:53:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 01:53:26 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 01:53:26 --> Controller Class Initialized
INFO - 2020-01-28 01:53:26 --> Final output sent to browser
DEBUG - 2020-01-28 01:53:26 --> Total execution time: 0.8368
INFO - 2020-01-28 01:53:28 --> Config Class Initialized
INFO - 2020-01-28 01:53:28 --> Hooks Class Initialized
DEBUG - 2020-01-28 01:53:28 --> UTF-8 Support Enabled
INFO - 2020-01-28 01:53:28 --> Utf8 Class Initialized
INFO - 2020-01-28 01:53:28 --> URI Class Initialized
INFO - 2020-01-28 01:53:28 --> Router Class Initialized
INFO - 2020-01-28 01:53:28 --> Output Class Initialized
INFO - 2020-01-28 01:53:28 --> Security Class Initialized
DEBUG - 2020-01-28 01:53:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 01:53:29 --> Input Class Initialized
INFO - 2020-01-28 01:53:29 --> Language Class Initialized
INFO - 2020-01-28 01:53:29 --> Language Class Initialized
INFO - 2020-01-28 01:53:29 --> Config Class Initialized
INFO - 2020-01-28 01:53:29 --> Loader Class Initialized
INFO - 2020-01-28 01:53:29 --> Helper loaded: url_helper
INFO - 2020-01-28 01:53:29 --> Helper loaded: file_helper
INFO - 2020-01-28 01:53:29 --> Helper loaded: form_helper
INFO - 2020-01-28 01:53:29 --> Helper loaded: my_helper
INFO - 2020-01-28 01:53:29 --> Database Driver Class Initialized
DEBUG - 2020-01-28 01:53:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 01:53:29 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 01:53:29 --> Controller Class Initialized
INFO - 2020-01-28 01:53:29 --> Final output sent to browser
DEBUG - 2020-01-28 01:53:29 --> Total execution time: 0.2592
INFO - 2020-01-28 01:53:34 --> Config Class Initialized
INFO - 2020-01-28 01:53:34 --> Hooks Class Initialized
DEBUG - 2020-01-28 01:53:34 --> UTF-8 Support Enabled
INFO - 2020-01-28 01:53:34 --> Utf8 Class Initialized
INFO - 2020-01-28 01:53:34 --> URI Class Initialized
INFO - 2020-01-28 01:53:34 --> Router Class Initialized
INFO - 2020-01-28 01:53:34 --> Output Class Initialized
INFO - 2020-01-28 01:53:34 --> Security Class Initialized
DEBUG - 2020-01-28 01:53:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 01:53:34 --> Input Class Initialized
INFO - 2020-01-28 01:53:34 --> Language Class Initialized
INFO - 2020-01-28 01:53:34 --> Language Class Initialized
INFO - 2020-01-28 01:53:34 --> Config Class Initialized
INFO - 2020-01-28 01:53:34 --> Loader Class Initialized
INFO - 2020-01-28 01:53:34 --> Helper loaded: url_helper
INFO - 2020-01-28 01:53:34 --> Helper loaded: file_helper
INFO - 2020-01-28 01:53:34 --> Helper loaded: form_helper
INFO - 2020-01-28 01:53:34 --> Helper loaded: my_helper
INFO - 2020-01-28 01:53:34 --> Database Driver Class Initialized
DEBUG - 2020-01-28 01:53:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 01:53:34 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 01:53:34 --> Controller Class Initialized
ERROR - 2020-01-28 01:53:34 --> Severity: Notice --> Undefined offset: 1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 39
ERROR - 2020-01-28 01:53:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND a.tasm = '20182'' at line 8 - Invalid query: SELECT 
                                b.nama nmmapel, b.kkm, c.nama nmkelas, d.nama nmguru
                                FROM t_guru_mapel a
                                INNER JOIN m_mapel b ON a.id_mapel = b.id 
                                INNER JOIN m_kelas c ON a.id_kelas = c.id
                                INNER JOIN m_guru d ON a.id_guru = d.id 
                                WHERE b.id = 1 AND c.id =  
                                AND a.tasm = '20182'
INFO - 2020-01-28 01:53:34 --> Language file loaded: language/english/db_lang.php
INFO - 2020-01-28 01:54:39 --> Config Class Initialized
INFO - 2020-01-28 01:54:39 --> Hooks Class Initialized
DEBUG - 2020-01-28 01:54:39 --> UTF-8 Support Enabled
INFO - 2020-01-28 01:54:39 --> Utf8 Class Initialized
INFO - 2020-01-28 01:54:39 --> URI Class Initialized
INFO - 2020-01-28 01:54:39 --> Router Class Initialized
INFO - 2020-01-28 01:54:39 --> Output Class Initialized
INFO - 2020-01-28 01:54:39 --> Security Class Initialized
DEBUG - 2020-01-28 01:54:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 01:54:39 --> Input Class Initialized
INFO - 2020-01-28 01:54:39 --> Language Class Initialized
INFO - 2020-01-28 01:54:39 --> Language Class Initialized
INFO - 2020-01-28 01:54:39 --> Config Class Initialized
INFO - 2020-01-28 01:54:39 --> Loader Class Initialized
INFO - 2020-01-28 01:54:39 --> Helper loaded: url_helper
INFO - 2020-01-28 01:54:39 --> Helper loaded: file_helper
INFO - 2020-01-28 01:54:39 --> Helper loaded: form_helper
INFO - 2020-01-28 01:54:39 --> Helper loaded: my_helper
INFO - 2020-01-28 01:54:39 --> Database Driver Class Initialized
DEBUG - 2020-01-28 01:54:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 01:54:39 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 01:54:39 --> Controller Class Initialized
ERROR - 2020-01-28 01:54:39 --> Severity: Notice --> Undefined offset: 1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 39
ERROR - 2020-01-28 01:54:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND a.tasm = '20182'' at line 8 - Invalid query: SELECT 
                                b.nama nmmapel, b.kkm, c.nama nmkelas, d.nama nmguru
                                FROM t_guru_mapel a
                                INNER JOIN m_mapel b ON a.id_mapel = b.id 
                                INNER JOIN m_kelas c ON a.id_kelas = c.id
                                INNER JOIN m_guru d ON a.id_guru = d.id 
                                WHERE b.id = 1 AND c.id =  
                                AND a.tasm = '20182'
INFO - 2020-01-28 01:54:39 --> Language file loaded: language/english/db_lang.php
INFO - 2020-01-28 01:54:40 --> Config Class Initialized
INFO - 2020-01-28 01:54:40 --> Hooks Class Initialized
DEBUG - 2020-01-28 01:54:40 --> UTF-8 Support Enabled
INFO - 2020-01-28 01:54:40 --> Utf8 Class Initialized
INFO - 2020-01-28 01:54:40 --> URI Class Initialized
INFO - 2020-01-28 01:54:40 --> Router Class Initialized
INFO - 2020-01-28 01:54:40 --> Output Class Initialized
INFO - 2020-01-28 01:54:40 --> Security Class Initialized
DEBUG - 2020-01-28 01:54:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 01:54:40 --> Input Class Initialized
INFO - 2020-01-28 01:54:40 --> Language Class Initialized
INFO - 2020-01-28 01:54:40 --> Language Class Initialized
INFO - 2020-01-28 01:54:40 --> Config Class Initialized
INFO - 2020-01-28 01:54:40 --> Loader Class Initialized
INFO - 2020-01-28 01:54:40 --> Helper loaded: url_helper
INFO - 2020-01-28 01:54:40 --> Helper loaded: file_helper
INFO - 2020-01-28 01:54:40 --> Helper loaded: form_helper
INFO - 2020-01-28 01:54:40 --> Helper loaded: my_helper
INFO - 2020-01-28 01:54:40 --> Database Driver Class Initialized
DEBUG - 2020-01-28 01:54:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 01:54:40 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 01:54:40 --> Controller Class Initialized
DEBUG - 2020-01-28 01:54:40 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/list.php
DEBUG - 2020-01-28 01:54:40 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 01:54:40 --> Final output sent to browser
DEBUG - 2020-01-28 01:54:40 --> Total execution time: 0.3820
INFO - 2020-01-28 01:54:41 --> Config Class Initialized
INFO - 2020-01-28 01:54:41 --> Hooks Class Initialized
DEBUG - 2020-01-28 01:54:41 --> UTF-8 Support Enabled
INFO - 2020-01-28 01:54:41 --> Utf8 Class Initialized
INFO - 2020-01-28 01:54:41 --> URI Class Initialized
INFO - 2020-01-28 01:54:41 --> Router Class Initialized
INFO - 2020-01-28 01:54:41 --> Output Class Initialized
INFO - 2020-01-28 01:54:41 --> Security Class Initialized
DEBUG - 2020-01-28 01:54:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 01:54:41 --> Input Class Initialized
INFO - 2020-01-28 01:54:41 --> Language Class Initialized
INFO - 2020-01-28 01:54:41 --> Language Class Initialized
INFO - 2020-01-28 01:54:41 --> Config Class Initialized
INFO - 2020-01-28 01:54:41 --> Loader Class Initialized
INFO - 2020-01-28 01:54:41 --> Helper loaded: url_helper
INFO - 2020-01-28 01:54:41 --> Helper loaded: file_helper
INFO - 2020-01-28 01:54:41 --> Helper loaded: form_helper
INFO - 2020-01-28 01:54:41 --> Helper loaded: my_helper
INFO - 2020-01-28 01:54:41 --> Database Driver Class Initialized
DEBUG - 2020-01-28 01:54:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 01:54:41 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 01:54:41 --> Controller Class Initialized
INFO - 2020-01-28 01:54:43 --> Config Class Initialized
INFO - 2020-01-28 01:54:43 --> Hooks Class Initialized
DEBUG - 2020-01-28 01:54:43 --> UTF-8 Support Enabled
INFO - 2020-01-28 01:54:43 --> Utf8 Class Initialized
INFO - 2020-01-28 01:54:43 --> URI Class Initialized
INFO - 2020-01-28 01:54:43 --> Router Class Initialized
INFO - 2020-01-28 01:54:43 --> Output Class Initialized
INFO - 2020-01-28 01:54:43 --> Security Class Initialized
DEBUG - 2020-01-28 01:54:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 01:54:43 --> Input Class Initialized
INFO - 2020-01-28 01:54:43 --> Language Class Initialized
INFO - 2020-01-28 01:54:43 --> Language Class Initialized
INFO - 2020-01-28 01:54:43 --> Config Class Initialized
INFO - 2020-01-28 01:54:43 --> Loader Class Initialized
INFO - 2020-01-28 01:54:43 --> Helper loaded: url_helper
INFO - 2020-01-28 01:54:43 --> Helper loaded: file_helper
INFO - 2020-01-28 01:54:43 --> Helper loaded: form_helper
INFO - 2020-01-28 01:54:43 --> Helper loaded: my_helper
INFO - 2020-01-28 01:54:43 --> Database Driver Class Initialized
DEBUG - 2020-01-28 01:54:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 01:54:43 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 01:54:43 --> Controller Class Initialized
DEBUG - 2020-01-28 01:54:43 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/login/views/login.php
DEBUG - 2020-01-28 01:54:43 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 01:54:43 --> Final output sent to browser
DEBUG - 2020-01-28 01:54:43 --> Total execution time: 0.2946
INFO - 2020-01-28 01:54:48 --> Config Class Initialized
INFO - 2020-01-28 01:54:48 --> Hooks Class Initialized
DEBUG - 2020-01-28 01:54:48 --> UTF-8 Support Enabled
INFO - 2020-01-28 01:54:48 --> Utf8 Class Initialized
INFO - 2020-01-28 01:54:48 --> URI Class Initialized
INFO - 2020-01-28 01:54:48 --> Router Class Initialized
INFO - 2020-01-28 01:54:48 --> Output Class Initialized
INFO - 2020-01-28 01:54:48 --> Security Class Initialized
DEBUG - 2020-01-28 01:54:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 01:54:48 --> Input Class Initialized
INFO - 2020-01-28 01:54:48 --> Language Class Initialized
INFO - 2020-01-28 01:54:48 --> Language Class Initialized
INFO - 2020-01-28 01:54:48 --> Config Class Initialized
INFO - 2020-01-28 01:54:48 --> Loader Class Initialized
INFO - 2020-01-28 01:54:48 --> Helper loaded: url_helper
INFO - 2020-01-28 01:54:48 --> Helper loaded: file_helper
INFO - 2020-01-28 01:54:48 --> Helper loaded: form_helper
INFO - 2020-01-28 01:54:48 --> Helper loaded: my_helper
INFO - 2020-01-28 01:54:48 --> Database Driver Class Initialized
DEBUG - 2020-01-28 01:54:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 01:54:48 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 01:54:48 --> Controller Class Initialized
INFO - 2020-01-28 01:54:48 --> Helper loaded: cookie_helper
INFO - 2020-01-28 01:54:48 --> Final output sent to browser
DEBUG - 2020-01-28 01:54:48 --> Total execution time: 0.3067
INFO - 2020-01-28 01:54:50 --> Config Class Initialized
INFO - 2020-01-28 01:54:50 --> Hooks Class Initialized
DEBUG - 2020-01-28 01:54:50 --> UTF-8 Support Enabled
INFO - 2020-01-28 01:54:50 --> Utf8 Class Initialized
INFO - 2020-01-28 01:54:50 --> URI Class Initialized
INFO - 2020-01-28 01:54:50 --> Router Class Initialized
INFO - 2020-01-28 01:54:50 --> Output Class Initialized
INFO - 2020-01-28 01:54:50 --> Security Class Initialized
DEBUG - 2020-01-28 01:54:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 01:54:50 --> Input Class Initialized
INFO - 2020-01-28 01:54:50 --> Language Class Initialized
INFO - 2020-01-28 01:54:50 --> Language Class Initialized
INFO - 2020-01-28 01:54:50 --> Config Class Initialized
INFO - 2020-01-28 01:54:50 --> Loader Class Initialized
INFO - 2020-01-28 01:54:50 --> Helper loaded: url_helper
INFO - 2020-01-28 01:54:50 --> Helper loaded: file_helper
INFO - 2020-01-28 01:54:50 --> Helper loaded: form_helper
INFO - 2020-01-28 01:54:50 --> Helper loaded: my_helper
INFO - 2020-01-28 01:54:50 --> Database Driver Class Initialized
DEBUG - 2020-01-28 01:54:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 01:54:50 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 01:54:50 --> Controller Class Initialized
DEBUG - 2020-01-28 01:54:50 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/home/views/v_home.php
DEBUG - 2020-01-28 01:54:50 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 01:54:50 --> Final output sent to browser
DEBUG - 2020-01-28 01:54:50 --> Total execution time: 0.4501
INFO - 2020-01-28 01:54:53 --> Config Class Initialized
INFO - 2020-01-28 01:54:53 --> Hooks Class Initialized
DEBUG - 2020-01-28 01:54:53 --> UTF-8 Support Enabled
INFO - 2020-01-28 01:54:53 --> Utf8 Class Initialized
INFO - 2020-01-28 01:54:53 --> URI Class Initialized
INFO - 2020-01-28 01:54:53 --> Router Class Initialized
INFO - 2020-01-28 01:54:53 --> Output Class Initialized
INFO - 2020-01-28 01:54:53 --> Security Class Initialized
DEBUG - 2020-01-28 01:54:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 01:54:53 --> Input Class Initialized
INFO - 2020-01-28 01:54:53 --> Language Class Initialized
INFO - 2020-01-28 01:54:53 --> Language Class Initialized
INFO - 2020-01-28 01:54:53 --> Config Class Initialized
INFO - 2020-01-28 01:54:53 --> Loader Class Initialized
INFO - 2020-01-28 01:54:53 --> Helper loaded: url_helper
INFO - 2020-01-28 01:54:53 --> Helper loaded: file_helper
INFO - 2020-01-28 01:54:53 --> Helper loaded: form_helper
INFO - 2020-01-28 01:54:53 --> Helper loaded: my_helper
INFO - 2020-01-28 01:54:53 --> Database Driver Class Initialized
DEBUG - 2020-01-28 01:54:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 01:54:53 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 01:54:53 --> Controller Class Initialized
DEBUG - 2020-01-28 01:54:53 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/view_mapel/views/v_view_mapel.php
DEBUG - 2020-01-28 01:54:53 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 01:54:53 --> Final output sent to browser
DEBUG - 2020-01-28 01:54:53 --> Total execution time: 0.3409
INFO - 2020-01-28 01:54:55 --> Config Class Initialized
INFO - 2020-01-28 01:54:55 --> Hooks Class Initialized
DEBUG - 2020-01-28 01:54:55 --> UTF-8 Support Enabled
INFO - 2020-01-28 01:54:55 --> Utf8 Class Initialized
INFO - 2020-01-28 01:54:56 --> URI Class Initialized
INFO - 2020-01-28 01:54:56 --> Router Class Initialized
INFO - 2020-01-28 01:54:56 --> Output Class Initialized
INFO - 2020-01-28 01:54:56 --> Security Class Initialized
DEBUG - 2020-01-28 01:54:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 01:54:56 --> Input Class Initialized
INFO - 2020-01-28 01:54:56 --> Language Class Initialized
INFO - 2020-01-28 01:54:56 --> Language Class Initialized
INFO - 2020-01-28 01:54:56 --> Config Class Initialized
INFO - 2020-01-28 01:54:56 --> Loader Class Initialized
INFO - 2020-01-28 01:54:56 --> Helper loaded: url_helper
INFO - 2020-01-28 01:54:56 --> Helper loaded: file_helper
INFO - 2020-01-28 01:54:56 --> Helper loaded: form_helper
INFO - 2020-01-28 01:54:56 --> Helper loaded: my_helper
INFO - 2020-01-28 01:54:56 --> Database Driver Class Initialized
DEBUG - 2020-01-28 01:54:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 01:54:56 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 01:54:56 --> Controller Class Initialized
DEBUG - 2020-01-28 01:54:56 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/list.php
DEBUG - 2020-01-28 01:54:56 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 01:54:56 --> Final output sent to browser
DEBUG - 2020-01-28 01:54:56 --> Total execution time: 0.3115
INFO - 2020-01-28 01:54:56 --> Config Class Initialized
INFO - 2020-01-28 01:54:56 --> Hooks Class Initialized
DEBUG - 2020-01-28 01:54:56 --> UTF-8 Support Enabled
INFO - 2020-01-28 01:54:56 --> Utf8 Class Initialized
INFO - 2020-01-28 01:54:56 --> URI Class Initialized
INFO - 2020-01-28 01:54:56 --> Router Class Initialized
INFO - 2020-01-28 01:54:56 --> Output Class Initialized
INFO - 2020-01-28 01:54:56 --> Security Class Initialized
DEBUG - 2020-01-28 01:54:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 01:54:56 --> Input Class Initialized
INFO - 2020-01-28 01:54:56 --> Language Class Initialized
INFO - 2020-01-28 01:54:56 --> Language Class Initialized
INFO - 2020-01-28 01:54:56 --> Config Class Initialized
INFO - 2020-01-28 01:54:56 --> Loader Class Initialized
INFO - 2020-01-28 01:54:56 --> Helper loaded: url_helper
INFO - 2020-01-28 01:54:56 --> Helper loaded: file_helper
INFO - 2020-01-28 01:54:56 --> Helper loaded: form_helper
INFO - 2020-01-28 01:54:56 --> Helper loaded: my_helper
INFO - 2020-01-28 01:54:56 --> Database Driver Class Initialized
DEBUG - 2020-01-28 01:54:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 01:54:56 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 01:54:56 --> Controller Class Initialized
INFO - 2020-01-28 01:54:58 --> Config Class Initialized
INFO - 2020-01-28 01:54:58 --> Hooks Class Initialized
DEBUG - 2020-01-28 01:54:58 --> UTF-8 Support Enabled
INFO - 2020-01-28 01:54:58 --> Utf8 Class Initialized
INFO - 2020-01-28 01:54:58 --> URI Class Initialized
INFO - 2020-01-28 01:54:58 --> Router Class Initialized
INFO - 2020-01-28 01:54:58 --> Output Class Initialized
INFO - 2020-01-28 01:54:58 --> Security Class Initialized
DEBUG - 2020-01-28 01:54:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 01:54:58 --> Input Class Initialized
INFO - 2020-01-28 01:54:58 --> Language Class Initialized
INFO - 2020-01-28 01:54:58 --> Language Class Initialized
INFO - 2020-01-28 01:54:58 --> Config Class Initialized
INFO - 2020-01-28 01:54:58 --> Loader Class Initialized
INFO - 2020-01-28 01:54:58 --> Helper loaded: url_helper
INFO - 2020-01-28 01:54:58 --> Helper loaded: file_helper
INFO - 2020-01-28 01:54:58 --> Helper loaded: form_helper
INFO - 2020-01-28 01:54:58 --> Helper loaded: my_helper
INFO - 2020-01-28 01:54:58 --> Database Driver Class Initialized
DEBUG - 2020-01-28 01:54:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 01:54:58 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 01:54:58 --> Controller Class Initialized
DEBUG - 2020-01-28 01:54:58 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 01:54:58 --> Final output sent to browser
DEBUG - 2020-01-28 01:54:58 --> Total execution time: 0.3702
INFO - 2020-01-28 01:55:58 --> Config Class Initialized
INFO - 2020-01-28 01:55:59 --> Hooks Class Initialized
DEBUG - 2020-01-28 01:55:59 --> UTF-8 Support Enabled
INFO - 2020-01-28 01:55:59 --> Utf8 Class Initialized
INFO - 2020-01-28 01:55:59 --> URI Class Initialized
INFO - 2020-01-28 01:55:59 --> Router Class Initialized
INFO - 2020-01-28 01:55:59 --> Output Class Initialized
INFO - 2020-01-28 01:55:59 --> Security Class Initialized
DEBUG - 2020-01-28 01:55:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 01:55:59 --> Input Class Initialized
INFO - 2020-01-28 01:55:59 --> Language Class Initialized
INFO - 2020-01-28 01:55:59 --> Language Class Initialized
INFO - 2020-01-28 01:55:59 --> Config Class Initialized
INFO - 2020-01-28 01:55:59 --> Loader Class Initialized
INFO - 2020-01-28 01:55:59 --> Helper loaded: url_helper
INFO - 2020-01-28 01:55:59 --> Helper loaded: file_helper
INFO - 2020-01-28 01:55:59 --> Helper loaded: form_helper
INFO - 2020-01-28 01:55:59 --> Helper loaded: my_helper
INFO - 2020-01-28 01:55:59 --> Database Driver Class Initialized
DEBUG - 2020-01-28 01:55:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 01:55:59 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 01:55:59 --> Controller Class Initialized
DEBUG - 2020-01-28 01:55:59 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 01:55:59 --> Final output sent to browser
DEBUG - 2020-01-28 01:55:59 --> Total execution time: 0.3134
INFO - 2020-01-28 01:56:08 --> Config Class Initialized
INFO - 2020-01-28 01:56:08 --> Hooks Class Initialized
DEBUG - 2020-01-28 01:56:08 --> UTF-8 Support Enabled
INFO - 2020-01-28 01:56:08 --> Utf8 Class Initialized
INFO - 2020-01-28 01:56:08 --> URI Class Initialized
INFO - 2020-01-28 01:56:08 --> Router Class Initialized
INFO - 2020-01-28 01:56:08 --> Output Class Initialized
INFO - 2020-01-28 01:56:08 --> Security Class Initialized
DEBUG - 2020-01-28 01:56:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 01:56:08 --> Input Class Initialized
INFO - 2020-01-28 01:56:08 --> Language Class Initialized
INFO - 2020-01-28 01:56:08 --> Language Class Initialized
INFO - 2020-01-28 01:56:08 --> Config Class Initialized
INFO - 2020-01-28 01:56:08 --> Loader Class Initialized
INFO - 2020-01-28 01:56:08 --> Helper loaded: url_helper
INFO - 2020-01-28 01:56:08 --> Helper loaded: file_helper
INFO - 2020-01-28 01:56:08 --> Helper loaded: form_helper
INFO - 2020-01-28 01:56:08 --> Helper loaded: my_helper
INFO - 2020-01-28 01:56:08 --> Database Driver Class Initialized
DEBUG - 2020-01-28 01:56:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 01:56:08 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 01:56:08 --> Controller Class Initialized
INFO - 2020-01-28 01:56:08 --> Final output sent to browser
DEBUG - 2020-01-28 01:56:08 --> Total execution time: 0.2772
INFO - 2020-01-28 01:56:29 --> Config Class Initialized
INFO - 2020-01-28 01:56:29 --> Hooks Class Initialized
DEBUG - 2020-01-28 01:56:29 --> UTF-8 Support Enabled
INFO - 2020-01-28 01:56:29 --> Utf8 Class Initialized
INFO - 2020-01-28 01:56:29 --> URI Class Initialized
INFO - 2020-01-28 01:56:29 --> Router Class Initialized
INFO - 2020-01-28 01:56:29 --> Output Class Initialized
INFO - 2020-01-28 01:56:29 --> Security Class Initialized
DEBUG - 2020-01-28 01:56:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 01:56:29 --> Input Class Initialized
INFO - 2020-01-28 01:56:29 --> Language Class Initialized
INFO - 2020-01-28 01:56:29 --> Language Class Initialized
INFO - 2020-01-28 01:56:29 --> Config Class Initialized
INFO - 2020-01-28 01:56:29 --> Loader Class Initialized
INFO - 2020-01-28 01:56:29 --> Helper loaded: url_helper
INFO - 2020-01-28 01:56:29 --> Helper loaded: file_helper
INFO - 2020-01-28 01:56:29 --> Helper loaded: form_helper
INFO - 2020-01-28 01:56:29 --> Helper loaded: my_helper
INFO - 2020-01-28 01:56:29 --> Database Driver Class Initialized
DEBUG - 2020-01-28 01:56:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 01:56:29 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 01:56:29 --> Controller Class Initialized
INFO - 2020-01-28 01:56:29 --> Final output sent to browser
DEBUG - 2020-01-28 01:56:29 --> Total execution time: 0.2552
INFO - 2020-01-28 01:56:29 --> Config Class Initialized
INFO - 2020-01-28 01:56:29 --> Hooks Class Initialized
DEBUG - 2020-01-28 01:56:29 --> UTF-8 Support Enabled
INFO - 2020-01-28 01:56:29 --> Utf8 Class Initialized
INFO - 2020-01-28 01:56:29 --> URI Class Initialized
INFO - 2020-01-28 01:56:29 --> Router Class Initialized
INFO - 2020-01-28 01:56:29 --> Output Class Initialized
INFO - 2020-01-28 01:56:29 --> Security Class Initialized
DEBUG - 2020-01-28 01:56:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 01:56:29 --> Input Class Initialized
INFO - 2020-01-28 01:56:29 --> Language Class Initialized
INFO - 2020-01-28 01:56:29 --> Language Class Initialized
INFO - 2020-01-28 01:56:29 --> Config Class Initialized
INFO - 2020-01-28 01:56:29 --> Loader Class Initialized
INFO - 2020-01-28 01:56:29 --> Helper loaded: url_helper
INFO - 2020-01-28 01:56:29 --> Helper loaded: file_helper
INFO - 2020-01-28 01:56:29 --> Helper loaded: form_helper
INFO - 2020-01-28 01:56:29 --> Helper loaded: my_helper
INFO - 2020-01-28 01:56:29 --> Database Driver Class Initialized
DEBUG - 2020-01-28 01:56:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 01:56:29 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 01:56:29 --> Controller Class Initialized
INFO - 2020-01-28 01:56:32 --> Config Class Initialized
INFO - 2020-01-28 01:56:32 --> Hooks Class Initialized
DEBUG - 2020-01-28 01:56:32 --> UTF-8 Support Enabled
INFO - 2020-01-28 01:56:32 --> Utf8 Class Initialized
INFO - 2020-01-28 01:56:32 --> URI Class Initialized
INFO - 2020-01-28 01:56:32 --> Router Class Initialized
INFO - 2020-01-28 01:56:32 --> Output Class Initialized
INFO - 2020-01-28 01:56:32 --> Security Class Initialized
DEBUG - 2020-01-28 01:56:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 01:56:32 --> Input Class Initialized
INFO - 2020-01-28 01:56:32 --> Language Class Initialized
INFO - 2020-01-28 01:56:32 --> Language Class Initialized
INFO - 2020-01-28 01:56:32 --> Config Class Initialized
INFO - 2020-01-28 01:56:32 --> Loader Class Initialized
INFO - 2020-01-28 01:56:32 --> Helper loaded: url_helper
INFO - 2020-01-28 01:56:32 --> Helper loaded: file_helper
INFO - 2020-01-28 01:56:32 --> Helper loaded: form_helper
INFO - 2020-01-28 01:56:32 --> Helper loaded: my_helper
INFO - 2020-01-28 01:56:32 --> Database Driver Class Initialized
DEBUG - 2020-01-28 01:56:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 01:56:32 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 01:56:32 --> Controller Class Initialized
INFO - 2020-01-28 01:56:32 --> Final output sent to browser
DEBUG - 2020-01-28 01:56:32 --> Total execution time: 0.2954
INFO - 2020-01-28 01:56:41 --> Config Class Initialized
INFO - 2020-01-28 01:56:41 --> Hooks Class Initialized
DEBUG - 2020-01-28 01:56:41 --> UTF-8 Support Enabled
INFO - 2020-01-28 01:56:41 --> Utf8 Class Initialized
INFO - 2020-01-28 01:56:41 --> URI Class Initialized
INFO - 2020-01-28 01:56:41 --> Router Class Initialized
INFO - 2020-01-28 01:56:41 --> Output Class Initialized
INFO - 2020-01-28 01:56:41 --> Security Class Initialized
DEBUG - 2020-01-28 01:56:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 01:56:41 --> Input Class Initialized
INFO - 2020-01-28 01:56:41 --> Language Class Initialized
INFO - 2020-01-28 01:56:41 --> Language Class Initialized
INFO - 2020-01-28 01:56:41 --> Config Class Initialized
INFO - 2020-01-28 01:56:41 --> Loader Class Initialized
INFO - 2020-01-28 01:56:41 --> Helper loaded: url_helper
INFO - 2020-01-28 01:56:41 --> Helper loaded: file_helper
INFO - 2020-01-28 01:56:41 --> Helper loaded: form_helper
INFO - 2020-01-28 01:56:41 --> Helper loaded: my_helper
INFO - 2020-01-28 01:56:41 --> Database Driver Class Initialized
DEBUG - 2020-01-28 01:56:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 01:56:41 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 01:56:41 --> Controller Class Initialized
INFO - 2020-01-28 01:56:41 --> Final output sent to browser
DEBUG - 2020-01-28 01:56:41 --> Total execution time: 0.3066
INFO - 2020-01-28 01:56:43 --> Config Class Initialized
INFO - 2020-01-28 01:56:43 --> Hooks Class Initialized
DEBUG - 2020-01-28 01:56:43 --> UTF-8 Support Enabled
INFO - 2020-01-28 01:56:43 --> Utf8 Class Initialized
INFO - 2020-01-28 01:56:43 --> URI Class Initialized
INFO - 2020-01-28 01:56:43 --> Router Class Initialized
INFO - 2020-01-28 01:56:43 --> Output Class Initialized
INFO - 2020-01-28 01:56:43 --> Security Class Initialized
DEBUG - 2020-01-28 01:56:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 01:56:43 --> Input Class Initialized
INFO - 2020-01-28 01:56:43 --> Language Class Initialized
INFO - 2020-01-28 01:56:43 --> Language Class Initialized
INFO - 2020-01-28 01:56:43 --> Config Class Initialized
INFO - 2020-01-28 01:56:43 --> Loader Class Initialized
INFO - 2020-01-28 01:56:43 --> Helper loaded: url_helper
INFO - 2020-01-28 01:56:43 --> Helper loaded: file_helper
INFO - 2020-01-28 01:56:43 --> Helper loaded: form_helper
INFO - 2020-01-28 01:56:43 --> Helper loaded: my_helper
INFO - 2020-01-28 01:56:44 --> Database Driver Class Initialized
DEBUG - 2020-01-28 01:56:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 01:56:44 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 01:56:44 --> Controller Class Initialized
DEBUG - 2020-01-28 01:56:44 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 01:56:44 --> Final output sent to browser
DEBUG - 2020-01-28 01:56:44 --> Total execution time: 0.3776
INFO - 2020-01-28 01:58:54 --> Config Class Initialized
INFO - 2020-01-28 01:58:54 --> Hooks Class Initialized
DEBUG - 2020-01-28 01:58:54 --> UTF-8 Support Enabled
INFO - 2020-01-28 01:58:54 --> Utf8 Class Initialized
INFO - 2020-01-28 01:58:54 --> URI Class Initialized
INFO - 2020-01-28 01:58:54 --> Router Class Initialized
INFO - 2020-01-28 01:58:54 --> Output Class Initialized
INFO - 2020-01-28 01:58:54 --> Security Class Initialized
DEBUG - 2020-01-28 01:58:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 01:58:54 --> Input Class Initialized
INFO - 2020-01-28 01:58:54 --> Language Class Initialized
INFO - 2020-01-28 01:58:54 --> Language Class Initialized
INFO - 2020-01-28 01:58:54 --> Config Class Initialized
INFO - 2020-01-28 01:58:54 --> Loader Class Initialized
INFO - 2020-01-28 01:58:54 --> Helper loaded: url_helper
INFO - 2020-01-28 01:58:54 --> Helper loaded: file_helper
INFO - 2020-01-28 01:58:54 --> Helper loaded: form_helper
INFO - 2020-01-28 01:58:54 --> Helper loaded: my_helper
INFO - 2020-01-28 01:58:54 --> Database Driver Class Initialized
DEBUG - 2020-01-28 01:58:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 01:58:54 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 01:58:54 --> Controller Class Initialized
DEBUG - 2020-01-28 01:58:54 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 01:58:54 --> Final output sent to browser
DEBUG - 2020-01-28 01:58:54 --> Total execution time: 0.3384
INFO - 2020-01-28 01:58:57 --> Config Class Initialized
INFO - 2020-01-28 01:58:57 --> Hooks Class Initialized
DEBUG - 2020-01-28 01:58:57 --> UTF-8 Support Enabled
INFO - 2020-01-28 01:58:57 --> Utf8 Class Initialized
INFO - 2020-01-28 01:58:57 --> URI Class Initialized
INFO - 2020-01-28 01:58:57 --> Router Class Initialized
INFO - 2020-01-28 01:58:57 --> Output Class Initialized
INFO - 2020-01-28 01:58:57 --> Security Class Initialized
DEBUG - 2020-01-28 01:58:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 01:58:57 --> Input Class Initialized
INFO - 2020-01-28 01:58:57 --> Language Class Initialized
INFO - 2020-01-28 01:58:57 --> Language Class Initialized
INFO - 2020-01-28 01:58:57 --> Config Class Initialized
INFO - 2020-01-28 01:58:57 --> Loader Class Initialized
INFO - 2020-01-28 01:58:57 --> Helper loaded: url_helper
INFO - 2020-01-28 01:58:57 --> Helper loaded: file_helper
INFO - 2020-01-28 01:58:57 --> Helper loaded: form_helper
INFO - 2020-01-28 01:58:57 --> Helper loaded: my_helper
INFO - 2020-01-28 01:58:57 --> Database Driver Class Initialized
DEBUG - 2020-01-28 01:58:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 01:58:57 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 01:58:57 --> Controller Class Initialized
DEBUG - 2020-01-28 01:58:57 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/list.php
DEBUG - 2020-01-28 01:58:57 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 01:58:57 --> Final output sent to browser
DEBUG - 2020-01-28 01:58:57 --> Total execution time: 0.4381
INFO - 2020-01-28 01:58:58 --> Config Class Initialized
INFO - 2020-01-28 01:58:58 --> Hooks Class Initialized
DEBUG - 2020-01-28 01:58:58 --> UTF-8 Support Enabled
INFO - 2020-01-28 01:58:58 --> Utf8 Class Initialized
INFO - 2020-01-28 01:58:58 --> URI Class Initialized
INFO - 2020-01-28 01:58:58 --> Router Class Initialized
INFO - 2020-01-28 01:58:58 --> Output Class Initialized
INFO - 2020-01-28 01:58:58 --> Security Class Initialized
DEBUG - 2020-01-28 01:58:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 01:58:58 --> Input Class Initialized
INFO - 2020-01-28 01:58:58 --> Language Class Initialized
INFO - 2020-01-28 01:58:58 --> Language Class Initialized
INFO - 2020-01-28 01:58:58 --> Config Class Initialized
INFO - 2020-01-28 01:58:58 --> Loader Class Initialized
INFO - 2020-01-28 01:58:58 --> Helper loaded: url_helper
INFO - 2020-01-28 01:58:58 --> Helper loaded: file_helper
INFO - 2020-01-28 01:58:58 --> Helper loaded: form_helper
INFO - 2020-01-28 01:58:58 --> Helper loaded: my_helper
INFO - 2020-01-28 01:58:58 --> Database Driver Class Initialized
DEBUG - 2020-01-28 01:58:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 01:58:58 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 01:58:58 --> Controller Class Initialized
INFO - 2020-01-28 01:58:58 --> Config Class Initialized
INFO - 2020-01-28 01:58:58 --> Hooks Class Initialized
DEBUG - 2020-01-28 01:58:58 --> UTF-8 Support Enabled
INFO - 2020-01-28 01:58:58 --> Utf8 Class Initialized
INFO - 2020-01-28 01:58:58 --> URI Class Initialized
INFO - 2020-01-28 01:58:58 --> Router Class Initialized
INFO - 2020-01-28 01:58:58 --> Output Class Initialized
INFO - 2020-01-28 01:58:58 --> Security Class Initialized
DEBUG - 2020-01-28 01:58:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 01:58:58 --> Input Class Initialized
INFO - 2020-01-28 01:58:58 --> Language Class Initialized
INFO - 2020-01-28 01:58:58 --> Language Class Initialized
INFO - 2020-01-28 01:58:58 --> Config Class Initialized
INFO - 2020-01-28 01:58:58 --> Loader Class Initialized
INFO - 2020-01-28 01:58:58 --> Helper loaded: url_helper
INFO - 2020-01-28 01:58:58 --> Helper loaded: file_helper
INFO - 2020-01-28 01:58:59 --> Helper loaded: form_helper
INFO - 2020-01-28 01:58:59 --> Helper loaded: my_helper
INFO - 2020-01-28 01:58:59 --> Database Driver Class Initialized
DEBUG - 2020-01-28 01:58:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 01:58:59 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 01:58:59 --> Controller Class Initialized
DEBUG - 2020-01-28 01:58:59 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 01:58:59 --> Final output sent to browser
DEBUG - 2020-01-28 01:58:59 --> Total execution time: 0.3360
INFO - 2020-01-28 02:00:19 --> Config Class Initialized
INFO - 2020-01-28 02:00:19 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:00:19 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:00:19 --> Utf8 Class Initialized
INFO - 2020-01-28 02:00:19 --> URI Class Initialized
INFO - 2020-01-28 02:00:19 --> Router Class Initialized
INFO - 2020-01-28 02:00:19 --> Output Class Initialized
INFO - 2020-01-28 02:00:19 --> Security Class Initialized
DEBUG - 2020-01-28 02:00:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:00:19 --> Input Class Initialized
INFO - 2020-01-28 02:00:19 --> Language Class Initialized
INFO - 2020-01-28 02:00:19 --> Language Class Initialized
INFO - 2020-01-28 02:00:19 --> Config Class Initialized
INFO - 2020-01-28 02:00:19 --> Loader Class Initialized
INFO - 2020-01-28 02:00:19 --> Helper loaded: url_helper
INFO - 2020-01-28 02:00:19 --> Helper loaded: file_helper
INFO - 2020-01-28 02:00:19 --> Helper loaded: form_helper
INFO - 2020-01-28 02:00:19 --> Helper loaded: my_helper
INFO - 2020-01-28 02:00:19 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:00:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:00:20 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:00:20 --> Controller Class Initialized
DEBUG - 2020-01-28 02:00:20 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 02:00:20 --> Final output sent to browser
DEBUG - 2020-01-28 02:00:20 --> Total execution time: 0.2954
INFO - 2020-01-28 02:01:39 --> Config Class Initialized
INFO - 2020-01-28 02:01:39 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:01:39 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:01:39 --> Utf8 Class Initialized
INFO - 2020-01-28 02:01:39 --> URI Class Initialized
INFO - 2020-01-28 02:01:39 --> Router Class Initialized
INFO - 2020-01-28 02:01:39 --> Output Class Initialized
INFO - 2020-01-28 02:01:39 --> Security Class Initialized
DEBUG - 2020-01-28 02:01:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:01:39 --> Input Class Initialized
INFO - 2020-01-28 02:01:39 --> Language Class Initialized
INFO - 2020-01-28 02:01:39 --> Language Class Initialized
INFO - 2020-01-28 02:01:39 --> Config Class Initialized
INFO - 2020-01-28 02:01:39 --> Loader Class Initialized
INFO - 2020-01-28 02:01:39 --> Helper loaded: url_helper
INFO - 2020-01-28 02:01:39 --> Helper loaded: file_helper
INFO - 2020-01-28 02:01:39 --> Helper loaded: form_helper
INFO - 2020-01-28 02:01:39 --> Helper loaded: my_helper
INFO - 2020-01-28 02:01:39 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:01:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:01:39 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:01:39 --> Controller Class Initialized
DEBUG - 2020-01-28 02:01:39 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 02:01:39 --> Final output sent to browser
DEBUG - 2020-01-28 02:01:39 --> Total execution time: 0.3215
INFO - 2020-01-28 02:03:58 --> Config Class Initialized
INFO - 2020-01-28 02:03:58 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:03:58 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:03:58 --> Utf8 Class Initialized
INFO - 2020-01-28 02:03:58 --> URI Class Initialized
INFO - 2020-01-28 02:03:58 --> Router Class Initialized
INFO - 2020-01-28 02:03:58 --> Output Class Initialized
INFO - 2020-01-28 02:03:58 --> Security Class Initialized
DEBUG - 2020-01-28 02:03:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:03:58 --> Input Class Initialized
INFO - 2020-01-28 02:03:58 --> Language Class Initialized
INFO - 2020-01-28 02:03:58 --> Language Class Initialized
INFO - 2020-01-28 02:03:58 --> Config Class Initialized
INFO - 2020-01-28 02:03:58 --> Loader Class Initialized
INFO - 2020-01-28 02:03:58 --> Helper loaded: url_helper
INFO - 2020-01-28 02:03:58 --> Helper loaded: file_helper
INFO - 2020-01-28 02:03:58 --> Helper loaded: form_helper
INFO - 2020-01-28 02:03:58 --> Helper loaded: my_helper
INFO - 2020-01-28 02:03:58 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:03:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:03:58 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:03:58 --> Controller Class Initialized
INFO - 2020-01-28 02:05:32 --> Config Class Initialized
INFO - 2020-01-28 02:05:32 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:05:32 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:05:32 --> Utf8 Class Initialized
INFO - 2020-01-28 02:05:32 --> URI Class Initialized
INFO - 2020-01-28 02:05:32 --> Router Class Initialized
INFO - 2020-01-28 02:05:32 --> Output Class Initialized
INFO - 2020-01-28 02:05:32 --> Security Class Initialized
DEBUG - 2020-01-28 02:05:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:05:32 --> Input Class Initialized
INFO - 2020-01-28 02:05:32 --> Language Class Initialized
INFO - 2020-01-28 02:05:32 --> Language Class Initialized
INFO - 2020-01-28 02:05:32 --> Config Class Initialized
INFO - 2020-01-28 02:05:32 --> Loader Class Initialized
INFO - 2020-01-28 02:05:32 --> Helper loaded: url_helper
INFO - 2020-01-28 02:05:32 --> Helper loaded: file_helper
INFO - 2020-01-28 02:05:32 --> Helper loaded: form_helper
INFO - 2020-01-28 02:05:32 --> Helper loaded: my_helper
INFO - 2020-01-28 02:05:32 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:05:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:05:32 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:05:32 --> Controller Class Initialized
INFO - 2020-01-28 02:06:01 --> Config Class Initialized
INFO - 2020-01-28 02:06:01 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:06:01 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:06:01 --> Utf8 Class Initialized
INFO - 2020-01-28 02:06:01 --> URI Class Initialized
INFO - 2020-01-28 02:06:01 --> Router Class Initialized
INFO - 2020-01-28 02:06:01 --> Output Class Initialized
INFO - 2020-01-28 02:06:01 --> Security Class Initialized
DEBUG - 2020-01-28 02:06:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:06:01 --> Input Class Initialized
INFO - 2020-01-28 02:06:01 --> Language Class Initialized
INFO - 2020-01-28 02:06:01 --> Language Class Initialized
INFO - 2020-01-28 02:06:01 --> Config Class Initialized
INFO - 2020-01-28 02:06:01 --> Loader Class Initialized
INFO - 2020-01-28 02:06:01 --> Helper loaded: url_helper
INFO - 2020-01-28 02:06:01 --> Helper loaded: file_helper
INFO - 2020-01-28 02:06:01 --> Helper loaded: form_helper
INFO - 2020-01-28 02:06:01 --> Helper loaded: my_helper
INFO - 2020-01-28 02:06:01 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:06:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:06:01 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:06:01 --> Controller Class Initialized
DEBUG - 2020-01-28 02:06:01 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 02:06:01 --> Final output sent to browser
DEBUG - 2020-01-28 02:06:01 --> Total execution time: 0.3681
INFO - 2020-01-28 02:06:24 --> Config Class Initialized
INFO - 2020-01-28 02:06:24 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:06:24 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:06:24 --> Utf8 Class Initialized
INFO - 2020-01-28 02:06:24 --> URI Class Initialized
INFO - 2020-01-28 02:06:24 --> Router Class Initialized
INFO - 2020-01-28 02:06:24 --> Output Class Initialized
INFO - 2020-01-28 02:06:24 --> Security Class Initialized
DEBUG - 2020-01-28 02:06:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:06:24 --> Input Class Initialized
INFO - 2020-01-28 02:06:24 --> Language Class Initialized
INFO - 2020-01-28 02:06:24 --> Language Class Initialized
INFO - 2020-01-28 02:06:25 --> Config Class Initialized
INFO - 2020-01-28 02:06:25 --> Loader Class Initialized
INFO - 2020-01-28 02:06:25 --> Helper loaded: url_helper
INFO - 2020-01-28 02:06:25 --> Helper loaded: file_helper
INFO - 2020-01-28 02:06:25 --> Helper loaded: form_helper
INFO - 2020-01-28 02:06:25 --> Helper loaded: my_helper
INFO - 2020-01-28 02:06:25 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:06:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:06:25 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:06:25 --> Controller Class Initialized
DEBUG - 2020-01-28 02:06:25 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/view_mapel/views/v_view_mapel.php
DEBUG - 2020-01-28 02:06:25 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 02:06:25 --> Final output sent to browser
DEBUG - 2020-01-28 02:06:25 --> Total execution time: 0.3225
INFO - 2020-01-28 02:06:27 --> Config Class Initialized
INFO - 2020-01-28 02:06:27 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:06:27 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:06:27 --> Utf8 Class Initialized
INFO - 2020-01-28 02:06:27 --> URI Class Initialized
INFO - 2020-01-28 02:06:27 --> Router Class Initialized
INFO - 2020-01-28 02:06:27 --> Output Class Initialized
INFO - 2020-01-28 02:06:27 --> Security Class Initialized
DEBUG - 2020-01-28 02:06:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:06:27 --> Input Class Initialized
INFO - 2020-01-28 02:06:27 --> Language Class Initialized
INFO - 2020-01-28 02:06:27 --> Language Class Initialized
INFO - 2020-01-28 02:06:27 --> Config Class Initialized
INFO - 2020-01-28 02:06:27 --> Loader Class Initialized
INFO - 2020-01-28 02:06:27 --> Helper loaded: url_helper
INFO - 2020-01-28 02:06:27 --> Helper loaded: file_helper
INFO - 2020-01-28 02:06:27 --> Helper loaded: form_helper
INFO - 2020-01-28 02:06:27 --> Helper loaded: my_helper
INFO - 2020-01-28 02:06:27 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:06:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:06:27 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:06:27 --> Controller Class Initialized
DEBUG - 2020-01-28 02:06:27 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_keterampilan/views/list.php
DEBUG - 2020-01-28 02:06:27 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 02:06:27 --> Final output sent to browser
DEBUG - 2020-01-28 02:06:27 --> Total execution time: 0.3475
INFO - 2020-01-28 02:06:29 --> Config Class Initialized
INFO - 2020-01-28 02:06:29 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:06:29 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:06:29 --> Utf8 Class Initialized
INFO - 2020-01-28 02:06:29 --> URI Class Initialized
INFO - 2020-01-28 02:06:29 --> Router Class Initialized
INFO - 2020-01-28 02:06:29 --> Output Class Initialized
INFO - 2020-01-28 02:06:29 --> Security Class Initialized
DEBUG - 2020-01-28 02:06:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:06:29 --> Input Class Initialized
INFO - 2020-01-28 02:06:29 --> Language Class Initialized
INFO - 2020-01-28 02:06:29 --> Language Class Initialized
INFO - 2020-01-28 02:06:29 --> Config Class Initialized
INFO - 2020-01-28 02:06:29 --> Loader Class Initialized
INFO - 2020-01-28 02:06:29 --> Helper loaded: url_helper
INFO - 2020-01-28 02:06:29 --> Helper loaded: file_helper
INFO - 2020-01-28 02:06:29 --> Helper loaded: form_helper
INFO - 2020-01-28 02:06:29 --> Helper loaded: my_helper
INFO - 2020-01-28 02:06:29 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:06:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:06:29 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:06:29 --> Controller Class Initialized
DEBUG - 2020-01-28 02:06:29 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_keterampilan/views/cetak.php
INFO - 2020-01-28 02:06:29 --> Final output sent to browser
DEBUG - 2020-01-28 02:06:29 --> Total execution time: 0.4136
INFO - 2020-01-28 02:06:50 --> Config Class Initialized
INFO - 2020-01-28 02:06:50 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:06:50 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:06:50 --> Utf8 Class Initialized
INFO - 2020-01-28 02:06:50 --> URI Class Initialized
INFO - 2020-01-28 02:06:50 --> Router Class Initialized
INFO - 2020-01-28 02:06:50 --> Output Class Initialized
INFO - 2020-01-28 02:06:50 --> Security Class Initialized
DEBUG - 2020-01-28 02:06:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:06:50 --> Input Class Initialized
INFO - 2020-01-28 02:06:50 --> Language Class Initialized
INFO - 2020-01-28 02:06:50 --> Language Class Initialized
INFO - 2020-01-28 02:06:50 --> Config Class Initialized
INFO - 2020-01-28 02:06:50 --> Loader Class Initialized
INFO - 2020-01-28 02:06:50 --> Helper loaded: url_helper
INFO - 2020-01-28 02:06:50 --> Helper loaded: file_helper
INFO - 2020-01-28 02:06:50 --> Helper loaded: form_helper
INFO - 2020-01-28 02:06:50 --> Helper loaded: my_helper
INFO - 2020-01-28 02:06:50 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:06:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:06:50 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:06:50 --> Controller Class Initialized
INFO - 2020-01-28 02:06:50 --> Final output sent to browser
DEBUG - 2020-01-28 02:06:50 --> Total execution time: 0.2596
INFO - 2020-01-28 02:07:09 --> Config Class Initialized
INFO - 2020-01-28 02:07:09 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:07:09 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:07:09 --> Utf8 Class Initialized
INFO - 2020-01-28 02:07:09 --> URI Class Initialized
INFO - 2020-01-28 02:07:09 --> Router Class Initialized
INFO - 2020-01-28 02:07:09 --> Output Class Initialized
INFO - 2020-01-28 02:07:09 --> Security Class Initialized
DEBUG - 2020-01-28 02:07:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:07:09 --> Input Class Initialized
INFO - 2020-01-28 02:07:10 --> Language Class Initialized
INFO - 2020-01-28 02:07:10 --> Language Class Initialized
INFO - 2020-01-28 02:07:10 --> Config Class Initialized
INFO - 2020-01-28 02:07:10 --> Loader Class Initialized
INFO - 2020-01-28 02:07:10 --> Helper loaded: url_helper
INFO - 2020-01-28 02:07:10 --> Helper loaded: file_helper
INFO - 2020-01-28 02:07:10 --> Helper loaded: form_helper
INFO - 2020-01-28 02:07:10 --> Helper loaded: my_helper
INFO - 2020-01-28 02:07:10 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:07:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:07:10 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:07:10 --> Controller Class Initialized
INFO - 2020-01-28 02:07:10 --> Final output sent to browser
DEBUG - 2020-01-28 02:07:10 --> Total execution time: 0.3298
INFO - 2020-01-28 02:07:10 --> Config Class Initialized
INFO - 2020-01-28 02:07:10 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:07:10 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:07:10 --> Utf8 Class Initialized
INFO - 2020-01-28 02:07:10 --> URI Class Initialized
INFO - 2020-01-28 02:07:10 --> Router Class Initialized
INFO - 2020-01-28 02:07:10 --> Output Class Initialized
INFO - 2020-01-28 02:07:10 --> Security Class Initialized
DEBUG - 2020-01-28 02:07:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:07:10 --> Input Class Initialized
INFO - 2020-01-28 02:07:10 --> Language Class Initialized
INFO - 2020-01-28 02:07:10 --> Language Class Initialized
INFO - 2020-01-28 02:07:10 --> Config Class Initialized
INFO - 2020-01-28 02:07:10 --> Loader Class Initialized
INFO - 2020-01-28 02:07:10 --> Helper loaded: url_helper
INFO - 2020-01-28 02:07:10 --> Helper loaded: file_helper
INFO - 2020-01-28 02:07:10 --> Helper loaded: form_helper
INFO - 2020-01-28 02:07:10 --> Helper loaded: my_helper
INFO - 2020-01-28 02:07:10 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:07:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:07:10 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:07:10 --> Controller Class Initialized
DEBUG - 2020-01-28 02:07:10 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_keterampilan/views/list.php
DEBUG - 2020-01-28 02:07:10 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 02:07:10 --> Final output sent to browser
DEBUG - 2020-01-28 02:07:10 --> Total execution time: 0.4676
INFO - 2020-01-28 02:07:21 --> Config Class Initialized
INFO - 2020-01-28 02:07:21 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:07:21 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:07:21 --> Utf8 Class Initialized
INFO - 2020-01-28 02:07:21 --> URI Class Initialized
INFO - 2020-01-28 02:07:21 --> Router Class Initialized
INFO - 2020-01-28 02:07:21 --> Output Class Initialized
INFO - 2020-01-28 02:07:21 --> Security Class Initialized
DEBUG - 2020-01-28 02:07:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:07:21 --> Input Class Initialized
INFO - 2020-01-28 02:07:21 --> Language Class Initialized
INFO - 2020-01-28 02:07:21 --> Language Class Initialized
INFO - 2020-01-28 02:07:21 --> Config Class Initialized
INFO - 2020-01-28 02:07:21 --> Loader Class Initialized
INFO - 2020-01-28 02:07:21 --> Helper loaded: url_helper
INFO - 2020-01-28 02:07:21 --> Helper loaded: file_helper
INFO - 2020-01-28 02:07:21 --> Helper loaded: form_helper
INFO - 2020-01-28 02:07:21 --> Helper loaded: my_helper
INFO - 2020-01-28 02:07:21 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:07:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:07:21 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:07:21 --> Controller Class Initialized
INFO - 2020-01-28 02:07:21 --> Final output sent to browser
DEBUG - 2020-01-28 02:07:21 --> Total execution time: 0.3045
INFO - 2020-01-28 02:07:26 --> Config Class Initialized
INFO - 2020-01-28 02:07:26 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:07:26 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:07:26 --> Utf8 Class Initialized
INFO - 2020-01-28 02:07:26 --> URI Class Initialized
INFO - 2020-01-28 02:07:26 --> Router Class Initialized
INFO - 2020-01-28 02:07:26 --> Output Class Initialized
INFO - 2020-01-28 02:07:26 --> Security Class Initialized
DEBUG - 2020-01-28 02:07:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:07:26 --> Input Class Initialized
INFO - 2020-01-28 02:07:26 --> Language Class Initialized
INFO - 2020-01-28 02:07:26 --> Language Class Initialized
INFO - 2020-01-28 02:07:26 --> Config Class Initialized
INFO - 2020-01-28 02:07:26 --> Loader Class Initialized
INFO - 2020-01-28 02:07:26 --> Helper loaded: url_helper
INFO - 2020-01-28 02:07:26 --> Helper loaded: file_helper
INFO - 2020-01-28 02:07:27 --> Helper loaded: form_helper
INFO - 2020-01-28 02:07:27 --> Helper loaded: my_helper
INFO - 2020-01-28 02:07:27 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:07:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:07:27 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:07:27 --> Controller Class Initialized
INFO - 2020-01-28 02:07:27 --> Final output sent to browser
DEBUG - 2020-01-28 02:07:27 --> Total execution time: 0.2838
INFO - 2020-01-28 02:07:27 --> Config Class Initialized
INFO - 2020-01-28 02:07:27 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:07:27 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:07:27 --> Utf8 Class Initialized
INFO - 2020-01-28 02:07:27 --> URI Class Initialized
INFO - 2020-01-28 02:07:27 --> Router Class Initialized
INFO - 2020-01-28 02:07:27 --> Output Class Initialized
INFO - 2020-01-28 02:07:27 --> Security Class Initialized
DEBUG - 2020-01-28 02:07:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:07:27 --> Input Class Initialized
INFO - 2020-01-28 02:07:27 --> Language Class Initialized
INFO - 2020-01-28 02:07:27 --> Language Class Initialized
INFO - 2020-01-28 02:07:27 --> Config Class Initialized
INFO - 2020-01-28 02:07:27 --> Loader Class Initialized
INFO - 2020-01-28 02:07:27 --> Helper loaded: url_helper
INFO - 2020-01-28 02:07:27 --> Helper loaded: file_helper
INFO - 2020-01-28 02:07:27 --> Helper loaded: form_helper
INFO - 2020-01-28 02:07:27 --> Helper loaded: my_helper
INFO - 2020-01-28 02:07:27 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:07:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:07:27 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:07:27 --> Controller Class Initialized
DEBUG - 2020-01-28 02:07:27 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_keterampilan/views/list.php
DEBUG - 2020-01-28 02:07:27 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 02:07:27 --> Final output sent to browser
DEBUG - 2020-01-28 02:07:27 --> Total execution time: 0.3167
INFO - 2020-01-28 02:07:29 --> Config Class Initialized
INFO - 2020-01-28 02:07:29 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:07:29 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:07:29 --> Utf8 Class Initialized
INFO - 2020-01-28 02:07:29 --> URI Class Initialized
INFO - 2020-01-28 02:07:29 --> Router Class Initialized
INFO - 2020-01-28 02:07:29 --> Output Class Initialized
INFO - 2020-01-28 02:07:29 --> Security Class Initialized
DEBUG - 2020-01-28 02:07:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:07:29 --> Input Class Initialized
INFO - 2020-01-28 02:07:29 --> Language Class Initialized
INFO - 2020-01-28 02:07:29 --> Language Class Initialized
INFO - 2020-01-28 02:07:29 --> Config Class Initialized
INFO - 2020-01-28 02:07:29 --> Loader Class Initialized
INFO - 2020-01-28 02:07:29 --> Helper loaded: url_helper
INFO - 2020-01-28 02:07:29 --> Helper loaded: file_helper
INFO - 2020-01-28 02:07:29 --> Helper loaded: form_helper
INFO - 2020-01-28 02:07:29 --> Helper loaded: my_helper
INFO - 2020-01-28 02:07:29 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:07:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:07:29 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:07:29 --> Controller Class Initialized
DEBUG - 2020-01-28 02:07:30 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_keterampilan/views/cetak.php
INFO - 2020-01-28 02:07:30 --> Final output sent to browser
DEBUG - 2020-01-28 02:07:30 --> Total execution time: 0.3170
INFO - 2020-01-28 02:08:19 --> Config Class Initialized
INFO - 2020-01-28 02:08:19 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:08:19 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:08:19 --> Utf8 Class Initialized
INFO - 2020-01-28 02:08:19 --> URI Class Initialized
INFO - 2020-01-28 02:08:19 --> Router Class Initialized
INFO - 2020-01-28 02:08:19 --> Output Class Initialized
INFO - 2020-01-28 02:08:19 --> Security Class Initialized
DEBUG - 2020-01-28 02:08:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:08:19 --> Input Class Initialized
INFO - 2020-01-28 02:08:19 --> Language Class Initialized
INFO - 2020-01-28 02:08:19 --> Language Class Initialized
INFO - 2020-01-28 02:08:19 --> Config Class Initialized
INFO - 2020-01-28 02:08:19 --> Loader Class Initialized
INFO - 2020-01-28 02:08:19 --> Helper loaded: url_helper
INFO - 2020-01-28 02:08:19 --> Helper loaded: file_helper
INFO - 2020-01-28 02:08:19 --> Helper loaded: form_helper
INFO - 2020-01-28 02:08:19 --> Helper loaded: my_helper
INFO - 2020-01-28 02:08:19 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:08:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:08:19 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:08:19 --> Controller Class Initialized
INFO - 2020-01-28 02:08:44 --> Config Class Initialized
INFO - 2020-01-28 02:08:44 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:08:44 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:08:44 --> Utf8 Class Initialized
INFO - 2020-01-28 02:08:44 --> URI Class Initialized
INFO - 2020-01-28 02:08:44 --> Router Class Initialized
INFO - 2020-01-28 02:08:44 --> Output Class Initialized
INFO - 2020-01-28 02:08:44 --> Security Class Initialized
DEBUG - 2020-01-28 02:08:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:08:44 --> Input Class Initialized
INFO - 2020-01-28 02:08:44 --> Language Class Initialized
INFO - 2020-01-28 02:08:44 --> Language Class Initialized
INFO - 2020-01-28 02:08:44 --> Config Class Initialized
INFO - 2020-01-28 02:08:44 --> Loader Class Initialized
INFO - 2020-01-28 02:08:44 --> Helper loaded: url_helper
INFO - 2020-01-28 02:08:44 --> Helper loaded: file_helper
INFO - 2020-01-28 02:08:44 --> Helper loaded: form_helper
INFO - 2020-01-28 02:08:44 --> Helper loaded: my_helper
INFO - 2020-01-28 02:08:44 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:08:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:08:44 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:08:44 --> Controller Class Initialized
DEBUG - 2020-01-28 02:08:44 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/view_mapel/views/v_view_mapel.php
DEBUG - 2020-01-28 02:08:44 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 02:08:44 --> Final output sent to browser
DEBUG - 2020-01-28 02:08:44 --> Total execution time: 0.3541
INFO - 2020-01-28 02:08:45 --> Config Class Initialized
INFO - 2020-01-28 02:08:45 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:08:45 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:08:45 --> Utf8 Class Initialized
INFO - 2020-01-28 02:08:45 --> URI Class Initialized
INFO - 2020-01-28 02:08:45 --> Router Class Initialized
INFO - 2020-01-28 02:08:46 --> Output Class Initialized
INFO - 2020-01-28 02:08:46 --> Security Class Initialized
DEBUG - 2020-01-28 02:08:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:08:46 --> Input Class Initialized
INFO - 2020-01-28 02:08:46 --> Language Class Initialized
INFO - 2020-01-28 02:08:46 --> Language Class Initialized
INFO - 2020-01-28 02:08:46 --> Config Class Initialized
INFO - 2020-01-28 02:08:46 --> Loader Class Initialized
INFO - 2020-01-28 02:08:46 --> Helper loaded: url_helper
INFO - 2020-01-28 02:08:46 --> Helper loaded: file_helper
INFO - 2020-01-28 02:08:46 --> Helper loaded: form_helper
INFO - 2020-01-28 02:08:46 --> Helper loaded: my_helper
INFO - 2020-01-28 02:08:46 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:08:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:08:46 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:08:46 --> Controller Class Initialized
DEBUG - 2020-01-28 02:08:46 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/list.php
DEBUG - 2020-01-28 02:08:46 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 02:08:46 --> Final output sent to browser
DEBUG - 2020-01-28 02:08:46 --> Total execution time: 0.3182
INFO - 2020-01-28 02:08:46 --> Config Class Initialized
INFO - 2020-01-28 02:08:46 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:08:46 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:08:46 --> Utf8 Class Initialized
INFO - 2020-01-28 02:08:46 --> URI Class Initialized
INFO - 2020-01-28 02:08:46 --> Router Class Initialized
INFO - 2020-01-28 02:08:46 --> Output Class Initialized
INFO - 2020-01-28 02:08:46 --> Security Class Initialized
DEBUG - 2020-01-28 02:08:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:08:46 --> Input Class Initialized
INFO - 2020-01-28 02:08:46 --> Language Class Initialized
INFO - 2020-01-28 02:08:46 --> Language Class Initialized
INFO - 2020-01-28 02:08:46 --> Config Class Initialized
INFO - 2020-01-28 02:08:46 --> Loader Class Initialized
INFO - 2020-01-28 02:08:46 --> Helper loaded: url_helper
INFO - 2020-01-28 02:08:46 --> Helper loaded: file_helper
INFO - 2020-01-28 02:08:46 --> Helper loaded: form_helper
INFO - 2020-01-28 02:08:46 --> Helper loaded: my_helper
INFO - 2020-01-28 02:08:46 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:08:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:08:46 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:08:46 --> Controller Class Initialized
INFO - 2020-01-28 02:08:48 --> Config Class Initialized
INFO - 2020-01-28 02:08:48 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:08:48 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:08:48 --> Utf8 Class Initialized
INFO - 2020-01-28 02:08:48 --> URI Class Initialized
INFO - 2020-01-28 02:08:48 --> Router Class Initialized
INFO - 2020-01-28 02:08:48 --> Output Class Initialized
INFO - 2020-01-28 02:08:48 --> Security Class Initialized
DEBUG - 2020-01-28 02:08:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:08:48 --> Input Class Initialized
INFO - 2020-01-28 02:08:48 --> Language Class Initialized
INFO - 2020-01-28 02:08:48 --> Language Class Initialized
INFO - 2020-01-28 02:08:48 --> Config Class Initialized
INFO - 2020-01-28 02:08:48 --> Loader Class Initialized
INFO - 2020-01-28 02:08:48 --> Helper loaded: url_helper
INFO - 2020-01-28 02:08:48 --> Helper loaded: file_helper
INFO - 2020-01-28 02:08:48 --> Helper loaded: form_helper
INFO - 2020-01-28 02:08:48 --> Helper loaded: my_helper
INFO - 2020-01-28 02:08:48 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:08:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:08:48 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:08:48 --> Controller Class Initialized
INFO - 2020-01-28 02:08:48 --> Final output sent to browser
DEBUG - 2020-01-28 02:08:48 --> Total execution time: 0.2750
INFO - 2020-01-28 02:08:49 --> Config Class Initialized
INFO - 2020-01-28 02:08:49 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:08:49 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:08:49 --> Utf8 Class Initialized
INFO - 2020-01-28 02:08:49 --> URI Class Initialized
INFO - 2020-01-28 02:08:49 --> Router Class Initialized
INFO - 2020-01-28 02:08:49 --> Output Class Initialized
INFO - 2020-01-28 02:08:49 --> Security Class Initialized
DEBUG - 2020-01-28 02:08:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:08:49 --> Input Class Initialized
INFO - 2020-01-28 02:08:49 --> Language Class Initialized
INFO - 2020-01-28 02:08:49 --> Language Class Initialized
INFO - 2020-01-28 02:08:49 --> Config Class Initialized
INFO - 2020-01-28 02:08:50 --> Loader Class Initialized
INFO - 2020-01-28 02:08:50 --> Helper loaded: url_helper
INFO - 2020-01-28 02:08:50 --> Helper loaded: file_helper
INFO - 2020-01-28 02:08:50 --> Helper loaded: form_helper
INFO - 2020-01-28 02:08:50 --> Helper loaded: my_helper
INFO - 2020-01-28 02:08:50 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:08:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:08:50 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:08:50 --> Controller Class Initialized
INFO - 2020-01-28 02:08:50 --> Final output sent to browser
DEBUG - 2020-01-28 02:08:50 --> Total execution time: 0.3059
INFO - 2020-01-28 02:08:51 --> Config Class Initialized
INFO - 2020-01-28 02:08:51 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:08:51 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:08:51 --> Utf8 Class Initialized
INFO - 2020-01-28 02:08:51 --> URI Class Initialized
INFO - 2020-01-28 02:08:51 --> Router Class Initialized
INFO - 2020-01-28 02:08:51 --> Output Class Initialized
INFO - 2020-01-28 02:08:51 --> Security Class Initialized
DEBUG - 2020-01-28 02:08:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:08:51 --> Input Class Initialized
INFO - 2020-01-28 02:08:51 --> Language Class Initialized
INFO - 2020-01-28 02:08:51 --> Language Class Initialized
INFO - 2020-01-28 02:08:51 --> Config Class Initialized
INFO - 2020-01-28 02:08:51 --> Loader Class Initialized
INFO - 2020-01-28 02:08:51 --> Helper loaded: url_helper
INFO - 2020-01-28 02:08:51 --> Helper loaded: file_helper
INFO - 2020-01-28 02:08:51 --> Helper loaded: form_helper
INFO - 2020-01-28 02:08:51 --> Helper loaded: my_helper
INFO - 2020-01-28 02:08:51 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:08:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:08:51 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:08:51 --> Controller Class Initialized
INFO - 2020-01-28 02:08:51 --> Final output sent to browser
DEBUG - 2020-01-28 02:08:51 --> Total execution time: 0.2750
INFO - 2020-01-28 02:09:40 --> Config Class Initialized
INFO - 2020-01-28 02:09:41 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:09:41 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:09:41 --> Utf8 Class Initialized
INFO - 2020-01-28 02:09:41 --> URI Class Initialized
INFO - 2020-01-28 02:09:41 --> Router Class Initialized
INFO - 2020-01-28 02:09:41 --> Output Class Initialized
INFO - 2020-01-28 02:09:41 --> Security Class Initialized
DEBUG - 2020-01-28 02:09:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:09:41 --> Input Class Initialized
INFO - 2020-01-28 02:09:41 --> Language Class Initialized
INFO - 2020-01-28 02:09:41 --> Language Class Initialized
INFO - 2020-01-28 02:09:41 --> Config Class Initialized
INFO - 2020-01-28 02:09:41 --> Loader Class Initialized
INFO - 2020-01-28 02:09:41 --> Helper loaded: url_helper
INFO - 2020-01-28 02:09:41 --> Helper loaded: file_helper
INFO - 2020-01-28 02:09:41 --> Helper loaded: form_helper
INFO - 2020-01-28 02:09:41 --> Helper loaded: my_helper
INFO - 2020-01-28 02:09:41 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:09:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:09:41 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:09:41 --> Controller Class Initialized
ERROR - 2020-01-28 02:09:41 --> Query error: Table 'db_nilaik13.tnilai' doesn't exist - Invalid query: SELECT 
                                d.nama nmsiswa, a.id_mapel_kd, a.id_siswa, a.nilai
                                FROM tnilai a
                                LEFT JOIN t_mapel_kd b ON a.id_mapel_kd = b.id
                                LEFT JOIN t_kelas_siswa c ON CONCAT(a.id_siswa,LEFT(a.tasm,4)) = CONCAT(c.id_siswa,c.ta)
                                LEFT JOIN m_siswa d ON c.id_siswa = d.id
                                WHERE c.id_kelas = 1 AND b.id_mapel = 1
                                AND a.tasm = '20182'
                                ORDER BY d.nama ASC
INFO - 2020-01-28 02:09:41 --> Language file loaded: language/english/db_lang.php
INFO - 2020-01-28 02:10:01 --> Config Class Initialized
INFO - 2020-01-28 02:10:01 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:10:01 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:10:01 --> Utf8 Class Initialized
INFO - 2020-01-28 02:10:01 --> URI Class Initialized
INFO - 2020-01-28 02:10:01 --> Router Class Initialized
INFO - 2020-01-28 02:10:01 --> Output Class Initialized
INFO - 2020-01-28 02:10:01 --> Security Class Initialized
DEBUG - 2020-01-28 02:10:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:10:01 --> Input Class Initialized
INFO - 2020-01-28 02:10:01 --> Language Class Initialized
INFO - 2020-01-28 02:10:01 --> Language Class Initialized
INFO - 2020-01-28 02:10:01 --> Config Class Initialized
INFO - 2020-01-28 02:10:01 --> Loader Class Initialized
INFO - 2020-01-28 02:10:01 --> Helper loaded: url_helper
INFO - 2020-01-28 02:10:01 --> Helper loaded: file_helper
INFO - 2020-01-28 02:10:01 --> Helper loaded: form_helper
INFO - 2020-01-28 02:10:01 --> Helper loaded: my_helper
INFO - 2020-01-28 02:10:01 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:10:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:10:01 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:10:01 --> Controller Class Initialized
INFO - 2020-01-28 02:10:20 --> Config Class Initialized
INFO - 2020-01-28 02:10:20 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:10:20 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:10:20 --> Utf8 Class Initialized
INFO - 2020-01-28 02:10:20 --> URI Class Initialized
INFO - 2020-01-28 02:10:20 --> Router Class Initialized
INFO - 2020-01-28 02:10:20 --> Output Class Initialized
INFO - 2020-01-28 02:10:20 --> Security Class Initialized
DEBUG - 2020-01-28 02:10:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:10:20 --> Input Class Initialized
INFO - 2020-01-28 02:10:20 --> Language Class Initialized
INFO - 2020-01-28 02:10:20 --> Language Class Initialized
INFO - 2020-01-28 02:10:20 --> Config Class Initialized
INFO - 2020-01-28 02:10:20 --> Loader Class Initialized
INFO - 2020-01-28 02:10:20 --> Helper loaded: url_helper
INFO - 2020-01-28 02:10:20 --> Helper loaded: file_helper
INFO - 2020-01-28 02:10:20 --> Helper loaded: form_helper
INFO - 2020-01-28 02:10:20 --> Helper loaded: my_helper
INFO - 2020-01-28 02:10:20 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:10:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:10:20 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:10:20 --> Controller Class Initialized
DEBUG - 2020-01-28 02:10:20 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 02:10:20 --> Final output sent to browser
DEBUG - 2020-01-28 02:10:20 --> Total execution time: 0.3739
INFO - 2020-01-28 02:20:59 --> Config Class Initialized
INFO - 2020-01-28 02:20:59 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:20:59 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:20:59 --> Utf8 Class Initialized
INFO - 2020-01-28 02:20:59 --> URI Class Initialized
INFO - 2020-01-28 02:20:59 --> Router Class Initialized
INFO - 2020-01-28 02:20:59 --> Output Class Initialized
INFO - 2020-01-28 02:20:59 --> Security Class Initialized
DEBUG - 2020-01-28 02:20:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:20:59 --> Input Class Initialized
INFO - 2020-01-28 02:20:59 --> Language Class Initialized
INFO - 2020-01-28 02:20:59 --> Language Class Initialized
INFO - 2020-01-28 02:20:59 --> Config Class Initialized
INFO - 2020-01-28 02:20:59 --> Loader Class Initialized
INFO - 2020-01-28 02:20:59 --> Helper loaded: url_helper
INFO - 2020-01-28 02:20:59 --> Helper loaded: file_helper
INFO - 2020-01-28 02:20:59 --> Helper loaded: form_helper
INFO - 2020-01-28 02:20:59 --> Helper loaded: my_helper
INFO - 2020-01-28 02:20:59 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:20:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:21:00 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:21:00 --> Controller Class Initialized
DEBUG - 2020-01-28 02:21:00 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 02:21:00 --> Final output sent to browser
DEBUG - 2020-01-28 02:21:00 --> Total execution time: 0.3578
INFO - 2020-01-28 02:21:05 --> Config Class Initialized
INFO - 2020-01-28 02:21:05 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:21:05 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:21:05 --> Utf8 Class Initialized
INFO - 2020-01-28 02:21:05 --> URI Class Initialized
INFO - 2020-01-28 02:21:05 --> Router Class Initialized
INFO - 2020-01-28 02:21:05 --> Output Class Initialized
INFO - 2020-01-28 02:21:05 --> Security Class Initialized
DEBUG - 2020-01-28 02:21:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:21:05 --> Input Class Initialized
INFO - 2020-01-28 02:21:05 --> Language Class Initialized
INFO - 2020-01-28 02:21:05 --> Language Class Initialized
INFO - 2020-01-28 02:21:05 --> Config Class Initialized
INFO - 2020-01-28 02:21:05 --> Loader Class Initialized
INFO - 2020-01-28 02:21:05 --> Helper loaded: url_helper
INFO - 2020-01-28 02:21:05 --> Helper loaded: file_helper
INFO - 2020-01-28 02:21:05 --> Helper loaded: form_helper
INFO - 2020-01-28 02:21:05 --> Helper loaded: my_helper
INFO - 2020-01-28 02:21:05 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:21:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:21:05 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:21:05 --> Controller Class Initialized
DEBUG - 2020-01-28 02:21:05 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 02:21:05 --> Final output sent to browser
DEBUG - 2020-01-28 02:21:05 --> Total execution time: 0.3346
INFO - 2020-01-28 02:21:59 --> Config Class Initialized
INFO - 2020-01-28 02:21:59 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:21:59 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:21:59 --> Utf8 Class Initialized
INFO - 2020-01-28 02:21:59 --> URI Class Initialized
INFO - 2020-01-28 02:21:59 --> Router Class Initialized
INFO - 2020-01-28 02:21:59 --> Output Class Initialized
INFO - 2020-01-28 02:21:59 --> Security Class Initialized
DEBUG - 2020-01-28 02:21:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:21:59 --> Input Class Initialized
INFO - 2020-01-28 02:21:59 --> Language Class Initialized
INFO - 2020-01-28 02:21:59 --> Language Class Initialized
INFO - 2020-01-28 02:21:59 --> Config Class Initialized
INFO - 2020-01-28 02:21:59 --> Loader Class Initialized
INFO - 2020-01-28 02:21:59 --> Helper loaded: url_helper
INFO - 2020-01-28 02:21:59 --> Helper loaded: file_helper
INFO - 2020-01-28 02:21:59 --> Helper loaded: form_helper
INFO - 2020-01-28 02:21:59 --> Helper loaded: my_helper
INFO - 2020-01-28 02:21:59 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:22:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:22:00 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:22:00 --> Controller Class Initialized
DEBUG - 2020-01-28 02:22:00 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 02:22:00 --> Final output sent to browser
DEBUG - 2020-01-28 02:22:00 --> Total execution time: 0.3946
INFO - 2020-01-28 02:22:33 --> Config Class Initialized
INFO - 2020-01-28 02:22:33 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:22:33 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:22:33 --> Utf8 Class Initialized
INFO - 2020-01-28 02:22:33 --> URI Class Initialized
INFO - 2020-01-28 02:22:33 --> Router Class Initialized
INFO - 2020-01-28 02:22:33 --> Output Class Initialized
INFO - 2020-01-28 02:22:33 --> Security Class Initialized
DEBUG - 2020-01-28 02:22:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:22:33 --> Input Class Initialized
INFO - 2020-01-28 02:22:33 --> Language Class Initialized
INFO - 2020-01-28 02:22:33 --> Language Class Initialized
INFO - 2020-01-28 02:22:33 --> Config Class Initialized
INFO - 2020-01-28 02:22:33 --> Loader Class Initialized
INFO - 2020-01-28 02:22:33 --> Helper loaded: url_helper
INFO - 2020-01-28 02:22:33 --> Helper loaded: file_helper
INFO - 2020-01-28 02:22:33 --> Helper loaded: form_helper
INFO - 2020-01-28 02:22:33 --> Helper loaded: my_helper
INFO - 2020-01-28 02:22:33 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:22:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:22:33 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:22:33 --> Controller Class Initialized
DEBUG - 2020-01-28 02:22:33 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_keterampilan/views/cetak.php
INFO - 2020-01-28 02:22:33 --> Final output sent to browser
DEBUG - 2020-01-28 02:22:33 --> Total execution time: 0.3242
INFO - 2020-01-28 02:22:52 --> Config Class Initialized
INFO - 2020-01-28 02:22:52 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:22:52 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:22:52 --> Utf8 Class Initialized
INFO - 2020-01-28 02:22:52 --> URI Class Initialized
INFO - 2020-01-28 02:22:52 --> Router Class Initialized
INFO - 2020-01-28 02:22:52 --> Output Class Initialized
INFO - 2020-01-28 02:22:52 --> Security Class Initialized
DEBUG - 2020-01-28 02:22:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:22:52 --> Input Class Initialized
INFO - 2020-01-28 02:22:52 --> Language Class Initialized
INFO - 2020-01-28 02:22:52 --> Language Class Initialized
INFO - 2020-01-28 02:22:52 --> Config Class Initialized
INFO - 2020-01-28 02:22:52 --> Loader Class Initialized
INFO - 2020-01-28 02:22:52 --> Helper loaded: url_helper
INFO - 2020-01-28 02:22:52 --> Helper loaded: file_helper
INFO - 2020-01-28 02:22:52 --> Helper loaded: form_helper
INFO - 2020-01-28 02:22:52 --> Helper loaded: my_helper
INFO - 2020-01-28 02:22:52 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:22:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:22:52 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:22:52 --> Controller Class Initialized
ERROR - 2020-01-28 02:22:53 --> Severity: Compile Error --> 'break' not in the 'loop' or 'switch' context E:\xampp\htdocs\_2020\nilaik13_ci\application\third_party\PHP_Excel\PHPExcel\Calculation\Functions.php 581
INFO - 2020-01-28 02:22:53 --> Config Class Initialized
INFO - 2020-01-28 02:22:53 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:22:53 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:22:53 --> Utf8 Class Initialized
INFO - 2020-01-28 02:22:53 --> URI Class Initialized
INFO - 2020-01-28 02:22:54 --> Router Class Initialized
INFO - 2020-01-28 02:22:54 --> Output Class Initialized
INFO - 2020-01-28 02:22:54 --> Security Class Initialized
DEBUG - 2020-01-28 02:22:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:22:54 --> Input Class Initialized
INFO - 2020-01-28 02:22:54 --> Language Class Initialized
INFO - 2020-01-28 02:22:54 --> Language Class Initialized
INFO - 2020-01-28 02:22:54 --> Config Class Initialized
INFO - 2020-01-28 02:22:54 --> Loader Class Initialized
INFO - 2020-01-28 02:22:54 --> Helper loaded: url_helper
INFO - 2020-01-28 02:22:54 --> Helper loaded: file_helper
INFO - 2020-01-28 02:22:54 --> Helper loaded: form_helper
INFO - 2020-01-28 02:22:54 --> Helper loaded: my_helper
INFO - 2020-01-28 02:22:54 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:22:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:22:54 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:22:54 --> Controller Class Initialized
ERROR - 2020-01-28 02:22:54 --> Severity: Compile Error --> 'break' not in the 'loop' or 'switch' context E:\xampp\htdocs\_2020\nilaik13_ci\application\third_party\PHP_Excel\PHPExcel\Calculation\Functions.php 581
INFO - 2020-01-28 02:22:57 --> Config Class Initialized
INFO - 2020-01-28 02:22:57 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:22:57 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:22:57 --> Utf8 Class Initialized
INFO - 2020-01-28 02:22:57 --> URI Class Initialized
INFO - 2020-01-28 02:22:57 --> Router Class Initialized
INFO - 2020-01-28 02:22:57 --> Output Class Initialized
INFO - 2020-01-28 02:22:57 --> Security Class Initialized
DEBUG - 2020-01-28 02:22:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:22:57 --> Input Class Initialized
INFO - 2020-01-28 02:22:57 --> Language Class Initialized
INFO - 2020-01-28 02:22:57 --> Language Class Initialized
INFO - 2020-01-28 02:22:57 --> Config Class Initialized
INFO - 2020-01-28 02:22:57 --> Loader Class Initialized
INFO - 2020-01-28 02:22:57 --> Helper loaded: url_helper
INFO - 2020-01-28 02:22:57 --> Helper loaded: file_helper
INFO - 2020-01-28 02:22:57 --> Helper loaded: form_helper
INFO - 2020-01-28 02:22:57 --> Helper loaded: my_helper
INFO - 2020-01-28 02:22:57 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:22:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:22:57 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:22:57 --> Controller Class Initialized
DEBUG - 2020-01-28 02:22:57 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/list.php
DEBUG - 2020-01-28 02:22:57 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 02:22:57 --> Final output sent to browser
DEBUG - 2020-01-28 02:22:57 --> Total execution time: 0.3312
INFO - 2020-01-28 02:22:57 --> Config Class Initialized
INFO - 2020-01-28 02:22:57 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:22:57 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:22:57 --> Utf8 Class Initialized
INFO - 2020-01-28 02:22:57 --> URI Class Initialized
INFO - 2020-01-28 02:22:57 --> Router Class Initialized
INFO - 2020-01-28 02:22:57 --> Output Class Initialized
INFO - 2020-01-28 02:22:57 --> Security Class Initialized
DEBUG - 2020-01-28 02:22:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:22:57 --> Input Class Initialized
INFO - 2020-01-28 02:22:57 --> Language Class Initialized
INFO - 2020-01-28 02:22:57 --> Language Class Initialized
INFO - 2020-01-28 02:22:57 --> Config Class Initialized
INFO - 2020-01-28 02:22:57 --> Loader Class Initialized
INFO - 2020-01-28 02:22:58 --> Helper loaded: url_helper
INFO - 2020-01-28 02:22:58 --> Helper loaded: file_helper
INFO - 2020-01-28 02:22:58 --> Helper loaded: form_helper
INFO - 2020-01-28 02:22:58 --> Helper loaded: my_helper
INFO - 2020-01-28 02:22:58 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:22:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:22:58 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:22:58 --> Controller Class Initialized
INFO - 2020-01-28 02:23:03 --> Config Class Initialized
INFO - 2020-01-28 02:23:03 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:23:03 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:23:03 --> Utf8 Class Initialized
INFO - 2020-01-28 02:23:03 --> URI Class Initialized
INFO - 2020-01-28 02:23:03 --> Router Class Initialized
INFO - 2020-01-28 02:23:03 --> Output Class Initialized
INFO - 2020-01-28 02:23:03 --> Security Class Initialized
DEBUG - 2020-01-28 02:23:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:23:03 --> Input Class Initialized
INFO - 2020-01-28 02:23:03 --> Language Class Initialized
INFO - 2020-01-28 02:23:03 --> Language Class Initialized
INFO - 2020-01-28 02:23:03 --> Config Class Initialized
INFO - 2020-01-28 02:23:03 --> Loader Class Initialized
INFO - 2020-01-28 02:23:03 --> Helper loaded: url_helper
INFO - 2020-01-28 02:23:03 --> Helper loaded: file_helper
INFO - 2020-01-28 02:23:03 --> Helper loaded: form_helper
INFO - 2020-01-28 02:23:03 --> Helper loaded: my_helper
INFO - 2020-01-28 02:23:03 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:23:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:23:04 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:23:04 --> Controller Class Initialized
DEBUG - 2020-01-28 02:23:04 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/form.php
DEBUG - 2020-01-28 02:23:04 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 02:23:04 --> Final output sent to browser
DEBUG - 2020-01-28 02:23:04 --> Total execution time: 0.3561
INFO - 2020-01-28 02:23:05 --> Config Class Initialized
INFO - 2020-01-28 02:23:05 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:23:05 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:23:05 --> Utf8 Class Initialized
INFO - 2020-01-28 02:23:05 --> URI Class Initialized
INFO - 2020-01-28 02:23:06 --> Router Class Initialized
INFO - 2020-01-28 02:23:06 --> Output Class Initialized
INFO - 2020-01-28 02:23:06 --> Security Class Initialized
DEBUG - 2020-01-28 02:23:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:23:06 --> Input Class Initialized
INFO - 2020-01-28 02:23:06 --> Language Class Initialized
INFO - 2020-01-28 02:23:06 --> Language Class Initialized
INFO - 2020-01-28 02:23:06 --> Config Class Initialized
INFO - 2020-01-28 02:23:06 --> Loader Class Initialized
INFO - 2020-01-28 02:23:06 --> Helper loaded: url_helper
INFO - 2020-01-28 02:23:06 --> Helper loaded: file_helper
INFO - 2020-01-28 02:23:06 --> Helper loaded: form_helper
INFO - 2020-01-28 02:23:06 --> Helper loaded: my_helper
INFO - 2020-01-28 02:23:06 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:23:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:23:06 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:23:06 --> Controller Class Initialized
DEBUG - 2020-01-28 02:23:06 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/list.php
DEBUG - 2020-01-28 02:23:06 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 02:23:06 --> Final output sent to browser
DEBUG - 2020-01-28 02:23:06 --> Total execution time: 0.3321
INFO - 2020-01-28 02:23:06 --> Config Class Initialized
INFO - 2020-01-28 02:23:06 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:23:06 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:23:06 --> Utf8 Class Initialized
INFO - 2020-01-28 02:23:06 --> URI Class Initialized
INFO - 2020-01-28 02:23:06 --> Router Class Initialized
INFO - 2020-01-28 02:23:06 --> Output Class Initialized
INFO - 2020-01-28 02:23:06 --> Security Class Initialized
DEBUG - 2020-01-28 02:23:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:23:06 --> Input Class Initialized
INFO - 2020-01-28 02:23:06 --> Language Class Initialized
INFO - 2020-01-28 02:23:06 --> Language Class Initialized
INFO - 2020-01-28 02:23:06 --> Config Class Initialized
INFO - 2020-01-28 02:23:06 --> Loader Class Initialized
INFO - 2020-01-28 02:23:06 --> Helper loaded: url_helper
INFO - 2020-01-28 02:23:06 --> Helper loaded: file_helper
INFO - 2020-01-28 02:23:06 --> Helper loaded: form_helper
INFO - 2020-01-28 02:23:06 --> Helper loaded: my_helper
INFO - 2020-01-28 02:23:06 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:23:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:23:06 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:23:06 --> Controller Class Initialized
INFO - 2020-01-28 02:23:07 --> Config Class Initialized
INFO - 2020-01-28 02:23:07 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:23:07 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:23:07 --> Utf8 Class Initialized
INFO - 2020-01-28 02:23:07 --> URI Class Initialized
INFO - 2020-01-28 02:23:07 --> Router Class Initialized
INFO - 2020-01-28 02:23:07 --> Output Class Initialized
INFO - 2020-01-28 02:23:07 --> Security Class Initialized
DEBUG - 2020-01-28 02:23:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:23:07 --> Input Class Initialized
INFO - 2020-01-28 02:23:07 --> Language Class Initialized
INFO - 2020-01-28 02:23:07 --> Language Class Initialized
INFO - 2020-01-28 02:23:07 --> Config Class Initialized
INFO - 2020-01-28 02:23:07 --> Loader Class Initialized
INFO - 2020-01-28 02:23:07 --> Helper loaded: url_helper
INFO - 2020-01-28 02:23:07 --> Helper loaded: file_helper
INFO - 2020-01-28 02:23:07 --> Helper loaded: form_helper
INFO - 2020-01-28 02:23:07 --> Helper loaded: my_helper
INFO - 2020-01-28 02:23:07 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:23:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:23:07 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:23:07 --> Controller Class Initialized
DEBUG - 2020-01-28 02:23:07 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/view_mapel/views/v_view_mapel.php
DEBUG - 2020-01-28 02:23:07 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 02:23:07 --> Final output sent to browser
DEBUG - 2020-01-28 02:23:07 --> Total execution time: 0.3871
INFO - 2020-01-28 02:23:09 --> Config Class Initialized
INFO - 2020-01-28 02:23:09 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:23:09 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:23:09 --> Utf8 Class Initialized
INFO - 2020-01-28 02:23:09 --> URI Class Initialized
INFO - 2020-01-28 02:23:09 --> Router Class Initialized
INFO - 2020-01-28 02:23:09 --> Output Class Initialized
INFO - 2020-01-28 02:23:09 --> Security Class Initialized
DEBUG - 2020-01-28 02:23:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:23:09 --> Input Class Initialized
INFO - 2020-01-28 02:23:09 --> Language Class Initialized
INFO - 2020-01-28 02:23:09 --> Language Class Initialized
INFO - 2020-01-28 02:23:09 --> Config Class Initialized
INFO - 2020-01-28 02:23:09 --> Loader Class Initialized
INFO - 2020-01-28 02:23:09 --> Helper loaded: url_helper
INFO - 2020-01-28 02:23:09 --> Helper loaded: file_helper
INFO - 2020-01-28 02:23:09 --> Helper loaded: form_helper
INFO - 2020-01-28 02:23:09 --> Helper loaded: my_helper
INFO - 2020-01-28 02:23:09 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:23:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:23:09 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:23:09 --> Controller Class Initialized
DEBUG - 2020-01-28 02:23:09 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_keterampilan/views/list.php
DEBUG - 2020-01-28 02:23:09 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 02:23:09 --> Final output sent to browser
DEBUG - 2020-01-28 02:23:09 --> Total execution time: 0.3366
INFO - 2020-01-28 02:23:10 --> Config Class Initialized
INFO - 2020-01-28 02:23:10 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:23:10 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:23:10 --> Utf8 Class Initialized
INFO - 2020-01-28 02:23:10 --> URI Class Initialized
INFO - 2020-01-28 02:23:10 --> Router Class Initialized
INFO - 2020-01-28 02:23:10 --> Output Class Initialized
INFO - 2020-01-28 02:23:10 --> Security Class Initialized
DEBUG - 2020-01-28 02:23:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:23:10 --> Input Class Initialized
INFO - 2020-01-28 02:23:10 --> Language Class Initialized
INFO - 2020-01-28 02:23:10 --> Language Class Initialized
INFO - 2020-01-28 02:23:10 --> Config Class Initialized
INFO - 2020-01-28 02:23:10 --> Loader Class Initialized
INFO - 2020-01-28 02:23:10 --> Helper loaded: url_helper
INFO - 2020-01-28 02:23:10 --> Helper loaded: file_helper
INFO - 2020-01-28 02:23:10 --> Helper loaded: form_helper
INFO - 2020-01-28 02:23:10 --> Helper loaded: my_helper
INFO - 2020-01-28 02:23:10 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:23:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:23:10 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:23:10 --> Controller Class Initialized
ERROR - 2020-01-28 02:23:10 --> Severity: Compile Error --> 'break' not in the 'loop' or 'switch' context E:\xampp\htdocs\_2020\nilaik13_ci\application\third_party\PHP_Excel\PHPExcel\Calculation\Functions.php 581
INFO - 2020-01-28 02:23:11 --> Config Class Initialized
INFO - 2020-01-28 02:23:11 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:23:11 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:23:11 --> Utf8 Class Initialized
INFO - 2020-01-28 02:23:11 --> URI Class Initialized
INFO - 2020-01-28 02:23:11 --> Router Class Initialized
INFO - 2020-01-28 02:23:11 --> Output Class Initialized
INFO - 2020-01-28 02:23:11 --> Security Class Initialized
DEBUG - 2020-01-28 02:23:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:23:11 --> Input Class Initialized
INFO - 2020-01-28 02:23:11 --> Language Class Initialized
INFO - 2020-01-28 02:23:11 --> Language Class Initialized
INFO - 2020-01-28 02:23:11 --> Config Class Initialized
INFO - 2020-01-28 02:23:11 --> Loader Class Initialized
INFO - 2020-01-28 02:23:11 --> Helper loaded: url_helper
INFO - 2020-01-28 02:23:11 --> Helper loaded: file_helper
INFO - 2020-01-28 02:23:11 --> Helper loaded: form_helper
INFO - 2020-01-28 02:23:11 --> Helper loaded: my_helper
INFO - 2020-01-28 02:23:11 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:23:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:23:11 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:23:11 --> Controller Class Initialized
ERROR - 2020-01-28 02:23:11 --> Severity: Compile Error --> 'break' not in the 'loop' or 'switch' context E:\xampp\htdocs\_2020\nilaik13_ci\application\third_party\PHP_Excel\PHPExcel\Calculation\Functions.php 581
INFO - 2020-01-28 02:23:13 --> Config Class Initialized
INFO - 2020-01-28 02:23:13 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:23:13 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:23:13 --> Utf8 Class Initialized
INFO - 2020-01-28 02:23:13 --> URI Class Initialized
INFO - 2020-01-28 02:23:13 --> Router Class Initialized
INFO - 2020-01-28 02:23:13 --> Output Class Initialized
INFO - 2020-01-28 02:23:13 --> Security Class Initialized
DEBUG - 2020-01-28 02:23:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:23:13 --> Input Class Initialized
INFO - 2020-01-28 02:23:13 --> Language Class Initialized
INFO - 2020-01-28 02:23:13 --> Language Class Initialized
INFO - 2020-01-28 02:23:13 --> Config Class Initialized
INFO - 2020-01-28 02:23:13 --> Loader Class Initialized
INFO - 2020-01-28 02:23:13 --> Helper loaded: url_helper
INFO - 2020-01-28 02:23:13 --> Helper loaded: file_helper
INFO - 2020-01-28 02:23:13 --> Helper loaded: form_helper
INFO - 2020-01-28 02:23:13 --> Helper loaded: my_helper
INFO - 2020-01-28 02:23:13 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:23:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:23:13 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:23:13 --> Controller Class Initialized
DEBUG - 2020-01-28 02:23:14 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_keterampilan/views/list.php
DEBUG - 2020-01-28 02:23:14 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 02:23:14 --> Final output sent to browser
DEBUG - 2020-01-28 02:23:14 --> Total execution time: 0.3626
INFO - 2020-01-28 02:24:39 --> Config Class Initialized
INFO - 2020-01-28 02:24:39 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:24:39 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:24:39 --> Utf8 Class Initialized
INFO - 2020-01-28 02:24:39 --> URI Class Initialized
INFO - 2020-01-28 02:24:39 --> Router Class Initialized
INFO - 2020-01-28 02:24:39 --> Output Class Initialized
INFO - 2020-01-28 02:24:39 --> Security Class Initialized
DEBUG - 2020-01-28 02:24:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:24:39 --> Input Class Initialized
INFO - 2020-01-28 02:24:39 --> Language Class Initialized
INFO - 2020-01-28 02:24:39 --> Language Class Initialized
INFO - 2020-01-28 02:24:39 --> Config Class Initialized
INFO - 2020-01-28 02:24:39 --> Loader Class Initialized
INFO - 2020-01-28 02:24:39 --> Helper loaded: url_helper
INFO - 2020-01-28 02:24:39 --> Helper loaded: file_helper
INFO - 2020-01-28 02:24:39 --> Helper loaded: form_helper
INFO - 2020-01-28 02:24:39 --> Helper loaded: my_helper
INFO - 2020-01-28 02:24:39 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:24:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:24:39 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:24:39 --> Controller Class Initialized
ERROR - 2020-01-28 02:24:39 --> Severity: Compile Error --> 'break' not in the 'loop' or 'switch' context E:\xampp\htdocs\_2020\nilaik13_ci\application\third_party\PHP_Excel\PHPExcel\Calculation\Functions.php 581
INFO - 2020-01-28 02:24:39 --> Config Class Initialized
INFO - 2020-01-28 02:24:39 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:24:39 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:24:39 --> Utf8 Class Initialized
INFO - 2020-01-28 02:24:40 --> URI Class Initialized
INFO - 2020-01-28 02:24:40 --> Router Class Initialized
INFO - 2020-01-28 02:24:40 --> Output Class Initialized
INFO - 2020-01-28 02:24:40 --> Security Class Initialized
DEBUG - 2020-01-28 02:24:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:24:40 --> Input Class Initialized
INFO - 2020-01-28 02:24:40 --> Language Class Initialized
INFO - 2020-01-28 02:24:40 --> Language Class Initialized
INFO - 2020-01-28 02:24:40 --> Config Class Initialized
INFO - 2020-01-28 02:24:40 --> Loader Class Initialized
INFO - 2020-01-28 02:24:40 --> Helper loaded: url_helper
INFO - 2020-01-28 02:24:40 --> Helper loaded: file_helper
INFO - 2020-01-28 02:24:40 --> Helper loaded: form_helper
INFO - 2020-01-28 02:24:40 --> Helper loaded: my_helper
INFO - 2020-01-28 02:24:40 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:24:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:24:40 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:24:40 --> Controller Class Initialized
ERROR - 2020-01-28 02:24:40 --> Severity: Compile Error --> 'break' not in the 'loop' or 'switch' context E:\xampp\htdocs\_2020\nilaik13_ci\application\third_party\PHP_Excel\PHPExcel\Calculation\Functions.php 581
INFO - 2020-01-28 02:24:44 --> Config Class Initialized
INFO - 2020-01-28 02:24:44 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:24:44 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:24:44 --> Utf8 Class Initialized
INFO - 2020-01-28 02:24:44 --> URI Class Initialized
INFO - 2020-01-28 02:24:44 --> Router Class Initialized
INFO - 2020-01-28 02:24:44 --> Output Class Initialized
INFO - 2020-01-28 02:24:44 --> Security Class Initialized
DEBUG - 2020-01-28 02:24:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:24:44 --> Input Class Initialized
INFO - 2020-01-28 02:24:45 --> Language Class Initialized
INFO - 2020-01-28 02:24:45 --> Language Class Initialized
INFO - 2020-01-28 02:24:45 --> Config Class Initialized
INFO - 2020-01-28 02:24:45 --> Loader Class Initialized
INFO - 2020-01-28 02:24:45 --> Helper loaded: url_helper
INFO - 2020-01-28 02:24:45 --> Helper loaded: file_helper
INFO - 2020-01-28 02:24:45 --> Helper loaded: form_helper
INFO - 2020-01-28 02:24:45 --> Helper loaded: my_helper
INFO - 2020-01-28 02:24:45 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:24:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:24:45 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:24:45 --> Controller Class Initialized
ERROR - 2020-01-28 02:24:45 --> Severity: error --> Exception: Too few arguments to function N_keterampilan::import(), 0 passed in E:\xampp\htdocs\_2020\nilaik13_ci\system\core\CodeIgniter.php on line 532 and exactly 1 expected E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_keterampilan\controllers\N_keterampilan.php 21
INFO - 2020-01-28 02:24:54 --> Config Class Initialized
INFO - 2020-01-28 02:24:54 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:24:54 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:24:54 --> Utf8 Class Initialized
INFO - 2020-01-28 02:24:54 --> URI Class Initialized
INFO - 2020-01-28 02:24:54 --> Router Class Initialized
INFO - 2020-01-28 02:24:54 --> Output Class Initialized
INFO - 2020-01-28 02:24:54 --> Security Class Initialized
DEBUG - 2020-01-28 02:24:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:24:54 --> Input Class Initialized
INFO - 2020-01-28 02:24:54 --> Language Class Initialized
INFO - 2020-01-28 02:24:54 --> Language Class Initialized
INFO - 2020-01-28 02:24:54 --> Config Class Initialized
INFO - 2020-01-28 02:24:54 --> Loader Class Initialized
INFO - 2020-01-28 02:24:54 --> Helper loaded: url_helper
INFO - 2020-01-28 02:24:54 --> Helper loaded: file_helper
INFO - 2020-01-28 02:24:54 --> Helper loaded: form_helper
INFO - 2020-01-28 02:24:54 --> Helper loaded: my_helper
INFO - 2020-01-28 02:24:54 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:24:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:24:54 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:24:54 --> Controller Class Initialized
ERROR - 2020-01-28 02:24:54 --> Severity: Compile Error --> 'break' not in the 'loop' or 'switch' context E:\xampp\htdocs\_2020\nilaik13_ci\application\third_party\PHP_Excel\PHPExcel\Calculation\Functions.php 581
INFO - 2020-01-28 02:24:54 --> Config Class Initialized
INFO - 2020-01-28 02:24:54 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:24:54 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:24:54 --> Utf8 Class Initialized
INFO - 2020-01-28 02:24:54 --> URI Class Initialized
INFO - 2020-01-28 02:24:54 --> Router Class Initialized
INFO - 2020-01-28 02:24:54 --> Output Class Initialized
INFO - 2020-01-28 02:24:54 --> Security Class Initialized
DEBUG - 2020-01-28 02:24:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:24:54 --> Input Class Initialized
INFO - 2020-01-28 02:24:54 --> Language Class Initialized
INFO - 2020-01-28 02:24:54 --> Language Class Initialized
INFO - 2020-01-28 02:24:54 --> Config Class Initialized
INFO - 2020-01-28 02:24:54 --> Loader Class Initialized
INFO - 2020-01-28 02:24:54 --> Helper loaded: url_helper
INFO - 2020-01-28 02:24:54 --> Helper loaded: file_helper
INFO - 2020-01-28 02:24:54 --> Helper loaded: form_helper
INFO - 2020-01-28 02:24:54 --> Helper loaded: my_helper
INFO - 2020-01-28 02:24:54 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:24:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:24:54 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:24:55 --> Controller Class Initialized
ERROR - 2020-01-28 02:24:55 --> Severity: Compile Error --> 'break' not in the 'loop' or 'switch' context E:\xampp\htdocs\_2020\nilaik13_ci\application\third_party\PHP_Excel\PHPExcel\Calculation\Functions.php 581
INFO - 2020-01-28 02:25:00 --> Config Class Initialized
INFO - 2020-01-28 02:25:00 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:25:00 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:25:00 --> Utf8 Class Initialized
INFO - 2020-01-28 02:25:00 --> URI Class Initialized
INFO - 2020-01-28 02:25:00 --> Router Class Initialized
INFO - 2020-01-28 02:25:00 --> Output Class Initialized
INFO - 2020-01-28 02:25:00 --> Security Class Initialized
DEBUG - 2020-01-28 02:25:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:25:00 --> Input Class Initialized
INFO - 2020-01-28 02:25:00 --> Language Class Initialized
INFO - 2020-01-28 02:25:00 --> Language Class Initialized
INFO - 2020-01-28 02:25:00 --> Config Class Initialized
INFO - 2020-01-28 02:25:00 --> Loader Class Initialized
INFO - 2020-01-28 02:25:00 --> Helper loaded: url_helper
INFO - 2020-01-28 02:25:00 --> Helper loaded: file_helper
INFO - 2020-01-28 02:25:00 --> Helper loaded: form_helper
INFO - 2020-01-28 02:25:00 --> Helper loaded: my_helper
INFO - 2020-01-28 02:25:00 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:25:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:25:00 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:25:00 --> Controller Class Initialized
ERROR - 2020-01-28 02:25:00 --> Severity: Compile Error --> 'break' not in the 'loop' or 'switch' context E:\xampp\htdocs\_2020\nilaik13_ci\application\third_party\PHP_Excel\PHPExcel\Calculation\Functions.php 581
INFO - 2020-01-28 02:25:30 --> Config Class Initialized
INFO - 2020-01-28 02:25:30 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:25:30 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:25:30 --> Utf8 Class Initialized
INFO - 2020-01-28 02:25:30 --> URI Class Initialized
INFO - 2020-01-28 02:25:30 --> Router Class Initialized
INFO - 2020-01-28 02:25:30 --> Output Class Initialized
INFO - 2020-01-28 02:25:30 --> Security Class Initialized
DEBUG - 2020-01-28 02:25:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:25:30 --> Input Class Initialized
INFO - 2020-01-28 02:25:30 --> Language Class Initialized
INFO - 2020-01-28 02:25:30 --> Language Class Initialized
INFO - 2020-01-28 02:25:30 --> Config Class Initialized
INFO - 2020-01-28 02:25:30 --> Loader Class Initialized
INFO - 2020-01-28 02:25:31 --> Helper loaded: url_helper
INFO - 2020-01-28 02:25:31 --> Helper loaded: file_helper
INFO - 2020-01-28 02:25:31 --> Helper loaded: form_helper
INFO - 2020-01-28 02:25:31 --> Helper loaded: my_helper
INFO - 2020-01-28 02:25:31 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:25:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:25:31 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:25:31 --> Controller Class Initialized
ERROR - 2020-01-28 02:25:31 --> Severity: Compile Error --> 'break' not in the 'loop' or 'switch' context E:\xampp\htdocs\_2020\nilaik13_ci\application\third_party\PHP_Excel\PHPExcel\Calculation\Functions.php 581
INFO - 2020-01-28 02:26:31 --> Config Class Initialized
INFO - 2020-01-28 02:26:31 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:26:31 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:26:31 --> Utf8 Class Initialized
INFO - 2020-01-28 02:26:31 --> URI Class Initialized
INFO - 2020-01-28 02:26:31 --> Router Class Initialized
INFO - 2020-01-28 02:26:31 --> Output Class Initialized
INFO - 2020-01-28 02:26:31 --> Security Class Initialized
DEBUG - 2020-01-28 02:26:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:26:31 --> Input Class Initialized
INFO - 2020-01-28 02:26:31 --> Language Class Initialized
INFO - 2020-01-28 02:26:31 --> Language Class Initialized
INFO - 2020-01-28 02:26:31 --> Config Class Initialized
INFO - 2020-01-28 02:26:31 --> Loader Class Initialized
INFO - 2020-01-28 02:26:31 --> Helper loaded: url_helper
INFO - 2020-01-28 02:26:31 --> Helper loaded: file_helper
INFO - 2020-01-28 02:26:31 --> Helper loaded: form_helper
INFO - 2020-01-28 02:26:31 --> Helper loaded: my_helper
INFO - 2020-01-28 02:26:31 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:26:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:26:31 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:26:31 --> Controller Class Initialized
ERROR - 2020-01-28 02:26:31 --> Severity: Compile Error --> 'break' not in the 'loop' or 'switch' context E:\xampp\htdocs\_2020\nilaik13_ci\application\third_party\PHP_Excel\PHPExcel\Calculation\Functions.php 581
INFO - 2020-01-28 02:28:14 --> Config Class Initialized
INFO - 2020-01-28 02:28:14 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:28:14 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:28:14 --> Utf8 Class Initialized
INFO - 2020-01-28 02:28:14 --> URI Class Initialized
INFO - 2020-01-28 02:28:14 --> Router Class Initialized
INFO - 2020-01-28 02:28:14 --> Output Class Initialized
INFO - 2020-01-28 02:28:14 --> Security Class Initialized
DEBUG - 2020-01-28 02:28:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:28:14 --> Input Class Initialized
INFO - 2020-01-28 02:28:14 --> Language Class Initialized
INFO - 2020-01-28 02:28:14 --> Language Class Initialized
INFO - 2020-01-28 02:28:14 --> Config Class Initialized
INFO - 2020-01-28 02:28:14 --> Loader Class Initialized
INFO - 2020-01-28 02:28:14 --> Helper loaded: url_helper
INFO - 2020-01-28 02:28:14 --> Helper loaded: file_helper
INFO - 2020-01-28 02:28:14 --> Helper loaded: form_helper
INFO - 2020-01-28 02:28:14 --> Helper loaded: my_helper
INFO - 2020-01-28 02:28:14 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:28:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:28:14 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:28:14 --> Controller Class Initialized
ERROR - 2020-01-28 02:28:14 --> Severity: Compile Error --> 'break' not in the 'loop' or 'switch' context E:\xampp\htdocs\_2020\nilaik13_ci\application\third_party\PHP_Excel\PHPExcel\Calculation\Functions.php 581
INFO - 2020-01-28 02:28:51 --> Config Class Initialized
INFO - 2020-01-28 02:28:51 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:28:51 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:28:51 --> Utf8 Class Initialized
INFO - 2020-01-28 02:28:51 --> URI Class Initialized
INFO - 2020-01-28 02:28:51 --> Router Class Initialized
INFO - 2020-01-28 02:28:51 --> Output Class Initialized
INFO - 2020-01-28 02:28:51 --> Security Class Initialized
DEBUG - 2020-01-28 02:28:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:28:51 --> Input Class Initialized
INFO - 2020-01-28 02:28:51 --> Language Class Initialized
INFO - 2020-01-28 02:28:51 --> Language Class Initialized
INFO - 2020-01-28 02:28:51 --> Config Class Initialized
INFO - 2020-01-28 02:28:51 --> Loader Class Initialized
INFO - 2020-01-28 02:28:51 --> Helper loaded: url_helper
INFO - 2020-01-28 02:28:51 --> Helper loaded: file_helper
INFO - 2020-01-28 02:28:51 --> Helper loaded: form_helper
INFO - 2020-01-28 02:28:51 --> Helper loaded: my_helper
INFO - 2020-01-28 02:28:51 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:28:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:28:51 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:28:51 --> Controller Class Initialized
ERROR - 2020-01-28 02:28:51 --> Severity: Compile Error --> 'break' not in the 'loop' or 'switch' context E:\xampp\htdocs\_2020\nilaik13_ci\application\third_party\PHP_Excel\PHPExcel\Calculation\Functions.php 581
INFO - 2020-01-28 02:28:54 --> Config Class Initialized
INFO - 2020-01-28 02:28:54 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:28:54 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:28:54 --> Utf8 Class Initialized
INFO - 2020-01-28 02:28:54 --> URI Class Initialized
INFO - 2020-01-28 02:28:54 --> Router Class Initialized
INFO - 2020-01-28 02:28:54 --> Output Class Initialized
INFO - 2020-01-28 02:28:54 --> Security Class Initialized
DEBUG - 2020-01-28 02:28:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:28:54 --> Input Class Initialized
INFO - 2020-01-28 02:28:54 --> Language Class Initialized
INFO - 2020-01-28 02:28:54 --> Language Class Initialized
INFO - 2020-01-28 02:28:54 --> Config Class Initialized
INFO - 2020-01-28 02:28:54 --> Loader Class Initialized
INFO - 2020-01-28 02:28:54 --> Helper loaded: url_helper
INFO - 2020-01-28 02:28:54 --> Helper loaded: file_helper
INFO - 2020-01-28 02:28:54 --> Helper loaded: form_helper
INFO - 2020-01-28 02:28:54 --> Helper loaded: my_helper
INFO - 2020-01-28 02:28:54 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:28:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:28:54 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:28:54 --> Controller Class Initialized
ERROR - 2020-01-28 02:28:54 --> Severity: Compile Error --> 'break' not in the 'loop' or 'switch' context E:\xampp\htdocs\_2020\nilaik13_ci\application\third_party\PHP_Excel\PHPExcel\Calculation\Functions.php 581
INFO - 2020-01-28 02:32:08 --> Config Class Initialized
INFO - 2020-01-28 02:32:08 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:32:08 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:32:08 --> Utf8 Class Initialized
INFO - 2020-01-28 02:32:08 --> URI Class Initialized
INFO - 2020-01-28 02:32:08 --> Router Class Initialized
INFO - 2020-01-28 02:32:08 --> Output Class Initialized
INFO - 2020-01-28 02:32:08 --> Security Class Initialized
DEBUG - 2020-01-28 02:32:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:32:08 --> Input Class Initialized
INFO - 2020-01-28 02:32:08 --> Language Class Initialized
ERROR - 2020-01-28 02:32:08 --> 404 Page Not Found: ../modules/n_keterampilan/controllers/N_keterampilan/import
INFO - 2020-01-28 02:32:09 --> Config Class Initialized
INFO - 2020-01-28 02:32:09 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:32:09 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:32:09 --> Utf8 Class Initialized
INFO - 2020-01-28 02:32:09 --> URI Class Initialized
INFO - 2020-01-28 02:32:09 --> Router Class Initialized
INFO - 2020-01-28 02:32:09 --> Output Class Initialized
INFO - 2020-01-28 02:32:09 --> Security Class Initialized
DEBUG - 2020-01-28 02:32:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:32:10 --> Input Class Initialized
INFO - 2020-01-28 02:32:10 --> Language Class Initialized
ERROR - 2020-01-28 02:32:10 --> 404 Page Not Found: ../modules/n_keterampilan/controllers/N_keterampilan/import
INFO - 2020-01-28 02:32:10 --> Config Class Initialized
INFO - 2020-01-28 02:32:10 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:32:10 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:32:10 --> Utf8 Class Initialized
INFO - 2020-01-28 02:32:11 --> URI Class Initialized
INFO - 2020-01-28 02:32:11 --> Router Class Initialized
INFO - 2020-01-28 02:32:11 --> Output Class Initialized
INFO - 2020-01-28 02:32:11 --> Security Class Initialized
DEBUG - 2020-01-28 02:32:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:32:11 --> Input Class Initialized
INFO - 2020-01-28 02:32:11 --> Language Class Initialized
INFO - 2020-01-28 02:32:11 --> Language Class Initialized
INFO - 2020-01-28 02:32:11 --> Config Class Initialized
INFO - 2020-01-28 02:32:11 --> Loader Class Initialized
INFO - 2020-01-28 02:32:11 --> Helper loaded: url_helper
INFO - 2020-01-28 02:32:11 --> Helper loaded: file_helper
INFO - 2020-01-28 02:32:11 --> Helper loaded: form_helper
INFO - 2020-01-28 02:32:11 --> Helper loaded: my_helper
INFO - 2020-01-28 02:32:11 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:32:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:32:11 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:32:11 --> Controller Class Initialized
DEBUG - 2020-01-28 02:32:11 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_keterampilan/views/list.php
DEBUG - 2020-01-28 02:32:11 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 02:32:11 --> Final output sent to browser
DEBUG - 2020-01-28 02:32:11 --> Total execution time: 0.3964
INFO - 2020-01-28 02:32:13 --> Config Class Initialized
INFO - 2020-01-28 02:32:13 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:32:13 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:32:13 --> Utf8 Class Initialized
INFO - 2020-01-28 02:32:13 --> URI Class Initialized
INFO - 2020-01-28 02:32:13 --> Router Class Initialized
INFO - 2020-01-28 02:32:13 --> Output Class Initialized
INFO - 2020-01-28 02:32:13 --> Security Class Initialized
DEBUG - 2020-01-28 02:32:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:32:13 --> Input Class Initialized
INFO - 2020-01-28 02:32:13 --> Language Class Initialized
INFO - 2020-01-28 02:32:13 --> Language Class Initialized
INFO - 2020-01-28 02:32:13 --> Config Class Initialized
INFO - 2020-01-28 02:32:13 --> Loader Class Initialized
INFO - 2020-01-28 02:32:13 --> Helper loaded: url_helper
INFO - 2020-01-28 02:32:13 --> Helper loaded: file_helper
INFO - 2020-01-28 02:32:13 --> Helper loaded: form_helper
INFO - 2020-01-28 02:32:13 --> Helper loaded: my_helper
INFO - 2020-01-28 02:32:13 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:32:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:32:13 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:32:13 --> Controller Class Initialized
DEBUG - 2020-01-28 02:32:13 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_keterampilan/views/list.php
DEBUG - 2020-01-28 02:32:13 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 02:32:13 --> Final output sent to browser
DEBUG - 2020-01-28 02:32:13 --> Total execution time: 0.3972
INFO - 2020-01-28 02:32:14 --> Config Class Initialized
INFO - 2020-01-28 02:32:14 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:32:14 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:32:14 --> Utf8 Class Initialized
INFO - 2020-01-28 02:32:14 --> URI Class Initialized
INFO - 2020-01-28 02:32:14 --> Router Class Initialized
INFO - 2020-01-28 02:32:14 --> Output Class Initialized
INFO - 2020-01-28 02:32:14 --> Security Class Initialized
DEBUG - 2020-01-28 02:32:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:32:14 --> Input Class Initialized
INFO - 2020-01-28 02:32:14 --> Language Class Initialized
INFO - 2020-01-28 02:32:14 --> Language Class Initialized
INFO - 2020-01-28 02:32:14 --> Config Class Initialized
INFO - 2020-01-28 02:32:14 --> Loader Class Initialized
INFO - 2020-01-28 02:32:14 --> Helper loaded: url_helper
INFO - 2020-01-28 02:32:14 --> Helper loaded: file_helper
INFO - 2020-01-28 02:32:14 --> Helper loaded: form_helper
INFO - 2020-01-28 02:32:14 --> Helper loaded: my_helper
INFO - 2020-01-28 02:32:14 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:32:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:32:14 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:32:14 --> Controller Class Initialized
ERROR - 2020-01-28 02:32:14 --> Severity: Notice --> Undefined variable: title E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_keterampilan\views\export_excel.php 5
DEBUG - 2020-01-28 02:32:14 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_keterampilan/views/export_excel.php
INFO - 2020-01-28 02:32:14 --> Final output sent to browser
DEBUG - 2020-01-28 02:32:14 --> Total execution time: 0.3563
INFO - 2020-01-28 02:33:36 --> Config Class Initialized
INFO - 2020-01-28 02:33:36 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:33:36 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:33:36 --> Utf8 Class Initialized
INFO - 2020-01-28 02:33:36 --> URI Class Initialized
INFO - 2020-01-28 02:33:36 --> Router Class Initialized
INFO - 2020-01-28 02:33:36 --> Output Class Initialized
INFO - 2020-01-28 02:33:36 --> Security Class Initialized
DEBUG - 2020-01-28 02:33:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:33:36 --> Input Class Initialized
INFO - 2020-01-28 02:33:36 --> Language Class Initialized
INFO - 2020-01-28 02:33:36 --> Language Class Initialized
INFO - 2020-01-28 02:33:36 --> Config Class Initialized
INFO - 2020-01-28 02:33:36 --> Loader Class Initialized
INFO - 2020-01-28 02:33:36 --> Helper loaded: url_helper
INFO - 2020-01-28 02:33:36 --> Helper loaded: file_helper
INFO - 2020-01-28 02:33:36 --> Helper loaded: form_helper
INFO - 2020-01-28 02:33:36 --> Helper loaded: my_helper
INFO - 2020-01-28 02:33:36 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:33:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:33:36 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:33:36 --> Controller Class Initialized
DEBUG - 2020-01-28 02:33:36 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_keterampilan/views/list.php
DEBUG - 2020-01-28 02:33:36 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 02:33:36 --> Final output sent to browser
DEBUG - 2020-01-28 02:33:36 --> Total execution time: 0.3872
INFO - 2020-01-28 02:33:37 --> Config Class Initialized
INFO - 2020-01-28 02:33:37 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:33:37 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:33:37 --> Utf8 Class Initialized
INFO - 2020-01-28 02:33:37 --> URI Class Initialized
INFO - 2020-01-28 02:33:37 --> Router Class Initialized
INFO - 2020-01-28 02:33:37 --> Output Class Initialized
INFO - 2020-01-28 02:33:37 --> Security Class Initialized
DEBUG - 2020-01-28 02:33:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:33:37 --> Input Class Initialized
INFO - 2020-01-28 02:33:37 --> Language Class Initialized
INFO - 2020-01-28 02:33:37 --> Language Class Initialized
INFO - 2020-01-28 02:33:37 --> Config Class Initialized
INFO - 2020-01-28 02:33:37 --> Loader Class Initialized
INFO - 2020-01-28 02:33:37 --> Helper loaded: url_helper
INFO - 2020-01-28 02:33:37 --> Helper loaded: file_helper
INFO - 2020-01-28 02:33:37 --> Helper loaded: form_helper
INFO - 2020-01-28 02:33:37 --> Helper loaded: my_helper
INFO - 2020-01-28 02:33:38 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:33:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:33:38 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:33:38 --> Controller Class Initialized
ERROR - 2020-01-28 02:33:38 --> Severity: Notice --> Undefined variable: title E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_keterampilan\views\export_excel.php 5
DEBUG - 2020-01-28 02:33:38 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_keterampilan/views/export_excel.php
INFO - 2020-01-28 02:33:38 --> Final output sent to browser
DEBUG - 2020-01-28 02:33:38 --> Total execution time: 0.3416
INFO - 2020-01-28 02:34:57 --> Config Class Initialized
INFO - 2020-01-28 02:34:57 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:34:57 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:34:57 --> Utf8 Class Initialized
INFO - 2020-01-28 02:34:57 --> URI Class Initialized
INFO - 2020-01-28 02:34:57 --> Router Class Initialized
INFO - 2020-01-28 02:34:57 --> Output Class Initialized
INFO - 2020-01-28 02:34:57 --> Security Class Initialized
DEBUG - 2020-01-28 02:34:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:34:57 --> Input Class Initialized
INFO - 2020-01-28 02:34:57 --> Language Class Initialized
INFO - 2020-01-28 02:34:57 --> Language Class Initialized
INFO - 2020-01-28 02:34:57 --> Config Class Initialized
INFO - 2020-01-28 02:34:57 --> Loader Class Initialized
INFO - 2020-01-28 02:34:57 --> Helper loaded: url_helper
INFO - 2020-01-28 02:34:57 --> Helper loaded: file_helper
INFO - 2020-01-28 02:34:57 --> Helper loaded: form_helper
INFO - 2020-01-28 02:34:57 --> Helper loaded: my_helper
INFO - 2020-01-28 02:34:57 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:34:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:34:57 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:34:57 --> Controller Class Initialized
DEBUG - 2020-01-28 02:34:57 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_keterampilan/views/list.php
DEBUG - 2020-01-28 02:34:57 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 02:34:58 --> Final output sent to browser
DEBUG - 2020-01-28 02:34:58 --> Total execution time: 0.3683
INFO - 2020-01-28 02:34:59 --> Config Class Initialized
INFO - 2020-01-28 02:34:59 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:34:59 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:34:59 --> Utf8 Class Initialized
INFO - 2020-01-28 02:34:59 --> URI Class Initialized
INFO - 2020-01-28 02:34:59 --> Router Class Initialized
INFO - 2020-01-28 02:34:59 --> Output Class Initialized
INFO - 2020-01-28 02:34:59 --> Security Class Initialized
DEBUG - 2020-01-28 02:34:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:34:59 --> Input Class Initialized
INFO - 2020-01-28 02:34:59 --> Language Class Initialized
INFO - 2020-01-28 02:34:59 --> Language Class Initialized
INFO - 2020-01-28 02:34:59 --> Config Class Initialized
INFO - 2020-01-28 02:34:59 --> Loader Class Initialized
INFO - 2020-01-28 02:34:59 --> Helper loaded: url_helper
INFO - 2020-01-28 02:34:59 --> Helper loaded: file_helper
INFO - 2020-01-28 02:34:59 --> Helper loaded: form_helper
INFO - 2020-01-28 02:34:59 --> Helper loaded: my_helper
INFO - 2020-01-28 02:34:59 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:34:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:34:59 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:34:59 --> Controller Class Initialized
ERROR - 2020-01-28 02:34:59 --> Severity: Notice --> Array to string conversion E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_keterampilan\controllers\N_keterampilan.php 529
ERROR - 2020-01-28 02:34:59 --> Severity: Notice --> Undefined variable: title E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_keterampilan\views\export_excel.php 5
DEBUG - 2020-01-28 02:34:59 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_keterampilan/views/export_excel.php
INFO - 2020-01-28 02:34:59 --> Final output sent to browser
DEBUG - 2020-01-28 02:34:59 --> Total execution time: 0.3721
INFO - 2020-01-28 02:35:38 --> Config Class Initialized
INFO - 2020-01-28 02:35:38 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:35:38 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:35:38 --> Utf8 Class Initialized
INFO - 2020-01-28 02:35:38 --> URI Class Initialized
INFO - 2020-01-28 02:35:38 --> Router Class Initialized
INFO - 2020-01-28 02:35:38 --> Output Class Initialized
INFO - 2020-01-28 02:35:38 --> Security Class Initialized
DEBUG - 2020-01-28 02:35:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:35:38 --> Input Class Initialized
INFO - 2020-01-28 02:35:38 --> Language Class Initialized
INFO - 2020-01-28 02:35:38 --> Language Class Initialized
INFO - 2020-01-28 02:35:39 --> Config Class Initialized
INFO - 2020-01-28 02:35:39 --> Loader Class Initialized
INFO - 2020-01-28 02:35:39 --> Helper loaded: url_helper
INFO - 2020-01-28 02:35:39 --> Helper loaded: file_helper
INFO - 2020-01-28 02:35:39 --> Helper loaded: form_helper
INFO - 2020-01-28 02:35:39 --> Helper loaded: my_helper
INFO - 2020-01-28 02:35:39 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:35:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:35:39 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:35:39 --> Controller Class Initialized
DEBUG - 2020-01-28 02:35:39 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_keterampilan/views/list.php
DEBUG - 2020-01-28 02:35:39 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 02:35:39 --> Final output sent to browser
DEBUG - 2020-01-28 02:35:39 --> Total execution time: 0.4041
INFO - 2020-01-28 02:35:39 --> Config Class Initialized
INFO - 2020-01-28 02:35:39 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:35:39 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:35:39 --> Utf8 Class Initialized
INFO - 2020-01-28 02:35:39 --> URI Class Initialized
INFO - 2020-01-28 02:35:40 --> Router Class Initialized
INFO - 2020-01-28 02:35:40 --> Output Class Initialized
INFO - 2020-01-28 02:35:40 --> Security Class Initialized
DEBUG - 2020-01-28 02:35:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:35:40 --> Input Class Initialized
INFO - 2020-01-28 02:35:40 --> Language Class Initialized
INFO - 2020-01-28 02:35:40 --> Language Class Initialized
INFO - 2020-01-28 02:35:40 --> Config Class Initialized
INFO - 2020-01-28 02:35:40 --> Loader Class Initialized
INFO - 2020-01-28 02:35:40 --> Helper loaded: url_helper
INFO - 2020-01-28 02:35:40 --> Helper loaded: file_helper
INFO - 2020-01-28 02:35:40 --> Helper loaded: form_helper
INFO - 2020-01-28 02:35:40 --> Helper loaded: my_helper
INFO - 2020-01-28 02:35:40 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:35:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:35:40 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:35:40 --> Controller Class Initialized
DEBUG - 2020-01-28 02:35:40 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_keterampilan/views/export_excel.php
INFO - 2020-01-28 02:35:40 --> Final output sent to browser
DEBUG - 2020-01-28 02:35:40 --> Total execution time: 0.3704
INFO - 2020-01-28 02:38:25 --> Config Class Initialized
INFO - 2020-01-28 02:38:25 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:38:25 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:38:25 --> Utf8 Class Initialized
INFO - 2020-01-28 02:38:25 --> URI Class Initialized
INFO - 2020-01-28 02:38:25 --> Router Class Initialized
INFO - 2020-01-28 02:38:25 --> Output Class Initialized
INFO - 2020-01-28 02:38:25 --> Security Class Initialized
DEBUG - 2020-01-28 02:38:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:38:25 --> Input Class Initialized
INFO - 2020-01-28 02:38:25 --> Language Class Initialized
INFO - 2020-01-28 02:38:25 --> Language Class Initialized
INFO - 2020-01-28 02:38:25 --> Config Class Initialized
INFO - 2020-01-28 02:38:25 --> Loader Class Initialized
INFO - 2020-01-28 02:38:25 --> Helper loaded: url_helper
INFO - 2020-01-28 02:38:25 --> Helper loaded: file_helper
INFO - 2020-01-28 02:38:25 --> Helper loaded: form_helper
INFO - 2020-01-28 02:38:25 --> Helper loaded: my_helper
INFO - 2020-01-28 02:38:25 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:38:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:38:25 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:38:25 --> Controller Class Initialized
DEBUG - 2020-01-28 02:38:25 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_keterampilan/views/list.php
DEBUG - 2020-01-28 02:38:25 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 02:38:26 --> Final output sent to browser
DEBUG - 2020-01-28 02:38:26 --> Total execution time: 0.6165
INFO - 2020-01-28 02:38:26 --> Config Class Initialized
INFO - 2020-01-28 02:38:26 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:38:26 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:38:26 --> Utf8 Class Initialized
INFO - 2020-01-28 02:38:26 --> URI Class Initialized
INFO - 2020-01-28 02:38:26 --> Router Class Initialized
INFO - 2020-01-28 02:38:26 --> Output Class Initialized
INFO - 2020-01-28 02:38:26 --> Security Class Initialized
DEBUG - 2020-01-28 02:38:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:38:26 --> Input Class Initialized
INFO - 2020-01-28 02:38:26 --> Language Class Initialized
INFO - 2020-01-28 02:38:26 --> Language Class Initialized
INFO - 2020-01-28 02:38:26 --> Config Class Initialized
INFO - 2020-01-28 02:38:26 --> Loader Class Initialized
INFO - 2020-01-28 02:38:26 --> Helper loaded: url_helper
INFO - 2020-01-28 02:38:26 --> Helper loaded: file_helper
INFO - 2020-01-28 02:38:26 --> Helper loaded: form_helper
INFO - 2020-01-28 02:38:26 --> Helper loaded: my_helper
INFO - 2020-01-28 02:38:27 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:38:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:38:27 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:38:27 --> Controller Class Initialized
DEBUG - 2020-01-28 02:38:27 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_keterampilan/views/export_excel.php
INFO - 2020-01-28 02:38:27 --> Final output sent to browser
DEBUG - 2020-01-28 02:38:27 --> Total execution time: 0.4172
INFO - 2020-01-28 02:40:32 --> Config Class Initialized
INFO - 2020-01-28 02:40:32 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:40:32 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:40:32 --> Utf8 Class Initialized
INFO - 2020-01-28 02:40:32 --> URI Class Initialized
INFO - 2020-01-28 02:40:32 --> Router Class Initialized
INFO - 2020-01-28 02:40:32 --> Output Class Initialized
INFO - 2020-01-28 02:40:32 --> Security Class Initialized
DEBUG - 2020-01-28 02:40:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:40:32 --> Input Class Initialized
INFO - 2020-01-28 02:40:32 --> Language Class Initialized
INFO - 2020-01-28 02:40:32 --> Language Class Initialized
INFO - 2020-01-28 02:40:32 --> Config Class Initialized
INFO - 2020-01-28 02:40:32 --> Loader Class Initialized
INFO - 2020-01-28 02:40:32 --> Helper loaded: url_helper
INFO - 2020-01-28 02:40:32 --> Helper loaded: file_helper
INFO - 2020-01-28 02:40:32 --> Helper loaded: form_helper
INFO - 2020-01-28 02:40:32 --> Helper loaded: my_helper
INFO - 2020-01-28 02:40:32 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:40:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:40:32 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:40:32 --> Controller Class Initialized
DEBUG - 2020-01-28 02:40:32 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_keterampilan/views/form.php
DEBUG - 2020-01-28 02:40:32 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 02:40:32 --> Final output sent to browser
DEBUG - 2020-01-28 02:40:32 --> Total execution time: 0.4720
INFO - 2020-01-28 02:40:48 --> Config Class Initialized
INFO - 2020-01-28 02:40:48 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:40:48 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:40:48 --> Utf8 Class Initialized
INFO - 2020-01-28 02:40:48 --> URI Class Initialized
INFO - 2020-01-28 02:40:48 --> Router Class Initialized
INFO - 2020-01-28 02:40:48 --> Output Class Initialized
INFO - 2020-01-28 02:40:48 --> Security Class Initialized
DEBUG - 2020-01-28 02:40:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:40:49 --> Input Class Initialized
INFO - 2020-01-28 02:40:49 --> Language Class Initialized
INFO - 2020-01-28 02:40:49 --> Language Class Initialized
INFO - 2020-01-28 02:40:49 --> Config Class Initialized
INFO - 2020-01-28 02:40:49 --> Loader Class Initialized
INFO - 2020-01-28 02:40:49 --> Helper loaded: url_helper
INFO - 2020-01-28 02:40:49 --> Helper loaded: file_helper
INFO - 2020-01-28 02:40:49 --> Helper loaded: form_helper
INFO - 2020-01-28 02:40:49 --> Helper loaded: my_helper
INFO - 2020-01-28 02:40:49 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:40:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:40:49 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:40:49 --> Controller Class Initialized
DEBUG - 2020-01-28 02:40:49 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_keterampilan/views/list.php
DEBUG - 2020-01-28 02:40:49 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 02:40:49 --> Final output sent to browser
DEBUG - 2020-01-28 02:40:49 --> Total execution time: 0.3603
INFO - 2020-01-28 02:41:34 --> Config Class Initialized
INFO - 2020-01-28 02:41:35 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:41:35 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:41:35 --> Utf8 Class Initialized
INFO - 2020-01-28 02:41:35 --> URI Class Initialized
INFO - 2020-01-28 02:41:35 --> Router Class Initialized
INFO - 2020-01-28 02:41:35 --> Output Class Initialized
INFO - 2020-01-28 02:41:35 --> Security Class Initialized
DEBUG - 2020-01-28 02:41:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:41:35 --> Input Class Initialized
INFO - 2020-01-28 02:41:35 --> Language Class Initialized
INFO - 2020-01-28 02:41:35 --> Language Class Initialized
INFO - 2020-01-28 02:41:35 --> Config Class Initialized
INFO - 2020-01-28 02:41:35 --> Loader Class Initialized
INFO - 2020-01-28 02:41:35 --> Helper loaded: url_helper
INFO - 2020-01-28 02:41:35 --> Helper loaded: file_helper
INFO - 2020-01-28 02:41:35 --> Helper loaded: form_helper
INFO - 2020-01-28 02:41:35 --> Helper loaded: my_helper
INFO - 2020-01-28 02:41:35 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:41:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:41:35 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:41:35 --> Controller Class Initialized
DEBUG - 2020-01-28 02:41:35 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_keterampilan/views/form.php
DEBUG - 2020-01-28 02:41:35 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 02:41:35 --> Final output sent to browser
DEBUG - 2020-01-28 02:41:35 --> Total execution time: 0.3626
INFO - 2020-01-28 02:42:18 --> Config Class Initialized
INFO - 2020-01-28 02:42:18 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:42:18 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:42:18 --> Utf8 Class Initialized
INFO - 2020-01-28 02:42:19 --> URI Class Initialized
INFO - 2020-01-28 02:42:19 --> Router Class Initialized
INFO - 2020-01-28 02:42:19 --> Output Class Initialized
INFO - 2020-01-28 02:42:19 --> Security Class Initialized
DEBUG - 2020-01-28 02:42:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:42:19 --> Input Class Initialized
INFO - 2020-01-28 02:42:19 --> Language Class Initialized
INFO - 2020-01-28 02:42:19 --> Language Class Initialized
INFO - 2020-01-28 02:42:19 --> Config Class Initialized
INFO - 2020-01-28 02:42:19 --> Loader Class Initialized
INFO - 2020-01-28 02:42:19 --> Helper loaded: url_helper
INFO - 2020-01-28 02:42:19 --> Helper loaded: file_helper
INFO - 2020-01-28 02:42:19 --> Helper loaded: form_helper
INFO - 2020-01-28 02:42:19 --> Helper loaded: my_helper
INFO - 2020-01-28 02:42:19 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:42:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:42:19 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:42:19 --> Controller Class Initialized
DEBUG - 2020-01-28 02:42:19 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/view_mapel/views/v_view_mapel.php
DEBUG - 2020-01-28 02:42:19 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 02:42:19 --> Final output sent to browser
DEBUG - 2020-01-28 02:42:19 --> Total execution time: 0.3721
INFO - 2020-01-28 02:42:20 --> Config Class Initialized
INFO - 2020-01-28 02:42:20 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:42:20 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:42:20 --> Utf8 Class Initialized
INFO - 2020-01-28 02:42:20 --> URI Class Initialized
INFO - 2020-01-28 02:42:20 --> Router Class Initialized
INFO - 2020-01-28 02:42:20 --> Output Class Initialized
INFO - 2020-01-28 02:42:20 --> Security Class Initialized
DEBUG - 2020-01-28 02:42:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:42:20 --> Input Class Initialized
INFO - 2020-01-28 02:42:20 --> Language Class Initialized
INFO - 2020-01-28 02:42:20 --> Language Class Initialized
INFO - 2020-01-28 02:42:20 --> Config Class Initialized
INFO - 2020-01-28 02:42:20 --> Loader Class Initialized
INFO - 2020-01-28 02:42:20 --> Helper loaded: url_helper
INFO - 2020-01-28 02:42:20 --> Helper loaded: file_helper
INFO - 2020-01-28 02:42:20 --> Helper loaded: form_helper
INFO - 2020-01-28 02:42:20 --> Helper loaded: my_helper
INFO - 2020-01-28 02:42:20 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:42:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:42:20 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:42:20 --> Controller Class Initialized
DEBUG - 2020-01-28 02:42:20 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/list.php
DEBUG - 2020-01-28 02:42:21 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 02:42:21 --> Final output sent to browser
DEBUG - 2020-01-28 02:42:21 --> Total execution time: 0.3710
INFO - 2020-01-28 02:42:21 --> Config Class Initialized
INFO - 2020-01-28 02:42:21 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:42:21 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:42:21 --> Utf8 Class Initialized
INFO - 2020-01-28 02:42:21 --> URI Class Initialized
INFO - 2020-01-28 02:42:21 --> Router Class Initialized
INFO - 2020-01-28 02:42:21 --> Output Class Initialized
INFO - 2020-01-28 02:42:21 --> Security Class Initialized
DEBUG - 2020-01-28 02:42:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:42:21 --> Input Class Initialized
INFO - 2020-01-28 02:42:21 --> Language Class Initialized
INFO - 2020-01-28 02:42:21 --> Language Class Initialized
INFO - 2020-01-28 02:42:21 --> Config Class Initialized
INFO - 2020-01-28 02:42:21 --> Loader Class Initialized
INFO - 2020-01-28 02:42:21 --> Helper loaded: url_helper
INFO - 2020-01-28 02:42:21 --> Helper loaded: file_helper
INFO - 2020-01-28 02:42:21 --> Helper loaded: form_helper
INFO - 2020-01-28 02:42:21 --> Helper loaded: my_helper
INFO - 2020-01-28 02:42:21 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:42:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:42:21 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:42:21 --> Controller Class Initialized
INFO - 2020-01-28 02:42:21 --> Config Class Initialized
INFO - 2020-01-28 02:42:21 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:42:21 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:42:21 --> Utf8 Class Initialized
INFO - 2020-01-28 02:42:22 --> URI Class Initialized
INFO - 2020-01-28 02:42:22 --> Router Class Initialized
INFO - 2020-01-28 02:42:22 --> Output Class Initialized
INFO - 2020-01-28 02:42:22 --> Security Class Initialized
DEBUG - 2020-01-28 02:42:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:42:22 --> Input Class Initialized
INFO - 2020-01-28 02:42:22 --> Language Class Initialized
INFO - 2020-01-28 02:42:22 --> Language Class Initialized
INFO - 2020-01-28 02:42:22 --> Config Class Initialized
INFO - 2020-01-28 02:42:22 --> Loader Class Initialized
INFO - 2020-01-28 02:42:22 --> Helper loaded: url_helper
INFO - 2020-01-28 02:42:22 --> Helper loaded: file_helper
INFO - 2020-01-28 02:42:22 --> Helper loaded: form_helper
INFO - 2020-01-28 02:42:22 --> Helper loaded: my_helper
INFO - 2020-01-28 02:42:22 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:42:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:42:22 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:42:22 --> Controller Class Initialized
ERROR - 2020-01-28 02:42:22 --> Severity: Compile Error --> 'break' not in the 'loop' or 'switch' context E:\xampp\htdocs\_2020\nilaik13_ci\application\third_party\PHP_Excel\PHPExcel\Calculation\Functions.php 581
INFO - 2020-01-28 02:42:22 --> Config Class Initialized
INFO - 2020-01-28 02:42:22 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:42:22 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:42:22 --> Utf8 Class Initialized
INFO - 2020-01-28 02:42:22 --> URI Class Initialized
INFO - 2020-01-28 02:42:22 --> Router Class Initialized
INFO - 2020-01-28 02:42:22 --> Output Class Initialized
INFO - 2020-01-28 02:42:22 --> Security Class Initialized
DEBUG - 2020-01-28 02:42:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:42:22 --> Input Class Initialized
INFO - 2020-01-28 02:42:22 --> Language Class Initialized
INFO - 2020-01-28 02:42:22 --> Language Class Initialized
INFO - 2020-01-28 02:42:22 --> Config Class Initialized
INFO - 2020-01-28 02:42:22 --> Loader Class Initialized
INFO - 2020-01-28 02:42:22 --> Helper loaded: url_helper
INFO - 2020-01-28 02:42:22 --> Helper loaded: file_helper
INFO - 2020-01-28 02:42:22 --> Helper loaded: form_helper
INFO - 2020-01-28 02:42:22 --> Helper loaded: my_helper
INFO - 2020-01-28 02:42:22 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:42:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:42:22 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:42:22 --> Controller Class Initialized
ERROR - 2020-01-28 02:42:22 --> Severity: Compile Error --> 'break' not in the 'loop' or 'switch' context E:\xampp\htdocs\_2020\nilaik13_ci\application\third_party\PHP_Excel\PHPExcel\Calculation\Functions.php 581
INFO - 2020-01-28 02:42:28 --> Config Class Initialized
INFO - 2020-01-28 02:42:28 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:42:28 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:42:28 --> Utf8 Class Initialized
INFO - 2020-01-28 02:42:28 --> URI Class Initialized
INFO - 2020-01-28 02:42:28 --> Router Class Initialized
INFO - 2020-01-28 02:42:28 --> Output Class Initialized
INFO - 2020-01-28 02:42:28 --> Security Class Initialized
DEBUG - 2020-01-28 02:42:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:42:28 --> Input Class Initialized
INFO - 2020-01-28 02:42:28 --> Language Class Initialized
INFO - 2020-01-28 02:42:28 --> Language Class Initialized
INFO - 2020-01-28 02:42:28 --> Config Class Initialized
INFO - 2020-01-28 02:42:28 --> Loader Class Initialized
INFO - 2020-01-28 02:42:28 --> Helper loaded: url_helper
INFO - 2020-01-28 02:42:28 --> Helper loaded: file_helper
INFO - 2020-01-28 02:42:28 --> Helper loaded: form_helper
INFO - 2020-01-28 02:42:28 --> Helper loaded: my_helper
INFO - 2020-01-28 02:42:28 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:42:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:42:28 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:42:28 --> Controller Class Initialized
ERROR - 2020-01-28 02:42:28 --> Severity: Compile Error --> 'break' not in the 'loop' or 'switch' context E:\xampp\htdocs\_2020\nilaik13_ci\application\third_party\PHP_Excel\PHPExcel\Calculation\Functions.php 581
INFO - 2020-01-28 02:43:33 --> Config Class Initialized
INFO - 2020-01-28 02:43:33 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:43:33 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:43:33 --> Utf8 Class Initialized
INFO - 2020-01-28 02:43:33 --> URI Class Initialized
INFO - 2020-01-28 02:43:33 --> Router Class Initialized
INFO - 2020-01-28 02:43:33 --> Output Class Initialized
INFO - 2020-01-28 02:43:33 --> Security Class Initialized
DEBUG - 2020-01-28 02:43:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:43:33 --> Input Class Initialized
INFO - 2020-01-28 02:43:33 --> Language Class Initialized
INFO - 2020-01-28 02:43:33 --> Language Class Initialized
INFO - 2020-01-28 02:43:33 --> Config Class Initialized
INFO - 2020-01-28 02:43:33 --> Loader Class Initialized
INFO - 2020-01-28 02:43:33 --> Helper loaded: url_helper
INFO - 2020-01-28 02:43:33 --> Helper loaded: file_helper
INFO - 2020-01-28 02:43:33 --> Helper loaded: form_helper
INFO - 2020-01-28 02:43:33 --> Helper loaded: my_helper
INFO - 2020-01-28 02:43:33 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:43:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:43:33 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:43:33 --> Controller Class Initialized
ERROR - 2020-01-28 02:43:33 --> Severity: Compile Error --> 'break' not in the 'loop' or 'switch' context E:\xampp\htdocs\_2020\nilaik13_ci\application\third_party\PHP_Excel\PHPExcel\Calculation\Functions.php 581
INFO - 2020-01-28 02:43:36 --> Config Class Initialized
INFO - 2020-01-28 02:43:36 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:43:36 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:43:36 --> Utf8 Class Initialized
INFO - 2020-01-28 02:43:36 --> URI Class Initialized
INFO - 2020-01-28 02:43:36 --> Router Class Initialized
INFO - 2020-01-28 02:43:36 --> Output Class Initialized
INFO - 2020-01-28 02:43:36 --> Security Class Initialized
DEBUG - 2020-01-28 02:43:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:43:36 --> Input Class Initialized
INFO - 2020-01-28 02:43:36 --> Language Class Initialized
INFO - 2020-01-28 02:43:36 --> Language Class Initialized
INFO - 2020-01-28 02:43:36 --> Config Class Initialized
INFO - 2020-01-28 02:43:36 --> Loader Class Initialized
INFO - 2020-01-28 02:43:36 --> Helper loaded: url_helper
INFO - 2020-01-28 02:43:36 --> Helper loaded: file_helper
INFO - 2020-01-28 02:43:36 --> Helper loaded: form_helper
INFO - 2020-01-28 02:43:36 --> Helper loaded: my_helper
INFO - 2020-01-28 02:43:36 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:43:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:43:36 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:43:36 --> Controller Class Initialized
ERROR - 2020-01-28 02:43:36 --> Severity: Compile Error --> 'break' not in the 'loop' or 'switch' context E:\xampp\htdocs\_2020\nilaik13_ci\application\third_party\PHP_Excel\PHPExcel\Calculation\Functions.php 581
INFO - 2020-01-28 02:43:38 --> Config Class Initialized
INFO - 2020-01-28 02:43:38 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:43:38 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:43:38 --> Utf8 Class Initialized
INFO - 2020-01-28 02:43:38 --> URI Class Initialized
INFO - 2020-01-28 02:43:38 --> Router Class Initialized
INFO - 2020-01-28 02:43:38 --> Output Class Initialized
INFO - 2020-01-28 02:43:38 --> Security Class Initialized
DEBUG - 2020-01-28 02:43:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:43:38 --> Input Class Initialized
INFO - 2020-01-28 02:43:38 --> Language Class Initialized
INFO - 2020-01-28 02:43:38 --> Language Class Initialized
INFO - 2020-01-28 02:43:38 --> Config Class Initialized
INFO - 2020-01-28 02:43:38 --> Loader Class Initialized
INFO - 2020-01-28 02:43:38 --> Helper loaded: url_helper
INFO - 2020-01-28 02:43:38 --> Helper loaded: file_helper
INFO - 2020-01-28 02:43:38 --> Helper loaded: form_helper
INFO - 2020-01-28 02:43:38 --> Helper loaded: my_helper
INFO - 2020-01-28 02:43:38 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:43:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:43:38 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:43:38 --> Controller Class Initialized
DEBUG - 2020-01-28 02:43:38 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/list.php
DEBUG - 2020-01-28 02:43:38 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 02:43:38 --> Final output sent to browser
DEBUG - 2020-01-28 02:43:38 --> Total execution time: 0.4422
INFO - 2020-01-28 02:43:38 --> Config Class Initialized
INFO - 2020-01-28 02:43:38 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:43:38 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:43:38 --> Utf8 Class Initialized
INFO - 2020-01-28 02:43:38 --> URI Class Initialized
INFO - 2020-01-28 02:43:38 --> Router Class Initialized
INFO - 2020-01-28 02:43:38 --> Output Class Initialized
INFO - 2020-01-28 02:43:38 --> Security Class Initialized
DEBUG - 2020-01-28 02:43:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:43:38 --> Input Class Initialized
INFO - 2020-01-28 02:43:38 --> Language Class Initialized
INFO - 2020-01-28 02:43:38 --> Language Class Initialized
INFO - 2020-01-28 02:43:38 --> Config Class Initialized
INFO - 2020-01-28 02:43:39 --> Loader Class Initialized
INFO - 2020-01-28 02:43:39 --> Helper loaded: url_helper
INFO - 2020-01-28 02:43:39 --> Helper loaded: file_helper
INFO - 2020-01-28 02:43:39 --> Helper loaded: form_helper
INFO - 2020-01-28 02:43:39 --> Helper loaded: my_helper
INFO - 2020-01-28 02:43:39 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:43:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:43:39 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:43:39 --> Controller Class Initialized
INFO - 2020-01-28 02:43:39 --> Config Class Initialized
INFO - 2020-01-28 02:43:39 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:43:39 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:43:39 --> Utf8 Class Initialized
INFO - 2020-01-28 02:43:39 --> URI Class Initialized
INFO - 2020-01-28 02:43:39 --> Router Class Initialized
INFO - 2020-01-28 02:43:39 --> Output Class Initialized
INFO - 2020-01-28 02:43:40 --> Security Class Initialized
DEBUG - 2020-01-28 02:43:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:43:40 --> Input Class Initialized
INFO - 2020-01-28 02:43:40 --> Language Class Initialized
INFO - 2020-01-28 02:43:40 --> Language Class Initialized
INFO - 2020-01-28 02:43:40 --> Config Class Initialized
INFO - 2020-01-28 02:43:40 --> Loader Class Initialized
INFO - 2020-01-28 02:43:40 --> Helper loaded: url_helper
INFO - 2020-01-28 02:43:40 --> Helper loaded: file_helper
INFO - 2020-01-28 02:43:40 --> Helper loaded: form_helper
INFO - 2020-01-28 02:43:40 --> Helper loaded: my_helper
INFO - 2020-01-28 02:43:40 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:43:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:43:40 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:43:40 --> Controller Class Initialized
DEBUG - 2020-01-28 02:43:40 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/list.php
DEBUG - 2020-01-28 02:43:40 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 02:43:40 --> Final output sent to browser
DEBUG - 2020-01-28 02:43:40 --> Total execution time: 0.4002
INFO - 2020-01-28 02:43:40 --> Config Class Initialized
INFO - 2020-01-28 02:43:40 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:43:40 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:43:40 --> Utf8 Class Initialized
INFO - 2020-01-28 02:43:40 --> URI Class Initialized
INFO - 2020-01-28 02:43:40 --> Router Class Initialized
INFO - 2020-01-28 02:43:40 --> Output Class Initialized
INFO - 2020-01-28 02:43:40 --> Security Class Initialized
DEBUG - 2020-01-28 02:43:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:43:40 --> Input Class Initialized
INFO - 2020-01-28 02:43:40 --> Language Class Initialized
INFO - 2020-01-28 02:43:40 --> Language Class Initialized
INFO - 2020-01-28 02:43:40 --> Config Class Initialized
INFO - 2020-01-28 02:43:40 --> Loader Class Initialized
INFO - 2020-01-28 02:43:40 --> Helper loaded: url_helper
INFO - 2020-01-28 02:43:40 --> Helper loaded: file_helper
INFO - 2020-01-28 02:43:40 --> Helper loaded: form_helper
INFO - 2020-01-28 02:43:40 --> Helper loaded: my_helper
INFO - 2020-01-28 02:43:40 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:43:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:43:40 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:43:40 --> Controller Class Initialized
INFO - 2020-01-28 02:43:41 --> Config Class Initialized
INFO - 2020-01-28 02:43:41 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:43:41 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:43:41 --> Utf8 Class Initialized
INFO - 2020-01-28 02:43:41 --> URI Class Initialized
INFO - 2020-01-28 02:43:41 --> Router Class Initialized
INFO - 2020-01-28 02:43:41 --> Output Class Initialized
INFO - 2020-01-28 02:43:41 --> Security Class Initialized
DEBUG - 2020-01-28 02:43:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:43:41 --> Input Class Initialized
INFO - 2020-01-28 02:43:41 --> Language Class Initialized
INFO - 2020-01-28 02:43:41 --> Language Class Initialized
INFO - 2020-01-28 02:43:41 --> Config Class Initialized
INFO - 2020-01-28 02:43:41 --> Loader Class Initialized
INFO - 2020-01-28 02:43:41 --> Helper loaded: url_helper
INFO - 2020-01-28 02:43:41 --> Helper loaded: file_helper
INFO - 2020-01-28 02:43:41 --> Helper loaded: form_helper
INFO - 2020-01-28 02:43:41 --> Helper loaded: my_helper
INFO - 2020-01-28 02:43:41 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:43:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:43:41 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:43:41 --> Controller Class Initialized
ERROR - 2020-01-28 02:43:41 --> Severity: Compile Error --> 'break' not in the 'loop' or 'switch' context E:\xampp\htdocs\_2020\nilaik13_ci\application\third_party\PHP_Excel\PHPExcel\Calculation\Functions.php 581
INFO - 2020-01-28 02:43:41 --> Config Class Initialized
INFO - 2020-01-28 02:43:41 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:43:41 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:43:41 --> Utf8 Class Initialized
INFO - 2020-01-28 02:43:41 --> URI Class Initialized
INFO - 2020-01-28 02:43:41 --> Router Class Initialized
INFO - 2020-01-28 02:43:41 --> Output Class Initialized
INFO - 2020-01-28 02:43:41 --> Security Class Initialized
DEBUG - 2020-01-28 02:43:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:43:41 --> Input Class Initialized
INFO - 2020-01-28 02:43:41 --> Language Class Initialized
INFO - 2020-01-28 02:43:41 --> Language Class Initialized
INFO - 2020-01-28 02:43:41 --> Config Class Initialized
INFO - 2020-01-28 02:43:41 --> Loader Class Initialized
INFO - 2020-01-28 02:43:41 --> Helper loaded: url_helper
INFO - 2020-01-28 02:43:41 --> Helper loaded: file_helper
INFO - 2020-01-28 02:43:41 --> Helper loaded: form_helper
INFO - 2020-01-28 02:43:41 --> Helper loaded: my_helper
INFO - 2020-01-28 02:43:41 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:43:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:43:41 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:43:41 --> Controller Class Initialized
ERROR - 2020-01-28 02:43:42 --> Severity: Compile Error --> 'break' not in the 'loop' or 'switch' context E:\xampp\htdocs\_2020\nilaik13_ci\application\third_party\PHP_Excel\PHPExcel\Calculation\Functions.php 581
INFO - 2020-01-28 02:43:47 --> Config Class Initialized
INFO - 2020-01-28 02:43:47 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:43:47 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:43:47 --> Utf8 Class Initialized
INFO - 2020-01-28 02:43:47 --> URI Class Initialized
INFO - 2020-01-28 02:43:47 --> Router Class Initialized
INFO - 2020-01-28 02:43:47 --> Output Class Initialized
INFO - 2020-01-28 02:43:47 --> Security Class Initialized
DEBUG - 2020-01-28 02:43:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:43:47 --> Input Class Initialized
INFO - 2020-01-28 02:43:47 --> Language Class Initialized
INFO - 2020-01-28 02:43:47 --> Language Class Initialized
INFO - 2020-01-28 02:43:47 --> Config Class Initialized
INFO - 2020-01-28 02:43:47 --> Loader Class Initialized
INFO - 2020-01-28 02:43:47 --> Helper loaded: url_helper
INFO - 2020-01-28 02:43:47 --> Helper loaded: file_helper
INFO - 2020-01-28 02:43:47 --> Helper loaded: form_helper
INFO - 2020-01-28 02:43:47 --> Helper loaded: my_helper
INFO - 2020-01-28 02:43:47 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:43:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:43:47 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:43:47 --> Controller Class Initialized
ERROR - 2020-01-28 02:43:47 --> Severity: Compile Error --> 'break' not in the 'loop' or 'switch' context E:\xampp\htdocs\_2020\nilaik13_ci\application\third_party\PHP_Excel\PHPExcel\Calculation\Functions.php 581
INFO - 2020-01-28 02:44:17 --> Config Class Initialized
INFO - 2020-01-28 02:44:17 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:44:17 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:44:17 --> Utf8 Class Initialized
INFO - 2020-01-28 02:44:17 --> URI Class Initialized
INFO - 2020-01-28 02:44:17 --> Router Class Initialized
INFO - 2020-01-28 02:44:17 --> Output Class Initialized
INFO - 2020-01-28 02:44:17 --> Security Class Initialized
DEBUG - 2020-01-28 02:44:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:44:17 --> Input Class Initialized
INFO - 2020-01-28 02:44:17 --> Language Class Initialized
INFO - 2020-01-28 02:44:17 --> Language Class Initialized
INFO - 2020-01-28 02:44:17 --> Config Class Initialized
INFO - 2020-01-28 02:44:17 --> Loader Class Initialized
INFO - 2020-01-28 02:44:17 --> Helper loaded: url_helper
INFO - 2020-01-28 02:44:17 --> Helper loaded: file_helper
INFO - 2020-01-28 02:44:17 --> Helper loaded: form_helper
INFO - 2020-01-28 02:44:17 --> Helper loaded: my_helper
INFO - 2020-01-28 02:44:17 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:44:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:44:17 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:44:18 --> Controller Class Initialized
ERROR - 2020-01-28 02:44:18 --> Severity: Compile Error --> 'break' not in the 'loop' or 'switch' context E:\xampp\htdocs\_2020\nilaik13_ci\application\third_party\PHP_Excel\PHPExcel\Calculation\Functions.php 581
INFO - 2020-01-28 02:47:23 --> Config Class Initialized
INFO - 2020-01-28 02:47:23 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:47:23 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:47:23 --> Utf8 Class Initialized
INFO - 2020-01-28 02:47:23 --> URI Class Initialized
INFO - 2020-01-28 02:47:23 --> Router Class Initialized
INFO - 2020-01-28 02:47:23 --> Output Class Initialized
INFO - 2020-01-28 02:47:23 --> Security Class Initialized
DEBUG - 2020-01-28 02:47:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:47:23 --> Input Class Initialized
INFO - 2020-01-28 02:47:23 --> Language Class Initialized
INFO - 2020-01-28 02:47:23 --> Language Class Initialized
INFO - 2020-01-28 02:47:23 --> Config Class Initialized
INFO - 2020-01-28 02:47:23 --> Loader Class Initialized
INFO - 2020-01-28 02:47:23 --> Helper loaded: url_helper
INFO - 2020-01-28 02:47:23 --> Helper loaded: file_helper
INFO - 2020-01-28 02:47:23 --> Helper loaded: form_helper
INFO - 2020-01-28 02:47:23 --> Helper loaded: my_helper
INFO - 2020-01-28 02:47:23 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:47:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:47:23 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:47:23 --> Controller Class Initialized
ERROR - 2020-01-28 02:47:24 --> Severity: Compile Error --> 'break' not in the 'loop' or 'switch' context E:\xampp\htdocs\_2020\nilaik13_ci\application\third_party\PHP_Excel\PHPExcel\Calculation\Functions.php 581
INFO - 2020-01-28 02:48:13 --> Config Class Initialized
INFO - 2020-01-28 02:48:13 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:48:13 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:48:13 --> Utf8 Class Initialized
INFO - 2020-01-28 02:48:13 --> URI Class Initialized
INFO - 2020-01-28 02:48:13 --> Router Class Initialized
INFO - 2020-01-28 02:48:13 --> Output Class Initialized
INFO - 2020-01-28 02:48:13 --> Security Class Initialized
DEBUG - 2020-01-28 02:48:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:48:13 --> Input Class Initialized
INFO - 2020-01-28 02:48:13 --> Language Class Initialized
INFO - 2020-01-28 02:48:13 --> Language Class Initialized
INFO - 2020-01-28 02:48:13 --> Config Class Initialized
INFO - 2020-01-28 02:48:13 --> Loader Class Initialized
INFO - 2020-01-28 02:48:13 --> Helper loaded: url_helper
INFO - 2020-01-28 02:48:13 --> Helper loaded: file_helper
INFO - 2020-01-28 02:48:13 --> Helper loaded: form_helper
INFO - 2020-01-28 02:48:13 --> Helper loaded: my_helper
INFO - 2020-01-28 02:48:13 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:48:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:48:13 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:48:13 --> Controller Class Initialized
ERROR - 2020-01-28 02:48:14 --> Severity: Compile Error --> 'break' not in the 'loop' or 'switch' context E:\xampp\htdocs\_2020\nilaik13_ci\application\third_party\PHP_Excel\PHPExcel\Calculation\Functions.php 581
INFO - 2020-01-28 02:49:26 --> Config Class Initialized
INFO - 2020-01-28 02:49:26 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:49:26 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:49:26 --> Utf8 Class Initialized
INFO - 2020-01-28 02:49:26 --> URI Class Initialized
INFO - 2020-01-28 02:49:26 --> Router Class Initialized
INFO - 2020-01-28 02:49:26 --> Output Class Initialized
INFO - 2020-01-28 02:49:26 --> Security Class Initialized
DEBUG - 2020-01-28 02:49:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:49:26 --> Input Class Initialized
INFO - 2020-01-28 02:49:26 --> Language Class Initialized
INFO - 2020-01-28 02:49:26 --> Language Class Initialized
INFO - 2020-01-28 02:49:26 --> Config Class Initialized
INFO - 2020-01-28 02:49:26 --> Loader Class Initialized
INFO - 2020-01-28 02:49:26 --> Helper loaded: url_helper
INFO - 2020-01-28 02:49:26 --> Helper loaded: file_helper
INFO - 2020-01-28 02:49:26 --> Helper loaded: form_helper
INFO - 2020-01-28 02:49:26 --> Helper loaded: my_helper
INFO - 2020-01-28 02:49:26 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:49:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:49:26 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:49:26 --> Controller Class Initialized
ERROR - 2020-01-28 02:49:26 --> Severity: Compile Error --> 'break' not in the 'loop' or 'switch' context E:\xampp\htdocs\_2020\nilaik13_ci\application\third_party\PHP_Excel\PHPExcel\Calculation\Functions.php 581
INFO - 2020-01-28 02:50:27 --> Config Class Initialized
INFO - 2020-01-28 02:50:27 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:50:27 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:50:27 --> Utf8 Class Initialized
INFO - 2020-01-28 02:50:27 --> URI Class Initialized
INFO - 2020-01-28 02:50:27 --> Router Class Initialized
INFO - 2020-01-28 02:50:27 --> Output Class Initialized
INFO - 2020-01-28 02:50:27 --> Security Class Initialized
DEBUG - 2020-01-28 02:50:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:50:27 --> Input Class Initialized
INFO - 2020-01-28 02:50:27 --> Language Class Initialized
INFO - 2020-01-28 02:50:27 --> Language Class Initialized
INFO - 2020-01-28 02:50:27 --> Config Class Initialized
INFO - 2020-01-28 02:50:27 --> Loader Class Initialized
INFO - 2020-01-28 02:50:27 --> Helper loaded: url_helper
INFO - 2020-01-28 02:50:27 --> Helper loaded: file_helper
INFO - 2020-01-28 02:50:27 --> Helper loaded: form_helper
INFO - 2020-01-28 02:50:27 --> Helper loaded: my_helper
INFO - 2020-01-28 02:50:27 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:50:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:50:27 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:50:27 --> Controller Class Initialized
ERROR - 2020-01-28 02:50:27 --> Severity: Compile Error --> 'break' not in the 'loop' or 'switch' context E:\xampp\htdocs\_2020\nilaik13_ci\application\third_party\PHP_Excel\PHPExcel\Calculation\Functions.php 581
INFO - 2020-01-28 02:52:01 --> Config Class Initialized
INFO - 2020-01-28 02:52:01 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:52:01 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:52:01 --> Utf8 Class Initialized
INFO - 2020-01-28 02:52:01 --> URI Class Initialized
INFO - 2020-01-28 02:52:01 --> Router Class Initialized
INFO - 2020-01-28 02:52:01 --> Output Class Initialized
INFO - 2020-01-28 02:52:01 --> Security Class Initialized
DEBUG - 2020-01-28 02:52:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:52:01 --> Input Class Initialized
INFO - 2020-01-28 02:52:01 --> Language Class Initialized
INFO - 2020-01-28 02:52:01 --> Language Class Initialized
INFO - 2020-01-28 02:52:01 --> Config Class Initialized
INFO - 2020-01-28 02:52:01 --> Loader Class Initialized
INFO - 2020-01-28 02:52:01 --> Helper loaded: url_helper
INFO - 2020-01-28 02:52:01 --> Helper loaded: file_helper
INFO - 2020-01-28 02:52:01 --> Helper loaded: form_helper
INFO - 2020-01-28 02:52:01 --> Helper loaded: my_helper
INFO - 2020-01-28 02:52:01 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:52:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:52:01 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:52:01 --> Controller Class Initialized
DEBUG - 2020-01-28 02:52:01 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/list.php
DEBUG - 2020-01-28 02:52:01 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 02:52:01 --> Final output sent to browser
DEBUG - 2020-01-28 02:52:01 --> Total execution time: 0.4188
INFO - 2020-01-28 02:52:02 --> Config Class Initialized
INFO - 2020-01-28 02:52:02 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:52:02 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:52:02 --> Utf8 Class Initialized
INFO - 2020-01-28 02:52:02 --> URI Class Initialized
INFO - 2020-01-28 02:52:02 --> Router Class Initialized
INFO - 2020-01-28 02:52:02 --> Output Class Initialized
INFO - 2020-01-28 02:52:02 --> Security Class Initialized
DEBUG - 2020-01-28 02:52:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:52:02 --> Input Class Initialized
INFO - 2020-01-28 02:52:02 --> Language Class Initialized
INFO - 2020-01-28 02:52:02 --> Language Class Initialized
INFO - 2020-01-28 02:52:02 --> Config Class Initialized
INFO - 2020-01-28 02:52:02 --> Loader Class Initialized
INFO - 2020-01-28 02:52:02 --> Helper loaded: url_helper
INFO - 2020-01-28 02:52:02 --> Helper loaded: file_helper
INFO - 2020-01-28 02:52:02 --> Helper loaded: form_helper
INFO - 2020-01-28 02:52:02 --> Helper loaded: my_helper
INFO - 2020-01-28 02:52:02 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:52:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:52:02 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:52:02 --> Controller Class Initialized
INFO - 2020-01-28 02:52:10 --> Config Class Initialized
INFO - 2020-01-28 02:52:10 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:52:10 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:52:10 --> Utf8 Class Initialized
INFO - 2020-01-28 02:52:10 --> URI Class Initialized
INFO - 2020-01-28 02:52:10 --> Router Class Initialized
INFO - 2020-01-28 02:52:10 --> Output Class Initialized
INFO - 2020-01-28 02:52:10 --> Security Class Initialized
DEBUG - 2020-01-28 02:52:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:52:10 --> Input Class Initialized
INFO - 2020-01-28 02:52:10 --> Language Class Initialized
INFO - 2020-01-28 02:52:10 --> Language Class Initialized
INFO - 2020-01-28 02:52:10 --> Config Class Initialized
INFO - 2020-01-28 02:52:10 --> Loader Class Initialized
INFO - 2020-01-28 02:52:10 --> Helper loaded: url_helper
INFO - 2020-01-28 02:52:10 --> Helper loaded: file_helper
INFO - 2020-01-28 02:52:10 --> Helper loaded: form_helper
INFO - 2020-01-28 02:52:10 --> Helper loaded: my_helper
INFO - 2020-01-28 02:52:10 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:52:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:52:10 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:52:10 --> Controller Class Initialized
DEBUG - 2020-01-28 02:52:10 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/form.php
DEBUG - 2020-01-28 02:52:10 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 02:52:10 --> Final output sent to browser
DEBUG - 2020-01-28 02:52:10 --> Total execution time: 0.3524
INFO - 2020-01-28 02:52:13 --> Config Class Initialized
INFO - 2020-01-28 02:52:13 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:52:13 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:52:13 --> Utf8 Class Initialized
INFO - 2020-01-28 02:52:13 --> URI Class Initialized
INFO - 2020-01-28 02:52:13 --> Router Class Initialized
INFO - 2020-01-28 02:52:13 --> Output Class Initialized
INFO - 2020-01-28 02:52:13 --> Security Class Initialized
DEBUG - 2020-01-28 02:52:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:52:13 --> Input Class Initialized
INFO - 2020-01-28 02:52:14 --> Language Class Initialized
INFO - 2020-01-28 02:52:14 --> Language Class Initialized
INFO - 2020-01-28 02:52:14 --> Config Class Initialized
INFO - 2020-01-28 02:52:14 --> Loader Class Initialized
INFO - 2020-01-28 02:52:14 --> Helper loaded: url_helper
INFO - 2020-01-28 02:52:14 --> Helper loaded: file_helper
INFO - 2020-01-28 02:52:14 --> Helper loaded: form_helper
INFO - 2020-01-28 02:52:14 --> Helper loaded: my_helper
INFO - 2020-01-28 02:52:14 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:52:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:52:14 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:52:14 --> Controller Class Initialized
DEBUG - 2020-01-28 02:52:14 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/list.php
DEBUG - 2020-01-28 02:52:14 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 02:52:14 --> Final output sent to browser
DEBUG - 2020-01-28 02:52:14 --> Total execution time: 0.4930
INFO - 2020-01-28 02:52:14 --> Config Class Initialized
INFO - 2020-01-28 02:52:14 --> Hooks Class Initialized
DEBUG - 2020-01-28 02:52:14 --> UTF-8 Support Enabled
INFO - 2020-01-28 02:52:14 --> Utf8 Class Initialized
INFO - 2020-01-28 02:52:14 --> URI Class Initialized
INFO - 2020-01-28 02:52:14 --> Router Class Initialized
INFO - 2020-01-28 02:52:14 --> Output Class Initialized
INFO - 2020-01-28 02:52:14 --> Security Class Initialized
DEBUG - 2020-01-28 02:52:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 02:52:14 --> Input Class Initialized
INFO - 2020-01-28 02:52:14 --> Language Class Initialized
INFO - 2020-01-28 02:52:14 --> Language Class Initialized
INFO - 2020-01-28 02:52:14 --> Config Class Initialized
INFO - 2020-01-28 02:52:14 --> Loader Class Initialized
INFO - 2020-01-28 02:52:14 --> Helper loaded: url_helper
INFO - 2020-01-28 02:52:14 --> Helper loaded: file_helper
INFO - 2020-01-28 02:52:14 --> Helper loaded: form_helper
INFO - 2020-01-28 02:52:14 --> Helper loaded: my_helper
INFO - 2020-01-28 02:52:14 --> Database Driver Class Initialized
DEBUG - 2020-01-28 02:52:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 02:52:14 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 02:52:14 --> Controller Class Initialized
INFO - 2020-01-28 04:08:18 --> Config Class Initialized
INFO - 2020-01-28 04:08:18 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:08:19 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:08:19 --> Utf8 Class Initialized
INFO - 2020-01-28 04:08:19 --> URI Class Initialized
DEBUG - 2020-01-28 04:08:19 --> No URI present. Default controller set.
INFO - 2020-01-28 04:08:19 --> Router Class Initialized
INFO - 2020-01-28 04:08:19 --> Output Class Initialized
INFO - 2020-01-28 04:08:19 --> Security Class Initialized
DEBUG - 2020-01-28 04:08:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:08:19 --> Input Class Initialized
INFO - 2020-01-28 04:08:19 --> Language Class Initialized
INFO - 2020-01-28 04:08:19 --> Language Class Initialized
INFO - 2020-01-28 04:08:19 --> Config Class Initialized
INFO - 2020-01-28 04:08:19 --> Loader Class Initialized
INFO - 2020-01-28 04:08:19 --> Helper loaded: url_helper
INFO - 2020-01-28 04:08:19 --> Helper loaded: file_helper
INFO - 2020-01-28 04:08:19 --> Helper loaded: form_helper
INFO - 2020-01-28 04:08:19 --> Helper loaded: my_helper
INFO - 2020-01-28 04:08:19 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:08:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:08:19 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:08:19 --> Controller Class Initialized
INFO - 2020-01-28 04:08:19 --> Config Class Initialized
INFO - 2020-01-28 04:08:19 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:08:19 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:08:19 --> Utf8 Class Initialized
INFO - 2020-01-28 04:08:19 --> URI Class Initialized
INFO - 2020-01-28 04:08:19 --> Router Class Initialized
INFO - 2020-01-28 04:08:19 --> Output Class Initialized
INFO - 2020-01-28 04:08:20 --> Security Class Initialized
DEBUG - 2020-01-28 04:08:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:08:20 --> Input Class Initialized
INFO - 2020-01-28 04:08:20 --> Language Class Initialized
INFO - 2020-01-28 04:08:20 --> Language Class Initialized
INFO - 2020-01-28 04:08:20 --> Config Class Initialized
INFO - 2020-01-28 04:08:20 --> Loader Class Initialized
INFO - 2020-01-28 04:08:20 --> Helper loaded: url_helper
INFO - 2020-01-28 04:08:20 --> Helper loaded: file_helper
INFO - 2020-01-28 04:08:20 --> Helper loaded: form_helper
INFO - 2020-01-28 04:08:20 --> Helper loaded: my_helper
INFO - 2020-01-28 04:08:20 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:08:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:08:20 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:08:20 --> Controller Class Initialized
DEBUG - 2020-01-28 04:08:20 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/login/views/login.php
DEBUG - 2020-01-28 04:08:20 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 04:08:20 --> Final output sent to browser
DEBUG - 2020-01-28 04:08:20 --> Total execution time: 0.5192
INFO - 2020-01-28 04:08:25 --> Config Class Initialized
INFO - 2020-01-28 04:08:26 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:08:26 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:08:26 --> Utf8 Class Initialized
INFO - 2020-01-28 04:08:26 --> URI Class Initialized
INFO - 2020-01-28 04:08:26 --> Router Class Initialized
INFO - 2020-01-28 04:08:26 --> Output Class Initialized
INFO - 2020-01-28 04:08:26 --> Security Class Initialized
DEBUG - 2020-01-28 04:08:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:08:26 --> Input Class Initialized
INFO - 2020-01-28 04:08:26 --> Language Class Initialized
INFO - 2020-01-28 04:08:26 --> Language Class Initialized
INFO - 2020-01-28 04:08:26 --> Config Class Initialized
INFO - 2020-01-28 04:08:26 --> Loader Class Initialized
INFO - 2020-01-28 04:08:26 --> Helper loaded: url_helper
INFO - 2020-01-28 04:08:26 --> Helper loaded: file_helper
INFO - 2020-01-28 04:08:26 --> Helper loaded: form_helper
INFO - 2020-01-28 04:08:26 --> Helper loaded: my_helper
INFO - 2020-01-28 04:08:26 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:08:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:08:26 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:08:26 --> Controller Class Initialized
INFO - 2020-01-28 04:08:26 --> Helper loaded: cookie_helper
INFO - 2020-01-28 04:08:26 --> Final output sent to browser
DEBUG - 2020-01-28 04:08:26 --> Total execution time: 0.3921
INFO - 2020-01-28 04:08:27 --> Config Class Initialized
INFO - 2020-01-28 04:08:27 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:08:27 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:08:27 --> Utf8 Class Initialized
INFO - 2020-01-28 04:08:27 --> URI Class Initialized
INFO - 2020-01-28 04:08:28 --> Router Class Initialized
INFO - 2020-01-28 04:08:28 --> Output Class Initialized
INFO - 2020-01-28 04:08:28 --> Security Class Initialized
DEBUG - 2020-01-28 04:08:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:08:28 --> Input Class Initialized
INFO - 2020-01-28 04:08:28 --> Language Class Initialized
INFO - 2020-01-28 04:08:28 --> Language Class Initialized
INFO - 2020-01-28 04:08:28 --> Config Class Initialized
INFO - 2020-01-28 04:08:28 --> Loader Class Initialized
INFO - 2020-01-28 04:08:28 --> Helper loaded: url_helper
INFO - 2020-01-28 04:08:28 --> Helper loaded: file_helper
INFO - 2020-01-28 04:08:28 --> Helper loaded: form_helper
INFO - 2020-01-28 04:08:28 --> Helper loaded: my_helper
INFO - 2020-01-28 04:08:28 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:08:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:08:28 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:08:28 --> Controller Class Initialized
DEBUG - 2020-01-28 04:08:28 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/home/views/v_home.php
DEBUG - 2020-01-28 04:08:28 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 04:08:28 --> Final output sent to browser
DEBUG - 2020-01-28 04:08:28 --> Total execution time: 0.5536
INFO - 2020-01-28 04:08:30 --> Config Class Initialized
INFO - 2020-01-28 04:08:30 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:08:30 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:08:30 --> Utf8 Class Initialized
INFO - 2020-01-28 04:08:30 --> URI Class Initialized
INFO - 2020-01-28 04:08:30 --> Router Class Initialized
INFO - 2020-01-28 04:08:30 --> Output Class Initialized
INFO - 2020-01-28 04:08:30 --> Security Class Initialized
DEBUG - 2020-01-28 04:08:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:08:30 --> Input Class Initialized
INFO - 2020-01-28 04:08:30 --> Language Class Initialized
INFO - 2020-01-28 04:08:30 --> Language Class Initialized
INFO - 2020-01-28 04:08:30 --> Config Class Initialized
INFO - 2020-01-28 04:08:30 --> Loader Class Initialized
INFO - 2020-01-28 04:08:30 --> Helper loaded: url_helper
INFO - 2020-01-28 04:08:30 --> Helper loaded: file_helper
INFO - 2020-01-28 04:08:30 --> Helper loaded: form_helper
INFO - 2020-01-28 04:08:30 --> Helper loaded: my_helper
INFO - 2020-01-28 04:08:30 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:08:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:08:30 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:08:30 --> Controller Class Initialized
DEBUG - 2020-01-28 04:08:30 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/view_mapel/views/v_view_mapel.php
DEBUG - 2020-01-28 04:08:31 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 04:08:31 --> Final output sent to browser
DEBUG - 2020-01-28 04:08:31 --> Total execution time: 0.4703
INFO - 2020-01-28 04:08:32 --> Config Class Initialized
INFO - 2020-01-28 04:08:32 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:08:32 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:08:32 --> Utf8 Class Initialized
INFO - 2020-01-28 04:08:32 --> URI Class Initialized
INFO - 2020-01-28 04:08:32 --> Router Class Initialized
INFO - 2020-01-28 04:08:32 --> Output Class Initialized
INFO - 2020-01-28 04:08:32 --> Security Class Initialized
DEBUG - 2020-01-28 04:08:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:08:32 --> Input Class Initialized
INFO - 2020-01-28 04:08:32 --> Language Class Initialized
INFO - 2020-01-28 04:08:32 --> Language Class Initialized
INFO - 2020-01-28 04:08:32 --> Config Class Initialized
INFO - 2020-01-28 04:08:32 --> Loader Class Initialized
INFO - 2020-01-28 04:08:33 --> Helper loaded: url_helper
INFO - 2020-01-28 04:08:33 --> Helper loaded: file_helper
INFO - 2020-01-28 04:08:33 --> Helper loaded: form_helper
INFO - 2020-01-28 04:08:33 --> Helper loaded: my_helper
INFO - 2020-01-28 04:08:33 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:08:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:08:33 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:08:33 --> Controller Class Initialized
DEBUG - 2020-01-28 04:08:33 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/list.php
DEBUG - 2020-01-28 04:08:33 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 04:08:33 --> Final output sent to browser
DEBUG - 2020-01-28 04:08:33 --> Total execution time: 0.4304
INFO - 2020-01-28 04:08:33 --> Config Class Initialized
INFO - 2020-01-28 04:08:33 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:08:33 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:08:33 --> Utf8 Class Initialized
INFO - 2020-01-28 04:08:33 --> URI Class Initialized
INFO - 2020-01-28 04:08:33 --> Router Class Initialized
INFO - 2020-01-28 04:08:33 --> Output Class Initialized
INFO - 2020-01-28 04:08:33 --> Security Class Initialized
DEBUG - 2020-01-28 04:08:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:08:33 --> Input Class Initialized
INFO - 2020-01-28 04:08:33 --> Language Class Initialized
INFO - 2020-01-28 04:08:33 --> Language Class Initialized
INFO - 2020-01-28 04:08:33 --> Config Class Initialized
INFO - 2020-01-28 04:08:33 --> Loader Class Initialized
INFO - 2020-01-28 04:08:33 --> Helper loaded: url_helper
INFO - 2020-01-28 04:08:33 --> Helper loaded: file_helper
INFO - 2020-01-28 04:08:33 --> Helper loaded: form_helper
INFO - 2020-01-28 04:08:33 --> Helper loaded: my_helper
INFO - 2020-01-28 04:08:33 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:08:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:08:33 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:08:33 --> Controller Class Initialized
INFO - 2020-01-28 04:08:34 --> Config Class Initialized
INFO - 2020-01-28 04:08:34 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:08:34 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:08:34 --> Utf8 Class Initialized
INFO - 2020-01-28 04:08:34 --> URI Class Initialized
INFO - 2020-01-28 04:08:34 --> Router Class Initialized
INFO - 2020-01-28 04:08:34 --> Output Class Initialized
INFO - 2020-01-28 04:08:34 --> Security Class Initialized
DEBUG - 2020-01-28 04:08:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:08:34 --> Input Class Initialized
INFO - 2020-01-28 04:08:34 --> Language Class Initialized
INFO - 2020-01-28 04:08:34 --> Language Class Initialized
INFO - 2020-01-28 04:08:34 --> Config Class Initialized
INFO - 2020-01-28 04:08:34 --> Loader Class Initialized
INFO - 2020-01-28 04:08:34 --> Helper loaded: url_helper
INFO - 2020-01-28 04:08:34 --> Helper loaded: file_helper
INFO - 2020-01-28 04:08:34 --> Helper loaded: form_helper
INFO - 2020-01-28 04:08:34 --> Helper loaded: my_helper
INFO - 2020-01-28 04:08:34 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:08:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:08:34 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:08:34 --> Controller Class Initialized
INFO - 2020-01-28 04:11:04 --> Config Class Initialized
INFO - 2020-01-28 04:11:04 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:11:04 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:11:04 --> Utf8 Class Initialized
INFO - 2020-01-28 04:11:04 --> URI Class Initialized
INFO - 2020-01-28 04:11:04 --> Router Class Initialized
INFO - 2020-01-28 04:11:04 --> Output Class Initialized
INFO - 2020-01-28 04:11:04 --> Security Class Initialized
DEBUG - 2020-01-28 04:11:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:11:05 --> Input Class Initialized
INFO - 2020-01-28 04:11:05 --> Language Class Initialized
INFO - 2020-01-28 04:11:05 --> Language Class Initialized
INFO - 2020-01-28 04:11:05 --> Config Class Initialized
INFO - 2020-01-28 04:11:05 --> Loader Class Initialized
INFO - 2020-01-28 04:11:05 --> Helper loaded: url_helper
INFO - 2020-01-28 04:11:05 --> Helper loaded: file_helper
INFO - 2020-01-28 04:11:05 --> Helper loaded: form_helper
INFO - 2020-01-28 04:11:05 --> Helper loaded: my_helper
INFO - 2020-01-28 04:11:05 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:11:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:11:05 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:11:05 --> Controller Class Initialized
INFO - 2020-01-28 04:11:05 --> Final output sent to browser
DEBUG - 2020-01-28 04:11:05 --> Total execution time: 0.7190
INFO - 2020-01-28 04:11:26 --> Config Class Initialized
INFO - 2020-01-28 04:11:26 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:11:26 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:11:26 --> Utf8 Class Initialized
INFO - 2020-01-28 04:11:26 --> URI Class Initialized
INFO - 2020-01-28 04:11:26 --> Router Class Initialized
INFO - 2020-01-28 04:11:26 --> Output Class Initialized
INFO - 2020-01-28 04:11:26 --> Security Class Initialized
DEBUG - 2020-01-28 04:11:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:11:26 --> Input Class Initialized
INFO - 2020-01-28 04:11:26 --> Language Class Initialized
INFO - 2020-01-28 04:11:26 --> Language Class Initialized
INFO - 2020-01-28 04:11:26 --> Config Class Initialized
INFO - 2020-01-28 04:11:26 --> Loader Class Initialized
INFO - 2020-01-28 04:11:26 --> Helper loaded: url_helper
INFO - 2020-01-28 04:11:26 --> Helper loaded: file_helper
INFO - 2020-01-28 04:11:26 --> Helper loaded: form_helper
INFO - 2020-01-28 04:11:26 --> Helper loaded: my_helper
INFO - 2020-01-28 04:11:26 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:11:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:11:26 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:11:26 --> Controller Class Initialized
DEBUG - 2020-01-28 04:11:26 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/form.php
DEBUG - 2020-01-28 04:11:26 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 04:11:26 --> Final output sent to browser
DEBUG - 2020-01-28 04:11:26 --> Total execution time: 0.3737
INFO - 2020-01-28 04:11:40 --> Config Class Initialized
INFO - 2020-01-28 04:11:40 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:11:40 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:11:40 --> Utf8 Class Initialized
INFO - 2020-01-28 04:11:40 --> URI Class Initialized
INFO - 2020-01-28 04:11:40 --> Router Class Initialized
INFO - 2020-01-28 04:11:40 --> Output Class Initialized
INFO - 2020-01-28 04:11:40 --> Security Class Initialized
DEBUG - 2020-01-28 04:11:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:11:40 --> Input Class Initialized
INFO - 2020-01-28 04:11:40 --> Language Class Initialized
INFO - 2020-01-28 04:11:40 --> Language Class Initialized
INFO - 2020-01-28 04:11:40 --> Config Class Initialized
INFO - 2020-01-28 04:11:40 --> Loader Class Initialized
INFO - 2020-01-28 04:11:40 --> Helper loaded: url_helper
INFO - 2020-01-28 04:11:40 --> Helper loaded: file_helper
INFO - 2020-01-28 04:11:40 --> Helper loaded: form_helper
INFO - 2020-01-28 04:11:40 --> Helper loaded: my_helper
INFO - 2020-01-28 04:11:40 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:11:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:11:40 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:11:40 --> Controller Class Initialized
INFO - 2020-01-28 04:11:41 --> Config Class Initialized
INFO - 2020-01-28 04:11:41 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:11:41 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:11:41 --> Utf8 Class Initialized
INFO - 2020-01-28 04:11:41 --> URI Class Initialized
INFO - 2020-01-28 04:11:41 --> Router Class Initialized
INFO - 2020-01-28 04:11:41 --> Output Class Initialized
INFO - 2020-01-28 04:11:41 --> Security Class Initialized
DEBUG - 2020-01-28 04:11:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:11:41 --> Input Class Initialized
INFO - 2020-01-28 04:11:41 --> Language Class Initialized
INFO - 2020-01-28 04:11:41 --> Language Class Initialized
INFO - 2020-01-28 04:11:41 --> Config Class Initialized
INFO - 2020-01-28 04:11:41 --> Loader Class Initialized
INFO - 2020-01-28 04:11:41 --> Helper loaded: url_helper
INFO - 2020-01-28 04:11:41 --> Helper loaded: file_helper
INFO - 2020-01-28 04:11:41 --> Helper loaded: form_helper
INFO - 2020-01-28 04:11:41 --> Helper loaded: my_helper
INFO - 2020-01-28 04:11:41 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:11:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:11:41 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:11:41 --> Controller Class Initialized
DEBUG - 2020-01-28 04:11:41 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/list.php
DEBUG - 2020-01-28 04:11:41 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 04:11:41 --> Final output sent to browser
DEBUG - 2020-01-28 04:11:41 --> Total execution time: 0.4076
INFO - 2020-01-28 04:11:41 --> Config Class Initialized
INFO - 2020-01-28 04:11:41 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:11:41 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:11:42 --> Utf8 Class Initialized
INFO - 2020-01-28 04:11:42 --> URI Class Initialized
INFO - 2020-01-28 04:11:42 --> Router Class Initialized
INFO - 2020-01-28 04:11:42 --> Output Class Initialized
INFO - 2020-01-28 04:11:42 --> Security Class Initialized
DEBUG - 2020-01-28 04:11:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:11:42 --> Input Class Initialized
INFO - 2020-01-28 04:11:42 --> Language Class Initialized
INFO - 2020-01-28 04:11:42 --> Language Class Initialized
INFO - 2020-01-28 04:11:42 --> Config Class Initialized
INFO - 2020-01-28 04:11:42 --> Loader Class Initialized
INFO - 2020-01-28 04:11:42 --> Helper loaded: url_helper
INFO - 2020-01-28 04:11:42 --> Helper loaded: file_helper
INFO - 2020-01-28 04:11:42 --> Helper loaded: form_helper
INFO - 2020-01-28 04:11:42 --> Helper loaded: my_helper
INFO - 2020-01-28 04:11:42 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:11:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:11:42 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:11:42 --> Controller Class Initialized
INFO - 2020-01-28 04:11:43 --> Config Class Initialized
INFO - 2020-01-28 04:11:43 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:11:43 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:11:43 --> Utf8 Class Initialized
INFO - 2020-01-28 04:11:43 --> URI Class Initialized
INFO - 2020-01-28 04:11:43 --> Router Class Initialized
INFO - 2020-01-28 04:11:43 --> Output Class Initialized
INFO - 2020-01-28 04:11:43 --> Security Class Initialized
DEBUG - 2020-01-28 04:11:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:11:43 --> Input Class Initialized
INFO - 2020-01-28 04:11:43 --> Language Class Initialized
INFO - 2020-01-28 04:11:43 --> Language Class Initialized
INFO - 2020-01-28 04:11:43 --> Config Class Initialized
INFO - 2020-01-28 04:11:43 --> Loader Class Initialized
INFO - 2020-01-28 04:11:43 --> Helper loaded: url_helper
INFO - 2020-01-28 04:11:43 --> Helper loaded: file_helper
INFO - 2020-01-28 04:11:43 --> Helper loaded: form_helper
INFO - 2020-01-28 04:11:43 --> Helper loaded: my_helper
INFO - 2020-01-28 04:11:43 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:11:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:11:43 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:11:43 --> Controller Class Initialized
INFO - 2020-01-28 04:11:44 --> Final output sent to browser
DEBUG - 2020-01-28 04:11:44 --> Total execution time: 0.4740
INFO - 2020-01-28 04:11:54 --> Config Class Initialized
INFO - 2020-01-28 04:11:54 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:11:54 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:11:54 --> Utf8 Class Initialized
INFO - 2020-01-28 04:11:54 --> URI Class Initialized
INFO - 2020-01-28 04:11:54 --> Router Class Initialized
INFO - 2020-01-28 04:11:54 --> Output Class Initialized
INFO - 2020-01-28 04:11:54 --> Security Class Initialized
DEBUG - 2020-01-28 04:11:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:11:54 --> Input Class Initialized
INFO - 2020-01-28 04:11:54 --> Language Class Initialized
INFO - 2020-01-28 04:11:54 --> Language Class Initialized
INFO - 2020-01-28 04:11:54 --> Config Class Initialized
INFO - 2020-01-28 04:11:54 --> Loader Class Initialized
INFO - 2020-01-28 04:11:54 --> Helper loaded: url_helper
INFO - 2020-01-28 04:11:54 --> Helper loaded: file_helper
INFO - 2020-01-28 04:11:54 --> Helper loaded: form_helper
INFO - 2020-01-28 04:11:54 --> Helper loaded: my_helper
INFO - 2020-01-28 04:11:54 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:11:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:11:54 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:11:54 --> Controller Class Initialized
DEBUG - 2020-01-28 04:11:54 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 04:11:54 --> Final output sent to browser
DEBUG - 2020-01-28 04:11:54 --> Total execution time: 0.4414
INFO - 2020-01-28 04:14:10 --> Config Class Initialized
INFO - 2020-01-28 04:14:10 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:14:10 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:14:10 --> Utf8 Class Initialized
INFO - 2020-01-28 04:14:10 --> URI Class Initialized
INFO - 2020-01-28 04:14:10 --> Router Class Initialized
INFO - 2020-01-28 04:14:10 --> Output Class Initialized
INFO - 2020-01-28 04:14:10 --> Security Class Initialized
DEBUG - 2020-01-28 04:14:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:14:10 --> Input Class Initialized
INFO - 2020-01-28 04:14:10 --> Language Class Initialized
INFO - 2020-01-28 04:14:10 --> Language Class Initialized
INFO - 2020-01-28 04:14:10 --> Config Class Initialized
INFO - 2020-01-28 04:14:11 --> Loader Class Initialized
INFO - 2020-01-28 04:14:11 --> Helper loaded: url_helper
INFO - 2020-01-28 04:14:11 --> Helper loaded: file_helper
INFO - 2020-01-28 04:14:11 --> Helper loaded: form_helper
INFO - 2020-01-28 04:14:11 --> Helper loaded: my_helper
INFO - 2020-01-28 04:14:11 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:14:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:14:11 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:14:11 --> Controller Class Initialized
INFO - 2020-01-28 04:14:11 --> Final output sent to browser
DEBUG - 2020-01-28 04:14:11 --> Total execution time: 0.3438
INFO - 2020-01-28 04:14:13 --> Config Class Initialized
INFO - 2020-01-28 04:14:13 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:14:13 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:14:13 --> Utf8 Class Initialized
INFO - 2020-01-28 04:14:13 --> URI Class Initialized
INFO - 2020-01-28 04:14:13 --> Router Class Initialized
INFO - 2020-01-28 04:14:13 --> Output Class Initialized
INFO - 2020-01-28 04:14:13 --> Security Class Initialized
DEBUG - 2020-01-28 04:14:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:14:13 --> Input Class Initialized
INFO - 2020-01-28 04:14:13 --> Language Class Initialized
INFO - 2020-01-28 04:14:13 --> Language Class Initialized
INFO - 2020-01-28 04:14:13 --> Config Class Initialized
INFO - 2020-01-28 04:14:13 --> Loader Class Initialized
INFO - 2020-01-28 04:14:13 --> Helper loaded: url_helper
INFO - 2020-01-28 04:14:13 --> Helper loaded: file_helper
INFO - 2020-01-28 04:14:13 --> Helper loaded: form_helper
INFO - 2020-01-28 04:14:13 --> Helper loaded: my_helper
INFO - 2020-01-28 04:14:13 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:14:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:14:13 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:14:13 --> Controller Class Initialized
INFO - 2020-01-28 04:14:13 --> Final output sent to browser
DEBUG - 2020-01-28 04:14:13 --> Total execution time: 0.3249
INFO - 2020-01-28 04:14:18 --> Config Class Initialized
INFO - 2020-01-28 04:14:18 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:14:18 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:14:18 --> Utf8 Class Initialized
INFO - 2020-01-28 04:14:18 --> URI Class Initialized
INFO - 2020-01-28 04:14:19 --> Router Class Initialized
INFO - 2020-01-28 04:14:19 --> Output Class Initialized
INFO - 2020-01-28 04:14:19 --> Security Class Initialized
DEBUG - 2020-01-28 04:14:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:14:19 --> Input Class Initialized
INFO - 2020-01-28 04:14:19 --> Language Class Initialized
INFO - 2020-01-28 04:14:19 --> Language Class Initialized
INFO - 2020-01-28 04:14:19 --> Config Class Initialized
INFO - 2020-01-28 04:14:19 --> Loader Class Initialized
INFO - 2020-01-28 04:14:19 --> Helper loaded: url_helper
INFO - 2020-01-28 04:14:19 --> Helper loaded: file_helper
INFO - 2020-01-28 04:14:19 --> Helper loaded: form_helper
INFO - 2020-01-28 04:14:19 --> Helper loaded: my_helper
INFO - 2020-01-28 04:14:19 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:14:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:14:19 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:14:19 --> Controller Class Initialized
DEBUG - 2020-01-28 04:14:19 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 04:14:19 --> Final output sent to browser
DEBUG - 2020-01-28 04:14:19 --> Total execution time: 0.4343
INFO - 2020-01-28 04:21:34 --> Config Class Initialized
INFO - 2020-01-28 04:21:34 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:21:34 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:21:34 --> Utf8 Class Initialized
INFO - 2020-01-28 04:21:34 --> URI Class Initialized
INFO - 2020-01-28 04:21:34 --> Router Class Initialized
INFO - 2020-01-28 04:21:34 --> Output Class Initialized
INFO - 2020-01-28 04:21:34 --> Security Class Initialized
DEBUG - 2020-01-28 04:21:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:21:34 --> Input Class Initialized
INFO - 2020-01-28 04:21:34 --> Language Class Initialized
INFO - 2020-01-28 04:21:34 --> Language Class Initialized
INFO - 2020-01-28 04:21:34 --> Config Class Initialized
INFO - 2020-01-28 04:21:34 --> Loader Class Initialized
INFO - 2020-01-28 04:21:34 --> Helper loaded: url_helper
INFO - 2020-01-28 04:21:34 --> Helper loaded: file_helper
INFO - 2020-01-28 04:21:34 --> Helper loaded: form_helper
INFO - 2020-01-28 04:21:34 --> Helper loaded: my_helper
INFO - 2020-01-28 04:21:34 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:21:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:21:34 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:21:34 --> Controller Class Initialized
DEBUG - 2020-01-28 04:21:34 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/view_mapel/views/v_view_mapel.php
DEBUG - 2020-01-28 04:21:34 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 04:21:34 --> Final output sent to browser
DEBUG - 2020-01-28 04:21:34 --> Total execution time: 0.3716
INFO - 2020-01-28 04:21:36 --> Config Class Initialized
INFO - 2020-01-28 04:21:36 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:21:36 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:21:36 --> Utf8 Class Initialized
INFO - 2020-01-28 04:21:36 --> URI Class Initialized
INFO - 2020-01-28 04:21:36 --> Router Class Initialized
INFO - 2020-01-28 04:21:36 --> Output Class Initialized
INFO - 2020-01-28 04:21:36 --> Security Class Initialized
DEBUG - 2020-01-28 04:21:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:21:36 --> Input Class Initialized
INFO - 2020-01-28 04:21:36 --> Language Class Initialized
INFO - 2020-01-28 04:21:36 --> Language Class Initialized
INFO - 2020-01-28 04:21:36 --> Config Class Initialized
INFO - 2020-01-28 04:21:36 --> Loader Class Initialized
INFO - 2020-01-28 04:21:36 --> Helper loaded: url_helper
INFO - 2020-01-28 04:21:36 --> Helper loaded: file_helper
INFO - 2020-01-28 04:21:36 --> Helper loaded: form_helper
INFO - 2020-01-28 04:21:36 --> Helper loaded: my_helper
INFO - 2020-01-28 04:21:36 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:21:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:21:36 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:21:36 --> Controller Class Initialized
DEBUG - 2020-01-28 04:21:36 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_keterampilan/views/list.php
DEBUG - 2020-01-28 04:21:37 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 04:21:37 --> Final output sent to browser
DEBUG - 2020-01-28 04:21:37 --> Total execution time: 0.3724
INFO - 2020-01-28 04:21:38 --> Config Class Initialized
INFO - 2020-01-28 04:21:38 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:21:38 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:21:38 --> Utf8 Class Initialized
INFO - 2020-01-28 04:21:38 --> URI Class Initialized
INFO - 2020-01-28 04:21:38 --> Router Class Initialized
INFO - 2020-01-28 04:21:38 --> Output Class Initialized
INFO - 2020-01-28 04:21:38 --> Security Class Initialized
DEBUG - 2020-01-28 04:21:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:21:38 --> Input Class Initialized
INFO - 2020-01-28 04:21:38 --> Language Class Initialized
INFO - 2020-01-28 04:21:38 --> Language Class Initialized
INFO - 2020-01-28 04:21:38 --> Config Class Initialized
INFO - 2020-01-28 04:21:38 --> Loader Class Initialized
INFO - 2020-01-28 04:21:38 --> Helper loaded: url_helper
INFO - 2020-01-28 04:21:38 --> Helper loaded: file_helper
INFO - 2020-01-28 04:21:38 --> Helper loaded: form_helper
INFO - 2020-01-28 04:21:38 --> Helper loaded: my_helper
INFO - 2020-01-28 04:21:38 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:21:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:21:38 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:21:38 --> Controller Class Initialized
DEBUG - 2020-01-28 04:21:38 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_keterampilan/views/cetak.php
INFO - 2020-01-28 04:21:38 --> Final output sent to browser
DEBUG - 2020-01-28 04:21:38 --> Total execution time: 0.4470
INFO - 2020-01-28 04:23:32 --> Config Class Initialized
INFO - 2020-01-28 04:23:32 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:23:32 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:23:32 --> Utf8 Class Initialized
INFO - 2020-01-28 04:23:32 --> URI Class Initialized
INFO - 2020-01-28 04:23:32 --> Router Class Initialized
INFO - 2020-01-28 04:23:32 --> Output Class Initialized
INFO - 2020-01-28 04:23:32 --> Security Class Initialized
DEBUG - 2020-01-28 04:23:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:23:32 --> Input Class Initialized
INFO - 2020-01-28 04:23:32 --> Language Class Initialized
INFO - 2020-01-28 04:23:32 --> Language Class Initialized
INFO - 2020-01-28 04:23:33 --> Config Class Initialized
INFO - 2020-01-28 04:23:33 --> Loader Class Initialized
INFO - 2020-01-28 04:23:33 --> Helper loaded: url_helper
INFO - 2020-01-28 04:23:33 --> Helper loaded: file_helper
INFO - 2020-01-28 04:23:33 --> Helper loaded: form_helper
INFO - 2020-01-28 04:23:33 --> Helper loaded: my_helper
INFO - 2020-01-28 04:23:33 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:23:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:23:33 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:23:33 --> Controller Class Initialized
DEBUG - 2020-01-28 04:23:33 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_keterampilan/views/cetak.php
INFO - 2020-01-28 04:23:33 --> Final output sent to browser
DEBUG - 2020-01-28 04:23:33 --> Total execution time: 0.7966
INFO - 2020-01-28 04:23:39 --> Config Class Initialized
INFO - 2020-01-28 04:23:39 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:23:39 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:23:39 --> Utf8 Class Initialized
INFO - 2020-01-28 04:23:39 --> URI Class Initialized
INFO - 2020-01-28 04:23:39 --> Router Class Initialized
INFO - 2020-01-28 04:23:39 --> Output Class Initialized
INFO - 2020-01-28 04:23:39 --> Security Class Initialized
DEBUG - 2020-01-28 04:23:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:23:39 --> Input Class Initialized
INFO - 2020-01-28 04:23:39 --> Language Class Initialized
INFO - 2020-01-28 04:23:39 --> Language Class Initialized
INFO - 2020-01-28 04:23:39 --> Config Class Initialized
INFO - 2020-01-28 04:23:39 --> Loader Class Initialized
INFO - 2020-01-28 04:23:39 --> Helper loaded: url_helper
INFO - 2020-01-28 04:23:39 --> Helper loaded: file_helper
INFO - 2020-01-28 04:23:39 --> Helper loaded: form_helper
INFO - 2020-01-28 04:23:39 --> Helper loaded: my_helper
INFO - 2020-01-28 04:23:39 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:23:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:23:39 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:23:39 --> Controller Class Initialized
DEBUG - 2020-01-28 04:23:39 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 04:23:39 --> Final output sent to browser
DEBUG - 2020-01-28 04:23:40 --> Total execution time: 0.4416
INFO - 2020-01-28 04:25:49 --> Config Class Initialized
INFO - 2020-01-28 04:25:49 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:25:49 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:25:49 --> Utf8 Class Initialized
INFO - 2020-01-28 04:25:49 --> URI Class Initialized
INFO - 2020-01-28 04:25:49 --> Router Class Initialized
INFO - 2020-01-28 04:25:49 --> Output Class Initialized
INFO - 2020-01-28 04:25:49 --> Security Class Initialized
DEBUG - 2020-01-28 04:25:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:25:49 --> Input Class Initialized
INFO - 2020-01-28 04:25:49 --> Language Class Initialized
INFO - 2020-01-28 04:25:49 --> Language Class Initialized
INFO - 2020-01-28 04:25:49 --> Config Class Initialized
INFO - 2020-01-28 04:25:49 --> Loader Class Initialized
INFO - 2020-01-28 04:25:49 --> Helper loaded: url_helper
INFO - 2020-01-28 04:25:49 --> Helper loaded: file_helper
INFO - 2020-01-28 04:25:49 --> Helper loaded: form_helper
INFO - 2020-01-28 04:25:49 --> Helper loaded: my_helper
INFO - 2020-01-28 04:25:49 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:25:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:25:49 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:25:49 --> Controller Class Initialized
DEBUG - 2020-01-28 04:25:49 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 04:25:49 --> Final output sent to browser
DEBUG - 2020-01-28 04:25:49 --> Total execution time: 0.3970
INFO - 2020-01-28 04:26:39 --> Config Class Initialized
INFO - 2020-01-28 04:26:39 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:26:39 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:26:39 --> Utf8 Class Initialized
INFO - 2020-01-28 04:26:39 --> URI Class Initialized
INFO - 2020-01-28 04:26:39 --> Router Class Initialized
INFO - 2020-01-28 04:26:39 --> Output Class Initialized
INFO - 2020-01-28 04:26:39 --> Security Class Initialized
DEBUG - 2020-01-28 04:26:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:26:39 --> Input Class Initialized
INFO - 2020-01-28 04:26:39 --> Language Class Initialized
INFO - 2020-01-28 04:26:39 --> Language Class Initialized
INFO - 2020-01-28 04:26:39 --> Config Class Initialized
INFO - 2020-01-28 04:26:39 --> Loader Class Initialized
INFO - 2020-01-28 04:26:39 --> Helper loaded: url_helper
INFO - 2020-01-28 04:26:39 --> Helper loaded: file_helper
INFO - 2020-01-28 04:26:39 --> Helper loaded: form_helper
INFO - 2020-01-28 04:26:39 --> Helper loaded: my_helper
INFO - 2020-01-28 04:26:39 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:26:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:26:39 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:26:39 --> Controller Class Initialized
DEBUG - 2020-01-28 04:26:39 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 04:26:39 --> Final output sent to browser
DEBUG - 2020-01-28 04:26:39 --> Total execution time: 0.3919
INFO - 2020-01-28 04:50:25 --> Config Class Initialized
INFO - 2020-01-28 04:50:25 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:50:25 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:50:25 --> Utf8 Class Initialized
INFO - 2020-01-28 04:50:25 --> URI Class Initialized
INFO - 2020-01-28 04:50:25 --> Router Class Initialized
INFO - 2020-01-28 04:50:25 --> Output Class Initialized
INFO - 2020-01-28 04:50:25 --> Security Class Initialized
DEBUG - 2020-01-28 04:50:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:50:25 --> Input Class Initialized
INFO - 2020-01-28 04:50:25 --> Language Class Initialized
INFO - 2020-01-28 04:50:25 --> Language Class Initialized
INFO - 2020-01-28 04:50:25 --> Config Class Initialized
INFO - 2020-01-28 04:50:25 --> Loader Class Initialized
INFO - 2020-01-28 04:50:25 --> Helper loaded: url_helper
INFO - 2020-01-28 04:50:25 --> Helper loaded: file_helper
INFO - 2020-01-28 04:50:25 --> Helper loaded: form_helper
INFO - 2020-01-28 04:50:25 --> Helper loaded: my_helper
INFO - 2020-01-28 04:50:25 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:50:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:50:25 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:50:25 --> Controller Class Initialized
ERROR - 2020-01-28 04:50:25 --> Severity: Notice --> Undefined index: uts E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 118
DEBUG - 2020-01-28 04:50:25 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 04:50:25 --> Final output sent to browser
DEBUG - 2020-01-28 04:50:25 --> Total execution time: 0.4277
INFO - 2020-01-28 04:50:33 --> Config Class Initialized
INFO - 2020-01-28 04:50:33 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:50:33 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:50:33 --> Utf8 Class Initialized
INFO - 2020-01-28 04:50:33 --> URI Class Initialized
INFO - 2020-01-28 04:50:33 --> Router Class Initialized
INFO - 2020-01-28 04:50:33 --> Output Class Initialized
INFO - 2020-01-28 04:50:33 --> Security Class Initialized
DEBUG - 2020-01-28 04:50:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:50:33 --> Input Class Initialized
INFO - 2020-01-28 04:50:33 --> Language Class Initialized
INFO - 2020-01-28 04:50:33 --> Language Class Initialized
INFO - 2020-01-28 04:50:33 --> Config Class Initialized
INFO - 2020-01-28 04:50:33 --> Loader Class Initialized
INFO - 2020-01-28 04:50:33 --> Helper loaded: url_helper
INFO - 2020-01-28 04:50:33 --> Helper loaded: file_helper
INFO - 2020-01-28 04:50:33 --> Helper loaded: form_helper
INFO - 2020-01-28 04:50:33 --> Helper loaded: my_helper
INFO - 2020-01-28 04:50:33 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:50:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:50:33 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:50:33 --> Controller Class Initialized
DEBUG - 2020-01-28 04:50:33 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 04:50:33 --> Final output sent to browser
DEBUG - 2020-01-28 04:50:33 --> Total execution time: 0.4101
INFO - 2020-01-28 04:50:38 --> Config Class Initialized
INFO - 2020-01-28 04:50:38 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:50:39 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:50:39 --> Utf8 Class Initialized
INFO - 2020-01-28 04:50:39 --> URI Class Initialized
INFO - 2020-01-28 04:50:39 --> Router Class Initialized
INFO - 2020-01-28 04:50:39 --> Output Class Initialized
INFO - 2020-01-28 04:50:39 --> Security Class Initialized
DEBUG - 2020-01-28 04:50:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:50:39 --> Input Class Initialized
INFO - 2020-01-28 04:50:39 --> Language Class Initialized
INFO - 2020-01-28 04:50:39 --> Language Class Initialized
INFO - 2020-01-28 04:50:39 --> Config Class Initialized
INFO - 2020-01-28 04:50:39 --> Loader Class Initialized
INFO - 2020-01-28 04:50:39 --> Helper loaded: url_helper
INFO - 2020-01-28 04:50:39 --> Helper loaded: file_helper
INFO - 2020-01-28 04:50:39 --> Helper loaded: form_helper
INFO - 2020-01-28 04:50:39 --> Helper loaded: my_helper
INFO - 2020-01-28 04:50:39 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:50:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:50:39 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:50:39 --> Controller Class Initialized
DEBUG - 2020-01-28 04:50:39 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 04:50:39 --> Final output sent to browser
DEBUG - 2020-01-28 04:50:39 --> Total execution time: 0.4514
INFO - 2020-01-28 04:51:00 --> Config Class Initialized
INFO - 2020-01-28 04:51:00 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:51:00 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:51:00 --> Utf8 Class Initialized
INFO - 2020-01-28 04:51:00 --> URI Class Initialized
INFO - 2020-01-28 04:51:01 --> Router Class Initialized
INFO - 2020-01-28 04:51:01 --> Output Class Initialized
INFO - 2020-01-28 04:51:01 --> Security Class Initialized
DEBUG - 2020-01-28 04:51:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:51:01 --> Input Class Initialized
INFO - 2020-01-28 04:51:01 --> Language Class Initialized
INFO - 2020-01-28 04:51:01 --> Language Class Initialized
INFO - 2020-01-28 04:51:01 --> Config Class Initialized
INFO - 2020-01-28 04:51:01 --> Loader Class Initialized
INFO - 2020-01-28 04:51:01 --> Helper loaded: url_helper
INFO - 2020-01-28 04:51:01 --> Helper loaded: file_helper
INFO - 2020-01-28 04:51:01 --> Helper loaded: form_helper
INFO - 2020-01-28 04:51:01 --> Helper loaded: my_helper
INFO - 2020-01-28 04:51:01 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:51:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:51:01 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:51:01 --> Controller Class Initialized
ERROR - 2020-01-28 04:51:01 --> Severity: Notice --> Undefined index: nilai_angka E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 118
DEBUG - 2020-01-28 04:51:01 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 04:51:01 --> Final output sent to browser
DEBUG - 2020-01-28 04:51:01 --> Total execution time: 0.4084
INFO - 2020-01-28 04:51:12 --> Config Class Initialized
INFO - 2020-01-28 04:51:12 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:51:12 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:51:12 --> Utf8 Class Initialized
INFO - 2020-01-28 04:51:12 --> URI Class Initialized
INFO - 2020-01-28 04:51:12 --> Router Class Initialized
INFO - 2020-01-28 04:51:12 --> Output Class Initialized
INFO - 2020-01-28 04:51:12 --> Security Class Initialized
DEBUG - 2020-01-28 04:51:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:51:12 --> Input Class Initialized
INFO - 2020-01-28 04:51:12 --> Language Class Initialized
INFO - 2020-01-28 04:51:12 --> Language Class Initialized
INFO - 2020-01-28 04:51:12 --> Config Class Initialized
INFO - 2020-01-28 04:51:12 --> Loader Class Initialized
INFO - 2020-01-28 04:51:12 --> Helper loaded: url_helper
INFO - 2020-01-28 04:51:12 --> Helper loaded: file_helper
INFO - 2020-01-28 04:51:12 --> Helper loaded: form_helper
INFO - 2020-01-28 04:51:12 --> Helper loaded: my_helper
INFO - 2020-01-28 04:51:12 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:51:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:51:12 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:51:12 --> Controller Class Initialized
ERROR - 2020-01-28 04:51:12 --> Severity: Notice --> Undefined offset: 0 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 118
DEBUG - 2020-01-28 04:51:12 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 04:51:12 --> Final output sent to browser
DEBUG - 2020-01-28 04:51:12 --> Total execution time: 0.4249
INFO - 2020-01-28 04:53:24 --> Config Class Initialized
INFO - 2020-01-28 04:53:24 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:53:24 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:53:24 --> Utf8 Class Initialized
INFO - 2020-01-28 04:53:24 --> URI Class Initialized
INFO - 2020-01-28 04:53:24 --> Router Class Initialized
INFO - 2020-01-28 04:53:24 --> Output Class Initialized
INFO - 2020-01-28 04:53:24 --> Security Class Initialized
DEBUG - 2020-01-28 04:53:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:53:24 --> Input Class Initialized
INFO - 2020-01-28 04:53:24 --> Language Class Initialized
INFO - 2020-01-28 04:53:24 --> Language Class Initialized
INFO - 2020-01-28 04:53:24 --> Config Class Initialized
INFO - 2020-01-28 04:53:24 --> Loader Class Initialized
INFO - 2020-01-28 04:53:24 --> Helper loaded: url_helper
INFO - 2020-01-28 04:53:24 --> Helper loaded: file_helper
INFO - 2020-01-28 04:53:24 --> Helper loaded: form_helper
INFO - 2020-01-28 04:53:24 --> Helper loaded: my_helper
INFO - 2020-01-28 04:53:24 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:53:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:53:24 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:53:24 --> Controller Class Initialized
DEBUG - 2020-01-28 04:53:24 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 04:53:24 --> Final output sent to browser
DEBUG - 2020-01-28 04:53:24 --> Total execution time: 0.4489
INFO - 2020-01-28 04:56:49 --> Config Class Initialized
INFO - 2020-01-28 04:56:49 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:56:49 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:56:50 --> Utf8 Class Initialized
INFO - 2020-01-28 04:56:50 --> URI Class Initialized
INFO - 2020-01-28 04:56:50 --> Router Class Initialized
INFO - 2020-01-28 04:56:50 --> Output Class Initialized
INFO - 2020-01-28 04:56:50 --> Security Class Initialized
DEBUG - 2020-01-28 04:56:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:56:50 --> Input Class Initialized
INFO - 2020-01-28 04:56:50 --> Language Class Initialized
INFO - 2020-01-28 04:56:50 --> Language Class Initialized
INFO - 2020-01-28 04:56:50 --> Config Class Initialized
INFO - 2020-01-28 04:56:50 --> Loader Class Initialized
INFO - 2020-01-28 04:56:50 --> Helper loaded: url_helper
INFO - 2020-01-28 04:56:50 --> Helper loaded: file_helper
INFO - 2020-01-28 04:56:50 --> Helper loaded: form_helper
INFO - 2020-01-28 04:56:50 --> Helper loaded: my_helper
INFO - 2020-01-28 04:56:50 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:56:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:56:50 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:56:50 --> Controller Class Initialized
ERROR - 2020-01-28 04:56:50 --> Severity: Notice --> Undefined index: id E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 150
ERROR - 2020-01-28 04:56:50 --> Severity: Notice --> Undefined variable: idxs E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 04:56:50 --> Severity: Notice --> Undefined variable: idxs E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 04:56:50 --> Severity: Notice --> Undefined index: id E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 150
ERROR - 2020-01-28 04:56:50 --> Severity: Notice --> Undefined variable: idxs E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 04:56:50 --> Severity: Notice --> Undefined variable: idxs E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 04:56:50 --> Severity: Notice --> Undefined index: id E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 150
ERROR - 2020-01-28 04:56:50 --> Severity: Notice --> Undefined variable: idxs E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 04:56:50 --> Severity: Notice --> Undefined variable: idxs E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 04:56:50 --> Severity: Notice --> Undefined index: id E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 150
ERROR - 2020-01-28 04:56:50 --> Severity: Notice --> Undefined variable: idxs E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 04:56:50 --> Severity: Notice --> Undefined variable: idxs E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 04:56:50 --> Severity: Notice --> Undefined index: id E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 150
ERROR - 2020-01-28 04:56:50 --> Severity: Notice --> Undefined variable: idxs E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 04:56:50 --> Severity: Notice --> Undefined variable: idxs E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 04:56:50 --> Severity: Notice --> Undefined index: id E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 150
ERROR - 2020-01-28 04:56:50 --> Severity: Notice --> Undefined variable: idxs E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 04:56:50 --> Severity: Notice --> Undefined variable: idxs E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 04:56:50 --> Severity: Notice --> Undefined index: id E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 150
ERROR - 2020-01-28 04:56:50 --> Severity: Notice --> Undefined variable: idxs E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 04:56:50 --> Severity: Notice --> Undefined variable: idxs E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 04:56:50 --> Severity: Notice --> Undefined index: id E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 150
ERROR - 2020-01-28 04:56:50 --> Severity: Notice --> Undefined variable: idxs E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 04:56:50 --> Severity: Notice --> Undefined variable: idxs E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 04:56:50 --> Severity: Notice --> Undefined index: id E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 150
ERROR - 2020-01-28 04:56:50 --> Severity: Notice --> Undefined variable: idxs E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 04:56:50 --> Severity: Notice --> Undefined variable: idxs E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 04:56:50 --> Severity: Notice --> Undefined index: id E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 150
ERROR - 2020-01-28 04:56:50 --> Severity: Notice --> Undefined variable: idxs E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 04:56:50 --> Severity: Notice --> Undefined variable: idxs E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 04:56:50 --> Severity: Notice --> Undefined index: id E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 150
ERROR - 2020-01-28 04:56:50 --> Severity: Notice --> Undefined variable: idxs E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 04:56:50 --> Severity: Notice --> Undefined variable: idxs E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
DEBUG - 2020-01-28 04:56:50 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 04:56:50 --> Final output sent to browser
DEBUG - 2020-01-28 04:56:50 --> Total execution time: 0.9309
INFO - 2020-01-28 04:58:24 --> Config Class Initialized
INFO - 2020-01-28 04:58:24 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:58:24 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:58:24 --> Utf8 Class Initialized
INFO - 2020-01-28 04:58:24 --> URI Class Initialized
INFO - 2020-01-28 04:58:24 --> Router Class Initialized
INFO - 2020-01-28 04:58:24 --> Output Class Initialized
INFO - 2020-01-28 04:58:24 --> Security Class Initialized
DEBUG - 2020-01-28 04:58:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:58:24 --> Input Class Initialized
INFO - 2020-01-28 04:58:24 --> Language Class Initialized
INFO - 2020-01-28 04:58:24 --> Language Class Initialized
INFO - 2020-01-28 04:58:24 --> Config Class Initialized
INFO - 2020-01-28 04:58:24 --> Loader Class Initialized
INFO - 2020-01-28 04:58:24 --> Helper loaded: url_helper
INFO - 2020-01-28 04:58:24 --> Helper loaded: file_helper
INFO - 2020-01-28 04:58:24 --> Helper loaded: form_helper
INFO - 2020-01-28 04:58:24 --> Helper loaded: my_helper
INFO - 2020-01-28 04:58:24 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:58:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:58:24 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:58:24 --> Controller Class Initialized
ERROR - 2020-01-28 04:58:24 --> Severity: Notice --> Undefined index: id_siswa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 150
ERROR - 2020-01-28 04:58:24 --> Severity: Notice --> Undefined index: id_siswa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 150
ERROR - 2020-01-28 04:58:24 --> Severity: Notice --> Undefined index: id_siswa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 150
ERROR - 2020-01-28 04:58:24 --> Severity: Notice --> Undefined index: id_siswa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 150
ERROR - 2020-01-28 04:58:24 --> Severity: Notice --> Undefined index: id_siswa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 150
ERROR - 2020-01-28 04:58:24 --> Severity: Notice --> Undefined index: id_siswa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 150
ERROR - 2020-01-28 04:58:24 --> Severity: Notice --> Undefined index: id_siswa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 150
ERROR - 2020-01-28 04:58:24 --> Severity: Notice --> Undefined index: id_siswa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 150
ERROR - 2020-01-28 04:58:24 --> Severity: Notice --> Undefined index: id_siswa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 150
ERROR - 2020-01-28 04:58:24 --> Severity: Notice --> Undefined index: id_siswa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 150
ERROR - 2020-01-28 04:58:24 --> Severity: Notice --> Undefined index: id_siswa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 150
DEBUG - 2020-01-28 04:58:24 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 04:58:24 --> Final output sent to browser
DEBUG - 2020-01-28 04:58:24 --> Total execution time: 0.5732
INFO - 2020-01-28 04:58:47 --> Config Class Initialized
INFO - 2020-01-28 04:58:48 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:58:48 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:58:48 --> Utf8 Class Initialized
INFO - 2020-01-28 04:58:48 --> URI Class Initialized
INFO - 2020-01-28 04:58:48 --> Router Class Initialized
INFO - 2020-01-28 04:58:48 --> Output Class Initialized
INFO - 2020-01-28 04:58:48 --> Security Class Initialized
DEBUG - 2020-01-28 04:58:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:58:48 --> Input Class Initialized
INFO - 2020-01-28 04:58:48 --> Language Class Initialized
INFO - 2020-01-28 04:58:48 --> Language Class Initialized
INFO - 2020-01-28 04:58:48 --> Config Class Initialized
INFO - 2020-01-28 04:58:48 --> Loader Class Initialized
INFO - 2020-01-28 04:58:48 --> Helper loaded: url_helper
INFO - 2020-01-28 04:58:48 --> Helper loaded: file_helper
INFO - 2020-01-28 04:58:48 --> Helper loaded: form_helper
INFO - 2020-01-28 04:58:48 --> Helper loaded: my_helper
INFO - 2020-01-28 04:58:48 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:58:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:58:48 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:58:48 --> Controller Class Initialized
INFO - 2020-01-28 04:59:01 --> Config Class Initialized
INFO - 2020-01-28 04:59:01 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:59:01 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:59:01 --> Utf8 Class Initialized
INFO - 2020-01-28 04:59:01 --> URI Class Initialized
INFO - 2020-01-28 04:59:01 --> Router Class Initialized
INFO - 2020-01-28 04:59:01 --> Output Class Initialized
INFO - 2020-01-28 04:59:01 --> Security Class Initialized
DEBUG - 2020-01-28 04:59:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:59:01 --> Input Class Initialized
INFO - 2020-01-28 04:59:01 --> Language Class Initialized
INFO - 2020-01-28 04:59:01 --> Language Class Initialized
INFO - 2020-01-28 04:59:01 --> Config Class Initialized
INFO - 2020-01-28 04:59:01 --> Loader Class Initialized
INFO - 2020-01-28 04:59:01 --> Helper loaded: url_helper
INFO - 2020-01-28 04:59:01 --> Helper loaded: file_helper
INFO - 2020-01-28 04:59:01 --> Helper loaded: form_helper
INFO - 2020-01-28 04:59:01 --> Helper loaded: my_helper
INFO - 2020-01-28 04:59:02 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:59:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:59:02 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:59:02 --> Controller Class Initialized
ERROR - 2020-01-28 04:59:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 04:59:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 04:59:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 04:59:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 04:59:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 04:59:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 04:59:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 04:59:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 04:59:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 04:59:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 04:59:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 04:59:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 04:59:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 04:59:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 04:59:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 04:59:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 04:59:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 04:59:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 04:59:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 04:59:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 04:59:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 04:59:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
DEBUG - 2020-01-28 04:59:02 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 04:59:02 --> Final output sent to browser
DEBUG - 2020-01-28 04:59:02 --> Total execution time: 0.8114
INFO - 2020-01-28 04:59:39 --> Config Class Initialized
INFO - 2020-01-28 04:59:39 --> Hooks Class Initialized
DEBUG - 2020-01-28 04:59:39 --> UTF-8 Support Enabled
INFO - 2020-01-28 04:59:39 --> Utf8 Class Initialized
INFO - 2020-01-28 04:59:39 --> URI Class Initialized
INFO - 2020-01-28 04:59:39 --> Router Class Initialized
INFO - 2020-01-28 04:59:39 --> Output Class Initialized
INFO - 2020-01-28 04:59:39 --> Security Class Initialized
DEBUG - 2020-01-28 04:59:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 04:59:39 --> Input Class Initialized
INFO - 2020-01-28 04:59:39 --> Language Class Initialized
INFO - 2020-01-28 04:59:39 --> Language Class Initialized
INFO - 2020-01-28 04:59:39 --> Config Class Initialized
INFO - 2020-01-28 04:59:39 --> Loader Class Initialized
INFO - 2020-01-28 04:59:39 --> Helper loaded: url_helper
INFO - 2020-01-28 04:59:39 --> Helper loaded: file_helper
INFO - 2020-01-28 04:59:39 --> Helper loaded: form_helper
INFO - 2020-01-28 04:59:39 --> Helper loaded: my_helper
INFO - 2020-01-28 04:59:39 --> Database Driver Class Initialized
DEBUG - 2020-01-28 04:59:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 04:59:39 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 04:59:39 --> Controller Class Initialized
ERROR - 2020-01-28 04:59:40 --> Severity: Notice --> Array to string conversion E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 150
INFO - 2020-01-28 05:00:01 --> Config Class Initialized
INFO - 2020-01-28 05:00:01 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:00:01 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:00:01 --> Utf8 Class Initialized
INFO - 2020-01-28 05:00:01 --> URI Class Initialized
INFO - 2020-01-28 05:00:01 --> Router Class Initialized
INFO - 2020-01-28 05:00:01 --> Output Class Initialized
INFO - 2020-01-28 05:00:01 --> Security Class Initialized
DEBUG - 2020-01-28 05:00:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:00:01 --> Input Class Initialized
INFO - 2020-01-28 05:00:02 --> Language Class Initialized
INFO - 2020-01-28 05:00:02 --> Language Class Initialized
INFO - 2020-01-28 05:00:02 --> Config Class Initialized
INFO - 2020-01-28 05:00:02 --> Loader Class Initialized
INFO - 2020-01-28 05:00:02 --> Helper loaded: url_helper
INFO - 2020-01-28 05:00:02 --> Helper loaded: file_helper
INFO - 2020-01-28 05:00:02 --> Helper loaded: form_helper
INFO - 2020-01-28 05:00:02 --> Helper loaded: my_helper
INFO - 2020-01-28 05:00:02 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:00:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:00:02 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:00:02 --> Controller Class Initialized
ERROR - 2020-01-28 05:00:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:00:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 05:00:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:00:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 05:00:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:00:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 05:00:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:00:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 05:00:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:00:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 05:00:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:00:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 05:00:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:00:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 05:00:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:00:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 05:00:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:00:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 05:00:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:00:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 05:00:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:00:02 --> Severity: Warning --> Illegal offset type E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
DEBUG - 2020-01-28 05:00:02 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 05:00:02 --> Final output sent to browser
DEBUG - 2020-01-28 05:00:02 --> Total execution time: 0.8130
INFO - 2020-01-28 05:02:57 --> Config Class Initialized
INFO - 2020-01-28 05:02:57 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:02:57 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:02:57 --> Utf8 Class Initialized
INFO - 2020-01-28 05:02:57 --> URI Class Initialized
INFO - 2020-01-28 05:02:57 --> Router Class Initialized
INFO - 2020-01-28 05:02:57 --> Output Class Initialized
INFO - 2020-01-28 05:02:57 --> Security Class Initialized
DEBUG - 2020-01-28 05:02:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:02:57 --> Input Class Initialized
INFO - 2020-01-28 05:02:57 --> Language Class Initialized
INFO - 2020-01-28 05:02:57 --> Language Class Initialized
INFO - 2020-01-28 05:02:57 --> Config Class Initialized
INFO - 2020-01-28 05:02:57 --> Loader Class Initialized
INFO - 2020-01-28 05:02:57 --> Helper loaded: url_helper
INFO - 2020-01-28 05:02:57 --> Helper loaded: file_helper
INFO - 2020-01-28 05:02:57 --> Helper loaded: form_helper
INFO - 2020-01-28 05:02:57 --> Helper loaded: my_helper
INFO - 2020-01-28 05:02:57 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:02:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:02:57 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:02:57 --> Controller Class Initialized
ERROR - 2020-01-28 05:02:57 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:02:57 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:02:57 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:02:57 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:02:57 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:02:57 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:02:57 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:02:57 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:02:57 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:02:57 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:02:57 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
DEBUG - 2020-01-28 05:02:58 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 05:02:58 --> Final output sent to browser
DEBUG - 2020-01-28 05:02:58 --> Total execution time: 0.5990
INFO - 2020-01-28 05:03:25 --> Config Class Initialized
INFO - 2020-01-28 05:03:25 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:03:25 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:03:25 --> Utf8 Class Initialized
INFO - 2020-01-28 05:03:25 --> URI Class Initialized
INFO - 2020-01-28 05:03:25 --> Router Class Initialized
INFO - 2020-01-28 05:03:25 --> Output Class Initialized
INFO - 2020-01-28 05:03:25 --> Security Class Initialized
DEBUG - 2020-01-28 05:03:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:03:25 --> Input Class Initialized
INFO - 2020-01-28 05:03:25 --> Language Class Initialized
INFO - 2020-01-28 05:03:25 --> Language Class Initialized
INFO - 2020-01-28 05:03:25 --> Config Class Initialized
INFO - 2020-01-28 05:03:25 --> Loader Class Initialized
INFO - 2020-01-28 05:03:25 --> Helper loaded: url_helper
INFO - 2020-01-28 05:03:25 --> Helper loaded: file_helper
INFO - 2020-01-28 05:03:25 --> Helper loaded: form_helper
INFO - 2020-01-28 05:03:25 --> Helper loaded: my_helper
INFO - 2020-01-28 05:03:25 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:03:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:03:25 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:03:25 --> Controller Class Initialized
ERROR - 2020-01-28 05:03:25 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:03:25 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:03:25 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:03:25 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:03:25 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:03:25 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:03:25 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:03:25 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:03:25 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:03:25 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:03:25 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
DEBUG - 2020-01-28 05:03:25 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 05:03:25 --> Final output sent to browser
DEBUG - 2020-01-28 05:03:25 --> Total execution time: 0.5760
INFO - 2020-01-28 05:04:22 --> Config Class Initialized
INFO - 2020-01-28 05:04:22 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:04:22 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:04:22 --> Utf8 Class Initialized
INFO - 2020-01-28 05:04:22 --> URI Class Initialized
INFO - 2020-01-28 05:04:22 --> Router Class Initialized
INFO - 2020-01-28 05:04:22 --> Output Class Initialized
INFO - 2020-01-28 05:04:22 --> Security Class Initialized
DEBUG - 2020-01-28 05:04:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:04:22 --> Input Class Initialized
INFO - 2020-01-28 05:04:22 --> Language Class Initialized
INFO - 2020-01-28 05:04:22 --> Language Class Initialized
INFO - 2020-01-28 05:04:22 --> Config Class Initialized
INFO - 2020-01-28 05:04:22 --> Loader Class Initialized
INFO - 2020-01-28 05:04:22 --> Helper loaded: url_helper
INFO - 2020-01-28 05:04:22 --> Helper loaded: file_helper
INFO - 2020-01-28 05:04:22 --> Helper loaded: form_helper
INFO - 2020-01-28 05:04:22 --> Helper loaded: my_helper
INFO - 2020-01-28 05:04:22 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:04:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:04:22 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:04:22 --> Controller Class Initialized
DEBUG - 2020-01-28 05:04:22 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 05:04:22 --> Final output sent to browser
DEBUG - 2020-01-28 05:04:22 --> Total execution time: 0.4138
INFO - 2020-01-28 05:04:48 --> Config Class Initialized
INFO - 2020-01-28 05:04:48 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:04:48 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:04:48 --> Utf8 Class Initialized
INFO - 2020-01-28 05:04:48 --> URI Class Initialized
INFO - 2020-01-28 05:04:48 --> Router Class Initialized
INFO - 2020-01-28 05:04:48 --> Output Class Initialized
INFO - 2020-01-28 05:04:48 --> Security Class Initialized
DEBUG - 2020-01-28 05:04:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:04:48 --> Input Class Initialized
INFO - 2020-01-28 05:04:48 --> Language Class Initialized
INFO - 2020-01-28 05:04:48 --> Language Class Initialized
INFO - 2020-01-28 05:04:48 --> Config Class Initialized
INFO - 2020-01-28 05:04:48 --> Loader Class Initialized
INFO - 2020-01-28 05:04:48 --> Helper loaded: url_helper
INFO - 2020-01-28 05:04:48 --> Helper loaded: file_helper
INFO - 2020-01-28 05:04:48 --> Helper loaded: form_helper
INFO - 2020-01-28 05:04:48 --> Helper loaded: my_helper
INFO - 2020-01-28 05:04:48 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:04:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:04:48 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:04:49 --> Controller Class Initialized
DEBUG - 2020-01-28 05:04:49 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 05:04:49 --> Final output sent to browser
DEBUG - 2020-01-28 05:04:49 --> Total execution time: 0.4726
INFO - 2020-01-28 05:04:54 --> Config Class Initialized
INFO - 2020-01-28 05:04:54 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:04:54 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:04:54 --> Utf8 Class Initialized
INFO - 2020-01-28 05:04:54 --> URI Class Initialized
INFO - 2020-01-28 05:04:54 --> Router Class Initialized
INFO - 2020-01-28 05:04:54 --> Output Class Initialized
INFO - 2020-01-28 05:04:54 --> Security Class Initialized
DEBUG - 2020-01-28 05:04:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:04:54 --> Input Class Initialized
INFO - 2020-01-28 05:04:54 --> Language Class Initialized
INFO - 2020-01-28 05:04:54 --> Language Class Initialized
INFO - 2020-01-28 05:04:54 --> Config Class Initialized
INFO - 2020-01-28 05:04:54 --> Loader Class Initialized
INFO - 2020-01-28 05:04:54 --> Helper loaded: url_helper
INFO - 2020-01-28 05:04:54 --> Helper loaded: file_helper
INFO - 2020-01-28 05:04:54 --> Helper loaded: form_helper
INFO - 2020-01-28 05:04:54 --> Helper loaded: my_helper
INFO - 2020-01-28 05:04:54 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:04:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:04:55 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:04:55 --> Controller Class Initialized
DEBUG - 2020-01-28 05:04:55 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/view_mapel/views/v_view_mapel.php
DEBUG - 2020-01-28 05:04:55 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 05:04:55 --> Final output sent to browser
DEBUG - 2020-01-28 05:04:55 --> Total execution time: 0.3991
INFO - 2020-01-28 05:04:56 --> Config Class Initialized
INFO - 2020-01-28 05:04:56 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:04:56 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:04:56 --> Utf8 Class Initialized
INFO - 2020-01-28 05:04:56 --> URI Class Initialized
INFO - 2020-01-28 05:04:56 --> Router Class Initialized
INFO - 2020-01-28 05:04:56 --> Output Class Initialized
INFO - 2020-01-28 05:04:56 --> Security Class Initialized
DEBUG - 2020-01-28 05:04:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:04:56 --> Input Class Initialized
INFO - 2020-01-28 05:04:56 --> Language Class Initialized
INFO - 2020-01-28 05:04:56 --> Language Class Initialized
INFO - 2020-01-28 05:04:56 --> Config Class Initialized
INFO - 2020-01-28 05:04:56 --> Loader Class Initialized
INFO - 2020-01-28 05:04:56 --> Helper loaded: url_helper
INFO - 2020-01-28 05:04:56 --> Helper loaded: file_helper
INFO - 2020-01-28 05:04:56 --> Helper loaded: form_helper
INFO - 2020-01-28 05:04:56 --> Helper loaded: my_helper
INFO - 2020-01-28 05:04:56 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:04:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:04:56 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:04:56 --> Controller Class Initialized
DEBUG - 2020-01-28 05:04:56 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/list.php
DEBUG - 2020-01-28 05:04:56 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 05:04:56 --> Final output sent to browser
DEBUG - 2020-01-28 05:04:56 --> Total execution time: 0.4287
INFO - 2020-01-28 05:04:57 --> Config Class Initialized
INFO - 2020-01-28 05:04:57 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:04:57 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:04:57 --> Utf8 Class Initialized
INFO - 2020-01-28 05:04:57 --> URI Class Initialized
INFO - 2020-01-28 05:04:57 --> Router Class Initialized
INFO - 2020-01-28 05:04:57 --> Output Class Initialized
INFO - 2020-01-28 05:04:57 --> Security Class Initialized
DEBUG - 2020-01-28 05:04:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:04:57 --> Input Class Initialized
INFO - 2020-01-28 05:04:57 --> Language Class Initialized
INFO - 2020-01-28 05:04:57 --> Language Class Initialized
INFO - 2020-01-28 05:04:57 --> Config Class Initialized
INFO - 2020-01-28 05:04:57 --> Loader Class Initialized
INFO - 2020-01-28 05:04:57 --> Helper loaded: url_helper
INFO - 2020-01-28 05:04:57 --> Helper loaded: file_helper
INFO - 2020-01-28 05:04:57 --> Helper loaded: form_helper
INFO - 2020-01-28 05:04:57 --> Helper loaded: my_helper
INFO - 2020-01-28 05:04:57 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:04:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:04:57 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:04:57 --> Controller Class Initialized
INFO - 2020-01-28 05:04:58 --> Config Class Initialized
INFO - 2020-01-28 05:04:58 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:04:58 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:04:59 --> Utf8 Class Initialized
INFO - 2020-01-28 05:04:59 --> URI Class Initialized
INFO - 2020-01-28 05:04:59 --> Router Class Initialized
INFO - 2020-01-28 05:04:59 --> Output Class Initialized
INFO - 2020-01-28 05:04:59 --> Security Class Initialized
DEBUG - 2020-01-28 05:04:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:04:59 --> Input Class Initialized
INFO - 2020-01-28 05:04:59 --> Language Class Initialized
INFO - 2020-01-28 05:04:59 --> Language Class Initialized
INFO - 2020-01-28 05:04:59 --> Config Class Initialized
INFO - 2020-01-28 05:04:59 --> Loader Class Initialized
INFO - 2020-01-28 05:04:59 --> Helper loaded: url_helper
INFO - 2020-01-28 05:04:59 --> Helper loaded: file_helper
INFO - 2020-01-28 05:04:59 --> Helper loaded: form_helper
INFO - 2020-01-28 05:04:59 --> Helper loaded: my_helper
INFO - 2020-01-28 05:04:59 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:04:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:04:59 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:04:59 --> Controller Class Initialized
INFO - 2020-01-28 05:04:59 --> Final output sent to browser
DEBUG - 2020-01-28 05:04:59 --> Total execution time: 0.3823
INFO - 2020-01-28 05:05:45 --> Config Class Initialized
INFO - 2020-01-28 05:05:45 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:05:45 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:05:45 --> Utf8 Class Initialized
INFO - 2020-01-28 05:05:45 --> URI Class Initialized
INFO - 2020-01-28 05:05:45 --> Router Class Initialized
INFO - 2020-01-28 05:05:45 --> Output Class Initialized
INFO - 2020-01-28 05:05:45 --> Security Class Initialized
DEBUG - 2020-01-28 05:05:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:05:45 --> Input Class Initialized
INFO - 2020-01-28 05:05:45 --> Language Class Initialized
INFO - 2020-01-28 05:05:45 --> Language Class Initialized
INFO - 2020-01-28 05:05:45 --> Config Class Initialized
INFO - 2020-01-28 05:05:45 --> Loader Class Initialized
INFO - 2020-01-28 05:05:45 --> Helper loaded: url_helper
INFO - 2020-01-28 05:05:45 --> Helper loaded: file_helper
INFO - 2020-01-28 05:05:45 --> Helper loaded: form_helper
INFO - 2020-01-28 05:05:45 --> Helper loaded: my_helper
INFO - 2020-01-28 05:05:45 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:05:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:05:46 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:05:46 --> Controller Class Initialized
DEBUG - 2020-01-28 05:05:46 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 05:05:46 --> Final output sent to browser
DEBUG - 2020-01-28 05:05:46 --> Total execution time: 0.4287
INFO - 2020-01-28 05:05:47 --> Config Class Initialized
INFO - 2020-01-28 05:05:47 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:05:47 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:05:47 --> Utf8 Class Initialized
INFO - 2020-01-28 05:05:47 --> URI Class Initialized
INFO - 2020-01-28 05:05:47 --> Router Class Initialized
INFO - 2020-01-28 05:05:47 --> Output Class Initialized
INFO - 2020-01-28 05:05:47 --> Security Class Initialized
DEBUG - 2020-01-28 05:05:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:05:47 --> Input Class Initialized
INFO - 2020-01-28 05:05:48 --> Language Class Initialized
INFO - 2020-01-28 05:05:48 --> Language Class Initialized
INFO - 2020-01-28 05:05:48 --> Config Class Initialized
INFO - 2020-01-28 05:05:48 --> Loader Class Initialized
INFO - 2020-01-28 05:05:48 --> Helper loaded: url_helper
INFO - 2020-01-28 05:05:48 --> Helper loaded: file_helper
INFO - 2020-01-28 05:05:48 --> Helper loaded: form_helper
INFO - 2020-01-28 05:05:48 --> Helper loaded: my_helper
INFO - 2020-01-28 05:05:48 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:05:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:05:48 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:05:48 --> Controller Class Initialized
DEBUG - 2020-01-28 05:05:48 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 05:05:48 --> Final output sent to browser
DEBUG - 2020-01-28 05:05:48 --> Total execution time: 0.4177
INFO - 2020-01-28 05:06:19 --> Config Class Initialized
INFO - 2020-01-28 05:06:19 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:06:19 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:06:19 --> Utf8 Class Initialized
INFO - 2020-01-28 05:06:19 --> URI Class Initialized
INFO - 2020-01-28 05:06:19 --> Router Class Initialized
INFO - 2020-01-28 05:06:19 --> Output Class Initialized
INFO - 2020-01-28 05:06:19 --> Security Class Initialized
DEBUG - 2020-01-28 05:06:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:06:19 --> Input Class Initialized
INFO - 2020-01-28 05:06:19 --> Language Class Initialized
INFO - 2020-01-28 05:06:19 --> Language Class Initialized
INFO - 2020-01-28 05:06:19 --> Config Class Initialized
INFO - 2020-01-28 05:06:19 --> Loader Class Initialized
INFO - 2020-01-28 05:06:19 --> Helper loaded: url_helper
INFO - 2020-01-28 05:06:19 --> Helper loaded: file_helper
INFO - 2020-01-28 05:06:19 --> Helper loaded: form_helper
INFO - 2020-01-28 05:06:19 --> Helper loaded: my_helper
INFO - 2020-01-28 05:06:19 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:06:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:06:19 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:06:19 --> Controller Class Initialized
ERROR - 2020-01-28 05:06:19 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:06:19 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:06:19 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:06:19 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:06:19 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:06:19 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:06:19 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:06:19 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:06:19 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:06:19 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:06:19 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
DEBUG - 2020-01-28 05:06:19 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 05:06:19 --> Final output sent to browser
DEBUG - 2020-01-28 05:06:19 --> Total execution time: 0.6042
INFO - 2020-01-28 05:06:26 --> Config Class Initialized
INFO - 2020-01-28 05:06:26 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:06:26 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:06:26 --> Utf8 Class Initialized
INFO - 2020-01-28 05:06:26 --> URI Class Initialized
INFO - 2020-01-28 05:06:26 --> Router Class Initialized
INFO - 2020-01-28 05:06:26 --> Output Class Initialized
INFO - 2020-01-28 05:06:26 --> Security Class Initialized
DEBUG - 2020-01-28 05:06:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:06:26 --> Input Class Initialized
INFO - 2020-01-28 05:06:26 --> Language Class Initialized
INFO - 2020-01-28 05:06:26 --> Language Class Initialized
INFO - 2020-01-28 05:06:26 --> Config Class Initialized
INFO - 2020-01-28 05:06:26 --> Loader Class Initialized
INFO - 2020-01-28 05:06:26 --> Helper loaded: url_helper
INFO - 2020-01-28 05:06:26 --> Helper loaded: file_helper
INFO - 2020-01-28 05:06:26 --> Helper loaded: form_helper
INFO - 2020-01-28 05:06:26 --> Helper loaded: my_helper
INFO - 2020-01-28 05:06:26 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:06:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:06:26 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:06:26 --> Controller Class Initialized
ERROR - 2020-01-28 05:06:27 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:06:27 --> Severity: Notice --> Undefined index: uts E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:06:27 --> Severity: Notice --> Undefined index: uas E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 05:06:27 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:06:27 --> Severity: Notice --> Undefined index: uts E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:06:27 --> Severity: Notice --> Undefined index: uas E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 05:06:27 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:06:27 --> Severity: Notice --> Undefined index: uts E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:06:27 --> Severity: Notice --> Undefined index: uas E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 05:06:27 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:06:27 --> Severity: Notice --> Undefined index: uts E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:06:27 --> Severity: Notice --> Undefined index: uas E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 05:06:27 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:06:27 --> Severity: Notice --> Undefined index: uts E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:06:27 --> Severity: Notice --> Undefined index: uas E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 05:06:27 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:06:27 --> Severity: Notice --> Undefined index: uts E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:06:27 --> Severity: Notice --> Undefined index: uas E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 05:06:27 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:06:27 --> Severity: Notice --> Undefined index: uts E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:06:27 --> Severity: Notice --> Undefined index: uas E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 05:06:27 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:06:27 --> Severity: Notice --> Undefined index: uts E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:06:27 --> Severity: Notice --> Undefined index: uas E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 05:06:27 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:06:27 --> Severity: Notice --> Undefined index: uts E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:06:27 --> Severity: Notice --> Undefined index: uas E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 05:06:27 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:06:27 --> Severity: Notice --> Undefined index: uts E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:06:27 --> Severity: Notice --> Undefined index: uas E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 05:06:27 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:06:27 --> Severity: Notice --> Undefined index: uts E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:06:27 --> Severity: Notice --> Undefined index: uas E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
DEBUG - 2020-01-28 05:06:27 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 05:06:27 --> Final output sent to browser
DEBUG - 2020-01-28 05:06:27 --> Total execution time: 0.9913
INFO - 2020-01-28 05:06:44 --> Config Class Initialized
INFO - 2020-01-28 05:06:44 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:06:44 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:06:44 --> Utf8 Class Initialized
INFO - 2020-01-28 05:06:44 --> URI Class Initialized
INFO - 2020-01-28 05:06:44 --> Router Class Initialized
INFO - 2020-01-28 05:06:44 --> Output Class Initialized
INFO - 2020-01-28 05:06:44 --> Security Class Initialized
DEBUG - 2020-01-28 05:06:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:06:44 --> Input Class Initialized
INFO - 2020-01-28 05:06:44 --> Language Class Initialized
INFO - 2020-01-28 05:06:44 --> Language Class Initialized
INFO - 2020-01-28 05:06:44 --> Config Class Initialized
INFO - 2020-01-28 05:06:44 --> Loader Class Initialized
INFO - 2020-01-28 05:06:44 --> Helper loaded: url_helper
INFO - 2020-01-28 05:06:44 --> Helper loaded: file_helper
INFO - 2020-01-28 05:06:44 --> Helper loaded: form_helper
INFO - 2020-01-28 05:06:44 --> Helper loaded: my_helper
INFO - 2020-01-28 05:06:44 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:06:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:06:44 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:06:44 --> Controller Class Initialized
ERROR - 2020-01-28 05:06:44 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:06:44 --> Severity: Notice --> Undefined index: uts E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:06:44 --> Severity: Notice --> Undefined index: uas E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 05:06:44 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:06:44 --> Severity: Notice --> Undefined index: uts E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:06:45 --> Severity: Notice --> Undefined index: uas E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 05:06:45 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:06:45 --> Severity: Notice --> Undefined index: uts E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:06:45 --> Severity: Notice --> Undefined index: uas E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 05:06:45 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:06:45 --> Severity: Notice --> Undefined index: uts E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:06:45 --> Severity: Notice --> Undefined index: uas E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 05:06:45 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:06:45 --> Severity: Notice --> Undefined index: uts E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:06:45 --> Severity: Notice --> Undefined index: uas E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 05:06:45 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:06:45 --> Severity: Notice --> Undefined index: uts E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:06:45 --> Severity: Notice --> Undefined index: uas E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 05:06:45 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:06:45 --> Severity: Notice --> Undefined index: uts E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:06:45 --> Severity: Notice --> Undefined index: uas E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 05:06:45 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:06:45 --> Severity: Notice --> Undefined index: uts E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:06:45 --> Severity: Notice --> Undefined index: uas E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 05:06:45 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:06:45 --> Severity: Notice --> Undefined index: uts E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:06:45 --> Severity: Notice --> Undefined index: uas E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 05:06:45 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:06:45 --> Severity: Notice --> Undefined index: uts E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:06:45 --> Severity: Notice --> Undefined index: uas E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
ERROR - 2020-01-28 05:06:45 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 151
ERROR - 2020-01-28 05:06:45 --> Severity: Notice --> Undefined index: uts E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:06:45 --> Severity: Notice --> Undefined index: uas E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 153
DEBUG - 2020-01-28 05:06:45 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 05:06:45 --> Final output sent to browser
DEBUG - 2020-01-28 05:06:45 --> Total execution time: 1.0347
INFO - 2020-01-28 05:07:13 --> Config Class Initialized
INFO - 2020-01-28 05:07:13 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:07:13 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:07:13 --> Utf8 Class Initialized
INFO - 2020-01-28 05:07:13 --> URI Class Initialized
INFO - 2020-01-28 05:07:13 --> Router Class Initialized
INFO - 2020-01-28 05:07:13 --> Output Class Initialized
INFO - 2020-01-28 05:07:13 --> Security Class Initialized
DEBUG - 2020-01-28 05:07:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:07:13 --> Input Class Initialized
INFO - 2020-01-28 05:07:13 --> Language Class Initialized
INFO - 2020-01-28 05:07:13 --> Language Class Initialized
INFO - 2020-01-28 05:07:13 --> Config Class Initialized
INFO - 2020-01-28 05:07:13 --> Loader Class Initialized
INFO - 2020-01-28 05:07:13 --> Helper loaded: url_helper
INFO - 2020-01-28 05:07:13 --> Helper loaded: file_helper
INFO - 2020-01-28 05:07:13 --> Helper loaded: form_helper
INFO - 2020-01-28 05:07:13 --> Helper loaded: my_helper
INFO - 2020-01-28 05:07:13 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:07:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:07:13 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:07:13 --> Controller Class Initialized
DEBUG - 2020-01-28 05:07:13 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 05:07:13 --> Final output sent to browser
DEBUG - 2020-01-28 05:07:13 --> Total execution time: 0.4322
INFO - 2020-01-28 05:07:31 --> Config Class Initialized
INFO - 2020-01-28 05:07:31 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:07:31 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:07:31 --> Utf8 Class Initialized
INFO - 2020-01-28 05:07:31 --> URI Class Initialized
INFO - 2020-01-28 05:07:31 --> Router Class Initialized
INFO - 2020-01-28 05:07:31 --> Output Class Initialized
INFO - 2020-01-28 05:07:31 --> Security Class Initialized
DEBUG - 2020-01-28 05:07:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:07:31 --> Input Class Initialized
INFO - 2020-01-28 05:07:31 --> Language Class Initialized
INFO - 2020-01-28 05:07:31 --> Language Class Initialized
INFO - 2020-01-28 05:07:31 --> Config Class Initialized
INFO - 2020-01-28 05:07:31 --> Loader Class Initialized
INFO - 2020-01-28 05:07:31 --> Helper loaded: url_helper
INFO - 2020-01-28 05:07:31 --> Helper loaded: file_helper
INFO - 2020-01-28 05:07:31 --> Helper loaded: form_helper
INFO - 2020-01-28 05:07:31 --> Helper loaded: my_helper
INFO - 2020-01-28 05:07:31 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:07:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:07:31 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:07:31 --> Controller Class Initialized
DEBUG - 2020-01-28 05:07:31 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 05:07:31 --> Final output sent to browser
DEBUG - 2020-01-28 05:07:31 --> Total execution time: 0.4686
INFO - 2020-01-28 05:12:15 --> Config Class Initialized
INFO - 2020-01-28 05:12:15 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:12:15 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:12:15 --> Utf8 Class Initialized
INFO - 2020-01-28 05:12:15 --> URI Class Initialized
INFO - 2020-01-28 05:12:15 --> Router Class Initialized
INFO - 2020-01-28 05:12:15 --> Output Class Initialized
INFO - 2020-01-28 05:12:15 --> Security Class Initialized
DEBUG - 2020-01-28 05:12:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:12:15 --> Input Class Initialized
INFO - 2020-01-28 05:12:15 --> Language Class Initialized
INFO - 2020-01-28 05:12:15 --> Language Class Initialized
INFO - 2020-01-28 05:12:15 --> Config Class Initialized
INFO - 2020-01-28 05:12:15 --> Loader Class Initialized
INFO - 2020-01-28 05:12:15 --> Helper loaded: url_helper
INFO - 2020-01-28 05:12:15 --> Helper loaded: file_helper
INFO - 2020-01-28 05:12:15 --> Helper loaded: form_helper
INFO - 2020-01-28 05:12:15 --> Helper loaded: my_helper
INFO - 2020-01-28 05:12:15 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:12:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:12:15 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:12:15 --> Controller Class Initialized
ERROR - 2020-01-28 05:12:15 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:12:15 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:12:15 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:12:15 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:12:15 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:12:15 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:12:15 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:12:16 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:12:16 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:12:16 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:12:16 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
DEBUG - 2020-01-28 05:12:16 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 05:12:16 --> Final output sent to browser
DEBUG - 2020-01-28 05:12:16 --> Total execution time: 0.6152
INFO - 2020-01-28 05:12:37 --> Config Class Initialized
INFO - 2020-01-28 05:12:37 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:12:37 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:12:37 --> Utf8 Class Initialized
INFO - 2020-01-28 05:12:37 --> URI Class Initialized
INFO - 2020-01-28 05:12:37 --> Router Class Initialized
INFO - 2020-01-28 05:12:37 --> Output Class Initialized
INFO - 2020-01-28 05:12:37 --> Security Class Initialized
DEBUG - 2020-01-28 05:12:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:12:37 --> Input Class Initialized
INFO - 2020-01-28 05:12:37 --> Language Class Initialized
INFO - 2020-01-28 05:12:37 --> Language Class Initialized
INFO - 2020-01-28 05:12:37 --> Config Class Initialized
INFO - 2020-01-28 05:12:37 --> Loader Class Initialized
INFO - 2020-01-28 05:12:37 --> Helper loaded: url_helper
INFO - 2020-01-28 05:12:37 --> Helper loaded: file_helper
INFO - 2020-01-28 05:12:37 --> Helper loaded: form_helper
INFO - 2020-01-28 05:12:37 --> Helper loaded: my_helper
INFO - 2020-01-28 05:12:37 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:12:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:12:37 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:12:37 --> Controller Class Initialized
ERROR - 2020-01-28 05:12:37 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:12:38 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:12:38 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:12:38 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:12:38 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:12:38 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:12:38 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:12:38 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:12:38 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:12:38 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
ERROR - 2020-01-28 05:12:38 --> Severity: Notice --> Undefined index: ke E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 152
DEBUG - 2020-01-28 05:12:38 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 05:12:38 --> Final output sent to browser
DEBUG - 2020-01-28 05:12:38 --> Total execution time: 0.6344
INFO - 2020-01-28 05:12:45 --> Config Class Initialized
INFO - 2020-01-28 05:12:45 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:12:45 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:12:45 --> Utf8 Class Initialized
INFO - 2020-01-28 05:12:46 --> URI Class Initialized
INFO - 2020-01-28 05:12:46 --> Router Class Initialized
INFO - 2020-01-28 05:12:46 --> Output Class Initialized
INFO - 2020-01-28 05:12:46 --> Security Class Initialized
DEBUG - 2020-01-28 05:12:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:12:46 --> Input Class Initialized
INFO - 2020-01-28 05:12:46 --> Language Class Initialized
INFO - 2020-01-28 05:12:46 --> Language Class Initialized
INFO - 2020-01-28 05:12:46 --> Config Class Initialized
INFO - 2020-01-28 05:12:46 --> Loader Class Initialized
INFO - 2020-01-28 05:12:46 --> Helper loaded: url_helper
INFO - 2020-01-28 05:12:46 --> Helper loaded: file_helper
INFO - 2020-01-28 05:12:46 --> Helper loaded: form_helper
INFO - 2020-01-28 05:12:46 --> Helper loaded: my_helper
INFO - 2020-01-28 05:12:46 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:12:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:12:46 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:12:46 --> Controller Class Initialized
DEBUG - 2020-01-28 05:12:46 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 05:12:46 --> Final output sent to browser
DEBUG - 2020-01-28 05:12:46 --> Total execution time: 0.4551
INFO - 2020-01-28 05:13:02 --> Config Class Initialized
INFO - 2020-01-28 05:13:02 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:13:02 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:13:02 --> Utf8 Class Initialized
INFO - 2020-01-28 05:13:02 --> URI Class Initialized
INFO - 2020-01-28 05:13:02 --> Router Class Initialized
INFO - 2020-01-28 05:13:02 --> Output Class Initialized
INFO - 2020-01-28 05:13:02 --> Security Class Initialized
DEBUG - 2020-01-28 05:13:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:13:02 --> Input Class Initialized
INFO - 2020-01-28 05:13:02 --> Language Class Initialized
INFO - 2020-01-28 05:13:02 --> Language Class Initialized
INFO - 2020-01-28 05:13:02 --> Config Class Initialized
INFO - 2020-01-28 05:13:02 --> Loader Class Initialized
INFO - 2020-01-28 05:13:02 --> Helper loaded: url_helper
INFO - 2020-01-28 05:13:02 --> Helper loaded: file_helper
INFO - 2020-01-28 05:13:02 --> Helper loaded: form_helper
INFO - 2020-01-28 05:13:02 --> Helper loaded: my_helper
INFO - 2020-01-28 05:13:02 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:13:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:13:02 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:13:02 --> Controller Class Initialized
DEBUG - 2020-01-28 05:13:02 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 05:13:02 --> Final output sent to browser
DEBUG - 2020-01-28 05:13:02 --> Total execution time: 0.4422
INFO - 2020-01-28 05:13:08 --> Config Class Initialized
INFO - 2020-01-28 05:13:08 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:13:08 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:13:08 --> Utf8 Class Initialized
INFO - 2020-01-28 05:13:08 --> URI Class Initialized
INFO - 2020-01-28 05:13:08 --> Router Class Initialized
INFO - 2020-01-28 05:13:08 --> Output Class Initialized
INFO - 2020-01-28 05:13:08 --> Security Class Initialized
DEBUG - 2020-01-28 05:13:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:13:08 --> Input Class Initialized
INFO - 2020-01-28 05:13:08 --> Language Class Initialized
INFO - 2020-01-28 05:13:08 --> Language Class Initialized
INFO - 2020-01-28 05:13:08 --> Config Class Initialized
INFO - 2020-01-28 05:13:08 --> Loader Class Initialized
INFO - 2020-01-28 05:13:08 --> Helper loaded: url_helper
INFO - 2020-01-28 05:13:08 --> Helper loaded: file_helper
INFO - 2020-01-28 05:13:08 --> Helper loaded: form_helper
INFO - 2020-01-28 05:13:08 --> Helper loaded: my_helper
INFO - 2020-01-28 05:13:08 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:13:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:13:08 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:13:08 --> Controller Class Initialized
DEBUG - 2020-01-28 05:13:08 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 05:13:08 --> Final output sent to browser
DEBUG - 2020-01-28 05:13:08 --> Total execution time: 0.4263
INFO - 2020-01-28 05:19:33 --> Config Class Initialized
INFO - 2020-01-28 05:19:33 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:19:33 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:19:33 --> Utf8 Class Initialized
INFO - 2020-01-28 05:19:33 --> URI Class Initialized
INFO - 2020-01-28 05:19:33 --> Router Class Initialized
INFO - 2020-01-28 05:19:33 --> Output Class Initialized
INFO - 2020-01-28 05:19:33 --> Security Class Initialized
DEBUG - 2020-01-28 05:19:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:19:33 --> Input Class Initialized
INFO - 2020-01-28 05:19:33 --> Language Class Initialized
INFO - 2020-01-28 05:19:33 --> Language Class Initialized
INFO - 2020-01-28 05:19:33 --> Config Class Initialized
INFO - 2020-01-28 05:19:33 --> Loader Class Initialized
INFO - 2020-01-28 05:19:33 --> Helper loaded: url_helper
INFO - 2020-01-28 05:19:33 --> Helper loaded: file_helper
INFO - 2020-01-28 05:19:33 --> Helper loaded: form_helper
INFO - 2020-01-28 05:19:33 --> Helper loaded: my_helper
INFO - 2020-01-28 05:19:33 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:19:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:19:33 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:19:33 --> Controller Class Initialized
DEBUG - 2020-01-28 05:19:33 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 05:19:33 --> Final output sent to browser
DEBUG - 2020-01-28 05:19:33 --> Total execution time: 0.4927
INFO - 2020-01-28 05:20:41 --> Config Class Initialized
INFO - 2020-01-28 05:20:41 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:20:41 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:20:41 --> Utf8 Class Initialized
INFO - 2020-01-28 05:20:41 --> URI Class Initialized
INFO - 2020-01-28 05:20:41 --> Router Class Initialized
INFO - 2020-01-28 05:20:42 --> Output Class Initialized
INFO - 2020-01-28 05:20:42 --> Security Class Initialized
DEBUG - 2020-01-28 05:20:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:20:42 --> Input Class Initialized
INFO - 2020-01-28 05:20:42 --> Language Class Initialized
INFO - 2020-01-28 05:20:42 --> Language Class Initialized
INFO - 2020-01-28 05:20:42 --> Config Class Initialized
INFO - 2020-01-28 05:20:42 --> Loader Class Initialized
INFO - 2020-01-28 05:20:42 --> Helper loaded: url_helper
INFO - 2020-01-28 05:20:42 --> Helper loaded: file_helper
INFO - 2020-01-28 05:20:42 --> Helper loaded: form_helper
INFO - 2020-01-28 05:20:42 --> Helper loaded: my_helper
INFO - 2020-01-28 05:20:42 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:20:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:20:42 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:20:42 --> Controller Class Initialized
DEBUG - 2020-01-28 05:20:42 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 05:20:42 --> Final output sent to browser
DEBUG - 2020-01-28 05:20:42 --> Total execution time: 0.4438
INFO - 2020-01-28 05:23:53 --> Config Class Initialized
INFO - 2020-01-28 05:23:54 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:23:54 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:23:54 --> Utf8 Class Initialized
INFO - 2020-01-28 05:23:54 --> URI Class Initialized
INFO - 2020-01-28 05:23:54 --> Router Class Initialized
INFO - 2020-01-28 05:23:54 --> Output Class Initialized
INFO - 2020-01-28 05:23:54 --> Security Class Initialized
DEBUG - 2020-01-28 05:23:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:23:54 --> Input Class Initialized
INFO - 2020-01-28 05:23:54 --> Language Class Initialized
INFO - 2020-01-28 05:23:54 --> Language Class Initialized
INFO - 2020-01-28 05:23:54 --> Config Class Initialized
INFO - 2020-01-28 05:23:54 --> Loader Class Initialized
INFO - 2020-01-28 05:23:54 --> Helper loaded: url_helper
INFO - 2020-01-28 05:23:54 --> Helper loaded: file_helper
INFO - 2020-01-28 05:23:54 --> Helper loaded: form_helper
INFO - 2020-01-28 05:23:54 --> Helper loaded: my_helper
INFO - 2020-01-28 05:23:54 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:23:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:23:54 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:23:54 --> Controller Class Initialized
INFO - 2020-01-28 05:23:54 --> Final output sent to browser
DEBUG - 2020-01-28 05:23:54 --> Total execution time: 0.5309
INFO - 2020-01-28 05:23:56 --> Config Class Initialized
INFO - 2020-01-28 05:23:56 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:23:56 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:23:56 --> Utf8 Class Initialized
INFO - 2020-01-28 05:23:56 --> URI Class Initialized
INFO - 2020-01-28 05:23:56 --> Router Class Initialized
INFO - 2020-01-28 05:23:56 --> Output Class Initialized
INFO - 2020-01-28 05:23:56 --> Security Class Initialized
DEBUG - 2020-01-28 05:23:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:23:56 --> Input Class Initialized
INFO - 2020-01-28 05:23:56 --> Language Class Initialized
INFO - 2020-01-28 05:23:56 --> Language Class Initialized
INFO - 2020-01-28 05:23:56 --> Config Class Initialized
INFO - 2020-01-28 05:23:56 --> Loader Class Initialized
INFO - 2020-01-28 05:23:56 --> Helper loaded: url_helper
INFO - 2020-01-28 05:23:56 --> Helper loaded: file_helper
INFO - 2020-01-28 05:23:56 --> Helper loaded: form_helper
INFO - 2020-01-28 05:23:56 --> Helper loaded: my_helper
INFO - 2020-01-28 05:23:56 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:23:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:23:56 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:23:56 --> Controller Class Initialized
INFO - 2020-01-28 05:23:56 --> Final output sent to browser
DEBUG - 2020-01-28 05:23:56 --> Total execution time: 0.4603
INFO - 2020-01-28 05:24:02 --> Config Class Initialized
INFO - 2020-01-28 05:24:02 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:24:02 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:24:02 --> Utf8 Class Initialized
INFO - 2020-01-28 05:24:02 --> URI Class Initialized
INFO - 2020-01-28 05:24:02 --> Router Class Initialized
INFO - 2020-01-28 05:24:02 --> Output Class Initialized
INFO - 2020-01-28 05:24:02 --> Security Class Initialized
DEBUG - 2020-01-28 05:24:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:24:02 --> Input Class Initialized
INFO - 2020-01-28 05:24:02 --> Language Class Initialized
INFO - 2020-01-28 05:24:02 --> Language Class Initialized
INFO - 2020-01-28 05:24:02 --> Config Class Initialized
INFO - 2020-01-28 05:24:02 --> Loader Class Initialized
INFO - 2020-01-28 05:24:02 --> Helper loaded: url_helper
INFO - 2020-01-28 05:24:02 --> Helper loaded: file_helper
INFO - 2020-01-28 05:24:02 --> Helper loaded: form_helper
INFO - 2020-01-28 05:24:02 --> Helper loaded: my_helper
INFO - 2020-01-28 05:24:03 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:24:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:24:03 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:24:03 --> Controller Class Initialized
INFO - 2020-01-28 05:24:03 --> Final output sent to browser
DEBUG - 2020-01-28 05:24:03 --> Total execution time: 0.5057
INFO - 2020-01-28 05:24:06 --> Config Class Initialized
INFO - 2020-01-28 05:24:06 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:24:06 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:24:06 --> Utf8 Class Initialized
INFO - 2020-01-28 05:24:06 --> URI Class Initialized
INFO - 2020-01-28 05:24:06 --> Router Class Initialized
INFO - 2020-01-28 05:24:06 --> Output Class Initialized
INFO - 2020-01-28 05:24:06 --> Security Class Initialized
DEBUG - 2020-01-28 05:24:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:24:06 --> Input Class Initialized
INFO - 2020-01-28 05:24:06 --> Language Class Initialized
INFO - 2020-01-28 05:24:06 --> Language Class Initialized
INFO - 2020-01-28 05:24:06 --> Config Class Initialized
INFO - 2020-01-28 05:24:06 --> Loader Class Initialized
INFO - 2020-01-28 05:24:06 --> Helper loaded: url_helper
INFO - 2020-01-28 05:24:06 --> Helper loaded: file_helper
INFO - 2020-01-28 05:24:06 --> Helper loaded: form_helper
INFO - 2020-01-28 05:24:06 --> Helper loaded: my_helper
INFO - 2020-01-28 05:24:06 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:24:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:24:06 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:24:06 --> Controller Class Initialized
DEBUG - 2020-01-28 05:24:06 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 05:24:06 --> Final output sent to browser
DEBUG - 2020-01-28 05:24:06 --> Total execution time: 0.4279
INFO - 2020-01-28 05:24:21 --> Config Class Initialized
INFO - 2020-01-28 05:24:21 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:24:21 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:24:21 --> Utf8 Class Initialized
INFO - 2020-01-28 05:24:21 --> URI Class Initialized
INFO - 2020-01-28 05:24:21 --> Router Class Initialized
INFO - 2020-01-28 05:24:21 --> Output Class Initialized
INFO - 2020-01-28 05:24:21 --> Security Class Initialized
DEBUG - 2020-01-28 05:24:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:24:21 --> Input Class Initialized
INFO - 2020-01-28 05:24:21 --> Language Class Initialized
INFO - 2020-01-28 05:24:21 --> Language Class Initialized
INFO - 2020-01-28 05:24:21 --> Config Class Initialized
INFO - 2020-01-28 05:24:21 --> Loader Class Initialized
INFO - 2020-01-28 05:24:21 --> Helper loaded: url_helper
INFO - 2020-01-28 05:24:21 --> Helper loaded: file_helper
INFO - 2020-01-28 05:24:21 --> Helper loaded: form_helper
INFO - 2020-01-28 05:24:21 --> Helper loaded: my_helper
INFO - 2020-01-28 05:24:21 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:24:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:24:21 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:24:21 --> Controller Class Initialized
INFO - 2020-01-28 05:24:21 --> Final output sent to browser
DEBUG - 2020-01-28 05:24:21 --> Total execution time: 0.4961
INFO - 2020-01-28 05:24:22 --> Config Class Initialized
INFO - 2020-01-28 05:24:22 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:24:22 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:24:22 --> Utf8 Class Initialized
INFO - 2020-01-28 05:24:22 --> URI Class Initialized
INFO - 2020-01-28 05:24:22 --> Router Class Initialized
INFO - 2020-01-28 05:24:22 --> Output Class Initialized
INFO - 2020-01-28 05:24:22 --> Security Class Initialized
DEBUG - 2020-01-28 05:24:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:24:22 --> Input Class Initialized
INFO - 2020-01-28 05:24:22 --> Language Class Initialized
INFO - 2020-01-28 05:24:22 --> Language Class Initialized
INFO - 2020-01-28 05:24:22 --> Config Class Initialized
INFO - 2020-01-28 05:24:22 --> Loader Class Initialized
INFO - 2020-01-28 05:24:22 --> Helper loaded: url_helper
INFO - 2020-01-28 05:24:22 --> Helper loaded: file_helper
INFO - 2020-01-28 05:24:23 --> Helper loaded: form_helper
INFO - 2020-01-28 05:24:23 --> Helper loaded: my_helper
INFO - 2020-01-28 05:24:23 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:24:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:24:23 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:24:23 --> Controller Class Initialized
INFO - 2020-01-28 05:24:23 --> Final output sent to browser
DEBUG - 2020-01-28 05:24:23 --> Total execution time: 0.3999
INFO - 2020-01-28 05:24:28 --> Config Class Initialized
INFO - 2020-01-28 05:24:28 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:24:28 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:24:28 --> Utf8 Class Initialized
INFO - 2020-01-28 05:24:28 --> URI Class Initialized
INFO - 2020-01-28 05:24:28 --> Router Class Initialized
INFO - 2020-01-28 05:24:28 --> Output Class Initialized
INFO - 2020-01-28 05:24:28 --> Security Class Initialized
DEBUG - 2020-01-28 05:24:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:24:28 --> Input Class Initialized
INFO - 2020-01-28 05:24:28 --> Language Class Initialized
INFO - 2020-01-28 05:24:28 --> Language Class Initialized
INFO - 2020-01-28 05:24:28 --> Config Class Initialized
INFO - 2020-01-28 05:24:28 --> Loader Class Initialized
INFO - 2020-01-28 05:24:28 --> Helper loaded: url_helper
INFO - 2020-01-28 05:24:28 --> Helper loaded: file_helper
INFO - 2020-01-28 05:24:28 --> Helper loaded: form_helper
INFO - 2020-01-28 05:24:28 --> Helper loaded: my_helper
INFO - 2020-01-28 05:24:28 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:24:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:24:28 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:24:28 --> Controller Class Initialized
INFO - 2020-01-28 05:24:28 --> Final output sent to browser
DEBUG - 2020-01-28 05:24:28 --> Total execution time: 0.5465
INFO - 2020-01-28 05:24:30 --> Config Class Initialized
INFO - 2020-01-28 05:24:30 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:24:30 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:24:30 --> Utf8 Class Initialized
INFO - 2020-01-28 05:24:30 --> URI Class Initialized
INFO - 2020-01-28 05:24:30 --> Router Class Initialized
INFO - 2020-01-28 05:24:30 --> Output Class Initialized
INFO - 2020-01-28 05:24:30 --> Security Class Initialized
DEBUG - 2020-01-28 05:24:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:24:30 --> Input Class Initialized
INFO - 2020-01-28 05:24:30 --> Language Class Initialized
INFO - 2020-01-28 05:24:30 --> Language Class Initialized
INFO - 2020-01-28 05:24:30 --> Config Class Initialized
INFO - 2020-01-28 05:24:30 --> Loader Class Initialized
INFO - 2020-01-28 05:24:30 --> Helper loaded: url_helper
INFO - 2020-01-28 05:24:30 --> Helper loaded: file_helper
INFO - 2020-01-28 05:24:30 --> Helper loaded: form_helper
INFO - 2020-01-28 05:24:30 --> Helper loaded: my_helper
INFO - 2020-01-28 05:24:30 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:24:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:24:30 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:24:30 --> Controller Class Initialized
DEBUG - 2020-01-28 05:24:30 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 05:24:30 --> Final output sent to browser
DEBUG - 2020-01-28 05:24:30 --> Total execution time: 0.4456
INFO - 2020-01-28 05:24:46 --> Config Class Initialized
INFO - 2020-01-28 05:24:46 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:24:46 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:24:46 --> Utf8 Class Initialized
INFO - 2020-01-28 05:24:46 --> URI Class Initialized
INFO - 2020-01-28 05:24:46 --> Router Class Initialized
INFO - 2020-01-28 05:24:47 --> Output Class Initialized
INFO - 2020-01-28 05:24:47 --> Security Class Initialized
DEBUG - 2020-01-28 05:24:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:24:47 --> Input Class Initialized
INFO - 2020-01-28 05:24:47 --> Language Class Initialized
INFO - 2020-01-28 05:24:47 --> Language Class Initialized
INFO - 2020-01-28 05:24:47 --> Config Class Initialized
INFO - 2020-01-28 05:24:47 --> Loader Class Initialized
INFO - 2020-01-28 05:24:47 --> Helper loaded: url_helper
INFO - 2020-01-28 05:24:47 --> Helper loaded: file_helper
INFO - 2020-01-28 05:24:47 --> Helper loaded: form_helper
INFO - 2020-01-28 05:24:47 --> Helper loaded: my_helper
INFO - 2020-01-28 05:24:47 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:24:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:24:47 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:24:47 --> Controller Class Initialized
INFO - 2020-01-28 05:24:47 --> Final output sent to browser
DEBUG - 2020-01-28 05:24:47 --> Total execution time: 0.4150
INFO - 2020-01-28 05:24:52 --> Config Class Initialized
INFO - 2020-01-28 05:24:52 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:24:52 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:24:52 --> Utf8 Class Initialized
INFO - 2020-01-28 05:24:52 --> URI Class Initialized
INFO - 2020-01-28 05:24:52 --> Router Class Initialized
INFO - 2020-01-28 05:24:52 --> Output Class Initialized
INFO - 2020-01-28 05:24:52 --> Security Class Initialized
DEBUG - 2020-01-28 05:24:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:24:52 --> Input Class Initialized
INFO - 2020-01-28 05:24:52 --> Language Class Initialized
INFO - 2020-01-28 05:24:52 --> Language Class Initialized
INFO - 2020-01-28 05:24:52 --> Config Class Initialized
INFO - 2020-01-28 05:24:52 --> Loader Class Initialized
INFO - 2020-01-28 05:24:52 --> Helper loaded: url_helper
INFO - 2020-01-28 05:24:52 --> Helper loaded: file_helper
INFO - 2020-01-28 05:24:52 --> Helper loaded: form_helper
INFO - 2020-01-28 05:24:52 --> Helper loaded: my_helper
INFO - 2020-01-28 05:24:52 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:24:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:24:52 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:24:52 --> Controller Class Initialized
INFO - 2020-01-28 05:24:52 --> Final output sent to browser
DEBUG - 2020-01-28 05:24:52 --> Total execution time: 0.4808
INFO - 2020-01-28 05:24:53 --> Config Class Initialized
INFO - 2020-01-28 05:24:53 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:24:53 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:24:53 --> Utf8 Class Initialized
INFO - 2020-01-28 05:24:53 --> URI Class Initialized
INFO - 2020-01-28 05:24:53 --> Router Class Initialized
INFO - 2020-01-28 05:24:53 --> Output Class Initialized
INFO - 2020-01-28 05:24:53 --> Security Class Initialized
DEBUG - 2020-01-28 05:24:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:24:53 --> Input Class Initialized
INFO - 2020-01-28 05:24:53 --> Language Class Initialized
INFO - 2020-01-28 05:24:53 --> Language Class Initialized
INFO - 2020-01-28 05:24:53 --> Config Class Initialized
INFO - 2020-01-28 05:24:53 --> Loader Class Initialized
INFO - 2020-01-28 05:24:53 --> Helper loaded: url_helper
INFO - 2020-01-28 05:24:53 --> Helper loaded: file_helper
INFO - 2020-01-28 05:24:53 --> Helper loaded: form_helper
INFO - 2020-01-28 05:24:53 --> Helper loaded: my_helper
INFO - 2020-01-28 05:24:53 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:24:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:24:53 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:24:53 --> Controller Class Initialized
INFO - 2020-01-28 05:24:53 --> Final output sent to browser
DEBUG - 2020-01-28 05:24:53 --> Total execution time: 0.4148
INFO - 2020-01-28 05:24:57 --> Config Class Initialized
INFO - 2020-01-28 05:24:57 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:24:57 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:24:57 --> Utf8 Class Initialized
INFO - 2020-01-28 05:24:57 --> URI Class Initialized
INFO - 2020-01-28 05:24:57 --> Router Class Initialized
INFO - 2020-01-28 05:24:57 --> Output Class Initialized
INFO - 2020-01-28 05:24:57 --> Security Class Initialized
DEBUG - 2020-01-28 05:24:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:24:57 --> Input Class Initialized
INFO - 2020-01-28 05:24:57 --> Language Class Initialized
INFO - 2020-01-28 05:24:57 --> Language Class Initialized
INFO - 2020-01-28 05:24:57 --> Config Class Initialized
INFO - 2020-01-28 05:24:57 --> Loader Class Initialized
INFO - 2020-01-28 05:24:57 --> Helper loaded: url_helper
INFO - 2020-01-28 05:24:57 --> Helper loaded: file_helper
INFO - 2020-01-28 05:24:57 --> Helper loaded: form_helper
INFO - 2020-01-28 05:24:57 --> Helper loaded: my_helper
INFO - 2020-01-28 05:24:57 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:24:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:24:58 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:24:58 --> Controller Class Initialized
INFO - 2020-01-28 05:24:58 --> Final output sent to browser
DEBUG - 2020-01-28 05:24:58 --> Total execution time: 0.4754
INFO - 2020-01-28 05:24:59 --> Config Class Initialized
INFO - 2020-01-28 05:24:59 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:24:59 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:24:59 --> Utf8 Class Initialized
INFO - 2020-01-28 05:24:59 --> URI Class Initialized
INFO - 2020-01-28 05:24:59 --> Router Class Initialized
INFO - 2020-01-28 05:24:59 --> Output Class Initialized
INFO - 2020-01-28 05:25:00 --> Security Class Initialized
DEBUG - 2020-01-28 05:25:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:25:00 --> Input Class Initialized
INFO - 2020-01-28 05:25:00 --> Language Class Initialized
INFO - 2020-01-28 05:25:00 --> Language Class Initialized
INFO - 2020-01-28 05:25:00 --> Config Class Initialized
INFO - 2020-01-28 05:25:00 --> Loader Class Initialized
INFO - 2020-01-28 05:25:00 --> Helper loaded: url_helper
INFO - 2020-01-28 05:25:00 --> Helper loaded: file_helper
INFO - 2020-01-28 05:25:00 --> Helper loaded: form_helper
INFO - 2020-01-28 05:25:00 --> Helper loaded: my_helper
INFO - 2020-01-28 05:25:00 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:25:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:25:00 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:25:00 --> Controller Class Initialized
DEBUG - 2020-01-28 05:25:00 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 05:25:00 --> Final output sent to browser
DEBUG - 2020-01-28 05:25:00 --> Total execution time: 0.4767
INFO - 2020-01-28 05:50:32 --> Config Class Initialized
INFO - 2020-01-28 05:50:32 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:50:32 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:50:32 --> Utf8 Class Initialized
INFO - 2020-01-28 05:50:32 --> URI Class Initialized
INFO - 2020-01-28 05:50:32 --> Router Class Initialized
INFO - 2020-01-28 05:50:32 --> Output Class Initialized
INFO - 2020-01-28 05:50:32 --> Security Class Initialized
DEBUG - 2020-01-28 05:50:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:50:32 --> Input Class Initialized
INFO - 2020-01-28 05:50:32 --> Language Class Initialized
INFO - 2020-01-28 05:50:32 --> Language Class Initialized
INFO - 2020-01-28 05:50:32 --> Config Class Initialized
INFO - 2020-01-28 05:50:32 --> Loader Class Initialized
INFO - 2020-01-28 05:50:32 --> Helper loaded: url_helper
INFO - 2020-01-28 05:50:32 --> Helper loaded: file_helper
INFO - 2020-01-28 05:50:32 --> Helper loaded: form_helper
INFO - 2020-01-28 05:50:32 --> Helper loaded: my_helper
INFO - 2020-01-28 05:50:32 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:50:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:50:32 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:50:32 --> Controller Class Initialized
INFO - 2020-01-28 05:50:32 --> Final output sent to browser
DEBUG - 2020-01-28 05:50:32 --> Total execution time: 0.6214
INFO - 2020-01-28 05:52:52 --> Config Class Initialized
INFO - 2020-01-28 05:52:52 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:52:52 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:52:52 --> Utf8 Class Initialized
INFO - 2020-01-28 05:52:52 --> URI Class Initialized
INFO - 2020-01-28 05:52:52 --> Router Class Initialized
INFO - 2020-01-28 05:52:52 --> Output Class Initialized
INFO - 2020-01-28 05:52:52 --> Security Class Initialized
DEBUG - 2020-01-28 05:52:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:52:52 --> Input Class Initialized
INFO - 2020-01-28 05:52:52 --> Language Class Initialized
INFO - 2020-01-28 05:52:52 --> Language Class Initialized
INFO - 2020-01-28 05:52:52 --> Config Class Initialized
INFO - 2020-01-28 05:52:52 --> Loader Class Initialized
INFO - 2020-01-28 05:52:52 --> Helper loaded: url_helper
INFO - 2020-01-28 05:52:52 --> Helper loaded: file_helper
INFO - 2020-01-28 05:52:52 --> Helper loaded: form_helper
INFO - 2020-01-28 05:52:52 --> Helper loaded: my_helper
INFO - 2020-01-28 05:52:52 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:52:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:52:52 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:52:52 --> Controller Class Initialized
DEBUG - 2020-01-28 05:52:52 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/view_mapel/views/v_view_mapel.php
DEBUG - 2020-01-28 05:52:52 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 05:52:52 --> Final output sent to browser
DEBUG - 2020-01-28 05:52:52 --> Total execution time: 0.4129
INFO - 2020-01-28 05:55:02 --> Config Class Initialized
INFO - 2020-01-28 05:55:02 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:55:02 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:55:02 --> Utf8 Class Initialized
INFO - 2020-01-28 05:55:02 --> URI Class Initialized
INFO - 2020-01-28 05:55:02 --> Router Class Initialized
INFO - 2020-01-28 05:55:02 --> Output Class Initialized
INFO - 2020-01-28 05:55:02 --> Security Class Initialized
DEBUG - 2020-01-28 05:55:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:55:02 --> Input Class Initialized
INFO - 2020-01-28 05:55:02 --> Language Class Initialized
INFO - 2020-01-28 05:55:02 --> Language Class Initialized
INFO - 2020-01-28 05:55:02 --> Config Class Initialized
INFO - 2020-01-28 05:55:02 --> Loader Class Initialized
INFO - 2020-01-28 05:55:02 --> Helper loaded: url_helper
INFO - 2020-01-28 05:55:02 --> Helper loaded: file_helper
INFO - 2020-01-28 05:55:02 --> Helper loaded: form_helper
INFO - 2020-01-28 05:55:02 --> Helper loaded: my_helper
INFO - 2020-01-28 05:55:02 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:55:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:55:02 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:55:02 --> Controller Class Initialized
DEBUG - 2020-01-28 05:55:02 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/list.php
DEBUG - 2020-01-28 05:55:02 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 05:55:02 --> Final output sent to browser
DEBUG - 2020-01-28 05:55:02 --> Total execution time: 0.4352
INFO - 2020-01-28 05:55:03 --> Config Class Initialized
INFO - 2020-01-28 05:55:03 --> Hooks Class Initialized
DEBUG - 2020-01-28 05:55:03 --> UTF-8 Support Enabled
INFO - 2020-01-28 05:55:03 --> Utf8 Class Initialized
INFO - 2020-01-28 05:55:03 --> URI Class Initialized
INFO - 2020-01-28 05:55:03 --> Router Class Initialized
INFO - 2020-01-28 05:55:03 --> Output Class Initialized
INFO - 2020-01-28 05:55:03 --> Security Class Initialized
DEBUG - 2020-01-28 05:55:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 05:55:03 --> Input Class Initialized
INFO - 2020-01-28 05:55:03 --> Language Class Initialized
INFO - 2020-01-28 05:55:03 --> Language Class Initialized
INFO - 2020-01-28 05:55:03 --> Config Class Initialized
INFO - 2020-01-28 05:55:03 --> Loader Class Initialized
INFO - 2020-01-28 05:55:03 --> Helper loaded: url_helper
INFO - 2020-01-28 05:55:03 --> Helper loaded: file_helper
INFO - 2020-01-28 05:55:03 --> Helper loaded: form_helper
INFO - 2020-01-28 05:55:03 --> Helper loaded: my_helper
INFO - 2020-01-28 05:55:03 --> Database Driver Class Initialized
DEBUG - 2020-01-28 05:55:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 05:55:03 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 05:55:03 --> Controller Class Initialized
INFO - 2020-01-28 06:27:41 --> Config Class Initialized
INFO - 2020-01-28 06:27:41 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:27:41 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:27:41 --> Utf8 Class Initialized
INFO - 2020-01-28 06:27:41 --> URI Class Initialized
INFO - 2020-01-28 06:27:41 --> Router Class Initialized
INFO - 2020-01-28 06:27:41 --> Output Class Initialized
INFO - 2020-01-28 06:27:41 --> Security Class Initialized
DEBUG - 2020-01-28 06:27:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:27:41 --> Input Class Initialized
INFO - 2020-01-28 06:27:41 --> Language Class Initialized
INFO - 2020-01-28 06:27:41 --> Language Class Initialized
INFO - 2020-01-28 06:27:41 --> Config Class Initialized
INFO - 2020-01-28 06:27:41 --> Loader Class Initialized
INFO - 2020-01-28 06:27:41 --> Helper loaded: url_helper
INFO - 2020-01-28 06:27:41 --> Helper loaded: file_helper
INFO - 2020-01-28 06:27:41 --> Helper loaded: form_helper
INFO - 2020-01-28 06:27:41 --> Helper loaded: my_helper
INFO - 2020-01-28 06:27:41 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:27:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:27:41 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:27:41 --> Controller Class Initialized
DEBUG - 2020-01-28 06:27:41 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/riwayat_mengajar/views/list.php
DEBUG - 2020-01-28 06:27:41 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:27:41 --> Final output sent to browser
DEBUG - 2020-01-28 06:27:41 --> Total execution time: 0.4591
INFO - 2020-01-28 06:27:44 --> Config Class Initialized
INFO - 2020-01-28 06:27:44 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:27:44 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:27:44 --> Utf8 Class Initialized
INFO - 2020-01-28 06:27:44 --> URI Class Initialized
INFO - 2020-01-28 06:27:44 --> Router Class Initialized
INFO - 2020-01-28 06:27:44 --> Output Class Initialized
INFO - 2020-01-28 06:27:44 --> Security Class Initialized
DEBUG - 2020-01-28 06:27:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:27:44 --> Input Class Initialized
INFO - 2020-01-28 06:27:44 --> Language Class Initialized
INFO - 2020-01-28 06:27:44 --> Language Class Initialized
INFO - 2020-01-28 06:27:44 --> Config Class Initialized
INFO - 2020-01-28 06:27:44 --> Loader Class Initialized
INFO - 2020-01-28 06:27:44 --> Helper loaded: url_helper
INFO - 2020-01-28 06:27:44 --> Helper loaded: file_helper
INFO - 2020-01-28 06:27:44 --> Helper loaded: form_helper
INFO - 2020-01-28 06:27:44 --> Helper loaded: my_helper
INFO - 2020-01-28 06:27:44 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:27:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:27:44 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:27:44 --> Controller Class Initialized
DEBUG - 2020-01-28 06:27:44 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/riwayat_mengajar/views/list.php
DEBUG - 2020-01-28 06:27:44 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:27:44 --> Final output sent to browser
DEBUG - 2020-01-28 06:27:44 --> Total execution time: 0.4503
INFO - 2020-01-28 06:27:46 --> Config Class Initialized
INFO - 2020-01-28 06:27:46 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:27:46 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:27:46 --> Utf8 Class Initialized
INFO - 2020-01-28 06:27:46 --> URI Class Initialized
INFO - 2020-01-28 06:27:46 --> Router Class Initialized
INFO - 2020-01-28 06:27:46 --> Output Class Initialized
INFO - 2020-01-28 06:27:46 --> Security Class Initialized
DEBUG - 2020-01-28 06:27:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:27:46 --> Input Class Initialized
INFO - 2020-01-28 06:27:46 --> Language Class Initialized
INFO - 2020-01-28 06:27:46 --> Language Class Initialized
INFO - 2020-01-28 06:27:46 --> Config Class Initialized
INFO - 2020-01-28 06:27:46 --> Loader Class Initialized
INFO - 2020-01-28 06:27:46 --> Helper loaded: url_helper
INFO - 2020-01-28 06:27:46 --> Helper loaded: file_helper
INFO - 2020-01-28 06:27:46 --> Helper loaded: form_helper
INFO - 2020-01-28 06:27:46 --> Helper loaded: my_helper
INFO - 2020-01-28 06:27:46 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:27:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:27:46 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:27:46 --> Controller Class Initialized
DEBUG - 2020-01-28 06:27:47 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/list.php
DEBUG - 2020-01-28 06:27:47 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:27:47 --> Final output sent to browser
DEBUG - 2020-01-28 06:27:47 --> Total execution time: 0.5608
INFO - 2020-01-28 06:27:47 --> Config Class Initialized
INFO - 2020-01-28 06:27:47 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:27:47 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:27:47 --> Utf8 Class Initialized
INFO - 2020-01-28 06:27:47 --> URI Class Initialized
INFO - 2020-01-28 06:27:47 --> Router Class Initialized
INFO - 2020-01-28 06:27:47 --> Output Class Initialized
INFO - 2020-01-28 06:27:47 --> Security Class Initialized
DEBUG - 2020-01-28 06:27:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:27:47 --> Input Class Initialized
INFO - 2020-01-28 06:27:47 --> Language Class Initialized
INFO - 2020-01-28 06:27:47 --> Language Class Initialized
INFO - 2020-01-28 06:27:47 --> Config Class Initialized
INFO - 2020-01-28 06:27:47 --> Loader Class Initialized
INFO - 2020-01-28 06:27:47 --> Helper loaded: url_helper
INFO - 2020-01-28 06:27:47 --> Helper loaded: file_helper
INFO - 2020-01-28 06:27:47 --> Helper loaded: form_helper
INFO - 2020-01-28 06:27:47 --> Helper loaded: my_helper
INFO - 2020-01-28 06:27:47 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:27:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:27:47 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:27:47 --> Controller Class Initialized
INFO - 2020-01-28 06:27:49 --> Config Class Initialized
INFO - 2020-01-28 06:27:49 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:27:49 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:27:49 --> Utf8 Class Initialized
INFO - 2020-01-28 06:27:49 --> URI Class Initialized
INFO - 2020-01-28 06:27:49 --> Router Class Initialized
INFO - 2020-01-28 06:27:49 --> Output Class Initialized
INFO - 2020-01-28 06:27:49 --> Security Class Initialized
DEBUG - 2020-01-28 06:27:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:27:49 --> Input Class Initialized
INFO - 2020-01-28 06:27:49 --> Language Class Initialized
INFO - 2020-01-28 06:27:49 --> Language Class Initialized
INFO - 2020-01-28 06:27:49 --> Config Class Initialized
INFO - 2020-01-28 06:27:49 --> Loader Class Initialized
INFO - 2020-01-28 06:27:49 --> Helper loaded: url_helper
INFO - 2020-01-28 06:27:49 --> Helper loaded: file_helper
INFO - 2020-01-28 06:27:49 --> Helper loaded: form_helper
INFO - 2020-01-28 06:27:49 --> Helper loaded: my_helper
INFO - 2020-01-28 06:27:49 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:27:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:27:49 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:27:49 --> Controller Class Initialized
DEBUG - 2020-01-28 06:27:49 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_sikap_sp/views/list.php
DEBUG - 2020-01-28 06:27:49 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:27:49 --> Final output sent to browser
DEBUG - 2020-01-28 06:27:49 --> Total execution time: 0.4718
INFO - 2020-01-28 06:27:52 --> Config Class Initialized
INFO - 2020-01-28 06:27:52 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:27:52 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:27:52 --> Utf8 Class Initialized
INFO - 2020-01-28 06:27:52 --> URI Class Initialized
INFO - 2020-01-28 06:27:52 --> Router Class Initialized
INFO - 2020-01-28 06:27:52 --> Output Class Initialized
INFO - 2020-01-28 06:27:52 --> Security Class Initialized
DEBUG - 2020-01-28 06:27:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:27:52 --> Input Class Initialized
INFO - 2020-01-28 06:27:52 --> Language Class Initialized
INFO - 2020-01-28 06:27:52 --> Language Class Initialized
INFO - 2020-01-28 06:27:52 --> Config Class Initialized
INFO - 2020-01-28 06:27:52 --> Loader Class Initialized
INFO - 2020-01-28 06:27:52 --> Helper loaded: url_helper
INFO - 2020-01-28 06:27:52 --> Helper loaded: file_helper
INFO - 2020-01-28 06:27:52 --> Helper loaded: form_helper
INFO - 2020-01-28 06:27:52 --> Helper loaded: my_helper
INFO - 2020-01-28 06:27:52 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:27:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:27:52 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:27:52 --> Controller Class Initialized
DEBUG - 2020-01-28 06:27:52 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/view_mapel/views/v_view_mapel.php
DEBUG - 2020-01-28 06:27:52 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:27:52 --> Final output sent to browser
DEBUG - 2020-01-28 06:27:52 --> Total execution time: 0.4348
INFO - 2020-01-28 06:27:57 --> Config Class Initialized
INFO - 2020-01-28 06:27:57 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:27:57 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:27:57 --> Utf8 Class Initialized
INFO - 2020-01-28 06:27:57 --> URI Class Initialized
INFO - 2020-01-28 06:27:57 --> Router Class Initialized
INFO - 2020-01-28 06:27:57 --> Output Class Initialized
INFO - 2020-01-28 06:27:57 --> Security Class Initialized
DEBUG - 2020-01-28 06:27:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:27:57 --> Input Class Initialized
INFO - 2020-01-28 06:27:57 --> Language Class Initialized
INFO - 2020-01-28 06:27:57 --> Language Class Initialized
INFO - 2020-01-28 06:27:57 --> Config Class Initialized
INFO - 2020-01-28 06:27:57 --> Loader Class Initialized
INFO - 2020-01-28 06:27:57 --> Helper loaded: url_helper
INFO - 2020-01-28 06:27:57 --> Helper loaded: file_helper
INFO - 2020-01-28 06:27:57 --> Helper loaded: form_helper
INFO - 2020-01-28 06:27:57 --> Helper loaded: my_helper
INFO - 2020-01-28 06:27:57 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:27:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:27:57 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:27:57 --> Controller Class Initialized
DEBUG - 2020-01-28 06:27:57 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/list.php
DEBUG - 2020-01-28 06:27:57 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:27:57 --> Final output sent to browser
DEBUG - 2020-01-28 06:27:57 --> Total execution time: 0.4228
INFO - 2020-01-28 06:27:57 --> Config Class Initialized
INFO - 2020-01-28 06:27:57 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:27:57 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:27:57 --> Utf8 Class Initialized
INFO - 2020-01-28 06:27:57 --> URI Class Initialized
INFO - 2020-01-28 06:27:57 --> Router Class Initialized
INFO - 2020-01-28 06:27:57 --> Output Class Initialized
INFO - 2020-01-28 06:27:57 --> Security Class Initialized
DEBUG - 2020-01-28 06:27:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:27:57 --> Input Class Initialized
INFO - 2020-01-28 06:27:57 --> Language Class Initialized
INFO - 2020-01-28 06:27:57 --> Language Class Initialized
INFO - 2020-01-28 06:27:57 --> Config Class Initialized
INFO - 2020-01-28 06:27:58 --> Loader Class Initialized
INFO - 2020-01-28 06:27:58 --> Helper loaded: url_helper
INFO - 2020-01-28 06:27:58 --> Helper loaded: file_helper
INFO - 2020-01-28 06:27:58 --> Helper loaded: form_helper
INFO - 2020-01-28 06:27:58 --> Helper loaded: my_helper
INFO - 2020-01-28 06:27:58 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:27:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:27:58 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:27:58 --> Controller Class Initialized
INFO - 2020-01-28 06:28:07 --> Config Class Initialized
INFO - 2020-01-28 06:28:07 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:28:07 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:28:07 --> Utf8 Class Initialized
INFO - 2020-01-28 06:28:07 --> URI Class Initialized
INFO - 2020-01-28 06:28:07 --> Router Class Initialized
INFO - 2020-01-28 06:28:07 --> Output Class Initialized
INFO - 2020-01-28 06:28:07 --> Security Class Initialized
DEBUG - 2020-01-28 06:28:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:28:07 --> Input Class Initialized
INFO - 2020-01-28 06:28:07 --> Language Class Initialized
INFO - 2020-01-28 06:28:07 --> Language Class Initialized
INFO - 2020-01-28 06:28:07 --> Config Class Initialized
INFO - 2020-01-28 06:28:07 --> Loader Class Initialized
INFO - 2020-01-28 06:28:07 --> Helper loaded: url_helper
INFO - 2020-01-28 06:28:07 --> Helper loaded: file_helper
INFO - 2020-01-28 06:28:07 --> Helper loaded: form_helper
INFO - 2020-01-28 06:28:07 --> Helper loaded: my_helper
INFO - 2020-01-28 06:28:07 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:28:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:28:07 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:28:07 --> Controller Class Initialized
DEBUG - 2020-01-28 06:28:07 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 06:28:07 --> Final output sent to browser
DEBUG - 2020-01-28 06:28:07 --> Total execution time: 0.4870
INFO - 2020-01-28 06:30:45 --> Config Class Initialized
INFO - 2020-01-28 06:30:45 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:30:45 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:30:45 --> Utf8 Class Initialized
INFO - 2020-01-28 06:30:45 --> URI Class Initialized
INFO - 2020-01-28 06:30:45 --> Router Class Initialized
INFO - 2020-01-28 06:30:45 --> Output Class Initialized
INFO - 2020-01-28 06:30:45 --> Security Class Initialized
DEBUG - 2020-01-28 06:30:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:30:45 --> Input Class Initialized
INFO - 2020-01-28 06:30:45 --> Language Class Initialized
INFO - 2020-01-28 06:30:45 --> Language Class Initialized
INFO - 2020-01-28 06:30:45 --> Config Class Initialized
INFO - 2020-01-28 06:30:45 --> Loader Class Initialized
INFO - 2020-01-28 06:30:45 --> Helper loaded: url_helper
INFO - 2020-01-28 06:30:45 --> Helper loaded: file_helper
INFO - 2020-01-28 06:30:45 --> Helper loaded: form_helper
INFO - 2020-01-28 06:30:45 --> Helper loaded: my_helper
INFO - 2020-01-28 06:30:45 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:30:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:30:45 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:30:45 --> Controller Class Initialized
DEBUG - 2020-01-28 06:30:45 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/list.php
DEBUG - 2020-01-28 06:30:45 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:30:45 --> Final output sent to browser
DEBUG - 2020-01-28 06:30:45 --> Total execution time: 0.4960
INFO - 2020-01-28 06:30:45 --> Config Class Initialized
INFO - 2020-01-28 06:30:45 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:30:45 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:30:45 --> Utf8 Class Initialized
INFO - 2020-01-28 06:30:45 --> URI Class Initialized
INFO - 2020-01-28 06:30:45 --> Router Class Initialized
INFO - 2020-01-28 06:30:46 --> Output Class Initialized
INFO - 2020-01-28 06:30:46 --> Security Class Initialized
DEBUG - 2020-01-28 06:30:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:30:46 --> Input Class Initialized
INFO - 2020-01-28 06:30:46 --> Language Class Initialized
INFO - 2020-01-28 06:30:46 --> Language Class Initialized
INFO - 2020-01-28 06:30:46 --> Config Class Initialized
INFO - 2020-01-28 06:30:46 --> Loader Class Initialized
INFO - 2020-01-28 06:30:46 --> Helper loaded: url_helper
INFO - 2020-01-28 06:30:46 --> Helper loaded: file_helper
INFO - 2020-01-28 06:30:46 --> Helper loaded: form_helper
INFO - 2020-01-28 06:30:46 --> Helper loaded: my_helper
INFO - 2020-01-28 06:30:46 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:30:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:30:46 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:30:46 --> Controller Class Initialized
INFO - 2020-01-28 06:30:47 --> Config Class Initialized
INFO - 2020-01-28 06:30:47 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:30:47 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:30:47 --> Utf8 Class Initialized
INFO - 2020-01-28 06:30:47 --> URI Class Initialized
INFO - 2020-01-28 06:30:47 --> Router Class Initialized
INFO - 2020-01-28 06:30:47 --> Output Class Initialized
INFO - 2020-01-28 06:30:47 --> Security Class Initialized
DEBUG - 2020-01-28 06:30:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:30:47 --> Input Class Initialized
INFO - 2020-01-28 06:30:47 --> Language Class Initialized
INFO - 2020-01-28 06:30:47 --> Language Class Initialized
INFO - 2020-01-28 06:30:47 --> Config Class Initialized
INFO - 2020-01-28 06:30:47 --> Loader Class Initialized
INFO - 2020-01-28 06:30:47 --> Helper loaded: url_helper
INFO - 2020-01-28 06:30:47 --> Helper loaded: file_helper
INFO - 2020-01-28 06:30:47 --> Helper loaded: form_helper
INFO - 2020-01-28 06:30:47 --> Helper loaded: my_helper
INFO - 2020-01-28 06:30:47 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:30:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:30:47 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:30:47 --> Controller Class Initialized
INFO - 2020-01-28 06:31:19 --> Config Class Initialized
INFO - 2020-01-28 06:31:19 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:31:19 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:31:19 --> Utf8 Class Initialized
INFO - 2020-01-28 06:31:19 --> URI Class Initialized
INFO - 2020-01-28 06:31:19 --> Router Class Initialized
INFO - 2020-01-28 06:31:19 --> Output Class Initialized
INFO - 2020-01-28 06:31:19 --> Security Class Initialized
DEBUG - 2020-01-28 06:31:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:31:19 --> Input Class Initialized
INFO - 2020-01-28 06:31:19 --> Language Class Initialized
INFO - 2020-01-28 06:31:19 --> Language Class Initialized
INFO - 2020-01-28 06:31:19 --> Config Class Initialized
INFO - 2020-01-28 06:31:19 --> Loader Class Initialized
INFO - 2020-01-28 06:31:19 --> Helper loaded: url_helper
INFO - 2020-01-28 06:31:19 --> Helper loaded: file_helper
INFO - 2020-01-28 06:31:19 --> Helper loaded: form_helper
INFO - 2020-01-28 06:31:19 --> Helper loaded: my_helper
INFO - 2020-01-28 06:31:19 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:31:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:31:19 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:31:19 --> Controller Class Initialized
DEBUG - 2020-01-28 06:31:19 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/view_mapel/views/v_view_mapel.php
DEBUG - 2020-01-28 06:31:19 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:31:19 --> Final output sent to browser
DEBUG - 2020-01-28 06:31:19 --> Total execution time: 0.4757
INFO - 2020-01-28 06:31:21 --> Config Class Initialized
INFO - 2020-01-28 06:31:21 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:31:21 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:31:21 --> Utf8 Class Initialized
INFO - 2020-01-28 06:31:21 --> URI Class Initialized
INFO - 2020-01-28 06:31:21 --> Router Class Initialized
INFO - 2020-01-28 06:31:21 --> Output Class Initialized
INFO - 2020-01-28 06:31:21 --> Security Class Initialized
DEBUG - 2020-01-28 06:31:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:31:21 --> Input Class Initialized
INFO - 2020-01-28 06:31:21 --> Language Class Initialized
INFO - 2020-01-28 06:31:21 --> Language Class Initialized
INFO - 2020-01-28 06:31:21 --> Config Class Initialized
INFO - 2020-01-28 06:31:21 --> Loader Class Initialized
INFO - 2020-01-28 06:31:21 --> Helper loaded: url_helper
INFO - 2020-01-28 06:31:21 --> Helper loaded: file_helper
INFO - 2020-01-28 06:31:21 --> Helper loaded: form_helper
INFO - 2020-01-28 06:31:21 --> Helper loaded: my_helper
INFO - 2020-01-28 06:31:21 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:31:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:31:21 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:31:21 --> Controller Class Initialized
DEBUG - 2020-01-28 06:31:21 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_keterampilan/views/list.php
DEBUG - 2020-01-28 06:31:21 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:31:21 --> Final output sent to browser
DEBUG - 2020-01-28 06:31:21 --> Total execution time: 0.4599
INFO - 2020-01-28 06:31:22 --> Config Class Initialized
INFO - 2020-01-28 06:31:23 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:31:23 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:31:23 --> Utf8 Class Initialized
INFO - 2020-01-28 06:31:23 --> URI Class Initialized
INFO - 2020-01-28 06:31:23 --> Router Class Initialized
INFO - 2020-01-28 06:31:23 --> Output Class Initialized
INFO - 2020-01-28 06:31:23 --> Security Class Initialized
DEBUG - 2020-01-28 06:31:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:31:23 --> Input Class Initialized
INFO - 2020-01-28 06:31:23 --> Language Class Initialized
INFO - 2020-01-28 06:31:23 --> Language Class Initialized
INFO - 2020-01-28 06:31:23 --> Config Class Initialized
INFO - 2020-01-28 06:31:23 --> Loader Class Initialized
INFO - 2020-01-28 06:31:23 --> Helper loaded: url_helper
INFO - 2020-01-28 06:31:23 --> Helper loaded: file_helper
INFO - 2020-01-28 06:31:23 --> Helper loaded: form_helper
INFO - 2020-01-28 06:31:23 --> Helper loaded: my_helper
INFO - 2020-01-28 06:31:23 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:31:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:31:23 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:31:23 --> Controller Class Initialized
INFO - 2020-01-28 06:32:12 --> Config Class Initialized
INFO - 2020-01-28 06:32:12 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:32:12 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:32:12 --> Utf8 Class Initialized
INFO - 2020-01-28 06:32:12 --> URI Class Initialized
INFO - 2020-01-28 06:32:12 --> Router Class Initialized
INFO - 2020-01-28 06:32:12 --> Output Class Initialized
INFO - 2020-01-28 06:32:12 --> Security Class Initialized
DEBUG - 2020-01-28 06:32:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:32:12 --> Input Class Initialized
INFO - 2020-01-28 06:32:12 --> Language Class Initialized
INFO - 2020-01-28 06:32:12 --> Language Class Initialized
INFO - 2020-01-28 06:32:12 --> Config Class Initialized
INFO - 2020-01-28 06:32:12 --> Loader Class Initialized
INFO - 2020-01-28 06:32:12 --> Helper loaded: url_helper
INFO - 2020-01-28 06:32:12 --> Helper loaded: file_helper
INFO - 2020-01-28 06:32:12 --> Helper loaded: form_helper
INFO - 2020-01-28 06:32:12 --> Helper loaded: my_helper
INFO - 2020-01-28 06:32:12 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:32:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:32:12 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:32:12 --> Controller Class Initialized
DEBUG - 2020-01-28 06:32:12 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_keterampilan/views/form.php
DEBUG - 2020-01-28 06:32:12 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:32:12 --> Final output sent to browser
DEBUG - 2020-01-28 06:32:12 --> Total execution time: 0.5496
INFO - 2020-01-28 06:32:24 --> Config Class Initialized
INFO - 2020-01-28 06:32:24 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:32:24 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:32:24 --> Utf8 Class Initialized
INFO - 2020-01-28 06:32:24 --> URI Class Initialized
INFO - 2020-01-28 06:32:24 --> Router Class Initialized
INFO - 2020-01-28 06:32:24 --> Output Class Initialized
INFO - 2020-01-28 06:32:24 --> Security Class Initialized
DEBUG - 2020-01-28 06:32:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:32:24 --> Input Class Initialized
INFO - 2020-01-28 06:32:24 --> Language Class Initialized
INFO - 2020-01-28 06:32:24 --> Language Class Initialized
INFO - 2020-01-28 06:32:24 --> Config Class Initialized
INFO - 2020-01-28 06:32:24 --> Loader Class Initialized
INFO - 2020-01-28 06:32:24 --> Helper loaded: url_helper
INFO - 2020-01-28 06:32:24 --> Helper loaded: file_helper
INFO - 2020-01-28 06:32:24 --> Helper loaded: form_helper
INFO - 2020-01-28 06:32:24 --> Helper loaded: my_helper
INFO - 2020-01-28 06:32:24 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:32:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:32:24 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:32:24 --> Controller Class Initialized
INFO - 2020-01-28 06:32:24 --> Config Class Initialized
INFO - 2020-01-28 06:32:24 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:32:24 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:32:24 --> Utf8 Class Initialized
INFO - 2020-01-28 06:32:24 --> URI Class Initialized
INFO - 2020-01-28 06:32:24 --> Router Class Initialized
INFO - 2020-01-28 06:32:24 --> Output Class Initialized
INFO - 2020-01-28 06:32:24 --> Security Class Initialized
DEBUG - 2020-01-28 06:32:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:32:24 --> Input Class Initialized
INFO - 2020-01-28 06:32:24 --> Language Class Initialized
INFO - 2020-01-28 06:32:24 --> Language Class Initialized
INFO - 2020-01-28 06:32:24 --> Config Class Initialized
INFO - 2020-01-28 06:32:24 --> Loader Class Initialized
INFO - 2020-01-28 06:32:24 --> Helper loaded: url_helper
INFO - 2020-01-28 06:32:24 --> Helper loaded: file_helper
INFO - 2020-01-28 06:32:24 --> Helper loaded: form_helper
INFO - 2020-01-28 06:32:24 --> Helper loaded: my_helper
INFO - 2020-01-28 06:32:24 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:32:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:32:25 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:32:25 --> Controller Class Initialized
DEBUG - 2020-01-28 06:32:25 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_keterampilan/views/list.php
DEBUG - 2020-01-28 06:32:25 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:32:25 --> Final output sent to browser
DEBUG - 2020-01-28 06:32:25 --> Total execution time: 0.4369
INFO - 2020-01-28 06:32:27 --> Config Class Initialized
INFO - 2020-01-28 06:32:27 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:32:27 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:32:27 --> Utf8 Class Initialized
INFO - 2020-01-28 06:32:27 --> URI Class Initialized
INFO - 2020-01-28 06:32:27 --> Router Class Initialized
INFO - 2020-01-28 06:32:27 --> Output Class Initialized
INFO - 2020-01-28 06:32:27 --> Security Class Initialized
DEBUG - 2020-01-28 06:32:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:32:27 --> Input Class Initialized
INFO - 2020-01-28 06:32:27 --> Language Class Initialized
INFO - 2020-01-28 06:32:27 --> Language Class Initialized
INFO - 2020-01-28 06:32:27 --> Config Class Initialized
INFO - 2020-01-28 06:32:27 --> Loader Class Initialized
INFO - 2020-01-28 06:32:27 --> Helper loaded: url_helper
INFO - 2020-01-28 06:32:27 --> Helper loaded: file_helper
INFO - 2020-01-28 06:32:27 --> Helper loaded: form_helper
INFO - 2020-01-28 06:32:27 --> Helper loaded: my_helper
INFO - 2020-01-28 06:32:27 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:32:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:32:27 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:32:27 --> Controller Class Initialized
INFO - 2020-01-28 06:32:27 --> Final output sent to browser
DEBUG - 2020-01-28 06:32:27 --> Total execution time: 0.3791
INFO - 2020-01-28 06:32:30 --> Config Class Initialized
INFO - 2020-01-28 06:32:30 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:32:30 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:32:30 --> Utf8 Class Initialized
INFO - 2020-01-28 06:32:30 --> URI Class Initialized
INFO - 2020-01-28 06:32:30 --> Router Class Initialized
INFO - 2020-01-28 06:32:30 --> Output Class Initialized
INFO - 2020-01-28 06:32:30 --> Security Class Initialized
DEBUG - 2020-01-28 06:32:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:32:30 --> Input Class Initialized
INFO - 2020-01-28 06:32:30 --> Language Class Initialized
INFO - 2020-01-28 06:32:30 --> Language Class Initialized
INFO - 2020-01-28 06:32:30 --> Config Class Initialized
INFO - 2020-01-28 06:32:30 --> Loader Class Initialized
INFO - 2020-01-28 06:32:30 --> Helper loaded: url_helper
INFO - 2020-01-28 06:32:30 --> Helper loaded: file_helper
INFO - 2020-01-28 06:32:30 --> Helper loaded: form_helper
INFO - 2020-01-28 06:32:30 --> Helper loaded: my_helper
INFO - 2020-01-28 06:32:30 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:32:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:32:30 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:32:30 --> Controller Class Initialized
INFO - 2020-01-28 06:32:30 --> Final output sent to browser
DEBUG - 2020-01-28 06:32:30 --> Total execution time: 0.4028
INFO - 2020-01-28 06:33:51 --> Config Class Initialized
INFO - 2020-01-28 06:33:51 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:33:51 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:33:51 --> Utf8 Class Initialized
INFO - 2020-01-28 06:33:51 --> URI Class Initialized
INFO - 2020-01-28 06:33:51 --> Router Class Initialized
INFO - 2020-01-28 06:33:51 --> Output Class Initialized
INFO - 2020-01-28 06:33:51 --> Security Class Initialized
DEBUG - 2020-01-28 06:33:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:33:51 --> Input Class Initialized
INFO - 2020-01-28 06:33:51 --> Language Class Initialized
INFO - 2020-01-28 06:33:51 --> Language Class Initialized
INFO - 2020-01-28 06:33:51 --> Config Class Initialized
INFO - 2020-01-28 06:33:51 --> Loader Class Initialized
INFO - 2020-01-28 06:33:51 --> Helper loaded: url_helper
INFO - 2020-01-28 06:33:51 --> Helper loaded: file_helper
INFO - 2020-01-28 06:33:51 --> Helper loaded: form_helper
INFO - 2020-01-28 06:33:51 --> Helper loaded: my_helper
INFO - 2020-01-28 06:33:51 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:33:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:33:51 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:33:51 --> Controller Class Initialized
DEBUG - 2020-01-28 06:33:51 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_keterampilan/views/cetak.php
INFO - 2020-01-28 06:33:51 --> Final output sent to browser
DEBUG - 2020-01-28 06:33:51 --> Total execution time: 0.5085
INFO - 2020-01-28 06:33:59 --> Config Class Initialized
INFO - 2020-01-28 06:33:59 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:33:59 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:33:59 --> Utf8 Class Initialized
INFO - 2020-01-28 06:33:59 --> URI Class Initialized
INFO - 2020-01-28 06:33:59 --> Router Class Initialized
INFO - 2020-01-28 06:33:59 --> Output Class Initialized
INFO - 2020-01-28 06:33:59 --> Security Class Initialized
DEBUG - 2020-01-28 06:33:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:33:59 --> Input Class Initialized
INFO - 2020-01-28 06:33:59 --> Language Class Initialized
INFO - 2020-01-28 06:33:59 --> Language Class Initialized
INFO - 2020-01-28 06:33:59 --> Config Class Initialized
INFO - 2020-01-28 06:33:59 --> Loader Class Initialized
INFO - 2020-01-28 06:33:59 --> Helper loaded: url_helper
INFO - 2020-01-28 06:33:59 --> Helper loaded: file_helper
INFO - 2020-01-28 06:33:59 --> Helper loaded: form_helper
INFO - 2020-01-28 06:33:59 --> Helper loaded: my_helper
INFO - 2020-01-28 06:33:59 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:33:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:33:59 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:33:59 --> Controller Class Initialized
DEBUG - 2020-01-28 06:33:59 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/view_mapel/views/v_view_mapel.php
DEBUG - 2020-01-28 06:33:59 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:33:59 --> Final output sent to browser
DEBUG - 2020-01-28 06:33:59 --> Total execution time: 0.4569
INFO - 2020-01-28 06:34:02 --> Config Class Initialized
INFO - 2020-01-28 06:34:02 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:34:02 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:34:02 --> Utf8 Class Initialized
INFO - 2020-01-28 06:34:02 --> URI Class Initialized
INFO - 2020-01-28 06:34:02 --> Router Class Initialized
INFO - 2020-01-28 06:34:02 --> Output Class Initialized
INFO - 2020-01-28 06:34:02 --> Security Class Initialized
DEBUG - 2020-01-28 06:34:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:34:02 --> Input Class Initialized
INFO - 2020-01-28 06:34:02 --> Language Class Initialized
INFO - 2020-01-28 06:34:02 --> Language Class Initialized
INFO - 2020-01-28 06:34:02 --> Config Class Initialized
INFO - 2020-01-28 06:34:02 --> Loader Class Initialized
INFO - 2020-01-28 06:34:02 --> Helper loaded: url_helper
INFO - 2020-01-28 06:34:02 --> Helper loaded: file_helper
INFO - 2020-01-28 06:34:02 --> Helper loaded: form_helper
INFO - 2020-01-28 06:34:02 --> Helper loaded: my_helper
INFO - 2020-01-28 06:34:02 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:34:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:34:02 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:34:02 --> Controller Class Initialized
DEBUG - 2020-01-28 06:34:02 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/list.php
DEBUG - 2020-01-28 06:34:02 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:34:02 --> Final output sent to browser
DEBUG - 2020-01-28 06:34:02 --> Total execution time: 0.4608
INFO - 2020-01-28 06:34:02 --> Config Class Initialized
INFO - 2020-01-28 06:34:02 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:34:02 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:34:02 --> Utf8 Class Initialized
INFO - 2020-01-28 06:34:02 --> URI Class Initialized
INFO - 2020-01-28 06:34:02 --> Router Class Initialized
INFO - 2020-01-28 06:34:02 --> Output Class Initialized
INFO - 2020-01-28 06:34:02 --> Security Class Initialized
DEBUG - 2020-01-28 06:34:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:34:02 --> Input Class Initialized
INFO - 2020-01-28 06:34:02 --> Language Class Initialized
INFO - 2020-01-28 06:34:02 --> Language Class Initialized
INFO - 2020-01-28 06:34:02 --> Config Class Initialized
INFO - 2020-01-28 06:34:03 --> Loader Class Initialized
INFO - 2020-01-28 06:34:03 --> Helper loaded: url_helper
INFO - 2020-01-28 06:34:03 --> Helper loaded: file_helper
INFO - 2020-01-28 06:34:03 --> Helper loaded: form_helper
INFO - 2020-01-28 06:34:03 --> Helper loaded: my_helper
INFO - 2020-01-28 06:34:03 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:34:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:34:03 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:34:03 --> Controller Class Initialized
INFO - 2020-01-28 06:34:04 --> Config Class Initialized
INFO - 2020-01-28 06:34:04 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:34:04 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:34:04 --> Utf8 Class Initialized
INFO - 2020-01-28 06:34:04 --> URI Class Initialized
INFO - 2020-01-28 06:34:04 --> Router Class Initialized
INFO - 2020-01-28 06:34:04 --> Output Class Initialized
INFO - 2020-01-28 06:34:04 --> Security Class Initialized
DEBUG - 2020-01-28 06:34:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:34:04 --> Input Class Initialized
INFO - 2020-01-28 06:34:04 --> Language Class Initialized
INFO - 2020-01-28 06:34:04 --> Language Class Initialized
INFO - 2020-01-28 06:34:04 --> Config Class Initialized
INFO - 2020-01-28 06:34:04 --> Loader Class Initialized
INFO - 2020-01-28 06:34:04 --> Helper loaded: url_helper
INFO - 2020-01-28 06:34:04 --> Helper loaded: file_helper
INFO - 2020-01-28 06:34:04 --> Helper loaded: form_helper
INFO - 2020-01-28 06:34:04 --> Helper loaded: my_helper
INFO - 2020-01-28 06:34:04 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:34:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:34:04 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:34:04 --> Controller Class Initialized
DEBUG - 2020-01-28 06:34:04 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 06:34:04 --> Final output sent to browser
DEBUG - 2020-01-28 06:34:04 --> Total execution time: 0.4610
INFO - 2020-01-28 06:34:22 --> Config Class Initialized
INFO - 2020-01-28 06:34:22 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:34:22 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:34:22 --> Utf8 Class Initialized
INFO - 2020-01-28 06:34:22 --> URI Class Initialized
INFO - 2020-01-28 06:34:22 --> Router Class Initialized
INFO - 2020-01-28 06:34:22 --> Output Class Initialized
INFO - 2020-01-28 06:34:22 --> Security Class Initialized
DEBUG - 2020-01-28 06:34:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:34:22 --> Input Class Initialized
INFO - 2020-01-28 06:34:22 --> Language Class Initialized
INFO - 2020-01-28 06:34:22 --> Language Class Initialized
INFO - 2020-01-28 06:34:23 --> Config Class Initialized
INFO - 2020-01-28 06:34:23 --> Loader Class Initialized
INFO - 2020-01-28 06:34:23 --> Helper loaded: url_helper
INFO - 2020-01-28 06:34:23 --> Helper loaded: file_helper
INFO - 2020-01-28 06:34:23 --> Helper loaded: form_helper
INFO - 2020-01-28 06:34:23 --> Helper loaded: my_helper
INFO - 2020-01-28 06:34:23 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:34:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:34:23 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:34:23 --> Controller Class Initialized
DEBUG - 2020-01-28 06:34:23 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/riwayat_mengajar/views/list.php
DEBUG - 2020-01-28 06:34:23 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:34:23 --> Final output sent to browser
DEBUG - 2020-01-28 06:34:23 --> Total execution time: 0.5851
INFO - 2020-01-28 06:34:25 --> Config Class Initialized
INFO - 2020-01-28 06:34:25 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:34:25 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:34:25 --> Utf8 Class Initialized
INFO - 2020-01-28 06:34:25 --> URI Class Initialized
INFO - 2020-01-28 06:34:25 --> Router Class Initialized
INFO - 2020-01-28 06:34:25 --> Output Class Initialized
INFO - 2020-01-28 06:34:25 --> Security Class Initialized
DEBUG - 2020-01-28 06:34:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:34:25 --> Input Class Initialized
INFO - 2020-01-28 06:34:25 --> Language Class Initialized
INFO - 2020-01-28 06:34:25 --> Language Class Initialized
INFO - 2020-01-28 06:34:25 --> Config Class Initialized
INFO - 2020-01-28 06:34:25 --> Loader Class Initialized
INFO - 2020-01-28 06:34:25 --> Helper loaded: url_helper
INFO - 2020-01-28 06:34:25 --> Helper loaded: file_helper
INFO - 2020-01-28 06:34:25 --> Helper loaded: form_helper
INFO - 2020-01-28 06:34:25 --> Helper loaded: my_helper
INFO - 2020-01-28 06:34:25 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:34:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:34:25 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:34:25 --> Controller Class Initialized
ERROR - 2020-01-28 06:34:25 --> Severity: Notice --> Undefined offset: 1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\n_pengetahuan\controllers\N_pengetahuan.php 40
ERROR - 2020-01-28 06:34:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND a.tasm = '20182'' at line 8 - Invalid query: SELECT 
                                b.nama nmmapel, b.kkm, c.nama nmkelas, d.nama nmguru
                                FROM t_guru_mapel a
                                INNER JOIN m_mapel b ON a.id_mapel = b.id 
                                INNER JOIN m_kelas c ON a.id_kelas = c.id
                                INNER JOIN m_guru d ON a.id_guru = d.id 
                                WHERE b.id = 1 AND c.id =  
                                AND a.tasm = '20182'
INFO - 2020-01-28 06:34:25 --> Language file loaded: language/english/db_lang.php
INFO - 2020-01-28 06:40:02 --> Config Class Initialized
INFO - 2020-01-28 06:40:02 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:40:02 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:40:02 --> Utf8 Class Initialized
INFO - 2020-01-28 06:40:02 --> URI Class Initialized
INFO - 2020-01-28 06:40:02 --> Router Class Initialized
INFO - 2020-01-28 06:40:02 --> Output Class Initialized
INFO - 2020-01-28 06:40:02 --> Security Class Initialized
DEBUG - 2020-01-28 06:40:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:40:02 --> Input Class Initialized
INFO - 2020-01-28 06:40:02 --> Language Class Initialized
INFO - 2020-01-28 06:40:02 --> Language Class Initialized
INFO - 2020-01-28 06:40:02 --> Config Class Initialized
INFO - 2020-01-28 06:40:02 --> Loader Class Initialized
INFO - 2020-01-28 06:40:02 --> Helper loaded: url_helper
INFO - 2020-01-28 06:40:02 --> Helper loaded: file_helper
INFO - 2020-01-28 06:40:02 --> Helper loaded: form_helper
INFO - 2020-01-28 06:40:02 --> Helper loaded: my_helper
INFO - 2020-01-28 06:40:02 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:40:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:40:02 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:40:02 --> Controller Class Initialized
ERROR - 2020-01-28 06:40:02 --> Severity: Notice --> Undefined variable: pc_bawa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\riwayat_mengajar\controllers\Riwayat_mengajar.php 29
ERROR - 2020-01-28 06:40:02 --> Severity: Notice --> Undefined variable: pc_bawa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\riwayat_mengajar\controllers\Riwayat_mengajar.php 29
ERROR - 2020-01-28 06:40:02 --> Severity: Notice --> Undefined index: tasm E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\riwayat_mengajar\controllers\Riwayat_mengajar.php 29
ERROR - 2020-01-28 06:40:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id =  AND a.tasm = '' and a.id_guru= '1'' at line 7 - Invalid query: SELECT 
                                         a.id_guru, b.nama nmmapel, c.nama nmkelas, d.nama nmguru
                                         FROM t_guru_mapel a
                                         INNER JOIN m_mapel b ON a.id_mapel = b.id 
                                         INNER JOIN m_kelas c ON a.id_kelas = c.id
                                         INNER JOIN m_guru d ON a.id_guru = d.id 
                                         WHERE b.id =  AND c.id =  AND a.tasm = '' and a.id_guru= '1'
INFO - 2020-01-28 06:40:02 --> Language file loaded: language/english/db_lang.php
INFO - 2020-01-28 06:40:56 --> Config Class Initialized
INFO - 2020-01-28 06:40:56 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:40:56 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:40:56 --> Utf8 Class Initialized
INFO - 2020-01-28 06:40:56 --> URI Class Initialized
INFO - 2020-01-28 06:40:56 --> Router Class Initialized
INFO - 2020-01-28 06:40:56 --> Output Class Initialized
INFO - 2020-01-28 06:40:56 --> Security Class Initialized
DEBUG - 2020-01-28 06:40:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:40:56 --> Input Class Initialized
INFO - 2020-01-28 06:40:56 --> Language Class Initialized
INFO - 2020-01-28 06:40:56 --> Language Class Initialized
INFO - 2020-01-28 06:40:56 --> Config Class Initialized
INFO - 2020-01-28 06:40:56 --> Loader Class Initialized
INFO - 2020-01-28 06:40:56 --> Helper loaded: url_helper
INFO - 2020-01-28 06:40:57 --> Helper loaded: file_helper
INFO - 2020-01-28 06:40:57 --> Helper loaded: form_helper
INFO - 2020-01-28 06:40:57 --> Helper loaded: my_helper
INFO - 2020-01-28 06:40:57 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:40:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:40:57 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:40:57 --> Controller Class Initialized
ERROR - 2020-01-28 06:40:57 --> Severity: Notice --> Undefined variable: bawa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\riwayat_mengajar\controllers\Riwayat_mengajar.php 22
ERROR - 2020-01-28 06:40:57 --> Severity: Notice --> Undefined offset: 1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\riwayat_mengajar\controllers\Riwayat_mengajar.php 29
ERROR - 2020-01-28 06:40:57 --> Severity: Notice --> Undefined index: tasm E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\riwayat_mengajar\controllers\Riwayat_mengajar.php 29
ERROR - 2020-01-28 06:40:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id =  AND a.tasm = '' and a.id_guru= '1'' at line 7 - Invalid query: SELECT 
                                         a.id_guru, b.nama nmmapel, c.nama nmkelas, d.nama nmguru
                                         FROM t_guru_mapel a
                                         INNER JOIN m_mapel b ON a.id_mapel = b.id 
                                         INNER JOIN m_kelas c ON a.id_kelas = c.id
                                         INNER JOIN m_guru d ON a.id_guru = d.id 
                                         WHERE b.id =  AND c.id =  AND a.tasm = '' and a.id_guru= '1'
INFO - 2020-01-28 06:40:57 --> Language file loaded: language/english/db_lang.php
INFO - 2020-01-28 06:41:07 --> Config Class Initialized
INFO - 2020-01-28 06:41:07 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:41:07 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:41:07 --> Utf8 Class Initialized
INFO - 2020-01-28 06:41:07 --> URI Class Initialized
INFO - 2020-01-28 06:41:07 --> Router Class Initialized
INFO - 2020-01-28 06:41:07 --> Output Class Initialized
INFO - 2020-01-28 06:41:07 --> Security Class Initialized
DEBUG - 2020-01-28 06:41:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:41:07 --> Input Class Initialized
INFO - 2020-01-28 06:41:07 --> Language Class Initialized
INFO - 2020-01-28 06:41:07 --> Language Class Initialized
INFO - 2020-01-28 06:41:07 --> Config Class Initialized
INFO - 2020-01-28 06:41:07 --> Loader Class Initialized
INFO - 2020-01-28 06:41:08 --> Helper loaded: url_helper
INFO - 2020-01-28 06:41:08 --> Helper loaded: file_helper
INFO - 2020-01-28 06:41:08 --> Helper loaded: form_helper
INFO - 2020-01-28 06:41:08 --> Helper loaded: my_helper
INFO - 2020-01-28 06:41:08 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:41:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:41:08 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:41:08 --> Controller Class Initialized
ERROR - 2020-01-28 06:41:08 --> Severity: Warning --> Missing argument 1 for Riwayat_mengajar::index() E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\riwayat_mengajar\controllers\Riwayat_mengajar.php 14
ERROR - 2020-01-28 06:41:08 --> Severity: Notice --> Undefined variable: bawa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\riwayat_mengajar\controllers\Riwayat_mengajar.php 22
ERROR - 2020-01-28 06:41:08 --> Severity: Notice --> Undefined offset: 1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\riwayat_mengajar\controllers\Riwayat_mengajar.php 29
ERROR - 2020-01-28 06:41:08 --> Severity: Notice --> Undefined index: tasm E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\riwayat_mengajar\controllers\Riwayat_mengajar.php 29
ERROR - 2020-01-28 06:41:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id =  AND a.tasm = '' and a.id_guru= '1'' at line 7 - Invalid query: SELECT 
                                         a.id_guru, b.nama nmmapel, c.nama nmkelas, d.nama nmguru
                                         FROM t_guru_mapel a
                                         INNER JOIN m_mapel b ON a.id_mapel = b.id 
                                         INNER JOIN m_kelas c ON a.id_kelas = c.id
                                         INNER JOIN m_guru d ON a.id_guru = d.id 
                                         WHERE b.id =  AND c.id =  AND a.tasm = '' and a.id_guru= '1'
INFO - 2020-01-28 06:41:08 --> Language file loaded: language/english/db_lang.php
INFO - 2020-01-28 06:41:27 --> Config Class Initialized
INFO - 2020-01-28 06:41:27 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:41:27 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:41:27 --> Utf8 Class Initialized
INFO - 2020-01-28 06:41:27 --> URI Class Initialized
INFO - 2020-01-28 06:41:27 --> Router Class Initialized
INFO - 2020-01-28 06:41:27 --> Output Class Initialized
INFO - 2020-01-28 06:41:27 --> Security Class Initialized
DEBUG - 2020-01-28 06:41:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:41:28 --> Input Class Initialized
INFO - 2020-01-28 06:41:28 --> Language Class Initialized
INFO - 2020-01-28 06:41:28 --> Language Class Initialized
INFO - 2020-01-28 06:41:28 --> Config Class Initialized
INFO - 2020-01-28 06:41:28 --> Loader Class Initialized
INFO - 2020-01-28 06:41:28 --> Helper loaded: url_helper
INFO - 2020-01-28 06:41:28 --> Helper loaded: file_helper
INFO - 2020-01-28 06:41:28 --> Helper loaded: form_helper
INFO - 2020-01-28 06:41:28 --> Helper loaded: my_helper
INFO - 2020-01-28 06:41:28 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:41:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:41:28 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:41:28 --> Controller Class Initialized
DEBUG - 2020-01-28 06:41:28 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/riwayat_mengajar/views/list.php
DEBUG - 2020-01-28 06:41:28 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:41:28 --> Final output sent to browser
DEBUG - 2020-01-28 06:41:28 --> Total execution time: 0.4967
INFO - 2020-01-28 06:41:30 --> Config Class Initialized
INFO - 2020-01-28 06:41:30 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:41:30 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:41:30 --> Utf8 Class Initialized
INFO - 2020-01-28 06:41:30 --> URI Class Initialized
INFO - 2020-01-28 06:41:30 --> Router Class Initialized
INFO - 2020-01-28 06:41:30 --> Output Class Initialized
INFO - 2020-01-28 06:41:30 --> Security Class Initialized
DEBUG - 2020-01-28 06:41:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:41:30 --> Input Class Initialized
INFO - 2020-01-28 06:41:30 --> Language Class Initialized
INFO - 2020-01-28 06:41:30 --> Language Class Initialized
INFO - 2020-01-28 06:41:30 --> Config Class Initialized
INFO - 2020-01-28 06:41:30 --> Loader Class Initialized
INFO - 2020-01-28 06:41:30 --> Helper loaded: url_helper
INFO - 2020-01-28 06:41:30 --> Helper loaded: file_helper
INFO - 2020-01-28 06:41:30 --> Helper loaded: form_helper
INFO - 2020-01-28 06:41:30 --> Helper loaded: my_helper
INFO - 2020-01-28 06:41:30 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:41:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:41:30 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:41:30 --> Controller Class Initialized
DEBUG - 2020-01-28 06:41:30 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 06:41:30 --> Final output sent to browser
DEBUG - 2020-01-28 06:41:30 --> Total execution time: 0.5615
INFO - 2020-01-28 06:41:35 --> Config Class Initialized
INFO - 2020-01-28 06:41:35 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:41:35 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:41:35 --> Utf8 Class Initialized
INFO - 2020-01-28 06:41:35 --> URI Class Initialized
INFO - 2020-01-28 06:41:35 --> Router Class Initialized
INFO - 2020-01-28 06:41:35 --> Output Class Initialized
INFO - 2020-01-28 06:41:36 --> Security Class Initialized
DEBUG - 2020-01-28 06:41:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:41:36 --> Input Class Initialized
INFO - 2020-01-28 06:41:36 --> Language Class Initialized
INFO - 2020-01-28 06:41:36 --> Language Class Initialized
INFO - 2020-01-28 06:41:36 --> Config Class Initialized
INFO - 2020-01-28 06:41:36 --> Loader Class Initialized
INFO - 2020-01-28 06:41:36 --> Helper loaded: url_helper
INFO - 2020-01-28 06:41:36 --> Helper loaded: file_helper
INFO - 2020-01-28 06:41:36 --> Helper loaded: form_helper
INFO - 2020-01-28 06:41:36 --> Helper loaded: my_helper
INFO - 2020-01-28 06:41:36 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:41:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:41:36 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:41:36 --> Controller Class Initialized
DEBUG - 2020-01-28 06:41:36 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_keterampilan/views/cetak.php
INFO - 2020-01-28 06:41:36 --> Final output sent to browser
DEBUG - 2020-01-28 06:41:36 --> Total execution time: 0.5205
INFO - 2020-01-28 06:41:55 --> Config Class Initialized
INFO - 2020-01-28 06:41:55 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:41:55 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:41:55 --> Utf8 Class Initialized
INFO - 2020-01-28 06:41:55 --> URI Class Initialized
INFO - 2020-01-28 06:41:55 --> Router Class Initialized
INFO - 2020-01-28 06:41:55 --> Output Class Initialized
INFO - 2020-01-28 06:41:55 --> Security Class Initialized
DEBUG - 2020-01-28 06:41:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:41:55 --> Input Class Initialized
INFO - 2020-01-28 06:41:55 --> Language Class Initialized
INFO - 2020-01-28 06:41:55 --> Language Class Initialized
INFO - 2020-01-28 06:41:55 --> Config Class Initialized
INFO - 2020-01-28 06:41:55 --> Loader Class Initialized
INFO - 2020-01-28 06:41:55 --> Helper loaded: url_helper
INFO - 2020-01-28 06:41:55 --> Helper loaded: file_helper
INFO - 2020-01-28 06:41:55 --> Helper loaded: form_helper
INFO - 2020-01-28 06:41:55 --> Helper loaded: my_helper
INFO - 2020-01-28 06:41:55 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:41:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:41:55 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:41:55 --> Controller Class Initialized
DEBUG - 2020-01-28 06:41:55 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_sikap_sp/views/list.php
DEBUG - 2020-01-28 06:41:55 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:41:55 --> Final output sent to browser
DEBUG - 2020-01-28 06:41:55 --> Total execution time: 0.4584
INFO - 2020-01-28 06:43:26 --> Config Class Initialized
INFO - 2020-01-28 06:43:26 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:43:26 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:43:26 --> Utf8 Class Initialized
INFO - 2020-01-28 06:43:26 --> URI Class Initialized
INFO - 2020-01-28 06:43:26 --> Router Class Initialized
INFO - 2020-01-28 06:43:26 --> Output Class Initialized
INFO - 2020-01-28 06:43:26 --> Security Class Initialized
DEBUG - 2020-01-28 06:43:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:43:26 --> Input Class Initialized
INFO - 2020-01-28 06:43:26 --> Language Class Initialized
INFO - 2020-01-28 06:43:26 --> Language Class Initialized
INFO - 2020-01-28 06:43:26 --> Config Class Initialized
INFO - 2020-01-28 06:43:26 --> Loader Class Initialized
INFO - 2020-01-28 06:43:26 --> Helper loaded: url_helper
INFO - 2020-01-28 06:43:26 --> Helper loaded: file_helper
INFO - 2020-01-28 06:43:26 --> Helper loaded: form_helper
INFO - 2020-01-28 06:43:26 --> Helper loaded: my_helper
INFO - 2020-01-28 06:43:26 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:43:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:43:26 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:43:26 --> Controller Class Initialized
DEBUG - 2020-01-28 06:43:26 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_sikap_so/views/list.php
DEBUG - 2020-01-28 06:43:26 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:43:26 --> Final output sent to browser
DEBUG - 2020-01-28 06:43:26 --> Total execution time: 0.4870
INFO - 2020-01-28 06:43:29 --> Config Class Initialized
INFO - 2020-01-28 06:43:29 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:43:29 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:43:29 --> Utf8 Class Initialized
INFO - 2020-01-28 06:43:29 --> URI Class Initialized
INFO - 2020-01-28 06:43:29 --> Router Class Initialized
INFO - 2020-01-28 06:43:29 --> Output Class Initialized
INFO - 2020-01-28 06:43:29 --> Security Class Initialized
DEBUG - 2020-01-28 06:43:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:43:29 --> Input Class Initialized
INFO - 2020-01-28 06:43:29 --> Language Class Initialized
INFO - 2020-01-28 06:43:29 --> Language Class Initialized
INFO - 2020-01-28 06:43:29 --> Config Class Initialized
INFO - 2020-01-28 06:43:29 --> Loader Class Initialized
INFO - 2020-01-28 06:43:29 --> Helper loaded: url_helper
INFO - 2020-01-28 06:43:29 --> Helper loaded: file_helper
INFO - 2020-01-28 06:43:29 --> Helper loaded: form_helper
INFO - 2020-01-28 06:43:29 --> Helper loaded: my_helper
INFO - 2020-01-28 06:43:29 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:43:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:43:29 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:43:29 --> Controller Class Initialized
DEBUG - 2020-01-28 06:43:29 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_absensi/views/list.php
DEBUG - 2020-01-28 06:43:29 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:43:29 --> Final output sent to browser
DEBUG - 2020-01-28 06:43:29 --> Total execution time: 0.5000
INFO - 2020-01-28 06:43:32 --> Config Class Initialized
INFO - 2020-01-28 06:43:32 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:43:32 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:43:32 --> Utf8 Class Initialized
INFO - 2020-01-28 06:43:32 --> URI Class Initialized
INFO - 2020-01-28 06:43:32 --> Router Class Initialized
INFO - 2020-01-28 06:43:32 --> Output Class Initialized
INFO - 2020-01-28 06:43:32 --> Security Class Initialized
DEBUG - 2020-01-28 06:43:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:43:32 --> Input Class Initialized
INFO - 2020-01-28 06:43:32 --> Language Class Initialized
INFO - 2020-01-28 06:43:32 --> Language Class Initialized
INFO - 2020-01-28 06:43:32 --> Config Class Initialized
INFO - 2020-01-28 06:43:32 --> Loader Class Initialized
INFO - 2020-01-28 06:43:32 --> Helper loaded: url_helper
INFO - 2020-01-28 06:43:32 --> Helper loaded: file_helper
INFO - 2020-01-28 06:43:32 --> Helper loaded: form_helper
INFO - 2020-01-28 06:43:32 --> Helper loaded: my_helper
INFO - 2020-01-28 06:43:32 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:43:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:43:32 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:43:33 --> Controller Class Initialized
DEBUG - 2020-01-28 06:43:33 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_absensi/views/list.php
DEBUG - 2020-01-28 06:43:33 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:43:33 --> Final output sent to browser
DEBUG - 2020-01-28 06:43:33 --> Total execution time: 0.5152
INFO - 2020-01-28 06:43:34 --> Config Class Initialized
INFO - 2020-01-28 06:43:34 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:43:35 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:43:35 --> Utf8 Class Initialized
INFO - 2020-01-28 06:43:35 --> URI Class Initialized
INFO - 2020-01-28 06:43:35 --> Router Class Initialized
INFO - 2020-01-28 06:43:35 --> Output Class Initialized
INFO - 2020-01-28 06:43:35 --> Security Class Initialized
DEBUG - 2020-01-28 06:43:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:43:35 --> Input Class Initialized
INFO - 2020-01-28 06:43:35 --> Language Class Initialized
INFO - 2020-01-28 06:43:35 --> Language Class Initialized
INFO - 2020-01-28 06:43:35 --> Config Class Initialized
INFO - 2020-01-28 06:43:35 --> Loader Class Initialized
INFO - 2020-01-28 06:43:35 --> Helper loaded: url_helper
INFO - 2020-01-28 06:43:35 --> Helper loaded: file_helper
INFO - 2020-01-28 06:43:35 --> Helper loaded: form_helper
INFO - 2020-01-28 06:43:35 --> Helper loaded: my_helper
INFO - 2020-01-28 06:43:35 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:43:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:43:35 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:43:35 --> Controller Class Initialized
DEBUG - 2020-01-28 06:43:35 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_prestasi/views/list.php
DEBUG - 2020-01-28 06:43:35 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:43:35 --> Final output sent to browser
DEBUG - 2020-01-28 06:43:35 --> Total execution time: 0.4834
INFO - 2020-01-28 06:43:35 --> Config Class Initialized
INFO - 2020-01-28 06:43:35 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:43:35 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:43:35 --> Utf8 Class Initialized
INFO - 2020-01-28 06:43:35 --> URI Class Initialized
INFO - 2020-01-28 06:43:35 --> Router Class Initialized
INFO - 2020-01-28 06:43:35 --> Output Class Initialized
INFO - 2020-01-28 06:43:35 --> Security Class Initialized
DEBUG - 2020-01-28 06:43:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:43:35 --> Input Class Initialized
INFO - 2020-01-28 06:43:35 --> Language Class Initialized
INFO - 2020-01-28 06:43:35 --> Language Class Initialized
INFO - 2020-01-28 06:43:35 --> Config Class Initialized
INFO - 2020-01-28 06:43:35 --> Loader Class Initialized
INFO - 2020-01-28 06:43:35 --> Helper loaded: url_helper
INFO - 2020-01-28 06:43:35 --> Helper loaded: file_helper
INFO - 2020-01-28 06:43:36 --> Helper loaded: form_helper
INFO - 2020-01-28 06:43:36 --> Helper loaded: my_helper
INFO - 2020-01-28 06:43:36 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:43:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:43:36 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:43:36 --> Controller Class Initialized
INFO - 2020-01-28 06:43:56 --> Config Class Initialized
INFO - 2020-01-28 06:43:56 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:43:56 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:43:56 --> Utf8 Class Initialized
INFO - 2020-01-28 06:43:56 --> URI Class Initialized
INFO - 2020-01-28 06:43:56 --> Router Class Initialized
INFO - 2020-01-28 06:43:56 --> Output Class Initialized
INFO - 2020-01-28 06:43:56 --> Security Class Initialized
DEBUG - 2020-01-28 06:43:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:43:56 --> Input Class Initialized
INFO - 2020-01-28 06:43:56 --> Language Class Initialized
INFO - 2020-01-28 06:43:56 --> Language Class Initialized
INFO - 2020-01-28 06:43:56 --> Config Class Initialized
INFO - 2020-01-28 06:43:56 --> Loader Class Initialized
INFO - 2020-01-28 06:43:56 --> Helper loaded: url_helper
INFO - 2020-01-28 06:43:56 --> Helper loaded: file_helper
INFO - 2020-01-28 06:43:56 --> Helper loaded: form_helper
INFO - 2020-01-28 06:43:56 --> Helper loaded: my_helper
INFO - 2020-01-28 06:43:56 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:43:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:43:56 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:43:56 --> Controller Class Initialized
DEBUG - 2020-01-28 06:43:56 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_catatan/views/list.php
DEBUG - 2020-01-28 06:43:56 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:43:56 --> Final output sent to browser
DEBUG - 2020-01-28 06:43:56 --> Total execution time: 0.4742
INFO - 2020-01-28 06:49:49 --> Config Class Initialized
INFO - 2020-01-28 06:49:49 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:49:49 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:49:49 --> Utf8 Class Initialized
INFO - 2020-01-28 06:49:49 --> URI Class Initialized
INFO - 2020-01-28 06:49:49 --> Router Class Initialized
INFO - 2020-01-28 06:49:49 --> Output Class Initialized
INFO - 2020-01-28 06:49:49 --> Security Class Initialized
DEBUG - 2020-01-28 06:49:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:49:49 --> Input Class Initialized
INFO - 2020-01-28 06:49:49 --> Language Class Initialized
INFO - 2020-01-28 06:49:49 --> Language Class Initialized
INFO - 2020-01-28 06:49:49 --> Config Class Initialized
INFO - 2020-01-28 06:49:49 --> Loader Class Initialized
INFO - 2020-01-28 06:49:49 --> Helper loaded: url_helper
INFO - 2020-01-28 06:49:49 --> Helper loaded: file_helper
INFO - 2020-01-28 06:49:50 --> Helper loaded: form_helper
INFO - 2020-01-28 06:49:50 --> Helper loaded: my_helper
INFO - 2020-01-28 06:49:50 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:49:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:49:50 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:49:50 --> Controller Class Initialized
DEBUG - 2020-01-28 06:49:50 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_catatan/views/list.php
DEBUG - 2020-01-28 06:49:50 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:49:50 --> Final output sent to browser
DEBUG - 2020-01-28 06:49:50 --> Total execution time: 0.5036
INFO - 2020-01-28 06:50:04 --> Config Class Initialized
INFO - 2020-01-28 06:50:04 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:50:04 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:50:04 --> Utf8 Class Initialized
INFO - 2020-01-28 06:50:04 --> URI Class Initialized
INFO - 2020-01-28 06:50:04 --> Router Class Initialized
INFO - 2020-01-28 06:50:04 --> Output Class Initialized
INFO - 2020-01-28 06:50:04 --> Security Class Initialized
DEBUG - 2020-01-28 06:50:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:50:04 --> Input Class Initialized
INFO - 2020-01-28 06:50:04 --> Language Class Initialized
INFO - 2020-01-28 06:50:04 --> Language Class Initialized
INFO - 2020-01-28 06:50:04 --> Config Class Initialized
INFO - 2020-01-28 06:50:04 --> Loader Class Initialized
INFO - 2020-01-28 06:50:04 --> Helper loaded: url_helper
INFO - 2020-01-28 06:50:04 --> Helper loaded: file_helper
INFO - 2020-01-28 06:50:04 --> Helper loaded: form_helper
INFO - 2020-01-28 06:50:04 --> Helper loaded: my_helper
INFO - 2020-01-28 06:50:04 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:50:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:50:04 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:50:04 --> Controller Class Initialized
DEBUG - 2020-01-28 06:50:05 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_catatan/views/list.php
DEBUG - 2020-01-28 06:50:05 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:50:05 --> Final output sent to browser
DEBUG - 2020-01-28 06:50:05 --> Total execution time: 0.5269
INFO - 2020-01-28 06:51:12 --> Config Class Initialized
INFO - 2020-01-28 06:51:12 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:51:12 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:51:12 --> Utf8 Class Initialized
INFO - 2020-01-28 06:51:12 --> URI Class Initialized
INFO - 2020-01-28 06:51:13 --> Router Class Initialized
INFO - 2020-01-28 06:51:13 --> Output Class Initialized
INFO - 2020-01-28 06:51:13 --> Security Class Initialized
DEBUG - 2020-01-28 06:51:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:51:13 --> Input Class Initialized
INFO - 2020-01-28 06:51:13 --> Language Class Initialized
INFO - 2020-01-28 06:51:13 --> Language Class Initialized
INFO - 2020-01-28 06:51:13 --> Config Class Initialized
INFO - 2020-01-28 06:51:13 --> Loader Class Initialized
INFO - 2020-01-28 06:51:13 --> Helper loaded: url_helper
INFO - 2020-01-28 06:51:13 --> Helper loaded: file_helper
INFO - 2020-01-28 06:51:13 --> Helper loaded: form_helper
INFO - 2020-01-28 06:51:13 --> Helper loaded: my_helper
INFO - 2020-01-28 06:51:13 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:51:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:51:13 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:51:13 --> Controller Class Initialized
DEBUG - 2020-01-28 06:51:13 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_catatan/views/list.php
DEBUG - 2020-01-28 06:51:13 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:51:13 --> Final output sent to browser
DEBUG - 2020-01-28 06:51:13 --> Total execution time: 0.5105
INFO - 2020-01-28 06:53:01 --> Config Class Initialized
INFO - 2020-01-28 06:53:01 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:53:01 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:53:02 --> Utf8 Class Initialized
INFO - 2020-01-28 06:53:02 --> URI Class Initialized
INFO - 2020-01-28 06:53:02 --> Router Class Initialized
INFO - 2020-01-28 06:53:02 --> Output Class Initialized
INFO - 2020-01-28 06:53:02 --> Security Class Initialized
DEBUG - 2020-01-28 06:53:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:53:02 --> Input Class Initialized
INFO - 2020-01-28 06:53:02 --> Language Class Initialized
INFO - 2020-01-28 06:53:02 --> Language Class Initialized
INFO - 2020-01-28 06:53:02 --> Config Class Initialized
INFO - 2020-01-28 06:53:02 --> Loader Class Initialized
INFO - 2020-01-28 06:53:02 --> Helper loaded: url_helper
INFO - 2020-01-28 06:53:02 --> Helper loaded: file_helper
INFO - 2020-01-28 06:53:02 --> Helper loaded: form_helper
INFO - 2020-01-28 06:53:02 --> Helper loaded: my_helper
INFO - 2020-01-28 06:53:02 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:53:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:53:02 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:53:02 --> Controller Class Initialized
DEBUG - 2020-01-28 06:53:02 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_catatan/views/list.php
DEBUG - 2020-01-28 06:53:02 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:53:02 --> Final output sent to browser
DEBUG - 2020-01-28 06:53:02 --> Total execution time: 0.5870
INFO - 2020-01-28 06:53:08 --> Config Class Initialized
INFO - 2020-01-28 06:53:08 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:53:08 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:53:08 --> Utf8 Class Initialized
INFO - 2020-01-28 06:53:08 --> URI Class Initialized
INFO - 2020-01-28 06:53:08 --> Router Class Initialized
INFO - 2020-01-28 06:53:08 --> Output Class Initialized
INFO - 2020-01-28 06:53:08 --> Security Class Initialized
DEBUG - 2020-01-28 06:53:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:53:08 --> Input Class Initialized
INFO - 2020-01-28 06:53:08 --> Language Class Initialized
INFO - 2020-01-28 06:53:08 --> Language Class Initialized
INFO - 2020-01-28 06:53:08 --> Config Class Initialized
INFO - 2020-01-28 06:53:08 --> Loader Class Initialized
INFO - 2020-01-28 06:53:08 --> Helper loaded: url_helper
INFO - 2020-01-28 06:53:09 --> Helper loaded: file_helper
INFO - 2020-01-28 06:53:09 --> Helper loaded: form_helper
INFO - 2020-01-28 06:53:09 --> Helper loaded: my_helper
INFO - 2020-01-28 06:53:09 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:53:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:53:09 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:53:09 --> Controller Class Initialized
DEBUG - 2020-01-28 06:53:09 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_catatan/views/list.php
DEBUG - 2020-01-28 06:53:09 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:53:09 --> Final output sent to browser
DEBUG - 2020-01-28 06:53:09 --> Total execution time: 0.6083
INFO - 2020-01-28 06:53:16 --> Config Class Initialized
INFO - 2020-01-28 06:53:16 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:53:16 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:53:16 --> Utf8 Class Initialized
INFO - 2020-01-28 06:53:16 --> URI Class Initialized
INFO - 2020-01-28 06:53:16 --> Router Class Initialized
INFO - 2020-01-28 06:53:16 --> Output Class Initialized
INFO - 2020-01-28 06:53:16 --> Security Class Initialized
DEBUG - 2020-01-28 06:53:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:53:17 --> Input Class Initialized
INFO - 2020-01-28 06:53:17 --> Language Class Initialized
INFO - 2020-01-28 06:53:17 --> Language Class Initialized
INFO - 2020-01-28 06:53:17 --> Config Class Initialized
INFO - 2020-01-28 06:53:17 --> Loader Class Initialized
INFO - 2020-01-28 06:53:17 --> Helper loaded: url_helper
INFO - 2020-01-28 06:53:17 --> Helper loaded: file_helper
INFO - 2020-01-28 06:53:17 --> Helper loaded: form_helper
INFO - 2020-01-28 06:53:17 --> Helper loaded: my_helper
INFO - 2020-01-28 06:53:17 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:53:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:53:17 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:53:17 --> Controller Class Initialized
DEBUG - 2020-01-28 06:53:17 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_catatan/views/list.php
DEBUG - 2020-01-28 06:53:17 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:53:17 --> Final output sent to browser
DEBUG - 2020-01-28 06:53:17 --> Total execution time: 0.5348
INFO - 2020-01-28 06:53:34 --> Config Class Initialized
INFO - 2020-01-28 06:53:34 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:53:34 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:53:34 --> Utf8 Class Initialized
INFO - 2020-01-28 06:53:34 --> URI Class Initialized
INFO - 2020-01-28 06:53:34 --> Router Class Initialized
INFO - 2020-01-28 06:53:34 --> Output Class Initialized
INFO - 2020-01-28 06:53:34 --> Security Class Initialized
DEBUG - 2020-01-28 06:53:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:53:34 --> Input Class Initialized
INFO - 2020-01-28 06:53:34 --> Language Class Initialized
INFO - 2020-01-28 06:53:34 --> Language Class Initialized
INFO - 2020-01-28 06:53:34 --> Config Class Initialized
INFO - 2020-01-28 06:53:34 --> Loader Class Initialized
INFO - 2020-01-28 06:53:34 --> Helper loaded: url_helper
INFO - 2020-01-28 06:53:34 --> Helper loaded: file_helper
INFO - 2020-01-28 06:53:34 --> Helper loaded: form_helper
INFO - 2020-01-28 06:53:34 --> Helper loaded: my_helper
INFO - 2020-01-28 06:53:34 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:53:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:53:34 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:53:34 --> Controller Class Initialized
DEBUG - 2020-01-28 06:53:34 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_catatan/views/list.php
DEBUG - 2020-01-28 06:53:34 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:53:34 --> Final output sent to browser
DEBUG - 2020-01-28 06:53:34 --> Total execution time: 0.5214
INFO - 2020-01-28 06:53:50 --> Config Class Initialized
INFO - 2020-01-28 06:53:50 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:53:50 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:53:50 --> Utf8 Class Initialized
INFO - 2020-01-28 06:53:50 --> URI Class Initialized
INFO - 2020-01-28 06:53:50 --> Router Class Initialized
INFO - 2020-01-28 06:53:50 --> Output Class Initialized
INFO - 2020-01-28 06:53:50 --> Security Class Initialized
DEBUG - 2020-01-28 06:53:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:53:50 --> Input Class Initialized
INFO - 2020-01-28 06:53:50 --> Language Class Initialized
INFO - 2020-01-28 06:53:50 --> Language Class Initialized
INFO - 2020-01-28 06:53:50 --> Config Class Initialized
INFO - 2020-01-28 06:53:50 --> Loader Class Initialized
INFO - 2020-01-28 06:53:50 --> Helper loaded: url_helper
INFO - 2020-01-28 06:53:50 --> Helper loaded: file_helper
INFO - 2020-01-28 06:53:50 --> Helper loaded: form_helper
INFO - 2020-01-28 06:53:50 --> Helper loaded: my_helper
INFO - 2020-01-28 06:53:50 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:53:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:53:50 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:53:50 --> Controller Class Initialized
DEBUG - 2020-01-28 06:53:50 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_catatan/views/list.php
DEBUG - 2020-01-28 06:53:50 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:53:50 --> Final output sent to browser
DEBUG - 2020-01-28 06:53:50 --> Total execution time: 0.5059
INFO - 2020-01-28 06:54:07 --> Config Class Initialized
INFO - 2020-01-28 06:54:08 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:54:08 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:54:08 --> Utf8 Class Initialized
INFO - 2020-01-28 06:54:08 --> URI Class Initialized
INFO - 2020-01-28 06:54:08 --> Router Class Initialized
INFO - 2020-01-28 06:54:08 --> Output Class Initialized
INFO - 2020-01-28 06:54:08 --> Security Class Initialized
DEBUG - 2020-01-28 06:54:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:54:08 --> Input Class Initialized
INFO - 2020-01-28 06:54:08 --> Language Class Initialized
INFO - 2020-01-28 06:54:08 --> Language Class Initialized
INFO - 2020-01-28 06:54:08 --> Config Class Initialized
INFO - 2020-01-28 06:54:08 --> Loader Class Initialized
INFO - 2020-01-28 06:54:08 --> Helper loaded: url_helper
INFO - 2020-01-28 06:54:08 --> Helper loaded: file_helper
INFO - 2020-01-28 06:54:08 --> Helper loaded: form_helper
INFO - 2020-01-28 06:54:08 --> Helper loaded: my_helper
INFO - 2020-01-28 06:54:08 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:54:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:54:08 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:54:08 --> Controller Class Initialized
DEBUG - 2020-01-28 06:54:08 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_catatan/views/list.php
DEBUG - 2020-01-28 06:54:08 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:54:08 --> Final output sent to browser
DEBUG - 2020-01-28 06:54:08 --> Total execution time: 0.6413
INFO - 2020-01-28 06:54:39 --> Config Class Initialized
INFO - 2020-01-28 06:54:39 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:54:39 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:54:39 --> Utf8 Class Initialized
INFO - 2020-01-28 06:54:39 --> URI Class Initialized
INFO - 2020-01-28 06:54:39 --> Router Class Initialized
INFO - 2020-01-28 06:54:39 --> Output Class Initialized
INFO - 2020-01-28 06:54:39 --> Security Class Initialized
DEBUG - 2020-01-28 06:54:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:54:39 --> Input Class Initialized
INFO - 2020-01-28 06:54:39 --> Language Class Initialized
INFO - 2020-01-28 06:54:39 --> Language Class Initialized
INFO - 2020-01-28 06:54:39 --> Config Class Initialized
INFO - 2020-01-28 06:54:39 --> Loader Class Initialized
INFO - 2020-01-28 06:54:39 --> Helper loaded: url_helper
INFO - 2020-01-28 06:54:39 --> Helper loaded: file_helper
INFO - 2020-01-28 06:54:39 --> Helper loaded: form_helper
INFO - 2020-01-28 06:54:39 --> Helper loaded: my_helper
INFO - 2020-01-28 06:54:39 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:54:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:54:39 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:54:39 --> Controller Class Initialized
DEBUG - 2020-01-28 06:54:39 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_catatan/views/list.php
DEBUG - 2020-01-28 06:54:39 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:54:39 --> Final output sent to browser
DEBUG - 2020-01-28 06:54:39 --> Total execution time: 0.5304
INFO - 2020-01-28 06:55:19 --> Config Class Initialized
INFO - 2020-01-28 06:55:19 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:55:19 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:55:19 --> Utf8 Class Initialized
INFO - 2020-01-28 06:55:19 --> URI Class Initialized
INFO - 2020-01-28 06:55:19 --> Router Class Initialized
INFO - 2020-01-28 06:55:19 --> Output Class Initialized
INFO - 2020-01-28 06:55:19 --> Security Class Initialized
DEBUG - 2020-01-28 06:55:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:55:19 --> Input Class Initialized
INFO - 2020-01-28 06:55:19 --> Language Class Initialized
INFO - 2020-01-28 06:55:19 --> Language Class Initialized
INFO - 2020-01-28 06:55:19 --> Config Class Initialized
INFO - 2020-01-28 06:55:19 --> Loader Class Initialized
INFO - 2020-01-28 06:55:19 --> Helper loaded: url_helper
INFO - 2020-01-28 06:55:19 --> Helper loaded: file_helper
INFO - 2020-01-28 06:55:19 --> Helper loaded: form_helper
INFO - 2020-01-28 06:55:19 --> Helper loaded: my_helper
INFO - 2020-01-28 06:55:19 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:55:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:55:19 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:55:19 --> Controller Class Initialized
DEBUG - 2020-01-28 06:55:19 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_catatan/views/list.php
DEBUG - 2020-01-28 06:55:19 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:55:19 --> Final output sent to browser
DEBUG - 2020-01-28 06:55:19 --> Total execution time: 0.5167
INFO - 2020-01-28 06:56:10 --> Config Class Initialized
INFO - 2020-01-28 06:56:10 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:56:10 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:56:10 --> Utf8 Class Initialized
INFO - 2020-01-28 06:56:10 --> URI Class Initialized
INFO - 2020-01-28 06:56:10 --> Router Class Initialized
INFO - 2020-01-28 06:56:10 --> Output Class Initialized
INFO - 2020-01-28 06:56:10 --> Security Class Initialized
DEBUG - 2020-01-28 06:56:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:56:10 --> Input Class Initialized
INFO - 2020-01-28 06:56:10 --> Language Class Initialized
INFO - 2020-01-28 06:56:10 --> Language Class Initialized
INFO - 2020-01-28 06:56:10 --> Config Class Initialized
INFO - 2020-01-28 06:56:10 --> Loader Class Initialized
INFO - 2020-01-28 06:56:10 --> Helper loaded: url_helper
INFO - 2020-01-28 06:56:10 --> Helper loaded: file_helper
INFO - 2020-01-28 06:56:10 --> Helper loaded: form_helper
INFO - 2020-01-28 06:56:10 --> Helper loaded: my_helper
INFO - 2020-01-28 06:56:10 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:56:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:56:10 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:56:10 --> Controller Class Initialized
DEBUG - 2020-01-28 06:56:10 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_catatan/views/list.php
DEBUG - 2020-01-28 06:56:10 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:56:10 --> Final output sent to browser
DEBUG - 2020-01-28 06:56:10 --> Total execution time: 0.5367
INFO - 2020-01-28 06:56:29 --> Config Class Initialized
INFO - 2020-01-28 06:56:29 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:56:29 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:56:29 --> Utf8 Class Initialized
INFO - 2020-01-28 06:56:29 --> URI Class Initialized
INFO - 2020-01-28 06:56:29 --> Router Class Initialized
INFO - 2020-01-28 06:56:29 --> Output Class Initialized
INFO - 2020-01-28 06:56:29 --> Security Class Initialized
DEBUG - 2020-01-28 06:56:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:56:29 --> Input Class Initialized
INFO - 2020-01-28 06:56:30 --> Language Class Initialized
INFO - 2020-01-28 06:56:30 --> Language Class Initialized
INFO - 2020-01-28 06:56:30 --> Config Class Initialized
INFO - 2020-01-28 06:56:30 --> Loader Class Initialized
INFO - 2020-01-28 06:56:30 --> Helper loaded: url_helper
INFO - 2020-01-28 06:56:30 --> Helper loaded: file_helper
INFO - 2020-01-28 06:56:30 --> Helper loaded: form_helper
INFO - 2020-01-28 06:56:30 --> Helper loaded: my_helper
INFO - 2020-01-28 06:56:30 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:56:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:56:30 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:56:30 --> Controller Class Initialized
DEBUG - 2020-01-28 06:56:30 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_catatan/views/list.php
DEBUG - 2020-01-28 06:56:30 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:56:30 --> Final output sent to browser
DEBUG - 2020-01-28 06:56:30 --> Total execution time: 0.5091
INFO - 2020-01-28 06:56:36 --> Config Class Initialized
INFO - 2020-01-28 06:56:36 --> Hooks Class Initialized
DEBUG - 2020-01-28 06:56:36 --> UTF-8 Support Enabled
INFO - 2020-01-28 06:56:36 --> Utf8 Class Initialized
INFO - 2020-01-28 06:56:36 --> URI Class Initialized
INFO - 2020-01-28 06:56:36 --> Router Class Initialized
INFO - 2020-01-28 06:56:36 --> Output Class Initialized
INFO - 2020-01-28 06:56:36 --> Security Class Initialized
DEBUG - 2020-01-28 06:56:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 06:56:36 --> Input Class Initialized
INFO - 2020-01-28 06:56:36 --> Language Class Initialized
INFO - 2020-01-28 06:56:36 --> Language Class Initialized
INFO - 2020-01-28 06:56:36 --> Config Class Initialized
INFO - 2020-01-28 06:56:36 --> Loader Class Initialized
INFO - 2020-01-28 06:56:36 --> Helper loaded: url_helper
INFO - 2020-01-28 06:56:36 --> Helper loaded: file_helper
INFO - 2020-01-28 06:56:37 --> Helper loaded: form_helper
INFO - 2020-01-28 06:56:37 --> Helper loaded: my_helper
INFO - 2020-01-28 06:56:37 --> Database Driver Class Initialized
DEBUG - 2020-01-28 06:56:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 06:56:37 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 06:56:37 --> Controller Class Initialized
DEBUG - 2020-01-28 06:56:37 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_catatan/views/list.php
DEBUG - 2020-01-28 06:56:37 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 06:56:37 --> Final output sent to browser
DEBUG - 2020-01-28 06:56:37 --> Total execution time: 0.5490
INFO - 2020-01-28 07:03:30 --> Config Class Initialized
INFO - 2020-01-28 07:03:30 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:03:30 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:03:30 --> Utf8 Class Initialized
INFO - 2020-01-28 07:03:30 --> URI Class Initialized
INFO - 2020-01-28 07:03:30 --> Router Class Initialized
INFO - 2020-01-28 07:03:30 --> Output Class Initialized
INFO - 2020-01-28 07:03:30 --> Security Class Initialized
DEBUG - 2020-01-28 07:03:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:03:30 --> Input Class Initialized
INFO - 2020-01-28 07:03:30 --> Language Class Initialized
INFO - 2020-01-28 07:03:30 --> Language Class Initialized
INFO - 2020-01-28 07:03:30 --> Config Class Initialized
INFO - 2020-01-28 07:03:30 --> Loader Class Initialized
INFO - 2020-01-28 07:03:30 --> Helper loaded: url_helper
INFO - 2020-01-28 07:03:30 --> Helper loaded: file_helper
INFO - 2020-01-28 07:03:30 --> Helper loaded: form_helper
INFO - 2020-01-28 07:03:30 --> Helper loaded: my_helper
INFO - 2020-01-28 07:03:30 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:03:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:03:31 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:03:31 --> Controller Class Initialized
DEBUG - 2020-01-28 07:03:31 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_catatan/views/list.php
DEBUG - 2020-01-28 07:03:31 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 07:03:31 --> Final output sent to browser
DEBUG - 2020-01-28 07:03:31 --> Total execution time: 0.9250
INFO - 2020-01-28 07:04:05 --> Config Class Initialized
INFO - 2020-01-28 07:04:05 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:04:05 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:04:05 --> Utf8 Class Initialized
INFO - 2020-01-28 07:04:05 --> URI Class Initialized
INFO - 2020-01-28 07:04:05 --> Router Class Initialized
INFO - 2020-01-28 07:04:05 --> Output Class Initialized
INFO - 2020-01-28 07:04:05 --> Security Class Initialized
DEBUG - 2020-01-28 07:04:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:04:05 --> Input Class Initialized
INFO - 2020-01-28 07:04:05 --> Language Class Initialized
INFO - 2020-01-28 07:04:05 --> Language Class Initialized
INFO - 2020-01-28 07:04:05 --> Config Class Initialized
INFO - 2020-01-28 07:04:05 --> Loader Class Initialized
INFO - 2020-01-28 07:04:05 --> Helper loaded: url_helper
INFO - 2020-01-28 07:04:05 --> Helper loaded: file_helper
INFO - 2020-01-28 07:04:05 --> Helper loaded: form_helper
INFO - 2020-01-28 07:04:06 --> Helper loaded: my_helper
INFO - 2020-01-28 07:04:06 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:04:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:04:06 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:04:06 --> Controller Class Initialized
DEBUG - 2020-01-28 07:04:06 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_catatan/views/list.php
DEBUG - 2020-01-28 07:04:06 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 07:04:06 --> Final output sent to browser
DEBUG - 2020-01-28 07:04:06 --> Total execution time: 0.9085
INFO - 2020-01-28 07:04:39 --> Config Class Initialized
INFO - 2020-01-28 07:04:39 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:04:39 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:04:39 --> Utf8 Class Initialized
INFO - 2020-01-28 07:04:39 --> URI Class Initialized
INFO - 2020-01-28 07:04:39 --> Router Class Initialized
INFO - 2020-01-28 07:04:39 --> Output Class Initialized
INFO - 2020-01-28 07:04:39 --> Security Class Initialized
DEBUG - 2020-01-28 07:04:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:04:39 --> Input Class Initialized
INFO - 2020-01-28 07:04:39 --> Language Class Initialized
INFO - 2020-01-28 07:04:39 --> Language Class Initialized
INFO - 2020-01-28 07:04:39 --> Config Class Initialized
INFO - 2020-01-28 07:04:39 --> Loader Class Initialized
INFO - 2020-01-28 07:04:39 --> Helper loaded: url_helper
INFO - 2020-01-28 07:04:39 --> Helper loaded: file_helper
INFO - 2020-01-28 07:04:39 --> Helper loaded: form_helper
INFO - 2020-01-28 07:04:39 --> Helper loaded: my_helper
INFO - 2020-01-28 07:04:39 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:04:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:04:39 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:04:40 --> Controller Class Initialized
DEBUG - 2020-01-28 07:04:40 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_catatan/views/list.php
DEBUG - 2020-01-28 07:04:40 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 07:04:40 --> Final output sent to browser
DEBUG - 2020-01-28 07:04:40 --> Total execution time: 0.9990
INFO - 2020-01-28 07:05:21 --> Config Class Initialized
INFO - 2020-01-28 07:05:21 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:05:21 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:05:21 --> Utf8 Class Initialized
INFO - 2020-01-28 07:05:21 --> URI Class Initialized
INFO - 2020-01-28 07:05:21 --> Router Class Initialized
INFO - 2020-01-28 07:05:22 --> Output Class Initialized
INFO - 2020-01-28 07:05:22 --> Security Class Initialized
DEBUG - 2020-01-28 07:05:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:05:22 --> Input Class Initialized
INFO - 2020-01-28 07:05:22 --> Language Class Initialized
INFO - 2020-01-28 07:05:22 --> Language Class Initialized
INFO - 2020-01-28 07:05:22 --> Config Class Initialized
INFO - 2020-01-28 07:05:22 --> Loader Class Initialized
INFO - 2020-01-28 07:05:22 --> Helper loaded: url_helper
INFO - 2020-01-28 07:05:22 --> Helper loaded: file_helper
INFO - 2020-01-28 07:05:22 --> Helper loaded: form_helper
INFO - 2020-01-28 07:05:22 --> Helper loaded: my_helper
INFO - 2020-01-28 07:05:22 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:05:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:05:22 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:05:22 --> Controller Class Initialized
INFO - 2020-01-28 07:05:22 --> Final output sent to browser
DEBUG - 2020-01-28 07:05:22 --> Total execution time: 0.6936
INFO - 2020-01-28 07:05:25 --> Config Class Initialized
INFO - 2020-01-28 07:05:25 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:05:25 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:05:25 --> Utf8 Class Initialized
INFO - 2020-01-28 07:05:25 --> URI Class Initialized
INFO - 2020-01-28 07:05:26 --> Router Class Initialized
INFO - 2020-01-28 07:05:26 --> Output Class Initialized
INFO - 2020-01-28 07:05:26 --> Security Class Initialized
DEBUG - 2020-01-28 07:05:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:05:26 --> Input Class Initialized
INFO - 2020-01-28 07:05:26 --> Language Class Initialized
INFO - 2020-01-28 07:05:26 --> Language Class Initialized
INFO - 2020-01-28 07:05:26 --> Config Class Initialized
INFO - 2020-01-28 07:05:26 --> Loader Class Initialized
INFO - 2020-01-28 07:05:26 --> Helper loaded: url_helper
INFO - 2020-01-28 07:05:26 --> Helper loaded: file_helper
INFO - 2020-01-28 07:05:26 --> Helper loaded: form_helper
INFO - 2020-01-28 07:05:26 --> Helper loaded: my_helper
INFO - 2020-01-28 07:05:26 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:05:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:05:26 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:05:26 --> Controller Class Initialized
DEBUG - 2020-01-28 07:05:26 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_catatan/views/list.php
DEBUG - 2020-01-28 07:05:26 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 07:05:26 --> Final output sent to browser
DEBUG - 2020-01-28 07:05:26 --> Total execution time: 0.8280
INFO - 2020-01-28 07:05:39 --> Config Class Initialized
INFO - 2020-01-28 07:05:39 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:05:39 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:05:39 --> Utf8 Class Initialized
INFO - 2020-01-28 07:05:39 --> URI Class Initialized
INFO - 2020-01-28 07:05:39 --> Router Class Initialized
INFO - 2020-01-28 07:05:39 --> Output Class Initialized
INFO - 2020-01-28 07:05:39 --> Security Class Initialized
DEBUG - 2020-01-28 07:05:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:05:39 --> Input Class Initialized
INFO - 2020-01-28 07:05:39 --> Language Class Initialized
INFO - 2020-01-28 07:05:39 --> Language Class Initialized
INFO - 2020-01-28 07:05:39 --> Config Class Initialized
INFO - 2020-01-28 07:05:39 --> Loader Class Initialized
INFO - 2020-01-28 07:05:39 --> Helper loaded: url_helper
INFO - 2020-01-28 07:05:39 --> Helper loaded: file_helper
INFO - 2020-01-28 07:05:39 --> Helper loaded: form_helper
INFO - 2020-01-28 07:05:39 --> Helper loaded: my_helper
INFO - 2020-01-28 07:05:39 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:05:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:05:39 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:05:39 --> Controller Class Initialized
DEBUG - 2020-01-28 07:05:39 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/list.php
DEBUG - 2020-01-28 07:05:40 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 07:05:40 --> Final output sent to browser
DEBUG - 2020-01-28 07:05:40 --> Total execution time: 0.9043
INFO - 2020-01-28 07:05:41 --> Config Class Initialized
INFO - 2020-01-28 07:05:41 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:05:42 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:05:42 --> Utf8 Class Initialized
INFO - 2020-01-28 07:05:42 --> URI Class Initialized
INFO - 2020-01-28 07:05:42 --> Router Class Initialized
INFO - 2020-01-28 07:05:42 --> Output Class Initialized
INFO - 2020-01-28 07:05:42 --> Security Class Initialized
DEBUG - 2020-01-28 07:05:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:05:42 --> Input Class Initialized
INFO - 2020-01-28 07:05:42 --> Language Class Initialized
INFO - 2020-01-28 07:05:42 --> Language Class Initialized
INFO - 2020-01-28 07:05:42 --> Config Class Initialized
INFO - 2020-01-28 07:05:42 --> Loader Class Initialized
INFO - 2020-01-28 07:05:42 --> Helper loaded: url_helper
INFO - 2020-01-28 07:05:42 --> Helper loaded: file_helper
INFO - 2020-01-28 07:05:42 --> Helper loaded: form_helper
INFO - 2020-01-28 07:05:42 --> Helper loaded: my_helper
INFO - 2020-01-28 07:05:42 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:05:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:05:42 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:05:42 --> Controller Class Initialized
DEBUG - 2020-01-28 07:05:42 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_sampul1.php
INFO - 2020-01-28 07:05:42 --> Final output sent to browser
DEBUG - 2020-01-28 07:05:42 --> Total execution time: 0.8532
INFO - 2020-01-28 07:05:50 --> Config Class Initialized
INFO - 2020-01-28 07:05:50 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:05:50 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:05:50 --> Utf8 Class Initialized
INFO - 2020-01-28 07:05:50 --> URI Class Initialized
INFO - 2020-01-28 07:05:50 --> Router Class Initialized
INFO - 2020-01-28 07:05:50 --> Output Class Initialized
INFO - 2020-01-28 07:05:50 --> Security Class Initialized
DEBUG - 2020-01-28 07:05:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:05:50 --> Input Class Initialized
INFO - 2020-01-28 07:05:50 --> Language Class Initialized
INFO - 2020-01-28 07:05:50 --> Language Class Initialized
INFO - 2020-01-28 07:05:50 --> Config Class Initialized
INFO - 2020-01-28 07:05:50 --> Loader Class Initialized
INFO - 2020-01-28 07:05:50 --> Helper loaded: url_helper
INFO - 2020-01-28 07:05:50 --> Helper loaded: file_helper
INFO - 2020-01-28 07:05:50 --> Helper loaded: form_helper
INFO - 2020-01-28 07:05:50 --> Helper loaded: my_helper
INFO - 2020-01-28 07:05:50 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:05:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:05:50 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:05:50 --> Controller Class Initialized
DEBUG - 2020-01-28 07:05:50 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_sampul2.php
INFO - 2020-01-28 07:05:50 --> Final output sent to browser
DEBUG - 2020-01-28 07:05:50 --> Total execution time: 0.8762
INFO - 2020-01-28 07:06:26 --> Config Class Initialized
INFO - 2020-01-28 07:06:26 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:06:26 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:06:26 --> Utf8 Class Initialized
INFO - 2020-01-28 07:06:26 --> URI Class Initialized
INFO - 2020-01-28 07:06:26 --> Router Class Initialized
INFO - 2020-01-28 07:06:26 --> Output Class Initialized
INFO - 2020-01-28 07:06:26 --> Security Class Initialized
DEBUG - 2020-01-28 07:06:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:06:26 --> Input Class Initialized
INFO - 2020-01-28 07:06:26 --> Language Class Initialized
INFO - 2020-01-28 07:06:26 --> Language Class Initialized
INFO - 2020-01-28 07:06:26 --> Config Class Initialized
INFO - 2020-01-28 07:06:26 --> Loader Class Initialized
INFO - 2020-01-28 07:06:26 --> Helper loaded: url_helper
INFO - 2020-01-28 07:06:26 --> Helper loaded: file_helper
INFO - 2020-01-28 07:06:26 --> Helper loaded: form_helper
INFO - 2020-01-28 07:06:26 --> Helper loaded: my_helper
INFO - 2020-01-28 07:06:27 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:06:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:06:27 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:06:27 --> Controller Class Initialized
DEBUG - 2020-01-28 07:06:27 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_sampul4.php
INFO - 2020-01-28 07:06:27 --> Final output sent to browser
DEBUG - 2020-01-28 07:06:27 --> Total execution time: 0.8505
INFO - 2020-01-28 07:06:32 --> Config Class Initialized
INFO - 2020-01-28 07:06:32 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:06:32 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:06:32 --> Utf8 Class Initialized
INFO - 2020-01-28 07:06:32 --> URI Class Initialized
INFO - 2020-01-28 07:06:32 --> Router Class Initialized
INFO - 2020-01-28 07:06:32 --> Output Class Initialized
INFO - 2020-01-28 07:06:32 --> Security Class Initialized
DEBUG - 2020-01-28 07:06:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:06:32 --> Input Class Initialized
INFO - 2020-01-28 07:06:32 --> Language Class Initialized
INFO - 2020-01-28 07:06:32 --> Language Class Initialized
INFO - 2020-01-28 07:06:32 --> Config Class Initialized
INFO - 2020-01-28 07:06:32 --> Loader Class Initialized
INFO - 2020-01-28 07:06:32 --> Helper loaded: url_helper
INFO - 2020-01-28 07:06:32 --> Helper loaded: file_helper
INFO - 2020-01-28 07:06:32 --> Helper loaded: form_helper
INFO - 2020-01-28 07:06:32 --> Helper loaded: my_helper
INFO - 2020-01-28 07:06:32 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:06:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:06:32 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:06:33 --> Controller Class Initialized
ERROR - 2020-01-28 07:06:33 --> Severity: Warning --> Missing argument 2 for nilai_pre(), called in E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php on line 150 and defined E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 50
ERROR - 2020-01-28 07:06:33 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 67
ERROR - 2020-01-28 07:06:33 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 67
ERROR - 2020-01-28 07:06:33 --> Severity: Warning --> Missing argument 2 for nilai_pre(), called in E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php on line 150 and defined E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 50
ERROR - 2020-01-28 07:06:33 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 67
ERROR - 2020-01-28 07:06:33 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 67
ERROR - 2020-01-28 07:06:33 --> Severity: Warning --> Missing argument 2 for nilai_pre(), called in E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php on line 150 and defined E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 50
ERROR - 2020-01-28 07:06:33 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 67
ERROR - 2020-01-28 07:06:33 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 67
ERROR - 2020-01-28 07:06:33 --> Severity: Warning --> Missing argument 2 for nilai_pre(), called in E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php on line 150 and defined E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 50
ERROR - 2020-01-28 07:06:33 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 67
ERROR - 2020-01-28 07:06:33 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 67
ERROR - 2020-01-28 07:06:33 --> Severity: Warning --> Missing argument 2 for nilai_pre(), called in E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php on line 150 and defined E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 50
ERROR - 2020-01-28 07:06:33 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 67
ERROR - 2020-01-28 07:06:33 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 67
ERROR - 2020-01-28 07:06:33 --> Severity: Warning --> Missing argument 2 for nilai_huruf(), called in E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php on line 173 and defined E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 19
ERROR - 2020-01-28 07:06:33 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 37
ERROR - 2020-01-28 07:06:33 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 37
ERROR - 2020-01-28 07:06:33 --> Severity: Warning --> Missing argument 2 for nilai_pre(), called in E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php on line 235 and defined E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 50
ERROR - 2020-01-28 07:06:33 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 67
ERROR - 2020-01-28 07:06:33 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 67
ERROR - 2020-01-28 07:06:33 --> Severity: Warning --> Missing argument 2 for nilai_pre(), called in E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php on line 235 and defined E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 50
ERROR - 2020-01-28 07:06:33 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 67
ERROR - 2020-01-28 07:06:33 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 67
ERROR - 2020-01-28 07:06:33 --> Severity: Warning --> Missing argument 2 for nilai_huruf(), called in E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php on line 248 and defined E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 19
ERROR - 2020-01-28 07:06:33 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 37
ERROR - 2020-01-28 07:06:33 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 37
DEBUG - 2020-01-28 07:06:33 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:06:33 --> Final output sent to browser
DEBUG - 2020-01-28 07:06:34 --> Total execution time: 1.7785
INFO - 2020-01-28 07:09:32 --> Config Class Initialized
INFO - 2020-01-28 07:09:32 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:09:32 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:09:32 --> Utf8 Class Initialized
INFO - 2020-01-28 07:09:32 --> URI Class Initialized
INFO - 2020-01-28 07:09:32 --> Router Class Initialized
INFO - 2020-01-28 07:09:32 --> Output Class Initialized
INFO - 2020-01-28 07:09:32 --> Security Class Initialized
DEBUG - 2020-01-28 07:09:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:09:32 --> Input Class Initialized
INFO - 2020-01-28 07:09:32 --> Language Class Initialized
INFO - 2020-01-28 07:09:32 --> Language Class Initialized
INFO - 2020-01-28 07:09:32 --> Config Class Initialized
INFO - 2020-01-28 07:09:32 --> Loader Class Initialized
INFO - 2020-01-28 07:09:32 --> Helper loaded: url_helper
INFO - 2020-01-28 07:09:32 --> Helper loaded: file_helper
INFO - 2020-01-28 07:09:32 --> Helper loaded: form_helper
INFO - 2020-01-28 07:09:32 --> Helper loaded: my_helper
INFO - 2020-01-28 07:09:32 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:09:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:09:33 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:09:33 --> Controller Class Initialized
ERROR - 2020-01-28 07:09:33 --> Severity: Notice --> Undefined index: kkm E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 150
ERROR - 2020-01-28 07:09:33 --> Severity: Notice --> Undefined index: kkm E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 150
ERROR - 2020-01-28 07:09:33 --> Severity: Notice --> Undefined index: kkm E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 150
ERROR - 2020-01-28 07:09:33 --> Severity: Notice --> Undefined index: kkm E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 150
ERROR - 2020-01-28 07:09:33 --> Severity: Notice --> Undefined index: kkm E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 150
ERROR - 2020-01-28 07:09:33 --> Severity: Warning --> Missing argument 2 for nilai_huruf(), called in E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php on line 173 and defined E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 19
ERROR - 2020-01-28 07:09:33 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 37
ERROR - 2020-01-28 07:09:33 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 37
ERROR - 2020-01-28 07:09:33 --> Severity: Warning --> Missing argument 2 for nilai_pre(), called in E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php on line 235 and defined E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 50
ERROR - 2020-01-28 07:09:33 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 67
ERROR - 2020-01-28 07:09:33 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 67
ERROR - 2020-01-28 07:09:33 --> Severity: Warning --> Missing argument 2 for nilai_pre(), called in E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php on line 235 and defined E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 50
ERROR - 2020-01-28 07:09:33 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 67
ERROR - 2020-01-28 07:09:33 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 67
ERROR - 2020-01-28 07:09:33 --> Severity: Warning --> Missing argument 2 for nilai_huruf(), called in E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php on line 248 and defined E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 19
ERROR - 2020-01-28 07:09:33 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 37
ERROR - 2020-01-28 07:09:33 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 37
DEBUG - 2020-01-28 07:09:33 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:09:33 --> Final output sent to browser
DEBUG - 2020-01-28 07:09:33 --> Total execution time: 1.3492
INFO - 2020-01-28 07:10:17 --> Config Class Initialized
INFO - 2020-01-28 07:10:17 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:10:17 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:10:17 --> Utf8 Class Initialized
INFO - 2020-01-28 07:10:17 --> URI Class Initialized
INFO - 2020-01-28 07:10:17 --> Router Class Initialized
INFO - 2020-01-28 07:10:17 --> Output Class Initialized
INFO - 2020-01-28 07:10:17 --> Security Class Initialized
DEBUG - 2020-01-28 07:10:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:10:17 --> Input Class Initialized
INFO - 2020-01-28 07:10:17 --> Language Class Initialized
INFO - 2020-01-28 07:10:17 --> Language Class Initialized
INFO - 2020-01-28 07:10:17 --> Config Class Initialized
INFO - 2020-01-28 07:10:17 --> Loader Class Initialized
INFO - 2020-01-28 07:10:17 --> Helper loaded: url_helper
INFO - 2020-01-28 07:10:17 --> Helper loaded: file_helper
INFO - 2020-01-28 07:10:17 --> Helper loaded: form_helper
INFO - 2020-01-28 07:10:17 --> Helper loaded: my_helper
INFO - 2020-01-28 07:10:17 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:10:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:10:17 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:10:17 --> Controller Class Initialized
ERROR - 2020-01-28 07:10:17 --> Severity: Notice --> Undefined index: kkm E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 158
ERROR - 2020-01-28 07:10:17 --> Severity: Notice --> Undefined index: kkm E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 158
ERROR - 2020-01-28 07:10:18 --> Severity: Notice --> Undefined index: kkm E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 158
ERROR - 2020-01-28 07:10:18 --> Severity: Notice --> Undefined index: kkm E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 158
ERROR - 2020-01-28 07:10:18 --> Severity: Notice --> Undefined index: kkm E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 158
ERROR - 2020-01-28 07:10:18 --> Severity: Warning --> Missing argument 2 for nilai_huruf(), called in E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php on line 181 and defined E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 19
ERROR - 2020-01-28 07:10:18 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 37
ERROR - 2020-01-28 07:10:18 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 37
ERROR - 2020-01-28 07:10:18 --> Severity: Warning --> Missing argument 2 for nilai_pre(), called in E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php on line 243 and defined E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 50
ERROR - 2020-01-28 07:10:18 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 67
ERROR - 2020-01-28 07:10:18 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 67
ERROR - 2020-01-28 07:10:18 --> Severity: Warning --> Missing argument 2 for nilai_pre(), called in E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php on line 243 and defined E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 50
ERROR - 2020-01-28 07:10:18 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 67
ERROR - 2020-01-28 07:10:18 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 67
ERROR - 2020-01-28 07:10:18 --> Severity: Warning --> Missing argument 2 for nilai_huruf(), called in E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php on line 256 and defined E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 19
ERROR - 2020-01-28 07:10:18 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 37
ERROR - 2020-01-28 07:10:18 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 37
DEBUG - 2020-01-28 07:10:18 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:10:18 --> Final output sent to browser
DEBUG - 2020-01-28 07:10:18 --> Total execution time: 1.3352
INFO - 2020-01-28 07:11:16 --> Config Class Initialized
INFO - 2020-01-28 07:11:16 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:11:16 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:11:16 --> Utf8 Class Initialized
INFO - 2020-01-28 07:11:16 --> URI Class Initialized
INFO - 2020-01-28 07:11:16 --> Router Class Initialized
INFO - 2020-01-28 07:11:16 --> Output Class Initialized
INFO - 2020-01-28 07:11:16 --> Security Class Initialized
DEBUG - 2020-01-28 07:11:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:11:16 --> Input Class Initialized
INFO - 2020-01-28 07:11:16 --> Language Class Initialized
INFO - 2020-01-28 07:11:16 --> Language Class Initialized
INFO - 2020-01-28 07:11:16 --> Config Class Initialized
INFO - 2020-01-28 07:11:16 --> Loader Class Initialized
INFO - 2020-01-28 07:11:17 --> Helper loaded: url_helper
INFO - 2020-01-28 07:11:17 --> Helper loaded: file_helper
INFO - 2020-01-28 07:11:17 --> Helper loaded: form_helper
INFO - 2020-01-28 07:11:17 --> Helper loaded: my_helper
INFO - 2020-01-28 07:11:17 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:11:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:11:17 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:11:17 --> Controller Class Initialized
ERROR - 2020-01-28 07:11:17 --> Severity: Notice --> Undefined index: kkm E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 99
ERROR - 2020-01-28 07:11:17 --> Severity: Notice --> Undefined index: kkm E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 151
ERROR - 2020-01-28 07:11:17 --> Severity: Notice --> Undefined index: kkm E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 151
ERROR - 2020-01-28 07:11:17 --> Severity: Notice --> Undefined index: kkm E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 151
ERROR - 2020-01-28 07:11:17 --> Severity: Notice --> Undefined index: kkm E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 151
ERROR - 2020-01-28 07:11:17 --> Severity: Notice --> Undefined index: kkm E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 151
ERROR - 2020-01-28 07:11:17 --> Severity: Warning --> Missing argument 2 for nilai_huruf(), called in E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php on line 174 and defined E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 19
ERROR - 2020-01-28 07:11:17 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 37
ERROR - 2020-01-28 07:11:17 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 37
ERROR - 2020-01-28 07:11:17 --> Severity: Warning --> Missing argument 2 for nilai_pre(), called in E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php on line 236 and defined E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 50
ERROR - 2020-01-28 07:11:17 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 67
ERROR - 2020-01-28 07:11:17 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 67
ERROR - 2020-01-28 07:11:17 --> Severity: Warning --> Missing argument 2 for nilai_pre(), called in E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php on line 236 and defined E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 50
ERROR - 2020-01-28 07:11:17 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 67
ERROR - 2020-01-28 07:11:17 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 67
ERROR - 2020-01-28 07:11:17 --> Severity: Warning --> Missing argument 2 for nilai_huruf(), called in E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php on line 249 and defined E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 19
ERROR - 2020-01-28 07:11:17 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 37
ERROR - 2020-01-28 07:11:17 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 37
DEBUG - 2020-01-28 07:11:17 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:11:17 --> Final output sent to browser
DEBUG - 2020-01-28 07:11:17 --> Total execution time: 1.4697
INFO - 2020-01-28 07:12:17 --> Config Class Initialized
INFO - 2020-01-28 07:12:17 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:12:17 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:12:17 --> Utf8 Class Initialized
INFO - 2020-01-28 07:12:17 --> URI Class Initialized
INFO - 2020-01-28 07:12:17 --> Router Class Initialized
INFO - 2020-01-28 07:12:17 --> Output Class Initialized
INFO - 2020-01-28 07:12:17 --> Security Class Initialized
DEBUG - 2020-01-28 07:12:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:12:17 --> Input Class Initialized
INFO - 2020-01-28 07:12:17 --> Language Class Initialized
INFO - 2020-01-28 07:12:18 --> Language Class Initialized
INFO - 2020-01-28 07:12:18 --> Config Class Initialized
INFO - 2020-01-28 07:12:18 --> Loader Class Initialized
INFO - 2020-01-28 07:12:18 --> Helper loaded: url_helper
INFO - 2020-01-28 07:12:18 --> Helper loaded: file_helper
INFO - 2020-01-28 07:12:18 --> Helper loaded: form_helper
INFO - 2020-01-28 07:12:18 --> Helper loaded: my_helper
INFO - 2020-01-28 07:12:18 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:12:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:12:18 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:12:18 --> Controller Class Initialized
ERROR - 2020-01-28 07:12:18 --> Severity: Warning --> Missing argument 2 for nilai_huruf(), called in E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php on line 174 and defined E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 19
ERROR - 2020-01-28 07:12:18 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 37
ERROR - 2020-01-28 07:12:18 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 37
ERROR - 2020-01-28 07:12:18 --> Severity: Warning --> Missing argument 2 for nilai_pre(), called in E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php on line 236 and defined E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 50
ERROR - 2020-01-28 07:12:18 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 67
ERROR - 2020-01-28 07:12:18 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 67
ERROR - 2020-01-28 07:12:18 --> Severity: Warning --> Missing argument 2 for nilai_pre(), called in E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php on line 236 and defined E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 50
ERROR - 2020-01-28 07:12:18 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 67
ERROR - 2020-01-28 07:12:18 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 67
ERROR - 2020-01-28 07:12:18 --> Severity: Warning --> Missing argument 2 for nilai_huruf(), called in E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php on line 249 and defined E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 19
ERROR - 2020-01-28 07:12:18 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 37
ERROR - 2020-01-28 07:12:18 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 37
DEBUG - 2020-01-28 07:12:18 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:12:18 --> Final output sent to browser
DEBUG - 2020-01-28 07:12:18 --> Total execution time: 1.2310
INFO - 2020-01-28 07:12:35 --> Config Class Initialized
INFO - 2020-01-28 07:12:35 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:12:35 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:12:35 --> Utf8 Class Initialized
INFO - 2020-01-28 07:12:35 --> URI Class Initialized
INFO - 2020-01-28 07:12:35 --> Router Class Initialized
INFO - 2020-01-28 07:12:35 --> Output Class Initialized
INFO - 2020-01-28 07:12:35 --> Security Class Initialized
DEBUG - 2020-01-28 07:12:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:12:35 --> Input Class Initialized
INFO - 2020-01-28 07:12:35 --> Language Class Initialized
INFO - 2020-01-28 07:12:35 --> Language Class Initialized
INFO - 2020-01-28 07:12:35 --> Config Class Initialized
INFO - 2020-01-28 07:12:35 --> Loader Class Initialized
INFO - 2020-01-28 07:12:35 --> Helper loaded: url_helper
INFO - 2020-01-28 07:12:35 --> Helper loaded: file_helper
INFO - 2020-01-28 07:12:35 --> Helper loaded: form_helper
INFO - 2020-01-28 07:12:35 --> Helper loaded: my_helper
INFO - 2020-01-28 07:12:35 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:12:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:12:35 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:12:35 --> Controller Class Initialized
ERROR - 2020-01-28 07:12:35 --> Severity: Warning --> Missing argument 2 for nilai_pre(), called in E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php on line 236 and defined E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 50
ERROR - 2020-01-28 07:12:35 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 67
ERROR - 2020-01-28 07:12:35 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 67
ERROR - 2020-01-28 07:12:36 --> Severity: Warning --> Missing argument 2 for nilai_pre(), called in E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php on line 236 and defined E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 50
ERROR - 2020-01-28 07:12:36 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 67
ERROR - 2020-01-28 07:12:36 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 67
ERROR - 2020-01-28 07:12:36 --> Severity: Warning --> Missing argument 2 for nilai_huruf(), called in E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php on line 249 and defined E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 19
ERROR - 2020-01-28 07:12:36 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 37
ERROR - 2020-01-28 07:12:36 --> Severity: Notice --> Undefined variable: nilai E:\xampp\htdocs\_2020\nilaik13_ci\application\helpers\my_helper.php 37
DEBUG - 2020-01-28 07:12:36 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:12:36 --> Final output sent to browser
DEBUG - 2020-01-28 07:12:36 --> Total execution time: 1.0788
INFO - 2020-01-28 07:14:18 --> Config Class Initialized
INFO - 2020-01-28 07:14:18 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:14:18 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:14:18 --> Utf8 Class Initialized
INFO - 2020-01-28 07:14:18 --> URI Class Initialized
INFO - 2020-01-28 07:14:18 --> Router Class Initialized
INFO - 2020-01-28 07:14:18 --> Output Class Initialized
INFO - 2020-01-28 07:14:18 --> Security Class Initialized
DEBUG - 2020-01-28 07:14:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:14:19 --> Input Class Initialized
INFO - 2020-01-28 07:14:19 --> Language Class Initialized
INFO - 2020-01-28 07:14:19 --> Language Class Initialized
INFO - 2020-01-28 07:14:19 --> Config Class Initialized
INFO - 2020-01-28 07:14:19 --> Loader Class Initialized
INFO - 2020-01-28 07:14:19 --> Helper loaded: url_helper
INFO - 2020-01-28 07:14:19 --> Helper loaded: file_helper
INFO - 2020-01-28 07:14:19 --> Helper loaded: form_helper
INFO - 2020-01-28 07:14:19 --> Helper loaded: my_helper
INFO - 2020-01-28 07:14:19 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:14:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:14:19 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:14:19 --> Controller Class Initialized
DEBUG - 2020-01-28 07:14:19 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:14:19 --> Final output sent to browser
DEBUG - 2020-01-28 07:14:19 --> Total execution time: 0.8105
INFO - 2020-01-28 07:17:59 --> Config Class Initialized
INFO - 2020-01-28 07:17:59 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:17:59 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:17:59 --> Utf8 Class Initialized
INFO - 2020-01-28 07:17:59 --> URI Class Initialized
INFO - 2020-01-28 07:17:59 --> Router Class Initialized
INFO - 2020-01-28 07:17:59 --> Output Class Initialized
INFO - 2020-01-28 07:18:00 --> Security Class Initialized
DEBUG - 2020-01-28 07:18:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:18:00 --> Input Class Initialized
INFO - 2020-01-28 07:18:00 --> Language Class Initialized
INFO - 2020-01-28 07:18:00 --> Language Class Initialized
INFO - 2020-01-28 07:18:00 --> Config Class Initialized
INFO - 2020-01-28 07:18:00 --> Loader Class Initialized
INFO - 2020-01-28 07:18:00 --> Helper loaded: url_helper
INFO - 2020-01-28 07:18:00 --> Helper loaded: file_helper
INFO - 2020-01-28 07:18:00 --> Helper loaded: form_helper
INFO - 2020-01-28 07:18:00 --> Helper loaded: my_helper
INFO - 2020-01-28 07:18:00 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:18:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:18:00 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:18:00 --> Controller Class Initialized
DEBUG - 2020-01-28 07:18:00 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:18:00 --> Final output sent to browser
DEBUG - 2020-01-28 07:18:00 --> Total execution time: 0.9268
INFO - 2020-01-28 07:18:23 --> Config Class Initialized
INFO - 2020-01-28 07:18:23 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:18:23 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:18:23 --> Utf8 Class Initialized
INFO - 2020-01-28 07:18:23 --> URI Class Initialized
INFO - 2020-01-28 07:18:23 --> Router Class Initialized
INFO - 2020-01-28 07:18:23 --> Output Class Initialized
INFO - 2020-01-28 07:18:23 --> Security Class Initialized
DEBUG - 2020-01-28 07:18:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:18:23 --> Input Class Initialized
INFO - 2020-01-28 07:18:23 --> Language Class Initialized
INFO - 2020-01-28 07:18:23 --> Language Class Initialized
INFO - 2020-01-28 07:18:23 --> Config Class Initialized
INFO - 2020-01-28 07:18:23 --> Loader Class Initialized
INFO - 2020-01-28 07:18:23 --> Helper loaded: url_helper
INFO - 2020-01-28 07:18:23 --> Helper loaded: file_helper
INFO - 2020-01-28 07:18:23 --> Helper loaded: form_helper
INFO - 2020-01-28 07:18:23 --> Helper loaded: my_helper
INFO - 2020-01-28 07:18:23 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:18:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:18:23 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:18:23 --> Controller Class Initialized
DEBUG - 2020-01-28 07:18:23 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:18:23 --> Final output sent to browser
DEBUG - 2020-01-28 07:18:23 --> Total execution time: 0.8094
INFO - 2020-01-28 07:21:49 --> Config Class Initialized
INFO - 2020-01-28 07:21:49 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:21:49 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:21:49 --> Utf8 Class Initialized
INFO - 2020-01-28 07:21:49 --> URI Class Initialized
INFO - 2020-01-28 07:21:49 --> Router Class Initialized
INFO - 2020-01-28 07:21:49 --> Output Class Initialized
INFO - 2020-01-28 07:21:49 --> Security Class Initialized
DEBUG - 2020-01-28 07:21:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:21:49 --> Input Class Initialized
INFO - 2020-01-28 07:21:49 --> Language Class Initialized
INFO - 2020-01-28 07:21:49 --> Language Class Initialized
INFO - 2020-01-28 07:21:49 --> Config Class Initialized
INFO - 2020-01-28 07:21:49 --> Loader Class Initialized
INFO - 2020-01-28 07:21:49 --> Helper loaded: url_helper
INFO - 2020-01-28 07:21:49 --> Helper loaded: file_helper
INFO - 2020-01-28 07:21:49 --> Helper loaded: form_helper
INFO - 2020-01-28 07:21:49 --> Helper loaded: my_helper
INFO - 2020-01-28 07:21:49 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:21:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:21:50 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:21:50 --> Controller Class Initialized
ERROR - 2020-01-28 07:21:50 --> Severity: Notice --> Undefined variable: det_siswa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 285
DEBUG - 2020-01-28 07:21:50 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:21:50 --> Final output sent to browser
DEBUG - 2020-01-28 07:21:50 --> Total execution time: 0.8973
INFO - 2020-01-28 07:22:28 --> Config Class Initialized
INFO - 2020-01-28 07:22:28 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:22:28 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:22:28 --> Utf8 Class Initialized
INFO - 2020-01-28 07:22:28 --> URI Class Initialized
INFO - 2020-01-28 07:22:28 --> Router Class Initialized
INFO - 2020-01-28 07:22:28 --> Output Class Initialized
INFO - 2020-01-28 07:22:28 --> Security Class Initialized
DEBUG - 2020-01-28 07:22:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:22:28 --> Input Class Initialized
INFO - 2020-01-28 07:22:28 --> Language Class Initialized
INFO - 2020-01-28 07:22:28 --> Language Class Initialized
INFO - 2020-01-28 07:22:28 --> Config Class Initialized
INFO - 2020-01-28 07:22:28 --> Loader Class Initialized
INFO - 2020-01-28 07:22:28 --> Helper loaded: url_helper
INFO - 2020-01-28 07:22:28 --> Helper loaded: file_helper
INFO - 2020-01-28 07:22:28 --> Helper loaded: form_helper
INFO - 2020-01-28 07:22:28 --> Helper loaded: my_helper
INFO - 2020-01-28 07:22:28 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:22:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:22:28 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:22:28 --> Controller Class Initialized
DEBUG - 2020-01-28 07:22:28 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:22:28 --> Final output sent to browser
DEBUG - 2020-01-28 07:22:29 --> Total execution time: 0.8227
INFO - 2020-01-28 07:22:36 --> Config Class Initialized
INFO - 2020-01-28 07:22:36 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:22:36 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:22:36 --> Utf8 Class Initialized
INFO - 2020-01-28 07:22:36 --> URI Class Initialized
INFO - 2020-01-28 07:22:36 --> Router Class Initialized
INFO - 2020-01-28 07:22:36 --> Output Class Initialized
INFO - 2020-01-28 07:22:36 --> Security Class Initialized
DEBUG - 2020-01-28 07:22:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:22:36 --> Input Class Initialized
INFO - 2020-01-28 07:22:36 --> Language Class Initialized
INFO - 2020-01-28 07:22:36 --> Language Class Initialized
INFO - 2020-01-28 07:22:36 --> Config Class Initialized
INFO - 2020-01-28 07:22:36 --> Loader Class Initialized
INFO - 2020-01-28 07:22:36 --> Helper loaded: url_helper
INFO - 2020-01-28 07:22:36 --> Helper loaded: file_helper
INFO - 2020-01-28 07:22:36 --> Helper loaded: form_helper
INFO - 2020-01-28 07:22:36 --> Helper loaded: my_helper
INFO - 2020-01-28 07:22:37 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:22:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:22:37 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:22:37 --> Controller Class Initialized
DEBUG - 2020-01-28 07:22:37 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:22:37 --> Final output sent to browser
DEBUG - 2020-01-28 07:22:37 --> Total execution time: 0.9360
INFO - 2020-01-28 07:23:22 --> Config Class Initialized
INFO - 2020-01-28 07:23:22 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:23:22 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:23:22 --> Utf8 Class Initialized
INFO - 2020-01-28 07:23:22 --> URI Class Initialized
INFO - 2020-01-28 07:23:23 --> Router Class Initialized
INFO - 2020-01-28 07:23:23 --> Output Class Initialized
INFO - 2020-01-28 07:23:23 --> Security Class Initialized
DEBUG - 2020-01-28 07:23:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:23:23 --> Input Class Initialized
INFO - 2020-01-28 07:23:23 --> Language Class Initialized
INFO - 2020-01-28 07:23:23 --> Language Class Initialized
INFO - 2020-01-28 07:23:23 --> Config Class Initialized
INFO - 2020-01-28 07:23:23 --> Loader Class Initialized
INFO - 2020-01-28 07:23:23 --> Helper loaded: url_helper
INFO - 2020-01-28 07:23:23 --> Helper loaded: file_helper
INFO - 2020-01-28 07:23:23 --> Helper loaded: form_helper
INFO - 2020-01-28 07:23:23 --> Helper loaded: my_helper
INFO - 2020-01-28 07:23:23 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:23:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:23:23 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:23:23 --> Controller Class Initialized
DEBUG - 2020-01-28 07:23:23 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:23:23 --> Final output sent to browser
DEBUG - 2020-01-28 07:23:23 --> Total execution time: 0.9008
INFO - 2020-01-28 07:25:09 --> Config Class Initialized
INFO - 2020-01-28 07:25:09 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:25:09 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:25:09 --> Utf8 Class Initialized
INFO - 2020-01-28 07:25:09 --> URI Class Initialized
INFO - 2020-01-28 07:25:09 --> Router Class Initialized
INFO - 2020-01-28 07:25:09 --> Output Class Initialized
INFO - 2020-01-28 07:25:09 --> Security Class Initialized
DEBUG - 2020-01-28 07:25:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:25:09 --> Input Class Initialized
INFO - 2020-01-28 07:25:09 --> Language Class Initialized
INFO - 2020-01-28 07:25:09 --> Language Class Initialized
INFO - 2020-01-28 07:25:09 --> Config Class Initialized
INFO - 2020-01-28 07:25:09 --> Loader Class Initialized
INFO - 2020-01-28 07:25:09 --> Helper loaded: url_helper
INFO - 2020-01-28 07:25:09 --> Helper loaded: file_helper
INFO - 2020-01-28 07:25:09 --> Helper loaded: form_helper
INFO - 2020-01-28 07:25:09 --> Helper loaded: my_helper
INFO - 2020-01-28 07:25:09 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:25:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:25:10 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:25:10 --> Controller Class Initialized
ERROR - 2020-01-28 07:25:10 --> Severity: Notice --> Undefined index: Ananda Adi 3 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 333
DEBUG - 2020-01-28 07:25:10 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:25:10 --> Final output sent to browser
DEBUG - 2020-01-28 07:25:10 --> Total execution time: 0.8998
INFO - 2020-01-28 07:25:21 --> Config Class Initialized
INFO - 2020-01-28 07:25:21 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:25:22 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:25:22 --> Utf8 Class Initialized
INFO - 2020-01-28 07:25:22 --> URI Class Initialized
INFO - 2020-01-28 07:25:22 --> Router Class Initialized
INFO - 2020-01-28 07:25:22 --> Output Class Initialized
INFO - 2020-01-28 07:25:22 --> Security Class Initialized
DEBUG - 2020-01-28 07:25:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:25:22 --> Input Class Initialized
INFO - 2020-01-28 07:25:22 --> Language Class Initialized
INFO - 2020-01-28 07:25:22 --> Language Class Initialized
INFO - 2020-01-28 07:25:22 --> Config Class Initialized
INFO - 2020-01-28 07:25:22 --> Loader Class Initialized
INFO - 2020-01-28 07:25:22 --> Helper loaded: url_helper
INFO - 2020-01-28 07:25:22 --> Helper loaded: file_helper
INFO - 2020-01-28 07:25:22 --> Helper loaded: form_helper
INFO - 2020-01-28 07:25:22 --> Helper loaded: my_helper
INFO - 2020-01-28 07:25:22 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:25:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:25:22 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:25:22 --> Controller Class Initialized
DEBUG - 2020-01-28 07:25:22 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:25:22 --> Final output sent to browser
DEBUG - 2020-01-28 07:25:22 --> Total execution time: 0.8492
INFO - 2020-01-28 07:25:24 --> Config Class Initialized
INFO - 2020-01-28 07:25:24 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:25:24 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:25:24 --> Utf8 Class Initialized
INFO - 2020-01-28 07:25:24 --> URI Class Initialized
INFO - 2020-01-28 07:25:24 --> Router Class Initialized
INFO - 2020-01-28 07:25:24 --> Output Class Initialized
INFO - 2020-01-28 07:25:24 --> Security Class Initialized
DEBUG - 2020-01-28 07:25:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:25:24 --> Input Class Initialized
INFO - 2020-01-28 07:25:24 --> Language Class Initialized
INFO - 2020-01-28 07:25:24 --> Language Class Initialized
INFO - 2020-01-28 07:25:24 --> Config Class Initialized
INFO - 2020-01-28 07:25:24 --> Loader Class Initialized
INFO - 2020-01-28 07:25:24 --> Helper loaded: url_helper
INFO - 2020-01-28 07:25:24 --> Helper loaded: file_helper
INFO - 2020-01-28 07:25:24 --> Helper loaded: form_helper
INFO - 2020-01-28 07:25:24 --> Helper loaded: my_helper
INFO - 2020-01-28 07:25:25 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:25:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:25:25 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:25:25 --> Controller Class Initialized
DEBUG - 2020-01-28 07:25:25 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:25:25 --> Final output sent to browser
DEBUG - 2020-01-28 07:25:25 --> Total execution time: 0.8001
INFO - 2020-01-28 07:27:04 --> Config Class Initialized
INFO - 2020-01-28 07:27:04 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:27:04 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:27:04 --> Utf8 Class Initialized
INFO - 2020-01-28 07:27:04 --> URI Class Initialized
INFO - 2020-01-28 07:27:04 --> Router Class Initialized
INFO - 2020-01-28 07:27:04 --> Output Class Initialized
INFO - 2020-01-28 07:27:04 --> Security Class Initialized
DEBUG - 2020-01-28 07:27:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:27:04 --> Input Class Initialized
INFO - 2020-01-28 07:27:04 --> Language Class Initialized
INFO - 2020-01-28 07:27:04 --> Language Class Initialized
INFO - 2020-01-28 07:27:05 --> Config Class Initialized
INFO - 2020-01-28 07:27:05 --> Loader Class Initialized
INFO - 2020-01-28 07:27:05 --> Helper loaded: url_helper
INFO - 2020-01-28 07:27:05 --> Helper loaded: file_helper
INFO - 2020-01-28 07:27:05 --> Helper loaded: form_helper
INFO - 2020-01-28 07:27:05 --> Helper loaded: my_helper
INFO - 2020-01-28 07:27:05 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:27:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:27:05 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:27:05 --> Controller Class Initialized
DEBUG - 2020-01-28 07:27:05 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:27:05 --> Final output sent to browser
DEBUG - 2020-01-28 07:27:05 --> Total execution time: 0.8184
INFO - 2020-01-28 07:27:57 --> Config Class Initialized
INFO - 2020-01-28 07:27:57 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:27:57 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:27:57 --> Utf8 Class Initialized
INFO - 2020-01-28 07:27:57 --> URI Class Initialized
INFO - 2020-01-28 07:27:57 --> Router Class Initialized
INFO - 2020-01-28 07:27:57 --> Output Class Initialized
INFO - 2020-01-28 07:27:57 --> Security Class Initialized
DEBUG - 2020-01-28 07:27:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:27:57 --> Input Class Initialized
INFO - 2020-01-28 07:27:57 --> Language Class Initialized
INFO - 2020-01-28 07:27:57 --> Language Class Initialized
INFO - 2020-01-28 07:27:57 --> Config Class Initialized
INFO - 2020-01-28 07:27:57 --> Loader Class Initialized
INFO - 2020-01-28 07:27:57 --> Helper loaded: url_helper
INFO - 2020-01-28 07:27:57 --> Helper loaded: file_helper
INFO - 2020-01-28 07:27:57 --> Helper loaded: form_helper
INFO - 2020-01-28 07:27:57 --> Helper loaded: my_helper
INFO - 2020-01-28 07:27:57 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:27:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:27:57 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:27:57 --> Controller Class Initialized
DEBUG - 2020-01-28 07:27:57 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:27:57 --> Final output sent to browser
DEBUG - 2020-01-28 07:27:57 --> Total execution time: 0.8613
INFO - 2020-01-28 07:28:08 --> Config Class Initialized
INFO - 2020-01-28 07:28:08 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:28:08 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:28:08 --> Utf8 Class Initialized
INFO - 2020-01-28 07:28:08 --> URI Class Initialized
INFO - 2020-01-28 07:28:08 --> Router Class Initialized
INFO - 2020-01-28 07:28:08 --> Output Class Initialized
INFO - 2020-01-28 07:28:08 --> Security Class Initialized
DEBUG - 2020-01-28 07:28:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:28:08 --> Input Class Initialized
INFO - 2020-01-28 07:28:08 --> Language Class Initialized
INFO - 2020-01-28 07:28:08 --> Language Class Initialized
INFO - 2020-01-28 07:28:08 --> Config Class Initialized
INFO - 2020-01-28 07:28:08 --> Loader Class Initialized
INFO - 2020-01-28 07:28:08 --> Helper loaded: url_helper
INFO - 2020-01-28 07:28:08 --> Helper loaded: file_helper
INFO - 2020-01-28 07:28:08 --> Helper loaded: form_helper
INFO - 2020-01-28 07:28:08 --> Helper loaded: my_helper
INFO - 2020-01-28 07:28:08 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:28:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:28:09 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:28:09 --> Controller Class Initialized
DEBUG - 2020-01-28 07:28:09 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:28:09 --> Final output sent to browser
DEBUG - 2020-01-28 07:28:09 --> Total execution time: 0.9119
INFO - 2020-01-28 07:28:18 --> Config Class Initialized
INFO - 2020-01-28 07:28:18 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:28:19 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:28:19 --> Utf8 Class Initialized
INFO - 2020-01-28 07:28:19 --> URI Class Initialized
INFO - 2020-01-28 07:28:19 --> Router Class Initialized
INFO - 2020-01-28 07:28:19 --> Output Class Initialized
INFO - 2020-01-28 07:28:19 --> Security Class Initialized
DEBUG - 2020-01-28 07:28:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:28:19 --> Input Class Initialized
INFO - 2020-01-28 07:28:19 --> Language Class Initialized
INFO - 2020-01-28 07:28:19 --> Language Class Initialized
INFO - 2020-01-28 07:28:19 --> Config Class Initialized
INFO - 2020-01-28 07:28:19 --> Loader Class Initialized
INFO - 2020-01-28 07:28:19 --> Helper loaded: url_helper
INFO - 2020-01-28 07:28:19 --> Helper loaded: file_helper
INFO - 2020-01-28 07:28:19 --> Helper loaded: form_helper
INFO - 2020-01-28 07:28:19 --> Helper loaded: my_helper
INFO - 2020-01-28 07:28:19 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:28:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:28:19 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:28:19 --> Controller Class Initialized
DEBUG - 2020-01-28 07:28:19 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:28:19 --> Final output sent to browser
DEBUG - 2020-01-28 07:28:19 --> Total execution time: 0.7799
INFO - 2020-01-28 07:28:41 --> Config Class Initialized
INFO - 2020-01-28 07:28:41 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:28:41 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:28:41 --> Utf8 Class Initialized
INFO - 2020-01-28 07:28:41 --> URI Class Initialized
INFO - 2020-01-28 07:28:41 --> Router Class Initialized
INFO - 2020-01-28 07:28:41 --> Output Class Initialized
INFO - 2020-01-28 07:28:41 --> Security Class Initialized
DEBUG - 2020-01-28 07:28:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:28:41 --> Input Class Initialized
INFO - 2020-01-28 07:28:41 --> Language Class Initialized
INFO - 2020-01-28 07:28:41 --> Language Class Initialized
INFO - 2020-01-28 07:28:41 --> Config Class Initialized
INFO - 2020-01-28 07:28:41 --> Loader Class Initialized
INFO - 2020-01-28 07:28:41 --> Helper loaded: url_helper
INFO - 2020-01-28 07:28:41 --> Helper loaded: file_helper
INFO - 2020-01-28 07:28:41 --> Helper loaded: form_helper
INFO - 2020-01-28 07:28:41 --> Helper loaded: my_helper
INFO - 2020-01-28 07:28:41 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:28:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:28:41 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:28:41 --> Controller Class Initialized
DEBUG - 2020-01-28 07:28:41 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:28:41 --> Final output sent to browser
DEBUG - 2020-01-28 07:28:42 --> Total execution time: 0.8297
INFO - 2020-01-28 07:28:48 --> Config Class Initialized
INFO - 2020-01-28 07:28:48 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:28:48 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:28:48 --> Utf8 Class Initialized
INFO - 2020-01-28 07:28:48 --> URI Class Initialized
INFO - 2020-01-28 07:28:48 --> Router Class Initialized
INFO - 2020-01-28 07:28:48 --> Output Class Initialized
INFO - 2020-01-28 07:28:48 --> Security Class Initialized
DEBUG - 2020-01-28 07:28:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:28:48 --> Input Class Initialized
INFO - 2020-01-28 07:28:48 --> Language Class Initialized
INFO - 2020-01-28 07:28:48 --> Language Class Initialized
INFO - 2020-01-28 07:28:48 --> Config Class Initialized
INFO - 2020-01-28 07:28:48 --> Loader Class Initialized
INFO - 2020-01-28 07:28:48 --> Helper loaded: url_helper
INFO - 2020-01-28 07:28:48 --> Helper loaded: file_helper
INFO - 2020-01-28 07:28:48 --> Helper loaded: form_helper
INFO - 2020-01-28 07:28:48 --> Helper loaded: my_helper
INFO - 2020-01-28 07:28:48 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:28:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:28:48 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:28:48 --> Controller Class Initialized
DEBUG - 2020-01-28 07:28:48 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:28:48 --> Final output sent to browser
DEBUG - 2020-01-28 07:28:49 --> Total execution time: 0.8056
INFO - 2020-01-28 07:29:02 --> Config Class Initialized
INFO - 2020-01-28 07:29:02 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:29:02 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:29:02 --> Utf8 Class Initialized
INFO - 2020-01-28 07:29:02 --> URI Class Initialized
INFO - 2020-01-28 07:29:02 --> Router Class Initialized
INFO - 2020-01-28 07:29:02 --> Output Class Initialized
INFO - 2020-01-28 07:29:02 --> Security Class Initialized
DEBUG - 2020-01-28 07:29:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:29:02 --> Input Class Initialized
INFO - 2020-01-28 07:29:02 --> Language Class Initialized
INFO - 2020-01-28 07:29:02 --> Language Class Initialized
INFO - 2020-01-28 07:29:02 --> Config Class Initialized
INFO - 2020-01-28 07:29:02 --> Loader Class Initialized
INFO - 2020-01-28 07:29:02 --> Helper loaded: url_helper
INFO - 2020-01-28 07:29:02 --> Helper loaded: file_helper
INFO - 2020-01-28 07:29:02 --> Helper loaded: form_helper
INFO - 2020-01-28 07:29:02 --> Helper loaded: my_helper
INFO - 2020-01-28 07:29:02 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:29:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:29:03 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:29:03 --> Controller Class Initialized
DEBUG - 2020-01-28 07:29:03 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:29:03 --> Final output sent to browser
DEBUG - 2020-01-28 07:29:03 --> Total execution time: 1.1297
INFO - 2020-01-28 07:29:50 --> Config Class Initialized
INFO - 2020-01-28 07:29:50 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:29:50 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:29:50 --> Utf8 Class Initialized
INFO - 2020-01-28 07:29:50 --> URI Class Initialized
INFO - 2020-01-28 07:29:50 --> Router Class Initialized
INFO - 2020-01-28 07:29:50 --> Output Class Initialized
INFO - 2020-01-28 07:29:50 --> Security Class Initialized
DEBUG - 2020-01-28 07:29:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:29:50 --> Input Class Initialized
INFO - 2020-01-28 07:29:50 --> Language Class Initialized
INFO - 2020-01-28 07:29:50 --> Language Class Initialized
INFO - 2020-01-28 07:29:50 --> Config Class Initialized
INFO - 2020-01-28 07:29:50 --> Loader Class Initialized
INFO - 2020-01-28 07:29:50 --> Helper loaded: url_helper
INFO - 2020-01-28 07:29:50 --> Helper loaded: file_helper
INFO - 2020-01-28 07:29:50 --> Helper loaded: form_helper
INFO - 2020-01-28 07:29:50 --> Helper loaded: my_helper
INFO - 2020-01-28 07:29:50 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:29:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:29:50 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:29:50 --> Controller Class Initialized
DEBUG - 2020-01-28 07:29:50 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:29:50 --> Final output sent to browser
DEBUG - 2020-01-28 07:29:50 --> Total execution time: 0.8270
INFO - 2020-01-28 07:30:23 --> Config Class Initialized
INFO - 2020-01-28 07:30:23 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:30:23 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:30:23 --> Utf8 Class Initialized
INFO - 2020-01-28 07:30:23 --> URI Class Initialized
INFO - 2020-01-28 07:30:23 --> Router Class Initialized
INFO - 2020-01-28 07:30:23 --> Output Class Initialized
INFO - 2020-01-28 07:30:23 --> Security Class Initialized
DEBUG - 2020-01-28 07:30:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:30:23 --> Input Class Initialized
INFO - 2020-01-28 07:30:23 --> Language Class Initialized
INFO - 2020-01-28 07:30:23 --> Language Class Initialized
INFO - 2020-01-28 07:30:23 --> Config Class Initialized
INFO - 2020-01-28 07:30:23 --> Loader Class Initialized
INFO - 2020-01-28 07:30:23 --> Helper loaded: url_helper
INFO - 2020-01-28 07:30:23 --> Helper loaded: file_helper
INFO - 2020-01-28 07:30:23 --> Helper loaded: form_helper
INFO - 2020-01-28 07:30:23 --> Helper loaded: my_helper
INFO - 2020-01-28 07:30:23 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:30:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:30:23 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:30:23 --> Controller Class Initialized
DEBUG - 2020-01-28 07:30:23 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:30:24 --> Final output sent to browser
DEBUG - 2020-01-28 07:30:24 --> Total execution time: 0.8036
INFO - 2020-01-28 07:30:37 --> Config Class Initialized
INFO - 2020-01-28 07:30:37 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:30:37 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:30:37 --> Utf8 Class Initialized
INFO - 2020-01-28 07:30:37 --> URI Class Initialized
INFO - 2020-01-28 07:30:37 --> Router Class Initialized
INFO - 2020-01-28 07:30:37 --> Output Class Initialized
INFO - 2020-01-28 07:30:37 --> Security Class Initialized
DEBUG - 2020-01-28 07:30:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:30:37 --> Input Class Initialized
INFO - 2020-01-28 07:30:37 --> Language Class Initialized
INFO - 2020-01-28 07:30:37 --> Language Class Initialized
INFO - 2020-01-28 07:30:37 --> Config Class Initialized
INFO - 2020-01-28 07:30:38 --> Loader Class Initialized
INFO - 2020-01-28 07:30:38 --> Helper loaded: url_helper
INFO - 2020-01-28 07:30:38 --> Helper loaded: file_helper
INFO - 2020-01-28 07:30:38 --> Helper loaded: form_helper
INFO - 2020-01-28 07:30:38 --> Helper loaded: my_helper
INFO - 2020-01-28 07:30:38 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:30:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:30:38 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:30:38 --> Controller Class Initialized
DEBUG - 2020-01-28 07:30:38 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:30:38 --> Final output sent to browser
DEBUG - 2020-01-28 07:30:38 --> Total execution time: 0.8371
INFO - 2020-01-28 07:30:40 --> Config Class Initialized
INFO - 2020-01-28 07:30:41 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:30:41 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:30:41 --> Utf8 Class Initialized
INFO - 2020-01-28 07:30:41 --> URI Class Initialized
INFO - 2020-01-28 07:30:41 --> Router Class Initialized
INFO - 2020-01-28 07:30:41 --> Output Class Initialized
INFO - 2020-01-28 07:30:41 --> Security Class Initialized
DEBUG - 2020-01-28 07:30:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:30:41 --> Input Class Initialized
INFO - 2020-01-28 07:30:41 --> Language Class Initialized
INFO - 2020-01-28 07:30:41 --> Language Class Initialized
INFO - 2020-01-28 07:30:41 --> Config Class Initialized
INFO - 2020-01-28 07:30:41 --> Loader Class Initialized
INFO - 2020-01-28 07:30:41 --> Helper loaded: url_helper
INFO - 2020-01-28 07:30:41 --> Helper loaded: file_helper
INFO - 2020-01-28 07:30:41 --> Helper loaded: form_helper
INFO - 2020-01-28 07:30:41 --> Helper loaded: my_helper
INFO - 2020-01-28 07:30:41 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:30:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:30:41 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:30:41 --> Controller Class Initialized
DEBUG - 2020-01-28 07:30:41 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:30:41 --> Final output sent to browser
DEBUG - 2020-01-28 07:30:41 --> Total execution time: 0.8441
INFO - 2020-01-28 07:31:22 --> Config Class Initialized
INFO - 2020-01-28 07:31:22 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:31:22 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:31:22 --> Utf8 Class Initialized
INFO - 2020-01-28 07:31:22 --> URI Class Initialized
INFO - 2020-01-28 07:31:22 --> Router Class Initialized
INFO - 2020-01-28 07:31:22 --> Output Class Initialized
INFO - 2020-01-28 07:31:22 --> Security Class Initialized
DEBUG - 2020-01-28 07:31:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:31:22 --> Input Class Initialized
INFO - 2020-01-28 07:31:22 --> Language Class Initialized
INFO - 2020-01-28 07:31:22 --> Language Class Initialized
INFO - 2020-01-28 07:31:22 --> Config Class Initialized
INFO - 2020-01-28 07:31:22 --> Loader Class Initialized
INFO - 2020-01-28 07:31:22 --> Helper loaded: url_helper
INFO - 2020-01-28 07:31:22 --> Helper loaded: file_helper
INFO - 2020-01-28 07:31:22 --> Helper loaded: form_helper
INFO - 2020-01-28 07:31:22 --> Helper loaded: my_helper
INFO - 2020-01-28 07:31:22 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:31:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:31:22 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:31:22 --> Controller Class Initialized
DEBUG - 2020-01-28 07:31:22 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:31:23 --> Final output sent to browser
DEBUG - 2020-01-28 07:31:23 --> Total execution time: 0.8887
INFO - 2020-01-28 07:31:42 --> Config Class Initialized
INFO - 2020-01-28 07:31:42 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:31:42 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:31:42 --> Utf8 Class Initialized
INFO - 2020-01-28 07:31:42 --> URI Class Initialized
INFO - 2020-01-28 07:31:42 --> Router Class Initialized
INFO - 2020-01-28 07:31:42 --> Output Class Initialized
INFO - 2020-01-28 07:31:42 --> Security Class Initialized
DEBUG - 2020-01-28 07:31:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:31:42 --> Input Class Initialized
INFO - 2020-01-28 07:31:42 --> Language Class Initialized
INFO - 2020-01-28 07:31:42 --> Language Class Initialized
INFO - 2020-01-28 07:31:42 --> Config Class Initialized
INFO - 2020-01-28 07:31:42 --> Loader Class Initialized
INFO - 2020-01-28 07:31:42 --> Helper loaded: url_helper
INFO - 2020-01-28 07:31:42 --> Helper loaded: file_helper
INFO - 2020-01-28 07:31:42 --> Helper loaded: form_helper
INFO - 2020-01-28 07:31:42 --> Helper loaded: my_helper
INFO - 2020-01-28 07:31:42 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:31:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:31:42 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:31:42 --> Controller Class Initialized
DEBUG - 2020-01-28 07:31:42 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:31:42 --> Final output sent to browser
DEBUG - 2020-01-28 07:31:43 --> Total execution time: 0.9127
INFO - 2020-01-28 07:33:43 --> Config Class Initialized
INFO - 2020-01-28 07:33:43 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:33:43 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:33:43 --> Utf8 Class Initialized
INFO - 2020-01-28 07:33:43 --> URI Class Initialized
INFO - 2020-01-28 07:33:43 --> Router Class Initialized
INFO - 2020-01-28 07:33:44 --> Output Class Initialized
INFO - 2020-01-28 07:33:44 --> Security Class Initialized
DEBUG - 2020-01-28 07:33:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:33:44 --> Input Class Initialized
INFO - 2020-01-28 07:33:44 --> Language Class Initialized
INFO - 2020-01-28 07:33:44 --> Language Class Initialized
INFO - 2020-01-28 07:33:44 --> Config Class Initialized
INFO - 2020-01-28 07:33:44 --> Loader Class Initialized
INFO - 2020-01-28 07:33:44 --> Helper loaded: url_helper
INFO - 2020-01-28 07:33:44 --> Helper loaded: file_helper
INFO - 2020-01-28 07:33:44 --> Helper loaded: form_helper
INFO - 2020-01-28 07:33:44 --> Helper loaded: my_helper
INFO - 2020-01-28 07:33:44 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:33:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:33:44 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:33:44 --> Controller Class Initialized
DEBUG - 2020-01-28 07:33:44 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:33:44 --> Final output sent to browser
DEBUG - 2020-01-28 07:33:44 --> Total execution time: 0.7994
INFO - 2020-01-28 07:33:46 --> Config Class Initialized
INFO - 2020-01-28 07:33:46 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:33:46 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:33:46 --> Utf8 Class Initialized
INFO - 2020-01-28 07:33:46 --> URI Class Initialized
INFO - 2020-01-28 07:33:46 --> Router Class Initialized
INFO - 2020-01-28 07:33:46 --> Output Class Initialized
INFO - 2020-01-28 07:33:47 --> Security Class Initialized
DEBUG - 2020-01-28 07:33:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:33:47 --> Input Class Initialized
INFO - 2020-01-28 07:33:47 --> Language Class Initialized
INFO - 2020-01-28 07:33:47 --> Language Class Initialized
INFO - 2020-01-28 07:33:47 --> Config Class Initialized
INFO - 2020-01-28 07:33:47 --> Loader Class Initialized
INFO - 2020-01-28 07:33:47 --> Helper loaded: url_helper
INFO - 2020-01-28 07:33:47 --> Helper loaded: file_helper
INFO - 2020-01-28 07:33:47 --> Helper loaded: form_helper
INFO - 2020-01-28 07:33:47 --> Helper loaded: my_helper
INFO - 2020-01-28 07:33:47 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:33:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:33:47 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:33:47 --> Controller Class Initialized
DEBUG - 2020-01-28 07:33:47 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:33:47 --> Final output sent to browser
DEBUG - 2020-01-28 07:33:47 --> Total execution time: 1.0604
INFO - 2020-01-28 07:34:05 --> Config Class Initialized
INFO - 2020-01-28 07:34:05 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:34:05 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:34:05 --> Utf8 Class Initialized
INFO - 2020-01-28 07:34:05 --> URI Class Initialized
INFO - 2020-01-28 07:34:05 --> Router Class Initialized
INFO - 2020-01-28 07:34:05 --> Output Class Initialized
INFO - 2020-01-28 07:34:05 --> Security Class Initialized
DEBUG - 2020-01-28 07:34:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:34:05 --> Input Class Initialized
INFO - 2020-01-28 07:34:05 --> Language Class Initialized
INFO - 2020-01-28 07:34:05 --> Language Class Initialized
INFO - 2020-01-28 07:34:05 --> Config Class Initialized
INFO - 2020-01-28 07:34:05 --> Loader Class Initialized
INFO - 2020-01-28 07:34:05 --> Helper loaded: url_helper
INFO - 2020-01-28 07:34:05 --> Helper loaded: file_helper
INFO - 2020-01-28 07:34:05 --> Helper loaded: form_helper
INFO - 2020-01-28 07:34:06 --> Helper loaded: my_helper
INFO - 2020-01-28 07:34:06 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:34:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:34:06 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:34:06 --> Controller Class Initialized
DEBUG - 2020-01-28 07:34:06 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:34:06 --> Final output sent to browser
DEBUG - 2020-01-28 07:34:06 --> Total execution time: 0.8277
INFO - 2020-01-28 07:35:01 --> Config Class Initialized
INFO - 2020-01-28 07:35:01 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:35:01 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:35:01 --> Utf8 Class Initialized
INFO - 2020-01-28 07:35:01 --> URI Class Initialized
INFO - 2020-01-28 07:35:01 --> Router Class Initialized
INFO - 2020-01-28 07:35:01 --> Output Class Initialized
INFO - 2020-01-28 07:35:01 --> Security Class Initialized
DEBUG - 2020-01-28 07:35:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:35:01 --> Input Class Initialized
INFO - 2020-01-28 07:35:01 --> Language Class Initialized
INFO - 2020-01-28 07:35:01 --> Language Class Initialized
INFO - 2020-01-28 07:35:01 --> Config Class Initialized
INFO - 2020-01-28 07:35:01 --> Loader Class Initialized
INFO - 2020-01-28 07:35:01 --> Helper loaded: url_helper
INFO - 2020-01-28 07:35:01 --> Helper loaded: file_helper
INFO - 2020-01-28 07:35:01 --> Helper loaded: form_helper
INFO - 2020-01-28 07:35:02 --> Helper loaded: my_helper
INFO - 2020-01-28 07:35:02 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:35:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:35:02 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:35:02 --> Controller Class Initialized
DEBUG - 2020-01-28 07:35:02 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:35:02 --> Final output sent to browser
DEBUG - 2020-01-28 07:35:02 --> Total execution time: 1.3110
INFO - 2020-01-28 07:35:56 --> Config Class Initialized
INFO - 2020-01-28 07:35:56 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:35:56 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:35:56 --> Utf8 Class Initialized
INFO - 2020-01-28 07:35:56 --> URI Class Initialized
INFO - 2020-01-28 07:35:56 --> Router Class Initialized
INFO - 2020-01-28 07:35:56 --> Output Class Initialized
INFO - 2020-01-28 07:35:56 --> Security Class Initialized
DEBUG - 2020-01-28 07:35:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:35:56 --> Input Class Initialized
INFO - 2020-01-28 07:35:56 --> Language Class Initialized
INFO - 2020-01-28 07:35:56 --> Language Class Initialized
INFO - 2020-01-28 07:35:56 --> Config Class Initialized
INFO - 2020-01-28 07:35:56 --> Loader Class Initialized
INFO - 2020-01-28 07:35:56 --> Helper loaded: url_helper
INFO - 2020-01-28 07:35:57 --> Helper loaded: file_helper
INFO - 2020-01-28 07:35:57 --> Helper loaded: form_helper
INFO - 2020-01-28 07:35:57 --> Helper loaded: my_helper
INFO - 2020-01-28 07:35:57 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:35:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:35:57 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:35:57 --> Controller Class Initialized
DEBUG - 2020-01-28 07:35:57 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:35:57 --> Final output sent to browser
DEBUG - 2020-01-28 07:35:57 --> Total execution time: 0.8618
INFO - 2020-01-28 07:36:27 --> Config Class Initialized
INFO - 2020-01-28 07:36:28 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:36:28 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:36:28 --> Utf8 Class Initialized
INFO - 2020-01-28 07:36:28 --> URI Class Initialized
INFO - 2020-01-28 07:36:28 --> Router Class Initialized
INFO - 2020-01-28 07:36:28 --> Output Class Initialized
INFO - 2020-01-28 07:36:28 --> Security Class Initialized
DEBUG - 2020-01-28 07:36:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:36:28 --> Input Class Initialized
INFO - 2020-01-28 07:36:28 --> Language Class Initialized
INFO - 2020-01-28 07:36:28 --> Language Class Initialized
INFO - 2020-01-28 07:36:28 --> Config Class Initialized
INFO - 2020-01-28 07:36:28 --> Loader Class Initialized
INFO - 2020-01-28 07:36:28 --> Helper loaded: url_helper
INFO - 2020-01-28 07:36:28 --> Helper loaded: file_helper
INFO - 2020-01-28 07:36:28 --> Helper loaded: form_helper
INFO - 2020-01-28 07:36:28 --> Helper loaded: my_helper
INFO - 2020-01-28 07:36:28 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:36:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:36:28 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:36:28 --> Controller Class Initialized
DEBUG - 2020-01-28 07:36:28 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:36:28 --> Final output sent to browser
DEBUG - 2020-01-28 07:36:28 --> Total execution time: 0.8983
INFO - 2020-01-28 07:36:50 --> Config Class Initialized
INFO - 2020-01-28 07:36:50 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:36:50 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:36:50 --> Utf8 Class Initialized
INFO - 2020-01-28 07:36:50 --> URI Class Initialized
INFO - 2020-01-28 07:36:50 --> Router Class Initialized
INFO - 2020-01-28 07:36:50 --> Output Class Initialized
INFO - 2020-01-28 07:36:50 --> Security Class Initialized
DEBUG - 2020-01-28 07:36:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:36:50 --> Input Class Initialized
INFO - 2020-01-28 07:36:50 --> Language Class Initialized
INFO - 2020-01-28 07:36:50 --> Language Class Initialized
INFO - 2020-01-28 07:36:50 --> Config Class Initialized
INFO - 2020-01-28 07:36:50 --> Loader Class Initialized
INFO - 2020-01-28 07:36:51 --> Helper loaded: url_helper
INFO - 2020-01-28 07:36:51 --> Helper loaded: file_helper
INFO - 2020-01-28 07:36:51 --> Helper loaded: form_helper
INFO - 2020-01-28 07:36:51 --> Helper loaded: my_helper
INFO - 2020-01-28 07:36:51 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:36:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:36:51 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:36:51 --> Controller Class Initialized
DEBUG - 2020-01-28 07:36:51 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:36:51 --> Final output sent to browser
DEBUG - 2020-01-28 07:36:51 --> Total execution time: 1.2804
INFO - 2020-01-28 07:38:09 --> Config Class Initialized
INFO - 2020-01-28 07:38:09 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:38:09 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:38:09 --> Utf8 Class Initialized
INFO - 2020-01-28 07:38:09 --> URI Class Initialized
INFO - 2020-01-28 07:38:09 --> Router Class Initialized
INFO - 2020-01-28 07:38:09 --> Output Class Initialized
INFO - 2020-01-28 07:38:09 --> Security Class Initialized
DEBUG - 2020-01-28 07:38:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:38:09 --> Input Class Initialized
INFO - 2020-01-28 07:38:09 --> Language Class Initialized
INFO - 2020-01-28 07:38:09 --> Language Class Initialized
INFO - 2020-01-28 07:38:09 --> Config Class Initialized
INFO - 2020-01-28 07:38:09 --> Loader Class Initialized
INFO - 2020-01-28 07:38:09 --> Helper loaded: url_helper
INFO - 2020-01-28 07:38:09 --> Helper loaded: file_helper
INFO - 2020-01-28 07:38:09 --> Helper loaded: form_helper
INFO - 2020-01-28 07:38:09 --> Helper loaded: my_helper
INFO - 2020-01-28 07:38:09 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:38:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:38:10 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:38:10 --> Controller Class Initialized
INFO - 2020-01-28 07:38:18 --> Config Class Initialized
INFO - 2020-01-28 07:38:18 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:38:18 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:38:18 --> Utf8 Class Initialized
INFO - 2020-01-28 07:38:18 --> URI Class Initialized
INFO - 2020-01-28 07:38:18 --> Router Class Initialized
INFO - 2020-01-28 07:38:19 --> Output Class Initialized
INFO - 2020-01-28 07:38:19 --> Security Class Initialized
DEBUG - 2020-01-28 07:38:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:38:19 --> Input Class Initialized
INFO - 2020-01-28 07:38:19 --> Language Class Initialized
INFO - 2020-01-28 07:38:19 --> Language Class Initialized
INFO - 2020-01-28 07:38:19 --> Config Class Initialized
INFO - 2020-01-28 07:38:19 --> Loader Class Initialized
INFO - 2020-01-28 07:38:19 --> Helper loaded: url_helper
INFO - 2020-01-28 07:38:19 --> Helper loaded: file_helper
INFO - 2020-01-28 07:38:19 --> Helper loaded: form_helper
INFO - 2020-01-28 07:38:19 --> Helper loaded: my_helper
INFO - 2020-01-28 07:38:19 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:38:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:38:19 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:38:19 --> Controller Class Initialized
DEBUG - 2020-01-28 07:38:19 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:38:19 --> Final output sent to browser
DEBUG - 2020-01-28 07:38:19 --> Total execution time: 0.9013
INFO - 2020-01-28 07:39:10 --> Config Class Initialized
INFO - 2020-01-28 07:39:10 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:39:10 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:39:10 --> Utf8 Class Initialized
INFO - 2020-01-28 07:39:10 --> URI Class Initialized
INFO - 2020-01-28 07:39:10 --> Router Class Initialized
INFO - 2020-01-28 07:39:10 --> Output Class Initialized
INFO - 2020-01-28 07:39:10 --> Security Class Initialized
DEBUG - 2020-01-28 07:39:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:39:10 --> Input Class Initialized
INFO - 2020-01-28 07:39:10 --> Language Class Initialized
INFO - 2020-01-28 07:39:10 --> Language Class Initialized
INFO - 2020-01-28 07:39:10 --> Config Class Initialized
INFO - 2020-01-28 07:39:10 --> Loader Class Initialized
INFO - 2020-01-28 07:39:10 --> Helper loaded: url_helper
INFO - 2020-01-28 07:39:10 --> Helper loaded: file_helper
INFO - 2020-01-28 07:39:10 --> Helper loaded: form_helper
INFO - 2020-01-28 07:39:11 --> Helper loaded: my_helper
INFO - 2020-01-28 07:39:11 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:39:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:39:11 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:39:11 --> Controller Class Initialized
DEBUG - 2020-01-28 07:39:11 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:39:11 --> Final output sent to browser
DEBUG - 2020-01-28 07:39:11 --> Total execution time: 0.8503
INFO - 2020-01-28 07:39:42 --> Config Class Initialized
INFO - 2020-01-28 07:39:42 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:39:42 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:39:42 --> Utf8 Class Initialized
INFO - 2020-01-28 07:39:42 --> URI Class Initialized
INFO - 2020-01-28 07:39:42 --> Router Class Initialized
INFO - 2020-01-28 07:39:42 --> Output Class Initialized
INFO - 2020-01-28 07:39:42 --> Security Class Initialized
DEBUG - 2020-01-28 07:39:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:39:42 --> Input Class Initialized
INFO - 2020-01-28 07:39:42 --> Language Class Initialized
INFO - 2020-01-28 07:39:42 --> Language Class Initialized
INFO - 2020-01-28 07:39:42 --> Config Class Initialized
INFO - 2020-01-28 07:39:42 --> Loader Class Initialized
INFO - 2020-01-28 07:39:42 --> Helper loaded: url_helper
INFO - 2020-01-28 07:39:42 --> Helper loaded: file_helper
INFO - 2020-01-28 07:39:43 --> Helper loaded: form_helper
INFO - 2020-01-28 07:39:43 --> Helper loaded: my_helper
INFO - 2020-01-28 07:39:43 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:39:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:39:43 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:39:43 --> Controller Class Initialized
DEBUG - 2020-01-28 07:39:43 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:39:43 --> Final output sent to browser
DEBUG - 2020-01-28 07:39:43 --> Total execution time: 0.8980
INFO - 2020-01-28 07:42:54 --> Config Class Initialized
INFO - 2020-01-28 07:42:54 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:42:54 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:42:54 --> Utf8 Class Initialized
INFO - 2020-01-28 07:42:54 --> URI Class Initialized
INFO - 2020-01-28 07:42:54 --> Router Class Initialized
INFO - 2020-01-28 07:42:55 --> Output Class Initialized
INFO - 2020-01-28 07:42:55 --> Security Class Initialized
DEBUG - 2020-01-28 07:42:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:42:55 --> Input Class Initialized
INFO - 2020-01-28 07:42:55 --> Language Class Initialized
INFO - 2020-01-28 07:42:55 --> Language Class Initialized
INFO - 2020-01-28 07:42:55 --> Config Class Initialized
INFO - 2020-01-28 07:42:55 --> Loader Class Initialized
INFO - 2020-01-28 07:42:55 --> Helper loaded: url_helper
INFO - 2020-01-28 07:42:55 --> Helper loaded: file_helper
INFO - 2020-01-28 07:42:55 --> Helper loaded: form_helper
INFO - 2020-01-28 07:42:55 --> Helper loaded: my_helper
INFO - 2020-01-28 07:42:55 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:42:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:42:55 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:42:55 --> Controller Class Initialized
DEBUG - 2020-01-28 07:42:55 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/view_mapel/views/v_view_mapel.php
DEBUG - 2020-01-28 07:42:55 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 07:42:55 --> Final output sent to browser
DEBUG - 2020-01-28 07:42:55 --> Total execution time: 0.9343
INFO - 2020-01-28 07:42:57 --> Config Class Initialized
INFO - 2020-01-28 07:42:57 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:42:57 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:42:57 --> Utf8 Class Initialized
INFO - 2020-01-28 07:42:57 --> URI Class Initialized
INFO - 2020-01-28 07:42:57 --> Router Class Initialized
INFO - 2020-01-28 07:42:57 --> Output Class Initialized
INFO - 2020-01-28 07:42:57 --> Security Class Initialized
DEBUG - 2020-01-28 07:42:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:42:57 --> Input Class Initialized
INFO - 2020-01-28 07:42:57 --> Language Class Initialized
INFO - 2020-01-28 07:42:57 --> Language Class Initialized
INFO - 2020-01-28 07:42:57 --> Config Class Initialized
INFO - 2020-01-28 07:42:57 --> Loader Class Initialized
INFO - 2020-01-28 07:42:57 --> Helper loaded: url_helper
INFO - 2020-01-28 07:42:57 --> Helper loaded: file_helper
INFO - 2020-01-28 07:42:57 --> Helper loaded: form_helper
INFO - 2020-01-28 07:42:57 --> Helper loaded: my_helper
INFO - 2020-01-28 07:42:58 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:42:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:42:58 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:42:58 --> Controller Class Initialized
DEBUG - 2020-01-28 07:42:58 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/list.php
DEBUG - 2020-01-28 07:42:58 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 07:42:58 --> Final output sent to browser
DEBUG - 2020-01-28 07:42:58 --> Total execution time: 0.8771
INFO - 2020-01-28 07:42:58 --> Config Class Initialized
INFO - 2020-01-28 07:42:58 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:42:58 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:42:58 --> Utf8 Class Initialized
INFO - 2020-01-28 07:42:58 --> URI Class Initialized
INFO - 2020-01-28 07:42:58 --> Router Class Initialized
INFO - 2020-01-28 07:42:58 --> Output Class Initialized
INFO - 2020-01-28 07:42:58 --> Security Class Initialized
DEBUG - 2020-01-28 07:42:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:42:59 --> Input Class Initialized
INFO - 2020-01-28 07:42:59 --> Language Class Initialized
INFO - 2020-01-28 07:42:59 --> Language Class Initialized
INFO - 2020-01-28 07:42:59 --> Config Class Initialized
INFO - 2020-01-28 07:42:59 --> Loader Class Initialized
INFO - 2020-01-28 07:42:59 --> Helper loaded: url_helper
INFO - 2020-01-28 07:42:59 --> Helper loaded: file_helper
INFO - 2020-01-28 07:42:59 --> Helper loaded: form_helper
INFO - 2020-01-28 07:42:59 --> Helper loaded: my_helper
INFO - 2020-01-28 07:42:59 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:42:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:42:59 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:42:59 --> Controller Class Initialized
INFO - 2020-01-28 07:43:01 --> Config Class Initialized
INFO - 2020-01-28 07:43:01 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:43:01 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:43:01 --> Utf8 Class Initialized
INFO - 2020-01-28 07:43:01 --> URI Class Initialized
INFO - 2020-01-28 07:43:01 --> Router Class Initialized
INFO - 2020-01-28 07:43:01 --> Output Class Initialized
INFO - 2020-01-28 07:43:01 --> Security Class Initialized
DEBUG - 2020-01-28 07:43:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:43:01 --> Input Class Initialized
INFO - 2020-01-28 07:43:02 --> Language Class Initialized
INFO - 2020-01-28 07:43:02 --> Language Class Initialized
INFO - 2020-01-28 07:43:02 --> Config Class Initialized
INFO - 2020-01-28 07:43:02 --> Loader Class Initialized
INFO - 2020-01-28 07:43:02 --> Helper loaded: url_helper
INFO - 2020-01-28 07:43:02 --> Helper loaded: file_helper
INFO - 2020-01-28 07:43:02 --> Helper loaded: form_helper
INFO - 2020-01-28 07:43:02 --> Helper loaded: my_helper
INFO - 2020-01-28 07:43:02 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:43:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:43:02 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:43:02 --> Controller Class Initialized
DEBUG - 2020-01-28 07:43:02 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/view_mapel/views/v_view_mapel.php
DEBUG - 2020-01-28 07:43:02 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 07:43:02 --> Final output sent to browser
DEBUG - 2020-01-28 07:43:02 --> Total execution time: 1.3130
INFO - 2020-01-28 07:43:04 --> Config Class Initialized
INFO - 2020-01-28 07:43:04 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:43:04 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:43:04 --> Utf8 Class Initialized
INFO - 2020-01-28 07:43:04 --> URI Class Initialized
INFO - 2020-01-28 07:43:04 --> Router Class Initialized
INFO - 2020-01-28 07:43:04 --> Output Class Initialized
INFO - 2020-01-28 07:43:04 --> Security Class Initialized
DEBUG - 2020-01-28 07:43:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:43:04 --> Input Class Initialized
INFO - 2020-01-28 07:43:04 --> Language Class Initialized
INFO - 2020-01-28 07:43:04 --> Language Class Initialized
INFO - 2020-01-28 07:43:04 --> Config Class Initialized
INFO - 2020-01-28 07:43:04 --> Loader Class Initialized
INFO - 2020-01-28 07:43:04 --> Helper loaded: url_helper
INFO - 2020-01-28 07:43:04 --> Helper loaded: file_helper
INFO - 2020-01-28 07:43:04 --> Helper loaded: form_helper
INFO - 2020-01-28 07:43:04 --> Helper loaded: my_helper
INFO - 2020-01-28 07:43:04 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:43:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:43:05 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:43:05 --> Controller Class Initialized
DEBUG - 2020-01-28 07:43:05 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/list.php
DEBUG - 2020-01-28 07:43:05 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 07:43:05 --> Final output sent to browser
DEBUG - 2020-01-28 07:43:05 --> Total execution time: 1.1096
INFO - 2020-01-28 07:43:05 --> Config Class Initialized
INFO - 2020-01-28 07:43:05 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:43:05 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:43:05 --> Utf8 Class Initialized
INFO - 2020-01-28 07:43:05 --> URI Class Initialized
INFO - 2020-01-28 07:43:05 --> Router Class Initialized
INFO - 2020-01-28 07:43:05 --> Output Class Initialized
INFO - 2020-01-28 07:43:06 --> Security Class Initialized
DEBUG - 2020-01-28 07:43:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:43:06 --> Input Class Initialized
INFO - 2020-01-28 07:43:06 --> Language Class Initialized
INFO - 2020-01-28 07:43:06 --> Language Class Initialized
INFO - 2020-01-28 07:43:06 --> Config Class Initialized
INFO - 2020-01-28 07:43:06 --> Loader Class Initialized
INFO - 2020-01-28 07:43:06 --> Helper loaded: url_helper
INFO - 2020-01-28 07:43:06 --> Helper loaded: file_helper
INFO - 2020-01-28 07:43:06 --> Helper loaded: form_helper
INFO - 2020-01-28 07:43:06 --> Helper loaded: my_helper
INFO - 2020-01-28 07:43:06 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:43:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:43:06 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:43:06 --> Controller Class Initialized
INFO - 2020-01-28 07:43:07 --> Config Class Initialized
INFO - 2020-01-28 07:43:07 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:43:07 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:43:07 --> Utf8 Class Initialized
INFO - 2020-01-28 07:43:07 --> URI Class Initialized
INFO - 2020-01-28 07:43:07 --> Router Class Initialized
INFO - 2020-01-28 07:43:07 --> Output Class Initialized
INFO - 2020-01-28 07:43:07 --> Security Class Initialized
DEBUG - 2020-01-28 07:43:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:43:08 --> Input Class Initialized
INFO - 2020-01-28 07:43:08 --> Language Class Initialized
INFO - 2020-01-28 07:43:08 --> Language Class Initialized
INFO - 2020-01-28 07:43:08 --> Config Class Initialized
INFO - 2020-01-28 07:43:08 --> Loader Class Initialized
INFO - 2020-01-28 07:43:08 --> Helper loaded: url_helper
INFO - 2020-01-28 07:43:08 --> Helper loaded: file_helper
INFO - 2020-01-28 07:43:08 --> Helper loaded: form_helper
INFO - 2020-01-28 07:43:08 --> Helper loaded: my_helper
INFO - 2020-01-28 07:43:08 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:43:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:43:08 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:43:08 --> Controller Class Initialized
INFO - 2020-01-28 07:43:08 --> Final output sent to browser
DEBUG - 2020-01-28 07:43:08 --> Total execution time: 0.9986
INFO - 2020-01-28 07:43:30 --> Config Class Initialized
INFO - 2020-01-28 07:43:30 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:43:30 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:43:30 --> Utf8 Class Initialized
INFO - 2020-01-28 07:43:30 --> URI Class Initialized
INFO - 2020-01-28 07:43:30 --> Router Class Initialized
INFO - 2020-01-28 07:43:30 --> Output Class Initialized
INFO - 2020-01-28 07:43:30 --> Security Class Initialized
DEBUG - 2020-01-28 07:43:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:43:30 --> Input Class Initialized
INFO - 2020-01-28 07:43:30 --> Language Class Initialized
INFO - 2020-01-28 07:43:30 --> Language Class Initialized
INFO - 2020-01-28 07:43:30 --> Config Class Initialized
INFO - 2020-01-28 07:43:30 --> Loader Class Initialized
INFO - 2020-01-28 07:43:30 --> Helper loaded: url_helper
INFO - 2020-01-28 07:43:30 --> Helper loaded: file_helper
INFO - 2020-01-28 07:43:30 --> Helper loaded: form_helper
INFO - 2020-01-28 07:43:30 --> Helper loaded: my_helper
INFO - 2020-01-28 07:43:30 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:43:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:43:30 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:43:30 --> Controller Class Initialized
INFO - 2020-01-28 07:43:30 --> Final output sent to browser
DEBUG - 2020-01-28 07:43:30 --> Total execution time: 0.6907
INFO - 2020-01-28 07:43:55 --> Config Class Initialized
INFO - 2020-01-28 07:43:55 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:43:55 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:43:56 --> Utf8 Class Initialized
INFO - 2020-01-28 07:43:56 --> URI Class Initialized
INFO - 2020-01-28 07:43:56 --> Router Class Initialized
INFO - 2020-01-28 07:43:56 --> Output Class Initialized
INFO - 2020-01-28 07:43:56 --> Security Class Initialized
DEBUG - 2020-01-28 07:43:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:43:56 --> Input Class Initialized
INFO - 2020-01-28 07:43:56 --> Language Class Initialized
INFO - 2020-01-28 07:43:56 --> Language Class Initialized
INFO - 2020-01-28 07:43:56 --> Config Class Initialized
INFO - 2020-01-28 07:43:56 --> Loader Class Initialized
INFO - 2020-01-28 07:43:56 --> Helper loaded: url_helper
INFO - 2020-01-28 07:43:56 --> Helper loaded: file_helper
INFO - 2020-01-28 07:43:56 --> Helper loaded: form_helper
INFO - 2020-01-28 07:43:56 --> Helper loaded: my_helper
INFO - 2020-01-28 07:43:56 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:43:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:43:56 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:43:56 --> Controller Class Initialized
INFO - 2020-01-28 07:43:56 --> Final output sent to browser
DEBUG - 2020-01-28 07:43:56 --> Total execution time: 0.6532
INFO - 2020-01-28 07:43:56 --> Config Class Initialized
INFO - 2020-01-28 07:43:56 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:43:56 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:43:56 --> Utf8 Class Initialized
INFO - 2020-01-28 07:43:56 --> URI Class Initialized
INFO - 2020-01-28 07:43:56 --> Router Class Initialized
INFO - 2020-01-28 07:43:56 --> Output Class Initialized
INFO - 2020-01-28 07:43:56 --> Security Class Initialized
DEBUG - 2020-01-28 07:43:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:43:57 --> Input Class Initialized
INFO - 2020-01-28 07:43:57 --> Language Class Initialized
INFO - 2020-01-28 07:43:57 --> Language Class Initialized
INFO - 2020-01-28 07:43:57 --> Config Class Initialized
INFO - 2020-01-28 07:43:57 --> Loader Class Initialized
INFO - 2020-01-28 07:43:57 --> Helper loaded: url_helper
INFO - 2020-01-28 07:43:57 --> Helper loaded: file_helper
INFO - 2020-01-28 07:43:57 --> Helper loaded: form_helper
INFO - 2020-01-28 07:43:57 --> Helper loaded: my_helper
INFO - 2020-01-28 07:43:57 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:43:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:43:57 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:43:57 --> Controller Class Initialized
INFO - 2020-01-28 07:44:09 --> Config Class Initialized
INFO - 2020-01-28 07:44:10 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:44:10 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:44:10 --> Utf8 Class Initialized
INFO - 2020-01-28 07:44:10 --> URI Class Initialized
INFO - 2020-01-28 07:44:10 --> Router Class Initialized
INFO - 2020-01-28 07:44:10 --> Output Class Initialized
INFO - 2020-01-28 07:44:10 --> Security Class Initialized
DEBUG - 2020-01-28 07:44:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:44:10 --> Input Class Initialized
INFO - 2020-01-28 07:44:10 --> Language Class Initialized
INFO - 2020-01-28 07:44:10 --> Language Class Initialized
INFO - 2020-01-28 07:44:10 --> Config Class Initialized
INFO - 2020-01-28 07:44:10 --> Loader Class Initialized
INFO - 2020-01-28 07:44:10 --> Helper loaded: url_helper
INFO - 2020-01-28 07:44:10 --> Helper loaded: file_helper
INFO - 2020-01-28 07:44:10 --> Helper loaded: form_helper
INFO - 2020-01-28 07:44:10 --> Helper loaded: my_helper
INFO - 2020-01-28 07:44:10 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:44:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:44:10 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:44:10 --> Controller Class Initialized
INFO - 2020-01-28 07:44:10 --> Final output sent to browser
DEBUG - 2020-01-28 07:44:10 --> Total execution time: 0.7663
INFO - 2020-01-28 07:44:15 --> Config Class Initialized
INFO - 2020-01-28 07:44:15 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:44:16 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:44:16 --> Utf8 Class Initialized
INFO - 2020-01-28 07:44:16 --> URI Class Initialized
INFO - 2020-01-28 07:44:16 --> Router Class Initialized
INFO - 2020-01-28 07:44:16 --> Output Class Initialized
INFO - 2020-01-28 07:44:16 --> Security Class Initialized
DEBUG - 2020-01-28 07:44:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:44:16 --> Input Class Initialized
INFO - 2020-01-28 07:44:16 --> Language Class Initialized
INFO - 2020-01-28 07:44:16 --> Language Class Initialized
INFO - 2020-01-28 07:44:16 --> Config Class Initialized
INFO - 2020-01-28 07:44:16 --> Loader Class Initialized
INFO - 2020-01-28 07:44:16 --> Helper loaded: url_helper
INFO - 2020-01-28 07:44:16 --> Helper loaded: file_helper
INFO - 2020-01-28 07:44:16 --> Helper loaded: form_helper
INFO - 2020-01-28 07:44:16 --> Helper loaded: my_helper
INFO - 2020-01-28 07:44:16 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:44:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:44:16 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:44:16 --> Controller Class Initialized
INFO - 2020-01-28 07:44:16 --> Final output sent to browser
DEBUG - 2020-01-28 07:44:16 --> Total execution time: 0.7258
INFO - 2020-01-28 07:44:16 --> Config Class Initialized
INFO - 2020-01-28 07:44:16 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:44:16 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:44:16 --> Utf8 Class Initialized
INFO - 2020-01-28 07:44:16 --> URI Class Initialized
INFO - 2020-01-28 07:44:16 --> Router Class Initialized
INFO - 2020-01-28 07:44:17 --> Output Class Initialized
INFO - 2020-01-28 07:44:17 --> Security Class Initialized
DEBUG - 2020-01-28 07:44:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:44:17 --> Input Class Initialized
INFO - 2020-01-28 07:44:17 --> Language Class Initialized
INFO - 2020-01-28 07:44:17 --> Language Class Initialized
INFO - 2020-01-28 07:44:17 --> Config Class Initialized
INFO - 2020-01-28 07:44:17 --> Loader Class Initialized
INFO - 2020-01-28 07:44:17 --> Helper loaded: url_helper
INFO - 2020-01-28 07:44:17 --> Helper loaded: file_helper
INFO - 2020-01-28 07:44:17 --> Helper loaded: form_helper
INFO - 2020-01-28 07:44:17 --> Helper loaded: my_helper
INFO - 2020-01-28 07:44:17 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:44:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:44:17 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:44:17 --> Controller Class Initialized
INFO - 2020-01-28 07:44:18 --> Config Class Initialized
INFO - 2020-01-28 07:44:18 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:44:18 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:44:18 --> Utf8 Class Initialized
INFO - 2020-01-28 07:44:18 --> URI Class Initialized
INFO - 2020-01-28 07:44:18 --> Router Class Initialized
INFO - 2020-01-28 07:44:18 --> Output Class Initialized
INFO - 2020-01-28 07:44:18 --> Security Class Initialized
DEBUG - 2020-01-28 07:44:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:44:18 --> Input Class Initialized
INFO - 2020-01-28 07:44:18 --> Language Class Initialized
INFO - 2020-01-28 07:44:18 --> Language Class Initialized
INFO - 2020-01-28 07:44:18 --> Config Class Initialized
INFO - 2020-01-28 07:44:18 --> Loader Class Initialized
INFO - 2020-01-28 07:44:18 --> Helper loaded: url_helper
INFO - 2020-01-28 07:44:18 --> Helper loaded: file_helper
INFO - 2020-01-28 07:44:19 --> Helper loaded: form_helper
INFO - 2020-01-28 07:44:19 --> Helper loaded: my_helper
INFO - 2020-01-28 07:44:19 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:44:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:44:19 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:44:19 --> Controller Class Initialized
INFO - 2020-01-28 07:44:19 --> Final output sent to browser
DEBUG - 2020-01-28 07:44:19 --> Total execution time: 0.8737
INFO - 2020-01-28 07:44:34 --> Config Class Initialized
INFO - 2020-01-28 07:44:34 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:44:34 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:44:34 --> Utf8 Class Initialized
INFO - 2020-01-28 07:44:34 --> URI Class Initialized
INFO - 2020-01-28 07:44:34 --> Router Class Initialized
INFO - 2020-01-28 07:44:34 --> Output Class Initialized
INFO - 2020-01-28 07:44:34 --> Security Class Initialized
DEBUG - 2020-01-28 07:44:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:44:34 --> Input Class Initialized
INFO - 2020-01-28 07:44:34 --> Language Class Initialized
INFO - 2020-01-28 07:44:34 --> Language Class Initialized
INFO - 2020-01-28 07:44:34 --> Config Class Initialized
INFO - 2020-01-28 07:44:34 --> Loader Class Initialized
INFO - 2020-01-28 07:44:34 --> Helper loaded: url_helper
INFO - 2020-01-28 07:44:34 --> Helper loaded: file_helper
INFO - 2020-01-28 07:44:34 --> Helper loaded: form_helper
INFO - 2020-01-28 07:44:34 --> Helper loaded: my_helper
INFO - 2020-01-28 07:44:34 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:44:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:44:34 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:44:34 --> Controller Class Initialized
INFO - 2020-01-28 07:44:34 --> Final output sent to browser
DEBUG - 2020-01-28 07:44:34 --> Total execution time: 0.6613
INFO - 2020-01-28 07:44:34 --> Config Class Initialized
INFO - 2020-01-28 07:44:34 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:44:34 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:44:34 --> Utf8 Class Initialized
INFO - 2020-01-28 07:44:35 --> URI Class Initialized
INFO - 2020-01-28 07:44:35 --> Router Class Initialized
INFO - 2020-01-28 07:44:35 --> Output Class Initialized
INFO - 2020-01-28 07:44:35 --> Security Class Initialized
DEBUG - 2020-01-28 07:44:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:44:35 --> Input Class Initialized
INFO - 2020-01-28 07:44:35 --> Language Class Initialized
INFO - 2020-01-28 07:44:35 --> Language Class Initialized
INFO - 2020-01-28 07:44:35 --> Config Class Initialized
INFO - 2020-01-28 07:44:35 --> Loader Class Initialized
INFO - 2020-01-28 07:44:35 --> Helper loaded: url_helper
INFO - 2020-01-28 07:44:35 --> Helper loaded: file_helper
INFO - 2020-01-28 07:44:35 --> Helper loaded: form_helper
INFO - 2020-01-28 07:44:35 --> Helper loaded: my_helper
INFO - 2020-01-28 07:44:35 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:44:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:44:35 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:44:35 --> Controller Class Initialized
INFO - 2020-01-28 07:44:36 --> Config Class Initialized
INFO - 2020-01-28 07:44:36 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:44:37 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:44:37 --> Utf8 Class Initialized
INFO - 2020-01-28 07:44:37 --> URI Class Initialized
INFO - 2020-01-28 07:44:37 --> Router Class Initialized
INFO - 2020-01-28 07:44:37 --> Output Class Initialized
INFO - 2020-01-28 07:44:37 --> Security Class Initialized
DEBUG - 2020-01-28 07:44:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:44:37 --> Input Class Initialized
INFO - 2020-01-28 07:44:37 --> Language Class Initialized
INFO - 2020-01-28 07:44:37 --> Language Class Initialized
INFO - 2020-01-28 07:44:37 --> Config Class Initialized
INFO - 2020-01-28 07:44:37 --> Loader Class Initialized
INFO - 2020-01-28 07:44:37 --> Helper loaded: url_helper
INFO - 2020-01-28 07:44:37 --> Helper loaded: file_helper
INFO - 2020-01-28 07:44:37 --> Helper loaded: form_helper
INFO - 2020-01-28 07:44:37 --> Helper loaded: my_helper
INFO - 2020-01-28 07:44:37 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:44:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:44:37 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:44:37 --> Controller Class Initialized
INFO - 2020-01-28 07:44:37 --> Final output sent to browser
DEBUG - 2020-01-28 07:44:37 --> Total execution time: 0.7132
INFO - 2020-01-28 07:44:58 --> Config Class Initialized
INFO - 2020-01-28 07:44:58 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:44:58 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:44:58 --> Utf8 Class Initialized
INFO - 2020-01-28 07:44:58 --> URI Class Initialized
INFO - 2020-01-28 07:44:58 --> Router Class Initialized
INFO - 2020-01-28 07:44:58 --> Output Class Initialized
INFO - 2020-01-28 07:44:58 --> Security Class Initialized
DEBUG - 2020-01-28 07:44:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:44:58 --> Input Class Initialized
INFO - 2020-01-28 07:44:58 --> Language Class Initialized
INFO - 2020-01-28 07:44:58 --> Language Class Initialized
INFO - 2020-01-28 07:44:58 --> Config Class Initialized
INFO - 2020-01-28 07:44:58 --> Loader Class Initialized
INFO - 2020-01-28 07:44:58 --> Helper loaded: url_helper
INFO - 2020-01-28 07:44:58 --> Helper loaded: file_helper
INFO - 2020-01-28 07:44:58 --> Helper loaded: form_helper
INFO - 2020-01-28 07:44:58 --> Helper loaded: my_helper
INFO - 2020-01-28 07:44:58 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:44:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:44:58 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:44:58 --> Controller Class Initialized
INFO - 2020-01-28 07:44:58 --> Final output sent to browser
DEBUG - 2020-01-28 07:44:58 --> Total execution time: 0.6816
INFO - 2020-01-28 07:45:00 --> Config Class Initialized
INFO - 2020-01-28 07:45:00 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:45:00 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:45:01 --> Utf8 Class Initialized
INFO - 2020-01-28 07:45:01 --> URI Class Initialized
INFO - 2020-01-28 07:45:01 --> Router Class Initialized
INFO - 2020-01-28 07:45:01 --> Output Class Initialized
INFO - 2020-01-28 07:45:01 --> Security Class Initialized
DEBUG - 2020-01-28 07:45:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:45:01 --> Input Class Initialized
INFO - 2020-01-28 07:45:01 --> Language Class Initialized
INFO - 2020-01-28 07:45:01 --> Language Class Initialized
INFO - 2020-01-28 07:45:01 --> Config Class Initialized
INFO - 2020-01-28 07:45:01 --> Loader Class Initialized
INFO - 2020-01-28 07:45:01 --> Helper loaded: url_helper
INFO - 2020-01-28 07:45:01 --> Helper loaded: file_helper
INFO - 2020-01-28 07:45:01 --> Helper loaded: form_helper
INFO - 2020-01-28 07:45:01 --> Helper loaded: my_helper
INFO - 2020-01-28 07:45:01 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:45:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:45:01 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:45:01 --> Controller Class Initialized
INFO - 2020-01-28 07:45:01 --> Final output sent to browser
DEBUG - 2020-01-28 07:45:01 --> Total execution time: 0.9070
INFO - 2020-01-28 07:45:16 --> Config Class Initialized
INFO - 2020-01-28 07:45:16 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:45:16 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:45:16 --> Utf8 Class Initialized
INFO - 2020-01-28 07:45:16 --> URI Class Initialized
INFO - 2020-01-28 07:45:16 --> Router Class Initialized
INFO - 2020-01-28 07:45:16 --> Output Class Initialized
INFO - 2020-01-28 07:45:16 --> Security Class Initialized
DEBUG - 2020-01-28 07:45:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:45:16 --> Input Class Initialized
INFO - 2020-01-28 07:45:16 --> Language Class Initialized
INFO - 2020-01-28 07:45:16 --> Language Class Initialized
INFO - 2020-01-28 07:45:16 --> Config Class Initialized
INFO - 2020-01-28 07:45:16 --> Loader Class Initialized
INFO - 2020-01-28 07:45:16 --> Helper loaded: url_helper
INFO - 2020-01-28 07:45:16 --> Helper loaded: file_helper
INFO - 2020-01-28 07:45:16 --> Helper loaded: form_helper
INFO - 2020-01-28 07:45:16 --> Helper loaded: my_helper
INFO - 2020-01-28 07:45:16 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:45:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:45:17 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:45:17 --> Controller Class Initialized
INFO - 2020-01-28 07:45:17 --> Final output sent to browser
DEBUG - 2020-01-28 07:45:17 --> Total execution time: 0.7444
INFO - 2020-01-28 07:45:18 --> Config Class Initialized
INFO - 2020-01-28 07:45:18 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:45:18 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:45:18 --> Utf8 Class Initialized
INFO - 2020-01-28 07:45:18 --> URI Class Initialized
INFO - 2020-01-28 07:45:18 --> Router Class Initialized
INFO - 2020-01-28 07:45:18 --> Output Class Initialized
INFO - 2020-01-28 07:45:18 --> Security Class Initialized
DEBUG - 2020-01-28 07:45:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:45:18 --> Input Class Initialized
INFO - 2020-01-28 07:45:18 --> Language Class Initialized
INFO - 2020-01-28 07:45:18 --> Language Class Initialized
INFO - 2020-01-28 07:45:18 --> Config Class Initialized
INFO - 2020-01-28 07:45:19 --> Loader Class Initialized
INFO - 2020-01-28 07:45:19 --> Helper loaded: url_helper
INFO - 2020-01-28 07:45:19 --> Helper loaded: file_helper
INFO - 2020-01-28 07:45:19 --> Helper loaded: form_helper
INFO - 2020-01-28 07:45:19 --> Helper loaded: my_helper
INFO - 2020-01-28 07:45:19 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:45:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:45:19 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:45:19 --> Controller Class Initialized
INFO - 2020-01-28 07:45:19 --> Final output sent to browser
DEBUG - 2020-01-28 07:45:19 --> Total execution time: 0.6885
INFO - 2020-01-28 07:45:34 --> Config Class Initialized
INFO - 2020-01-28 07:45:34 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:45:34 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:45:34 --> Utf8 Class Initialized
INFO - 2020-01-28 07:45:34 --> URI Class Initialized
INFO - 2020-01-28 07:45:34 --> Router Class Initialized
INFO - 2020-01-28 07:45:34 --> Output Class Initialized
INFO - 2020-01-28 07:45:34 --> Security Class Initialized
DEBUG - 2020-01-28 07:45:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:45:34 --> Input Class Initialized
INFO - 2020-01-28 07:45:34 --> Language Class Initialized
INFO - 2020-01-28 07:45:34 --> Language Class Initialized
INFO - 2020-01-28 07:45:34 --> Config Class Initialized
INFO - 2020-01-28 07:45:34 --> Loader Class Initialized
INFO - 2020-01-28 07:45:34 --> Helper loaded: url_helper
INFO - 2020-01-28 07:45:34 --> Helper loaded: file_helper
INFO - 2020-01-28 07:45:34 --> Helper loaded: form_helper
INFO - 2020-01-28 07:45:34 --> Helper loaded: my_helper
INFO - 2020-01-28 07:45:34 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:45:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:45:34 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:45:34 --> Controller Class Initialized
INFO - 2020-01-28 07:45:34 --> Final output sent to browser
DEBUG - 2020-01-28 07:45:34 --> Total execution time: 0.6852
INFO - 2020-01-28 07:45:38 --> Config Class Initialized
INFO - 2020-01-28 07:45:38 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:45:38 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:45:38 --> Utf8 Class Initialized
INFO - 2020-01-28 07:45:38 --> URI Class Initialized
INFO - 2020-01-28 07:45:38 --> Router Class Initialized
INFO - 2020-01-28 07:45:38 --> Output Class Initialized
INFO - 2020-01-28 07:45:38 --> Security Class Initialized
DEBUG - 2020-01-28 07:45:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:45:38 --> Input Class Initialized
INFO - 2020-01-28 07:45:38 --> Language Class Initialized
INFO - 2020-01-28 07:45:38 --> Language Class Initialized
INFO - 2020-01-28 07:45:38 --> Config Class Initialized
INFO - 2020-01-28 07:45:38 --> Loader Class Initialized
INFO - 2020-01-28 07:45:38 --> Helper loaded: url_helper
INFO - 2020-01-28 07:45:38 --> Helper loaded: file_helper
INFO - 2020-01-28 07:45:38 --> Helper loaded: form_helper
INFO - 2020-01-28 07:45:38 --> Helper loaded: my_helper
INFO - 2020-01-28 07:45:39 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:45:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:45:39 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:45:39 --> Controller Class Initialized
INFO - 2020-01-28 07:45:39 --> Final output sent to browser
DEBUG - 2020-01-28 07:45:39 --> Total execution time: 0.7117
INFO - 2020-01-28 07:45:57 --> Config Class Initialized
INFO - 2020-01-28 07:45:57 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:45:58 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:45:58 --> Utf8 Class Initialized
INFO - 2020-01-28 07:45:58 --> URI Class Initialized
INFO - 2020-01-28 07:45:58 --> Router Class Initialized
INFO - 2020-01-28 07:45:58 --> Output Class Initialized
INFO - 2020-01-28 07:45:58 --> Security Class Initialized
DEBUG - 2020-01-28 07:45:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:45:58 --> Input Class Initialized
INFO - 2020-01-28 07:45:58 --> Language Class Initialized
INFO - 2020-01-28 07:45:58 --> Language Class Initialized
INFO - 2020-01-28 07:45:58 --> Config Class Initialized
INFO - 2020-01-28 07:45:58 --> Loader Class Initialized
INFO - 2020-01-28 07:45:58 --> Helper loaded: url_helper
INFO - 2020-01-28 07:45:58 --> Helper loaded: file_helper
INFO - 2020-01-28 07:45:58 --> Helper loaded: form_helper
INFO - 2020-01-28 07:45:58 --> Helper loaded: my_helper
INFO - 2020-01-28 07:45:58 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:45:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:45:58 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:45:58 --> Controller Class Initialized
INFO - 2020-01-28 07:45:58 --> Final output sent to browser
DEBUG - 2020-01-28 07:45:58 --> Total execution time: 0.7262
INFO - 2020-01-28 07:46:00 --> Config Class Initialized
INFO - 2020-01-28 07:46:00 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:46:00 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:46:00 --> Utf8 Class Initialized
INFO - 2020-01-28 07:46:00 --> URI Class Initialized
INFO - 2020-01-28 07:46:00 --> Router Class Initialized
INFO - 2020-01-28 07:46:00 --> Output Class Initialized
INFO - 2020-01-28 07:46:00 --> Security Class Initialized
DEBUG - 2020-01-28 07:46:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:46:00 --> Input Class Initialized
INFO - 2020-01-28 07:46:00 --> Language Class Initialized
INFO - 2020-01-28 07:46:00 --> Language Class Initialized
INFO - 2020-01-28 07:46:00 --> Config Class Initialized
INFO - 2020-01-28 07:46:00 --> Loader Class Initialized
INFO - 2020-01-28 07:46:00 --> Helper loaded: url_helper
INFO - 2020-01-28 07:46:00 --> Helper loaded: file_helper
INFO - 2020-01-28 07:46:00 --> Helper loaded: form_helper
INFO - 2020-01-28 07:46:00 --> Helper loaded: my_helper
INFO - 2020-01-28 07:46:00 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:46:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:46:00 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:46:01 --> Controller Class Initialized
INFO - 2020-01-28 07:46:01 --> Final output sent to browser
DEBUG - 2020-01-28 07:46:01 --> Total execution time: 0.7463
INFO - 2020-01-28 07:46:14 --> Config Class Initialized
INFO - 2020-01-28 07:46:14 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:46:14 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:46:14 --> Utf8 Class Initialized
INFO - 2020-01-28 07:46:14 --> URI Class Initialized
INFO - 2020-01-28 07:46:14 --> Router Class Initialized
INFO - 2020-01-28 07:46:14 --> Output Class Initialized
INFO - 2020-01-28 07:46:14 --> Security Class Initialized
DEBUG - 2020-01-28 07:46:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:46:14 --> Input Class Initialized
INFO - 2020-01-28 07:46:14 --> Language Class Initialized
INFO - 2020-01-28 07:46:14 --> Language Class Initialized
INFO - 2020-01-28 07:46:14 --> Config Class Initialized
INFO - 2020-01-28 07:46:14 --> Loader Class Initialized
INFO - 2020-01-28 07:46:14 --> Helper loaded: url_helper
INFO - 2020-01-28 07:46:14 --> Helper loaded: file_helper
INFO - 2020-01-28 07:46:14 --> Helper loaded: form_helper
INFO - 2020-01-28 07:46:15 --> Helper loaded: my_helper
INFO - 2020-01-28 07:46:15 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:46:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:46:15 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:46:15 --> Controller Class Initialized
INFO - 2020-01-28 07:46:15 --> Final output sent to browser
DEBUG - 2020-01-28 07:46:15 --> Total execution time: 0.6678
INFO - 2020-01-28 07:46:19 --> Config Class Initialized
INFO - 2020-01-28 07:46:19 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:46:19 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:46:19 --> Utf8 Class Initialized
INFO - 2020-01-28 07:46:19 --> URI Class Initialized
INFO - 2020-01-28 07:46:19 --> Router Class Initialized
INFO - 2020-01-28 07:46:19 --> Output Class Initialized
INFO - 2020-01-28 07:46:19 --> Security Class Initialized
DEBUG - 2020-01-28 07:46:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:46:19 --> Input Class Initialized
INFO - 2020-01-28 07:46:19 --> Language Class Initialized
INFO - 2020-01-28 07:46:19 --> Language Class Initialized
INFO - 2020-01-28 07:46:19 --> Config Class Initialized
INFO - 2020-01-28 07:46:19 --> Loader Class Initialized
INFO - 2020-01-28 07:46:19 --> Helper loaded: url_helper
INFO - 2020-01-28 07:46:19 --> Helper loaded: file_helper
INFO - 2020-01-28 07:46:19 --> Helper loaded: form_helper
INFO - 2020-01-28 07:46:19 --> Helper loaded: my_helper
INFO - 2020-01-28 07:46:19 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:46:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:46:19 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:46:19 --> Controller Class Initialized
DEBUG - 2020-01-28 07:46:19 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/cetak.php
INFO - 2020-01-28 07:46:19 --> Final output sent to browser
DEBUG - 2020-01-28 07:46:19 --> Total execution time: 0.8681
INFO - 2020-01-28 07:46:30 --> Config Class Initialized
INFO - 2020-01-28 07:46:30 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:46:30 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:46:30 --> Utf8 Class Initialized
INFO - 2020-01-28 07:46:30 --> URI Class Initialized
INFO - 2020-01-28 07:46:30 --> Router Class Initialized
INFO - 2020-01-28 07:46:30 --> Output Class Initialized
INFO - 2020-01-28 07:46:30 --> Security Class Initialized
DEBUG - 2020-01-28 07:46:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:46:30 --> Input Class Initialized
INFO - 2020-01-28 07:46:30 --> Language Class Initialized
INFO - 2020-01-28 07:46:30 --> Language Class Initialized
INFO - 2020-01-28 07:46:30 --> Config Class Initialized
INFO - 2020-01-28 07:46:30 --> Loader Class Initialized
INFO - 2020-01-28 07:46:30 --> Helper loaded: url_helper
INFO - 2020-01-28 07:46:30 --> Helper loaded: file_helper
INFO - 2020-01-28 07:46:30 --> Helper loaded: form_helper
INFO - 2020-01-28 07:46:30 --> Helper loaded: my_helper
INFO - 2020-01-28 07:46:30 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:46:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:46:30 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:46:30 --> Controller Class Initialized
DEBUG - 2020-01-28 07:46:30 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/list.php
DEBUG - 2020-01-28 07:46:30 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 07:46:30 --> Final output sent to browser
DEBUG - 2020-01-28 07:46:31 --> Total execution time: 0.8700
INFO - 2020-01-28 07:46:33 --> Config Class Initialized
INFO - 2020-01-28 07:46:33 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:46:33 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:46:33 --> Utf8 Class Initialized
INFO - 2020-01-28 07:46:33 --> URI Class Initialized
INFO - 2020-01-28 07:46:33 --> Router Class Initialized
INFO - 2020-01-28 07:46:33 --> Output Class Initialized
INFO - 2020-01-28 07:46:33 --> Security Class Initialized
DEBUG - 2020-01-28 07:46:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:46:33 --> Input Class Initialized
INFO - 2020-01-28 07:46:33 --> Language Class Initialized
INFO - 2020-01-28 07:46:33 --> Language Class Initialized
INFO - 2020-01-28 07:46:33 --> Config Class Initialized
INFO - 2020-01-28 07:46:33 --> Loader Class Initialized
INFO - 2020-01-28 07:46:33 --> Helper loaded: url_helper
INFO - 2020-01-28 07:46:33 --> Helper loaded: file_helper
INFO - 2020-01-28 07:46:33 --> Helper loaded: form_helper
INFO - 2020-01-28 07:46:33 --> Helper loaded: my_helper
INFO - 2020-01-28 07:46:33 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:46:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:46:34 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:46:34 --> Controller Class Initialized
DEBUG - 2020-01-28 07:46:34 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:46:34 --> Final output sent to browser
DEBUG - 2020-01-28 07:46:34 --> Total execution time: 0.9117
INFO - 2020-01-28 07:46:55 --> Config Class Initialized
INFO - 2020-01-28 07:46:55 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:46:56 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:46:56 --> Utf8 Class Initialized
INFO - 2020-01-28 07:46:56 --> URI Class Initialized
INFO - 2020-01-28 07:46:56 --> Router Class Initialized
INFO - 2020-01-28 07:46:56 --> Output Class Initialized
INFO - 2020-01-28 07:46:56 --> Security Class Initialized
DEBUG - 2020-01-28 07:46:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:46:56 --> Input Class Initialized
INFO - 2020-01-28 07:46:56 --> Language Class Initialized
INFO - 2020-01-28 07:46:56 --> Language Class Initialized
INFO - 2020-01-28 07:46:56 --> Config Class Initialized
INFO - 2020-01-28 07:46:56 --> Loader Class Initialized
INFO - 2020-01-28 07:46:56 --> Helper loaded: url_helper
INFO - 2020-01-28 07:46:56 --> Helper loaded: file_helper
INFO - 2020-01-28 07:46:56 --> Helper loaded: form_helper
INFO - 2020-01-28 07:46:56 --> Helper loaded: my_helper
INFO - 2020-01-28 07:46:56 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:46:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:46:56 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:46:56 --> Controller Class Initialized
DEBUG - 2020-01-28 07:46:56 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/view_mapel/views/v_view_mapel.php
DEBUG - 2020-01-28 07:46:56 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 07:46:56 --> Final output sent to browser
DEBUG - 2020-01-28 07:46:56 --> Total execution time: 0.7834
INFO - 2020-01-28 07:47:14 --> Config Class Initialized
INFO - 2020-01-28 07:47:14 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:47:14 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:47:14 --> Utf8 Class Initialized
INFO - 2020-01-28 07:47:14 --> URI Class Initialized
INFO - 2020-01-28 07:47:14 --> Router Class Initialized
INFO - 2020-01-28 07:47:14 --> Output Class Initialized
INFO - 2020-01-28 07:47:14 --> Security Class Initialized
DEBUG - 2020-01-28 07:47:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:47:14 --> Input Class Initialized
INFO - 2020-01-28 07:47:14 --> Language Class Initialized
INFO - 2020-01-28 07:47:14 --> Language Class Initialized
INFO - 2020-01-28 07:47:14 --> Config Class Initialized
INFO - 2020-01-28 07:47:14 --> Loader Class Initialized
INFO - 2020-01-28 07:47:14 --> Helper loaded: url_helper
INFO - 2020-01-28 07:47:14 --> Helper loaded: file_helper
INFO - 2020-01-28 07:47:14 --> Helper loaded: form_helper
INFO - 2020-01-28 07:47:14 --> Helper loaded: my_helper
INFO - 2020-01-28 07:47:15 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:47:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:47:15 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:47:15 --> Controller Class Initialized
DEBUG - 2020-01-28 07:47:15 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/login/views/login.php
DEBUG - 2020-01-28 07:47:15 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 07:47:15 --> Final output sent to browser
DEBUG - 2020-01-28 07:47:15 --> Total execution time: 0.8462
INFO - 2020-01-28 07:47:19 --> Config Class Initialized
INFO - 2020-01-28 07:47:20 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:47:20 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:47:20 --> Utf8 Class Initialized
INFO - 2020-01-28 07:47:20 --> URI Class Initialized
INFO - 2020-01-28 07:47:20 --> Router Class Initialized
INFO - 2020-01-28 07:47:20 --> Output Class Initialized
INFO - 2020-01-28 07:47:20 --> Security Class Initialized
DEBUG - 2020-01-28 07:47:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:47:20 --> Input Class Initialized
INFO - 2020-01-28 07:47:20 --> Language Class Initialized
INFO - 2020-01-28 07:47:20 --> Language Class Initialized
INFO - 2020-01-28 07:47:20 --> Config Class Initialized
INFO - 2020-01-28 07:47:20 --> Loader Class Initialized
INFO - 2020-01-28 07:47:20 --> Helper loaded: url_helper
INFO - 2020-01-28 07:47:20 --> Helper loaded: file_helper
INFO - 2020-01-28 07:47:20 --> Helper loaded: form_helper
INFO - 2020-01-28 07:47:20 --> Helper loaded: my_helper
INFO - 2020-01-28 07:47:20 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:47:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:47:20 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:47:20 --> Controller Class Initialized
INFO - 2020-01-28 07:47:20 --> Helper loaded: cookie_helper
INFO - 2020-01-28 07:47:20 --> Final output sent to browser
DEBUG - 2020-01-28 07:47:20 --> Total execution time: 0.8007
INFO - 2020-01-28 07:47:22 --> Config Class Initialized
INFO - 2020-01-28 07:47:22 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:47:22 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:47:22 --> Utf8 Class Initialized
INFO - 2020-01-28 07:47:22 --> URI Class Initialized
INFO - 2020-01-28 07:47:22 --> Router Class Initialized
INFO - 2020-01-28 07:47:22 --> Output Class Initialized
INFO - 2020-01-28 07:47:23 --> Security Class Initialized
DEBUG - 2020-01-28 07:47:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:47:23 --> Input Class Initialized
INFO - 2020-01-28 07:47:23 --> Language Class Initialized
INFO - 2020-01-28 07:47:23 --> Language Class Initialized
INFO - 2020-01-28 07:47:23 --> Config Class Initialized
INFO - 2020-01-28 07:47:23 --> Loader Class Initialized
INFO - 2020-01-28 07:47:23 --> Helper loaded: url_helper
INFO - 2020-01-28 07:47:23 --> Helper loaded: file_helper
INFO - 2020-01-28 07:47:23 --> Helper loaded: form_helper
INFO - 2020-01-28 07:47:23 --> Helper loaded: my_helper
INFO - 2020-01-28 07:47:23 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:47:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:47:23 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:47:23 --> Controller Class Initialized
DEBUG - 2020-01-28 07:47:23 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/home/views/v_home.php
DEBUG - 2020-01-28 07:47:23 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 07:47:23 --> Final output sent to browser
DEBUG - 2020-01-28 07:47:23 --> Total execution time: 0.9427
INFO - 2020-01-28 07:47:27 --> Config Class Initialized
INFO - 2020-01-28 07:47:27 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:47:27 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:47:27 --> Utf8 Class Initialized
INFO - 2020-01-28 07:47:27 --> URI Class Initialized
INFO - 2020-01-28 07:47:28 --> Router Class Initialized
INFO - 2020-01-28 07:47:28 --> Output Class Initialized
INFO - 2020-01-28 07:47:28 --> Security Class Initialized
DEBUG - 2020-01-28 07:47:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:47:28 --> Input Class Initialized
INFO - 2020-01-28 07:47:28 --> Language Class Initialized
INFO - 2020-01-28 07:47:28 --> Language Class Initialized
INFO - 2020-01-28 07:47:28 --> Config Class Initialized
INFO - 2020-01-28 07:47:28 --> Loader Class Initialized
INFO - 2020-01-28 07:47:28 --> Helper loaded: url_helper
INFO - 2020-01-28 07:47:28 --> Helper loaded: file_helper
INFO - 2020-01-28 07:47:28 --> Helper loaded: form_helper
INFO - 2020-01-28 07:47:28 --> Helper loaded: my_helper
INFO - 2020-01-28 07:47:28 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:47:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:47:28 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:47:28 --> Controller Class Initialized
DEBUG - 2020-01-28 07:47:28 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/data_mapel/views/list.php
DEBUG - 2020-01-28 07:47:28 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 07:47:28 --> Final output sent to browser
DEBUG - 2020-01-28 07:47:28 --> Total execution time: 1.0439
INFO - 2020-01-28 07:47:29 --> Config Class Initialized
INFO - 2020-01-28 07:47:29 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:47:29 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:47:29 --> Utf8 Class Initialized
INFO - 2020-01-28 07:47:29 --> URI Class Initialized
INFO - 2020-01-28 07:47:29 --> Router Class Initialized
INFO - 2020-01-28 07:47:29 --> Output Class Initialized
INFO - 2020-01-28 07:47:29 --> Security Class Initialized
DEBUG - 2020-01-28 07:47:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:47:29 --> Input Class Initialized
INFO - 2020-01-28 07:47:29 --> Language Class Initialized
INFO - 2020-01-28 07:47:29 --> Language Class Initialized
INFO - 2020-01-28 07:47:29 --> Config Class Initialized
INFO - 2020-01-28 07:47:29 --> Loader Class Initialized
INFO - 2020-01-28 07:47:29 --> Helper loaded: url_helper
INFO - 2020-01-28 07:47:29 --> Helper loaded: file_helper
INFO - 2020-01-28 07:47:29 --> Helper loaded: form_helper
INFO - 2020-01-28 07:47:29 --> Helper loaded: my_helper
INFO - 2020-01-28 07:47:29 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:47:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:47:29 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:47:29 --> Controller Class Initialized
INFO - 2020-01-28 07:47:31 --> Config Class Initialized
INFO - 2020-01-28 07:47:31 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:47:31 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:47:31 --> Utf8 Class Initialized
INFO - 2020-01-28 07:47:31 --> URI Class Initialized
INFO - 2020-01-28 07:47:31 --> Router Class Initialized
INFO - 2020-01-28 07:47:31 --> Output Class Initialized
INFO - 2020-01-28 07:47:31 --> Security Class Initialized
DEBUG - 2020-01-28 07:47:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:47:32 --> Input Class Initialized
INFO - 2020-01-28 07:47:32 --> Language Class Initialized
INFO - 2020-01-28 07:47:32 --> Language Class Initialized
INFO - 2020-01-28 07:47:32 --> Config Class Initialized
INFO - 2020-01-28 07:47:32 --> Loader Class Initialized
INFO - 2020-01-28 07:47:32 --> Helper loaded: url_helper
INFO - 2020-01-28 07:47:32 --> Helper loaded: file_helper
INFO - 2020-01-28 07:47:32 --> Helper loaded: form_helper
INFO - 2020-01-28 07:47:32 --> Helper loaded: my_helper
INFO - 2020-01-28 07:47:32 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:47:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:47:32 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:47:32 --> Controller Class Initialized
INFO - 2020-01-28 07:47:34 --> Config Class Initialized
INFO - 2020-01-28 07:47:34 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:47:34 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:47:34 --> Utf8 Class Initialized
INFO - 2020-01-28 07:47:34 --> URI Class Initialized
INFO - 2020-01-28 07:47:34 --> Router Class Initialized
INFO - 2020-01-28 07:47:34 --> Output Class Initialized
INFO - 2020-01-28 07:47:34 --> Security Class Initialized
DEBUG - 2020-01-28 07:47:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:47:35 --> Input Class Initialized
INFO - 2020-01-28 07:47:35 --> Language Class Initialized
INFO - 2020-01-28 07:47:35 --> Language Class Initialized
INFO - 2020-01-28 07:47:35 --> Config Class Initialized
INFO - 2020-01-28 07:47:35 --> Loader Class Initialized
INFO - 2020-01-28 07:47:35 --> Helper loaded: url_helper
INFO - 2020-01-28 07:47:35 --> Helper loaded: file_helper
INFO - 2020-01-28 07:47:35 --> Helper loaded: form_helper
INFO - 2020-01-28 07:47:35 --> Helper loaded: my_helper
INFO - 2020-01-28 07:47:35 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:47:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:47:35 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:47:35 --> Controller Class Initialized
INFO - 2020-01-28 07:47:35 --> Final output sent to browser
DEBUG - 2020-01-28 07:47:35 --> Total execution time: 0.7421
INFO - 2020-01-28 07:47:38 --> Config Class Initialized
INFO - 2020-01-28 07:47:38 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:47:38 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:47:38 --> Utf8 Class Initialized
INFO - 2020-01-28 07:47:38 --> URI Class Initialized
INFO - 2020-01-28 07:47:38 --> Router Class Initialized
INFO - 2020-01-28 07:47:38 --> Output Class Initialized
INFO - 2020-01-28 07:47:38 --> Security Class Initialized
DEBUG - 2020-01-28 07:47:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:47:38 --> Input Class Initialized
INFO - 2020-01-28 07:47:38 --> Language Class Initialized
INFO - 2020-01-28 07:47:38 --> Language Class Initialized
INFO - 2020-01-28 07:47:38 --> Config Class Initialized
INFO - 2020-01-28 07:47:38 --> Loader Class Initialized
INFO - 2020-01-28 07:47:38 --> Helper loaded: url_helper
INFO - 2020-01-28 07:47:39 --> Helper loaded: file_helper
INFO - 2020-01-28 07:47:39 --> Helper loaded: form_helper
INFO - 2020-01-28 07:47:39 --> Helper loaded: my_helper
INFO - 2020-01-28 07:47:39 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:47:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:47:39 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:47:39 --> Controller Class Initialized
INFO - 2020-01-28 07:47:39 --> Final output sent to browser
DEBUG - 2020-01-28 07:47:39 --> Total execution time: 0.6858
INFO - 2020-01-28 07:47:39 --> Config Class Initialized
INFO - 2020-01-28 07:47:39 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:47:39 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:47:39 --> Utf8 Class Initialized
INFO - 2020-01-28 07:47:39 --> URI Class Initialized
INFO - 2020-01-28 07:47:39 --> Router Class Initialized
INFO - 2020-01-28 07:47:39 --> Output Class Initialized
INFO - 2020-01-28 07:47:39 --> Security Class Initialized
DEBUG - 2020-01-28 07:47:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:47:39 --> Input Class Initialized
INFO - 2020-01-28 07:47:39 --> Language Class Initialized
INFO - 2020-01-28 07:47:39 --> Language Class Initialized
INFO - 2020-01-28 07:47:39 --> Config Class Initialized
INFO - 2020-01-28 07:47:39 --> Loader Class Initialized
INFO - 2020-01-28 07:47:39 --> Helper loaded: url_helper
INFO - 2020-01-28 07:47:39 --> Helper loaded: file_helper
INFO - 2020-01-28 07:47:39 --> Helper loaded: form_helper
INFO - 2020-01-28 07:47:39 --> Helper loaded: my_helper
INFO - 2020-01-28 07:47:39 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:47:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:47:40 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:47:40 --> Controller Class Initialized
INFO - 2020-01-28 07:47:44 --> Config Class Initialized
INFO - 2020-01-28 07:47:44 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:47:44 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:47:45 --> Utf8 Class Initialized
INFO - 2020-01-28 07:47:45 --> URI Class Initialized
INFO - 2020-01-28 07:47:45 --> Router Class Initialized
INFO - 2020-01-28 07:47:45 --> Output Class Initialized
INFO - 2020-01-28 07:47:45 --> Security Class Initialized
DEBUG - 2020-01-28 07:47:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:47:45 --> Input Class Initialized
INFO - 2020-01-28 07:47:45 --> Language Class Initialized
INFO - 2020-01-28 07:47:45 --> Language Class Initialized
INFO - 2020-01-28 07:47:45 --> Config Class Initialized
INFO - 2020-01-28 07:47:45 --> Loader Class Initialized
INFO - 2020-01-28 07:47:45 --> Helper loaded: url_helper
INFO - 2020-01-28 07:47:45 --> Helper loaded: file_helper
INFO - 2020-01-28 07:47:45 --> Helper loaded: form_helper
INFO - 2020-01-28 07:47:45 --> Helper loaded: my_helper
INFO - 2020-01-28 07:47:45 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:47:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:47:45 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:47:45 --> Controller Class Initialized
DEBUG - 2020-01-28 07:47:45 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:47:45 --> Final output sent to browser
DEBUG - 2020-01-28 07:47:45 --> Total execution time: 0.8599
INFO - 2020-01-28 07:50:38 --> Config Class Initialized
INFO - 2020-01-28 07:50:38 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:50:38 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:50:38 --> Utf8 Class Initialized
INFO - 2020-01-28 07:50:38 --> URI Class Initialized
INFO - 2020-01-28 07:50:38 --> Router Class Initialized
INFO - 2020-01-28 07:50:38 --> Output Class Initialized
INFO - 2020-01-28 07:50:38 --> Security Class Initialized
DEBUG - 2020-01-28 07:50:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:50:38 --> Input Class Initialized
INFO - 2020-01-28 07:50:38 --> Language Class Initialized
INFO - 2020-01-28 07:50:38 --> Language Class Initialized
INFO - 2020-01-28 07:50:38 --> Config Class Initialized
INFO - 2020-01-28 07:50:38 --> Loader Class Initialized
INFO - 2020-01-28 07:50:38 --> Helper loaded: url_helper
INFO - 2020-01-28 07:50:38 --> Helper loaded: file_helper
INFO - 2020-01-28 07:50:38 --> Helper loaded: form_helper
INFO - 2020-01-28 07:50:38 --> Helper loaded: my_helper
INFO - 2020-01-28 07:50:38 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:50:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:50:38 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:50:38 --> Controller Class Initialized
DEBUG - 2020-01-28 07:50:38 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_keterampilan/views/list.php
DEBUG - 2020-01-28 07:50:38 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 07:50:38 --> Final output sent to browser
DEBUG - 2020-01-28 07:50:39 --> Total execution time: 0.7582
INFO - 2020-01-28 07:50:41 --> Config Class Initialized
INFO - 2020-01-28 07:50:41 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:50:41 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:50:41 --> Utf8 Class Initialized
INFO - 2020-01-28 07:50:41 --> URI Class Initialized
INFO - 2020-01-28 07:50:42 --> Router Class Initialized
INFO - 2020-01-28 07:50:42 --> Output Class Initialized
INFO - 2020-01-28 07:50:42 --> Security Class Initialized
DEBUG - 2020-01-28 07:50:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:50:42 --> Input Class Initialized
INFO - 2020-01-28 07:50:42 --> Language Class Initialized
INFO - 2020-01-28 07:50:42 --> Language Class Initialized
INFO - 2020-01-28 07:50:42 --> Config Class Initialized
INFO - 2020-01-28 07:50:42 --> Loader Class Initialized
INFO - 2020-01-28 07:50:42 --> Helper loaded: url_helper
INFO - 2020-01-28 07:50:42 --> Helper loaded: file_helper
INFO - 2020-01-28 07:50:42 --> Helper loaded: form_helper
INFO - 2020-01-28 07:50:42 --> Helper loaded: my_helper
INFO - 2020-01-28 07:50:42 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:50:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:50:42 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:50:42 --> Controller Class Initialized
INFO - 2020-01-28 07:50:42 --> Final output sent to browser
DEBUG - 2020-01-28 07:50:42 --> Total execution time: 0.7322
INFO - 2020-01-28 07:51:02 --> Config Class Initialized
INFO - 2020-01-28 07:51:02 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:51:02 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:51:02 --> Utf8 Class Initialized
INFO - 2020-01-28 07:51:02 --> URI Class Initialized
INFO - 2020-01-28 07:51:02 --> Router Class Initialized
INFO - 2020-01-28 07:51:02 --> Output Class Initialized
INFO - 2020-01-28 07:51:02 --> Security Class Initialized
DEBUG - 2020-01-28 07:51:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:51:02 --> Input Class Initialized
INFO - 2020-01-28 07:51:02 --> Language Class Initialized
INFO - 2020-01-28 07:51:02 --> Language Class Initialized
INFO - 2020-01-28 07:51:02 --> Config Class Initialized
INFO - 2020-01-28 07:51:02 --> Loader Class Initialized
INFO - 2020-01-28 07:51:02 --> Helper loaded: url_helper
INFO - 2020-01-28 07:51:02 --> Helper loaded: file_helper
INFO - 2020-01-28 07:51:02 --> Helper loaded: form_helper
INFO - 2020-01-28 07:51:03 --> Helper loaded: my_helper
INFO - 2020-01-28 07:51:03 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:51:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:51:03 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:51:03 --> Controller Class Initialized
INFO - 2020-01-28 07:51:03 --> Final output sent to browser
DEBUG - 2020-01-28 07:51:03 --> Total execution time: 0.8394
INFO - 2020-01-28 07:51:03 --> Config Class Initialized
INFO - 2020-01-28 07:51:03 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:51:03 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:51:03 --> Utf8 Class Initialized
INFO - 2020-01-28 07:51:03 --> URI Class Initialized
INFO - 2020-01-28 07:51:03 --> Router Class Initialized
INFO - 2020-01-28 07:51:03 --> Output Class Initialized
INFO - 2020-01-28 07:51:03 --> Security Class Initialized
DEBUG - 2020-01-28 07:51:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:51:03 --> Input Class Initialized
INFO - 2020-01-28 07:51:04 --> Language Class Initialized
INFO - 2020-01-28 07:51:04 --> Language Class Initialized
INFO - 2020-01-28 07:51:04 --> Config Class Initialized
INFO - 2020-01-28 07:51:04 --> Loader Class Initialized
INFO - 2020-01-28 07:51:04 --> Helper loaded: url_helper
INFO - 2020-01-28 07:51:04 --> Helper loaded: file_helper
INFO - 2020-01-28 07:51:04 --> Helper loaded: form_helper
INFO - 2020-01-28 07:51:04 --> Helper loaded: my_helper
INFO - 2020-01-28 07:51:04 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:51:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:51:04 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:51:04 --> Controller Class Initialized
DEBUG - 2020-01-28 07:51:04 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_keterampilan/views/list.php
DEBUG - 2020-01-28 07:51:04 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 07:51:04 --> Final output sent to browser
DEBUG - 2020-01-28 07:51:04 --> Total execution time: 1.3069
INFO - 2020-01-28 07:51:07 --> Config Class Initialized
INFO - 2020-01-28 07:51:07 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:51:07 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:51:07 --> Utf8 Class Initialized
INFO - 2020-01-28 07:51:07 --> URI Class Initialized
INFO - 2020-01-28 07:51:07 --> Router Class Initialized
INFO - 2020-01-28 07:51:07 --> Output Class Initialized
INFO - 2020-01-28 07:51:07 --> Security Class Initialized
DEBUG - 2020-01-28 07:51:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:51:07 --> Input Class Initialized
INFO - 2020-01-28 07:51:07 --> Language Class Initialized
INFO - 2020-01-28 07:51:07 --> Language Class Initialized
INFO - 2020-01-28 07:51:07 --> Config Class Initialized
INFO - 2020-01-28 07:51:07 --> Loader Class Initialized
INFO - 2020-01-28 07:51:07 --> Helper loaded: url_helper
INFO - 2020-01-28 07:51:07 --> Helper loaded: file_helper
INFO - 2020-01-28 07:51:07 --> Helper loaded: form_helper
INFO - 2020-01-28 07:51:07 --> Helper loaded: my_helper
INFO - 2020-01-28 07:51:07 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:51:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:51:07 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:51:08 --> Controller Class Initialized
INFO - 2020-01-28 07:51:08 --> Final output sent to browser
DEBUG - 2020-01-28 07:51:08 --> Total execution time: 0.6389
INFO - 2020-01-28 07:51:13 --> Config Class Initialized
INFO - 2020-01-28 07:51:13 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:51:13 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:51:13 --> Utf8 Class Initialized
INFO - 2020-01-28 07:51:13 --> URI Class Initialized
INFO - 2020-01-28 07:51:13 --> Router Class Initialized
INFO - 2020-01-28 07:51:13 --> Output Class Initialized
INFO - 2020-01-28 07:51:13 --> Security Class Initialized
DEBUG - 2020-01-28 07:51:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:51:13 --> Input Class Initialized
INFO - 2020-01-28 07:51:14 --> Language Class Initialized
INFO - 2020-01-28 07:51:14 --> Language Class Initialized
INFO - 2020-01-28 07:51:14 --> Config Class Initialized
INFO - 2020-01-28 07:51:14 --> Loader Class Initialized
INFO - 2020-01-28 07:51:14 --> Helper loaded: url_helper
INFO - 2020-01-28 07:51:14 --> Helper loaded: file_helper
INFO - 2020-01-28 07:51:14 --> Helper loaded: form_helper
INFO - 2020-01-28 07:51:14 --> Helper loaded: my_helper
INFO - 2020-01-28 07:51:14 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:51:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:51:14 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:51:14 --> Controller Class Initialized
INFO - 2020-01-28 07:51:14 --> Final output sent to browser
DEBUG - 2020-01-28 07:51:14 --> Total execution time: 0.7696
INFO - 2020-01-28 07:51:16 --> Config Class Initialized
INFO - 2020-01-28 07:51:16 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:51:16 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:51:16 --> Utf8 Class Initialized
INFO - 2020-01-28 07:51:16 --> URI Class Initialized
INFO - 2020-01-28 07:51:16 --> Router Class Initialized
INFO - 2020-01-28 07:51:16 --> Output Class Initialized
INFO - 2020-01-28 07:51:16 --> Security Class Initialized
DEBUG - 2020-01-28 07:51:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:51:16 --> Input Class Initialized
INFO - 2020-01-28 07:51:16 --> Language Class Initialized
INFO - 2020-01-28 07:51:16 --> Language Class Initialized
INFO - 2020-01-28 07:51:17 --> Config Class Initialized
INFO - 2020-01-28 07:51:17 --> Loader Class Initialized
INFO - 2020-01-28 07:51:17 --> Helper loaded: url_helper
INFO - 2020-01-28 07:51:17 --> Helper loaded: file_helper
INFO - 2020-01-28 07:51:17 --> Helper loaded: form_helper
INFO - 2020-01-28 07:51:17 --> Helper loaded: my_helper
INFO - 2020-01-28 07:51:17 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:51:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:51:17 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:51:17 --> Controller Class Initialized
DEBUG - 2020-01-28 07:51:17 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:51:17 --> Final output sent to browser
DEBUG - 2020-01-28 07:51:17 --> Total execution time: 0.8368
INFO - 2020-01-28 07:54:48 --> Config Class Initialized
INFO - 2020-01-28 07:54:48 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:54:48 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:54:48 --> Utf8 Class Initialized
INFO - 2020-01-28 07:54:48 --> URI Class Initialized
INFO - 2020-01-28 07:54:48 --> Router Class Initialized
INFO - 2020-01-28 07:54:48 --> Output Class Initialized
INFO - 2020-01-28 07:54:48 --> Security Class Initialized
DEBUG - 2020-01-28 07:54:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:54:48 --> Input Class Initialized
INFO - 2020-01-28 07:54:48 --> Language Class Initialized
INFO - 2020-01-28 07:54:48 --> Language Class Initialized
INFO - 2020-01-28 07:54:48 --> Config Class Initialized
INFO - 2020-01-28 07:54:48 --> Loader Class Initialized
INFO - 2020-01-28 07:54:48 --> Helper loaded: url_helper
INFO - 2020-01-28 07:54:48 --> Helper loaded: file_helper
INFO - 2020-01-28 07:54:48 --> Helper loaded: form_helper
INFO - 2020-01-28 07:54:48 --> Helper loaded: my_helper
INFO - 2020-01-28 07:54:48 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:54:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:54:48 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:54:48 --> Controller Class Initialized
ERROR - 2020-01-28 07:54:48 --> Severity: Notice --> Undefined variable: npa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 388
DEBUG - 2020-01-28 07:54:48 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:54:48 --> Final output sent to browser
DEBUG - 2020-01-28 07:54:49 --> Total execution time: 0.8455
INFO - 2020-01-28 07:55:08 --> Config Class Initialized
INFO - 2020-01-28 07:55:08 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:55:08 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:55:08 --> Utf8 Class Initialized
INFO - 2020-01-28 07:55:08 --> URI Class Initialized
INFO - 2020-01-28 07:55:08 --> Router Class Initialized
INFO - 2020-01-28 07:55:08 --> Output Class Initialized
INFO - 2020-01-28 07:55:08 --> Security Class Initialized
DEBUG - 2020-01-28 07:55:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:55:08 --> Input Class Initialized
INFO - 2020-01-28 07:55:08 --> Language Class Initialized
INFO - 2020-01-28 07:55:08 --> Language Class Initialized
INFO - 2020-01-28 07:55:08 --> Config Class Initialized
INFO - 2020-01-28 07:55:08 --> Loader Class Initialized
INFO - 2020-01-28 07:55:08 --> Helper loaded: url_helper
INFO - 2020-01-28 07:55:09 --> Helper loaded: file_helper
INFO - 2020-01-28 07:55:09 --> Helper loaded: form_helper
INFO - 2020-01-28 07:55:09 --> Helper loaded: my_helper
INFO - 2020-01-28 07:55:09 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:55:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:55:09 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:55:09 --> Controller Class Initialized
ERROR - 2020-01-28 07:55:09 --> Severity: Notice --> Undefined variable: npa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 388
DEBUG - 2020-01-28 07:55:09 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:55:09 --> Final output sent to browser
DEBUG - 2020-01-28 07:55:09 --> Total execution time: 0.8761
INFO - 2020-01-28 07:55:41 --> Config Class Initialized
INFO - 2020-01-28 07:55:41 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:55:41 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:55:41 --> Utf8 Class Initialized
INFO - 2020-01-28 07:55:41 --> URI Class Initialized
INFO - 2020-01-28 07:55:42 --> Router Class Initialized
INFO - 2020-01-28 07:55:42 --> Output Class Initialized
INFO - 2020-01-28 07:55:42 --> Security Class Initialized
DEBUG - 2020-01-28 07:55:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:55:42 --> Input Class Initialized
INFO - 2020-01-28 07:55:42 --> Language Class Initialized
INFO - 2020-01-28 07:55:42 --> Language Class Initialized
INFO - 2020-01-28 07:55:42 --> Config Class Initialized
INFO - 2020-01-28 07:55:42 --> Loader Class Initialized
INFO - 2020-01-28 07:55:42 --> Helper loaded: url_helper
INFO - 2020-01-28 07:55:42 --> Helper loaded: file_helper
INFO - 2020-01-28 07:55:42 --> Helper loaded: form_helper
INFO - 2020-01-28 07:55:42 --> Helper loaded: my_helper
INFO - 2020-01-28 07:55:42 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:55:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:55:42 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:55:42 --> Controller Class Initialized
ERROR - 2020-01-28 07:55:42 --> Severity: Notice --> Undefined variable: npa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 388
DEBUG - 2020-01-28 07:55:42 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:55:42 --> Final output sent to browser
DEBUG - 2020-01-28 07:55:42 --> Total execution time: 0.9129
INFO - 2020-01-28 07:56:12 --> Config Class Initialized
INFO - 2020-01-28 07:56:12 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:56:12 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:56:12 --> Utf8 Class Initialized
INFO - 2020-01-28 07:56:13 --> URI Class Initialized
INFO - 2020-01-28 07:56:13 --> Router Class Initialized
INFO - 2020-01-28 07:56:13 --> Output Class Initialized
INFO - 2020-01-28 07:56:13 --> Security Class Initialized
DEBUG - 2020-01-28 07:56:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:56:13 --> Input Class Initialized
INFO - 2020-01-28 07:56:13 --> Language Class Initialized
INFO - 2020-01-28 07:56:13 --> Language Class Initialized
INFO - 2020-01-28 07:56:13 --> Config Class Initialized
INFO - 2020-01-28 07:56:13 --> Loader Class Initialized
INFO - 2020-01-28 07:56:13 --> Helper loaded: url_helper
INFO - 2020-01-28 07:56:13 --> Helper loaded: file_helper
INFO - 2020-01-28 07:56:13 --> Helper loaded: form_helper
INFO - 2020-01-28 07:56:13 --> Helper loaded: my_helper
INFO - 2020-01-28 07:56:13 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:56:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:56:13 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:56:13 --> Controller Class Initialized
ERROR - 2020-01-28 07:56:13 --> Severity: Notice --> Undefined variable: npa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 388
ERROR - 2020-01-28 07:56:13 --> Severity: Notice --> Undefined variable: npa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 389
DEBUG - 2020-01-28 07:56:13 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:56:13 --> Final output sent to browser
DEBUG - 2020-01-28 07:56:13 --> Total execution time: 0.9583
INFO - 2020-01-28 07:56:59 --> Config Class Initialized
INFO - 2020-01-28 07:56:59 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:56:59 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:56:59 --> Utf8 Class Initialized
INFO - 2020-01-28 07:56:59 --> URI Class Initialized
INFO - 2020-01-28 07:56:59 --> Router Class Initialized
INFO - 2020-01-28 07:56:59 --> Output Class Initialized
INFO - 2020-01-28 07:56:59 --> Security Class Initialized
DEBUG - 2020-01-28 07:56:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:56:59 --> Input Class Initialized
INFO - 2020-01-28 07:56:59 --> Language Class Initialized
INFO - 2020-01-28 07:56:59 --> Language Class Initialized
INFO - 2020-01-28 07:56:59 --> Config Class Initialized
INFO - 2020-01-28 07:56:59 --> Loader Class Initialized
INFO - 2020-01-28 07:56:59 --> Helper loaded: url_helper
INFO - 2020-01-28 07:56:59 --> Helper loaded: file_helper
INFO - 2020-01-28 07:57:00 --> Helper loaded: form_helper
INFO - 2020-01-28 07:57:00 --> Helper loaded: my_helper
INFO - 2020-01-28 07:57:00 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:57:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:57:00 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:57:00 --> Controller Class Initialized
ERROR - 2020-01-28 07:57:00 --> Severity: Notice --> Undefined variable: npa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 389
ERROR - 2020-01-28 07:57:00 --> Severity: Notice --> Undefined variable: nka E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 395
DEBUG - 2020-01-28 07:57:00 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:57:00 --> Final output sent to browser
DEBUG - 2020-01-28 07:57:00 --> Total execution time: 0.9024
INFO - 2020-01-28 07:57:03 --> Config Class Initialized
INFO - 2020-01-28 07:57:03 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:57:03 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:57:03 --> Utf8 Class Initialized
INFO - 2020-01-28 07:57:03 --> URI Class Initialized
INFO - 2020-01-28 07:57:03 --> Router Class Initialized
INFO - 2020-01-28 07:57:03 --> Output Class Initialized
INFO - 2020-01-28 07:57:03 --> Security Class Initialized
DEBUG - 2020-01-28 07:57:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:57:03 --> Input Class Initialized
INFO - 2020-01-28 07:57:03 --> Language Class Initialized
INFO - 2020-01-28 07:57:03 --> Language Class Initialized
INFO - 2020-01-28 07:57:03 --> Config Class Initialized
INFO - 2020-01-28 07:57:03 --> Loader Class Initialized
INFO - 2020-01-28 07:57:03 --> Helper loaded: url_helper
INFO - 2020-01-28 07:57:03 --> Helper loaded: file_helper
INFO - 2020-01-28 07:57:03 --> Helper loaded: form_helper
INFO - 2020-01-28 07:57:03 --> Helper loaded: my_helper
INFO - 2020-01-28 07:57:03 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:57:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:57:03 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:57:03 --> Controller Class Initialized
ERROR - 2020-01-28 07:57:04 --> Severity: Notice --> Undefined variable: npa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 389
ERROR - 2020-01-28 07:57:04 --> Severity: Notice --> Undefined variable: nka E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 395
DEBUG - 2020-01-28 07:57:04 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:57:04 --> Final output sent to browser
DEBUG - 2020-01-28 07:57:04 --> Total execution time: 1.1159
INFO - 2020-01-28 07:58:11 --> Config Class Initialized
INFO - 2020-01-28 07:58:11 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:58:11 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:58:11 --> Utf8 Class Initialized
INFO - 2020-01-28 07:58:12 --> URI Class Initialized
INFO - 2020-01-28 07:58:12 --> Router Class Initialized
INFO - 2020-01-28 07:58:12 --> Output Class Initialized
INFO - 2020-01-28 07:58:12 --> Security Class Initialized
DEBUG - 2020-01-28 07:58:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:58:12 --> Input Class Initialized
INFO - 2020-01-28 07:58:12 --> Language Class Initialized
INFO - 2020-01-28 07:58:12 --> Language Class Initialized
INFO - 2020-01-28 07:58:12 --> Config Class Initialized
INFO - 2020-01-28 07:58:12 --> Loader Class Initialized
INFO - 2020-01-28 07:58:12 --> Helper loaded: url_helper
INFO - 2020-01-28 07:58:12 --> Helper loaded: file_helper
INFO - 2020-01-28 07:58:12 --> Helper loaded: form_helper
INFO - 2020-01-28 07:58:12 --> Helper loaded: my_helper
INFO - 2020-01-28 07:58:12 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:58:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:58:12 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:58:12 --> Controller Class Initialized
ERROR - 2020-01-28 07:58:12 --> Severity: Notice --> Undefined variable: npa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 388
ERROR - 2020-01-28 07:58:12 --> Severity: Notice --> Undefined variable: npa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 389
ERROR - 2020-01-28 07:58:12 --> Severity: Notice --> Undefined variable: nka E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 395
DEBUG - 2020-01-28 07:58:13 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:58:13 --> Final output sent to browser
DEBUG - 2020-01-28 07:58:13 --> Total execution time: 1.3064
INFO - 2020-01-28 07:58:38 --> Config Class Initialized
INFO - 2020-01-28 07:58:38 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:58:38 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:58:38 --> Utf8 Class Initialized
INFO - 2020-01-28 07:58:38 --> URI Class Initialized
INFO - 2020-01-28 07:58:38 --> Router Class Initialized
INFO - 2020-01-28 07:58:38 --> Output Class Initialized
INFO - 2020-01-28 07:58:38 --> Security Class Initialized
DEBUG - 2020-01-28 07:58:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:58:38 --> Input Class Initialized
INFO - 2020-01-28 07:58:38 --> Language Class Initialized
INFO - 2020-01-28 07:58:39 --> Language Class Initialized
INFO - 2020-01-28 07:58:39 --> Config Class Initialized
INFO - 2020-01-28 07:58:39 --> Loader Class Initialized
INFO - 2020-01-28 07:58:39 --> Helper loaded: url_helper
INFO - 2020-01-28 07:58:39 --> Helper loaded: file_helper
INFO - 2020-01-28 07:58:39 --> Helper loaded: form_helper
INFO - 2020-01-28 07:58:39 --> Helper loaded: my_helper
INFO - 2020-01-28 07:58:39 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:58:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:58:39 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:58:39 --> Controller Class Initialized
ERROR - 2020-01-28 07:58:39 --> Severity: Notice --> Undefined variable: nka E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 388
ERROR - 2020-01-28 07:58:39 --> Severity: Notice --> Undefined variable: npa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 389
ERROR - 2020-01-28 07:58:39 --> Severity: Notice --> Undefined variable: nka E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 395
DEBUG - 2020-01-28 07:58:39 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:58:39 --> Final output sent to browser
DEBUG - 2020-01-28 07:58:39 --> Total execution time: 0.9847
INFO - 2020-01-28 07:58:58 --> Config Class Initialized
INFO - 2020-01-28 07:58:58 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:58:58 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:58:58 --> Utf8 Class Initialized
INFO - 2020-01-28 07:58:58 --> URI Class Initialized
INFO - 2020-01-28 07:58:58 --> Router Class Initialized
INFO - 2020-01-28 07:58:58 --> Output Class Initialized
INFO - 2020-01-28 07:58:58 --> Security Class Initialized
DEBUG - 2020-01-28 07:58:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:58:59 --> Input Class Initialized
INFO - 2020-01-28 07:58:59 --> Language Class Initialized
INFO - 2020-01-28 07:58:59 --> Language Class Initialized
INFO - 2020-01-28 07:58:59 --> Config Class Initialized
INFO - 2020-01-28 07:58:59 --> Loader Class Initialized
INFO - 2020-01-28 07:58:59 --> Helper loaded: url_helper
INFO - 2020-01-28 07:58:59 --> Helper loaded: file_helper
INFO - 2020-01-28 07:58:59 --> Helper loaded: form_helper
INFO - 2020-01-28 07:58:59 --> Helper loaded: my_helper
INFO - 2020-01-28 07:58:59 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:58:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:58:59 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:58:59 --> Controller Class Initialized
ERROR - 2020-01-28 07:58:59 --> Severity: Notice --> Undefined variable: npa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 389
ERROR - 2020-01-28 07:58:59 --> Severity: Notice --> Undefined variable: nka E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 395
DEBUG - 2020-01-28 07:58:59 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:58:59 --> Final output sent to browser
DEBUG - 2020-01-28 07:58:59 --> Total execution time: 0.9471
INFO - 2020-01-28 07:59:49 --> Config Class Initialized
INFO - 2020-01-28 07:59:49 --> Hooks Class Initialized
DEBUG - 2020-01-28 07:59:49 --> UTF-8 Support Enabled
INFO - 2020-01-28 07:59:49 --> Utf8 Class Initialized
INFO - 2020-01-28 07:59:49 --> URI Class Initialized
INFO - 2020-01-28 07:59:50 --> Router Class Initialized
INFO - 2020-01-28 07:59:50 --> Output Class Initialized
INFO - 2020-01-28 07:59:50 --> Security Class Initialized
DEBUG - 2020-01-28 07:59:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 07:59:50 --> Input Class Initialized
INFO - 2020-01-28 07:59:50 --> Language Class Initialized
INFO - 2020-01-28 07:59:50 --> Language Class Initialized
INFO - 2020-01-28 07:59:50 --> Config Class Initialized
INFO - 2020-01-28 07:59:50 --> Loader Class Initialized
INFO - 2020-01-28 07:59:50 --> Helper loaded: url_helper
INFO - 2020-01-28 07:59:50 --> Helper loaded: file_helper
INFO - 2020-01-28 07:59:50 --> Helper loaded: form_helper
INFO - 2020-01-28 07:59:50 --> Helper loaded: my_helper
INFO - 2020-01-28 07:59:50 --> Database Driver Class Initialized
DEBUG - 2020-01-28 07:59:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 07:59:50 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 07:59:50 --> Controller Class Initialized
ERROR - 2020-01-28 07:59:50 --> Severity: Notice --> Undefined variable: npa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 389
ERROR - 2020-01-28 07:59:50 --> Severity: Notice --> Undefined variable: nka E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 395
DEBUG - 2020-01-28 07:59:50 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 07:59:50 --> Final output sent to browser
DEBUG - 2020-01-28 07:59:50 --> Total execution time: 0.9604
INFO - 2020-01-28 08:00:07 --> Config Class Initialized
INFO - 2020-01-28 08:00:07 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:00:07 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:00:07 --> Utf8 Class Initialized
INFO - 2020-01-28 08:00:07 --> URI Class Initialized
INFO - 2020-01-28 08:00:07 --> Router Class Initialized
INFO - 2020-01-28 08:00:07 --> Output Class Initialized
INFO - 2020-01-28 08:00:07 --> Security Class Initialized
DEBUG - 2020-01-28 08:00:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:00:07 --> Input Class Initialized
INFO - 2020-01-28 08:00:07 --> Language Class Initialized
INFO - 2020-01-28 08:00:07 --> Language Class Initialized
INFO - 2020-01-28 08:00:07 --> Config Class Initialized
INFO - 2020-01-28 08:00:07 --> Loader Class Initialized
INFO - 2020-01-28 08:00:07 --> Helper loaded: url_helper
INFO - 2020-01-28 08:00:07 --> Helper loaded: file_helper
INFO - 2020-01-28 08:00:07 --> Helper loaded: form_helper
INFO - 2020-01-28 08:00:07 --> Helper loaded: my_helper
INFO - 2020-01-28 08:00:07 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:00:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:00:07 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:00:08 --> Controller Class Initialized
ERROR - 2020-01-28 08:00:08 --> Severity: Notice --> Undefined variable: npa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 390
ERROR - 2020-01-28 08:00:08 --> Severity: Notice --> Undefined variable: nka E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
DEBUG - 2020-01-28 08:00:08 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:00:08 --> Final output sent to browser
DEBUG - 2020-01-28 08:00:08 --> Total execution time: 0.9936
INFO - 2020-01-28 08:02:33 --> Config Class Initialized
INFO - 2020-01-28 08:02:33 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:02:33 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:02:33 --> Utf8 Class Initialized
INFO - 2020-01-28 08:02:33 --> URI Class Initialized
INFO - 2020-01-28 08:02:33 --> Router Class Initialized
INFO - 2020-01-28 08:02:33 --> Output Class Initialized
INFO - 2020-01-28 08:02:33 --> Security Class Initialized
DEBUG - 2020-01-28 08:02:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:02:33 --> Input Class Initialized
INFO - 2020-01-28 08:02:33 --> Language Class Initialized
INFO - 2020-01-28 08:02:33 --> Language Class Initialized
INFO - 2020-01-28 08:02:34 --> Config Class Initialized
INFO - 2020-01-28 08:02:34 --> Loader Class Initialized
INFO - 2020-01-28 08:02:34 --> Helper loaded: url_helper
INFO - 2020-01-28 08:02:34 --> Helper loaded: file_helper
INFO - 2020-01-28 08:02:34 --> Helper loaded: form_helper
INFO - 2020-01-28 08:02:34 --> Helper loaded: my_helper
INFO - 2020-01-28 08:02:34 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:02:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:02:34 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:02:34 --> Controller Class Initialized
ERROR - 2020-01-28 08:02:34 --> Severity: Notice --> Undefined variable: npa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 390
ERROR - 2020-01-28 08:02:34 --> Severity: Notice --> Undefined variable: nka E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
DEBUG - 2020-01-28 08:02:34 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:02:34 --> Final output sent to browser
DEBUG - 2020-01-28 08:02:34 --> Total execution time: 0.9899
INFO - 2020-01-28 08:04:56 --> Config Class Initialized
INFO - 2020-01-28 08:04:56 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:04:56 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:04:56 --> Utf8 Class Initialized
INFO - 2020-01-28 08:04:56 --> URI Class Initialized
INFO - 2020-01-28 08:04:56 --> Router Class Initialized
INFO - 2020-01-28 08:04:56 --> Output Class Initialized
INFO - 2020-01-28 08:04:56 --> Security Class Initialized
DEBUG - 2020-01-28 08:04:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:04:56 --> Input Class Initialized
INFO - 2020-01-28 08:04:56 --> Language Class Initialized
INFO - 2020-01-28 08:04:56 --> Language Class Initialized
INFO - 2020-01-28 08:04:56 --> Config Class Initialized
INFO - 2020-01-28 08:04:56 --> Loader Class Initialized
INFO - 2020-01-28 08:04:56 --> Helper loaded: url_helper
INFO - 2020-01-28 08:04:56 --> Helper loaded: file_helper
INFO - 2020-01-28 08:04:56 --> Helper loaded: form_helper
INFO - 2020-01-28 08:04:56 --> Helper loaded: my_helper
INFO - 2020-01-28 08:04:56 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:04:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:04:56 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:04:56 --> Controller Class Initialized
ERROR - 2020-01-28 08:04:56 --> Severity: Notice --> Undefined variable: npa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 390
ERROR - 2020-01-28 08:04:56 --> Severity: Notice --> Undefined variable: nka E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
DEBUG - 2020-01-28 08:04:56 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:04:57 --> Final output sent to browser
DEBUG - 2020-01-28 08:04:57 --> Total execution time: 0.9576
INFO - 2020-01-28 08:05:02 --> Config Class Initialized
INFO - 2020-01-28 08:05:02 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:05:02 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:05:02 --> Utf8 Class Initialized
INFO - 2020-01-28 08:05:02 --> URI Class Initialized
INFO - 2020-01-28 08:05:02 --> Router Class Initialized
INFO - 2020-01-28 08:05:03 --> Output Class Initialized
INFO - 2020-01-28 08:05:03 --> Security Class Initialized
DEBUG - 2020-01-28 08:05:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:05:03 --> Input Class Initialized
INFO - 2020-01-28 08:05:03 --> Language Class Initialized
INFO - 2020-01-28 08:05:03 --> Language Class Initialized
INFO - 2020-01-28 08:05:03 --> Config Class Initialized
INFO - 2020-01-28 08:05:03 --> Loader Class Initialized
INFO - 2020-01-28 08:05:03 --> Helper loaded: url_helper
INFO - 2020-01-28 08:05:03 --> Helper loaded: file_helper
INFO - 2020-01-28 08:05:03 --> Helper loaded: form_helper
INFO - 2020-01-28 08:05:03 --> Helper loaded: my_helper
INFO - 2020-01-28 08:05:03 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:05:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:05:03 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:05:03 --> Controller Class Initialized
ERROR - 2020-01-28 08:05:03 --> Severity: Notice --> Undefined variable: npa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 390
ERROR - 2020-01-28 08:05:03 --> Severity: Notice --> Undefined variable: nka E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
DEBUG - 2020-01-28 08:05:03 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:05:03 --> Final output sent to browser
DEBUG - 2020-01-28 08:05:03 --> Total execution time: 0.9568
INFO - 2020-01-28 08:06:40 --> Config Class Initialized
INFO - 2020-01-28 08:06:40 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:06:40 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:06:40 --> Utf8 Class Initialized
INFO - 2020-01-28 08:06:40 --> URI Class Initialized
INFO - 2020-01-28 08:06:40 --> Router Class Initialized
INFO - 2020-01-28 08:06:40 --> Output Class Initialized
INFO - 2020-01-28 08:06:40 --> Security Class Initialized
DEBUG - 2020-01-28 08:06:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:06:40 --> Input Class Initialized
INFO - 2020-01-28 08:06:40 --> Language Class Initialized
INFO - 2020-01-28 08:06:40 --> Language Class Initialized
INFO - 2020-01-28 08:06:40 --> Config Class Initialized
INFO - 2020-01-28 08:06:40 --> Loader Class Initialized
INFO - 2020-01-28 08:06:40 --> Helper loaded: url_helper
INFO - 2020-01-28 08:06:40 --> Helper loaded: file_helper
INFO - 2020-01-28 08:06:40 --> Helper loaded: form_helper
INFO - 2020-01-28 08:06:40 --> Helper loaded: my_helper
INFO - 2020-01-28 08:06:40 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:06:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:06:40 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:06:40 --> Controller Class Initialized
ERROR - 2020-01-28 08:06:40 --> Severity: Notice --> Undefined variable: npa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 390
ERROR - 2020-01-28 08:06:40 --> Severity: Notice --> Undefined variable: nka E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
DEBUG - 2020-01-28 08:06:41 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:06:41 --> Final output sent to browser
DEBUG - 2020-01-28 08:06:41 --> Total execution time: 0.9921
INFO - 2020-01-28 08:07:11 --> Config Class Initialized
INFO - 2020-01-28 08:07:11 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:07:11 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:07:11 --> Utf8 Class Initialized
INFO - 2020-01-28 08:07:11 --> URI Class Initialized
INFO - 2020-01-28 08:07:11 --> Router Class Initialized
INFO - 2020-01-28 08:07:11 --> Output Class Initialized
INFO - 2020-01-28 08:07:11 --> Security Class Initialized
DEBUG - 2020-01-28 08:07:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:07:11 --> Input Class Initialized
INFO - 2020-01-28 08:07:11 --> Language Class Initialized
ERROR - 2020-01-28 08:07:12 --> Severity: Parsing Error --> syntax error, unexpected '{' E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 454
INFO - 2020-01-28 08:07:27 --> Config Class Initialized
INFO - 2020-01-28 08:07:27 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:07:27 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:07:28 --> Utf8 Class Initialized
INFO - 2020-01-28 08:07:28 --> URI Class Initialized
INFO - 2020-01-28 08:07:28 --> Router Class Initialized
INFO - 2020-01-28 08:07:28 --> Output Class Initialized
INFO - 2020-01-28 08:07:28 --> Security Class Initialized
DEBUG - 2020-01-28 08:07:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:07:28 --> Input Class Initialized
INFO - 2020-01-28 08:07:28 --> Language Class Initialized
INFO - 2020-01-28 08:07:28 --> Language Class Initialized
INFO - 2020-01-28 08:07:28 --> Config Class Initialized
INFO - 2020-01-28 08:07:28 --> Loader Class Initialized
INFO - 2020-01-28 08:07:28 --> Helper loaded: url_helper
INFO - 2020-01-28 08:07:28 --> Helper loaded: file_helper
INFO - 2020-01-28 08:07:28 --> Helper loaded: form_helper
INFO - 2020-01-28 08:07:28 --> Helper loaded: my_helper
INFO - 2020-01-28 08:07:28 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:07:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:07:28 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:07:28 --> Controller Class Initialized
ERROR - 2020-01-28 08:07:28 --> Severity: Notice --> Undefined variable: npa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 390
ERROR - 2020-01-28 08:07:28 --> Severity: Notice --> Undefined variable: nka E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
DEBUG - 2020-01-28 08:07:28 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:07:28 --> Final output sent to browser
DEBUG - 2020-01-28 08:07:28 --> Total execution time: 0.9576
INFO - 2020-01-28 08:11:00 --> Config Class Initialized
INFO - 2020-01-28 08:11:00 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:11:00 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:11:00 --> Utf8 Class Initialized
INFO - 2020-01-28 08:11:00 --> URI Class Initialized
INFO - 2020-01-28 08:11:00 --> Router Class Initialized
INFO - 2020-01-28 08:11:00 --> Output Class Initialized
INFO - 2020-01-28 08:11:00 --> Security Class Initialized
DEBUG - 2020-01-28 08:11:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:11:00 --> Input Class Initialized
INFO - 2020-01-28 08:11:00 --> Language Class Initialized
INFO - 2020-01-28 08:11:00 --> Language Class Initialized
INFO - 2020-01-28 08:11:00 --> Config Class Initialized
INFO - 2020-01-28 08:11:00 --> Loader Class Initialized
INFO - 2020-01-28 08:11:00 --> Helper loaded: url_helper
INFO - 2020-01-28 08:11:01 --> Helper loaded: file_helper
INFO - 2020-01-28 08:11:01 --> Helper loaded: form_helper
INFO - 2020-01-28 08:11:01 --> Helper loaded: my_helper
INFO - 2020-01-28 08:11:01 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:11:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:11:01 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:11:01 --> Controller Class Initialized
ERROR - 2020-01-28 08:11:01 --> Severity: Notice --> Undefined variable: npa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 390
ERROR - 2020-01-28 08:11:01 --> Severity: Notice --> Undefined variable: nka E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
DEBUG - 2020-01-28 08:11:01 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:11:01 --> Final output sent to browser
DEBUG - 2020-01-28 08:11:01 --> Total execution time: 0.9417
INFO - 2020-01-28 08:12:09 --> Config Class Initialized
INFO - 2020-01-28 08:12:09 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:12:09 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:12:09 --> Utf8 Class Initialized
INFO - 2020-01-28 08:12:09 --> URI Class Initialized
INFO - 2020-01-28 08:12:09 --> Router Class Initialized
INFO - 2020-01-28 08:12:09 --> Output Class Initialized
INFO - 2020-01-28 08:12:09 --> Security Class Initialized
DEBUG - 2020-01-28 08:12:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:12:09 --> Input Class Initialized
INFO - 2020-01-28 08:12:09 --> Language Class Initialized
INFO - 2020-01-28 08:12:09 --> Language Class Initialized
INFO - 2020-01-28 08:12:10 --> Config Class Initialized
INFO - 2020-01-28 08:12:10 --> Loader Class Initialized
INFO - 2020-01-28 08:12:10 --> Helper loaded: url_helper
INFO - 2020-01-28 08:12:10 --> Helper loaded: file_helper
INFO - 2020-01-28 08:12:10 --> Helper loaded: form_helper
INFO - 2020-01-28 08:12:10 --> Helper loaded: my_helper
INFO - 2020-01-28 08:12:10 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:12:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:12:10 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:12:10 --> Controller Class Initialized
ERROR - 2020-01-28 08:12:10 --> Severity: Notice --> Undefined variable: npa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 390
ERROR - 2020-01-28 08:12:10 --> Severity: Notice --> Undefined variable: nka E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
DEBUG - 2020-01-28 08:12:10 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:12:10 --> Final output sent to browser
DEBUG - 2020-01-28 08:12:10 --> Total execution time: 1.0686
INFO - 2020-01-28 08:13:08 --> Config Class Initialized
INFO - 2020-01-28 08:13:08 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:13:08 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:13:08 --> Utf8 Class Initialized
INFO - 2020-01-28 08:13:08 --> URI Class Initialized
INFO - 2020-01-28 08:13:08 --> Router Class Initialized
INFO - 2020-01-28 08:13:08 --> Output Class Initialized
INFO - 2020-01-28 08:13:08 --> Security Class Initialized
DEBUG - 2020-01-28 08:13:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:13:08 --> Input Class Initialized
INFO - 2020-01-28 08:13:09 --> Language Class Initialized
INFO - 2020-01-28 08:13:09 --> Language Class Initialized
INFO - 2020-01-28 08:13:09 --> Config Class Initialized
INFO - 2020-01-28 08:13:09 --> Loader Class Initialized
INFO - 2020-01-28 08:13:09 --> Helper loaded: url_helper
INFO - 2020-01-28 08:13:09 --> Helper loaded: file_helper
INFO - 2020-01-28 08:13:09 --> Helper loaded: form_helper
INFO - 2020-01-28 08:13:09 --> Helper loaded: my_helper
INFO - 2020-01-28 08:13:09 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:13:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:13:09 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:13:09 --> Controller Class Initialized
ERROR - 2020-01-28 08:13:09 --> Severity: Notice --> Undefined variable: predikatx E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 393
ERROR - 2020-01-28 08:13:09 --> Severity: Notice --> Undefined variable: predikatx1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
ERROR - 2020-01-28 08:13:09 --> Severity: Notice --> Undefined variable: predikatx E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 393
ERROR - 2020-01-28 08:13:09 --> Severity: Notice --> Undefined variable: predikatx1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
DEBUG - 2020-01-28 08:13:09 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:13:09 --> Final output sent to browser
DEBUG - 2020-01-28 08:13:10 --> Total execution time: 1.4794
INFO - 2020-01-28 08:15:04 --> Config Class Initialized
INFO - 2020-01-28 08:15:04 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:15:04 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:15:04 --> Utf8 Class Initialized
INFO - 2020-01-28 08:15:04 --> URI Class Initialized
INFO - 2020-01-28 08:15:04 --> Router Class Initialized
INFO - 2020-01-28 08:15:04 --> Output Class Initialized
INFO - 2020-01-28 08:15:04 --> Security Class Initialized
DEBUG - 2020-01-28 08:15:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:15:04 --> Input Class Initialized
INFO - 2020-01-28 08:15:04 --> Language Class Initialized
INFO - 2020-01-28 08:15:05 --> Language Class Initialized
INFO - 2020-01-28 08:15:05 --> Config Class Initialized
INFO - 2020-01-28 08:15:05 --> Loader Class Initialized
INFO - 2020-01-28 08:15:05 --> Helper loaded: url_helper
INFO - 2020-01-28 08:15:05 --> Helper loaded: file_helper
INFO - 2020-01-28 08:15:05 --> Helper loaded: form_helper
INFO - 2020-01-28 08:15:05 --> Helper loaded: my_helper
INFO - 2020-01-28 08:15:05 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:15:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:15:05 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:15:05 --> Controller Class Initialized
ERROR - 2020-01-28 08:15:05 --> Severity: Notice --> Undefined variable: predikatx E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 393
ERROR - 2020-01-28 08:15:05 --> Severity: Notice --> Undefined variable: predikatx1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
ERROR - 2020-01-28 08:15:05 --> Severity: Notice --> Undefined variable: predikatx E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 393
ERROR - 2020-01-28 08:15:05 --> Severity: Notice --> Undefined variable: predikatx1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
DEBUG - 2020-01-28 08:15:05 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:15:05 --> Final output sent to browser
DEBUG - 2020-01-28 08:15:05 --> Total execution time: 1.1025
INFO - 2020-01-28 08:15:07 --> Config Class Initialized
INFO - 2020-01-28 08:15:07 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:15:08 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:15:08 --> Utf8 Class Initialized
INFO - 2020-01-28 08:15:08 --> URI Class Initialized
INFO - 2020-01-28 08:15:08 --> Router Class Initialized
INFO - 2020-01-28 08:15:08 --> Output Class Initialized
INFO - 2020-01-28 08:15:08 --> Security Class Initialized
DEBUG - 2020-01-28 08:15:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:15:08 --> Input Class Initialized
INFO - 2020-01-28 08:15:08 --> Language Class Initialized
INFO - 2020-01-28 08:15:08 --> Language Class Initialized
INFO - 2020-01-28 08:15:08 --> Config Class Initialized
INFO - 2020-01-28 08:15:08 --> Loader Class Initialized
INFO - 2020-01-28 08:15:08 --> Helper loaded: url_helper
INFO - 2020-01-28 08:15:08 --> Helper loaded: file_helper
INFO - 2020-01-28 08:15:08 --> Helper loaded: form_helper
INFO - 2020-01-28 08:15:08 --> Helper loaded: my_helper
INFO - 2020-01-28 08:15:08 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:15:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:15:08 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:15:08 --> Controller Class Initialized
ERROR - 2020-01-28 08:15:09 --> Severity: Notice --> Undefined variable: predikatx E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 393
ERROR - 2020-01-28 08:15:09 --> Severity: Notice --> Undefined variable: predikatx1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
ERROR - 2020-01-28 08:15:09 --> Severity: Notice --> Undefined variable: predikatx E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 393
ERROR - 2020-01-28 08:15:09 --> Severity: Notice --> Undefined variable: predikatx1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
DEBUG - 2020-01-28 08:15:09 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:15:09 --> Final output sent to browser
DEBUG - 2020-01-28 08:15:09 --> Total execution time: 1.4520
INFO - 2020-01-28 08:15:23 --> Config Class Initialized
INFO - 2020-01-28 08:15:23 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:15:23 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:15:23 --> Utf8 Class Initialized
INFO - 2020-01-28 08:15:23 --> URI Class Initialized
INFO - 2020-01-28 08:15:23 --> Router Class Initialized
INFO - 2020-01-28 08:15:23 --> Output Class Initialized
INFO - 2020-01-28 08:15:23 --> Security Class Initialized
DEBUG - 2020-01-28 08:15:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:15:24 --> Input Class Initialized
INFO - 2020-01-28 08:15:24 --> Language Class Initialized
INFO - 2020-01-28 08:15:24 --> Language Class Initialized
INFO - 2020-01-28 08:15:24 --> Config Class Initialized
INFO - 2020-01-28 08:15:24 --> Loader Class Initialized
INFO - 2020-01-28 08:15:24 --> Helper loaded: url_helper
INFO - 2020-01-28 08:15:24 --> Helper loaded: file_helper
INFO - 2020-01-28 08:15:24 --> Helper loaded: form_helper
INFO - 2020-01-28 08:15:24 --> Helper loaded: my_helper
INFO - 2020-01-28 08:15:24 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:15:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:15:24 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:15:24 --> Controller Class Initialized
ERROR - 2020-01-28 08:15:24 --> Severity: Notice --> Undefined variable: predikatx E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 393
ERROR - 2020-01-28 08:15:24 --> Severity: Notice --> Undefined variable: predikatx1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
ERROR - 2020-01-28 08:15:24 --> Severity: Notice --> Undefined variable: predikatx E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 393
ERROR - 2020-01-28 08:15:24 --> Severity: Notice --> Undefined variable: predikatx1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
DEBUG - 2020-01-28 08:15:24 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:15:24 --> Final output sent to browser
DEBUG - 2020-01-28 08:15:24 --> Total execution time: 0.9731
INFO - 2020-01-28 08:15:48 --> Config Class Initialized
INFO - 2020-01-28 08:15:48 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:15:48 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:15:48 --> Utf8 Class Initialized
INFO - 2020-01-28 08:15:48 --> URI Class Initialized
INFO - 2020-01-28 08:15:48 --> Router Class Initialized
INFO - 2020-01-28 08:15:48 --> Output Class Initialized
INFO - 2020-01-28 08:15:48 --> Security Class Initialized
DEBUG - 2020-01-28 08:15:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:15:48 --> Input Class Initialized
INFO - 2020-01-28 08:15:48 --> Language Class Initialized
INFO - 2020-01-28 08:15:48 --> Language Class Initialized
INFO - 2020-01-28 08:15:48 --> Config Class Initialized
INFO - 2020-01-28 08:15:49 --> Loader Class Initialized
INFO - 2020-01-28 08:15:49 --> Helper loaded: url_helper
INFO - 2020-01-28 08:15:49 --> Helper loaded: file_helper
INFO - 2020-01-28 08:15:49 --> Helper loaded: form_helper
INFO - 2020-01-28 08:15:49 --> Helper loaded: my_helper
INFO - 2020-01-28 08:15:49 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:15:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:15:49 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:15:49 --> Controller Class Initialized
ERROR - 2020-01-28 08:15:49 --> Severity: Notice --> Undefined variable: predikatx E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 393
ERROR - 2020-01-28 08:15:49 --> Severity: Notice --> Undefined variable: predikatx1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
ERROR - 2020-01-28 08:15:49 --> Severity: Notice --> Undefined variable: predikatx E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 393
ERROR - 2020-01-28 08:15:49 --> Severity: Notice --> Undefined variable: predikatx1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
DEBUG - 2020-01-28 08:15:49 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:15:49 --> Final output sent to browser
DEBUG - 2020-01-28 08:15:49 --> Total execution time: 1.0533
INFO - 2020-01-28 08:15:54 --> Config Class Initialized
INFO - 2020-01-28 08:15:54 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:15:55 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:15:55 --> Utf8 Class Initialized
INFO - 2020-01-28 08:15:55 --> URI Class Initialized
INFO - 2020-01-28 08:15:55 --> Router Class Initialized
INFO - 2020-01-28 08:15:55 --> Output Class Initialized
INFO - 2020-01-28 08:15:55 --> Security Class Initialized
DEBUG - 2020-01-28 08:15:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:15:55 --> Input Class Initialized
INFO - 2020-01-28 08:15:55 --> Language Class Initialized
INFO - 2020-01-28 08:15:55 --> Language Class Initialized
INFO - 2020-01-28 08:15:55 --> Config Class Initialized
INFO - 2020-01-28 08:15:55 --> Loader Class Initialized
INFO - 2020-01-28 08:15:55 --> Helper loaded: url_helper
INFO - 2020-01-28 08:15:55 --> Helper loaded: file_helper
INFO - 2020-01-28 08:15:55 --> Helper loaded: form_helper
INFO - 2020-01-28 08:15:55 --> Helper loaded: my_helper
INFO - 2020-01-28 08:15:55 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:15:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:15:55 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:15:55 --> Controller Class Initialized
DEBUG - 2020-01-28 08:15:55 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/list.php
DEBUG - 2020-01-28 08:15:55 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 08:15:55 --> Final output sent to browser
DEBUG - 2020-01-28 08:15:56 --> Total execution time: 1.0470
INFO - 2020-01-28 08:15:58 --> Config Class Initialized
INFO - 2020-01-28 08:15:58 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:15:58 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:15:58 --> Utf8 Class Initialized
INFO - 2020-01-28 08:15:58 --> URI Class Initialized
INFO - 2020-01-28 08:15:58 --> Router Class Initialized
INFO - 2020-01-28 08:15:58 --> Output Class Initialized
INFO - 2020-01-28 08:15:58 --> Security Class Initialized
DEBUG - 2020-01-28 08:15:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:15:58 --> Input Class Initialized
INFO - 2020-01-28 08:15:58 --> Language Class Initialized
INFO - 2020-01-28 08:15:58 --> Language Class Initialized
INFO - 2020-01-28 08:15:58 --> Config Class Initialized
INFO - 2020-01-28 08:15:58 --> Loader Class Initialized
INFO - 2020-01-28 08:15:58 --> Helper loaded: url_helper
INFO - 2020-01-28 08:15:58 --> Helper loaded: file_helper
INFO - 2020-01-28 08:15:58 --> Helper loaded: form_helper
INFO - 2020-01-28 08:15:59 --> Helper loaded: my_helper
INFO - 2020-01-28 08:15:59 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:15:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:15:59 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:15:59 --> Controller Class Initialized
DEBUG - 2020-01-28 08:15:59 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_prestasi.php
INFO - 2020-01-28 08:15:59 --> Final output sent to browser
DEBUG - 2020-01-28 08:15:59 --> Total execution time: 1.0364
INFO - 2020-01-28 08:16:05 --> Config Class Initialized
INFO - 2020-01-28 08:16:05 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:16:05 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:16:05 --> Utf8 Class Initialized
INFO - 2020-01-28 08:16:05 --> URI Class Initialized
INFO - 2020-01-28 08:16:05 --> Router Class Initialized
INFO - 2020-01-28 08:16:05 --> Output Class Initialized
INFO - 2020-01-28 08:16:05 --> Security Class Initialized
DEBUG - 2020-01-28 08:16:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:16:05 --> Input Class Initialized
INFO - 2020-01-28 08:16:05 --> Language Class Initialized
INFO - 2020-01-28 08:16:05 --> Language Class Initialized
INFO - 2020-01-28 08:16:05 --> Config Class Initialized
INFO - 2020-01-28 08:16:06 --> Loader Class Initialized
INFO - 2020-01-28 08:16:06 --> Helper loaded: url_helper
INFO - 2020-01-28 08:16:06 --> Helper loaded: file_helper
INFO - 2020-01-28 08:16:06 --> Helper loaded: form_helper
INFO - 2020-01-28 08:16:06 --> Helper loaded: my_helper
INFO - 2020-01-28 08:16:06 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:16:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:16:06 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:16:06 --> Controller Class Initialized
ERROR - 2020-01-28 08:16:06 --> Severity: Notice --> Undefined variable: predikatx E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 393
ERROR - 2020-01-28 08:16:06 --> Severity: Notice --> Undefined variable: predikatx1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
ERROR - 2020-01-28 08:16:06 --> Severity: Notice --> Undefined variable: predikatx E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 393
ERROR - 2020-01-28 08:16:06 --> Severity: Notice --> Undefined variable: predikatx1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
DEBUG - 2020-01-28 08:16:06 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:16:06 --> Final output sent to browser
DEBUG - 2020-01-28 08:16:07 --> Total execution time: 1.7674
INFO - 2020-01-28 08:16:54 --> Config Class Initialized
INFO - 2020-01-28 08:16:54 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:16:54 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:16:54 --> Utf8 Class Initialized
INFO - 2020-01-28 08:16:54 --> URI Class Initialized
INFO - 2020-01-28 08:16:54 --> Router Class Initialized
INFO - 2020-01-28 08:16:54 --> Output Class Initialized
INFO - 2020-01-28 08:16:55 --> Security Class Initialized
DEBUG - 2020-01-28 08:16:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:16:55 --> Input Class Initialized
INFO - 2020-01-28 08:16:55 --> Language Class Initialized
INFO - 2020-01-28 08:16:55 --> Language Class Initialized
INFO - 2020-01-28 08:16:55 --> Config Class Initialized
INFO - 2020-01-28 08:16:55 --> Loader Class Initialized
INFO - 2020-01-28 08:16:55 --> Helper loaded: url_helper
INFO - 2020-01-28 08:16:55 --> Helper loaded: file_helper
INFO - 2020-01-28 08:16:55 --> Helper loaded: form_helper
INFO - 2020-01-28 08:16:55 --> Helper loaded: my_helper
INFO - 2020-01-28 08:16:55 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:16:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:16:55 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:16:55 --> Controller Class Initialized
ERROR - 2020-01-28 08:16:55 --> Severity: Notice --> Undefined variable: predikatx E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 393
ERROR - 2020-01-28 08:16:55 --> Severity: Notice --> Undefined variable: predikatx1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
ERROR - 2020-01-28 08:16:55 --> Severity: Notice --> Undefined variable: predikatx E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 393
ERROR - 2020-01-28 08:16:55 --> Severity: Notice --> Undefined variable: predikatx1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
DEBUG - 2020-01-28 08:16:55 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:16:55 --> Final output sent to browser
DEBUG - 2020-01-28 08:16:55 --> Total execution time: 1.1744
INFO - 2020-01-28 08:17:31 --> Config Class Initialized
INFO - 2020-01-28 08:17:31 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:17:31 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:17:31 --> Utf8 Class Initialized
INFO - 2020-01-28 08:17:31 --> URI Class Initialized
INFO - 2020-01-28 08:17:31 --> Router Class Initialized
INFO - 2020-01-28 08:17:31 --> Output Class Initialized
INFO - 2020-01-28 08:17:31 --> Security Class Initialized
DEBUG - 2020-01-28 08:17:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:17:31 --> Input Class Initialized
INFO - 2020-01-28 08:17:31 --> Language Class Initialized
INFO - 2020-01-28 08:17:31 --> Language Class Initialized
INFO - 2020-01-28 08:17:31 --> Config Class Initialized
INFO - 2020-01-28 08:17:31 --> Loader Class Initialized
INFO - 2020-01-28 08:17:31 --> Helper loaded: url_helper
INFO - 2020-01-28 08:17:31 --> Helper loaded: file_helper
INFO - 2020-01-28 08:17:31 --> Helper loaded: form_helper
INFO - 2020-01-28 08:17:31 --> Helper loaded: my_helper
INFO - 2020-01-28 08:17:31 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:17:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:17:31 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:17:32 --> Controller Class Initialized
ERROR - 2020-01-28 08:17:32 --> Severity: Notice --> Undefined variable: predikatx E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 393
ERROR - 2020-01-28 08:17:32 --> Severity: Notice --> Undefined variable: predikatx1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
ERROR - 2020-01-28 08:17:32 --> Severity: Notice --> Undefined variable: predikatx E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 393
ERROR - 2020-01-28 08:17:32 --> Severity: Notice --> Undefined variable: predikatx1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
DEBUG - 2020-01-28 08:17:32 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:17:32 --> Final output sent to browser
DEBUG - 2020-01-28 08:17:32 --> Total execution time: 1.1896
INFO - 2020-01-28 08:17:53 --> Config Class Initialized
INFO - 2020-01-28 08:17:53 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:17:53 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:17:53 --> Utf8 Class Initialized
INFO - 2020-01-28 08:17:53 --> URI Class Initialized
INFO - 2020-01-28 08:17:53 --> Router Class Initialized
INFO - 2020-01-28 08:17:53 --> Output Class Initialized
INFO - 2020-01-28 08:17:54 --> Security Class Initialized
DEBUG - 2020-01-28 08:17:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:17:54 --> Input Class Initialized
INFO - 2020-01-28 08:17:54 --> Language Class Initialized
INFO - 2020-01-28 08:17:54 --> Language Class Initialized
INFO - 2020-01-28 08:17:54 --> Config Class Initialized
INFO - 2020-01-28 08:17:54 --> Loader Class Initialized
INFO - 2020-01-28 08:17:54 --> Helper loaded: url_helper
INFO - 2020-01-28 08:17:54 --> Helper loaded: file_helper
INFO - 2020-01-28 08:17:54 --> Helper loaded: form_helper
INFO - 2020-01-28 08:17:54 --> Helper loaded: my_helper
INFO - 2020-01-28 08:17:54 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:17:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:17:54 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:17:54 --> Controller Class Initialized
ERROR - 2020-01-28 08:17:54 --> Severity: Notice --> Undefined variable: predikatx E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 393
ERROR - 2020-01-28 08:17:54 --> Severity: Notice --> Undefined variable: predikatx1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
ERROR - 2020-01-28 08:17:54 --> Severity: Notice --> Undefined variable: predikatx E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 393
ERROR - 2020-01-28 08:17:54 --> Severity: Notice --> Undefined variable: predikatx1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
DEBUG - 2020-01-28 08:17:54 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:17:54 --> Final output sent to browser
DEBUG - 2020-01-28 08:17:54 --> Total execution time: 1.1581
INFO - 2020-01-28 08:18:39 --> Config Class Initialized
INFO - 2020-01-28 08:18:39 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:18:40 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:18:40 --> Utf8 Class Initialized
INFO - 2020-01-28 08:18:40 --> URI Class Initialized
INFO - 2020-01-28 08:18:40 --> Router Class Initialized
INFO - 2020-01-28 08:18:40 --> Output Class Initialized
INFO - 2020-01-28 08:18:40 --> Security Class Initialized
DEBUG - 2020-01-28 08:18:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:18:40 --> Input Class Initialized
INFO - 2020-01-28 08:18:40 --> Language Class Initialized
INFO - 2020-01-28 08:18:40 --> Language Class Initialized
INFO - 2020-01-28 08:18:40 --> Config Class Initialized
INFO - 2020-01-28 08:18:40 --> Loader Class Initialized
INFO - 2020-01-28 08:18:40 --> Helper loaded: url_helper
INFO - 2020-01-28 08:18:40 --> Helper loaded: file_helper
INFO - 2020-01-28 08:18:40 --> Helper loaded: form_helper
INFO - 2020-01-28 08:18:40 --> Helper loaded: my_helper
INFO - 2020-01-28 08:18:40 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:18:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:18:40 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:18:40 --> Controller Class Initialized
ERROR - 2020-01-28 08:18:40 --> Severity: Notice --> Undefined variable: kkmx1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 393
ERROR - 2020-01-28 08:18:40 --> Severity: Notice --> Undefined variable: nka E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 393
ERROR - 2020-01-28 08:18:40 --> Severity: Notice --> Undefined variable: kkmx1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
ERROR - 2020-01-28 08:18:40 --> Severity: Notice --> Undefined variable: kkmx1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 393
ERROR - 2020-01-28 08:18:41 --> Severity: Notice --> Undefined variable: kkmx1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
DEBUG - 2020-01-28 08:18:41 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:18:41 --> Final output sent to browser
DEBUG - 2020-01-28 08:18:41 --> Total execution time: 1.1598
INFO - 2020-01-28 08:18:56 --> Config Class Initialized
INFO - 2020-01-28 08:18:56 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:18:56 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:18:56 --> Utf8 Class Initialized
INFO - 2020-01-28 08:18:56 --> URI Class Initialized
INFO - 2020-01-28 08:18:56 --> Router Class Initialized
INFO - 2020-01-28 08:18:56 --> Output Class Initialized
INFO - 2020-01-28 08:18:57 --> Security Class Initialized
DEBUG - 2020-01-28 08:18:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:18:57 --> Input Class Initialized
INFO - 2020-01-28 08:18:57 --> Language Class Initialized
INFO - 2020-01-28 08:18:57 --> Language Class Initialized
INFO - 2020-01-28 08:18:57 --> Config Class Initialized
INFO - 2020-01-28 08:18:57 --> Loader Class Initialized
INFO - 2020-01-28 08:18:57 --> Helper loaded: url_helper
INFO - 2020-01-28 08:18:57 --> Helper loaded: file_helper
INFO - 2020-01-28 08:18:57 --> Helper loaded: form_helper
INFO - 2020-01-28 08:18:57 --> Helper loaded: my_helper
INFO - 2020-01-28 08:18:57 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:18:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:18:57 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:18:57 --> Controller Class Initialized
ERROR - 2020-01-28 08:18:57 --> Severity: Notice --> Undefined variable: kkmx1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 393
ERROR - 2020-01-28 08:18:57 --> Severity: Notice --> Undefined variable: nka E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 393
ERROR - 2020-01-28 08:18:57 --> Severity: Notice --> Undefined variable: kkmx1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
ERROR - 2020-01-28 08:18:57 --> Severity: Notice --> Undefined variable: kkmx1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 393
ERROR - 2020-01-28 08:18:57 --> Severity: Notice --> Undefined variable: kkmx1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
DEBUG - 2020-01-28 08:18:57 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:18:57 --> Final output sent to browser
DEBUG - 2020-01-28 08:18:57 --> Total execution time: 1.1914
INFO - 2020-01-28 08:19:15 --> Config Class Initialized
INFO - 2020-01-28 08:19:15 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:19:15 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:19:15 --> Utf8 Class Initialized
INFO - 2020-01-28 08:19:15 --> URI Class Initialized
INFO - 2020-01-28 08:19:15 --> Router Class Initialized
INFO - 2020-01-28 08:19:15 --> Output Class Initialized
INFO - 2020-01-28 08:19:15 --> Security Class Initialized
DEBUG - 2020-01-28 08:19:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:19:15 --> Input Class Initialized
INFO - 2020-01-28 08:19:15 --> Language Class Initialized
INFO - 2020-01-28 08:19:15 --> Language Class Initialized
INFO - 2020-01-28 08:19:15 --> Config Class Initialized
INFO - 2020-01-28 08:19:15 --> Loader Class Initialized
INFO - 2020-01-28 08:19:16 --> Helper loaded: url_helper
INFO - 2020-01-28 08:19:16 --> Helper loaded: file_helper
INFO - 2020-01-28 08:19:16 --> Helper loaded: form_helper
INFO - 2020-01-28 08:19:16 --> Helper loaded: my_helper
INFO - 2020-01-28 08:19:16 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:19:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:19:16 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:19:16 --> Controller Class Initialized
ERROR - 2020-01-28 08:19:16 --> Severity: Notice --> Undefined variable: nka E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 393
DEBUG - 2020-01-28 08:19:16 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:19:16 --> Final output sent to browser
DEBUG - 2020-01-28 08:19:16 --> Total execution time: 1.0461
INFO - 2020-01-28 08:19:49 --> Config Class Initialized
INFO - 2020-01-28 08:19:49 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:19:49 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:19:49 --> Utf8 Class Initialized
INFO - 2020-01-28 08:19:49 --> URI Class Initialized
INFO - 2020-01-28 08:19:49 --> Router Class Initialized
INFO - 2020-01-28 08:19:49 --> Output Class Initialized
INFO - 2020-01-28 08:19:49 --> Security Class Initialized
DEBUG - 2020-01-28 08:19:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:19:50 --> Input Class Initialized
INFO - 2020-01-28 08:19:50 --> Language Class Initialized
INFO - 2020-01-28 08:19:50 --> Language Class Initialized
INFO - 2020-01-28 08:19:50 --> Config Class Initialized
INFO - 2020-01-28 08:19:50 --> Loader Class Initialized
INFO - 2020-01-28 08:19:50 --> Helper loaded: url_helper
INFO - 2020-01-28 08:19:50 --> Helper loaded: file_helper
INFO - 2020-01-28 08:19:50 --> Helper loaded: form_helper
INFO - 2020-01-28 08:19:50 --> Helper loaded: my_helper
INFO - 2020-01-28 08:19:50 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:19:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:19:50 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:19:50 --> Controller Class Initialized
DEBUG - 2020-01-28 08:19:50 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:19:50 --> Final output sent to browser
DEBUG - 2020-01-28 08:19:50 --> Total execution time: 1.0132
INFO - 2020-01-28 08:20:43 --> Config Class Initialized
INFO - 2020-01-28 08:20:43 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:20:43 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:20:43 --> Utf8 Class Initialized
INFO - 2020-01-28 08:20:43 --> URI Class Initialized
INFO - 2020-01-28 08:20:43 --> Router Class Initialized
INFO - 2020-01-28 08:20:44 --> Output Class Initialized
INFO - 2020-01-28 08:20:44 --> Security Class Initialized
DEBUG - 2020-01-28 08:20:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:20:44 --> Input Class Initialized
INFO - 2020-01-28 08:20:44 --> Language Class Initialized
INFO - 2020-01-28 08:20:44 --> Language Class Initialized
INFO - 2020-01-28 08:20:44 --> Config Class Initialized
INFO - 2020-01-28 08:20:44 --> Loader Class Initialized
INFO - 2020-01-28 08:20:44 --> Helper loaded: url_helper
INFO - 2020-01-28 08:20:44 --> Helper loaded: file_helper
INFO - 2020-01-28 08:20:44 --> Helper loaded: form_helper
INFO - 2020-01-28 08:20:44 --> Helper loaded: my_helper
INFO - 2020-01-28 08:20:44 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:20:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:20:44 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:20:44 --> Controller Class Initialized
DEBUG - 2020-01-28 08:20:44 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:20:44 --> Final output sent to browser
DEBUG - 2020-01-28 08:20:44 --> Total execution time: 0.9777
INFO - 2020-01-28 08:21:15 --> Config Class Initialized
INFO - 2020-01-28 08:21:15 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:21:15 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:21:15 --> Utf8 Class Initialized
INFO - 2020-01-28 08:21:15 --> URI Class Initialized
INFO - 2020-01-28 08:21:16 --> Router Class Initialized
INFO - 2020-01-28 08:21:16 --> Output Class Initialized
INFO - 2020-01-28 08:21:16 --> Security Class Initialized
DEBUG - 2020-01-28 08:21:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:21:16 --> Input Class Initialized
INFO - 2020-01-28 08:21:16 --> Language Class Initialized
INFO - 2020-01-28 08:21:16 --> Language Class Initialized
INFO - 2020-01-28 08:21:16 --> Config Class Initialized
INFO - 2020-01-28 08:21:16 --> Loader Class Initialized
INFO - 2020-01-28 08:21:16 --> Helper loaded: url_helper
INFO - 2020-01-28 08:21:16 --> Helper loaded: file_helper
INFO - 2020-01-28 08:21:16 --> Helper loaded: form_helper
INFO - 2020-01-28 08:21:16 --> Helper loaded: my_helper
INFO - 2020-01-28 08:21:16 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:21:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:21:16 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:21:16 --> Controller Class Initialized
DEBUG - 2020-01-28 08:21:16 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:21:16 --> Final output sent to browser
DEBUG - 2020-01-28 08:21:16 --> Total execution time: 0.9028
INFO - 2020-01-28 08:23:33 --> Config Class Initialized
INFO - 2020-01-28 08:23:33 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:23:33 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:23:33 --> Utf8 Class Initialized
INFO - 2020-01-28 08:23:33 --> URI Class Initialized
INFO - 2020-01-28 08:23:34 --> Router Class Initialized
INFO - 2020-01-28 08:23:34 --> Output Class Initialized
INFO - 2020-01-28 08:23:34 --> Security Class Initialized
DEBUG - 2020-01-28 08:23:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:23:34 --> Input Class Initialized
INFO - 2020-01-28 08:23:34 --> Language Class Initialized
INFO - 2020-01-28 08:23:34 --> Language Class Initialized
INFO - 2020-01-28 08:23:34 --> Config Class Initialized
INFO - 2020-01-28 08:23:34 --> Loader Class Initialized
INFO - 2020-01-28 08:23:34 --> Helper loaded: url_helper
INFO - 2020-01-28 08:23:34 --> Helper loaded: file_helper
INFO - 2020-01-28 08:23:34 --> Helper loaded: form_helper
INFO - 2020-01-28 08:23:34 --> Helper loaded: my_helper
INFO - 2020-01-28 08:23:34 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:23:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:23:34 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:23:34 --> Controller Class Initialized
DEBUG - 2020-01-28 08:23:34 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:23:34 --> Final output sent to browser
DEBUG - 2020-01-28 08:23:34 --> Total execution time: 0.9186
INFO - 2020-01-28 08:24:56 --> Config Class Initialized
INFO - 2020-01-28 08:24:56 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:24:56 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:24:56 --> Utf8 Class Initialized
INFO - 2020-01-28 08:24:56 --> URI Class Initialized
INFO - 2020-01-28 08:24:56 --> Router Class Initialized
INFO - 2020-01-28 08:24:56 --> Output Class Initialized
INFO - 2020-01-28 08:24:56 --> Security Class Initialized
DEBUG - 2020-01-28 08:24:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:24:56 --> Input Class Initialized
INFO - 2020-01-28 08:24:56 --> Language Class Initialized
INFO - 2020-01-28 08:24:56 --> Language Class Initialized
INFO - 2020-01-28 08:24:56 --> Config Class Initialized
INFO - 2020-01-28 08:24:56 --> Loader Class Initialized
INFO - 2020-01-28 08:24:56 --> Helper loaded: url_helper
INFO - 2020-01-28 08:24:57 --> Helper loaded: file_helper
INFO - 2020-01-28 08:24:57 --> Helper loaded: form_helper
INFO - 2020-01-28 08:24:57 --> Helper loaded: my_helper
INFO - 2020-01-28 08:24:57 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:24:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:24:57 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:24:57 --> Controller Class Initialized
DEBUG - 2020-01-28 08:24:57 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:24:57 --> Final output sent to browser
DEBUG - 2020-01-28 08:24:57 --> Total execution time: 0.9785
INFO - 2020-01-28 08:28:13 --> Config Class Initialized
INFO - 2020-01-28 08:28:13 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:28:14 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:28:14 --> Utf8 Class Initialized
INFO - 2020-01-28 08:28:14 --> URI Class Initialized
INFO - 2020-01-28 08:28:14 --> Router Class Initialized
INFO - 2020-01-28 08:28:14 --> Output Class Initialized
INFO - 2020-01-28 08:28:14 --> Security Class Initialized
DEBUG - 2020-01-28 08:28:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:28:14 --> Input Class Initialized
INFO - 2020-01-28 08:28:14 --> Language Class Initialized
INFO - 2020-01-28 08:28:14 --> Language Class Initialized
INFO - 2020-01-28 08:28:14 --> Config Class Initialized
INFO - 2020-01-28 08:28:14 --> Loader Class Initialized
INFO - 2020-01-28 08:28:14 --> Helper loaded: url_helper
INFO - 2020-01-28 08:28:14 --> Helper loaded: file_helper
INFO - 2020-01-28 08:28:14 --> Helper loaded: form_helper
INFO - 2020-01-28 08:28:14 --> Helper loaded: my_helper
INFO - 2020-01-28 08:28:14 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:28:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:28:14 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:28:14 --> Controller Class Initialized
DEBUG - 2020-01-28 08:28:14 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:28:14 --> Final output sent to browser
DEBUG - 2020-01-28 08:28:14 --> Total execution time: 0.9276
INFO - 2020-01-28 08:31:44 --> Config Class Initialized
INFO - 2020-01-28 08:31:44 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:31:44 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:31:44 --> Utf8 Class Initialized
INFO - 2020-01-28 08:31:44 --> URI Class Initialized
INFO - 2020-01-28 08:31:45 --> Router Class Initialized
INFO - 2020-01-28 08:31:45 --> Output Class Initialized
INFO - 2020-01-28 08:31:45 --> Security Class Initialized
DEBUG - 2020-01-28 08:31:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:31:45 --> Input Class Initialized
INFO - 2020-01-28 08:31:45 --> Language Class Initialized
INFO - 2020-01-28 08:31:45 --> Language Class Initialized
INFO - 2020-01-28 08:31:45 --> Config Class Initialized
INFO - 2020-01-28 08:31:45 --> Loader Class Initialized
INFO - 2020-01-28 08:31:45 --> Helper loaded: url_helper
INFO - 2020-01-28 08:31:45 --> Helper loaded: file_helper
INFO - 2020-01-28 08:31:45 --> Helper loaded: form_helper
INFO - 2020-01-28 08:31:45 --> Helper loaded: my_helper
INFO - 2020-01-28 08:31:45 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:31:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:31:45 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:31:45 --> Controller Class Initialized
DEBUG - 2020-01-28 08:31:45 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:31:45 --> Final output sent to browser
DEBUG - 2020-01-28 08:31:45 --> Total execution time: 0.9824
INFO - 2020-01-28 08:32:18 --> Config Class Initialized
INFO - 2020-01-28 08:32:18 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:32:18 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:32:18 --> Utf8 Class Initialized
INFO - 2020-01-28 08:32:18 --> URI Class Initialized
INFO - 2020-01-28 08:32:18 --> Router Class Initialized
INFO - 2020-01-28 08:32:18 --> Output Class Initialized
INFO - 2020-01-28 08:32:18 --> Security Class Initialized
DEBUG - 2020-01-28 08:32:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:32:18 --> Input Class Initialized
INFO - 2020-01-28 08:32:18 --> Language Class Initialized
INFO - 2020-01-28 08:32:18 --> Language Class Initialized
INFO - 2020-01-28 08:32:18 --> Config Class Initialized
INFO - 2020-01-28 08:32:18 --> Loader Class Initialized
INFO - 2020-01-28 08:32:18 --> Helper loaded: url_helper
INFO - 2020-01-28 08:32:18 --> Helper loaded: file_helper
INFO - 2020-01-28 08:32:18 --> Helper loaded: form_helper
INFO - 2020-01-28 08:32:19 --> Helper loaded: my_helper
INFO - 2020-01-28 08:32:19 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:32:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:32:19 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:32:19 --> Controller Class Initialized
ERROR - 2020-01-28 08:32:19 --> Severity: Notice --> Undefined variable: predikatx E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 393
ERROR - 2020-01-28 08:32:19 --> Severity: Notice --> Undefined variable: predikatx1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
ERROR - 2020-01-28 08:32:19 --> Severity: Notice --> Undefined variable: predikatx E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 393
ERROR - 2020-01-28 08:32:19 --> Severity: Notice --> Undefined variable: predikatx1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
DEBUG - 2020-01-28 08:32:19 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:32:19 --> Final output sent to browser
DEBUG - 2020-01-28 08:32:19 --> Total execution time: 1.1531
INFO - 2020-01-28 08:32:25 --> Config Class Initialized
INFO - 2020-01-28 08:32:25 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:32:25 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:32:25 --> Utf8 Class Initialized
INFO - 2020-01-28 08:32:25 --> URI Class Initialized
INFO - 2020-01-28 08:32:25 --> Router Class Initialized
INFO - 2020-01-28 08:32:25 --> Output Class Initialized
INFO - 2020-01-28 08:32:25 --> Security Class Initialized
DEBUG - 2020-01-28 08:32:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:32:26 --> Input Class Initialized
INFO - 2020-01-28 08:32:26 --> Language Class Initialized
INFO - 2020-01-28 08:32:26 --> Language Class Initialized
INFO - 2020-01-28 08:32:26 --> Config Class Initialized
INFO - 2020-01-28 08:32:26 --> Loader Class Initialized
INFO - 2020-01-28 08:32:26 --> Helper loaded: url_helper
INFO - 2020-01-28 08:32:26 --> Helper loaded: file_helper
INFO - 2020-01-28 08:32:26 --> Helper loaded: form_helper
INFO - 2020-01-28 08:32:26 --> Helper loaded: my_helper
INFO - 2020-01-28 08:32:26 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:32:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:32:26 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:32:26 --> Controller Class Initialized
ERROR - 2020-01-28 08:32:26 --> Severity: Notice --> Undefined variable: predikatx E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 393
ERROR - 2020-01-28 08:32:26 --> Severity: Notice --> Undefined variable: predikatx1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
ERROR - 2020-01-28 08:32:26 --> Severity: Notice --> Undefined variable: predikatx E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 393
ERROR - 2020-01-28 08:32:26 --> Severity: Notice --> Undefined variable: predikatx1 E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
DEBUG - 2020-01-28 08:32:26 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:32:26 --> Final output sent to browser
DEBUG - 2020-01-28 08:32:26 --> Total execution time: 1.3927
INFO - 2020-01-28 08:45:56 --> Config Class Initialized
INFO - 2020-01-28 08:45:56 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:45:56 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:45:56 --> Utf8 Class Initialized
INFO - 2020-01-28 08:45:56 --> URI Class Initialized
INFO - 2020-01-28 08:45:56 --> Router Class Initialized
INFO - 2020-01-28 08:45:56 --> Output Class Initialized
INFO - 2020-01-28 08:45:56 --> Security Class Initialized
DEBUG - 2020-01-28 08:45:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:45:56 --> Input Class Initialized
INFO - 2020-01-28 08:45:56 --> Language Class Initialized
INFO - 2020-01-28 08:45:56 --> Language Class Initialized
INFO - 2020-01-28 08:45:56 --> Config Class Initialized
INFO - 2020-01-28 08:45:56 --> Loader Class Initialized
INFO - 2020-01-28 08:45:56 --> Helper loaded: url_helper
INFO - 2020-01-28 08:45:56 --> Helper loaded: file_helper
INFO - 2020-01-28 08:45:56 --> Helper loaded: form_helper
INFO - 2020-01-28 08:45:56 --> Helper loaded: my_helper
INFO - 2020-01-28 08:45:56 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:45:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:45:56 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:45:56 --> Controller Class Initialized
ERROR - 2020-01-28 08:45:57 --> Severity: Notice --> Undefined variable: npa E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 390
ERROR - 2020-01-28 08:45:57 --> Severity: Notice --> Undefined variable: nka E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_raport\controllers\Cetak_raport.php 396
DEBUG - 2020-01-28 08:45:57 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:45:57 --> Final output sent to browser
DEBUG - 2020-01-28 08:45:57 --> Total execution time: 1.0927
INFO - 2020-01-28 08:46:40 --> Config Class Initialized
INFO - 2020-01-28 08:46:40 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:46:40 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:46:40 --> Utf8 Class Initialized
INFO - 2020-01-28 08:46:40 --> URI Class Initialized
INFO - 2020-01-28 08:46:41 --> Router Class Initialized
INFO - 2020-01-28 08:46:41 --> Output Class Initialized
INFO - 2020-01-28 08:46:41 --> Security Class Initialized
DEBUG - 2020-01-28 08:46:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:46:41 --> Input Class Initialized
INFO - 2020-01-28 08:46:41 --> Language Class Initialized
INFO - 2020-01-28 08:46:41 --> Language Class Initialized
INFO - 2020-01-28 08:46:41 --> Config Class Initialized
INFO - 2020-01-28 08:46:41 --> Loader Class Initialized
INFO - 2020-01-28 08:46:41 --> Helper loaded: url_helper
INFO - 2020-01-28 08:46:41 --> Helper loaded: file_helper
INFO - 2020-01-28 08:46:41 --> Helper loaded: form_helper
INFO - 2020-01-28 08:46:41 --> Helper loaded: my_helper
INFO - 2020-01-28 08:46:41 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:46:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:46:41 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:46:41 --> Controller Class Initialized
DEBUG - 2020-01-28 08:46:41 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:46:41 --> Final output sent to browser
DEBUG - 2020-01-28 08:46:41 --> Total execution time: 0.9388
INFO - 2020-01-28 08:47:40 --> Config Class Initialized
INFO - 2020-01-28 08:47:40 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:47:40 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:47:40 --> Utf8 Class Initialized
INFO - 2020-01-28 08:47:40 --> URI Class Initialized
INFO - 2020-01-28 08:47:40 --> Router Class Initialized
INFO - 2020-01-28 08:47:40 --> Output Class Initialized
INFO - 2020-01-28 08:47:40 --> Security Class Initialized
DEBUG - 2020-01-28 08:47:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:47:40 --> Input Class Initialized
INFO - 2020-01-28 08:47:40 --> Language Class Initialized
INFO - 2020-01-28 08:47:41 --> Language Class Initialized
INFO - 2020-01-28 08:47:41 --> Config Class Initialized
INFO - 2020-01-28 08:47:41 --> Loader Class Initialized
INFO - 2020-01-28 08:47:41 --> Helper loaded: url_helper
INFO - 2020-01-28 08:47:41 --> Helper loaded: file_helper
INFO - 2020-01-28 08:47:41 --> Helper loaded: form_helper
INFO - 2020-01-28 08:47:41 --> Helper loaded: my_helper
INFO - 2020-01-28 08:47:41 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:47:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:47:41 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:47:41 --> Controller Class Initialized
DEBUG - 2020-01-28 08:47:41 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:47:41 --> Final output sent to browser
DEBUG - 2020-01-28 08:47:41 --> Total execution time: 0.9365
INFO - 2020-01-28 08:48:02 --> Config Class Initialized
INFO - 2020-01-28 08:48:02 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:48:02 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:48:02 --> Utf8 Class Initialized
INFO - 2020-01-28 08:48:02 --> URI Class Initialized
INFO - 2020-01-28 08:48:02 --> Router Class Initialized
INFO - 2020-01-28 08:48:03 --> Output Class Initialized
INFO - 2020-01-28 08:48:03 --> Security Class Initialized
DEBUG - 2020-01-28 08:48:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:48:03 --> Input Class Initialized
INFO - 2020-01-28 08:48:03 --> Language Class Initialized
INFO - 2020-01-28 08:48:03 --> Language Class Initialized
INFO - 2020-01-28 08:48:03 --> Config Class Initialized
INFO - 2020-01-28 08:48:03 --> Loader Class Initialized
INFO - 2020-01-28 08:48:03 --> Helper loaded: url_helper
INFO - 2020-01-28 08:48:03 --> Helper loaded: file_helper
INFO - 2020-01-28 08:48:03 --> Helper loaded: form_helper
INFO - 2020-01-28 08:48:03 --> Helper loaded: my_helper
INFO - 2020-01-28 08:48:03 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:48:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:48:03 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:48:03 --> Controller Class Initialized
DEBUG - 2020-01-28 08:48:03 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:48:03 --> Final output sent to browser
DEBUG - 2020-01-28 08:48:03 --> Total execution time: 0.9450
INFO - 2020-01-28 08:48:39 --> Config Class Initialized
INFO - 2020-01-28 08:48:39 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:48:39 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:48:39 --> Utf8 Class Initialized
INFO - 2020-01-28 08:48:39 --> URI Class Initialized
INFO - 2020-01-28 08:48:39 --> Router Class Initialized
INFO - 2020-01-28 08:48:39 --> Output Class Initialized
INFO - 2020-01-28 08:48:39 --> Security Class Initialized
DEBUG - 2020-01-28 08:48:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:48:39 --> Input Class Initialized
INFO - 2020-01-28 08:48:39 --> Language Class Initialized
INFO - 2020-01-28 08:48:39 --> Language Class Initialized
INFO - 2020-01-28 08:48:39 --> Config Class Initialized
INFO - 2020-01-28 08:48:39 --> Loader Class Initialized
INFO - 2020-01-28 08:48:39 --> Helper loaded: url_helper
INFO - 2020-01-28 08:48:39 --> Helper loaded: file_helper
INFO - 2020-01-28 08:48:39 --> Helper loaded: form_helper
INFO - 2020-01-28 08:48:39 --> Helper loaded: my_helper
INFO - 2020-01-28 08:48:39 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:48:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:48:39 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:48:39 --> Controller Class Initialized
DEBUG - 2020-01-28 08:48:39 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:48:39 --> Final output sent to browser
DEBUG - 2020-01-28 08:48:40 --> Total execution time: 0.8955
INFO - 2020-01-28 08:49:08 --> Config Class Initialized
INFO - 2020-01-28 08:49:08 --> Hooks Class Initialized
DEBUG - 2020-01-28 08:49:08 --> UTF-8 Support Enabled
INFO - 2020-01-28 08:49:08 --> Utf8 Class Initialized
INFO - 2020-01-28 08:49:08 --> URI Class Initialized
INFO - 2020-01-28 08:49:08 --> Router Class Initialized
INFO - 2020-01-28 08:49:08 --> Output Class Initialized
INFO - 2020-01-28 08:49:08 --> Security Class Initialized
DEBUG - 2020-01-28 08:49:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 08:49:08 --> Input Class Initialized
INFO - 2020-01-28 08:49:08 --> Language Class Initialized
INFO - 2020-01-28 08:49:08 --> Language Class Initialized
INFO - 2020-01-28 08:49:08 --> Config Class Initialized
INFO - 2020-01-28 08:49:08 --> Loader Class Initialized
INFO - 2020-01-28 08:49:08 --> Helper loaded: url_helper
INFO - 2020-01-28 08:49:08 --> Helper loaded: file_helper
INFO - 2020-01-28 08:49:08 --> Helper loaded: form_helper
INFO - 2020-01-28 08:49:09 --> Helper loaded: my_helper
INFO - 2020-01-28 08:49:09 --> Database Driver Class Initialized
DEBUG - 2020-01-28 08:49:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 08:49:09 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 08:49:09 --> Controller Class Initialized
DEBUG - 2020-01-28 08:49:09 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 08:49:09 --> Final output sent to browser
DEBUG - 2020-01-28 08:49:09 --> Total execution time: 0.9373
INFO - 2020-01-28 09:19:18 --> Config Class Initialized
INFO - 2020-01-28 09:19:18 --> Hooks Class Initialized
DEBUG - 2020-01-28 09:19:18 --> UTF-8 Support Enabled
INFO - 2020-01-28 09:19:18 --> Utf8 Class Initialized
INFO - 2020-01-28 09:19:18 --> URI Class Initialized
INFO - 2020-01-28 09:19:18 --> Router Class Initialized
INFO - 2020-01-28 09:19:18 --> Output Class Initialized
INFO - 2020-01-28 09:19:18 --> Security Class Initialized
DEBUG - 2020-01-28 09:19:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 09:19:18 --> Input Class Initialized
INFO - 2020-01-28 09:19:18 --> Language Class Initialized
INFO - 2020-01-28 09:19:18 --> Language Class Initialized
INFO - 2020-01-28 09:19:18 --> Config Class Initialized
INFO - 2020-01-28 09:19:18 --> Loader Class Initialized
INFO - 2020-01-28 09:19:18 --> Helper loaded: url_helper
INFO - 2020-01-28 09:19:18 --> Helper loaded: file_helper
INFO - 2020-01-28 09:19:18 --> Helper loaded: form_helper
INFO - 2020-01-28 09:19:18 --> Helper loaded: my_helper
INFO - 2020-01-28 09:19:18 --> Database Driver Class Initialized
DEBUG - 2020-01-28 09:19:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 09:19:19 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 09:19:19 --> Controller Class Initialized
DEBUG - 2020-01-28 09:19:19 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_rapot.php
INFO - 2020-01-28 09:19:19 --> Final output sent to browser
DEBUG - 2020-01-28 09:19:19 --> Total execution time: 1.0222
INFO - 2020-01-28 09:19:28 --> Config Class Initialized
INFO - 2020-01-28 09:19:28 --> Hooks Class Initialized
DEBUG - 2020-01-28 09:19:28 --> UTF-8 Support Enabled
INFO - 2020-01-28 09:19:28 --> Utf8 Class Initialized
INFO - 2020-01-28 09:19:28 --> URI Class Initialized
INFO - 2020-01-28 09:19:28 --> Router Class Initialized
INFO - 2020-01-28 09:19:28 --> Output Class Initialized
INFO - 2020-01-28 09:19:28 --> Security Class Initialized
DEBUG - 2020-01-28 09:19:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 09:19:28 --> Input Class Initialized
INFO - 2020-01-28 09:19:28 --> Language Class Initialized
INFO - 2020-01-28 09:19:28 --> Language Class Initialized
INFO - 2020-01-28 09:19:29 --> Config Class Initialized
INFO - 2020-01-28 09:19:29 --> Loader Class Initialized
INFO - 2020-01-28 09:19:29 --> Helper loaded: url_helper
INFO - 2020-01-28 09:19:29 --> Helper loaded: file_helper
INFO - 2020-01-28 09:19:29 --> Helper loaded: form_helper
INFO - 2020-01-28 09:19:29 --> Helper loaded: my_helper
INFO - 2020-01-28 09:19:29 --> Database Driver Class Initialized
DEBUG - 2020-01-28 09:19:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 09:19:29 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 09:19:29 --> Controller Class Initialized
DEBUG - 2020-01-28 09:19:29 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/view_mapel/views/v_view_mapel.php
DEBUG - 2020-01-28 09:19:29 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 09:19:29 --> Final output sent to browser
DEBUG - 2020-01-28 09:19:29 --> Total execution time: 0.9841
INFO - 2020-01-28 09:19:34 --> Config Class Initialized
INFO - 2020-01-28 09:19:34 --> Hooks Class Initialized
DEBUG - 2020-01-28 09:19:34 --> UTF-8 Support Enabled
INFO - 2020-01-28 09:19:34 --> Utf8 Class Initialized
INFO - 2020-01-28 09:19:34 --> URI Class Initialized
INFO - 2020-01-28 09:19:34 --> Router Class Initialized
INFO - 2020-01-28 09:19:34 --> Output Class Initialized
INFO - 2020-01-28 09:19:34 --> Security Class Initialized
DEBUG - 2020-01-28 09:19:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 09:19:34 --> Input Class Initialized
INFO - 2020-01-28 09:19:34 --> Language Class Initialized
INFO - 2020-01-28 09:19:34 --> Language Class Initialized
INFO - 2020-01-28 09:19:34 --> Config Class Initialized
INFO - 2020-01-28 09:19:34 --> Loader Class Initialized
INFO - 2020-01-28 09:19:34 --> Helper loaded: url_helper
INFO - 2020-01-28 09:19:34 --> Helper loaded: file_helper
INFO - 2020-01-28 09:19:34 --> Helper loaded: form_helper
INFO - 2020-01-28 09:19:35 --> Helper loaded: my_helper
INFO - 2020-01-28 09:19:35 --> Database Driver Class Initialized
DEBUG - 2020-01-28 09:19:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 09:19:35 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 09:19:35 --> Controller Class Initialized
DEBUG - 2020-01-28 09:19:35 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/list.php
DEBUG - 2020-01-28 09:19:35 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 09:19:35 --> Final output sent to browser
DEBUG - 2020-01-28 09:19:35 --> Total execution time: 1.0295
INFO - 2020-01-28 09:19:36 --> Config Class Initialized
INFO - 2020-01-28 09:19:37 --> Hooks Class Initialized
DEBUG - 2020-01-28 09:19:37 --> UTF-8 Support Enabled
INFO - 2020-01-28 09:19:37 --> Utf8 Class Initialized
INFO - 2020-01-28 09:19:37 --> URI Class Initialized
INFO - 2020-01-28 09:19:37 --> Router Class Initialized
INFO - 2020-01-28 09:19:37 --> Output Class Initialized
INFO - 2020-01-28 09:19:37 --> Security Class Initialized
DEBUG - 2020-01-28 09:19:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 09:19:37 --> Input Class Initialized
INFO - 2020-01-28 09:19:37 --> Language Class Initialized
INFO - 2020-01-28 09:19:37 --> Language Class Initialized
INFO - 2020-01-28 09:19:37 --> Config Class Initialized
INFO - 2020-01-28 09:19:37 --> Loader Class Initialized
INFO - 2020-01-28 09:19:37 --> Helper loaded: url_helper
INFO - 2020-01-28 09:19:37 --> Helper loaded: file_helper
INFO - 2020-01-28 09:19:37 --> Helper loaded: form_helper
INFO - 2020-01-28 09:19:37 --> Helper loaded: my_helper
INFO - 2020-01-28 09:19:37 --> Database Driver Class Initialized
DEBUG - 2020-01-28 09:19:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 09:19:37 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 09:19:37 --> Controller Class Initialized
DEBUG - 2020-01-28 09:19:37 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_prestasi.php
INFO - 2020-01-28 09:19:37 --> Final output sent to browser
DEBUG - 2020-01-28 09:19:37 --> Total execution time: 1.0015
INFO - 2020-01-28 09:19:43 --> Config Class Initialized
INFO - 2020-01-28 09:19:43 --> Hooks Class Initialized
DEBUG - 2020-01-28 09:19:43 --> UTF-8 Support Enabled
INFO - 2020-01-28 09:19:43 --> Utf8 Class Initialized
INFO - 2020-01-28 09:19:43 --> URI Class Initialized
INFO - 2020-01-28 09:19:43 --> Router Class Initialized
INFO - 2020-01-28 09:19:43 --> Output Class Initialized
INFO - 2020-01-28 09:19:43 --> Security Class Initialized
DEBUG - 2020-01-28 09:19:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 09:19:44 --> Input Class Initialized
INFO - 2020-01-28 09:19:44 --> Language Class Initialized
INFO - 2020-01-28 09:19:44 --> Language Class Initialized
INFO - 2020-01-28 09:19:44 --> Config Class Initialized
INFO - 2020-01-28 09:19:44 --> Loader Class Initialized
INFO - 2020-01-28 09:19:44 --> Helper loaded: url_helper
INFO - 2020-01-28 09:19:44 --> Helper loaded: file_helper
INFO - 2020-01-28 09:19:44 --> Helper loaded: form_helper
INFO - 2020-01-28 09:19:44 --> Helper loaded: my_helper
INFO - 2020-01-28 09:19:44 --> Database Driver Class Initialized
DEBUG - 2020-01-28 09:19:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 09:19:44 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 09:19:44 --> Controller Class Initialized
DEBUG - 2020-01-28 09:19:44 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/cetak_prestasi.php
INFO - 2020-01-28 09:19:44 --> Final output sent to browser
DEBUG - 2020-01-28 09:19:44 --> Total execution time: 1.1153
INFO - 2020-01-28 09:30:01 --> Config Class Initialized
INFO - 2020-01-28 09:30:01 --> Hooks Class Initialized
DEBUG - 2020-01-28 09:30:01 --> UTF-8 Support Enabled
INFO - 2020-01-28 09:30:01 --> Utf8 Class Initialized
INFO - 2020-01-28 09:30:01 --> URI Class Initialized
INFO - 2020-01-28 09:30:01 --> Router Class Initialized
INFO - 2020-01-28 09:30:01 --> Output Class Initialized
INFO - 2020-01-28 09:30:01 --> Security Class Initialized
DEBUG - 2020-01-28 09:30:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 09:30:01 --> Input Class Initialized
INFO - 2020-01-28 09:30:01 --> Language Class Initialized
INFO - 2020-01-28 09:30:01 --> Language Class Initialized
INFO - 2020-01-28 09:30:01 --> Config Class Initialized
INFO - 2020-01-28 09:30:02 --> Loader Class Initialized
INFO - 2020-01-28 09:30:02 --> Helper loaded: url_helper
INFO - 2020-01-28 09:30:02 --> Helper loaded: file_helper
INFO - 2020-01-28 09:30:02 --> Helper loaded: form_helper
INFO - 2020-01-28 09:30:02 --> Helper loaded: my_helper
INFO - 2020-01-28 09:30:02 --> Database Driver Class Initialized
DEBUG - 2020-01-28 09:30:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 09:30:02 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 09:30:02 --> Controller Class Initialized
DEBUG - 2020-01-28 09:30:02 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/view_mapel/views/v_view_mapel.php
DEBUG - 2020-01-28 09:30:02 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 09:30:02 --> Final output sent to browser
DEBUG - 2020-01-28 09:30:02 --> Total execution time: 1.0076
INFO - 2020-01-28 09:30:04 --> Config Class Initialized
INFO - 2020-01-28 09:30:04 --> Hooks Class Initialized
DEBUG - 2020-01-28 09:30:04 --> UTF-8 Support Enabled
INFO - 2020-01-28 09:30:04 --> Utf8 Class Initialized
INFO - 2020-01-28 09:30:04 --> URI Class Initialized
INFO - 2020-01-28 09:30:04 --> Router Class Initialized
INFO - 2020-01-28 09:30:04 --> Output Class Initialized
INFO - 2020-01-28 09:30:04 --> Security Class Initialized
DEBUG - 2020-01-28 09:30:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 09:30:04 --> Input Class Initialized
INFO - 2020-01-28 09:30:04 --> Language Class Initialized
INFO - 2020-01-28 09:30:04 --> Language Class Initialized
INFO - 2020-01-28 09:30:04 --> Config Class Initialized
INFO - 2020-01-28 09:30:04 --> Loader Class Initialized
INFO - 2020-01-28 09:30:04 --> Helper loaded: url_helper
INFO - 2020-01-28 09:30:05 --> Helper loaded: file_helper
INFO - 2020-01-28 09:30:05 --> Helper loaded: form_helper
INFO - 2020-01-28 09:30:05 --> Helper loaded: my_helper
INFO - 2020-01-28 09:30:05 --> Database Driver Class Initialized
DEBUG - 2020-01-28 09:30:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 09:30:05 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 09:30:05 --> Controller Class Initialized
DEBUG - 2020-01-28 09:30:05 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/list.php
DEBUG - 2020-01-28 09:30:05 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 09:30:05 --> Final output sent to browser
DEBUG - 2020-01-28 09:30:05 --> Total execution time: 1.0948
INFO - 2020-01-28 09:30:05 --> Config Class Initialized
INFO - 2020-01-28 09:30:05 --> Hooks Class Initialized
DEBUG - 2020-01-28 09:30:05 --> UTF-8 Support Enabled
INFO - 2020-01-28 09:30:05 --> Utf8 Class Initialized
INFO - 2020-01-28 09:30:06 --> URI Class Initialized
INFO - 2020-01-28 09:30:06 --> Router Class Initialized
INFO - 2020-01-28 09:30:06 --> Output Class Initialized
INFO - 2020-01-28 09:30:06 --> Security Class Initialized
DEBUG - 2020-01-28 09:30:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 09:30:06 --> Input Class Initialized
INFO - 2020-01-28 09:30:06 --> Language Class Initialized
INFO - 2020-01-28 09:30:06 --> Language Class Initialized
INFO - 2020-01-28 09:30:06 --> Config Class Initialized
INFO - 2020-01-28 09:30:06 --> Loader Class Initialized
INFO - 2020-01-28 09:30:06 --> Helper loaded: url_helper
INFO - 2020-01-28 09:30:06 --> Helper loaded: file_helper
INFO - 2020-01-28 09:30:06 --> Helper loaded: form_helper
INFO - 2020-01-28 09:30:06 --> Helper loaded: my_helper
INFO - 2020-01-28 09:30:06 --> Database Driver Class Initialized
DEBUG - 2020-01-28 09:30:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 09:30:06 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 09:30:06 --> Controller Class Initialized
INFO - 2020-01-28 09:30:14 --> Config Class Initialized
INFO - 2020-01-28 09:30:15 --> Hooks Class Initialized
DEBUG - 2020-01-28 09:30:15 --> UTF-8 Support Enabled
INFO - 2020-01-28 09:30:15 --> Utf8 Class Initialized
INFO - 2020-01-28 09:30:15 --> URI Class Initialized
INFO - 2020-01-28 09:30:15 --> Router Class Initialized
INFO - 2020-01-28 09:30:15 --> Output Class Initialized
INFO - 2020-01-28 09:30:15 --> Security Class Initialized
DEBUG - 2020-01-28 09:30:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 09:30:15 --> Input Class Initialized
INFO - 2020-01-28 09:30:15 --> Language Class Initialized
INFO - 2020-01-28 09:30:15 --> Language Class Initialized
INFO - 2020-01-28 09:30:15 --> Config Class Initialized
INFO - 2020-01-28 09:30:15 --> Loader Class Initialized
INFO - 2020-01-28 09:30:15 --> Helper loaded: url_helper
INFO - 2020-01-28 09:30:15 --> Helper loaded: file_helper
INFO - 2020-01-28 09:30:15 --> Helper loaded: form_helper
INFO - 2020-01-28 09:30:15 --> Helper loaded: my_helper
INFO - 2020-01-28 09:30:15 --> Database Driver Class Initialized
DEBUG - 2020-01-28 09:30:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 09:30:15 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 09:30:15 --> Controller Class Initialized
INFO - 2020-01-28 09:30:17 --> Config Class Initialized
INFO - 2020-01-28 09:30:17 --> Hooks Class Initialized
DEBUG - 2020-01-28 09:30:18 --> UTF-8 Support Enabled
INFO - 2020-01-28 09:30:18 --> Utf8 Class Initialized
INFO - 2020-01-28 09:30:18 --> URI Class Initialized
INFO - 2020-01-28 09:30:18 --> Router Class Initialized
INFO - 2020-01-28 09:30:18 --> Output Class Initialized
INFO - 2020-01-28 09:30:18 --> Security Class Initialized
DEBUG - 2020-01-28 09:30:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 09:30:18 --> Input Class Initialized
INFO - 2020-01-28 09:30:18 --> Language Class Initialized
INFO - 2020-01-28 09:30:18 --> Language Class Initialized
INFO - 2020-01-28 09:30:18 --> Config Class Initialized
INFO - 2020-01-28 09:30:18 --> Loader Class Initialized
INFO - 2020-01-28 09:30:18 --> Helper loaded: url_helper
INFO - 2020-01-28 09:30:18 --> Helper loaded: file_helper
INFO - 2020-01-28 09:30:18 --> Helper loaded: form_helper
INFO - 2020-01-28 09:30:18 --> Helper loaded: my_helper
INFO - 2020-01-28 09:30:18 --> Database Driver Class Initialized
DEBUG - 2020-01-28 09:30:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 09:30:19 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 09:30:19 --> Controller Class Initialized
DEBUG - 2020-01-28 09:30:19 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/list.php
DEBUG - 2020-01-28 09:30:19 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 09:30:19 --> Final output sent to browser
DEBUG - 2020-01-28 09:30:19 --> Total execution time: 1.3683
INFO - 2020-01-28 09:30:19 --> Config Class Initialized
INFO - 2020-01-28 09:30:19 --> Hooks Class Initialized
DEBUG - 2020-01-28 09:30:19 --> UTF-8 Support Enabled
INFO - 2020-01-28 09:30:19 --> Utf8 Class Initialized
INFO - 2020-01-28 09:30:19 --> URI Class Initialized
INFO - 2020-01-28 09:30:19 --> Router Class Initialized
INFO - 2020-01-28 09:30:19 --> Output Class Initialized
INFO - 2020-01-28 09:30:20 --> Security Class Initialized
DEBUG - 2020-01-28 09:30:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 09:30:20 --> Input Class Initialized
INFO - 2020-01-28 09:30:20 --> Language Class Initialized
INFO - 2020-01-28 09:30:20 --> Language Class Initialized
INFO - 2020-01-28 09:30:20 --> Config Class Initialized
INFO - 2020-01-28 09:30:20 --> Loader Class Initialized
INFO - 2020-01-28 09:30:20 --> Helper loaded: url_helper
INFO - 2020-01-28 09:30:20 --> Helper loaded: file_helper
INFO - 2020-01-28 09:30:20 --> Helper loaded: form_helper
INFO - 2020-01-28 09:30:20 --> Helper loaded: my_helper
INFO - 2020-01-28 09:30:20 --> Database Driver Class Initialized
DEBUG - 2020-01-28 09:30:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 09:30:20 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 09:30:20 --> Controller Class Initialized
INFO - 2020-01-28 09:32:39 --> Config Class Initialized
INFO - 2020-01-28 09:32:39 --> Hooks Class Initialized
DEBUG - 2020-01-28 09:32:39 --> UTF-8 Support Enabled
INFO - 2020-01-28 09:32:39 --> Utf8 Class Initialized
INFO - 2020-01-28 09:32:39 --> URI Class Initialized
INFO - 2020-01-28 09:32:39 --> Router Class Initialized
INFO - 2020-01-28 09:32:39 --> Output Class Initialized
INFO - 2020-01-28 09:32:39 --> Security Class Initialized
DEBUG - 2020-01-28 09:32:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 09:32:39 --> Input Class Initialized
INFO - 2020-01-28 09:32:39 --> Language Class Initialized
INFO - 2020-01-28 09:32:39 --> Language Class Initialized
INFO - 2020-01-28 09:32:40 --> Config Class Initialized
INFO - 2020-01-28 09:32:40 --> Loader Class Initialized
INFO - 2020-01-28 09:32:40 --> Helper loaded: url_helper
INFO - 2020-01-28 09:32:40 --> Helper loaded: file_helper
INFO - 2020-01-28 09:32:40 --> Helper loaded: form_helper
INFO - 2020-01-28 09:32:40 --> Helper loaded: my_helper
INFO - 2020-01-28 09:32:40 --> Database Driver Class Initialized
DEBUG - 2020-01-28 09:32:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 09:32:40 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 09:32:40 --> Controller Class Initialized
DEBUG - 2020-01-28 09:32:40 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_leger/views/landing.php
DEBUG - 2020-01-28 09:32:40 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 09:32:40 --> Final output sent to browser
DEBUG - 2020-01-28 09:32:40 --> Total execution time: 1.1720
INFO - 2020-01-28 09:32:42 --> Config Class Initialized
INFO - 2020-01-28 09:32:42 --> Hooks Class Initialized
DEBUG - 2020-01-28 09:32:42 --> UTF-8 Support Enabled
INFO - 2020-01-28 09:32:42 --> Utf8 Class Initialized
INFO - 2020-01-28 09:32:42 --> URI Class Initialized
INFO - 2020-01-28 09:32:42 --> Router Class Initialized
INFO - 2020-01-28 09:32:42 --> Output Class Initialized
INFO - 2020-01-28 09:32:42 --> Security Class Initialized
DEBUG - 2020-01-28 09:32:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 09:32:42 --> Input Class Initialized
INFO - 2020-01-28 09:32:42 --> Language Class Initialized
INFO - 2020-01-28 09:32:42 --> Language Class Initialized
INFO - 2020-01-28 09:32:42 --> Config Class Initialized
INFO - 2020-01-28 09:32:42 --> Loader Class Initialized
INFO - 2020-01-28 09:32:43 --> Helper loaded: url_helper
INFO - 2020-01-28 09:32:43 --> Helper loaded: file_helper
INFO - 2020-01-28 09:32:43 --> Helper loaded: form_helper
INFO - 2020-01-28 09:32:43 --> Helper loaded: my_helper
INFO - 2020-01-28 09:32:43 --> Database Driver Class Initialized
DEBUG - 2020-01-28 09:32:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 09:32:43 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 09:32:43 --> Controller Class Initialized
DEBUG - 2020-01-28 09:32:43 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_leger/views/cetak.php
INFO - 2020-01-28 09:32:43 --> Final output sent to browser
DEBUG - 2020-01-28 09:32:43 --> Total execution time: 1.0197
INFO - 2020-01-28 09:34:01 --> Config Class Initialized
INFO - 2020-01-28 09:34:01 --> Hooks Class Initialized
DEBUG - 2020-01-28 09:34:01 --> UTF-8 Support Enabled
INFO - 2020-01-28 09:34:01 --> Utf8 Class Initialized
INFO - 2020-01-28 09:34:01 --> URI Class Initialized
INFO - 2020-01-28 09:34:01 --> Router Class Initialized
INFO - 2020-01-28 09:34:01 --> Output Class Initialized
INFO - 2020-01-28 09:34:01 --> Security Class Initialized
DEBUG - 2020-01-28 09:34:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 09:34:01 --> Input Class Initialized
INFO - 2020-01-28 09:34:01 --> Language Class Initialized
INFO - 2020-01-28 09:34:01 --> Language Class Initialized
INFO - 2020-01-28 09:34:01 --> Config Class Initialized
INFO - 2020-01-28 09:34:01 --> Loader Class Initialized
INFO - 2020-01-28 09:34:01 --> Helper loaded: url_helper
INFO - 2020-01-28 09:34:01 --> Helper loaded: file_helper
INFO - 2020-01-28 09:34:01 --> Helper loaded: form_helper
INFO - 2020-01-28 09:34:01 --> Helper loaded: my_helper
INFO - 2020-01-28 09:34:02 --> Database Driver Class Initialized
DEBUG - 2020-01-28 09:34:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 09:34:02 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 09:34:02 --> Controller Class Initialized
DEBUG - 2020-01-28 09:34:02 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_leger/views/cetak_ekstra.php
INFO - 2020-01-28 09:34:02 --> Final output sent to browser
DEBUG - 2020-01-28 09:34:02 --> Total execution time: 1.0549
INFO - 2020-01-28 09:34:16 --> Config Class Initialized
INFO - 2020-01-28 09:34:16 --> Hooks Class Initialized
DEBUG - 2020-01-28 09:34:16 --> UTF-8 Support Enabled
INFO - 2020-01-28 09:34:16 --> Utf8 Class Initialized
INFO - 2020-01-28 09:34:16 --> URI Class Initialized
INFO - 2020-01-28 09:34:16 --> Router Class Initialized
INFO - 2020-01-28 09:34:16 --> Output Class Initialized
INFO - 2020-01-28 09:34:16 --> Security Class Initialized
DEBUG - 2020-01-28 09:34:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 09:34:17 --> Input Class Initialized
INFO - 2020-01-28 09:34:17 --> Language Class Initialized
INFO - 2020-01-28 09:34:17 --> Language Class Initialized
INFO - 2020-01-28 09:34:17 --> Config Class Initialized
INFO - 2020-01-28 09:34:17 --> Loader Class Initialized
INFO - 2020-01-28 09:34:17 --> Helper loaded: url_helper
INFO - 2020-01-28 09:34:17 --> Helper loaded: file_helper
INFO - 2020-01-28 09:34:17 --> Helper loaded: form_helper
INFO - 2020-01-28 09:34:17 --> Helper loaded: my_helper
INFO - 2020-01-28 09:34:17 --> Database Driver Class Initialized
DEBUG - 2020-01-28 09:34:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 09:34:17 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 09:34:17 --> Controller Class Initialized
DEBUG - 2020-01-28 09:34:17 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_leger/views/cetak.php
INFO - 2020-01-28 09:34:17 --> Final output sent to browser
DEBUG - 2020-01-28 09:34:17 --> Total execution time: 1.2236
INFO - 2020-01-28 14:37:42 --> Config Class Initialized
INFO - 2020-01-28 14:37:42 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:37:42 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:37:42 --> Utf8 Class Initialized
INFO - 2020-01-28 14:37:42 --> URI Class Initialized
DEBUG - 2020-01-28 14:37:42 --> No URI present. Default controller set.
INFO - 2020-01-28 14:37:42 --> Router Class Initialized
INFO - 2020-01-28 14:37:42 --> Output Class Initialized
INFO - 2020-01-28 14:37:42 --> Security Class Initialized
DEBUG - 2020-01-28 14:37:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:37:43 --> Input Class Initialized
INFO - 2020-01-28 14:37:43 --> Language Class Initialized
INFO - 2020-01-28 14:37:43 --> Language Class Initialized
INFO - 2020-01-28 14:37:43 --> Config Class Initialized
INFO - 2020-01-28 14:37:43 --> Loader Class Initialized
INFO - 2020-01-28 14:37:43 --> Helper loaded: url_helper
INFO - 2020-01-28 14:37:43 --> Helper loaded: file_helper
INFO - 2020-01-28 14:37:43 --> Helper loaded: form_helper
INFO - 2020-01-28 14:37:43 --> Helper loaded: my_helper
INFO - 2020-01-28 14:37:43 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:37:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:37:43 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:37:43 --> Controller Class Initialized
INFO - 2020-01-28 14:37:43 --> Config Class Initialized
INFO - 2020-01-28 14:37:43 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:37:43 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:37:43 --> Utf8 Class Initialized
INFO - 2020-01-28 14:37:43 --> URI Class Initialized
INFO - 2020-01-28 14:37:43 --> Router Class Initialized
INFO - 2020-01-28 14:37:43 --> Output Class Initialized
INFO - 2020-01-28 14:37:43 --> Security Class Initialized
DEBUG - 2020-01-28 14:37:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:37:43 --> Input Class Initialized
INFO - 2020-01-28 14:37:43 --> Language Class Initialized
INFO - 2020-01-28 14:37:44 --> Language Class Initialized
INFO - 2020-01-28 14:37:44 --> Config Class Initialized
INFO - 2020-01-28 14:37:44 --> Loader Class Initialized
INFO - 2020-01-28 14:37:44 --> Helper loaded: url_helper
INFO - 2020-01-28 14:37:44 --> Helper loaded: file_helper
INFO - 2020-01-28 14:37:44 --> Helper loaded: form_helper
INFO - 2020-01-28 14:37:44 --> Helper loaded: my_helper
INFO - 2020-01-28 14:37:44 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:37:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:37:44 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:37:44 --> Controller Class Initialized
DEBUG - 2020-01-28 14:37:44 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/login/views/login.php
DEBUG - 2020-01-28 14:37:44 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 14:37:44 --> Final output sent to browser
DEBUG - 2020-01-28 14:37:44 --> Total execution time: 0.5976
INFO - 2020-01-28 14:37:58 --> Config Class Initialized
INFO - 2020-01-28 14:37:58 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:37:58 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:37:58 --> Utf8 Class Initialized
INFO - 2020-01-28 14:37:58 --> URI Class Initialized
INFO - 2020-01-28 14:37:58 --> Router Class Initialized
INFO - 2020-01-28 14:37:59 --> Output Class Initialized
INFO - 2020-01-28 14:37:59 --> Security Class Initialized
DEBUG - 2020-01-28 14:37:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:37:59 --> Input Class Initialized
INFO - 2020-01-28 14:37:59 --> Language Class Initialized
INFO - 2020-01-28 14:37:59 --> Language Class Initialized
INFO - 2020-01-28 14:37:59 --> Config Class Initialized
INFO - 2020-01-28 14:37:59 --> Loader Class Initialized
INFO - 2020-01-28 14:37:59 --> Helper loaded: url_helper
INFO - 2020-01-28 14:37:59 --> Helper loaded: file_helper
INFO - 2020-01-28 14:37:59 --> Helper loaded: form_helper
INFO - 2020-01-28 14:37:59 --> Helper loaded: my_helper
INFO - 2020-01-28 14:37:59 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:37:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:37:59 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:37:59 --> Controller Class Initialized
INFO - 2020-01-28 14:37:59 --> Helper loaded: cookie_helper
INFO - 2020-01-28 14:37:59 --> Final output sent to browser
DEBUG - 2020-01-28 14:37:59 --> Total execution time: 0.6147
INFO - 2020-01-28 14:38:03 --> Config Class Initialized
INFO - 2020-01-28 14:38:03 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:38:03 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:38:03 --> Utf8 Class Initialized
INFO - 2020-01-28 14:38:03 --> URI Class Initialized
INFO - 2020-01-28 14:38:03 --> Router Class Initialized
INFO - 2020-01-28 14:38:03 --> Output Class Initialized
INFO - 2020-01-28 14:38:03 --> Security Class Initialized
DEBUG - 2020-01-28 14:38:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:38:03 --> Input Class Initialized
INFO - 2020-01-28 14:38:03 --> Language Class Initialized
INFO - 2020-01-28 14:38:03 --> Language Class Initialized
INFO - 2020-01-28 14:38:03 --> Config Class Initialized
INFO - 2020-01-28 14:38:03 --> Loader Class Initialized
INFO - 2020-01-28 14:38:03 --> Helper loaded: url_helper
INFO - 2020-01-28 14:38:03 --> Helper loaded: file_helper
INFO - 2020-01-28 14:38:03 --> Helper loaded: form_helper
INFO - 2020-01-28 14:38:03 --> Helper loaded: my_helper
INFO - 2020-01-28 14:38:03 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:38:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:38:03 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:38:03 --> Controller Class Initialized
DEBUG - 2020-01-28 14:38:03 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/home/views/v_home.php
DEBUG - 2020-01-28 14:38:03 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 14:38:03 --> Final output sent to browser
DEBUG - 2020-01-28 14:38:04 --> Total execution time: 0.7746
INFO - 2020-01-28 14:38:06 --> Config Class Initialized
INFO - 2020-01-28 14:38:06 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:38:06 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:38:06 --> Utf8 Class Initialized
INFO - 2020-01-28 14:38:06 --> URI Class Initialized
INFO - 2020-01-28 14:38:06 --> Router Class Initialized
INFO - 2020-01-28 14:38:06 --> Output Class Initialized
INFO - 2020-01-28 14:38:06 --> Security Class Initialized
DEBUG - 2020-01-28 14:38:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:38:06 --> Input Class Initialized
INFO - 2020-01-28 14:38:06 --> Language Class Initialized
INFO - 2020-01-28 14:38:06 --> Language Class Initialized
INFO - 2020-01-28 14:38:06 --> Config Class Initialized
INFO - 2020-01-28 14:38:06 --> Loader Class Initialized
INFO - 2020-01-28 14:38:06 --> Helper loaded: url_helper
INFO - 2020-01-28 14:38:06 --> Helper loaded: file_helper
INFO - 2020-01-28 14:38:06 --> Helper loaded: form_helper
INFO - 2020-01-28 14:38:06 --> Helper loaded: my_helper
INFO - 2020-01-28 14:38:06 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:38:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:38:07 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:38:07 --> Controller Class Initialized
DEBUG - 2020-01-28 14:38:07 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_leger/views/landing.php
DEBUG - 2020-01-28 14:38:07 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 14:38:07 --> Final output sent to browser
DEBUG - 2020-01-28 14:38:07 --> Total execution time: 0.6244
INFO - 2020-01-28 14:38:08 --> Config Class Initialized
INFO - 2020-01-28 14:38:08 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:38:08 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:38:08 --> Utf8 Class Initialized
INFO - 2020-01-28 14:38:08 --> URI Class Initialized
INFO - 2020-01-28 14:38:08 --> Router Class Initialized
INFO - 2020-01-28 14:38:08 --> Output Class Initialized
INFO - 2020-01-28 14:38:08 --> Security Class Initialized
DEBUG - 2020-01-28 14:38:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:38:08 --> Input Class Initialized
INFO - 2020-01-28 14:38:08 --> Language Class Initialized
INFO - 2020-01-28 14:38:08 --> Language Class Initialized
INFO - 2020-01-28 14:38:08 --> Config Class Initialized
INFO - 2020-01-28 14:38:08 --> Loader Class Initialized
INFO - 2020-01-28 14:38:08 --> Helper loaded: url_helper
INFO - 2020-01-28 14:38:08 --> Helper loaded: file_helper
INFO - 2020-01-28 14:38:08 --> Helper loaded: form_helper
INFO - 2020-01-28 14:38:08 --> Helper loaded: my_helper
INFO - 2020-01-28 14:38:08 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:38:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:38:08 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:38:09 --> Controller Class Initialized
DEBUG - 2020-01-28 14:38:09 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_leger/views/cetak.php
INFO - 2020-01-28 14:38:09 --> Final output sent to browser
DEBUG - 2020-01-28 14:38:09 --> Total execution time: 0.7090
INFO - 2020-01-28 14:38:35 --> Config Class Initialized
INFO - 2020-01-28 14:38:35 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:38:35 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:38:35 --> Utf8 Class Initialized
INFO - 2020-01-28 14:38:35 --> URI Class Initialized
INFO - 2020-01-28 14:38:35 --> Router Class Initialized
INFO - 2020-01-28 14:38:35 --> Output Class Initialized
INFO - 2020-01-28 14:38:35 --> Security Class Initialized
DEBUG - 2020-01-28 14:38:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:38:35 --> Input Class Initialized
INFO - 2020-01-28 14:38:35 --> Language Class Initialized
INFO - 2020-01-28 14:38:35 --> Language Class Initialized
INFO - 2020-01-28 14:38:35 --> Config Class Initialized
INFO - 2020-01-28 14:38:35 --> Loader Class Initialized
INFO - 2020-01-28 14:38:35 --> Helper loaded: url_helper
INFO - 2020-01-28 14:38:35 --> Helper loaded: file_helper
INFO - 2020-01-28 14:38:35 --> Helper loaded: form_helper
INFO - 2020-01-28 14:38:35 --> Helper loaded: my_helper
INFO - 2020-01-28 14:38:35 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:38:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:38:35 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:38:35 --> Controller Class Initialized
DEBUG - 2020-01-28 14:38:35 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_leger/views/cetak.php
INFO - 2020-01-28 14:38:35 --> Final output sent to browser
DEBUG - 2020-01-28 14:38:35 --> Total execution time: 0.6084
INFO - 2020-01-28 14:38:54 --> Config Class Initialized
INFO - 2020-01-28 14:38:54 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:38:54 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:38:54 --> Utf8 Class Initialized
INFO - 2020-01-28 14:38:54 --> URI Class Initialized
INFO - 2020-01-28 14:38:54 --> Router Class Initialized
INFO - 2020-01-28 14:38:54 --> Output Class Initialized
INFO - 2020-01-28 14:38:54 --> Security Class Initialized
DEBUG - 2020-01-28 14:38:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:38:54 --> Input Class Initialized
INFO - 2020-01-28 14:38:54 --> Language Class Initialized
INFO - 2020-01-28 14:38:54 --> Language Class Initialized
INFO - 2020-01-28 14:38:54 --> Config Class Initialized
INFO - 2020-01-28 14:38:54 --> Loader Class Initialized
INFO - 2020-01-28 14:38:54 --> Helper loaded: url_helper
INFO - 2020-01-28 14:38:54 --> Helper loaded: file_helper
INFO - 2020-01-28 14:38:54 --> Helper loaded: form_helper
INFO - 2020-01-28 14:38:54 --> Helper loaded: my_helper
INFO - 2020-01-28 14:38:54 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:38:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:38:54 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:38:54 --> Controller Class Initialized
DEBUG - 2020-01-28 14:38:54 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/view_mapel/views/v_view_mapel.php
DEBUG - 2020-01-28 14:38:54 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 14:38:55 --> Final output sent to browser
DEBUG - 2020-01-28 14:38:55 --> Total execution time: 0.6314
INFO - 2020-01-28 14:39:04 --> Config Class Initialized
INFO - 2020-01-28 14:39:04 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:39:04 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:39:04 --> Utf8 Class Initialized
INFO - 2020-01-28 14:39:04 --> URI Class Initialized
INFO - 2020-01-28 14:39:04 --> Router Class Initialized
INFO - 2020-01-28 14:39:04 --> Output Class Initialized
INFO - 2020-01-28 14:39:04 --> Security Class Initialized
DEBUG - 2020-01-28 14:39:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:39:04 --> Input Class Initialized
INFO - 2020-01-28 14:39:04 --> Language Class Initialized
INFO - 2020-01-28 14:39:04 --> Language Class Initialized
INFO - 2020-01-28 14:39:04 --> Config Class Initialized
INFO - 2020-01-28 14:39:05 --> Loader Class Initialized
INFO - 2020-01-28 14:39:05 --> Helper loaded: url_helper
INFO - 2020-01-28 14:39:05 --> Helper loaded: file_helper
INFO - 2020-01-28 14:39:05 --> Helper loaded: form_helper
INFO - 2020-01-28 14:39:05 --> Helper loaded: my_helper
INFO - 2020-01-28 14:39:05 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:39:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:39:05 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:39:05 --> Controller Class Initialized
DEBUG - 2020-01-28 14:39:05 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/list.php
DEBUG - 2020-01-28 14:39:05 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 14:39:05 --> Final output sent to browser
DEBUG - 2020-01-28 14:39:05 --> Total execution time: 0.7178
INFO - 2020-01-28 14:39:05 --> Config Class Initialized
INFO - 2020-01-28 14:39:05 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:39:05 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:39:05 --> Utf8 Class Initialized
INFO - 2020-01-28 14:39:05 --> URI Class Initialized
INFO - 2020-01-28 14:39:05 --> Router Class Initialized
INFO - 2020-01-28 14:39:05 --> Output Class Initialized
INFO - 2020-01-28 14:39:05 --> Security Class Initialized
DEBUG - 2020-01-28 14:39:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:39:05 --> Input Class Initialized
INFO - 2020-01-28 14:39:05 --> Language Class Initialized
INFO - 2020-01-28 14:39:05 --> Language Class Initialized
INFO - 2020-01-28 14:39:05 --> Config Class Initialized
INFO - 2020-01-28 14:39:05 --> Loader Class Initialized
INFO - 2020-01-28 14:39:05 --> Helper loaded: url_helper
INFO - 2020-01-28 14:39:06 --> Helper loaded: file_helper
INFO - 2020-01-28 14:39:06 --> Helper loaded: form_helper
INFO - 2020-01-28 14:39:06 --> Helper loaded: my_helper
INFO - 2020-01-28 14:39:06 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:39:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:39:06 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:39:06 --> Controller Class Initialized
INFO - 2020-01-28 14:39:07 --> Config Class Initialized
INFO - 2020-01-28 14:39:07 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:39:07 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:39:07 --> Utf8 Class Initialized
INFO - 2020-01-28 14:39:07 --> URI Class Initialized
INFO - 2020-01-28 14:39:07 --> Router Class Initialized
INFO - 2020-01-28 14:39:07 --> Output Class Initialized
INFO - 2020-01-28 14:39:07 --> Security Class Initialized
DEBUG - 2020-01-28 14:39:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:39:08 --> Input Class Initialized
INFO - 2020-01-28 14:39:08 --> Language Class Initialized
INFO - 2020-01-28 14:39:08 --> Language Class Initialized
INFO - 2020-01-28 14:39:08 --> Config Class Initialized
INFO - 2020-01-28 14:39:08 --> Loader Class Initialized
INFO - 2020-01-28 14:39:08 --> Helper loaded: url_helper
INFO - 2020-01-28 14:39:08 --> Helper loaded: file_helper
INFO - 2020-01-28 14:39:08 --> Helper loaded: form_helper
INFO - 2020-01-28 14:39:08 --> Helper loaded: my_helper
INFO - 2020-01-28 14:39:08 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:39:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:39:08 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:39:08 --> Controller Class Initialized
INFO - 2020-01-28 14:39:08 --> Final output sent to browser
DEBUG - 2020-01-28 14:39:08 --> Total execution time: 0.6003
INFO - 2020-01-28 14:39:12 --> Config Class Initialized
INFO - 2020-01-28 14:39:12 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:39:12 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:39:12 --> Utf8 Class Initialized
INFO - 2020-01-28 14:39:12 --> URI Class Initialized
INFO - 2020-01-28 14:39:12 --> Router Class Initialized
INFO - 2020-01-28 14:39:12 --> Output Class Initialized
INFO - 2020-01-28 14:39:12 --> Security Class Initialized
DEBUG - 2020-01-28 14:39:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:39:12 --> Input Class Initialized
INFO - 2020-01-28 14:39:12 --> Language Class Initialized
INFO - 2020-01-28 14:39:12 --> Language Class Initialized
INFO - 2020-01-28 14:39:12 --> Config Class Initialized
INFO - 2020-01-28 14:39:12 --> Loader Class Initialized
INFO - 2020-01-28 14:39:12 --> Helper loaded: url_helper
INFO - 2020-01-28 14:39:12 --> Helper loaded: file_helper
INFO - 2020-01-28 14:39:12 --> Helper loaded: form_helper
INFO - 2020-01-28 14:39:12 --> Helper loaded: my_helper
INFO - 2020-01-28 14:39:12 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:39:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:39:12 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:39:12 --> Controller Class Initialized
INFO - 2020-01-28 14:39:13 --> Final output sent to browser
DEBUG - 2020-01-28 14:39:13 --> Total execution time: 0.6458
INFO - 2020-01-28 14:39:14 --> Config Class Initialized
INFO - 2020-01-28 14:39:14 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:39:14 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:39:14 --> Utf8 Class Initialized
INFO - 2020-01-28 14:39:14 --> URI Class Initialized
INFO - 2020-01-28 14:39:14 --> Router Class Initialized
INFO - 2020-01-28 14:39:14 --> Output Class Initialized
INFO - 2020-01-28 14:39:14 --> Security Class Initialized
DEBUG - 2020-01-28 14:39:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:39:15 --> Input Class Initialized
INFO - 2020-01-28 14:39:15 --> Language Class Initialized
INFO - 2020-01-28 14:39:15 --> Language Class Initialized
INFO - 2020-01-28 14:39:15 --> Config Class Initialized
INFO - 2020-01-28 14:39:15 --> Loader Class Initialized
INFO - 2020-01-28 14:39:15 --> Helper loaded: url_helper
INFO - 2020-01-28 14:39:15 --> Helper loaded: file_helper
INFO - 2020-01-28 14:39:15 --> Helper loaded: form_helper
INFO - 2020-01-28 14:39:15 --> Helper loaded: my_helper
INFO - 2020-01-28 14:39:15 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:39:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:39:15 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:39:15 --> Controller Class Initialized
INFO - 2020-01-28 14:39:15 --> Final output sent to browser
DEBUG - 2020-01-28 14:39:15 --> Total execution time: 0.5815
INFO - 2020-01-28 14:39:21 --> Config Class Initialized
INFO - 2020-01-28 14:39:21 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:39:21 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:39:21 --> Utf8 Class Initialized
INFO - 2020-01-28 14:39:21 --> URI Class Initialized
INFO - 2020-01-28 14:39:21 --> Router Class Initialized
INFO - 2020-01-28 14:39:21 --> Output Class Initialized
INFO - 2020-01-28 14:39:21 --> Security Class Initialized
DEBUG - 2020-01-28 14:39:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:39:21 --> Input Class Initialized
INFO - 2020-01-28 14:39:21 --> Language Class Initialized
INFO - 2020-01-28 14:39:21 --> Language Class Initialized
INFO - 2020-01-28 14:39:21 --> Config Class Initialized
INFO - 2020-01-28 14:39:21 --> Loader Class Initialized
INFO - 2020-01-28 14:39:21 --> Helper loaded: url_helper
INFO - 2020-01-28 14:39:21 --> Helper loaded: file_helper
INFO - 2020-01-28 14:39:21 --> Helper loaded: form_helper
INFO - 2020-01-28 14:39:21 --> Helper loaded: my_helper
INFO - 2020-01-28 14:39:21 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:39:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:39:21 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:39:21 --> Controller Class Initialized
INFO - 2020-01-28 14:39:21 --> Final output sent to browser
DEBUG - 2020-01-28 14:39:21 --> Total execution time: 0.5676
INFO - 2020-01-28 14:39:23 --> Config Class Initialized
INFO - 2020-01-28 14:39:23 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:39:23 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:39:23 --> Utf8 Class Initialized
INFO - 2020-01-28 14:39:23 --> URI Class Initialized
INFO - 2020-01-28 14:39:23 --> Router Class Initialized
INFO - 2020-01-28 14:39:23 --> Output Class Initialized
INFO - 2020-01-28 14:39:23 --> Security Class Initialized
DEBUG - 2020-01-28 14:39:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:39:23 --> Input Class Initialized
INFO - 2020-01-28 14:39:23 --> Language Class Initialized
INFO - 2020-01-28 14:39:23 --> Language Class Initialized
INFO - 2020-01-28 14:39:23 --> Config Class Initialized
INFO - 2020-01-28 14:39:23 --> Loader Class Initialized
INFO - 2020-01-28 14:39:23 --> Helper loaded: url_helper
INFO - 2020-01-28 14:39:23 --> Helper loaded: file_helper
INFO - 2020-01-28 14:39:23 --> Helper loaded: form_helper
INFO - 2020-01-28 14:39:23 --> Helper loaded: my_helper
INFO - 2020-01-28 14:39:23 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:39:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:39:23 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:39:23 --> Controller Class Initialized
INFO - 2020-01-28 14:39:23 --> Final output sent to browser
DEBUG - 2020-01-28 14:39:23 --> Total execution time: 0.5392
INFO - 2020-01-28 14:39:28 --> Config Class Initialized
INFO - 2020-01-28 14:39:28 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:39:28 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:39:28 --> Utf8 Class Initialized
INFO - 2020-01-28 14:39:28 --> URI Class Initialized
INFO - 2020-01-28 14:39:28 --> Router Class Initialized
INFO - 2020-01-28 14:39:28 --> Output Class Initialized
INFO - 2020-01-28 14:39:28 --> Security Class Initialized
DEBUG - 2020-01-28 14:39:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:39:28 --> Input Class Initialized
INFO - 2020-01-28 14:39:28 --> Language Class Initialized
INFO - 2020-01-28 14:39:28 --> Language Class Initialized
INFO - 2020-01-28 14:39:28 --> Config Class Initialized
INFO - 2020-01-28 14:39:28 --> Loader Class Initialized
INFO - 2020-01-28 14:39:28 --> Helper loaded: url_helper
INFO - 2020-01-28 14:39:28 --> Helper loaded: file_helper
INFO - 2020-01-28 14:39:28 --> Helper loaded: form_helper
INFO - 2020-01-28 14:39:28 --> Helper loaded: my_helper
INFO - 2020-01-28 14:39:28 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:39:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:39:28 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:39:28 --> Controller Class Initialized
INFO - 2020-01-28 14:39:28 --> Final output sent to browser
DEBUG - 2020-01-28 14:39:28 --> Total execution time: 0.5553
INFO - 2020-01-28 14:39:33 --> Config Class Initialized
INFO - 2020-01-28 14:39:33 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:39:33 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:39:33 --> Utf8 Class Initialized
INFO - 2020-01-28 14:39:33 --> URI Class Initialized
INFO - 2020-01-28 14:39:33 --> Router Class Initialized
INFO - 2020-01-28 14:39:33 --> Output Class Initialized
INFO - 2020-01-28 14:39:33 --> Security Class Initialized
DEBUG - 2020-01-28 14:39:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:39:33 --> Input Class Initialized
INFO - 2020-01-28 14:39:33 --> Language Class Initialized
INFO - 2020-01-28 14:39:33 --> Language Class Initialized
INFO - 2020-01-28 14:39:33 --> Config Class Initialized
INFO - 2020-01-28 14:39:33 --> Loader Class Initialized
INFO - 2020-01-28 14:39:33 --> Helper loaded: url_helper
INFO - 2020-01-28 14:39:33 --> Helper loaded: file_helper
INFO - 2020-01-28 14:39:33 --> Helper loaded: form_helper
INFO - 2020-01-28 14:39:33 --> Helper loaded: my_helper
INFO - 2020-01-28 14:39:33 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:39:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:39:33 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:39:33 --> Controller Class Initialized
INFO - 2020-01-28 14:39:33 --> Final output sent to browser
DEBUG - 2020-01-28 14:39:33 --> Total execution time: 0.5751
INFO - 2020-01-28 14:39:35 --> Config Class Initialized
INFO - 2020-01-28 14:39:35 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:39:35 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:39:35 --> Utf8 Class Initialized
INFO - 2020-01-28 14:39:36 --> URI Class Initialized
INFO - 2020-01-28 14:39:36 --> Router Class Initialized
INFO - 2020-01-28 14:39:36 --> Output Class Initialized
INFO - 2020-01-28 14:39:36 --> Security Class Initialized
DEBUG - 2020-01-28 14:39:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:39:36 --> Input Class Initialized
INFO - 2020-01-28 14:39:36 --> Language Class Initialized
INFO - 2020-01-28 14:39:36 --> Language Class Initialized
INFO - 2020-01-28 14:39:36 --> Config Class Initialized
INFO - 2020-01-28 14:39:36 --> Loader Class Initialized
INFO - 2020-01-28 14:39:36 --> Helper loaded: url_helper
INFO - 2020-01-28 14:39:36 --> Helper loaded: file_helper
INFO - 2020-01-28 14:39:36 --> Helper loaded: form_helper
INFO - 2020-01-28 14:39:36 --> Helper loaded: my_helper
INFO - 2020-01-28 14:39:36 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:39:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:39:36 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:39:36 --> Controller Class Initialized
INFO - 2020-01-28 14:39:36 --> Final output sent to browser
DEBUG - 2020-01-28 14:39:36 --> Total execution time: 0.5724
INFO - 2020-01-28 14:39:44 --> Config Class Initialized
INFO - 2020-01-28 14:39:44 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:39:44 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:39:44 --> Utf8 Class Initialized
INFO - 2020-01-28 14:39:44 --> URI Class Initialized
INFO - 2020-01-28 14:39:44 --> Router Class Initialized
INFO - 2020-01-28 14:39:44 --> Output Class Initialized
INFO - 2020-01-28 14:39:44 --> Security Class Initialized
DEBUG - 2020-01-28 14:39:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:39:44 --> Input Class Initialized
INFO - 2020-01-28 14:39:44 --> Language Class Initialized
INFO - 2020-01-28 14:39:44 --> Language Class Initialized
INFO - 2020-01-28 14:39:44 --> Config Class Initialized
INFO - 2020-01-28 14:39:44 --> Loader Class Initialized
INFO - 2020-01-28 14:39:44 --> Helper loaded: url_helper
INFO - 2020-01-28 14:39:44 --> Helper loaded: file_helper
INFO - 2020-01-28 14:39:44 --> Helper loaded: form_helper
INFO - 2020-01-28 14:39:44 --> Helper loaded: my_helper
INFO - 2020-01-28 14:39:44 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:39:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:39:44 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:39:44 --> Controller Class Initialized
INFO - 2020-01-28 14:39:44 --> Final output sent to browser
DEBUG - 2020-01-28 14:39:44 --> Total execution time: 0.5674
INFO - 2020-01-28 14:39:47 --> Config Class Initialized
INFO - 2020-01-28 14:39:47 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:39:47 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:39:47 --> Utf8 Class Initialized
INFO - 2020-01-28 14:39:47 --> URI Class Initialized
INFO - 2020-01-28 14:39:47 --> Router Class Initialized
INFO - 2020-01-28 14:39:47 --> Output Class Initialized
INFO - 2020-01-28 14:39:47 --> Security Class Initialized
DEBUG - 2020-01-28 14:39:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:39:47 --> Input Class Initialized
INFO - 2020-01-28 14:39:47 --> Language Class Initialized
INFO - 2020-01-28 14:39:47 --> Language Class Initialized
INFO - 2020-01-28 14:39:47 --> Config Class Initialized
INFO - 2020-01-28 14:39:47 --> Loader Class Initialized
INFO - 2020-01-28 14:39:47 --> Helper loaded: url_helper
INFO - 2020-01-28 14:39:47 --> Helper loaded: file_helper
INFO - 2020-01-28 14:39:47 --> Helper loaded: form_helper
INFO - 2020-01-28 14:39:47 --> Helper loaded: my_helper
INFO - 2020-01-28 14:39:47 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:39:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:39:47 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:39:47 --> Controller Class Initialized
DEBUG - 2020-01-28 14:39:47 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_leger/views/cetak.php
INFO - 2020-01-28 14:39:47 --> Final output sent to browser
DEBUG - 2020-01-28 14:39:47 --> Total execution time: 0.6547
INFO - 2020-01-28 14:39:50 --> Config Class Initialized
INFO - 2020-01-28 14:39:50 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:39:50 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:39:50 --> Utf8 Class Initialized
INFO - 2020-01-28 14:39:50 --> URI Class Initialized
INFO - 2020-01-28 14:39:50 --> Router Class Initialized
INFO - 2020-01-28 14:39:50 --> Output Class Initialized
INFO - 2020-01-28 14:39:50 --> Security Class Initialized
DEBUG - 2020-01-28 14:39:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:39:50 --> Input Class Initialized
INFO - 2020-01-28 14:39:50 --> Language Class Initialized
INFO - 2020-01-28 14:39:50 --> Language Class Initialized
INFO - 2020-01-28 14:39:50 --> Config Class Initialized
INFO - 2020-01-28 14:39:50 --> Loader Class Initialized
INFO - 2020-01-28 14:39:50 --> Helper loaded: url_helper
INFO - 2020-01-28 14:39:50 --> Helper loaded: file_helper
INFO - 2020-01-28 14:39:50 --> Helper loaded: form_helper
INFO - 2020-01-28 14:39:50 --> Helper loaded: my_helper
INFO - 2020-01-28 14:39:50 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:39:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:39:50 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:39:50 --> Controller Class Initialized
DEBUG - 2020-01-28 14:39:50 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_leger/views/cetak.php
INFO - 2020-01-28 14:39:50 --> Final output sent to browser
DEBUG - 2020-01-28 14:39:50 --> Total execution time: 0.5886
INFO - 2020-01-28 14:39:56 --> Config Class Initialized
INFO - 2020-01-28 14:39:56 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:39:56 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:39:56 --> Utf8 Class Initialized
INFO - 2020-01-28 14:39:56 --> URI Class Initialized
INFO - 2020-01-28 14:39:56 --> Router Class Initialized
INFO - 2020-01-28 14:39:56 --> Output Class Initialized
INFO - 2020-01-28 14:39:56 --> Security Class Initialized
DEBUG - 2020-01-28 14:39:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:39:56 --> Input Class Initialized
INFO - 2020-01-28 14:39:56 --> Language Class Initialized
INFO - 2020-01-28 14:39:56 --> Language Class Initialized
INFO - 2020-01-28 14:39:56 --> Config Class Initialized
INFO - 2020-01-28 14:39:56 --> Loader Class Initialized
INFO - 2020-01-28 14:39:56 --> Helper loaded: url_helper
INFO - 2020-01-28 14:39:56 --> Helper loaded: file_helper
INFO - 2020-01-28 14:39:56 --> Helper loaded: form_helper
INFO - 2020-01-28 14:39:56 --> Helper loaded: my_helper
INFO - 2020-01-28 14:39:56 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:39:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:39:56 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:39:56 --> Controller Class Initialized
DEBUG - 2020-01-28 14:39:56 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_raport/views/list.php
DEBUG - 2020-01-28 14:39:56 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 14:39:56 --> Final output sent to browser
DEBUG - 2020-01-28 14:39:56 --> Total execution time: 0.6200
INFO - 2020-01-28 14:40:01 --> Config Class Initialized
INFO - 2020-01-28 14:40:01 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:40:01 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:40:01 --> Utf8 Class Initialized
INFO - 2020-01-28 14:40:01 --> URI Class Initialized
INFO - 2020-01-28 14:40:01 --> Router Class Initialized
INFO - 2020-01-28 14:40:01 --> Output Class Initialized
INFO - 2020-01-28 14:40:01 --> Security Class Initialized
DEBUG - 2020-01-28 14:40:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:40:01 --> Input Class Initialized
INFO - 2020-01-28 14:40:01 --> Language Class Initialized
INFO - 2020-01-28 14:40:01 --> Language Class Initialized
INFO - 2020-01-28 14:40:01 --> Config Class Initialized
INFO - 2020-01-28 14:40:01 --> Loader Class Initialized
INFO - 2020-01-28 14:40:01 --> Helper loaded: url_helper
INFO - 2020-01-28 14:40:01 --> Helper loaded: file_helper
INFO - 2020-01-28 14:40:01 --> Helper loaded: form_helper
INFO - 2020-01-28 14:40:01 --> Helper loaded: my_helper
INFO - 2020-01-28 14:40:02 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:40:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:40:02 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:40:02 --> Controller Class Initialized
DEBUG - 2020-01-28 14:40:02 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_leger/views/landing.php
DEBUG - 2020-01-28 14:40:02 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 14:40:02 --> Final output sent to browser
DEBUG - 2020-01-28 14:40:02 --> Total execution time: 0.7358
INFO - 2020-01-28 14:40:03 --> Config Class Initialized
INFO - 2020-01-28 14:40:03 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:40:03 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:40:03 --> Utf8 Class Initialized
INFO - 2020-01-28 14:40:03 --> URI Class Initialized
INFO - 2020-01-28 14:40:03 --> Router Class Initialized
INFO - 2020-01-28 14:40:03 --> Output Class Initialized
INFO - 2020-01-28 14:40:03 --> Security Class Initialized
DEBUG - 2020-01-28 14:40:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:40:03 --> Input Class Initialized
INFO - 2020-01-28 14:40:03 --> Language Class Initialized
INFO - 2020-01-28 14:40:04 --> Language Class Initialized
INFO - 2020-01-28 14:40:04 --> Config Class Initialized
INFO - 2020-01-28 14:40:04 --> Loader Class Initialized
INFO - 2020-01-28 14:40:04 --> Helper loaded: url_helper
INFO - 2020-01-28 14:40:04 --> Helper loaded: file_helper
INFO - 2020-01-28 14:40:04 --> Helper loaded: form_helper
INFO - 2020-01-28 14:40:04 --> Helper loaded: my_helper
INFO - 2020-01-28 14:40:04 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:40:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:40:04 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:40:04 --> Controller Class Initialized
DEBUG - 2020-01-28 14:40:04 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_leger/views/cetak.php
INFO - 2020-01-28 14:40:04 --> Final output sent to browser
DEBUG - 2020-01-28 14:40:04 --> Total execution time: 0.6854
INFO - 2020-01-28 14:41:34 --> Config Class Initialized
INFO - 2020-01-28 14:41:34 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:41:34 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:41:34 --> Utf8 Class Initialized
INFO - 2020-01-28 14:41:34 --> URI Class Initialized
INFO - 2020-01-28 14:41:34 --> Router Class Initialized
INFO - 2020-01-28 14:41:34 --> Output Class Initialized
INFO - 2020-01-28 14:41:34 --> Security Class Initialized
DEBUG - 2020-01-28 14:41:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:41:34 --> Input Class Initialized
INFO - 2020-01-28 14:41:34 --> Language Class Initialized
INFO - 2020-01-28 14:41:34 --> Language Class Initialized
INFO - 2020-01-28 14:41:34 --> Config Class Initialized
INFO - 2020-01-28 14:41:34 --> Loader Class Initialized
INFO - 2020-01-28 14:41:34 --> Helper loaded: url_helper
INFO - 2020-01-28 14:41:34 --> Helper loaded: file_helper
INFO - 2020-01-28 14:41:34 --> Helper loaded: form_helper
INFO - 2020-01-28 14:41:34 --> Helper loaded: my_helper
INFO - 2020-01-28 14:41:35 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:41:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:41:35 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:41:35 --> Controller Class Initialized
DEBUG - 2020-01-28 14:41:35 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/view_mapel/views/v_view_mapel.php
DEBUG - 2020-01-28 14:41:35 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 14:41:35 --> Final output sent to browser
DEBUG - 2020-01-28 14:41:35 --> Total execution time: 0.5813
INFO - 2020-01-28 14:41:36 --> Config Class Initialized
INFO - 2020-01-28 14:41:36 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:41:36 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:41:36 --> Utf8 Class Initialized
INFO - 2020-01-28 14:41:36 --> URI Class Initialized
INFO - 2020-01-28 14:41:36 --> Router Class Initialized
INFO - 2020-01-28 14:41:36 --> Output Class Initialized
INFO - 2020-01-28 14:41:36 --> Security Class Initialized
DEBUG - 2020-01-28 14:41:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:41:36 --> Input Class Initialized
INFO - 2020-01-28 14:41:36 --> Language Class Initialized
INFO - 2020-01-28 14:41:36 --> Language Class Initialized
INFO - 2020-01-28 14:41:36 --> Config Class Initialized
INFO - 2020-01-28 14:41:36 --> Loader Class Initialized
INFO - 2020-01-28 14:41:36 --> Helper loaded: url_helper
INFO - 2020-01-28 14:41:36 --> Helper loaded: file_helper
INFO - 2020-01-28 14:41:36 --> Helper loaded: form_helper
INFO - 2020-01-28 14:41:36 --> Helper loaded: my_helper
INFO - 2020-01-28 14:41:37 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:41:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:41:37 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:41:37 --> Controller Class Initialized
DEBUG - 2020-01-28 14:41:37 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_pengetahuan/views/list.php
DEBUG - 2020-01-28 14:41:37 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 14:41:37 --> Final output sent to browser
DEBUG - 2020-01-28 14:41:37 --> Total execution time: 0.8248
INFO - 2020-01-28 14:41:37 --> Config Class Initialized
INFO - 2020-01-28 14:41:37 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:41:37 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:41:37 --> Utf8 Class Initialized
INFO - 2020-01-28 14:41:37 --> URI Class Initialized
INFO - 2020-01-28 14:41:37 --> Router Class Initialized
INFO - 2020-01-28 14:41:37 --> Output Class Initialized
INFO - 2020-01-28 14:41:37 --> Security Class Initialized
DEBUG - 2020-01-28 14:41:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:41:37 --> Input Class Initialized
INFO - 2020-01-28 14:41:37 --> Language Class Initialized
INFO - 2020-01-28 14:41:37 --> Language Class Initialized
INFO - 2020-01-28 14:41:37 --> Config Class Initialized
INFO - 2020-01-28 14:41:38 --> Loader Class Initialized
INFO - 2020-01-28 14:41:38 --> Helper loaded: url_helper
INFO - 2020-01-28 14:41:38 --> Helper loaded: file_helper
INFO - 2020-01-28 14:41:38 --> Helper loaded: form_helper
INFO - 2020-01-28 14:41:38 --> Helper loaded: my_helper
INFO - 2020-01-28 14:41:38 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:41:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:41:38 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:41:38 --> Controller Class Initialized
INFO - 2020-01-28 14:41:39 --> Config Class Initialized
INFO - 2020-01-28 14:41:39 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:41:39 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:41:39 --> Utf8 Class Initialized
INFO - 2020-01-28 14:41:39 --> URI Class Initialized
INFO - 2020-01-28 14:41:39 --> Router Class Initialized
INFO - 2020-01-28 14:41:39 --> Output Class Initialized
INFO - 2020-01-28 14:41:39 --> Security Class Initialized
DEBUG - 2020-01-28 14:41:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:41:39 --> Input Class Initialized
INFO - 2020-01-28 14:41:39 --> Language Class Initialized
INFO - 2020-01-28 14:41:39 --> Language Class Initialized
INFO - 2020-01-28 14:41:39 --> Config Class Initialized
INFO - 2020-01-28 14:41:39 --> Loader Class Initialized
INFO - 2020-01-28 14:41:39 --> Helper loaded: url_helper
INFO - 2020-01-28 14:41:39 --> Helper loaded: file_helper
INFO - 2020-01-28 14:41:39 --> Helper loaded: form_helper
INFO - 2020-01-28 14:41:39 --> Helper loaded: my_helper
INFO - 2020-01-28 14:41:39 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:41:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:41:39 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:41:39 --> Controller Class Initialized
INFO - 2020-01-28 14:41:39 --> Final output sent to browser
DEBUG - 2020-01-28 14:41:39 --> Total execution time: 0.5381
INFO - 2020-01-28 14:41:43 --> Config Class Initialized
INFO - 2020-01-28 14:41:43 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:41:43 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:41:43 --> Utf8 Class Initialized
INFO - 2020-01-28 14:41:43 --> URI Class Initialized
INFO - 2020-01-28 14:41:43 --> Router Class Initialized
INFO - 2020-01-28 14:41:43 --> Output Class Initialized
INFO - 2020-01-28 14:41:43 --> Security Class Initialized
DEBUG - 2020-01-28 14:41:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:41:43 --> Input Class Initialized
INFO - 2020-01-28 14:41:44 --> Language Class Initialized
INFO - 2020-01-28 14:41:44 --> Language Class Initialized
INFO - 2020-01-28 14:41:44 --> Config Class Initialized
INFO - 2020-01-28 14:41:44 --> Loader Class Initialized
INFO - 2020-01-28 14:41:44 --> Helper loaded: url_helper
INFO - 2020-01-28 14:41:44 --> Helper loaded: file_helper
INFO - 2020-01-28 14:41:44 --> Helper loaded: form_helper
INFO - 2020-01-28 14:41:44 --> Helper loaded: my_helper
INFO - 2020-01-28 14:41:44 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:41:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:41:44 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:41:44 --> Controller Class Initialized
INFO - 2020-01-28 14:41:44 --> Final output sent to browser
DEBUG - 2020-01-28 14:41:44 --> Total execution time: 0.6036
INFO - 2020-01-28 14:41:45 --> Config Class Initialized
INFO - 2020-01-28 14:41:45 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:41:45 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:41:45 --> Utf8 Class Initialized
INFO - 2020-01-28 14:41:45 --> URI Class Initialized
INFO - 2020-01-28 14:41:45 --> Router Class Initialized
INFO - 2020-01-28 14:41:45 --> Output Class Initialized
INFO - 2020-01-28 14:41:45 --> Security Class Initialized
DEBUG - 2020-01-28 14:41:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:41:45 --> Input Class Initialized
INFO - 2020-01-28 14:41:45 --> Language Class Initialized
INFO - 2020-01-28 14:41:45 --> Language Class Initialized
INFO - 2020-01-28 14:41:45 --> Config Class Initialized
INFO - 2020-01-28 14:41:45 --> Loader Class Initialized
INFO - 2020-01-28 14:41:45 --> Helper loaded: url_helper
INFO - 2020-01-28 14:41:45 --> Helper loaded: file_helper
INFO - 2020-01-28 14:41:45 --> Helper loaded: form_helper
INFO - 2020-01-28 14:41:45 --> Helper loaded: my_helper
INFO - 2020-01-28 14:41:45 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:41:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:41:45 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:41:46 --> Controller Class Initialized
INFO - 2020-01-28 14:41:46 --> Final output sent to browser
DEBUG - 2020-01-28 14:41:46 --> Total execution time: 0.5453
INFO - 2020-01-28 14:41:47 --> Config Class Initialized
INFO - 2020-01-28 14:41:47 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:41:47 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:41:47 --> Utf8 Class Initialized
INFO - 2020-01-28 14:41:47 --> URI Class Initialized
INFO - 2020-01-28 14:41:47 --> Router Class Initialized
INFO - 2020-01-28 14:41:47 --> Output Class Initialized
INFO - 2020-01-28 14:41:47 --> Security Class Initialized
DEBUG - 2020-01-28 14:41:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:41:47 --> Input Class Initialized
INFO - 2020-01-28 14:41:47 --> Language Class Initialized
INFO - 2020-01-28 14:41:47 --> Language Class Initialized
INFO - 2020-01-28 14:41:47 --> Config Class Initialized
INFO - 2020-01-28 14:41:47 --> Loader Class Initialized
INFO - 2020-01-28 14:41:47 --> Helper loaded: url_helper
INFO - 2020-01-28 14:41:47 --> Helper loaded: file_helper
INFO - 2020-01-28 14:41:47 --> Helper loaded: form_helper
INFO - 2020-01-28 14:41:47 --> Helper loaded: my_helper
INFO - 2020-01-28 14:41:47 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:41:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:41:47 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:41:47 --> Controller Class Initialized
INFO - 2020-01-28 14:41:47 --> Final output sent to browser
DEBUG - 2020-01-28 14:41:47 --> Total execution time: 0.5803
INFO - 2020-01-28 14:41:52 --> Config Class Initialized
INFO - 2020-01-28 14:41:52 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:41:52 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:41:52 --> Utf8 Class Initialized
INFO - 2020-01-28 14:41:52 --> URI Class Initialized
INFO - 2020-01-28 14:41:52 --> Router Class Initialized
INFO - 2020-01-28 14:41:52 --> Output Class Initialized
INFO - 2020-01-28 14:41:52 --> Security Class Initialized
DEBUG - 2020-01-28 14:41:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:41:53 --> Input Class Initialized
INFO - 2020-01-28 14:41:53 --> Language Class Initialized
INFO - 2020-01-28 14:41:53 --> Language Class Initialized
INFO - 2020-01-28 14:41:53 --> Config Class Initialized
INFO - 2020-01-28 14:41:53 --> Loader Class Initialized
INFO - 2020-01-28 14:41:53 --> Helper loaded: url_helper
INFO - 2020-01-28 14:41:53 --> Helper loaded: file_helper
INFO - 2020-01-28 14:41:53 --> Helper loaded: form_helper
INFO - 2020-01-28 14:41:53 --> Helper loaded: my_helper
INFO - 2020-01-28 14:41:53 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:41:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:41:53 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:41:53 --> Controller Class Initialized
INFO - 2020-01-28 14:41:53 --> Final output sent to browser
DEBUG - 2020-01-28 14:41:53 --> Total execution time: 0.5566
INFO - 2020-01-28 14:41:55 --> Config Class Initialized
INFO - 2020-01-28 14:41:55 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:41:55 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:41:55 --> Utf8 Class Initialized
INFO - 2020-01-28 14:41:55 --> URI Class Initialized
INFO - 2020-01-28 14:41:55 --> Router Class Initialized
INFO - 2020-01-28 14:41:55 --> Output Class Initialized
INFO - 2020-01-28 14:41:55 --> Security Class Initialized
DEBUG - 2020-01-28 14:41:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:41:55 --> Input Class Initialized
INFO - 2020-01-28 14:41:55 --> Language Class Initialized
INFO - 2020-01-28 14:41:55 --> Language Class Initialized
INFO - 2020-01-28 14:41:55 --> Config Class Initialized
INFO - 2020-01-28 14:41:55 --> Loader Class Initialized
INFO - 2020-01-28 14:41:55 --> Helper loaded: url_helper
INFO - 2020-01-28 14:41:55 --> Helper loaded: file_helper
INFO - 2020-01-28 14:41:55 --> Helper loaded: form_helper
INFO - 2020-01-28 14:41:55 --> Helper loaded: my_helper
INFO - 2020-01-28 14:41:55 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:41:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:41:55 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:41:55 --> Controller Class Initialized
INFO - 2020-01-28 14:41:55 --> Final output sent to browser
DEBUG - 2020-01-28 14:41:55 --> Total execution time: 0.5601
INFO - 2020-01-28 14:41:59 --> Config Class Initialized
INFO - 2020-01-28 14:41:59 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:41:59 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:41:59 --> Utf8 Class Initialized
INFO - 2020-01-28 14:41:59 --> URI Class Initialized
INFO - 2020-01-28 14:41:59 --> Router Class Initialized
INFO - 2020-01-28 14:41:59 --> Output Class Initialized
INFO - 2020-01-28 14:41:59 --> Security Class Initialized
DEBUG - 2020-01-28 14:41:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:41:59 --> Input Class Initialized
INFO - 2020-01-28 14:41:59 --> Language Class Initialized
INFO - 2020-01-28 14:41:59 --> Language Class Initialized
INFO - 2020-01-28 14:41:59 --> Config Class Initialized
INFO - 2020-01-28 14:42:00 --> Loader Class Initialized
INFO - 2020-01-28 14:42:00 --> Helper loaded: url_helper
INFO - 2020-01-28 14:42:00 --> Helper loaded: file_helper
INFO - 2020-01-28 14:42:00 --> Helper loaded: form_helper
INFO - 2020-01-28 14:42:00 --> Helper loaded: my_helper
INFO - 2020-01-28 14:42:00 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:42:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:42:00 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:42:00 --> Controller Class Initialized
INFO - 2020-01-28 14:42:00 --> Final output sent to browser
DEBUG - 2020-01-28 14:42:00 --> Total execution time: 0.5722
INFO - 2020-01-28 14:42:04 --> Config Class Initialized
INFO - 2020-01-28 14:42:04 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:42:04 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:42:04 --> Utf8 Class Initialized
INFO - 2020-01-28 14:42:04 --> URI Class Initialized
INFO - 2020-01-28 14:42:04 --> Router Class Initialized
INFO - 2020-01-28 14:42:04 --> Output Class Initialized
INFO - 2020-01-28 14:42:04 --> Security Class Initialized
DEBUG - 2020-01-28 14:42:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:42:04 --> Input Class Initialized
INFO - 2020-01-28 14:42:04 --> Language Class Initialized
INFO - 2020-01-28 14:42:04 --> Language Class Initialized
INFO - 2020-01-28 14:42:04 --> Config Class Initialized
INFO - 2020-01-28 14:42:04 --> Loader Class Initialized
INFO - 2020-01-28 14:42:04 --> Helper loaded: url_helper
INFO - 2020-01-28 14:42:04 --> Helper loaded: file_helper
INFO - 2020-01-28 14:42:04 --> Helper loaded: form_helper
INFO - 2020-01-28 14:42:04 --> Helper loaded: my_helper
INFO - 2020-01-28 14:42:04 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:42:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:42:04 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:42:04 --> Controller Class Initialized
INFO - 2020-01-28 14:42:04 --> Final output sent to browser
DEBUG - 2020-01-28 14:42:04 --> Total execution time: 0.5924
INFO - 2020-01-28 14:42:05 --> Config Class Initialized
INFO - 2020-01-28 14:42:05 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:42:05 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:42:05 --> Utf8 Class Initialized
INFO - 2020-01-28 14:42:05 --> URI Class Initialized
INFO - 2020-01-28 14:42:05 --> Router Class Initialized
INFO - 2020-01-28 14:42:05 --> Output Class Initialized
INFO - 2020-01-28 14:42:05 --> Security Class Initialized
DEBUG - 2020-01-28 14:42:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:42:05 --> Input Class Initialized
INFO - 2020-01-28 14:42:05 --> Language Class Initialized
INFO - 2020-01-28 14:42:06 --> Language Class Initialized
INFO - 2020-01-28 14:42:06 --> Config Class Initialized
INFO - 2020-01-28 14:42:06 --> Loader Class Initialized
INFO - 2020-01-28 14:42:06 --> Helper loaded: url_helper
INFO - 2020-01-28 14:42:06 --> Helper loaded: file_helper
INFO - 2020-01-28 14:42:06 --> Helper loaded: form_helper
INFO - 2020-01-28 14:42:06 --> Helper loaded: my_helper
INFO - 2020-01-28 14:42:06 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:42:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:42:06 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:42:06 --> Controller Class Initialized
INFO - 2020-01-28 14:42:06 --> Final output sent to browser
DEBUG - 2020-01-28 14:42:06 --> Total execution time: 0.5468
INFO - 2020-01-28 14:42:10 --> Config Class Initialized
INFO - 2020-01-28 14:42:10 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:42:11 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:42:11 --> Utf8 Class Initialized
INFO - 2020-01-28 14:42:11 --> URI Class Initialized
INFO - 2020-01-28 14:42:11 --> Router Class Initialized
INFO - 2020-01-28 14:42:11 --> Output Class Initialized
INFO - 2020-01-28 14:42:11 --> Security Class Initialized
DEBUG - 2020-01-28 14:42:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:42:11 --> Input Class Initialized
INFO - 2020-01-28 14:42:11 --> Language Class Initialized
INFO - 2020-01-28 14:42:11 --> Language Class Initialized
INFO - 2020-01-28 14:42:11 --> Config Class Initialized
INFO - 2020-01-28 14:42:11 --> Loader Class Initialized
INFO - 2020-01-28 14:42:11 --> Helper loaded: url_helper
INFO - 2020-01-28 14:42:11 --> Helper loaded: file_helper
INFO - 2020-01-28 14:42:11 --> Helper loaded: form_helper
INFO - 2020-01-28 14:42:11 --> Helper loaded: my_helper
INFO - 2020-01-28 14:42:11 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:42:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:42:11 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:42:11 --> Controller Class Initialized
INFO - 2020-01-28 14:42:11 --> Final output sent to browser
DEBUG - 2020-01-28 14:42:11 --> Total execution time: 0.5889
INFO - 2020-01-28 14:42:13 --> Config Class Initialized
INFO - 2020-01-28 14:42:13 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:42:13 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:42:13 --> Utf8 Class Initialized
INFO - 2020-01-28 14:42:13 --> URI Class Initialized
INFO - 2020-01-28 14:42:13 --> Router Class Initialized
INFO - 2020-01-28 14:42:13 --> Output Class Initialized
INFO - 2020-01-28 14:42:13 --> Security Class Initialized
DEBUG - 2020-01-28 14:42:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:42:13 --> Input Class Initialized
INFO - 2020-01-28 14:42:13 --> Language Class Initialized
INFO - 2020-01-28 14:42:13 --> Language Class Initialized
INFO - 2020-01-28 14:42:13 --> Config Class Initialized
INFO - 2020-01-28 14:42:13 --> Loader Class Initialized
INFO - 2020-01-28 14:42:13 --> Helper loaded: url_helper
INFO - 2020-01-28 14:42:13 --> Helper loaded: file_helper
INFO - 2020-01-28 14:42:13 --> Helper loaded: form_helper
INFO - 2020-01-28 14:42:13 --> Helper loaded: my_helper
INFO - 2020-01-28 14:42:13 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:42:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:42:14 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:42:14 --> Controller Class Initialized
DEBUG - 2020-01-28 14:42:14 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_leger/views/cetak.php
INFO - 2020-01-28 14:42:14 --> Final output sent to browser
DEBUG - 2020-01-28 14:42:14 --> Total execution time: 0.6027
INFO - 2020-01-28 14:42:21 --> Config Class Initialized
INFO - 2020-01-28 14:42:21 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:42:21 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:42:21 --> Utf8 Class Initialized
INFO - 2020-01-28 14:42:21 --> URI Class Initialized
INFO - 2020-01-28 14:42:21 --> Router Class Initialized
INFO - 2020-01-28 14:42:21 --> Output Class Initialized
INFO - 2020-01-28 14:42:21 --> Security Class Initialized
DEBUG - 2020-01-28 14:42:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:42:21 --> Input Class Initialized
INFO - 2020-01-28 14:42:21 --> Language Class Initialized
INFO - 2020-01-28 14:42:21 --> Language Class Initialized
INFO - 2020-01-28 14:42:21 --> Config Class Initialized
INFO - 2020-01-28 14:42:21 --> Loader Class Initialized
INFO - 2020-01-28 14:42:21 --> Helper loaded: url_helper
INFO - 2020-01-28 14:42:21 --> Helper loaded: file_helper
INFO - 2020-01-28 14:42:21 --> Helper loaded: form_helper
INFO - 2020-01-28 14:42:21 --> Helper loaded: my_helper
INFO - 2020-01-28 14:42:21 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:42:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:42:21 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:42:21 --> Controller Class Initialized
DEBUG - 2020-01-28 14:42:21 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/view_mapel/views/v_view_mapel.php
DEBUG - 2020-01-28 14:42:21 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 14:42:21 --> Final output sent to browser
DEBUG - 2020-01-28 14:42:21 --> Total execution time: 0.6025
INFO - 2020-01-28 14:42:23 --> Config Class Initialized
INFO - 2020-01-28 14:42:23 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:42:23 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:42:23 --> Utf8 Class Initialized
INFO - 2020-01-28 14:42:23 --> URI Class Initialized
INFO - 2020-01-28 14:42:23 --> Router Class Initialized
INFO - 2020-01-28 14:42:23 --> Output Class Initialized
INFO - 2020-01-28 14:42:23 --> Security Class Initialized
DEBUG - 2020-01-28 14:42:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:42:23 --> Input Class Initialized
INFO - 2020-01-28 14:42:23 --> Language Class Initialized
INFO - 2020-01-28 14:42:23 --> Language Class Initialized
INFO - 2020-01-28 14:42:23 --> Config Class Initialized
INFO - 2020-01-28 14:42:23 --> Loader Class Initialized
INFO - 2020-01-28 14:42:23 --> Helper loaded: url_helper
INFO - 2020-01-28 14:42:23 --> Helper loaded: file_helper
INFO - 2020-01-28 14:42:23 --> Helper loaded: form_helper
INFO - 2020-01-28 14:42:23 --> Helper loaded: my_helper
INFO - 2020-01-28 14:42:23 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:42:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:42:24 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:42:24 --> Controller Class Initialized
DEBUG - 2020-01-28 14:42:24 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/n_keterampilan/views/list.php
DEBUG - 2020-01-28 14:42:24 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\views\template_utama.php
INFO - 2020-01-28 14:42:24 --> Final output sent to browser
DEBUG - 2020-01-28 14:42:24 --> Total execution time: 0.6980
INFO - 2020-01-28 14:42:25 --> Config Class Initialized
INFO - 2020-01-28 14:42:25 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:42:25 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:42:25 --> Utf8 Class Initialized
INFO - 2020-01-28 14:42:25 --> URI Class Initialized
INFO - 2020-01-28 14:42:25 --> Router Class Initialized
INFO - 2020-01-28 14:42:25 --> Output Class Initialized
INFO - 2020-01-28 14:42:25 --> Security Class Initialized
DEBUG - 2020-01-28 14:42:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:42:25 --> Input Class Initialized
INFO - 2020-01-28 14:42:25 --> Language Class Initialized
INFO - 2020-01-28 14:42:25 --> Language Class Initialized
INFO - 2020-01-28 14:42:25 --> Config Class Initialized
INFO - 2020-01-28 14:42:25 --> Loader Class Initialized
INFO - 2020-01-28 14:42:25 --> Helper loaded: url_helper
INFO - 2020-01-28 14:42:25 --> Helper loaded: file_helper
INFO - 2020-01-28 14:42:26 --> Helper loaded: form_helper
INFO - 2020-01-28 14:42:26 --> Helper loaded: my_helper
INFO - 2020-01-28 14:42:26 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:42:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:42:26 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:42:26 --> Controller Class Initialized
INFO - 2020-01-28 14:42:26 --> Final output sent to browser
DEBUG - 2020-01-28 14:42:26 --> Total execution time: 0.5310
INFO - 2020-01-28 14:42:30 --> Config Class Initialized
INFO - 2020-01-28 14:42:30 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:42:30 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:42:30 --> Utf8 Class Initialized
INFO - 2020-01-28 14:42:30 --> URI Class Initialized
INFO - 2020-01-28 14:42:30 --> Router Class Initialized
INFO - 2020-01-28 14:42:30 --> Output Class Initialized
INFO - 2020-01-28 14:42:30 --> Security Class Initialized
DEBUG - 2020-01-28 14:42:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:42:30 --> Input Class Initialized
INFO - 2020-01-28 14:42:30 --> Language Class Initialized
INFO - 2020-01-28 14:42:30 --> Language Class Initialized
INFO - 2020-01-28 14:42:30 --> Config Class Initialized
INFO - 2020-01-28 14:42:30 --> Loader Class Initialized
INFO - 2020-01-28 14:42:30 --> Helper loaded: url_helper
INFO - 2020-01-28 14:42:30 --> Helper loaded: file_helper
INFO - 2020-01-28 14:42:30 --> Helper loaded: form_helper
INFO - 2020-01-28 14:42:30 --> Helper loaded: my_helper
INFO - 2020-01-28 14:42:30 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:42:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:42:30 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:42:30 --> Controller Class Initialized
INFO - 2020-01-28 14:42:31 --> Final output sent to browser
DEBUG - 2020-01-28 14:42:31 --> Total execution time: 0.5950
INFO - 2020-01-28 14:42:33 --> Config Class Initialized
INFO - 2020-01-28 14:42:33 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:42:33 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:42:33 --> Utf8 Class Initialized
INFO - 2020-01-28 14:42:33 --> URI Class Initialized
INFO - 2020-01-28 14:42:33 --> Router Class Initialized
INFO - 2020-01-28 14:42:33 --> Output Class Initialized
INFO - 2020-01-28 14:42:33 --> Security Class Initialized
DEBUG - 2020-01-28 14:42:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:42:33 --> Input Class Initialized
INFO - 2020-01-28 14:42:33 --> Language Class Initialized
INFO - 2020-01-28 14:42:33 --> Language Class Initialized
INFO - 2020-01-28 14:42:33 --> Config Class Initialized
INFO - 2020-01-28 14:42:33 --> Loader Class Initialized
INFO - 2020-01-28 14:42:33 --> Helper loaded: url_helper
INFO - 2020-01-28 14:42:33 --> Helper loaded: file_helper
INFO - 2020-01-28 14:42:33 --> Helper loaded: form_helper
INFO - 2020-01-28 14:42:33 --> Helper loaded: my_helper
INFO - 2020-01-28 14:42:33 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:42:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:42:33 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:42:33 --> Controller Class Initialized
DEBUG - 2020-01-28 14:42:33 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_leger/views/cetak.php
INFO - 2020-01-28 14:42:33 --> Final output sent to browser
DEBUG - 2020-01-28 14:42:33 --> Total execution time: 0.6007
INFO - 2020-01-28 14:50:49 --> Config Class Initialized
INFO - 2020-01-28 14:50:49 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:50:49 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:50:49 --> Utf8 Class Initialized
INFO - 2020-01-28 14:50:49 --> URI Class Initialized
INFO - 2020-01-28 14:50:50 --> Router Class Initialized
INFO - 2020-01-28 14:50:50 --> Output Class Initialized
INFO - 2020-01-28 14:50:50 --> Security Class Initialized
DEBUG - 2020-01-28 14:50:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:50:50 --> Input Class Initialized
INFO - 2020-01-28 14:50:50 --> Language Class Initialized
INFO - 2020-01-28 14:50:50 --> Language Class Initialized
INFO - 2020-01-28 14:50:50 --> Config Class Initialized
INFO - 2020-01-28 14:50:50 --> Loader Class Initialized
INFO - 2020-01-28 14:50:50 --> Helper loaded: url_helper
INFO - 2020-01-28 14:50:50 --> Helper loaded: file_helper
INFO - 2020-01-28 14:50:50 --> Helper loaded: form_helper
INFO - 2020-01-28 14:50:50 --> Helper loaded: my_helper
INFO - 2020-01-28 14:50:50 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:50:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:50:50 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:50:50 --> Controller Class Initialized
DEBUG - 2020-01-28 14:50:50 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_leger/views/cetak.php
INFO - 2020-01-28 14:50:50 --> Final output sent to browser
DEBUG - 2020-01-28 14:50:50 --> Total execution time: 0.6007
INFO - 2020-01-28 14:51:28 --> Config Class Initialized
INFO - 2020-01-28 14:51:28 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:51:28 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:51:28 --> Utf8 Class Initialized
INFO - 2020-01-28 14:51:28 --> URI Class Initialized
INFO - 2020-01-28 14:51:28 --> Router Class Initialized
INFO - 2020-01-28 14:51:28 --> Output Class Initialized
INFO - 2020-01-28 14:51:28 --> Security Class Initialized
DEBUG - 2020-01-28 14:51:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:51:28 --> Input Class Initialized
INFO - 2020-01-28 14:51:28 --> Language Class Initialized
INFO - 2020-01-28 14:51:28 --> Language Class Initialized
INFO - 2020-01-28 14:51:28 --> Config Class Initialized
INFO - 2020-01-28 14:51:28 --> Loader Class Initialized
INFO - 2020-01-28 14:51:28 --> Helper loaded: url_helper
INFO - 2020-01-28 14:51:28 --> Helper loaded: file_helper
INFO - 2020-01-28 14:51:28 --> Helper loaded: form_helper
INFO - 2020-01-28 14:51:28 --> Helper loaded: my_helper
INFO - 2020-01-28 14:51:28 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:51:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:51:28 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:51:28 --> Controller Class Initialized
DEBUG - 2020-01-28 14:51:28 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_leger/views/cetak.php
INFO - 2020-01-28 14:51:28 --> Final output sent to browser
DEBUG - 2020-01-28 14:51:28 --> Total execution time: 0.5901
INFO - 2020-01-28 14:51:42 --> Config Class Initialized
INFO - 2020-01-28 14:51:42 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:51:42 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:51:42 --> Utf8 Class Initialized
INFO - 2020-01-28 14:51:42 --> URI Class Initialized
INFO - 2020-01-28 14:51:42 --> Router Class Initialized
INFO - 2020-01-28 14:51:42 --> Output Class Initialized
INFO - 2020-01-28 14:51:42 --> Security Class Initialized
DEBUG - 2020-01-28 14:51:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:51:42 --> Input Class Initialized
INFO - 2020-01-28 14:51:42 --> Language Class Initialized
INFO - 2020-01-28 14:51:42 --> Language Class Initialized
INFO - 2020-01-28 14:51:42 --> Config Class Initialized
INFO - 2020-01-28 14:51:42 --> Loader Class Initialized
INFO - 2020-01-28 14:51:42 --> Helper loaded: url_helper
INFO - 2020-01-28 14:51:42 --> Helper loaded: file_helper
INFO - 2020-01-28 14:51:42 --> Helper loaded: form_helper
INFO - 2020-01-28 14:51:42 --> Helper loaded: my_helper
INFO - 2020-01-28 14:51:42 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:51:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:51:42 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:51:42 --> Controller Class Initialized
DEBUG - 2020-01-28 14:51:42 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_leger/views/cetak.php
INFO - 2020-01-28 14:51:42 --> Final output sent to browser
DEBUG - 2020-01-28 14:51:42 --> Total execution time: 0.5971
INFO - 2020-01-28 14:52:44 --> Config Class Initialized
INFO - 2020-01-28 14:52:44 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:52:44 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:52:44 --> Utf8 Class Initialized
INFO - 2020-01-28 14:52:44 --> URI Class Initialized
INFO - 2020-01-28 14:52:44 --> Router Class Initialized
INFO - 2020-01-28 14:52:44 --> Output Class Initialized
INFO - 2020-01-28 14:52:44 --> Security Class Initialized
DEBUG - 2020-01-28 14:52:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:52:44 --> Input Class Initialized
INFO - 2020-01-28 14:52:44 --> Language Class Initialized
INFO - 2020-01-28 14:52:44 --> Language Class Initialized
INFO - 2020-01-28 14:52:44 --> Config Class Initialized
INFO - 2020-01-28 14:52:44 --> Loader Class Initialized
INFO - 2020-01-28 14:52:44 --> Helper loaded: url_helper
INFO - 2020-01-28 14:52:44 --> Helper loaded: file_helper
INFO - 2020-01-28 14:52:44 --> Helper loaded: form_helper
INFO - 2020-01-28 14:52:44 --> Helper loaded: my_helper
INFO - 2020-01-28 14:52:44 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:52:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:52:44 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:52:44 --> Controller Class Initialized
DEBUG - 2020-01-28 14:52:44 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_leger/views/cetak.php
INFO - 2020-01-28 14:52:44 --> Final output sent to browser
DEBUG - 2020-01-28 14:52:44 --> Total execution time: 0.6029
INFO - 2020-01-28 14:53:06 --> Config Class Initialized
INFO - 2020-01-28 14:53:06 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:53:06 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:53:06 --> Utf8 Class Initialized
INFO - 2020-01-28 14:53:06 --> URI Class Initialized
INFO - 2020-01-28 14:53:06 --> Router Class Initialized
INFO - 2020-01-28 14:53:06 --> Output Class Initialized
INFO - 2020-01-28 14:53:06 --> Security Class Initialized
DEBUG - 2020-01-28 14:53:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:53:06 --> Input Class Initialized
INFO - 2020-01-28 14:53:06 --> Language Class Initialized
INFO - 2020-01-28 14:53:06 --> Language Class Initialized
INFO - 2020-01-28 14:53:07 --> Config Class Initialized
INFO - 2020-01-28 14:53:07 --> Loader Class Initialized
INFO - 2020-01-28 14:53:07 --> Helper loaded: url_helper
INFO - 2020-01-28 14:53:07 --> Helper loaded: file_helper
INFO - 2020-01-28 14:53:07 --> Helper loaded: form_helper
INFO - 2020-01-28 14:53:07 --> Helper loaded: my_helper
INFO - 2020-01-28 14:53:07 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:53:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:53:07 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:53:07 --> Controller Class Initialized
DEBUG - 2020-01-28 14:53:07 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_leger/views/cetak.php
INFO - 2020-01-28 14:53:07 --> Final output sent to browser
DEBUG - 2020-01-28 14:53:07 --> Total execution time: 0.7139
INFO - 2020-01-28 14:54:58 --> Config Class Initialized
INFO - 2020-01-28 14:54:58 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:54:59 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:54:59 --> Utf8 Class Initialized
INFO - 2020-01-28 14:54:59 --> URI Class Initialized
INFO - 2020-01-28 14:54:59 --> Router Class Initialized
INFO - 2020-01-28 14:54:59 --> Output Class Initialized
INFO - 2020-01-28 14:54:59 --> Security Class Initialized
DEBUG - 2020-01-28 14:54:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:54:59 --> Input Class Initialized
INFO - 2020-01-28 14:54:59 --> Language Class Initialized
INFO - 2020-01-28 14:54:59 --> Language Class Initialized
INFO - 2020-01-28 14:54:59 --> Config Class Initialized
INFO - 2020-01-28 14:54:59 --> Loader Class Initialized
INFO - 2020-01-28 14:54:59 --> Helper loaded: url_helper
INFO - 2020-01-28 14:54:59 --> Helper loaded: file_helper
INFO - 2020-01-28 14:54:59 --> Helper loaded: form_helper
INFO - 2020-01-28 14:54:59 --> Helper loaded: my_helper
INFO - 2020-01-28 14:54:59 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:54:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:54:59 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:54:59 --> Controller Class Initialized
DEBUG - 2020-01-28 14:54:59 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_leger/views/cetak.php
INFO - 2020-01-28 14:54:59 --> Final output sent to browser
DEBUG - 2020-01-28 14:54:59 --> Total execution time: 0.6116
INFO - 2020-01-28 14:56:45 --> Config Class Initialized
INFO - 2020-01-28 14:56:45 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:56:45 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:56:45 --> Utf8 Class Initialized
INFO - 2020-01-28 14:56:45 --> URI Class Initialized
INFO - 2020-01-28 14:56:45 --> Router Class Initialized
INFO - 2020-01-28 14:56:45 --> Output Class Initialized
INFO - 2020-01-28 14:56:45 --> Security Class Initialized
DEBUG - 2020-01-28 14:56:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:56:45 --> Input Class Initialized
INFO - 2020-01-28 14:56:45 --> Language Class Initialized
INFO - 2020-01-28 14:56:45 --> Language Class Initialized
INFO - 2020-01-28 14:56:45 --> Config Class Initialized
INFO - 2020-01-28 14:56:45 --> Loader Class Initialized
INFO - 2020-01-28 14:56:45 --> Helper loaded: url_helper
INFO - 2020-01-28 14:56:45 --> Helper loaded: file_helper
INFO - 2020-01-28 14:56:45 --> Helper loaded: form_helper
INFO - 2020-01-28 14:56:45 --> Helper loaded: my_helper
INFO - 2020-01-28 14:56:45 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:56:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:56:45 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:56:45 --> Controller Class Initialized
DEBUG - 2020-01-28 14:56:45 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_leger/views/cetak.php
INFO - 2020-01-28 14:56:45 --> Final output sent to browser
DEBUG - 2020-01-28 14:56:45 --> Total execution time: 0.6309
INFO - 2020-01-28 14:56:51 --> Config Class Initialized
INFO - 2020-01-28 14:56:51 --> Hooks Class Initialized
DEBUG - 2020-01-28 14:56:51 --> UTF-8 Support Enabled
INFO - 2020-01-28 14:56:51 --> Utf8 Class Initialized
INFO - 2020-01-28 14:56:51 --> URI Class Initialized
INFO - 2020-01-28 14:56:51 --> Router Class Initialized
INFO - 2020-01-28 14:56:51 --> Output Class Initialized
INFO - 2020-01-28 14:56:51 --> Security Class Initialized
DEBUG - 2020-01-28 14:56:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 14:56:51 --> Input Class Initialized
INFO - 2020-01-28 14:56:51 --> Language Class Initialized
INFO - 2020-01-28 14:56:51 --> Language Class Initialized
INFO - 2020-01-28 14:56:51 --> Config Class Initialized
INFO - 2020-01-28 14:56:51 --> Loader Class Initialized
INFO - 2020-01-28 14:56:51 --> Helper loaded: url_helper
INFO - 2020-01-28 14:56:51 --> Helper loaded: file_helper
INFO - 2020-01-28 14:56:51 --> Helper loaded: form_helper
INFO - 2020-01-28 14:56:51 --> Helper loaded: my_helper
INFO - 2020-01-28 14:56:51 --> Database Driver Class Initialized
DEBUG - 2020-01-28 14:56:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 14:56:51 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 14:56:51 --> Controller Class Initialized
DEBUG - 2020-01-28 14:56:51 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_leger/views/cetak.php
INFO - 2020-01-28 14:56:51 --> Final output sent to browser
DEBUG - 2020-01-28 14:56:51 --> Total execution time: 0.6121
INFO - 2020-01-28 15:17:46 --> Config Class Initialized
INFO - 2020-01-28 15:17:46 --> Hooks Class Initialized
DEBUG - 2020-01-28 15:17:46 --> UTF-8 Support Enabled
INFO - 2020-01-28 15:17:46 --> Utf8 Class Initialized
INFO - 2020-01-28 15:17:46 --> URI Class Initialized
INFO - 2020-01-28 15:17:46 --> Router Class Initialized
INFO - 2020-01-28 15:17:46 --> Output Class Initialized
INFO - 2020-01-28 15:17:46 --> Security Class Initialized
DEBUG - 2020-01-28 15:17:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 15:17:46 --> Input Class Initialized
INFO - 2020-01-28 15:17:46 --> Language Class Initialized
INFO - 2020-01-28 15:17:46 --> Language Class Initialized
INFO - 2020-01-28 15:17:46 --> Config Class Initialized
INFO - 2020-01-28 15:17:46 --> Loader Class Initialized
INFO - 2020-01-28 15:17:46 --> Helper loaded: url_helper
INFO - 2020-01-28 15:17:46 --> Helper loaded: file_helper
INFO - 2020-01-28 15:17:46 --> Helper loaded: form_helper
INFO - 2020-01-28 15:17:46 --> Helper loaded: my_helper
INFO - 2020-01-28 15:17:46 --> Database Driver Class Initialized
DEBUG - 2020-01-28 15:17:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 15:17:47 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 15:17:47 --> Controller Class Initialized
DEBUG - 2020-01-28 15:17:47 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_leger/views/cetak.php
INFO - 2020-01-28 15:17:47 --> Final output sent to browser
DEBUG - 2020-01-28 15:17:47 --> Total execution time: 0.6522
INFO - 2020-01-28 15:18:06 --> Config Class Initialized
INFO - 2020-01-28 15:18:06 --> Hooks Class Initialized
DEBUG - 2020-01-28 15:18:06 --> UTF-8 Support Enabled
INFO - 2020-01-28 15:18:06 --> Utf8 Class Initialized
INFO - 2020-01-28 15:18:06 --> URI Class Initialized
INFO - 2020-01-28 15:18:06 --> Router Class Initialized
INFO - 2020-01-28 15:18:06 --> Output Class Initialized
INFO - 2020-01-28 15:18:06 --> Security Class Initialized
DEBUG - 2020-01-28 15:18:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 15:18:06 --> Input Class Initialized
INFO - 2020-01-28 15:18:06 --> Language Class Initialized
INFO - 2020-01-28 15:18:06 --> Language Class Initialized
INFO - 2020-01-28 15:18:06 --> Config Class Initialized
INFO - 2020-01-28 15:18:06 --> Loader Class Initialized
INFO - 2020-01-28 15:18:06 --> Helper loaded: url_helper
INFO - 2020-01-28 15:18:06 --> Helper loaded: file_helper
INFO - 2020-01-28 15:18:06 --> Helper loaded: form_helper
INFO - 2020-01-28 15:18:06 --> Helper loaded: my_helper
INFO - 2020-01-28 15:18:06 --> Database Driver Class Initialized
DEBUG - 2020-01-28 15:18:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 15:18:06 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 15:18:06 --> Controller Class Initialized
DEBUG - 2020-01-28 15:18:06 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_leger/views/cetak.php
INFO - 2020-01-28 15:18:06 --> Final output sent to browser
DEBUG - 2020-01-28 15:18:06 --> Total execution time: 0.6952
INFO - 2020-01-28 15:18:29 --> Config Class Initialized
INFO - 2020-01-28 15:18:29 --> Hooks Class Initialized
DEBUG - 2020-01-28 15:18:29 --> UTF-8 Support Enabled
INFO - 2020-01-28 15:18:30 --> Utf8 Class Initialized
INFO - 2020-01-28 15:18:30 --> URI Class Initialized
INFO - 2020-01-28 15:18:30 --> Router Class Initialized
INFO - 2020-01-28 15:18:30 --> Output Class Initialized
INFO - 2020-01-28 15:18:30 --> Security Class Initialized
DEBUG - 2020-01-28 15:18:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 15:18:30 --> Input Class Initialized
INFO - 2020-01-28 15:18:30 --> Language Class Initialized
INFO - 2020-01-28 15:18:30 --> Language Class Initialized
INFO - 2020-01-28 15:18:30 --> Config Class Initialized
INFO - 2020-01-28 15:18:30 --> Loader Class Initialized
INFO - 2020-01-28 15:18:30 --> Helper loaded: url_helper
INFO - 2020-01-28 15:18:30 --> Helper loaded: file_helper
INFO - 2020-01-28 15:18:30 --> Helper loaded: form_helper
INFO - 2020-01-28 15:18:30 --> Helper loaded: my_helper
INFO - 2020-01-28 15:18:30 --> Database Driver Class Initialized
DEBUG - 2020-01-28 15:18:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 15:18:30 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 15:18:30 --> Controller Class Initialized
ERROR - 2020-01-28 15:18:30 --> Severity: Notice --> Array to string conversion E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_leger\controllers\Cetak_leger.php 130
ERROR - 2020-01-28 15:18:30 --> Severity: Notice --> Array to string conversion E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_leger\controllers\Cetak_leger.php 130
ERROR - 2020-01-28 15:18:30 --> Severity: Notice --> Array to string conversion E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_leger\controllers\Cetak_leger.php 130
ERROR - 2020-01-28 15:18:30 --> Severity: Notice --> Array to string conversion E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_leger\controllers\Cetak_leger.php 130
ERROR - 2020-01-28 15:18:30 --> Severity: Notice --> Array to string conversion E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_leger\controllers\Cetak_leger.php 130
ERROR - 2020-01-28 15:18:30 --> Severity: Notice --> Array to string conversion E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_leger\controllers\Cetak_leger.php 130
ERROR - 2020-01-28 15:18:30 --> Severity: Notice --> Array to string conversion E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_leger\controllers\Cetak_leger.php 130
ERROR - 2020-01-28 15:18:30 --> Severity: Notice --> Array to string conversion E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_leger\controllers\Cetak_leger.php 130
ERROR - 2020-01-28 15:18:30 --> Severity: Notice --> Array to string conversion E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_leger\controllers\Cetak_leger.php 130
ERROR - 2020-01-28 15:18:30 --> Severity: Notice --> Array to string conversion E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_leger\controllers\Cetak_leger.php 130
ERROR - 2020-01-28 15:18:30 --> Severity: Notice --> Array to string conversion E:\xampp\htdocs\_2020\nilaik13_ci\application\modules\cetak_leger\controllers\Cetak_leger.php 130
DEBUG - 2020-01-28 15:18:30 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_leger/views/cetak.php
INFO - 2020-01-28 15:18:30 --> Final output sent to browser
DEBUG - 2020-01-28 15:18:30 --> Total execution time: 0.9080
INFO - 2020-01-28 15:25:48 --> Config Class Initialized
INFO - 2020-01-28 15:25:48 --> Hooks Class Initialized
DEBUG - 2020-01-28 15:25:48 --> UTF-8 Support Enabled
INFO - 2020-01-28 15:25:48 --> Utf8 Class Initialized
INFO - 2020-01-28 15:25:48 --> URI Class Initialized
INFO - 2020-01-28 15:25:48 --> Router Class Initialized
INFO - 2020-01-28 15:25:48 --> Output Class Initialized
INFO - 2020-01-28 15:25:48 --> Security Class Initialized
DEBUG - 2020-01-28 15:25:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 15:25:48 --> Input Class Initialized
INFO - 2020-01-28 15:25:49 --> Language Class Initialized
INFO - 2020-01-28 15:25:49 --> Language Class Initialized
INFO - 2020-01-28 15:25:49 --> Config Class Initialized
INFO - 2020-01-28 15:25:49 --> Loader Class Initialized
INFO - 2020-01-28 15:25:49 --> Helper loaded: url_helper
INFO - 2020-01-28 15:25:49 --> Helper loaded: file_helper
INFO - 2020-01-28 15:25:49 --> Helper loaded: form_helper
INFO - 2020-01-28 15:25:49 --> Helper loaded: my_helper
INFO - 2020-01-28 15:25:49 --> Database Driver Class Initialized
DEBUG - 2020-01-28 15:25:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 15:25:49 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 15:25:49 --> Controller Class Initialized
DEBUG - 2020-01-28 15:25:49 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_leger/views/cetak.php
INFO - 2020-01-28 15:25:49 --> Final output sent to browser
DEBUG - 2020-01-28 15:25:49 --> Total execution time: 0.6145
INFO - 2020-01-28 15:27:17 --> Config Class Initialized
INFO - 2020-01-28 15:27:17 --> Hooks Class Initialized
DEBUG - 2020-01-28 15:27:17 --> UTF-8 Support Enabled
INFO - 2020-01-28 15:27:17 --> Utf8 Class Initialized
INFO - 2020-01-28 15:27:17 --> URI Class Initialized
INFO - 2020-01-28 15:27:17 --> Router Class Initialized
INFO - 2020-01-28 15:27:17 --> Output Class Initialized
INFO - 2020-01-28 15:27:17 --> Security Class Initialized
DEBUG - 2020-01-28 15:27:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 15:27:17 --> Input Class Initialized
INFO - 2020-01-28 15:27:17 --> Language Class Initialized
INFO - 2020-01-28 15:27:17 --> Language Class Initialized
INFO - 2020-01-28 15:27:17 --> Config Class Initialized
INFO - 2020-01-28 15:27:17 --> Loader Class Initialized
INFO - 2020-01-28 15:27:17 --> Helper loaded: url_helper
INFO - 2020-01-28 15:27:17 --> Helper loaded: file_helper
INFO - 2020-01-28 15:27:17 --> Helper loaded: form_helper
INFO - 2020-01-28 15:27:17 --> Helper loaded: my_helper
INFO - 2020-01-28 15:27:17 --> Database Driver Class Initialized
DEBUG - 2020-01-28 15:27:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 15:27:17 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 15:27:17 --> Controller Class Initialized
DEBUG - 2020-01-28 15:27:17 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_leger/views/cetak.php
INFO - 2020-01-28 15:27:17 --> Final output sent to browser
DEBUG - 2020-01-28 15:27:17 --> Total execution time: 0.6318
INFO - 2020-01-28 15:27:42 --> Config Class Initialized
INFO - 2020-01-28 15:27:42 --> Hooks Class Initialized
DEBUG - 2020-01-28 15:27:42 --> UTF-8 Support Enabled
INFO - 2020-01-28 15:27:42 --> Utf8 Class Initialized
INFO - 2020-01-28 15:27:42 --> URI Class Initialized
INFO - 2020-01-28 15:27:42 --> Router Class Initialized
INFO - 2020-01-28 15:27:42 --> Output Class Initialized
INFO - 2020-01-28 15:27:42 --> Security Class Initialized
DEBUG - 2020-01-28 15:27:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 15:27:42 --> Input Class Initialized
INFO - 2020-01-28 15:27:43 --> Language Class Initialized
INFO - 2020-01-28 15:27:43 --> Language Class Initialized
INFO - 2020-01-28 15:27:43 --> Config Class Initialized
INFO - 2020-01-28 15:27:43 --> Loader Class Initialized
INFO - 2020-01-28 15:27:43 --> Helper loaded: url_helper
INFO - 2020-01-28 15:27:43 --> Helper loaded: file_helper
INFO - 2020-01-28 15:27:43 --> Helper loaded: form_helper
INFO - 2020-01-28 15:27:43 --> Helper loaded: my_helper
INFO - 2020-01-28 15:27:43 --> Database Driver Class Initialized
DEBUG - 2020-01-28 15:27:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 15:27:43 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 15:27:43 --> Controller Class Initialized
DEBUG - 2020-01-28 15:27:43 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_leger/views/cetak.php
INFO - 2020-01-28 15:27:43 --> Final output sent to browser
DEBUG - 2020-01-28 15:27:43 --> Total execution time: 0.6269
INFO - 2020-01-28 15:28:02 --> Config Class Initialized
INFO - 2020-01-28 15:28:02 --> Hooks Class Initialized
DEBUG - 2020-01-28 15:28:02 --> UTF-8 Support Enabled
INFO - 2020-01-28 15:28:02 --> Utf8 Class Initialized
INFO - 2020-01-28 15:28:02 --> URI Class Initialized
INFO - 2020-01-28 15:28:02 --> Router Class Initialized
INFO - 2020-01-28 15:28:02 --> Output Class Initialized
INFO - 2020-01-28 15:28:02 --> Security Class Initialized
DEBUG - 2020-01-28 15:28:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 15:28:02 --> Input Class Initialized
INFO - 2020-01-28 15:28:02 --> Language Class Initialized
INFO - 2020-01-28 15:28:02 --> Language Class Initialized
INFO - 2020-01-28 15:28:02 --> Config Class Initialized
INFO - 2020-01-28 15:28:02 --> Loader Class Initialized
INFO - 2020-01-28 15:28:02 --> Helper loaded: url_helper
INFO - 2020-01-28 15:28:02 --> Helper loaded: file_helper
INFO - 2020-01-28 15:28:02 --> Helper loaded: form_helper
INFO - 2020-01-28 15:28:02 --> Helper loaded: my_helper
INFO - 2020-01-28 15:28:02 --> Database Driver Class Initialized
DEBUG - 2020-01-28 15:28:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 15:28:02 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 15:28:02 --> Controller Class Initialized
DEBUG - 2020-01-28 15:28:02 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_leger/views/cetak.php
INFO - 2020-01-28 15:28:02 --> Final output sent to browser
DEBUG - 2020-01-28 15:28:02 --> Total execution time: 0.7215
INFO - 2020-01-28 15:28:05 --> Config Class Initialized
INFO - 2020-01-28 15:28:05 --> Hooks Class Initialized
DEBUG - 2020-01-28 15:28:05 --> UTF-8 Support Enabled
INFO - 2020-01-28 15:28:05 --> Utf8 Class Initialized
INFO - 2020-01-28 15:28:05 --> URI Class Initialized
INFO - 2020-01-28 15:28:05 --> Router Class Initialized
INFO - 2020-01-28 15:28:05 --> Output Class Initialized
INFO - 2020-01-28 15:28:05 --> Security Class Initialized
DEBUG - 2020-01-28 15:28:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 15:28:05 --> Input Class Initialized
INFO - 2020-01-28 15:28:05 --> Language Class Initialized
INFO - 2020-01-28 15:28:05 --> Language Class Initialized
INFO - 2020-01-28 15:28:05 --> Config Class Initialized
INFO - 2020-01-28 15:28:05 --> Loader Class Initialized
INFO - 2020-01-28 15:28:05 --> Helper loaded: url_helper
INFO - 2020-01-28 15:28:05 --> Helper loaded: file_helper
INFO - 2020-01-28 15:28:05 --> Helper loaded: form_helper
INFO - 2020-01-28 15:28:05 --> Helper loaded: my_helper
INFO - 2020-01-28 15:28:05 --> Database Driver Class Initialized
DEBUG - 2020-01-28 15:28:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 15:28:05 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 15:28:05 --> Controller Class Initialized
DEBUG - 2020-01-28 15:28:05 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_leger/views/cetak.php
INFO - 2020-01-28 15:28:05 --> Final output sent to browser
DEBUG - 2020-01-28 15:28:05 --> Total execution time: 0.7112
INFO - 2020-01-28 16:03:19 --> Config Class Initialized
INFO - 2020-01-28 16:03:19 --> Hooks Class Initialized
DEBUG - 2020-01-28 16:03:19 --> UTF-8 Support Enabled
INFO - 2020-01-28 16:03:19 --> Utf8 Class Initialized
INFO - 2020-01-28 16:03:19 --> URI Class Initialized
INFO - 2020-01-28 16:03:20 --> Router Class Initialized
INFO - 2020-01-28 16:03:20 --> Output Class Initialized
INFO - 2020-01-28 16:03:20 --> Security Class Initialized
DEBUG - 2020-01-28 16:03:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 16:03:20 --> Input Class Initialized
INFO - 2020-01-28 16:03:20 --> Language Class Initialized
INFO - 2020-01-28 16:03:20 --> Language Class Initialized
INFO - 2020-01-28 16:03:20 --> Config Class Initialized
INFO - 2020-01-28 16:03:20 --> Loader Class Initialized
INFO - 2020-01-28 16:03:20 --> Helper loaded: url_helper
INFO - 2020-01-28 16:03:20 --> Helper loaded: file_helper
INFO - 2020-01-28 16:03:20 --> Helper loaded: form_helper
INFO - 2020-01-28 16:03:20 --> Helper loaded: my_helper
INFO - 2020-01-28 16:03:20 --> Database Driver Class Initialized
DEBUG - 2020-01-28 16:03:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 16:03:20 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 16:03:20 --> Controller Class Initialized
DEBUG - 2020-01-28 16:03:20 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_leger/views/cetak.php
INFO - 2020-01-28 16:03:20 --> Final output sent to browser
DEBUG - 2020-01-28 16:03:20 --> Total execution time: 1.1283
INFO - 2020-01-28 16:04:06 --> Config Class Initialized
INFO - 2020-01-28 16:04:06 --> Hooks Class Initialized
DEBUG - 2020-01-28 16:04:06 --> UTF-8 Support Enabled
INFO - 2020-01-28 16:04:06 --> Utf8 Class Initialized
INFO - 2020-01-28 16:04:06 --> URI Class Initialized
INFO - 2020-01-28 16:04:06 --> Router Class Initialized
INFO - 2020-01-28 16:04:06 --> Output Class Initialized
INFO - 2020-01-28 16:04:06 --> Security Class Initialized
DEBUG - 2020-01-28 16:04:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 16:04:06 --> Input Class Initialized
INFO - 2020-01-28 16:04:06 --> Language Class Initialized
INFO - 2020-01-28 16:04:06 --> Language Class Initialized
INFO - 2020-01-28 16:04:06 --> Config Class Initialized
INFO - 2020-01-28 16:04:06 --> Loader Class Initialized
INFO - 2020-01-28 16:04:06 --> Helper loaded: url_helper
INFO - 2020-01-28 16:04:06 --> Helper loaded: file_helper
INFO - 2020-01-28 16:04:06 --> Helper loaded: form_helper
INFO - 2020-01-28 16:04:06 --> Helper loaded: my_helper
INFO - 2020-01-28 16:04:06 --> Database Driver Class Initialized
DEBUG - 2020-01-28 16:04:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 16:04:06 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 16:04:06 --> Controller Class Initialized
DEBUG - 2020-01-28 16:04:06 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_leger/views/cetak.php
INFO - 2020-01-28 16:04:06 --> Final output sent to browser
DEBUG - 2020-01-28 16:04:06 --> Total execution time: 0.7424
INFO - 2020-01-28 16:05:13 --> Config Class Initialized
INFO - 2020-01-28 16:05:13 --> Hooks Class Initialized
DEBUG - 2020-01-28 16:05:13 --> UTF-8 Support Enabled
INFO - 2020-01-28 16:05:13 --> Utf8 Class Initialized
INFO - 2020-01-28 16:05:13 --> URI Class Initialized
INFO - 2020-01-28 16:05:13 --> Router Class Initialized
INFO - 2020-01-28 16:05:13 --> Output Class Initialized
INFO - 2020-01-28 16:05:13 --> Security Class Initialized
DEBUG - 2020-01-28 16:05:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 16:05:13 --> Input Class Initialized
INFO - 2020-01-28 16:05:13 --> Language Class Initialized
INFO - 2020-01-28 16:05:13 --> Language Class Initialized
INFO - 2020-01-28 16:05:13 --> Config Class Initialized
INFO - 2020-01-28 16:05:14 --> Loader Class Initialized
INFO - 2020-01-28 16:05:14 --> Helper loaded: url_helper
INFO - 2020-01-28 16:05:14 --> Helper loaded: file_helper
INFO - 2020-01-28 16:05:14 --> Helper loaded: form_helper
INFO - 2020-01-28 16:05:14 --> Helper loaded: my_helper
INFO - 2020-01-28 16:05:14 --> Database Driver Class Initialized
DEBUG - 2020-01-28 16:05:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 16:05:14 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 16:05:14 --> Controller Class Initialized
DEBUG - 2020-01-28 16:05:14 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_leger/views/cetak.php
INFO - 2020-01-28 16:05:14 --> Final output sent to browser
DEBUG - 2020-01-28 16:05:14 --> Total execution time: 0.6149
INFO - 2020-01-28 16:05:16 --> Config Class Initialized
INFO - 2020-01-28 16:05:16 --> Hooks Class Initialized
DEBUG - 2020-01-28 16:05:16 --> UTF-8 Support Enabled
INFO - 2020-01-28 16:05:16 --> Utf8 Class Initialized
INFO - 2020-01-28 16:05:16 --> URI Class Initialized
INFO - 2020-01-28 16:05:16 --> Router Class Initialized
INFO - 2020-01-28 16:05:16 --> Output Class Initialized
INFO - 2020-01-28 16:05:16 --> Security Class Initialized
DEBUG - 2020-01-28 16:05:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-28 16:05:16 --> Input Class Initialized
INFO - 2020-01-28 16:05:17 --> Language Class Initialized
INFO - 2020-01-28 16:05:17 --> Language Class Initialized
INFO - 2020-01-28 16:05:17 --> Config Class Initialized
INFO - 2020-01-28 16:05:17 --> Loader Class Initialized
INFO - 2020-01-28 16:05:17 --> Helper loaded: url_helper
INFO - 2020-01-28 16:05:17 --> Helper loaded: file_helper
INFO - 2020-01-28 16:05:17 --> Helper loaded: form_helper
INFO - 2020-01-28 16:05:17 --> Helper loaded: my_helper
INFO - 2020-01-28 16:05:17 --> Database Driver Class Initialized
DEBUG - 2020-01-28 16:05:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-28 16:05:17 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-28 16:05:17 --> Controller Class Initialized
DEBUG - 2020-01-28 16:05:17 --> File loaded: E:\xampp\htdocs\_2020\nilaik13_ci\application\modules/cetak_leger/views/cetak.php
INFO - 2020-01-28 16:05:17 --> Final output sent to browser
DEBUG - 2020-01-28 16:05:17 --> Total execution time: 0.7319
