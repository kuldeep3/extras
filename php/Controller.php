<?php
if (isset($_POST['save'])) {
    $paragraph = [];
    $paragraph[0] = "'" . $_POST['paragraph_one'] . "'";
    $paragraph[1] = "'" . $_POST['paragraph_two'] . "'";
    $paragraph[2] = "'" . $_POST['paragraph_three'] . "'";
    $paragraph[3] = "'" . $_POST['paragraph_four'] . "'";
    $result = App::get('database')->addItems($paragraph);
    if ($result != null) {
        session_start();
        $_SESSION['id'] = $result;
        header('location:/fetch');
    } else {
        echo "error";
    }
    // use mikehaertl\wkhtmlto\Pdf;
    // $pdf = new Pdf('/path/to/page.html');

} else {
    throw new Exception();
}
