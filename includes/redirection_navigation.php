<?php
/* on vérifie que l'information "menu_destination" existe ET qu'elle n'est pas vide : */
if ($_POST['menu_destination'] == "batiment_h" ) 
 {
 	{header("Location: ../vitrine-batiment-h.php");}
 } 
  else if ($_POST['menu_destination'] == "batiment_f" ) 
 {
 	{header("Location: ../vitrine-batiment.php");}
 } 
else if ($_POST['menu_destination'] == "hotellerie_h" ) 
 {
 	{header("Location: ../vitrine-hotellerie-h.php");}
 } 
 else if ($_POST['menu_destination'] == "hotellerie_f" ) 
 {
 	{header("Location: ../vitrine-hotellerie.php");}
 } 
else if ($_POST['menu_destination'] == "sante_h" ) 
 {
 	{header("Location: ../vitrine-sante-h.php");}
 } 
 else if ($_POST['menu_destination'] == "sante_f" ) 
 {
 	{header("Location: ../vitrine-sante.php");}
 } 
else if ($_POST['menu_destination'] == "industrie_h" ) 
 {
 	{header("Location: ../vitrine-industrie-h.php");}
 } 
 else if ($_POST['menu_destination'] == "industrie_f" ) 
 {
 	{header("Location: ../vitrine-industrie.php");}
 } 
else if ($_POST['menu_destination'] == "commercial_h" ) 
 {
 	{header("Location: ../vitrine-commercial-h.php");}
 } 
 else if ($_POST['menu_destination'] == "commercial_f" ) 
 {
 	{header("Location: ../vitrine-commercial.php");}
 } 
?>