{% extends "template.html.twig" %}


{% block page %}
<div class="container">
<h2 class="text-center p-2">Repertoire de livres</h2>
<table class="table table-striped">
<thead>

    <tr>
      <th scope="col">Titre</th>
      <th scope="col">Edition</th>
      <th scope="col">Auteur</th>
      <th scope="col">Maison d'édition</th>
    </tr>
  </thead>
  <tbody>

  {% if session['admin']%}
    {% for livre in livres %}
        <tr>
            <td>{{livre.titre}}</td>
            <td>{{livre.edition}}</td>
            <td>{{livre.nom_auteur}}</td>
            <td class="d-flex justify-content-between">{{livre.nom_maison_edition}}
            <div> 
              <a href="#" class="btn btn-outline-dark text-center" role="button">Modifier</a>
              <a href="{{ path }}livre/delete" class="btn btn-outline-danger text-center" role="button">Supprimer</a>
            </div> 
            </td>  
        </tr> 
        
    {% endfor %}
    {% else %}
      {% for livre in livres %}
        <tr>
          <td>{{livre.titre}}</td>
          <td>{{livre.edition}}</td>
          <td>{{livre.nom_auteur}}</td>
          <td>{{livre.nom_maison_edition}}</td>
        </tr>
      {% endfor %}
    {% endif %} 
</tbody>
</table>
</div>
{% if session['admin']%}
<div class="container text-center">
  <a href="{{ path }}livre/create" class="btn btn-outline-success text-center" role="button">Ajouter un livre</a>
</div>
{% endif %}
{% endblock %}
    
