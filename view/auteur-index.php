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

{% if session['admin']%}
  {% for auteur in auteurs %}
        <tr>
          <td class="d-flex justify-content-between">{{auteur.nom_auteur}} 
            <div> 
              <a href="#" class="btn btn-outline-dark text-center" role="button">Modifier</a>
              <a href="#" class="btn btn-outline-danger text-center" role="button">Supprimer</a>
            </div>
          </td>    
        </tr> 

  {% endfor %}

{% else %}
  {% for auteur in auteurs %}
      
      <tr>
        <td>{{auteur.nom_auteur}}  </td>
      </tr>

  {% endfor %}
{% endif %}

</tbody>
</table>
</div>
{% if session['admin']%}
<div class="container text-center">
  <a href="{{ path }}auteur/create" class="btn btn-outline-success text-center" role="button">Ajouter un auteur</a>
</div>
{% endif %}
{% endblock %}
    
