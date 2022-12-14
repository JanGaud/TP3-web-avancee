{% extends "template.html.twig" %}


{% block page %}
    <h2 class="text-center p-2">Mon compte</h2>
<div class="d-flex justify-content-center">
<div class="card" style="width: 30rem;">
<div class="card-header text-center bg-primary text-white">
    Connexion
</div>
    <div class="card-body">
    <form method="POST" action="{{ path }}compte/connexion">
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="email" id="form2Example1" class="form-control" name="client_courriel"/>
            <label class="form-label" for="form2Example1">Courriel</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" id="form2Example2" class="form-control" name="mdp"/>
            <label class="form-label" for="form2Example2">Mot de passe</label>
        </div>

        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4">
            <div class="col d-flex justify-content-center">
            <!-- Checkbox -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                <label class="form-check-label" for="form2Example31">Souvenez-vous de moi</label>
            </div>
            </div>

            <div class="col">
            <!-- Simple link -->
            <a href="#!">Mot de passe oublié?</a>
            </div>
        </div>

        <!-- Submit button -->
        <input type="submit" class="btn btn-primary btn-block mb-4" value="Connexion"/>

        <!-- Register buttons -->
        <div class="text-center">
            <p>Pas un membre? <a href="{{ path }}register">Creer un compte</a></p>
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