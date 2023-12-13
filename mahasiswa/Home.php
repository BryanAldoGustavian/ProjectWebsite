<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="d-flex flex-column">
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
        section ::after{
            content: "";
            display: table;
            clear: both;
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
        article{
            float:left;
            width: 30%;
            height: 425px;
            background: #ccc;
            padding: 20px;
        }
        article1{
            float: left;
            width: 70%;
            height:425px;
            padding: 20px;
            background-color: #f1f1f1;
        }
        footer{
            position: absolute;
            bottom:0;
            width: 99.24%;
            padding: 10px;
            background-color:#777;
            text-align: center;
            color: white;
        }
        @media (max-width: 600px){
            article,article1 {
                width: 100%;
                height: auto;
            }
        }
    </style>
    <header>Data Mahasiswa.com</header>
    <nav class="text">
        <a style="text-decoration:none; color:white" href="Home.php">|  Home  </a>
        <a style="text-decoration:none; color:white" href="Login-wali.php">|  Wali  </a>
        <a style="text-decoration:none; color:white" href="Form-input.php">|  Mahasiswa  |</a>
        <a style="text-decoration:none; color:white" href="Login-page.php">|  Admin  |</a>
    </nav>
    <section>
        <article>
            <h1>Welcome!!</h1>
            <p>This is a website for input data from mahasiswa and save it into a list</p>
            <p>This is a website that make for student to learn how to make a website that connect into databases</p>
            <p>This website is have a some feature : </p>
            <p> 1. Connect to database so the data can be saved</p>
            <p> 2. You can edit the data and delete the data</p>
            <p> 3. Fitur clue fill if you already input it before</p>
        </article>
            
        <article1>
            <h2>This website made by :</h2>
            <p>Hi my name is Bryan Aldo Gustavian</p>
            <p>Im from SMKN 2 Surakarta and Im on the second grade right now</p>
            <p>Im from Sukoharjo,Central Java, Indonesia</p>
            <p>Im learning how to make this website from my teacher. I hope this website is good and can help me to improve my skill more. If there is a suggestion or anything about this website feel free to contact me. This  so are you get ready to started it?</p>
        </article1>
    </section>

    <footer>
        <p>Don't mind me, Just Footer</p>
    </footer>

</body>
</html>