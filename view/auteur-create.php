{% extends "template.html.twig" %}


{% block page %}

<div class="d-flex justify-content-center">
<div class="card" style="width: 30rem;">
<div class="card-header text-center bg-primary text-white">
    Inscription
</div>
  <div class="card-body">
    <form action="{{ path }}auteur/store" method="post">
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="txt" id="nom_auteur" class="form-control" name="nom_auteur" />
            <label class="form-label" for="nom_auteur">Nom de l'auteur</label>
        </div>

        <!-- Submit button -->
        <div class="mt-4 pt-2">
            <input class="btn btn-primary btn-lg" type="submit" value="Enregistrer"/>
        </div>
        </form>
        </div>
    </div>
</div>
{% endblock %}   