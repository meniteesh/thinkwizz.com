<?php
    session_start();
    include './include/header.php'
 ?>
<body>
    <div class="container-fluid">
        <div class="col-md-3 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Hello <?php echo $_SESSION['email']; ?></h3>
                </div>
                <div class="panel-body">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed excepturi illum consequuntur, totam perspiciatis corrupti, odit, quod sit nulla numquam molestiae repellendus ipsam possimus dolorum aut. A alias eos dolores maiores autem eveniet saepe sed animi ab recusandae debitis veritatis id enim temporibus voluptates molestias, totam. Mollitia, iure eveniet esse!</h5>
                </div>
            </div>
        </div>
    </div>
</body>

 <?php
    include './include/footer.php'
 ?>
