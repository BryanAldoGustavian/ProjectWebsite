<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<header>Data Mahasiswa.com</header>
<nav class="text">
        <a style="text-decoration:none; color:white" href="Home.php">|  Home  |</a>
</nav>
<h2>Login Page</h2>
<form action="login1.php" method="post">
    <label for="username">Nama:</label>
    <input type="text" name="nama" required><br>

    <label for="password">Alamat:</label>
    <input type="text" name="alamat" required><br>

    <label for="status">Jenis Kelamin:</label>
    <input type="radio" name="jeniskelamin" value="l">Laki Laki
    <input type="radio" name="jeniskelamin" value="p">Perempuan
    <br>
    <input type="submit" value="Login">
</form>

<footer>
        <p>Don't mind me, Just Footer</p>
</footer>
</body>
</html>