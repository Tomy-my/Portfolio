<?php 
    include('header.php')
?>


<style>
    body {
        background-image: url('./images/12.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
    }
</style>


<div class="welcome">
    <div class="titre"> 
        <h2>Welcome </h2>
        <h4> To My </h4>
        <h1> Portfolio </h1>
    </div>
    <div class="description">
        <p>
        Vous trouverez grâce à l'aide du menu ainsi qu'aux deux boutons ci-dessous, toutes les informations importantes me concernant :<br> Projet web, C.V., etc..        
        </p>
    </div>
        <button type="text" class="redirection1" onclick="window.location.href = 'project.php';">Mes projets</button>
        <button type="text" class="redirection2" onclick="window.location.href = 'cv.php';">Mon c.v</button>
</div>

</body>
</html>