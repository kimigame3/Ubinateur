<?php

    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    $tot = 0;
    if(isset($_POST['box'])){
        foreach($_POST['box'] as $box)
            @$tot += $box;
          

    }
    echo '<div>Total : '.$tot.'</div>';
    echo "Euros";

    /*@$box=$_POST["box"];
    @$valider=$_POST["valider"];
    if(isset($valider)){
        $cumul=0;
        foreach($box as $pbox){
            $montant_query = tep_db_query("select box, dossier, SUM(prix) 
            as montant from ventes where 
            box = '" . $pbox . "' group by dossier");
            $tot = tep_db_fetch_array($montant_query);
            echo $tot['montant'];
            $cumul=$cumul+$tot['mmontant'];
            {
                echo "<BR>Cumul=".$cumul;
            }
        }*/
       /*echo @implode($box," - ");
       echo "Euros";
    }*/



    /*if(isset($_POST["box"])){
        foreach($_POST["box"] as $check)
        {
             echo $value;
             if( !isset($checkoptions)){
                $checkoptions = $check;
            }
            else{
                $checkoptions .=",".$check;
            }
        }
       
    }
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <header>
        <a class="buttons" href="page1_1.html#p1_1">précedent</a>
    </header>
 

    <h1 id="p2_1">e-commerce</h1>

    <form action="" method="post">
        
        <div class="coches">
            

            <div class="coche">
                <input type="checkbox" name="box[]" id="box1" value="10">
                <label for="box1">0001011100010010001100101</label>    
            </div>
    
            <div class="coche">
                <input type="checkbox" name="box[]" id="box2" value="20">
                <label for="box2">0001011100010010001100101</label>    
            </div>
            <div class="coche">
                <input type="checkbox" name="box[]" id="box3" value="30">
                <label for="box3">0001011100010010001100101</label>    
            </div>
            <div class="coche">
                <input type="checkbox" name="box[]" id="box4" value="40">
                <label for="box4">0001011100010010001100101</label>    
            </div>
            <div class="coche">
                <input type="checkbox" name="box[]" id="box5" value="50">
                <label for="box5">0001011100010010001100101</label>    
            </div>
            <div class="coche">
                <input type="checkbox" name="box[]" id="box6" value="60">
                <label for="box6">0001011100010010001100101</label>    
            </div>
            <div class="coche">
                <input type="checkbox" name="box[]" id="box7" value="70">
                <label for="box7">0001011100010010001100101</label>    
            </div>
            <div class="coche">
                <input type="checkbox" name="box[]" id="box8" value="80">
                <label for="box8">0001011100010010001100101</label>    
            </div>
            <div class="coche">
                <input type="checkbox" name="box[]" id="box9" value="90">
                <label for="box9">0001011100010010001100101</label>    
            </div>
            <div class="coche">
                <input type="checkbox" name="box[]" id="box10" value="100">
                <label for="box10">0001011100010010001100101</label>    
            </div>
            <div class="coche">
                <input type="checkbox" name="box[]" id="box11" value="110">
                <label for="box11">0001011100010010001100101</label>    
            </div>
            <div class="coche">
                <input type="checkbox" name="box[]" id="box12" value="120">
                <label for="box12">0001011100010010001100101</label>    
            </div>
            

        </div>

        <div>
            <button>Valider</button>
        </div>


    </form>
    
</body>
</html>