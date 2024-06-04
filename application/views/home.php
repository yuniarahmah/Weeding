<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz@1,9..40&family=Dancing+Script:wght@500&family=Poppins:ital,wght@0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMU5lKzDxEOMYYF2MyD3zDxyIpeF4PT9ZxJ92E4" crossorigin="anonymous">
    <style>
        .card {
            max-width: 100vw;
            max-height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            border: none;
            background-color: transparent;
            position: relative;
        }

        .card-img {
            width: 30%;
            min-height: 100vh;
            object-fit: cover;
            border-radius: 5%;
        }

        .card-text {
            position: absolute;
            top: 20%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 20px;
            font-weight: 300;
            text-align: center;
            z-index: 1;
        }

        .text {
            position: absolute;
            top: 25%;
            left: 47%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 35px;
            font-weight: 400;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            z-index: 1;
            display: inline-block;
        }

        .dancing-script {
            font-family: "Dancing Script", cursive;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
        }

        .text-overlay {
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 24px;
            font-weight: 400;
            text-align: center;
            z-index: 1;
            width: 250px;
            padding: 3.5px;
            border-radius: 10px;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
        }

        .button-container {
            position: absolute;
            top: 85%;
            bottom: 10%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #AF8F6F;
            color: #000000;
            font-size: 16px;
            font-weight: bold;
            border-radius: 20px;
            /* text-decoration: none; */
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #543310;
        }

        @media (min-width: 1200px) {
            .card-img {
                width: 30%;
                max-width: 100%;
                max-height: 85%;
                margin-top: 11%;
                margin-bottom: 11%;
            }
        }

        @media (min-width: 768px) and (max-width: 1199px) {
            .card-img {
                margin-top: 20%;
                margin-bottom: 20%;
                width: 30%;
            }
        }

        @media (max-width: 767px) {
            .card-img {
                margin: auto;
                width: 100%;
                height: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <img src="https://cms.dailysocial.id/wp-content/uploads/2023/04/Prewedding-Outdoor-onethreeonefourcom.jpg" class="card-img" alt="...">
            <p class="card-text">The Wedding Of</p>
            <h1 class="text dancing-script whitespace-nowrap">Nurul And Arif</h1>
            <div class="card text-overlay">
                <p style="text-align: center; font-size: large; ">Kepada Yth : <br>
                    <i>Bapak/Ibu/Saudara/i</i>
                </p>
                <p style="text-align: center; font-weight: bold; font-size: large; "> <i>AZZA</i></p>
                <p style="text-align: center; font-size: large; ">Di Tempat</p>
            </div>
            <div class="button-container">
                <button name="submit" type="submit" class="button"> <i class="fa-solid fa-envelope-open"></i> Open Invitation </button>
            </div>
        </div>
    </div>
</body>

</html>
<!-- fhjhjkgjhghj -->