{% extends "template.html.twig" %}


{% block page %}
<div class="container">
<h2 class="text-center p-2">Repertoire de livres</h2>
<table class="table table-striped">
<thead>

    <tr>
      <th scope="col">Utilisateur</th>
      <th scope="col">Date de connexion</th>
      <th scope="col">Adresse IP</th>
      <th scope="col">Status de connection</th>
    </tr>
  </thead>
  <tbody>
        
        {% for log in logSession %}
            <tr>          
            <td>{{ log.nom_client }}</td>
            <td>{{ log.date }}</td>
            <td>{{ log.adresse_ip }}</td>
            <td>{{ log.connection }}</td>
            </tr>
        {% endfor %}
</tbody>
</table>
</div>

{% endblock %}
    