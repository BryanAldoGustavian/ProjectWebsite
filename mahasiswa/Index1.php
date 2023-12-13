<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
<style>
    * {
        box-sizing: border-box;
    }
    body{
        overflow-y: scroll;
    }
    header{
        background-color: #666;
        color: white;
        font-size: larger;
        text-align: center;
        padding: 30px;
    }
    nav{
        background-color:#777;
        float:inline-start;
        font-size: 20px;
        text-align: center;
        padding: 5px;
        width:100%;
        color: white;
    }
    footer{
        bottom: 0;
        position: relative;
        padding: 10px;
        background-color:#777;
        text-align: center;
        color: white;
    }
    .table {
                width: 100%;
                border: 1px solid black;
                margin-top: 10px;
            }
    </style>
    <header>Data Mahasiswa.com</header>
    <nav class="text">
        <a style="text-decoration:none; color:white" href="Home.php">|  Home  |</a>
    </nav>
    <h2>List Mahasiswa</h2>
    <table border="1" class="table">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>GENDER</th>
            <th>ALAMAT</th>
        </tr>
    
        <?php

            include 'koneksi.php';
            $wali = mysqli_query($koneksi, "SELECT * FROM wali");
            $no=1;
            foreach ($wali as $row){
                $jenis_kelamin = $row['jeniskelamin']=='p'?'Perempuan':'Laki-Laki';
                echo "<tr>
                <td>$no</td>
                <td>".$row['nama']."</td>
                <td>".$jenis_kelamin."</td>
                <td>".$row['alamat']."</td>
                </tr>";
                $no++;
            }
        ?>
    </table>
    <p></p>
    
    <a href="login-wali.php"><button> Masukkan Data Lainnya </button></a>
    <footer>
        <p>Don't mind me, Just Footer</p>
    </footer>
</body>
</html>