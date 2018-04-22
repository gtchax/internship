<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HNGInternship</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php date_default_timezone_set("Africa/Harare");?>
    <div class="wrapper">
        <div class="navbar clearfix">
            <h1 class="vertical-text">Stage 1 </h1>
            
    </div>
        <div class="main">
            <div class="container">
                <section class="header">
                    <div>
                        <h2>Welcome to HNG Internship</h2>
                        <hr>
                    </div>
                    <div>
                        <span class="time"><?php echo(date("d M h:i")); ?></span>
                    </div>
                </section> 
                <section class="para">
                    <div class="buttons">
                        <div class="btn white">
                            <span>Designer</span>
                        </div>
                         <div class="btn pink">
                            <span>Coder</span>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>
</html>