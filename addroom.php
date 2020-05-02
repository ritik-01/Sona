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
    <title>Add Room </title>
</head>

<body>
    <?php include("navbar.php"); ?>

    <div class="container my-5">
        <h3>
            <center>Add Room </center>
        </h3>
        <form action="func.php" method="POST">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="teachid">Room Number: </label>
                        <input type="text" class="form-control" id="tid" placeholder="Enter Teacher-Id" name="rno">
                    </div>
                    <input type="submit" name="add_room" value="Add Room" class="btn btn-primary"
                        id="inputbtn">
                    <input type="submit" name="del_room" value="Delete Room" class="btn btn-primary"
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