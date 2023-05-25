<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms exercices</title>
    <style>
        body{ 
            margin:0; 
            padding:0; 
            font-family: Arial;
            box-sizing: border-box;
        }

        h2{ text-align: center; }
        .content{ 
            width: 90%;
            margin: 0 auto;
            padding: 1em;
        }
        .message{ 
            background-color: #ffc0cbc4;
            padding: 0 .3em;
            border-radius: 6px;
        }
        .message p{ 
            padding: 0 2em 0 0;
        }
        .connection{
            display: flex;
            justify-content: flex-end;
            align-items: center;
            
        }
        .connection a{
            /* border: solid black 1px; */
            padding: .5em;
            margin: 0 0.3em;
            color: white;
            background-color: #0a0a9d;
            border-radius: 4px;

        }
        .link-new-msg a{
            padding: .5em;
            margin: 0 0.3em;
            color: #0a0a9d;
            /* background-color: #0a0a9d; */
            border-radius: 4px;
            border: solid #0a0a9d 1px;
        }

        form{ 
            width: 60%;
            margin: 0 auto;
        }
        form div{
            display: flex;
            flex-direction: column;
            margin: .5em 0
        }
        form button{
            display: block;
            border: none;
            margin:.5em 0;
            padding: .5em 7.5em;
            color: white;
            background-color: #0a0a9d;
            border-radius: 4px;

        }

    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    
    <h2>Forms exercices</h2>
    <?php //include 'traitement.phtml'; ?>
</body>
</html>