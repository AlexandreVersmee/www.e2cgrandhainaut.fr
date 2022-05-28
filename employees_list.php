<?php

class Employee
{
    public $img;
    public $fullName;
    public $job;
}

$job = array(
    'assistante' => 'assistante pédagogique',
    'formatrice – Référente Social' => 'formatrice – Référente Social',
    'formatrice Chargée d’Accompagnement Emploi-Formation' => 'formatrice Chargée d’Accompagnement Emploi-Formation',
    'formateur' => 'formateur',
    'formatrice' => 'formatrice',
    'directrice Générale' => 'directrice Générale',
    'responsable du site d\'Anzin' => 'responsable du site d\'Anzin',
    'responsable – Coordinateur Pédagogique' => 'responsable – Coordinateur Pédagogique',
    'responsable de l\'antenne de Fourmies' => 'responsable de l\'antenne de Fourmies',
    'responsable du Site de Maubeuge' => 'responsable du Site de Maubeuge',
    'responsable Administratif et Financier' => 'responsable Administratif et Financier',
    'responsable du Site de Thiérache Vervins' => 'responsable du Site de Thiérache Vervins',
    'chargé des relations entreprises' => 'chargé des relations entreprises',
    'formatrice chargée des relations entreprises' => 'formatrice chargée des relations entreprises',
    'chargée des relations entreprises' => 'chargée des relations entreprises',
    'chargé de développement des partenariats' => 'chargé de développement des partenariats'
);

$frederique_agnieray = new Employee();
$frederique_agnieray->img = "frederique_agnieray.png";
$frederique_agnieray->fullName = "Frédérique AGNIERAY";
$frederique_agnieray->job = $job["assistante"];

$elisabeth_barant = new Employee();
$elisabeth_barant->img = "elisabeth_barant.png";
$elisabeth_barant->fullName = "Elisabeth BARANT";
$elisabeth_barant->job = $job["formatrice – Référente Social"];

$virginie_hufford = new Employee();
$virginie_hufford->img = "virginie_daubersies.png";
$virginie_hufford->fullName = "Virginie HUFFORD";
$virginie_hufford->job = $job["formatrice Chargée d’Accompagnement Emploi-Formation"];

$stephane_detourbe = new Employee();
$stephane_detourbe->img = "stephane_detourbe.png";
$stephane_detourbe->fullName = "Stéphane DETOURBE";
$stephane_detourbe->job = $job["formateur"];

$cathy_ducrocq = new Employee();
$cathy_ducrocq->img = "cathy_ducrocq.png";
$cathy_ducrocq->fullName = "Cathy DUCROCQ";
$cathy_ducrocq->job = $job["directrice Générale"];

$isabelle_freville = new Employee();
$isabelle_freville->img = "isabelle_freville.png";
$isabelle_freville->fullName = "Isabelle FREVILLE";
$isabelle_freville->job = $job["responsable du site d'Anzin"];

$david_guyot = new Employee();
$david_guyot->img = "david_guyot.png";
$david_guyot->fullName = "David GUYOT";
$david_guyot->job = $job["responsable – Coordinateur Pédagogique"];

$valerie_herbin = new Employee();
$valerie_herbin->img = "valerie_herbin.png";
$valerie_herbin->fullName = "Valérie HERBIN";
$valerie_herbin->job = $job["responsable de l'antenne de Fourmies"];

$sophie_lasne = new Employee();
$sophie_lasne->img = "sophie_lasne.png";
$sophie_lasne->fullName = "Sophie LASNE";
$sophie_lasne->job = $job["responsable du Site de Maubeuge"];

$caroline_lebon = new Employee();
$caroline_lebon->img = "caroline_lebon.png";
$caroline_lebon->fullName = "Caroline LEBON";
$caroline_lebon->job = $job["formatrice – Référente Social"];

$eric_lombard = new Employee();
$eric_lombard->img = "eric_lombard.png";
$eric_lombard->fullName = "Eric LOMBARD";
$eric_lombard->job = $job["responsable Administratif et Financier"];

$caroline_michelin = new Employee();
$caroline_michelin->img = "caroline_michelin.png";
$caroline_michelin->fullName = "Caroline MICHELIN";
$caroline_michelin->job = $job["formatrice – Référente Social"];

$amar_mokhtari = new Employee();
$amar_mokhtari->img = "amar_mokhtari.png";
$amar_mokhtari->fullName = "Amar MOKHTARI";
$amar_mokhtari->job = $job["formateur"];

$stephane_picques = new Employee();
$stephane_picques->img = "stephane_picques.png";
$stephane_picques->fullName = "Stéphane PICQUES";
$stephane_picques->job = $job["formateur"];

$vincent_pirotte = new Employee();
$vincent_pirotte->img = "vincent_pirotte.png";
$vincent_pirotte->fullName = "Vincent PIROTTE";
$vincent_pirotte->job = $job["chargé de développement des partenariats"];

$delphine_salengros = new Employee();
$delphine_salengros->img = "delphine_salengros.png";
$delphine_salengros->fullName = "Delphine SALENGROS";
$delphine_salengros->job = $job["formatrice"];

