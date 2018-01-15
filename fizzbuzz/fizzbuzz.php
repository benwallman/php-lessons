<html>
    <head>
        <title>Fizzbuzz</title>
    </head>
    <body>
        <?php
            for ($integer = 1; $integer <= 100; $integer++) {
                if ($integer % 15 == 0) {
                    echo "FizzBuzz";
                } else if ($integer % 3 == 0) {
                    echo "Fizz";
                } else if ($integer % 5 == 0) {
                    echo "Buzz";
                }
                else {
                    echo $integer;
                }
                echo "<br/>";
            }
        ?>
    </body>
</html>