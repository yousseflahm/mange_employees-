<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employe List</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 1000px;
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            overflow: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 1rem;
            color: #495057;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #dee2e6;
            word-wrap: break-word;
        }

        th {
            background-color: #007bff;
            color: white;
            text-transform: uppercase;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #d6e9f7;
        }

        a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            color: #0056b3;
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            th, td {
                font-size: 0.9rem;
                padding: 10px;
            }

            .container {
                padding: 15px;
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1 style="text-align: center; color: #495057;">List of Employes</h1>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Sexe</th>
                    <th>Salaire</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employes as $employe)
                <tr>
                    <td>{{$employe->id}}</td>
                    <td>{{$employe->nom}}</td>
                    <td>{{$employe->prenom}}</td>
                    <td>{{$employe->sexe}}</td>
                    <td>{{$employe->salaire}}</td>
                    <td>
                        <a href="supprime/{{$employe->id}}">Supprime</a> | 
                        <a href="modifier/{{$employe->id}}">Modifier</a> | 
                        <a href="taches/{{$employe->id}}">Liste des Taches</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
