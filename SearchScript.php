<html>
<head>

</head>
        <body id="phpBody">
                <?php
                if ($connection=@mysqli_connect('localhost', 'jcomfort1', 'Waypointer2022', 'RecyclingDB'))
                {
                        print '<p id="confirm">Successfully connected to MySQL. </p>';
                }

                mysqli_close($connection);

                ?>
        </body>
</html>
