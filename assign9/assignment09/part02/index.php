<!DOCTYPE html>
<head>
    <title>Assignment 9, Part 2</title>
</head>
<body>
    
    <?php
        //Task 3.1: Change these items to reflect
        //four of your favorite things
        $my_favorite_things = array (
            "Gaming",
            "Swimming",
            "Hanging out with friends",
            "Biking"
        );
    ?>

    <h1>My Favorite Things</h1>
        <!-- Task 3.2: Code to output things below -->

    <ol>
        <?php
        
           /* for ($i = 0;$i < count($my_favorite_things); $i ++){
                echo "<li>" . $my_favorite_things[i] . "</li>";
           }*/
           /*$i = 0;
           while($i < count($my_favorite_things)){
               echo "<li>" . $my_favorite_things[$i] . "</li>";
               $i++;
           }*/
           $i = 0;
           do {
            echo "<li>" . $my_favorite_things[$i] . "</li>";
            $i++;    
           } while ($i < count($my_favorite_things))
        ?>
    </ol>
    </body>

