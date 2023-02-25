<!-- Page header -->
<div class="elh-page-header elh-img-bg elh-bg-9" style="background-image: url('../resources/atoconn/digital-marketing/header-bg-5.jpg'); background-size: 100% 100%">
    <div class="elh-overlay">
        <div class="container text-center">
            <h3 class="elh-page-title">Contact</h3>
            <ol class="breadcrumb">
                <li><a href="course_hub.html">Home</a></li>
                <li class="active">Contact</li>
            </ol>
        </div>
    </div>
</div>
<!-- Page header End -->

<!-- Main wrapper start -->
<div class="elh-main-wrap">
    <!-- Contact Form -->
    <div class="elh-section elh-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="quick-contact">
                        <h3>Send us an email</h3>
                        <p style="font-size:20px">Use this quick form to get answers to your questions by email.</p> <br>
                        <form id="cf" onsubmit="return feedback();">
                            <div class="row" style="text-align: left;">
                                <div class="col-md-6">
                                    <label for="pnamewd" style="font-weight: bolsd;">Name:</label>
                                    <input type="text" id="name" name="name" placeholder="Name *" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" style="font-weight: bold;">Email Address:</label>
                                    <input type="email" id="email" name="email" placeholder="Email *" required>
                                </div>
                                <div class="w-100"></div>
                                <div class="col">
                                    <label for="message" style="font-weight: bold;">Message:</label>
                                    <textarea id="message" name="message" placeholder="Message *" rows="5"></textarea>
                                    <button class="btn" type="submit">Send</button>

                                    <img id="ajax" alt="" src="../resources/images/load.gif" style="width:50px;height: 50px;margin-top: -5px;margin-left: 20px;visibility: hidden;">
                                </div>
                                <div class="w-100"></div>
                                <div class="col">
                                    <p id="ms" class="input-success">Thanks for your feedback.</p>
                                    <p id="mf" class="input-error">Something went wrong. try again later</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form End -->

</div>
<!-- Main wrapper start end -->
<script type="text/javascript">
    function feedback() {        

        $("#ajax").css("visibility", "visible");
        var name = $("#name").val();
        var email = $("#email").val();        
        var message = $("#message").val();

        $.post("http://localhost/moveheal-crm/public/crm/feedback", {
                name: name,
                email: email,                
                comment: message
            },
            function(data, status) {
                try {
                    res = JSON.parse(data);
                } catch (e) {
                    console.log(e);
                }

                if (res["status"]) {
                    Swal.fire(
                        'Thank You!',
                        res["message"],
                        'success'
                    );
                    $("#ms").css("display", "block");
                    $("#mf").css("display", "none");
                    $("#ajax").css("visibility", "hidden");
                    document.getElementById('cf').reset();
                } else {
                    $("#mf").css("display", "block");
                    $("#ms").css("display", "none");
                    $("#ajax").css("visibility", "hidden");
                }
            });
        return false;
    }
    
</script>