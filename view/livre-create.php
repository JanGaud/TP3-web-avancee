{% extends "template.html.twig" %}


{% block page %}

<div class="d-flex justify-content-center">
<div class="card" style="width: 30rem;">
<div class="card-header text-center bg-primary text-white">
    Ajout d'un nouveau livre
</div>
  <div class="card-body">
    <form action="{{ path }}livre/store" method="post">
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="txt" id="titre" class="form-control" name="titre" />
            <label class="form-label" for="titre">Titre du Livre</label>
        </div>
        <div class="form-outline mb-4">
            <label>Auteur
                <select name="idAuteur">
                    {% for auteur in auteurs %}
                        <option value="{{ nom_auteur }}">{{ auteur.nom_auteur }}</option>
                    {% endfor %}
                </select>
            </label>
        </div>

        <div class="form-outline mb-4">
            <input type="number" min="0" id="edition" class="form-control" name="edition" />
            <label class="form-label" for="edition">Edition du livre</label>
        </div>

        <div class="form-outline mb-4">
            <label>Maison d'edition
                <select name="idMaison">
                    {% for maison in maison_edition %}
                        <option value="{{ nom_maison_edition }}">{{ maison.nom_maison_edition }}</option>
                    {% endfor %}
                </select>
            </label>
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