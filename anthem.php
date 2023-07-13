<?php include 'header.php'; ?>
<div class="hero overlay banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9 mx-auto text-center">
                <h1 class="text-white">Sing The Anthem</h1>
                <p class="text-white para"><a style="color: white;" href="./">Home</a><span class="mx-3">|</span>Sing The Anthem</p> 
            </div>
            <div class="col-lg-9 mx-auto text-center">
                
            </div>
        </div>
    </div>
</div>
<!-- contact -->
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">

                <form id="registration" name="registration" method="post" enctype="multipart/form-data" action="singing-anthem-action.php" method="POST" name="">

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Age" name="age" id="age">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Phone" name="phone" id="phone">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email ID" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Occupation" name="occupation" id="occupation">
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" placeholder="Upload Video" name="profile" id="profile">
                    </div>

                    <div class="form-group ">
                        <div class="g-recaptcha" data-sitekey="6LeChP0mAAAAAINyJjJ-oRRsOzsNKgVizZyCtv8z"></div>
                    </div>

                    <div class="form-group">

                        <button type="submit" name="submit" id="submit" class="btn btn-primary py-3 px-5"><span>SUBMIT</span></button>
                        <input type="button" class="btn btn-primary py-3 px-5" style="display: none" id="waitmsg" value="Please Wait..." disabled="disabled">
                    </div>


                </form>
            </div>


            <div class="col-lg-4 ml-auto">

                <ul class="list-unstyled">
                    <li class="mb-2">
                        <strong class="text-white d-block">Address</strong>
                        273 South Riverview Rd. <br> New York, NY 10011
                    </li>
                    <li class="mb-2">
                        <strong class="text-white d-block">Email</strong>
                        <a href="#">info@unslate.co</a>
                    </li>
                    <li class="mb-2">
                        <strong class="text-white d-block">
                            Phone
                        </strong>
                        <a href="#">+12 345 6789 012</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- end contact -->
<?php include 'footer.php'; ?>
<script src="js/jquery.validate.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>


<script type="text/javascript">
    var validate = $("#registration").validate({
        rules: {
            name: "required",
            age: "required",
            phone: "required",
            email: "required",
            occupation: "required",
            profile: "required",




        },
        messages: {
            name: "Please enter your name.",
            age: "Please enter your age.",
            phone: "Please enter your contact number.",
            email: "Please enter a valid email address.",
            occupation: "Please enter your occupation.",
            profile: "Please upload your document.",


        },
        errorPlacement: function(error, element) {
            if (element.attr("type") == "checkbox") {
                error.insertAfter("#caterr");
            } else {
                error.insertAfter(element);
            }

        },


        submitHandler: function() {
            if (grecaptcha.getResponse() == "") {
                alert("Are you a robot? Don't be shy, complete the reCaptcha! ?");
                return false;
            }
            // call your function
            $('#submit').hide();
            $('#waitmsg').show();
            return true;
        }


    });
</script>

<style type="text/css">
    .error {
        color: red;
    }
</style>