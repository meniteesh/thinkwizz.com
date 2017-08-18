$().ready(function(){
    $("#registration-form").validate({
        rules: {
            username:{
                required: true;
                minlength: 2;
            };
            email:{
                required: true;
                email: true;
            };
            gender: "required";
            mobilenumber:{
                required: true;
                minlength: 10;
                maxlength: 10;
            };
            dob:{
                required: true;
            };
            password:{
                required: true;
                minlength: 6;
            }
            confirm_password:{
                required: true;
                minlength: 6;
                equalTo: "#password";
            };
            course: "required";
            batchtime: "required";
        }
        messages: {
            username:{
                required: "Please enter your full name";
                minlength: "your name should be atlest 2 character"
            }
            email:{
                required: "please enter your email address";
                email: "please enter your valid email address";
            };
            gender: "please choose your gender";
            mobilenumber:{
                required: "please enter your mobile number";
                minlength: 10;
                maxlength: 10;
            };
            dob:{
                required: true;
            };
            password:{
                required: true;
                minlength: 6;
            }
            confirm_password:{
                required: true;
                minlength: 6;
                equalTo: "#password";
            };
            course: "required";
            batchtime: "required";
        }
    }
}
