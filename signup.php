<?php
    include './include/header.php';
    include "./backend/dbconnection.php";

    // get all courses
    $query = 'select * from courses where is_active=TRUE';
    $statement = $pdo->prepare($query);
    $statement->execute();
    $courses = $statement->fetchAll();
 ?>
<body>
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <form id="registration_form" method="post" action="./backend/newUser.php">
                <div class="panel panel-primary" style="margin-top: 20px;">
                    <div class="panel-heading">
                        <h3 style="text-align: center;">Registration form</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="john doe" minlength="3" maxlength="50" required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="johndoe@mail.com"  required >
                        </div>
                        <div class="form-group">
                            <label>Gender</label><br>
                            <input type="radio" class="radio-inline" id="male" name="gender" value="MALE" required> <label for="male">Male</label>
                            <input type="radio" class="radio-inline" id="female" name="gender" value="FEMALE" required> <label for="female">Female</label>
                            <input type="radio" class="radio-inline" id="others" name="gender" value="OTHERS" required> <label for="others">Other</label>
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile Number</label>
                            <input type="text" id="mobile" name="mobile" class="form-control" placeholder="9876543210" minlength="10" maxlength="10" required>
                        </div>
                        <div class="form-group">
                            <label for="dob">Date of Birth</label>
                            <input type="date" id="dob" name="date_of_birth" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" minlength="6" maxlength="20" required>
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" id="confirm_password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="course">Choose Course</label><br>
                            <?php foreach ($courses as $key => $course) { ?>
                                <input type="radio" class="radio-inline" onclick="showBatch(this);" name="course" value="<?php echo $course['id']; ?>" required> <?php echo $course['name']; ?>
                            <?php } ?>

                        </div>
                        <div class="form-group">
                            <label for="batchtime" id="batches_label" class="hide">Choose Batch Time</label><br>
                            <span id="batches" class="hide"></span>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="form-group">
                            <button type="submit" class=" btn-primary" value="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        $("#registration_form").validate();

        function showBatch(ref) {
            $("#batches").empty();
            $.ajax({
                url: "http://localhost/thinkwizz/backend/get_batches_by_course_id.php",
                method: "POST",
                data: {
                    id: $(ref).val()
                }
            }).done(function(response){
                var batches = JSON.parse(response);
                var html = "";
                batches.forEach(function(batch){
                    html = html + '<input type="radio" class="radio-inline" name="batchtime" value="'+batch.id+'" required> '+batch.name;
                });
                $("#batches").append(html);
                $("#batches_label").removeClass("hide");
                $("#batches").removeClass("hide");
            });
        }
    </script>
</body>


<?php
    include './include/footer.php'
 ?>
