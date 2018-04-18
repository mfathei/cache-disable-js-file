<?php
/**
 * Created by PhpStorm.
 * User: mahdy
 * Date: 4/18/18
 * Time: 11:25 PM
 */

define('BUILD_ENV', 'dev');
//define('BUILD_ENV', 'prod');

function getFileUrl($file){
    $ver = 1;
    
    if(defined('BUILD_ENV') && BUILD_ENV === 'dev'){
        $ver    = filemtime($file);
    }
    
    return $file . "?" . $ver;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Disable Cache for one file</title>
</head>
<body>
    <h1>Hello World!</h1>
    
    
    <script src="<?php echo getFileUrl("app.js"); ?>"></script>
</body>
</html>
