
<?php //$mois = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre']; 

// for  ($i=0; $i<count($mois); $i++): ?>
    <option><?php // $mois[$i] ?></option>
<?php // endfor ?>
<!-- <style>
    table{
        border-collapse: collapse;
        border: 3px solid black;
        box-shadow: 0 0 5px #2f312fb5;
   
    }
    td{
        border: 1px solid black;
        padding: 10px;
    }
    td:nth-child(even){
        background-color: #4bc653b5;
    }
    tr:nth-child(even){
        background-color: #4bc653b5;
    }
</style> -->

<!-- <table>
    <?php // for ($ii=0; $ii<10; $ii++): ?>
        <tr>
            <?php //for ($i=0; $i<10; $i++): ?>
            <td><?php // $ii.$i; ?></td>
            <?php // endfor ?>          
        </tr>
    <?php // endfor ?>          
</table> -->

<?php //$tableau = ['un','deux', 'trois'];

// function debug($var){
//    echo '<pre>';
//     var_dump($var);
//     echo '<pre>';   
// } 
// $tableau[]='quatre';

// debug($tableau[3]);

$couleur = [
	'j' => 'jaune',
    'b' => 'bleu',
	'v' => 'vert'
];


$tab = ['Pologne','France', 'Espagne', 'Norvège'];
 for ($i=0; $i<count($tab); $i++): ?>

 <p style="font-size: 1.5em; font-family:Arial"><?php echo $i. ' - '. $tab[$i] ?></p>

 <?php endfor;
 
 
 foreach($couleur as $key => $value){
    echo $key. " - " .$value. '<br>';
 }
 
 $contact = [
    'nom' => 'machado',
    'prenom' => 'hugo',
    'email' => 'hugo@gmail.com',
    'tph' => '0606060606'
 ];

 foreach($contact as $key => $value): ?>
    <?php if($key == 'nom'): ?>
    <p><?php echo '- '. strtoupper($value); ?></p>
    <?php elseif($key == 'prenom'): ?>
    <h3><?php echo '- '. ucfirst($value); ?></h3>
    <?php else: ?>
    <p><?php echo '- '. $value; ?></p>
    <?php endif ?>
 <?php endforeach ?>

<h1> Tableaux multidimensionnels </h1>
 <?php 
 $couleur = [
	'j' => 'jaune',
    'b' => 'bleu',
	'v' => 'vert'
]; 

$contacts = [
    $contact = [
        'nom' => 'machado',
        'prenom' => 'hugo',
        'email' => 'hugo@gmail.com',
        'tph' => '0606060606'
    ],
    $contact = [
        'nom' => 'mireille',
        'prenom' => 'cathy',
        'email' => 'cathy@gmail.com',
        'tph' => '0è06060606'
     ]
];

$contacts=array(
    array(
        'prenom' => 'cesaire',
        'nom' => 'desaulle',
        'email' => 'cezdesaulle.evogue@gmail.com',
        'telephone' => '0608080333'
    ),
array(
    'prenom' => 'toto',
    'nom' => 'desaulle',
    'email' => 'cezdesaulle.evogue@gmail.com',
    'telephone' => '0608080333'
),
array(
    'prenom' => 'jacques',
    'nom' => 'desaulle',
    'email' => 'cezdesaulle.evogue@gmail.com',
    'telephone' => '0608080333'
)

);


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

// foreach($societe as $key => $value){
//     print_r($value);
// }



echo $societe['France']['Paris'][0]['employes'][0]['adresse']['numero'] . '*';




?>
   
 
 





