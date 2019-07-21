<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sample Form with PHP</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="main">

    <div class="container">
        <div class="signup-content">
            <?php if (isset($_POST['submitted'])): ?>
                <div class="signup-form">
                    <h2>Let's recap</h2>
                    <div class="form-group">
                        <p>Your name is <?php echo $_POST['name'] ?></p>
                        <p>Your email is <?php echo $_POST['email'] ?></p>
                        <p>And you live in <?php echo $_POST['home'] ?></p>
                    </div>
                    <h2>Thank you for the info</h2>
                    <div>
                        <p></p><a href="/">Click here</a> to go back</p>
                    </div>
                </div>
            <?php else: ?>

            <form method="POST" id="signup-form" class="signup-form" action="index.php">
                <h2>Hmm... Let's get some info</h2>
                <div class="form-group">
                    <input required type="text" class="form-input" name="name" id="name" placeholder="Your Name"/>
                </div>
                <div class="form-group">
                    <input required type="email" class="form-input" name="email" id="email" placeholder="Email"/>
                </div>
                <div class="form-group">
                    <input required type="text" class="form-input" name="home" id="home" placeholder="Home Town"/>
                </div>
                <div class="form-group">
                    <input required type="checkbox" name="robot" id="agree-term" class="agree-term" />
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I am not a robot</label>
                </div>
                <input type="hidden" name="submitted" value="1"/>
                <div class="form-group">
                    <input type="submit" name="submit" id="submit" class="form-submit submit" value="Submit form"/>
                </div>
            </form>

            <?php endif; ?>

        </div>
    </div>

</div>

<!-- JS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

