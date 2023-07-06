<?php
if (isset($_SESSION["valide"]) and (isset($_GET["deconnection"]))) {
    session_destroy();
}
include('./inc_components/head.php'); ?>

<!-- <div id="top"></div> -->

<!-- Header -->
<?php include('./inc_components/header.php') ?>

<!--Contenu-->
<main>

    <?php
    if (isset($_GET["article"])) {
        if ($_GET["article"] == "bts-sio") {
            include("./pages/bts-sio.php");
        }
        if ($_GET["article"] == "profil") {
            include("./pages/profil.php");
        }
        if ($_GET["article"] == "veille") {
            include("./pages/veille.php");
        }
        if ($_GET["article"] == "projets") {
            include("./pages/projets.php");
        }
        if ($_GET["article"] == "experiences") {
            include("./pages/xp.php");
        }
        if ($_GET["article"] == "stage-kayetanna") {
            include("./pages/stage-kayetanna.php");
        }
        if ($_GET["article"] == "contact") {
            include("./pages/contact.php");
        }
        if ($_GET["article"] == "acces-prive") {
            include("./pages/acces-prive.php");
        }
        if ($_GET["article"] == "zone-prive") {
            include("./pages/zone-prive.php");
        }
    } else {
        include("./pages/profil.php");
    }
    ?>

</main>
<!-- footer -->
<?php include('./inc_components/footer.php') ?>
</body>

</html>