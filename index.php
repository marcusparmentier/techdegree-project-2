<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Math Quiz: Addition</title>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php 
        include("inc/quiz.php");
        var_dump($question);
        
    ?>
    <div class="container">
        <div id="quiz-box">
            <p class="breadcrumbs">Question # of #</p>
            <p class="quiz">What is <?php echo $question['leftAdder'] . " + " . $question['rightAdder']; ?>?</p>
            <form action="index.php" method="post">
                <input type="hidden" name="id" value="<?php echo $index; ?>" />
                <input type="submit" class="btn" name="answer" value="135" />
                <input type="submit" class="btn" name="answer" value="125" />
                <input type="submit" class="btn" name="answer" value="115" />
            </form>
        </div>
    </div>
</body>
</html>