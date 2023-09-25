<?php
	 
    $my_var = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";

     $result = str_replace('ipsum','***', $my_var);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <p>
          <?php echo($my_var);?>
          
        </p>
        
        <?php echo($result); ?> 
    
</body>
</html>
