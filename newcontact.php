<html>
    <head>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="font-awesome.css">

<link rel="stylesheet" href="templatemo-training-studio.css">
</head>

<body>


<section class="section" id="contact-us">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-12">
            <div id="map">
                <iframe
                    src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="contact-form">
                <form id="contact"  method="post">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your name*" required="">
                            </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                    placeholder="Your Email*" required="">
                            </fieldset>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <fieldset>
                                <input name="subject" type="text" id="subject" placeholder="Subject">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <textarea formmethod="POST" name="message" rows="6" id="message" placeholder="Message"
                                    required=""></textarea>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="form-submit" formmethod="POST" name="submit" class="main-button">Send Message</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
               
            </div>
        </div>
    </div>
</div>
</section>
</body>
</html>

<?php

if (isset($_POST['submit'])) {
$con=mysqli_connect("localhost","root","","feedback");
$sql = "insert into fed_det(name,email,subject,message) values(' $_POST[name]',' $_POST[email]',' $_POST[subject]',' $_POST[message]')";
$query=mysqli_query($con,$sql);
}
?>