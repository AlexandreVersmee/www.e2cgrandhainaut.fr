<!DOCTYPE html>
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8"/>
    <title>Ecole de la 2e Chance Grand Hainaut - Quiz</title>
    <?php include './includes/header_meta_link.html'; ?>
	<link rel="stylesheet" media="screen" type="text/css" href="css/jquery.lightbox.css" />
    <?php
    if ((strpos($_SERVER["HTTP_USER_AGENT"], 'Firefox') !== false))
        echo '<link rel="stylesheet" media="screen" type="text/css" href="css/quizz_ie.css" >';
    else if ((strpos($_SERVER["HTTP_USER_AGENT"], 'MSIE') !== false))
        echo '<link rel="stylesheet" media="screen" type="text/css" href="css/quizz_ff.css" >';
    else
        echo '<link rel="stylesheet" media="screen" type="text/css" href="css/quizz_gc.css" >';
    ?>
	<!-- > START < LIGHT BOX INCLUDES -->
	<!--[if IE 6]>
	<link rel="stylesheet" type="text/css" href="css/jquery.lightbox.ie6.css" /><![endif]-->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.lightbox.min.js"></script>
	<script type="text/javascript">jQuery(document).ready(function ($) {
            $('.lightbox').lightbox();
        });</script>
	<!-- > END < LIGHT BOX INCLUDES -->
</head>


<body>
<!-- > START < Nav -->
<?php include './includes/navigation.html'; ?>
<!-- > END < Nav -->

