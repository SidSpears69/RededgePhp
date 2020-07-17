<?php
require_once('functions.php');
require_once('init.php');
if(!$link) {
    $error = mysqli_connect_error();
	$page_content = include_template('error', $error);
}
else {
if (isset($_GET['id'])) {
    $news = $link->query("SELECT name, description  FROM news WHERE id ='".$_GET['id']."'")->fetch_assoc();
}
}
if (!$news) {
    header($_SERVER['SERVER_PROTOCOL']." 404 Not Found");
    header("Location: 404.php");
    die();
}
$page_content = include_template('news', $news);
$layout_content = include_template('layouts', [
	'content' => $page_content,
    'title' => $news['name']
]);
print($layout_content);