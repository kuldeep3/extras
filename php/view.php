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
</head>

<body>
    <div class="table-responsive">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Paragraph One</th>
                    <th scope="col">Paragraph Two</th>
                    <th scope="col">Paragraph Three</th>
                    <th scope="col">Paragraph Four</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo ($result['paragraph_one']); ?></td>
                    <td><?php echo ($result['paragraph_two']); ?></td>
                    <td><?php echo ($result['paragraph_three']); ?></td>
                    <td><?php echo ($result['paragraph_four']); ?></td>
                </tr>
            </tbody>
        </table>
        <div style="display: flex; justify-content:space-between; padding:2em;">
            <form action="/">
                <button type="submit" class="btn btn-outline-primary">Back</button>
            </form>
            <form action="/pdf">
                <button type="submit" class="btn btn-outline-success">Download</button>
            </form>
        </div>


    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>