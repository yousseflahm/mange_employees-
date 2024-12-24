<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f8;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
            padding: 40px;
            max-width: 1200px;
            width: 100%;
        }

        .card {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
        }

        h1 {
            font-size: 22px;
            margin-bottom: 15px;
            color: #333;
            font-weight: bold;
        }

        a {
            display: inline-block;
            background-color: #4e73df;
            color: #fff;
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 50px;
            font-weight: 600;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        a:hover {
            background-color: #2e59d9;
            transform: scale(1.05);
        }

        a:focus {
            outline: none;
        }

        /* Small screen responsiveness */
        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }

            h1 {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="card">
            <h1>Aller à Formulaire</h1>
            <a href="/create">Employé</a>
        </div>

        <div class="card">
            <h1>Aller à Table</h1>
            <a href="/index">Employé</a>
        </div>

        <div class="card">
            <h1>Aller à Formulaire</h1>
            <a href="/createEmT">Employé-Tâche</a>
        </div>

        <div class="card">
            <h1>Tâches et Employé</h1>
            <a href="/tableEmpTache">Tâches avec Employé</a>
        </div>

        <div class="card">
            <h1>Employés sans Tâche</h1>
            <a href="/employe_0_tache">Employé</a>
        </div>
        <div class="card">
            <h1>Form De  Tache </h1>
            <a href="/createTache">Tache</a>
        </div>
        <div class="card">
            <h1>table des taches </h1>
            <a href="/tableTache">taches</a>
        </div>
    </div>

</body>
</html>
