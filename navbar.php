
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="admin-panel.php">S.R.School</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="admin-panel.php" diasabled>Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Student
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="addstud.php">Add Student</a>
                <a class="dropdown-item" href="delstud.php">Delete Student</a>
                <a class="dropdown-item" href="fees.php">Update Fees</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="dispstud.php">Display Student</a>
                <a class="dropdown-item" href="updatestud.php">Update Student Details</a>
              </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Teacher
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="addteach.php">Add Teacher</a>
                  <a class="dropdown-item" href="delteach.php">Delete Teacher</a>
                  <a class="dropdown-item" href="salary.php">Teacher Salary</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="dispteach.php">Display Teacher</a>
                  <a class="dropdown-item" href="updateteach.php">Update Teacher Details</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Subject
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="subject.php">Add Teacher Subject</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="dispsub.php">Display Teacher Subject</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Room
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="addroom.php">Add Room</a>
                  <a class="dropdown-item" href="assignroom.php">Assign Room</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="disproom.php">Display Room</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout (<?php echo $_SESSION["username"];?>)</a>
            </li>
          </ul>
        </div>
      </nav>
