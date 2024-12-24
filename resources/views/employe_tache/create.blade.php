<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assign Task to Employee</title>
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
            background-color: #fff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }

        h1 {
            text-align: center;
            color: #495057;
            font-size: 24px;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        select, input[type="text"], input[type="date"] {
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 1rem;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"], input[type="reset"] {
            padding: 12px;
            width: 48%;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: white;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        input[type="reset"] {
            background-color: #dc3545;
            color: white;
        }

        input[type="reset"]:hover {
            background-color: #c82333;
        }

        .button-group {
            display: flex;
            justify-content: space-between;
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            .container {
                padding: 20px;
                width: 100%;
            }

            input[type="submit"], input[type="reset"] {
                width: 100%;
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Assign Task to Employee</h1>
        <form action="/ajoute_employe_tache" method="post">
            @csrf

            <!-- Employee Dropdown -->
            <select name="employe_id">
                @foreach ($employes as $employe)
                    <option value="{{ $employe->id }}">{{ $employe->nom . ' ' . $employe->prenom }}</option>
                @endforeach
            </select>

            <!-- Task Dropdown -->
            <select name="tache_id">
                @foreach ($taches as $tache)
                    <option value="{{ $tache->id }}">{{ $tache->lib }}</option>
                @endforeach
            </select>

            <!-- Date Fields -->
            <div>
                Date début: <input type="date" name="dateDebut">
            </div>
            <div>
                Date fin: <input type="date" name="dateFin">
            </div>

            <!-- Realisation Input -->
            <div>
                <input type="text" name="realisation" placeholder="Enter realization">
            </div>

            <!-- Submit and Reset Buttons -->
            <div class="button-group">
                <input type="submit" value="Ajouter">
                <input type="reset" value="Annuler">
            </div>
        </form>
    </div>

</body>
</html>
