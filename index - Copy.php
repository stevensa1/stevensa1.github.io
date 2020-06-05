<?php
  require "header.php";
?>

<main>

    <body>
        <div class="container">
            <br />
    <h2 class="text-center">JADWAL PAS KELAS XI MIPA 2019</h2>
    <br />
    <table class="hideonhover table-striped table-bordered table-hover text-center align-middle TableMap table">
            <tr>
                <thead class="thead-dark">
                <th>HARI/TANGGAL</th>
                <th>JAM KE</th>
                <th>MATA PELAJARAN</th>
                <th>PDF Availability</th>
                </thead>
            </tr>
            <tr>
                <td rowspan="2">SENIN<br />13/05/2019</td>
                <td>1</td>
                <td>Bahasa Indonesia</td>
                <td><a class="btn btn-danger text-white btn-sm" target="_blank">NO</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Seni Budaya</td>
                <td><a target="_blank" class="btn btn-success btn-sm" href="downloads.php">YES</a></td>
            </tr>
            <tr>
                <td rowspan="2">RABU<br />15/05/2019</td>
                <td>1</td>
                <td>Bahasa Inggris</td>
                <td><a target="_blank" class="btn btn-danger text-white btn-sm">NO</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Sejarah Indonesia</td>
                <td><a target="_blank" class="btn btn-success btn-sm" href="downloads.php">YES</a></td>
            </tr>
            <tr>
                <td rowspan="2">KAMIS<br />16/05/2019</td>
                <td>1</td>
                <td>Matematika (W)</td>
                <td><a class="btn btn-danger text-white btn-sm">NO</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Pendidikan Agama Islam</td>
                <td><a target="_blank" class="btn btn-danger text-white btn-sm">NO</a></td>
            </tr>
            <tr>
                <td rowspan="2">JUM'AT<br />17/05/2019</td>
                <td>1</td>
                <td>Fisika</td>
                <td><a target="_blank" class="btn btn-danger text-white btn-sm">NO</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Penjaskes</td>
                <td><a target="_blank" class="btn btn-danger text-white btn-sm">NO</a></td>
            </tr>
            <tr>
                <td rowspan="2">SENIN<br />20/05/2019</td>
                <td>1</td>
                <td>LM. Ekonomi</td>
                <td><a target="_blank" class="btn btn-danger text-white btn-sm">NO</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Prakarya & KWRU</td>
                <td><a target="_blank" class="btn btn-danger text-white btn-sm">NO</a></td>
            </tr>
            <tr>
                <td rowspan="2">SELASA<br />21/05/2019</td>
                <td>1</td>
                <td>Biologi</td>
                <td><a class="btn btn-danger text-white btn-sm">NO</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>PPKn</td>
                <td><a class="btn btn-danger text-white btn-sm">NO</a></td>
            </tr>
            <tr>
                <td rowspan="2">RABU<br />22/05/2019</td>
                <td>1</td>
                <td>Kimia</td>
                <td><a class="btn btn-danger text-white btn-sm">NO</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Bahasa Jawa</td>
                <td><a class="btn btn-danger text-white btn-sm">NO</a></td>
            </tr>
            <tr>
                <td rowspan="2">KAMIS<br />23/05/2019</td>
                <td>1</td>
                <td>Matematika (M)</td>
                <td><a class="btn btn-danger text-white btn-sm">NO</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>No Schedule Detected</td>
                <td><a class="btn btn-danger text-white btn-sm">NO</a></td>
            </tr>
        </table>
        <p class="text-center">Keterangan:
            [Jam ke 1 = 07.30 - 09.00]
            [Jam ke 2 = 09.30 - 11.00]
        </p>
        <h2 class="text-center">Exam will be scheduled at <h2 class="text-center" id="startdate"></h2></h2>
        <script>
            var Start = new Date();
            document.getElementById("startdate").innerHTML = Start;
        </script>
        <p class="text-center">N.B You may see some bugs as a feature</p>
    </div>
        </div>
    </body>
</main>