$colette_sottiaux = new Employee();
$colette_sottiaux->img = "colette_sottiaux.png";
$colette_sottiaux->fullName = "Colette SOTTIAUX";
$colette_sottiaux->job = $job["formatrice"];

$anne_therese_strady = new Employee();
$anne_therese_strady->img = "anne_therese_strady.png";
$anne_therese_strady->fullName = "Anne-Thérèse STRADY";
$anne_therese_strady->job = $job["formatrice"];

$aurelie_dubrulle = new Employee();
$aurelie_dubrulle->img = "aurelie_dubrulle.png";
$aurelie_dubrulle->fullName = "Aurélie DUBRULLE";
$aurelie_dubrulle->job = $job["formatrice"];

$marie_lanoy = new Employee();
$marie_lanoy->img = "marie-odelly_lanoy.png";
$marie_lanoy->fullName = "Marie-Odelly LANOY";
$marie_lanoy->job = $job["formatrice"];


$cyril_hostachy = new Employee();
$cyril_hostachy->img = "cyril_hostachy.png";
$cyril_hostachy->fullName = "Cyril HOSTACHY";
$cyril_hostachy->job = $job["formateur"];

$melissa_cotry = new Employee();
$melissa_cotry->img = "melissa_cotry.png";
$melissa_cotry->fullName = "Melissa COTRY";
$melissa_cotry->job = $job["assistante"];

$linda_delcourt = new Employee();
$linda_delcourt->img = "linda_delcourt.png";
$linda_delcourt->fullName = "Linda DELCOURT";
$linda_delcourt->job = $job["formatrice"];

$ambre_fayola = new Employee();
$ambre_fayola->img = "ambre_fayola.png";
$ambre_fayola->fullName = "Ambre FAYOLA";
$ambre_fayola->job = $job["formatrice – Référente Social"];

$caroline_roux = new Employee();
$caroline_roux->img = "caroline_roux.png";
$caroline_roux->fullName = "Caroline ROUX";
$caroline_roux->job = $job["responsable du Site de Thiérache Vervins"];

$celine_cordouan = new Employee();
$celine_cordouan->img = "celine_cordouan.png";
$celine_cordouan->fullName = "Céline CORDOUAN";
$celine_cordouan->job = $job["assistante"];

$melanie_bacouet = new Employee();
$melanie_bacouet->img = "melanie_bacouet.png";
$melanie_bacouet->fullName = "Mélanie BACOUET";
$melanie_bacouet->job = $job["assistante"];

$ingrid_briatte = new Employee();
$ingrid_briatte->img = "Ingrid_briatte.png";
$ingrid_briatte->fullName = "Ingrid BRIATTE";
$ingrid_briatte->job = $job["formatrice chargée des relations entreprises"];

$delphine_rouget = new Employee();
$delphine_rouget->img = "delphine_rouget.png";
$delphine_rouget->fullName = "Delphine ROUGET";
$delphine_rouget->job = $job["formatrice chargée des relations entreprises"];

$celine_chupin = new Employee();
$celine_chupin->img = "celine_chupin.png";
$celine_chupin->fullName = "Céline CHUPIN";
$celine_chupin->job = $job["formatrice chargée des relations entreprises"];

$lorelei_godbille = new Employee();
$lorelei_godbille->img = "lorelei_godbille.png";
$lorelei_godbille->fullName = "Lorelei GODBILLE";
$lorelei_godbille->job = $job["formatrice"];

$pierre_lautrie = new Employee();
$pierre_lautrie->img = "pierre_lautrie.png";
$pierre_lautrie->fullName = "Pierre LAUTRIE";
$pierre_lautrie->job = $job["formateur"];

$sabrina_merlin = new Employee();
$sabrina_merlin->img = "sabrina_merlin.png";
$sabrina_merlin->fullName = "Sabrina MERLIN";
$sabrina_merlin->job = $job["formatrice chargée des relations entreprises"];

$wendy_descourriere = new Employee();
$wendy_descourriere->img = "wendy_descourriere.png";
$wendy_descourriere->fullName = "Wendy DESCOURRIERE";
$wendy_descourriere->job = $job["formatrice"];


$colombel_laura = new Employee();
$colombel_laura->img = "colombel_laura.png";
$colombel_laura->fullName = "Laura Colombel";
$colombel_laura->job = $job["assistante"];

$employees = array($frederique_agnieray,
    $melanie_bacouet, $colombel_laura, $elisabeth_barant, $ingrid_briatte,
    $celine_chupin, $celine_cordouan, $melissa_cotry,
    $linda_delcourt, $wendy_descourriere, $stephane_detourbe, $cathy_ducrocq,
    $ambre_fayola, $isabelle_freville, $lorelei_godbille,
    $david_guyot, $valerie_herbin, $cyril_hostachy,
    $marie_lanoy, $pierre_lautrie, $sophie_lasne, $caroline_lebon, $eric_lombard,
    $sabrina_merlin, $caroline_michelin, $amar_mokhtari, $stephane_picques,
    $vincent_pirotte, $delphine_rouget, $caroline_roux, $delphine_salengros,
    $colette_sottiaux, $anne_therese_strady);

?>