<!-- > START < CONTENT BLOC -->
<div id="content" class="row">
    <div class="large-12 columns">
        <h3 class="page_title">Quiz pour découvrir si vous avez le profil E2C !</h3>
        <div class="hide-for-small" id="question">

            <div class="question_1" id="question_1">
                L'<strong>Ecole</strong> de la Deuxième
                <br/>Chance Grand Hainaut
                <br/>recrute des jeunes âgés
                <br/>de 18 à 25 ans ?
                <br/>
                <a href="images/quizz/questionnaire/true_q1.png" class="lightbox true_false">Vrai</a> &nbsp;&nbsp;
                <a href="images/quizz/questionnaire/false_q1.png" class="lightbox true_false">Faux</a>
			</div>

			<div id="question_2">
				Un diplôme est nécessaire
				<br />pour intégrer l'<strong>Ecole</strong> de
				<br />la Deuxième Chance
				<br />Grand Hainaut ?
				<br />
				<a href="images/quizz/questionnaire/false_q6.png" class="lightbox true_false">Vrai</a> &nbsp;&nbsp;
				<a href="images/quizz/questionnaire/true_q6.png" class="lightbox true_false">Faux</a>
			</div>

			<div id="question_3">
				Je suis obligé(e) d'attendre
				<br />le mois de septembre pour
				<br />rentrer à l'<strong>Ecole</strong> de la
				<br />Deuxième Chance
				<br />Grand Hainaut ?
				<br />
				<a href="images/quizz/questionnaire/false_q2.png" class="lightbox true_false">Vrai</a> &nbsp;&nbsp;
				<a href="images/quizz/questionnaire/true_q2.png" class="lightbox true_false">Faux</a>
			</div>

			<div id="question_4">
				Il faut aussi de l'expérience,
				<br />voire un projet professionnel
				<br />défini pour venir à l'<strong>Ecole</strong>
				<br />de la Deuxième Chance
				<br />Grand Hainaut ?
				<br />
				<a href="images/quizz/questionnaire/false_q5.png" class="lightbox true_false">Vrai</a> &nbsp;&nbsp;
				<a href="images/quizz/questionnaire/true_q5.png" class="lightbox true_false">Faux</a>
			</div>

			<div id="question_5">
				Je vais pouvoir faire des
				<br /><strong>stages</strong> et rencontrer des
				<br />entreprises à l'<strong>Ecole</strong> de
				<br />la Deuxième Chance
				<br />Grand Hainaut ?
				<br />
				<a href="images/quizz/questionnaire/true_q3.png" class="lightbox true_false">Vrai</a> &nbsp;&nbsp;
				<a href="images/quizz/questionnaire/false_q3.png" class="lightbox true_false">Faux</a>
			</div>

			<div id="question_6">
				Je ne ferai que des Maths
				<br />et du Français à l'<strong>Ecole</strong>
				<br />de la Deuxième Chance
				<br />Grand Hainaut ?
				<br />
				<a href="images/quizz/questionnaire/false_q4.png" class="lightbox true_false">Vrai</a> &nbsp;&nbsp;
				<a href="images/quizz/questionnaire/true_q4.png" class="lightbox true_false">Faux</a>
			</div>
		</div>

		<div class="show-for-small" id="question_mobile">
			<img class="show-for-small" src="images/quizz/background_quizz_mobile.png" />
			<div id="question_1_mob">
				L'<strong>Ecole</strong> de la Deuxième
				<br />Chance Grand Hainaut
				<br />recrute des jeunes âgés
				<br />de 18 à 25 ans ?
				<br />
				<p class="text-center"><a href="images/quizz/questionnaire/true_q1.png" class="lightbox true_false">Vrai</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="images/quizz/questionnaire/false_q1.png" class="lightbox true_false">Faux</a></p>
			</div>

			<div id="question_2_mob">
				Un diplôme est nécessaire
				<br />pour intégrer l'<strong>E2C</strong>
				<br />Grand Hainaut ?
				<br />
				<p class="text-center"><a href="images/quizz/questionnaire/false_q6.png" class="lightbox true_false">Vrai</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="images/quizz/questionnaire/true_q6.png" class="lightbox true_false">Faux</a></p>
			</div>

			<div id="question_3_mob">
				Je suis obligé(e) d'attendre
				<br />le mois de septembre pour
				<br />rentrer à l'<strong>E2C</strong> Grand
				<br />Hainaut ?
				<br />
				<p class="text-center"><a href="images/quizz/questionnaire/false_q2.png" class="lightbox true_false">Vrai</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="images/quizz/questionnaire/true_q2.png" class="lightbox true_false">Faux</a></p>
			</div>

			<div id="question_4_mob">
				Il faut aussi de l'expérience,
				<br />voire un projet professionnel
				<br />défini pour venir à l'<strong>E2C</strong>
				<br />Grand Hainaut ?
				<br />
				<p class="text-center"><a href="images/quizz/questionnaire/false_q5.png" class="lightbox true_false">Vrai</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="images/quizz/questionnaire/true_q5.png" class="lightbox true_false">Faux</a></p>
			</div>

			<div id="question_5_mob">
				Je vais pouvoir faire des
				<br /><strong>stages</strong> et rencontrer des
				<br />entreprises à l'<strong>E2C</strong>
				<br />Grand Hainaut ?
				<br />
				<p class="text-center"><a href="images/quizz/questionnaire/true_q3.png" class="lightbox true_false">Vrai</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="images/quizz/questionnaire/false_q3.png" class="lightbox true_false">Faux</a></p>
			</div>

			<div id="question_6_mob">
                Je ne ferai que des Maths
                <br/>et du Français à l'<strong>E2C</strong>
                <br/>Grand Hainaut ?
                <br/>
                <p class="text-center"><a href="images/quizz/questionnaire/false_q4.png" class="lightbox true_false">Vrai</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="images/quizz/questionnaire/true_q4.png" class="lightbox true_false">Faux</a></p>
            </div>
        </div>


        <p class="bold maj"><img src="images/icones/action_arrow.png"/>Bien joué !
            Pour vous inscrire, téléchargez et complétez la fiche suivante : <a target="_blank" href="fiches/fiche_positionnement_stagiaires.pdf"
                                                                                title="Téléchargement de la fiche d'inscription  - E2C Grand Hainaut"/>
            <img src="images/icones/pdf_32.png" title="Téléchargement de la fiche d'inscription - E2C Grand Hainaut"></a>

        </p>
        <?php include  './includes/contact_stagiaires.html' ?>

	</div>
	<span id="tothetop"></span>
</div>
<!-- > END < CONTENT BLOC -->


<!-- > START < FOOTER -->
<script src="js/jquery.js"></script>
<?php include './includes/footer.html'; ?>
<!-- > END < FOOTER -->

</body>
</html>
