<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ILVETFarm | Contact</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="img/logoico.png" />

</head>
<body>

<!-- Navigation -->
<div id="navbar">
<nav class="navbar navbar-dark navbar-expand-lg  fixed-top">
	<div class="container-fluid"> 
    <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="Logo"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
		aria-controls="navbarResponsive" aria-expanded="false" aria-lable="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item ">
					<a class="nav-link activeted" href="index"><i class="fas fa-home fnav"></i>Acasa</a>
				</li>
				<li class="nav-item">
						<a class="nav-link" href="about"><i class="fas fa-info-circle fnav"></i>Despre Noi</a>
						
					</li>
					
						<li class="nav-item active">
								<a class="nav-link" href="contact.php"><i class="fas fa-id-card fnav"></i>Contact</a>
						
			</ul>
		</div>
	</div>
	</nav>
</div>
<!--Contact US-->
 <!--Specializari-->

	
<div class="container-fluid padding">
    <div class="row welcome text-left mt-5">
		<div class="col-12 mt-5">
			<h1 class="display-5">Contacteaza-ne</h1>
		</div>
		<hr>
	</div>
    <div class="row">
    <!--Grid column-->
        <div class="col-md-7 mb-md-0 mb-5">
            <div class="formDesign">
                <h3 class="text-center" style="color:#3498db;">Trimite-ne un e-mail</h3>
            <form id="contact-form"  name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="colorForm">Nume</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="colorForm">E-mail</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="colorForm">Subiect</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="5" class="form-control md-textarea"></textarea>
                            <label for="message" class="colorForm">Mesaj</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->
                <div class="text-center text-md-center">
                <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
                </div>
             </form>

            <div class="status text-center">
            <?php 
                    $fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    if(strpos($fullUrl,"email=error") == true){
                        echo "<p style='color:red;'>Nu sunt completate toate campruile corect!</p>";
                    }elseif(strpos($fullUrl,"email=emailerror") == true){
                        echo "<p style='color:red;'>Mailul nu este introdus corect!</p>";
                    }
                ?>    
            </div>
            </div>
        </div>
        <!--Grid column-->
        <div class="col-md-5 mb-md-0 mb-5 text-left">
            <p class="titluContact"><i class="fa fa-calendar contactFa" aria-hidden="true"></i>Program:</p>
            <p class="textContact">Luni-Vineri: 10:00 - 20:00<br>
            Sambata: 10:00 - 14:00<br>
            Duminica: 12:00 - 14:00</p>
            <p class="titluContact"><i class="fas fa-map-marker-alt contactFa"></i>Adresa:</p>
            <p class="textContact">Bulevardul Carol I nr. 27, Craiova 200692</p>
            <p class="titluContact"><i class="fas fa-phone-square contactFa"></i>Telefon:</p>
            <p class="textContact">Ilina Gheorghita: 0744585180
            <br>Ilina Ana-Maria: 0784404844<br>
            Ilina Alexandru:0763948845</p>
            <p class="titluContact"><i class="fas fa-envelope-open contactFa"></i>E-mail:</p>
            <p class="textContact">email@ilvet.com</p>
        </div>
        
    </div>
<hr class="hr-4">
<!--Locatie-->
<div class="row">
    
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1427.1945965303844!2d23.802324928196363!3d44.32250599731149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4752d70b4bf0480d%3A0xcc1edb6a56673b33!2sILVET%20FARM%20S.R.L.!5e0!3m2!1sro!2sro!4v1586537583535!5m2!1sro!2sro" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

</div>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script type="text/javascript">
	$(window).on('scroll',function()
	{
		if($(window).scrollTop()){
			$('nav').addClass('topColor');
		}
		else{
			$('nav').removeClass('topColor');
		}
	})
	</script>

</body>
</html>


 
 
 








