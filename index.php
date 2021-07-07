<?php 
    require_once __DIR__ . "/scripts/get-students.php"
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Students</title>
</head>
<body>
    <header class="text-center my-4">
        <h1>Elenco Studenti Iscritti al Corso di Laurea in Matematica</h1>
    </header>

    <main>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <?php 
                        $firstStudent = $students[0];
                        foreach($firstStudent as $key=>$value) {?>
                            <th> <?php echo $key; ?></th>
                    <?php }; ?> 
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>
                    </td>
                
                </tr>
            </tbody>
        
        </table>
        <?php?>
    </div>
   
    

    </main>

    
</body>
</html>