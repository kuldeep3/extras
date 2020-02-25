<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <form action="/register" method="POST">
        <div class="form-group">
            <label for="paragraph1">Paragraph One:</label>
            <textarea class="form-control" name="paragraph_one" id="paragraph1" rows="3">
            </textarea>
            <!-- <input type="text" class="form-control" id="paragraph1" name="paragraph_one" required> -->
        </div>
        <div class="form-group">
            <label for="paragraph2">Paragraph Two:</label>
            <textarea class="form-control" name="paragraph_two" id="paragraph2" rows="3">
            </textarea>
            <!-- <input type="text" class="form-control" id="paragraph2" name="paragraph_two" required> -->
        </div>
        <div class="form-group">
            <label for="paragraph3">Paragraph Three:</label>
            <textarea class="form-control" name="paragraph_three" id="paragraph3" rows="3">
            </textarea>
            <!-- <input type="text" class="form-control" id="paragraph3" name="paragraph_three" required> -->
        </div>
        <div class="form-group">
            <label for="paragraph4">Paragraph Four:</label>
            <textarea class="form-control" name="paragraph_four" id="paragraph4" rows="3">
            </textarea>
            <!-- <input type="text" class="form-control" id="paragraph4" name="paragraph_four" required> -->
        </div>
        <button type="submit" class="btn btn-primary" name="save">Submit</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>