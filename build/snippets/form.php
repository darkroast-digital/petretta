<div class="form-messages"></div>

<form action="mailer.php" method="post" id="form" class="form">

	<div class="form-row">
		<input type="text" id="name" name="name" required placeholder="Name">
	</div>

	<div class="form-row">
		<input type="tel" id="phone" name="phone" required placeholder="Phone">
	</div>

	<div class="form-row">
		<input type="email" id="email" name="email" required placeholder="Email">
	</div>

	<div class="form-row">
		<textarea name="message" id="message" required placeholder="Message"></textarea>
	</div>

	<div class="form-row">
        <div class="g-recaptcha" data-sitekey="6LfIzx8UAAAAAKN0Xfw-vToPJNjiW7VgzZ7iNade"></div>
    </div>

	<button type="submit" class="submit">Send Message</button>

</form>
