<!-- Page non utilisée -->

<!--Contenu-->
<div class="accueil">
    <div class="accueil-name">
        <h1>Bonjour, je m'appelle </h1>
        <p class="typewriter-name" id="typewriterName"></p>
        <div class="accueil-resume">
            <p>Etudiante en BTS <span class="important-word">S</span>ervices <span class="important-word">I</span>nformatiques aux <span class="important-word">O</span>rganisations,<br />
                option <span class="important-word">S</span>olutions <span class="important-word">L</span>ogicielles et <span class="important-word">A</span>pplications <span class="important-word">M</span>étiers</p>
        </div>
    </div>
    <button onclick="window.location.href='pages/principal.php';" class="accueil-button">
        &#139; entrer &#155;
    </button>
</div>

<script>
    let i = 0;
    let txt = "Ségolène Ganzin"; /* The text */
    let speed = 100; /* The speed/duration of the effect in milliseconds */

    function typeWriter() {
        if (i < txt.length) {
            document.getElementById("typewriterName").innerHTML += txt.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
        }
    }
    if (document.readyState === "complete") {
        typeWriter();
    } else {
        document.addEventListener("DOMContentLoaded", function() {
            typeWriter();
        });
    }
</script>