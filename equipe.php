<!DOCTYPE html>
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8"/>
    <title>Ecole de la 2e Chance Grand Hainaut - Présentation de l'équipe</title>
    <?php include './includes/header_meta_link.html'; ?>
    <link rel="stylesheet" media="screen" type="text/css" href="css/equipe.css">
</head>


<body>
<!-- > START < Nav -->
<?php include './includes/navigation.html'; ?>
<!-- > END < Nav -->

<!-- > START < CONTENT BLOC -->
<div id="content" class="row">
    <div class="large-12 columns">
        <h3 class="page_title">L'équipe de l'E2C Grand Hainaut</h3>

        <?

        include 'employees_list.php';

        echo '<center><table class="hide-for-small">';

        $i = 0;
        foreach ($employees as $employee) {
            if ($i % 5 == 0)
                echo '<tr valign="top">';

            echo '<td class="position_avatar" >
                        <div>
                            <img src="images/equipe/' . $employee->img . '" title="'. $employee->fullName .'" />
                        </div>
                        <div>
                            <strong class="bold">' . $employee->job . '</strong>
                            <br/>' . $employee->fullName . '
                        </div>
                  </td>';

            $i++;
            if ($i % 5 == 0)
                echo '</tr>';
        }

        echo '</table></center>';
        echo '<center><table class="show-for-small">';

        $i = 0;
        foreach ($employees as $employee) {
            if ($i % 3 == 0)
                echo '<tr valign="top">';

            echo '<td class="position_avatar" >
                        <div>
                            <img src="images/equipe/' . $employee->img . '.png" title="'. $employee->fullName .'" />
                        </div>
                        <div>
                            <strong class="bold">' . $employee->job . '</strong>
                            <br/>' . $employee->fullName . '
                        </div>
                  </td>';

            $i++;
            if ($i % 3 == 0)
                echo '</tr>';
        }

        echo '</table></center>';

        ?>
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
