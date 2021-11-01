<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Document</title>
    </head>
    <body style="background-color:white; margin:0rem">
        <div style="margin:0rem">
        <div>
            <h3 style="color: black;text-align: center"><em><u>ADVICE: THIS IS MY FIRST PHP TEST.<br />PLEASE, DON´T JUDGE ME!!.</u></em></h3>
        </div>
        <div style="background-color:#ffa69e; padding:2rem">
            <h4>1. Print on screen</h4>
            <span>
                <?php require "./src/print.php" ?>
            </span>
        </div>
        <div style="background-color:#faf3dd; padding:2rem">
            <h4>2. Iterators</h4>
            <span>
                <?php require "./src/iterators.php" ?>
            </span>
        </div>
        <div style="background-color:#b8f2e6; padding:2rem">
            <h4>3. Operators</h4>
            <span>
                <?php require "./src/operators.php" ?>
            </span>
        </div>
        <div style="background-color:#aed9e0; padding:2rem">
            <h4>4. Dates</h4>
            <span>
                <?php require "./src/dates.php" ?>
            </span>
        </div>
        <div style="background-color:#ffea9e; padding:2rem;">
            <h4>5. Conditionals</h4>
            <span >
                <?php require "./src/conditionals.php" ?>
            </span>
        </div>
        <div style="background-color:#ecfadc; padding:2rem">
            <h4>6. Types of variables and data</h4>
            <span>
                <?php require "./src/types.php" ?>
            </span>
        </div>
        <div style="background-color:#b8d5f2; padding:2rem">
            <h4>7. Maths</h4>
            <span>
                <?php require "./src/maths.php" ?>
            </span>
        </div>
        <div style="background-color:#afb7e0; padding:2rem">
            <h4>8. Strings</h4>
            <span >
                <?php require "./src/strings.php" ?>
            </span>
        </div>
        <div style="background-color:#b8f2e6; padding:2rem">
            <h4>9. Arrays</h4>
            <span>
                <?php require "./src/arrays.php" ?>
            </span>
        </div>
        <div style="background-color:#eaff9e; padding:2rem">
            <h4>10. Functions</h4>
            <span >
                <?php require "./src/functions.php" ?>
            </span>
        </div>
        <div style="background-color:#ffa69e; padding:2rem">
            <h4>11. Php Info</h4>
            <span>
                <?php require "./src/phpinfo.php" ?>
            </span>
        </div>
        </div>
    </body>
</html>