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
            <label class="form-label" for="titre">Titre du Livre</label>
            <input type="txt" id="titre" class="form-control" name="titre" />
        </div>
        <div class="form-outline mb-4">
            <label>Auteur
                <select name="livres.Auteur_idAuteur">
                    {% for auteur in auteurs %}
                        <option value="{{ maison.Auteur_idAuteur }}">{{ auteur.nom_auteur }}</option>
                    {% endfor %}
                </select>
            </label>
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="edition">Edition du livre</label>
            <input type="number" min="0" id="edition" class="form-control" name="edition" />
        </div>

        <div class="form-outline mb-4">
            <label>Maison d'edition
                <select name="livres.Maison_edition_idMaison_edition">
                    {% for maison in maisons %}
                        <option value="{{ maison.Maison_edition_idMaison_edition }}">{{ maison.nom_maison_edition }}</option>
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