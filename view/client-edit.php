<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            display: block;
            margin: 5px;
        }
    </style>
</head>
<body>
<main>
    <h2>Modifier</h2>
        <form action="{{ path }}client/update" method="post">
            <input type="hidden" name="id" value="{{ client.id }}">
            <label>Nom 
                <input type="text" name="nom" value="{{ client.nom_client}}">
            </label>
            <label>Adresse
                <input type="text" name="adresse" value="{{ client.adresse}}">
            </label>
            <label>Date de naissance
                <input type="text" name="date_de_naissance" value="{{ client.date_de_naissance}}">
            </label>
            <label>Courriel
                <input type="email" name="courriel" value="{{ client.client_courriel}}">
            </label>
            <input type="submit" value="Modifier">
        </form>
        <form action="{{ path }}client/delete" method="post">
            <input type="hidden" name="id" value="{{ client.id}}">
            <input type="submit" value="Effacer">
        </form>
    </main>
    
</body>
</html>