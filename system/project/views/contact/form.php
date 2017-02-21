<h1>Contact us</h1>

<form method="post" action="">

	<label for="name">Your name</label>
	<input type="text" id="name" name="name"><br /><br />

	<label for="email">Your email</label>
	<input type="text" id="email" name="email"><br /><br />

	<label for="message">and your message</label>
	<textarea id="message" name="message"></textarea><br /><br />

	<input type="checkbox" id="newsletter" name="newsletter" value="Subscribe">
	<label for="newsletter">Subscribe to newsletter</label><br /><br />
	
	<input type="submit" class="button submit" name="contact_submit" value="Send Message">

</form>
<?php echo date('j. n. Y'); ?><br /><br />