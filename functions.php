<?php
date_default_timezone_set("Europe/Moscow");
function include_template($path, $data) {
    $template = 'templates/'.$path.'.php';
    if(file_exists($template)) {
        ob_start();
        require_once($template);
        $content = ob_get_clean();
    }
    else{
        $content = '';
    }
    return $content;
}
?>
