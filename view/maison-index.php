{% extends "template.html.twig" %}


{% block page %}
<div class="container">
<h2 class="text-center p-2">Repertoire des Maison d'éditions</h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nom de la maison</th>
      <th scope="col">Adresse</th>
      <th scope="col">Telephone</th>
      <th scope="col">Courriel</th>
    </tr>
  </thead>
  <tbody>

{% if session['admin']%}
  {% for maison in maisons %}
        <tr>
            <td>{{ maisons.nom_maison_edition }}</td>
            <td>{{ maisons.adresse }}</td>
            <td>{{ maisons.maison_edition_telephone }}</td>
            <td class="d-flex justify-content-between">{{ maisons.maison_edition_courriel }}
            <div> 
              <a href="#" class="btn btn-outline-dark text-center" role="button">Modifier</a>
              <a href="#" class="btn btn-outline-danger text-center" role="button">Supprimer</a>
            </div> 
            </td>  
        </tr> 
  {% endfor %}

{% else %}
    {% for maison in maisons %}
        <tr>
          <td>{{ maisons.nom_maison_edition }}</td>
          <td>{{ maisons.adresse }}</td>
          <td>{{ maisons.maison_edition_telephone }}</td>
          <td>{{ maisons.maison_edition_courriel }}</td>
        </tr>
      {% endfor %}
{% endif %}

</tbody>
</table>
</div>
{% if session['admin']%}
<div class="container text-center">
  <a href="{{ path }}maison/create" class="btn btn-outline-success text-center" role="button">Ajouter une maison</a>
</div>
{% endif %}
{% endblock %}
