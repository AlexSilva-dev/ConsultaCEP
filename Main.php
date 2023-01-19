<?php
    include("Pessoa.php");

    $p0 = new Pessoa();
    $p0->setCep((string)"24240550");
    $p0->setNome("Alex");
    $p0->setIdade("21");
    echo $p0->__toString();

    $p1 = new Pessoa();
    $p1->setCep((string)"28890894");
    $p1->setNome("João");
    $p1->setIdade("26");
    echo '<br>' .$p1->__toString();

    $p2 = new Pessoa();
    $p2->setCep((string)"28905350");
    $p2->setNome("Luciene");
    $p2->setIdade("31");
    echo '<br>' . $p2->__toString();