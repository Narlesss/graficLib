<?php

$contracts = ["TEL CAPITAL", "TEL INTERIOR","TEL LITORAL", "TEL JUNDIAÍ", "TEL PC/SC"];
$prods = ["2.50","3.10","0.54",'1.80',"2.13"];

$highProd = 0;
for($x=0; $x<count($prods); $x++ ){
   $highProd = ( $highProd <= $prods[$x] ) ? $prods[$x] :  $highProd;
}
$highProd +=1;

$porcento = [];
for($x=0; $x<count($prods); $x++ ){
    $porcento[$x] = ( 100 * $prods[$x] / $highProd );   
}






?>




<link rel="stylesheet" type='text/css' href='css/index.min.css'>


<div style='width: 500px; height: 400px; '>

    <div class='GraficArea'>

        <div class='header'>
            <div class='content'> Header do grafic </div>
        </div>

        <div class='body'>
            <div class='content'>

                <div class='vertical'>

                    <!-- <div class='labels'>
                        <div> 1.00 </div>
                        <div> <?= number_format($highProd/4,2); ?></div>
                        <div> <?= number_format($highProd/2,2); ?> </div>
                        <div> <?= number_format($highProd/2 + $highProd/3,2); ?></div>
                        <div> <?= number_format($highProd,2); ?> </div>
                    </div> -->

                <?php $i=0; ?>
                <?php foreach($contracts as $key=>$item): ?>

                    <?php $i++; ?>

                    <div class='bar-group'>
                        <div class='label'><?= $item; ?></div>
                        <div title='<?= "{$prods[$key]}pb"; ?>' class='bar g<?=$i;?>' style='
                            height:100%; 
                            background: linear-gradient(0deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) <?=$porcento[$key]?>%, rgba(255,255,255,1) <?=$porcento[$key]?>%);
                        '> <span class='label'> <?="{$prods[$key]}pb"?> </span> </div> 
                    </div> 
                    
                <?php endforeach; ?>
                    

                </div>
             

            </div>
        </div>

        <div class='footer'>
            <div class='content'> footer grafic </div>
        </div>

    </div>

</div>
