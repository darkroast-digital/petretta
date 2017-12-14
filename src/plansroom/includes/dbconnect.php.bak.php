<?php
                error_reporting(E_ALL ^ E_NOTICE);
                date_default_timezone_set("America/Toronto");
                $script_dir          = '/plansroom/'; // IF IN ROOT leave like this: '/'  if in root/files   then    '/files/'
                $upload_dir          = '/plansroom/uploads/'; //NOTE: TRAILING FORWARD SLASHES! FULL PATH to current folder relative to root, DON'T FORGET TO SET permissions for this folder to 777 on UNIX servers.
                $upload_notify_email = 'info@petcon.net'; //email for notifications of new file upload.

                $db_host = 'localhost'; //hostname
                $db_user = 'petretta'; // username
                $db_password = 'dev123'; // password
                $db_name = 'petretta'; //database name

                $db_pr = 'afm_'; //database prefix

                $md5_salt = 'cfdb9775ac734fdc93bf35d4000fef16';

                $demo        = false;
                @$mysqli = @mysqli_connect($db_host, $db_user, $db_password, $db_name);

                if (!$mysqli) {
                    header("Location:install.php");
                    exit();
                }
              ?>