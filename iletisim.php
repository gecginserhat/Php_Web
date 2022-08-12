<?php include 'header.php'; ?>

<div role="main" class="main">
	<div class="container">
		<div class="row pt-xl">
			<div class="col-md-7">
				<h1 class="mt-xl mb-none">Bize Ulaşın</h1>
				<div class="divider divider-primary divider-small mb-xl">
					<hr style="background-color:  #2A3F54 !important;">
				</div>
				<p class="lead mb-xl mt-lg">Bize ulaşmak için aşağıda yer alan iletişim formunu eksiksizce doldurarak gönderebilirsiniz. </p>

				<div class="alert alert-success hidden mt-lg" id="contactSuccess">
					<strong>Success!</strong> Your message has been sent to us.
				</div>

				<div class="alert alert-danger hidden mt-lg" id="contactError">
					<strong>Error!</strong> There was an error sending your message.
					<span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
				</div>

				<form id="contactForm" action="php/contact-form.php" method="POST">
					<div class="row">
						<div class="form-group">
							<div class="col-md-12">
								<input style="border-radius: 10px;" type="text" placeholder="Adınız" value=""
									data-msg-required="Please enter your name." maxlength="100"
									class="form-control input-lg" name="name" id="name" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-md-12">
								<input style="border-radius: 10px;" type="email" placeholder="E-mail" value=""
									data-msg-required="Please enter your email address."
									data-msg-email="Please enter a valid email address." maxlength="100"
									class="form-control input-lg" name="email" id="email" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-md-12">
								<input style="border-radius: 10px;" type="text" placeholder="Konu" value=""
									data-msg-required="Please enter the subject." maxlength="100"
									class="form-control input-lg" name="subject" id="subject" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-md-12">
								<textarea style="border-radius: 10px;" maxlength="5000" placeholder="Mesajınız"
									data-msg-required="Please enter your message." rows="5"
									class="form-control input-lg" name="message" id="message" required></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<input  style="border-radius: 10px;background-color:  #2A3F54 ;" type="submit" value="Mesajı Gönder" class="btn btn-primary btn-lg mb-xlg"
								data-loading-text="Loading...">
						</div>
					</div>
				</form>

			</div>
			<div class="col-md-4 col-md-offset-1">

				<h4 class="mt-xl mb-none">Adres & İletişim</h4>
				<div class="divider divider-primary divider-small mb-xl">
					<hr style="background-color:  #2A3F54 !important	;">
				</div>

				<ul class="list list-icons list-icons-style-3 mt-xlg mb-xlg">
					<li ><i style="background-color:  #2A3F54 ;" class="fa fa-map-marker"></i> <strong>Adres:</strong><?php echo $ayarcek['ayar_adres'] ?> <br> <?php echo $ayarcek['ayar_ilce'] ?> / <?php echo $ayarcek['ayar_il'] ?></li>
					<li><i style="background-color:  #2A3F54 ;" class="fa fa-phone"></i> <strong>Telefon:</strong> <?php echo $ayarcek['ayar_tel'] ?></li>
					<li><i style="background-color:  #2A3F54 ;" class="fa fa-envelope"></i> <strong>Email:</strong> <a style="color:  #2A3F54 ;"
							href="mailto:<?php echo $ayarcek['ayar_mail']?>"> <?php echo $ayarcek['ayar_mail'] ?></a></li>
				</ul>

				<h4 class="pt-xl mb-none">Çalışma Saatleri</h4>
				<div class="divider divider-primary divider-small mb-xl">
					<hr style="background-color:  #2A3F54 !important	;">
				</div>

                <?php echo $ayarcek['ayar_mesai'];?>

			</div>
		</div>
	</div>

	<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
	<div id="googlemaps" class="google-map google-map-footer"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193030.37973459065!2d29.216606025941427!3d40.89162820510967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cad9a716174373%3A0x1df73419f1930424!2zVHV6bGEvxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1658734657776!5m2!1str!2str" width="2500" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
</div>
<?php include 'footer.php'; ?>