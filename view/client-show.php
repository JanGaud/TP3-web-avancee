<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <p><strong>Nom : </strong>{{ client.nom_client }}</p>
        <p><strong>Adresse : </strong>{{ client.adresse }}</p>
        <p><strong>Courriel : </strong>{{ client.client_courriel }}</p>
        <p><a href="{{ path }}client/edit/{{client.id}}">Modifier</a></p>
    </main>
</body>
</html>

