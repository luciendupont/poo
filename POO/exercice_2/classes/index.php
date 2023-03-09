<?php
require_once('Employe.php');
require_once ('Magasin.php');

// Employés
$e = new Employe("dupont", "Julien", "23.10.2019", "Surfeur", 13, "Commercial", "Magasin 1");
$e2 = new Employe("bouazni", "luc", "25.03.2015", "DG", 85, "Direction", "Magasin 2");
$e3 = new Employe("guercif", "momo", "25.07.2017", "Comptable", 35, "Comptabilité", "Magasin 3");
$e4 = new Employe("lion", "simon", "13.08.2000", "Soudeur", 3, "Entretient", "Magasin 4");
$e5 = new Employe("fouache", "andre", "08.09.2020", "Animateur", 16, "Animation", "Magasin 5");

// Magasins
$mag = new Magasin("dupont", "Julien", "23.10.2019", "Surfeur", 13, "Commercial", "Magasin 1", "23 rue du fou", 86000, "Poitiers", 0 );
$mag2 = new Magasin("bouazni", "luc", "25.03.2015", "DG", 85, "Direction", "Magasin 2", "1 rue de la verdure", 67000, "Strasbourg", 1);
$mag3 = new Magasin("guercif", "momo", "25.07.2017", "Comptable", 35, "Comptabilité", "Magasin 3", "1 rue de la verdure", 44000, "Nantes", 1);
$mag4 = new Magasin("lion", "simon", "13.08.2000", "Soudeur", 3, "Entretient", "Magasin 4", "1 rue de la verdure", 75010, "Paris", 0);
$mag5 = new Magasin("fouache", "andre", "Amine", "08.09.2020", "Animateur", 16, "Animation", "Magasin 5", "1 rue de la verdure", 60000, "Beauvais", 1);

echo ($e);
$mag->prime();
echo ($e2);
$mag2->prime();
echo ($e3);
$mag3->prime();
echo ($e4);
$mag4->prime();
echo ($e5);
$mag5->prime();







