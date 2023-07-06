<?php
if (isset($_SESSION["valide"]) and (isset($_GET["deconnection"]))) {
    session_destroy();
}
?>


<div class="container log-form">
    <form method="post" action="index.php?article=zone-prive">

        <div class="form-item">
            <label>Identifiant</label>
            <input type="text" name="pseudo">
        </div>
        <div class="form-item">
            <label>Mot de passe</label>
            <input type="password" name="mdp">
        </div>

        <button type="submit" name="submit">Valider </button>

    </form>
</div>