{% extends "template.html.twig" %}


{% block page %}

<div class="d-flex justify-content-center">
<div class="card" style="width: 30rem;">
<div class="card-header text-center bg-primary text-white">
    Ajout de Maison d`édition
</div>
  <div class="card-body">
    <form action="{{ path }}maison/store" method="post">
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="txt" id="" class="form-control" name="titre" />
            <label class="form-label" for="titre">Titre du Livre</label>
        </div>

        <div class="form-outline mb-4">
            <input type="txt" id="auteur" class="form-control" name="auteur"/>
            <label class="form-label" for="auter">Auteur du livre</label>
        </div>

        <div class="form-outline mb-4">
            <input type="number" min="0" id="edition" class="form-control" name="edition" />
            <label class="form-label" for="edition">Edition du livre</label>
        </div>

        <div class="form-outline mb-4">
            <select id="nom_maison_edition" class="form-control" name="nom_maison_edition">
                {% for nom_maison_edition in maison_edition %}
                    <option value="nom_maison_edition"> {{ maison_edition.nom_maison_edition }}</option>
                {% endfor %}
            </select>
            <label class="form-label" for="">Maison d'édition</label>
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