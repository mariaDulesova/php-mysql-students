<?php 
    require_once __DIR__ . "/database.php";

    $sql = 
        "SELECT 
            `students`.`id`, 
            `students`.`registration_number`, 
            `students`.`enrolment_date`,
            `students`.`surname`,
            `students`.`name`,
            `students`.`email`
        FROM `students`
        INNER JOIN `degrees`
        ON `students`.`degree_id` = `degrees`.`id`
        WHERE `degrees`.`name` = 'Corso di Laurea in Matematica'
        ORDER by `students`.`registration_number`
        LIMIT 20;
    ";
    $result = $connect->query($sql);

    $students =[];
    while($row = $result->fetch_assoc()){
        $students[] = $row;
    }

?>
