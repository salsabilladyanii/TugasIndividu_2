<!--Nama   : Salsabilla Putri Dyani-->
<!--NIM    : 119140065-->
<!--Kelas  : Pemrograman Web RC-->

<!DOCTYPE html>
<html>
    <header
        <meta charset="UTF-8">
        <title>"Pendaftaran UKM ITMI</title>
        <style type="text/css">
            .container {
                width: 65%;
                margin: auto;
                background-color: #0f221c87;
                color: black;
            }
            .tulisan {
                text-align: center;
                font-family: 'Times New Roman', Times, serif;
                font-weight: bold;
                padding-right: 20px;
            }
            table {
                margin: auto;
            }
            .table td{
                padding-bottom: 5px;
            }
            .input{
                border-radius: 70px;
            }
            .submit{
                padding: 5px 20px;
                font-family: 'Times New Roman', Times, serif;
                font-weight: bold ;
                color: black;
            }
    </style>
    </header>

    <body style="background-color: lightblue">
        <form action="getgit.php" method="GET"> 
        <div class="container">
            <div class="tulisan">
                <div class="input">
                    <div class="submit">
            <h3>Form Pendaftaran Mahasiswa </h3> 
            <table class="table">
               <td><label>Nama Lengkap : </label></td>
                <td><?php echo $_GET['nama_pendaftar'];?></td>
            <br>
            <tr>
                <td><label>NIM : </label></td>
                <td><?php echo $_GET['NIM'];?></td>
            </tr>
            <tr>
                <td><label>Program Studi : </label></td>
                <td><?php echo $_GET['program_studi'];?></td>
            </tr>
            <tr>
                <td><label>Jenis Kelamin :</label></td>
                <td><?php echo $_GET['jenis_kelamin'];?></td>
            <tr>
                <td><label> No Hp : </label> </td>
                <td><?php echo $_GET['no_hp'];?></td>
            </tr>
            <tr>
                <td><label>Capaian Tingkat Sabuk : </label></td>
                <td><?php echo $_GET['Sabuk'];?></td>
            </tr>
        </div>
            </div>
                </div>
                    </div>
        </form>
    </body>
</html>