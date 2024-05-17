<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #333;
            text-align: center;
            font-size: 3em;
            background-image: linear-gradient(to right, #00CED1, #20B2AA, #4682B4, #4169E1, #6495ED, #9370DB, #8A2BE2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        p {
            color: #666;
            text-align: center;
        }
        footer {
            margin-top: 50px;
            text-align: center;
            color: #999;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to PUAIS</h1>
        <p>We're excited to have you here. Explore and enjoy!</p>
    </div>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> PREMIER UNIVERSITY</p>
    </footer>
</body>
</html>
