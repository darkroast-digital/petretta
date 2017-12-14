<?php
                error_reporting(E_ALL ^ E_NOTICE);
                date_default_timezone_set("America/Toronto");
                $script_dir          = '/plans/'; // IF IN ROOT leave like this: '/'  if in root/files   then    '/files/'
                $upload_dir          = '/plans/uploads/'; //NOTE: TRAILING FORWARD SLASHES! FULL PATH to current folder relative to root, DON'T FORGET TO SET permissions for this folder to 777 on UNIX servers.
                $upload_notify_email = 'info@petcon.net'; //email for notifications of new file upload.

                $db_host = 'localhost'; //hostname
                $db_user = 'petcon_admin'; // username
                $db_password = 'dev123!@#'; // password
                $db_name = 'petcon_plansroom'; //database name

                $db_pr = 'afm_'; //database prefix

                $md5_salt = '62c0ae926a0cc7e4004969ae8ee0e28d';

                $demo        = false;
                @$mysqli = @mysqli_connect($db_host, $db_user, $db_password, $db_name);

                if (!$mysqli) {
                    header("Location:install.php");
                    exit();
                }
              ?>