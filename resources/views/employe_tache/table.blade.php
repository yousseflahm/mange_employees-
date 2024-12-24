<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Tasks</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
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
        }

        h1 {
            text-align: center;
            color: #495057;
            font-size: 24px;
            margin-bottom: 20px;
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
        <h1>Employee Task Details</h1>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Sexe</th>
                    <th>Libelle</th>
                    <th>Date Debut</th>
                    <th>Date Fin</th>
                    <th>Realisation</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employes as $employe)
                    @foreach ($employe->taches as $tache)
                        <tr>
                            <td>{{ $employe->nom }}</td>
                            <td>{{ $employe->prenom }}</td>
                            <td>{{ $employe->sexe }}</td>
                            <td>{{ $tache->lib }}</td>
                            <td>{{ $tache->pivot->dateDebut }}</td>
                            <td>{{ $tache->pivot->dateFin }}</td>
                            <td>{{ $tache->pivot->realisation }}</td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
