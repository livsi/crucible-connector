<?php

function renderIcon()
{
    $name = './magnifier.svg';
    header("Content-Type: image/svg+xml");
    header("Content-Length: ".filesize($name));
    readfile($name);
}

switch ($_SERVER['PHP_SELF']) {
    case '/icon':
        renderIcon();
        exit;
        break;
    case '/file':
        renderIcon();
        file_get_contents('http://localhost:63342/api/file/'.$_GET["file"]);
        exit;
        break;
    default:
        echo "Allowed paths: ['/icon', '/file']";
        break;
}
exit;
