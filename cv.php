<?php $title = "C.V"; 

    include('header.php')
?>

<style>
    body {
        background-image: url('./images/13.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
    }
</style>
<div class="container_cv">
    <div class="little_container_cv">
        <div class="experience">
            <h1>Mon expérience professionnelle <br>dans le<br> domaine du web</h1>
            <div class="little_exp">
                <div class="exp1">
                        <div class="date1">
                        <h3>Stage de découverte</h3>
                        <h2>Access code school <br> <span>58 000</span> Nevers
                        </div>
                        <div class="info1">
                            <h3>Janv. <span>2021</span></h3>
                            <h4><span>2</span> semaines</h4>
                        </div>
                    <div class="liste1">
                        <ui>
                            <li>Programmation</li>
                            <li>Découverte du langages <span>HTML</span> & <span>CSS</span></li>
                            <li>Intégration d'une maquette Photoshop</li>
                        </ui>
                    </div>
                    <div class="supp1">
                        <p>
                            Dès mon arrivée on m'a fait plonger dans OpenClassRoom afin de comprendre les bases du <span>HTML</span> & <span>CSS</span>.
                            <br>Ensuite j'ai dù intégrer une maquette photoshop en <a href="#">site web</a> (maquette choisie par moi-même).
                        </p>
                    </div>
                </div>
                <div class="exp2">
                        <div class="date2">
                            <h3>Validation du projet</h3>
                            <h2>Access code school <br> <span>58 000</span> Nevers
                        </div>
                        <div class="info2">
                            <h3>Févr. <span>2021</span></h3>
                            <h4><span>2</span> semaines</h4>
                        </div>
                    <div class="liste2">
                        <ui>
                            <li>Découverte du langage <span>PHP</span></li>
                            <li>Accroître les bases en <span>HTML</span> & <span>CSS</span></li>
                            <li>Développer un blog personnel</li>
                        </ui>
                    </div>
                    <div class="supp2">
                        <p>
                            Pour mon deuxième stage, Mr. Erwann Le Gall ma donné comme objectif de réaliser un blog en <span>PHP</span> avec une page de connexion 
                            donnant accès à une page administrateur qui sert à ajouter du contenu pour allimenter mon<br> <a href="#">blog photographie</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="sp_1"></div>
        <div class="tomy">
            <div class="coordonne">
                <h1> Tomy SOTTY</h1>
                <h3>Tomy.vdtlj<span>@</span>gmail.com</h3>
                <h3><span>58 000</span> Nevers</h3>
                <div class="permis">
                    <div class="info_permis"> Permis B <span>✓</span></div>
                    <div class="image_permis"> </div>
                </div>
                <div class="ecole"> </div>
            </div>
            <div class="contact1-pic js-tilt" data-tilt>
				<img src="./images/projet.png" alt="IMG">
			</div>
            <div class="qualites">
                <div class="qualites_1">
                    <h1>Qualités</h1>
                    <h3>Persévérance :</h3>
                    <div class="perseverance">
                        <div class="slide_perseverance">90%</div>
                    </div>
                    <h3>Curiosité :</h3>
                    <div class="curiosite">
                        <div class="slide_cursiosite">80%</div>
                    </div>
                    <h3>Minutie :</h3>
                    <div class="minutieux">
                        <div class="slide_minutieux">80%</div>
                    </div>
                </div>
                <div class="qualites_2">
                    <h3>Logique :</h3>
                    <div class="logique">
                        <div class="slide_logique">75%</div>
                    </div>
                    <h3>Autonomie :</h3>
                    <div class="autonomme">
                        <div class="slide_autonomme">70%</div>
                    </div>
                    <h3>Attentif :</h3>
                    <div class="ecoute">
                        <div class="slide_ecoute">80%</div>
                    </div>
                </div>
            </div>
            <div class="competences">
                <div class="competences_1">
                <h1>Compétences</h1>
                    <h3>HTML :</h3>
                    <div class="html">
                        <div class="slide_html">90%</div>
                    </div>
                    <h3>CSS :</h3>
                    <div class="css">
                        <div class="slide_css">85%</div>
                    </div>
                    <h3>JavaScript :</h3>
                    <div class="js">
                        <div class="slide_js">5%</div>
                    </div>
                </div>
                <div class="competences_2">
                    <h3>PHP :</h3>
                    <div class="php">
                        <div class="slide_php">20%</div>
                    </div>
                    <h3>Word :</h3>
                    <div class="word">
                        <div class="slide_word">75%</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<script src="js/jquery/jquery-3.2.1.min.js"></script>
<script src="js/tilt/tilt.jquery.min.js"></script>

<?php 
    include('footer.php')
?>