<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Portafolio</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: white;
        }
        .container {
            text-align: center;
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            max-width: 400px;
        }
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #2575fc;
        }
        h1 {
            margin: 10px 0;
            color: #333;
        }
        p {
            color: #666;
        }
        .btn {
            display: inline-block;
            padding: 12px 25px;
            margin-top: 15px;
            text-decoration: none;
            background: #2575fc;
            color: white;
            border-radius: 25px;
            transition: background 0.3s;
        }
        .btn:hover {
            background: #6a11cb;
        }
        .contact {
            margin-top: 20px;
            background: white;
            padding: 15px;
            border-radius: 10px;
        }
        .contact h2 {
            color: #333;
        }
        .contact p {
            color: #666;
        }
        .contact a {
            color: #2575fc;
            text-decoration: none;
            font-weight: bold;
        }
        .contact a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="./images/perfil.png" alt="Foto de perfil" class="profile-img">
        <h1>Orlando Bojorquez Preciadooo</h1>
        <p>Desarrollador Web | Diseñador UX/UI | Java | Python</p>
        <a href="#" class="btn">Ver Proyectos</a>
        <div class="contact">
            <h2>Contacto</h2>
            <p>Email: orlandito.bjz@gmail.com</p>
            <p>Teléfono: +52 6621944414</p>
            <p>LinkedIn: <a href="#">linkedin.com/in/orlando</a></p>
        </div>
    </div>
</body>
</html>
