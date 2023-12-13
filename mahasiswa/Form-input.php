<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Inputan Data</title>
</head>
<body>
<style>
    * {
        box-sizing: border-box;
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
        width: 99.24%;
        position:absolute;
        bottom: 0;
        padding: 10px;
        background-color:#777;
        text-align: center;
        color: white;
    }
    </style>
    <form method="post" action="simpan.php">

    <header>Data Mahasiswa.com</header>
    <nav class="text">
        <a style="text-decoration:none; color:white" href="Home.php">|  Home  |</a>
    </nav>
    <table>
        <tr><td>NIM</td><td><input type="text" onkeyup="isi_otomatis()" name="nim"></td></tr>
        <tr><td>NAMA</td><td><input type="text" name="nama"></td></tr>
        <tr><td>JENIS KELAMIN</td><td>
            <input type="radio" name="jenis_kelamin" value="L">Laki Laki
            <input type="radio" name="jenis_kelamin" value="P">Perempuan
        </td></tr>
        <tr><td>JURUSAN</td><td>
                <select name="jurusan" id="">
                    <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                    <option value="TEKNIK MESIN">TEKNIK MESIN</option>
                    <option value="TEKNIK KIMIA">TEKNIK KIMIA</option>
                </select>
        </td></tr>
        <tr><td>ALAMAT</td><td><input type="text" name="alamat" id=""></td></tr>
        <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
    </table>
    <footer>
        <p>Don't mind me, Just Footer</p>
    </footer>
    </form>
</body>
</html>