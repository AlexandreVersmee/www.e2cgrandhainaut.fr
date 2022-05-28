<!DOCTYPE html>
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8"/>
    <title>Ecole de la 2e Chance Grand Hainaut - Vitrine "des Talents"</title>
    <?php include './includes/header_meta_link.html'; ?>
    <?php include './includes/check_browser.php'; ?>

    <!-- > Start < Animation -->
    <script type="text/javascript" src="js/animation/jquery.js"></script>
    <script type="text/javascript" src="js/animation/ui-1.10.3-jquery-ui.js"></script>
    <!-- > End < Animation -->
</head>


<body>
<!-- > START < Nav -->
<?php include './includes/navigation.html'; ?>
<!-- > END < Nav -->


<!-- > START < CONTENT BLOC -->
<div id="content" class="row">
    <div class="large-12 columns">
        <h3 class="page_title">Nos jeunes ont du talent ... !</h3>

        <!-- > START < SELECTION PROFILS -->
        <?php include './includes/selection_profil.html'; ?>
        <!-- > END < SELECTION PROFILS -->

        <p class="title"><span class="underline"><span class="green">Santé</span> / <span class="orange">Social</span> - <span class="purple">Profil 2</span></span></p>

        <!-- > START < Notice Vitrine des talents -->
        <?php include './includes/notice_vitrine_talent.html'; ?>
        <!-- > END < Notice Vitrine des talents -->

        <div class="middl">

            <img class="main" src="images/cvtheque/background/sante-social/man.png"/>


            <table class="mover_metier metier" id="tab_metier" width="305" height="188" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td colspan="3"><img src="images/cvtheque/rubriques/metier/sante/sante_01.png" width="305" height="2" alt=""></td>
                </tr>
                <tr>
                    <td rowspan="2"><img src="images/cvtheque/rubriques/metier/sante/sante_02.png" width="2" height="186" alt=""></td>
                    <td><img onmouseover="$('#tab_metier').addClass('stopAnim');$('#metier').show('blind', 500);"
                             onmouseout="$('#tab_metier').removeClass('stopAnim');$('#metier').hide('blind', 500);"
                             src="images/cvtheque/rubriques/metier/sante/sante_03.png" width="151" height="58" alt=""></td>
                    <td rowspan="2"><img src="images/cvtheque/rubriques/metier/sante/sante_04.png" width="152" height="186" alt=""></td>
                </tr>
                <tr>
                    <td><img src="images/cvtheque/rubriques/metier/sante/sante_05.png" width="151" height="128" alt=""></td>
                </tr>
            </table>


            <table class="mover_competence competence" id="tab_competence" width="329" height="88" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td colspan="3"><img src="images/cvtheque/rubriques/competences/competences_01.png" width="329" height="28" alt=""></td>
                </tr>
                <tr>
                    <td rowspan="2" style="padding:0px; margin:0px;"><img src="images/cvtheque/rubriques/competences/competences_02.png" width="2" height="60" alt="">
                    </td>
                    <td><img onmouseover="$('#tab_competence').addClass('stopAnim');$('#competence').show('blind', 500);"
                             onmouseout="$('#tab_competence').removeClass('stopAnim');$('#competence').hide('blind', 500);"
                             src="images/cvtheque/rubriques/competences/competences_03.png" width="152" height="58" alt=""></td>
                    <td><img src="images/cvtheque/rubriques/competences/competences_04.png" width="175" height="60" alt=""></td>
                </tr>
                <tr>
                    <td><img src="images/cvtheque/rubriques/competences/competences_05.png" width="152" height="2" alt=""></td>
                </tr>
            </table>


            <table class="mover_experience experience" id="tab_experience" width="345" height="84" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td colspan="3"><img src="images/cvtheque/rubriques/experience/experiences_01.png" width="345" height="2" alt=""></td>
                </tr>
                <tr>
                    <td rowspan="2"><img src="images/cvtheque/rubriques/experience/experiences_02.png" width="192" height="82" alt=""></td>
                    <td><img onmouseover="$('#tab_experience').addClass('stopAnim');$('#experience').show('blind', 500);"
                             onmouseout="$('#tab_experience').removeClass('stopAnim');$('#experience').hide('blind', 500);"
                             src="images/cvtheque/rubriques/experience/experiences_03.png" width="151" height="58" alt=""></td>
                    <td rowspan="2"><img src="images/cvtheque/rubriques/experience/experiences_04.png" width="2" height="82" alt=""></td>
                </tr>
                <tr>
                    <td><img src="images/cvtheque/rubriques/experience/experiences_05.png" width="151" height="24" alt=""></td>
                </tr>
            </table>


            <table class="mover_mobilite mobilite" id="tab_mobilite" width="356" height="190" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td colspan="3"><img src="images/cvtheque/rubriques/mobilite/mobilite_01.png" width="356" height="2" alt=""></td>
                </tr>
                <tr>
                    <td rowspan="2"><img src="images/cvtheque/rubriques/mobilite/mobilite_02.png" width="203" height="188" alt=""></td>
                    <td><img src="images/cvtheque/rubriques/mobilite/mobilite_03.png" width="151" height="58" alt=""
                             onmouseover="$('#tab_mobilite').addClass('stopAnim');$('#mobilite').show('blind', 500);"
                             onmouseout="$('#tab_mobilite').removeClass('stopAnim');$('#mobilite').hide('blind', 500);"></td>
                    <td rowspan="2"><img src="images/cvtheque/rubriques/mobilite/mobilite_04.png" width="2" height="188" alt=""></td>
                </tr>
                <tr>
                    <td><img src="images/cvtheque/rubriques/mobilite/mobilite_05.png" width="151" height="130" alt=""></td>
                </tr>
            </table>


            <table class="mover_centre_interet centre_interet" id="tab_centre_interet" width="331" height="171" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td colspan="3"><img src="images/cvtheque/rubriques/centres_interet/centre_interet_01.png" width="331" height="111" alt=""></td>
                </tr>
                <tr>
                    <td><img src="images/cvtheque/rubriques/centres_interet/centre_interet_02.png" width="178" height="60" alt=""></td>
                    <td><img onmouseover="$('#tab_centre_interet').addClass('stopAnim');$('#centre_interet').show('blind', 500);"
                             onmouseout="$('#tab_centre_interet').removeClass('stopAnim');$('#centre_interet').hide('blind', 500);"
                             src="images/cvtheque/rubriques/centres_interet/centre_interet_03.png" width="151" height="58" alt=""></td>
                    <td rowspan="2"><img src="images/cvtheque/rubriques/centres_interet/centre_interet_04.png" width="2" height="60" alt=""></td>
                </tr>
                <tr>
                    <td><img src="images/cvtheque/rubriques/centres_interet/centre_interet_05.png" width="151" height="2" alt=""></td>
                </tr>
            </table>


            <div id="metier">
                Agent de Service Hospitalier
            </div>
            <div id="competence">
                - Préparer le matériel, les produits nettoyants et baliser les zones glissantes<br/>
                - Nettoyer et laver les sols, les mobiliers<br/>
                - Nettoyer les sanitaires<br/>
                - Respecter les consignes et les procédures de nettoyage
            </div>
            <div id="mobilite">
                - Transports en commun
            </div>
            <div id="experience">
                - 2 Stages E2C de 15 jours<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;1 stage en EHPAD<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;1 stage en société de nettoyage
            </div>
            <div id="centre_interet">
                - Musique<br/>
                - Bénévolat aux Restos du coeur
            </div>
        </div>

        <!-- > START < CONTACTER JSP -->
        <?php include './includes/contacter_jsp.html'; ?>
        <!-- > END < CONTACTER JSP -->

    </div>
    <span id="tothetop"></span>
</div>
<!-- > END < CONTENT BLOC -->


<!-- > START < FOOTER -->
<?php include './includes/footer.html'; ?>
<!-- > END < FOOTER -->

</body>
</html>
