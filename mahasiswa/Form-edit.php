<?php
include 'koneksi.php';

$id_mhs = $_GET['id_mhs'];

$query = "SELECT * FROM mahasiswa WHERE id_mhs='$id_mhs'";
$mahasiswaQuery = mysqli_query($koneksi, $query);
$row = mysqli_fetch_array($mahasiswaQuery);

function active_radio_button($value, $input)
{
    $result = $value == $input ? 'checked' : '';
    return $result;
}
?>

<html>

<head>
    <title>Membuat from inputan data</title>
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
        <a style="text-decoration:none; color:white" href="Home.php">|  Home  </a>
        <a style="text-decoration:none; color:white" href="Index.php">|  Tabel  |</a>
    </nav>
    <form action="update.php" method="post">
        <input type="hidden" value="<?php echo $row ['id_mhs'] ?>" name="id_mhs">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" value="<?php echo $row['nim'] ?>" onkeyup="isi_otomatis()" name="nim"></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" value="<?php echo $row['nama'] ?>" name="nama"></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="L" <?php echo active_radio_button("L", $row['jenis_kelamin']) ?>>Laki Laki
                    <input type="radio" name="jenis_kelamin" value="P" <?php echo active_radio_button("P", $row['jenis_kelamin']) ?>>Perempuan
                </td>
            </tr>
            <tr><td>JURUSAN</td><td>
                    <select name="jurusan">
                        <?php echo "<option value=" . $row['jurusan'] . ">" ."</option>" ?>
                        <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                        <option value="TEKNIK MESIN">TEKNIK MESIN</option>
                        <option value="TEKNIK KIMIA">TEKNIK KIMIA</option>
                    </select>
            </td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td>
                <input type="text" value="<?php echo $row['alamat'] ?>" name="alamat">
            </td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit">SIMPAN</button></td>
        </tr>
        </table>
    </form>
    <footer>
        <p>Don't mind me, Just Footer</p>
    </footer>
</body>
</html>