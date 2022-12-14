{% extends "template.html.twig" %}


{% block page %}
<div class="container">
<h2 class="text-center p-2">Repertoire des auteurs</h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nom des auteurs</th>
    </tr>
  </thead>
  <tbody>
{% for auteur in auteurs %}

    <tr>
      <td>{{auteur.nom_auteur}}</td>
    </tr>

{% endfor %}  
</tbody>
</table>
</div>
{% endblock %}
    
