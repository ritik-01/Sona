<!DOCTYPE html>
<?php include("func.php"); ?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
        integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Assign Subject</title>
</head>

<body>
    <?php include("navbar.php"); ?>

    <div class="container my-5">
        <h3>
            <center>Room-Details </center>
        </h3>
        <form action="func.php" method="POST">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="teachid">Room Number: </label>
                        <input type="text" class="form-control" id="tid" placeholder="Enter Room number" name="rno">
                    </div>
                    <div class="form-group my-4">
                        <label for="fname">Class: </label>
                        <input type="text" class="form-control" id="fname" name="class"
                            placeholder="Enter Class">
                    </div>
                    <div class="form-group">
                        <label for="qual">Class Timing: </label>
                        <select class="form-control" id="class" name="timing">
                            <option value="lec1">lec1</option>
                            <option value="lec2">lec2</option>
                            <option value="lec3">lec3</option>
                            <option value="lec4">lec4</option>
                            <option value="lec5">lec5</option>
                            <option value="lec6">lec6</option>
                        </select>
                    </div>
                    <input type="submit" name="assign_room" value="Assign Subject" class="btn btn-primary"
                        id="inputbtn">
                </div>
            </div>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
</body>

</html>