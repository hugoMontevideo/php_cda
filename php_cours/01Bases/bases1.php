<?php


/**
 * generer un joli affichage debug
 * @param array $maVar à debuger avec var_dump
 * @return void
 */
function debug($var):void
{
    echo '<pre>';
     print_r($var);
     echo '<pre>';   
 } 
?>
<style>
    table{
        border: 3px solid black;
    }
    td {
        border: 1px solid black;

    }
</style>
<?php  
 


    $societe=[
        'France'=>[
                'Paris'=>[

                        ['nom du site'=>'idf',
                        'nombre d\'employes',
                        'employes'=>[
                                        [
                                        'nom'=>'jean',
                                        'adresse'=>[
                                                'numero'=>'1'
                                        ]

                                    ]
                        ]
                        ],
                        ['nom du site'=>'idf',
                            'nombre d\'employes',
                            'employes'=>[
                                [
                                    'nom'=>'jean',
                                    'adresse'=>[
                                        'numero'=>'1'
                                    ]

                                ]
                            ]

                        ]
                    ]
        ]

    ];

    debug($societe['France']['Paris'][0]); 

?>

<table>
  <?php foreach($societe as $pays => $villes): ?>
    <thead><tr><th><?= $pays ?></th></tr></thead>
    <tbody>
        <?php foreach($villes as $ville => $sites): ?>
            <tr><td><?= $ville ?></td></tr>
            <tr>
                <?php foreach($sites as $value): ?>
                    <td><?= $value['nom du site'] ?></td>
                <?php endforeach ?> 
            </tr>    
            
            <tr>
                <?php foreach($value['employes'] as $key=> $value1): ?>             
                    <td><?= 'nom : ' .$value1['nom'] ?></td>
                <?php endforeach ?>   
            </tr>
            <tr>
                <?php foreach($value['employes'] as $key=> $value2): ?>             
                    <td><?= 'adresse : numero ' .$value2['adresse']['numero']?></td>
                            <?php var_dump($value2['adresse']['numero']) ?>
                <?php endforeach ?>   
            </tr>       
        <?php endforeach ?>          
    </tbody>
  <?php endforeach ?>                                    
</table>