<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Registro de Mascotas</title>
    <link rel="stylesheet" href="stilos.css"> 
    <style>
       
        body {
            font-family: 'Arial', sans-serif;
            background-color:rgb(245, 245, 248);
            margin: 0;
            padding: 0;
            color: #333;
        }

        
        header {
            background-color:rgb(53, 94, 141);
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        header h1 {
            font-size: 2.5em;
        }

       
        nav ul {
            display: flex;
            justify-content: center;
            padding: 0;
            list-style: none;
            margin: 10px 0;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-size: 1.2em;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav ul li a:hover {
            background-color:rgb(69, 130, 160);
        }

       
        main {
            padding: 40px;
            text-align: center;
        }

        main h2 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        
        button {
            background-color:rgb(154, 149, 126);
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1.1em;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color:rgb(21, 18, 58);
        }

       
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color:rgb(118, 122, 181);
            color: white;
        }

        tr:nth-child(even) {
            background-color:rgb(242, 230, 230);
        }
    </style>
</head>
<body>

<header>
    <h1 >Sistema de Registro de Mascotas</h1>
    <nav>
        <ul>
            <li><a href="index.php">INICIO</a></li>
            <li><a href="registrar.php">AGREGAR MASCOTA</a></li>
        </ul>
    </nav>
</header>

<main>
    <h2>Bienvenido al Sistema de Registro de Mascotas</h2>
    <p>Aquí podrás gestionar las mascotas rescatadas, agregar nuevas y más.</p>
</main>

</body>
</html>

