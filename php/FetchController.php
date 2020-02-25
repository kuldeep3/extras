<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$id = $_SESSION['id'];
$res = App::get('database')->selectItem($id);
$res->execute();
$result = $res->fetch(PDO::FETCH_ASSOC);
if ($result != null) {
    session_start();
    $_SESSION['res'] = $result;
    header('location:/view');
}
