<?php
    include './include/header.php'
 ?>
<body style="background-image: url("http://www.seniorsrealestateinstitute.com/images/coachingimage.jpg");">
    <div class="container-fluid logincontainer" id="logincontainer">
        <div class="col-md-4 col-md-offset-4">
            <form id="loginform" name="loginform" method="post" action="../backend/validatelogin.php">
                <div class="panel panel-primary" style="margin-top: 20px;">
                    <div class="panel-heading" style="text-align: center;">
                        <h3>LOGIN</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="email">Enter your email-id</label>
                            <input type="email" name="email" class="form-control" placeholder="johndoe@mail.com" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Enter your Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="form-group">
                            <button type="submit" class="btn-primary" value="submit">Login</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        $("#loginform").validate();
    </script>
</body>


 <?php
    include './include/footer.php'
 ?>
