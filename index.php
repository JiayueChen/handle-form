<?php
include "server-side-script/handle-form.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Handle Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather|PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <h1>Handle Form</h1>
        <nav>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Blog</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form action="index.php" method="get">
            <fieldset>
                <legend>Form Assignment</legend>
                <div class="box">
                    <label for="full-name">Full Name</label>
                    <input type="text" id="full-name" name="full-name" value="<?php if(isset($full_name) && !$success){echo $full_name;} ?>">
                </div>
                <div class="box">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" value="<?php if(isset($email) && !$success){echo $email;} ?>">
                </div>
                <div class="box">
                    <label for="message">Message</label>
                    <textarea id="message" name="message"><?php if(isset($message) && !$success){echo $message;} ?></textarea>
                </div>
                <div class="box">
                    <input type="submit" value="Submit" name="submit-button">
                </div>
            </fieldset>
            <?php
            /* if feedback exists: */
            if(isset($feedback)) {
            /* Print feedback */
                echo $feedback;
            /* End if */
            }
            /* if error(s) exists: */
            if(isset($err)) {
            /* Print error(s) */
                echo $err;
            /* End if */
            }
            ?>
        </form>
    </main>
    <footer>
        <nav>
            <ul>
                <li>
                    <a href="https://www.facebook.com/">
                        <img src="./img/facebook.png" alt="facebook">
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/">
                        <img src="./img/twitter.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/">
                        <img src="./img/linkedin.png" alt="linkedin">
                    </a>
                </li>
                <li>
                    <a href="https://www.pinterest.com">
                        <img src="./img/pinterest.png" alt="pinterest">
                    </a>
                </li>
            </ul>
        </nav>
        <div class="info">
            <p>Algonquin College IMM</p>
            <p>1385 woodroffe Ave, Nepean, ON</p>
            <p>(613)890-5527</p>
        </div>
    </footer>


</body>

</html>
