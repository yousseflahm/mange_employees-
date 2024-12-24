<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Form</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e9ecef;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
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

        input[type="text"], input[type="hidden"] {
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 1rem;
            width: 100%;
            box-sizing: border-box;
        }

        label {
            font-size: 1rem;
            color: #495057;
            margin-right: 10px;
        }

        .radio-group {
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        .button-group {
            display: flex;
            justify-content: space-between;
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
            background-color: #17a2b8;
            color: white;
        }

        input[type="submit"]:hover {
            background-color: #138496;
        }

        input[type="reset"] {
            background-color: #f44336;
            color: white;
        }

        input[type="reset"]:hover {
            background-color: #d32f2f;
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            .container {
                padding: 20px;
                width: 100%;
            }

            input[type="submit"], input[type="reset"] {
                width: 100%;
                margin-right: 0;
                margin-bottom: 10px;
            }

            .radio-group {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Update Employe</h1>
        <form action="/update" method="post">
            @csrf

            <div>
                <input type="hidden" name="id" value="{{ $employe->id }}">
            </div>

            <div>
                <input type="text" name="nom" placeholder="Entrez le Nom" value="{{ $employe->nom }}">
            </div>

            <div>
                <input type="text" name="prenom" placeholder="Entrez le Prénom" value="{{ $employe->prenom }}">
            </div>

            <div>
                <input type="text" name="salaire" placeholder="Entrez le Salaire" value="{{ $employe->salaire }}">
            </div>

            <div class="radio-group">
                <label for="male">
                    Male:
                    <input type="radio" name="sexe" value="male" {{ ($employe->sexe === "male") ? 'checked' : '' }}>
                </label>
                <label for="female">
                    Female:
                    <input type="radio" name="sexe" value="female" {{ ($employe->sexe === "female") ? 'checked' : '' }}>
                </label>
            </div>

            <div class="button-group">
                <input type="submit" value="Update">
                <input type="reset" value="Cancel">
            </div>
        </form>
    </div>

</body>
</html>
