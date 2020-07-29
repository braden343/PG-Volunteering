<?php
   session_start();
$search = filter_input(INPUT_POST, 'search_criteria', FILTER_VALIDATE_INT);
//Query for search results
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       <h2><strong>Here are your search results with <?=$search?></strong></h2>
       <table style="border: 1px solid black">
       <tr>
        <td>Project Name</td>
        <td>Description</td>
        <td>View More</td>
       </tr>
       <?php foreach ($users as $user) :?>
         <tr>
           <td>//Project Name</td>
           <td>//Description</td>
           <td>View More button</td>
           <td>&nbsp;</td>
         </tr>
       <?php endforeach; ?>
       </table>
       <?php //var_dump($books); ?>
</body>
</html>