<?php
  require "header.php";
?>

<main>

    <body>
        <div class="container">
            <br />
            <?php
          if (isset($_GET['error'])) {
              if ($_GET['error'] == "wrongpassword") {
                  echo '<div class="alert alert-danger">
                        <strong>Wrong password!</strong> Please login with correct credentials.</div>';
              }
              if ($_GET['error'] == "nouser") {
                  echo '<div class="alert alert-danger">
                        <strong>Username/E-mail not registered!</strong> Please login with correct credentials.</div>';
              }
              if ($_GET['error'] == "emptyfields") {
                  echo '<div class="alert alert-danger">
                        <strong>Please fill in the login forms!</strong> There are no user with no name and no password.</div>';
              }
          }
            if (isset($_GET['login']) && isset($_SESSION['usersId'])) {
                if ($_GET['login'] == "success") {
                    echo '<div class="alert alert-success">
                        <strong>Login successful!</strong> Enjoy our services</div>';
                }
                
            }
            if (!isset($_SESSION['usersId']) && isset($_GET['login'])) {
                if ($_GET['login'] == "success") {
                    echo '<div class="alert alert-warning">What are you trying to do?</div>';
                    }
                }
            if (isset($_GET['logout'])) {
                if ($_GET['logout'] == "success") {
                    echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Logout successful!</strong> See you soon!</div>'; 
                }
            }
        ?>
            <br />
            <h2 class="text-center">JADWAL ULANGAN HARIAN XII MIPA 5 2019</h2>
            <small class="text-center">Updated: 27/08/2019 9.53 AM</small>
            <br />
            <?php
            if (isset($_SESSION['usersId'])) {
                echo '<table class="hideonhover table-striped table-bordered table-hover text-center text-middle align-middle TableMap table">
                <tr>
                    <thead class="thead-dark">
                        <th>HARI/TANGGAL</th>
                        <th>JAM KE</th>
                        <th>MATA PELAJARAN</th>
                        <th>PDF Availability</th>
                    </thead>
                </tr>
                <tr class="align-middle">
                    <td rowspan="3">SELASA<br />27/08/2019</td>
                    <td>1</td>
                    <td>No Schedule Detected</td>
                    <td><a class="btn btn-danger text-white btn-sm">NO</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>No Schedule Detected</td>
                    <td><a class="btn btn-danger text-white btn-sm">NO</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>No Schedule Detected</td>
                    <td><a class="btn btn-danger text-white btn-sm">NO</a></td>
                </tr>
                <tr class="align-middle">
                    <td rowspan="3">RABU<br />28/08/2019</td>
                    <td>1</td>
                    <td>No Schedule Detected</td>
                    <td><a class="btn btn-danger text-white btn-sm">NO</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>No Schedule Detected</td>
                    <td><a class="btn btn-danger text-white btn-sm">NO</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>No Schedule Detected</td>
                    <td><a class="btn btn-danger text-white btn-sm">NO</a></td>
                </tr>
                <tr class="align-middle">
                    <td rowspan="3">KAMIS<br />29/08/2019</td>
                    <td>1</td>
                    <td>No Schedule Detected</td>
                    <td><a class="btn btn-danger text-white btn-sm">NO</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>No Schedule Detected</td>
                    <td><a class="btn btn-danger text-white btn-sm">NO</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>No Schedule Detected</td>
                    <td><a class="btn btn-danger text-white btn-sm">NO</a></td>
                </tr>
                <tr class="align-middle">
                    <td rowspan="3">JUMAT<br />30/08/2019</td>
                    <td>1</td>
                    <td>No Schedule Detected</td>
                    <td><a class="btn btn-danger text-white btn-sm">NO</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>No Schedule Detected</td>
                    <td><a class="btn btn-danger text-white btn-sm">NO</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>No Schedule Detected</td>
                    <td><a class="btn btn-danger text-white btn-sm">NO</a></td>
                </tr>
                <tr class="align-middle">
                    <td rowspan="3">SENIN<br />02/09/2019</td>
                    <td>1</td>
                    <td>No Schedule Detected</td>
                    <td><a class="btn btn-danger text-white btn-sm">NO</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>No Schedule Detected</td>
                    <td><a class="btn btn-danger text-white btn-sm">NO</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>No Schedule Detected</td>
                    <td><a class="btn btn-danger text-white btn-sm">NO</a></td>
                </tr>
                <tr class="align-middle">
                    <td rowspan="3">SELASA<br />03/09/2019</td>
                    <td>1</td>
                    <td>No Schedule Detected</td>
                    <td><a class="btn btn-danger text-white btn-sm">NO</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>No Schedule Detected</td>
                    <td><a class="btn btn-danger text-white btn-sm">NO</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>No Schedule Detected</td>
                    <td><a class="btn btn-danger text-white btn-sm">NO</a></td>
                </tr>
            </table>';
            } else {
            echo '<table class="hideonhover table-striped table-bordered table-hover text-center text-middle align-middle TableMap table">
            <tr>
                <thead class="thead-dark">
                    <th>HARI/TANGGAL</th>
                    <th>JAM KE</th>
                    <th>MATA PELAJARAN</th>
                    <th>PDF Availability</th>
                </thead>
            </tr>
            <tr class="align-middle">
                <td rowspan="3">SELASA<br />27/08/2019</td>
                <td>1</td>
                <td>No Schedule Detected</td>
                                    <td><a target="_blank">Login to check</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>No Schedule Detected</td>
                                    <td><a target="_blank">Login to check</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>No Schedule Detected</td>
                                    <td><a target="_blank">Login to check</a></td>
            </tr>
            <tr class="align-middle">
                <td rowspan="3">RABU<br />28/08/2019</td>
                <td>1</td>
                <td>No Schedule Detected</td>
                                    <td><a target="_blank">Login to check</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>No Schedule Detected</td>
                                    <td><a target="_blank">Login to check</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>No Schedule Detected</td>
                                    <td><a target="_blank">Login to check</a></td>
            </tr>
            <tr class="align-middle">
                <td rowspan="3">KAMIS<br />29/08/2019</td>
                <td>1</td>
                <td>No Schedule Detected</td>
                                    <td><a target="_blank">Login to check</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>No Schedule Detected</td>
                                    <td><a target="_blank">Login to check</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>No Schedule Detected</td>
                                    <td><a target="_blank">Login to check</a></td>
            </tr>
            <tr class="align-middle">
                <td rowspan="3">JUMAT<br />30/08/2019</td>
                <td>1</td>
                <td>No Schedule Detected</td>
                                    <td><a target="_blank">Login to check</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>No Schedule Detected</td>
                                    <td><a target="_blank">Login to check</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>No Schedule Detected</td>
                                    <td><a target="_blank">Login to check</a></td>
            </tr>
            <tr class="align-middle">
                <td rowspan="3">SENIN<br />02/09/2019</td>
                <td>1</td>
                <td>No Schedule Detected</td>
                                    <td><a target="_blank">Login to check</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>No Schedule Detected</td>
                                    <td><a target="_blank">Login to check</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>No Schedule Detected</td>
                                    <td><a target="_blank">Login to check</a></td>
            </tr>
            <tr class="align-middle">
                <td rowspan="3">SELASA<br />03/09/2019</td>
                <td>1</td>
                <td>No Schedule Detected</td>
                                    <td><a target="_blank">Login to check</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>No Schedule Detected</td>
                                    <td><a target="_blank">Login to check</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>No Schedule Detected</td>
                                    <td><a target="_blank">Login to check</a></td>
            </tr>
        </table>';
            }
            ?>

            <p class="text-center">Keterangan:
                [Jam ke 1 = 07.30 - 09.00]
                [Jam ke 2 = 09.30 - 11.00]
                [Jam ke 3 = 12.00 - 13.30]
            </p>
            <h2 class="text-center">Exam will be scheduled at <h2 class="text-center" id="startdate"></h2>
            </h2>
            <script>
                var Start = new Date();
                document.getElementById("startdate").innerHTML = Start;

            </script>
            <h2 class="btn btn-primary text-center">Exams progress</h2>
            <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                    0% Completed
                </div>
            </div>
            <p class="text-center">N.B You may face some bugs as a feature</p>
        </div>
        </div>
    </body>
</main>
