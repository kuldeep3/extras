<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$result = $_SESSION['res'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form View</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <table>
            <thead>
                <tr>
                    <th><img src="https://d3ui957tjb5bqd.cloudfront.net/uploads/2017/01/Swan-by-Yuri-Kartashev-560x420.jpg" alt="" height="100px" width="120px"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <p><?php echo ($result['paragraph_one']); ?></p>
                    </td>
                </tr>
            </tbody>
        </table>
        <table>
            <thead>
                <tr>
                    <th>
                        <h1>
                            Welcome to the Club
                        </h1>
                        <p>Educate-Captivate-Connect</p>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <p><?php echo ($result['paragraph_two']); ?></p>
                    </td>
                </tr>
            </tbody>
        </table>
        <table>
            <thead>
                <tr>
                    <th>
                        <h2>
                            Contact Us
                        </h2>
                        <span>
                            Email: <p>kuldeepupreti3@gmail.com</p>
                        </span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <p><?php echo ($result['paragraph_three']); ?></p>
                    </td>
                </tr>
            </tbody>
        </table>
        <table>
            <tbody>
                <tr>
                    <td>
                        <p><?php echo ($result['paragraph_four']); ?></p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div style="display: flex; justify-content:space-between; padding:2em;">
        <form action="/">
            <button type="submit" class="btn btn-outline-primary">Back</button>
        </form>
        <form action="/pdf">
            <button type="submit" class="btn btn-outline-success">Download</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>