<div class="private container">
    <?php
    //-----------------------------------------TABLEAUX/CONFIG---------------------------------------------

    require("./connection-config.php"); //Require = include ; insert un bout de code PHP directement 

    //-----------------------------------------Conditions de connexion-------------------------------

    if (isset($_POST["pseudo"]) and in_array($_POST['pseudo'], $logins))    //test si existe dans l'array de config
    {
        $pseudo = $_POST["pseudo"];
        $mdp = $_POST["mdp"];

        $key = array_search($pseudo, $logins);

        if (isset($mdp) and $passwords[$key] == $mdp) {
            //-----------------------------------Affichage page HTML si mdp/login corrects-----------------------------------------
    ?>
            <!-- preuves des competences -->
            <h1>Preuves des compétences</h1>
            <div class="private__item">
                <div class="private__item--header">
                    <h3>Gérer le patrimoine informatique</h3>
                </div>
                <div class="private__item--contenu">

                    <div class="link-docs" id="react1">
                        <a href="./docs/B1-gerer_le_patrimoine_informatique.pdf" target="_blank">Preuves</a>
                    </div>

                </div>
            </div>
            <div class="private__item">
                <div class="private__item--header">
                    <h3>Répondre aux incidents et aux demandes d'assistance et d'évolution</h3>
                </div>
                <div class="private__item--contenu">
                    <div class="link-docs" id="react1">
                        <a href="./docs/B2-repondre_aux_incidents_et_aux_demandes_d_assistance_et_d_evolution.pdf" target="_blank">Preuves</a>
                    </div>
                </div>
            </div>
            <div class="private__item">
                <div class="private__item--header">
                    <h3>Développer la présence en ligne de l'organisation</h3>
                </div>
                <div class="private__item--contenu">

                    <div class="link-docs" id="react1">
                        <a href="./docs/B3-developper_la_presence_en_ligne_de_l_organisation.pdf" target="_blank">Preuves</a>
                    </div>

                </div>
            </div>
            <div class="private__item">
                <div class="private__item--header">
                    <h3>Travailler en mode projet</h3>
                </div>
                <div class="private__item--contenu">
                    <div class="link-docs" id="react1">
                        <a href="./docs/B4-travailler_en_mode_projet.pdf" target="_blank">Preuves</a>
                    </div>
                </div>
            </div>
            <div class="private__item">
                <div class="private__item--header">
                    <h3>Mettre à disposition des utilisateurs un service informatique</h3>
                </div>
                <div class="private__item--contenu">

                    <div class="link-docs" id="react1">
                        <a href="./docs/B5-mettre_a_disposition_des_utilisateurs_un_service_informatique.pdf" target="_blank">Preuves</a>
                    </div>

                </div>
            </div>
            <div class="private__item">
                <div class="private__item--header">
                    <h3>Organiser son développement professionnel</h3>
                </div>
                <div class="private__item--contenu">
                    <div class="link-docs" id="react1">
                        <a href="./docs/B6-organiser_son_developpement_professionnel.pdf" target="_blank">Preuves</a>
                    </div>
                </div>
            </div>
            <!-----------------------------------Si MDP incorrect----------------------------------------- -->
        <?php } else {
        ?>

            <div class="error-log">
                <p>Mot de passe incorrect</p>
                <a href="index.php?article=acces-prive">Recommencer</a>
            </div>

        <?php
        }
        //---------------------------------Si LOGIN incorrect-----------------------------------------
    } else {
        ?>

        <div class="error-log">
            <p>Identifiant incorrect</p>
            <a href="index.php?article=acces-prive">Recommencer</a>
        </div>

    <?php
    }
    ?>
</div>