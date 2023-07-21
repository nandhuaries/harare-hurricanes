<?php include 'header.php'; ?>
<div class="hero overlay banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9 mx-auto text-center">
                <h1 class="text-white">Sing The Anthem</h1>
                <p class="text-white para"><a class="brudCrumbs" href="./">Home</a><span class="mx-3">|</span>Sing The Anthem</p>
            </div>
            <div class="col-lg-9 mx-auto text-center"></div>
        </div>
    </div>
</div>
<!-- contact -->
  <div id="statusdiv"></div>
<div class="site-section">

    <div class="container">

        <?php

        if (isset($_GET['status']) && $_GET['status'] == 0) { ?>
            <div  class="alert alert-danger" style="color:red;text-align: center;font-weight:600;">Please click on the reCAPTCHA box</div>

        <?php }
        if (isset($_GET['status']) && $_GET['status'] == 1) { ?>
            <div  class="alert alert-success" style="color:green;text-align: center;font-weight: 600;">Your registration has been submitted successfully</div>

        <?php } ?>


        <div class="row ">


            <div class="col-lg-6">

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
        <input type="file" class="form-control" placeholder="Upload Video" name="profile" id="profile" onchange="Filevalidation()" accept="video/mp4,video/x-m4v,video/*">
        <p style="color:red;font-weight: 600;">Size Limit : 40 MB, Supported File Formats(.mp4, .webm, .mov, .mkv)</p>
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


            <div  class="col-lg-6 ml-auto bann overlay rounded mb-5" style="background-image: url(images/bg/common-bg-crop.jpg); background-size: cover; background-position: center; position:relative;">
                <div class="innerBann p-3 row justify-content-center">
                    <h4 class="text-justify formHead">
                        Rules and Regulations
                    </h4>
                    <ul>
                        <li>
                            Download the minus track of the Harare Hurricanes anthem from our website
                        </li>
                        <li>
                            Record and upload the video of yourself singing the Harare Hurricanes anthem song
                        </li>
                        <li>
                            Minus track will be available on our website.
                        </li>
                        <li>
                            All entries must be received on or before 18th July 2023
                        </li>
                    </ul>
                    <h4 class="formHead">What do you win?</h4>
                    <ul>
                        <li>
                            A never before opportunity to sing Harare Hurricanes Anthem live on the T10 stage.
                        </li>
                        <li>
                            Cash prize
                        </li>
                        <li>
                            The video will be promoted through all our social media channels
                        </li>
                    </ul>
                    <div>
                        <a href="songs/minus-without-harrare.wav" class="btn btn-primary py-3 px-5" download="">Download Track
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- end contact -->
<?php include 'footer.php'; ?>
<script src="js/jquery.validate.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>

<script type="text/javascript">

$(document).ready(function () {
<?php if(isset($_GET['status'])){?>
    $('html, body').animate({
        scrollTop: $('#statusdiv').offset().top
    }, 1000);

    <?php } ?>
});



</script>
<script type="text/javascript">
Filevalidation = () => {
            const fi = document.getElementById('profile');
            // Check if any file is selected.

             var filePath = fi.value;

var allowedExtensions = /(\.mp4|\.webm|\.mkv|\.mov)$/i;
if (!allowedExtensions.exec(filePath)) {
                alert('Invalid File Type.Please Upload Video Files(.mp4,.webm,.mov,.mkv)');
                $("#profile").val('');
                return false;
            }


            if (fi.files.length > 0) {
                for (const i = 0; i <= fi.files.length - 1; i++) {
         
                    const fsize = fi.files.item(i).size;
                    const file = Math.round((fsize / 1024));
                    // The size of the file.
                    if (file >= 40960) {
                        alert(
                          "File too Big, please select a file less than 40 MB");
                        $("#profile").val('');
                        return false;
                    } 
                }
            }
        }

</script>

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
            profile: "Please upload your document (Size Limit - 40 MB).",


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
        font-weight: bold;
    }
</style>