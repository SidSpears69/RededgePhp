<?php
require_once('functions.php');
require_once('init.php');
if(!$link) {
    $error = mysqli_connect_error();
    $page_content = include_template('error', $error);
}
else {
	$news = $link->query('SELECT * FROM news ORDER BY create_ts DESC');
	$page_content = include_template('index', $news);
}

$layout_content = include_template('layouts', [
	'content' => $page_content,
	'title' => 'Главная'
]);
print($layout_content);
?>
