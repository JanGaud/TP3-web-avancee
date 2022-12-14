{% extends "template.html.twig" %}


{% block page %}
<div class="container">
<h2 class="text-center p-2">Repertoire de livres</h2>
<table class="table table-striped">
<thead>

  {{ serveur }}

    <tr>
      <th scope="col">Titre</th>
      <th scope="col">Edition</th>
      <th scope="col">Auteur</th>
      <th scope="col">Maison d'édition</th>
    </tr>
  </thead>
  <tbody>
{% for livre in livres %}

    <tr>
      <td>{{livre.titre}}</td>
      <td>{{livre.edition}}</td>
      <td>{{livre.nom_auteur}}</td>
      <td>{{livre.nom_maison_edition}}</td>
    </tr>

{% endfor %}  
</tbody>
</table>
</div>
{% endblock %}
    
