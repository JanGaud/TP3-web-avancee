{% extends "template.html.twig" %}


{% block page %}

<div class="d-flex justify-content-center">
<div class="card" style="width: 30rem;">
<div class="card-header text-center bg-primary text-white">
    Inscription
</div>
  <div class="card-body">
    <form  action="{{ path }}Register/inscription" method="post">
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="txt" id="nom" class="form-control" name="nom_client" />
            <label class="form-label" for="nom">Nom</label>
        </div>

        <div class="form-outline mb-4">
            <input type="email" id="courriel" class="form-control" name="client_courriel"/>
            <label class="form-label" for="courriel">Courriel</label>
        </div>

        <div class="form-outline mb-4">
            <input type="date" id="anniversaire" class="form-control" name="date_de_naissance" />
            <label class="form-label" for="anniversaire">Anniversaire</label>
        </div>

        <div class="form-outline mb-4">
            <input type="txt" id="adresse" class="form-control" name="adresse"/>
            <label class="form-label" for="adresse">Adresse</label>
        </div>

        <div class="form-outline mb-4">
            <input type="tel" id="telephone" class="form-control" name="telephone" />
            <label class="form-label" for="telephone">Téléphone</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" id="mdp" class="form-control" name="mdp" />
            <label class="form-label" for="mdp">Mot de passe</label>
        </div>

        <!-- Submit button -->
        <div class="mt-4 pt-2">
            <input class="btn btn-primary btn-lg" type="submit" value="Enregistrer" />
        </div>
        <!-- Register buttons -->
        <div class="text-center">
            <p>Déja membre? <a href="{{ path }}compte">Authentifiez-vous</a></p>
            <p>Abonnez-vous avec:</p>
            <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-google"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-twitter"></i>
            </button>
        </div>
        </form>
        </div>
    </div>
</div>
{% endblock %}        
