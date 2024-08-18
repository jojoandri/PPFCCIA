<?php

$nom = "Joël";
$age= 29;
$val= true;
$math=20;
$html=15;
$note=15;
$moyenne=($math+$html)/2;

echo "Votre moyenne est $moyenne / 20" ;
?>
<h1><?php echo "Hello<strong> world</strong>";?></h1>


<?php echo "$nom a $age ans et il a la note $note. C'est $val";?>

<p><?php 
    $sexe="femme";
    if ($sexe=="femme")
    {echo "Vous êtes une femme";}
?>
</p>
<p>
    <?php
        $sexe="homme";
        if ($sexe=="homme")
        {echo "Vous êtes un homme";}
        else{
            "Vous êtes une femme";
        }

    ?>
</p>
<p>
    <?php
        $taona=19;
        if($taona<18)
        {
            echo "Vous êtes mineur";
        }
        elseif($taona==18)
        {
            echo "Vous avez l'âge requis";
        }
        else
        {
            echo "Vous êtes majeur";
        }


    ?>
</p>
<p>
    <?php
        $note=19;
        if($note<9)
        {
            echo "Vous redoublez";
        }
        elseif($note>=9 && $note<=9.99)
        {
            echo"Vous êtes admis après délibération";
        }
        elseif($note>=10 && $note<=11.99)
        {
            echo"Vous avez la mention passable";
        }
        elseif($note>=12 && $note<=13.99)
        {
            echo"Vous avez la mention assez bien";
        }
        elseif($note>=14 && $note<=15.99)
        {
            echo"Vous avez la mention bien";
        }
        else
        {
            echo "Vous avez la mention honorable";
        }

    ?>
</p>