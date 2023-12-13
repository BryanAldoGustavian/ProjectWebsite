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
        <a style="text-decoration:none; color:white" href="Home.php">|  Home  </a>
    </nav>
    <h2>List Mahasiswa</h2>
    <table border="1" class="table">
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>GENDER</th>
            <th>JURUSAN</th>
            <th>ALAMAT</th>
            <th>ACTION</th>
        </tr>
    
        <?php

            include 'koneksi.php';
            $mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
            $no=1;
            foreach ($mahasiswa as $row){
                $jenis_kelamin = $row['jenis_kelamin']=='P'?'Perempuan':'Laki-Laki';
                echo "<tr>
                <td>$no</td>
                <td>".$row['nim']."</td>
                <td>".$row['nama']."</td>
                <td>".$jenis_kelamin."</td>
                <td>".$row['jurusan']."</td>
                <td>".$row['alamat']."</td>
                <td><a href='form-edit.php?id_mhs=$row[id_mhs]'>Edit</a>
                <a href='delete.php?id_mhs=$row[id_mhs]'>Delete</a>
                </td>
                </tr>";
                $no++;
            }
        ?>
    </table>
    <p></p>
    
    <a href="form-input.php"><button> Masukkan Data Lainnya </button></a>
    <footer>
        <p>Don't mind me, Just Footer</p>
    </footer>
</body>
</html>