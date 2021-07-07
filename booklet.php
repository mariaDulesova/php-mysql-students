<?php 
    require_once __DIR__ . "/scripts/get-booklet.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Booklet</title>
</head>
<body>
    <header class="text-center my-5">
        <h3> <?php echo $exams[0]["name"]. " ".$exams[0]["surname"]?> Booklet</h3>
    </header>
    <main>
        <div class="container">
            <?php if(!$exams) {
                echo "No exams";
            } else {?>
            
                <table class="table">
                    <thead class="table-success">
                        <tr>
                            <th>Course</th>
                            <th>Date</th>
                            <th>Vote</th>
                        </tr>   
                    </thead>

                    <tbody>
                        <?php foreach ($exams as $exam) { ?>
                            <tr>
                                <td> <?php echo $exam["course_name"];?></td>
                                <td> <?php echo $exam["date"];?></td>
                                <td> <?php echo $exam["vote"];?></td>
                            </tr>
                        <?php }; ?>
                    </tbody>
                </table>

            <?php }; ?>
            <div class="py-3">
                <a href="index.php" class="btn btn-danger">Exit</a>   
            </div>       
           
        </div>
    </main>
    
    
    
</body>
</html>