<?php include "header.php"; ?>

<?php

if(isset($_POST['email'])){
 $email = 'm.ali.alameh@hotmail.com'; //my email//
 
 $eol = '\r\n';
 
 $headers = 'From: ' . $_POST['email'] . $eol . 'Reply-To: '. $_POST['email'] . $eol . 'X-Mailer: PHP/' . phpversion();
 
 @mail($email, $_POST['subject'], $_POST['desc'], $headers);
 
}
 
?>
<section>

 <div class="row">
	<div class="col-md-2">
		<div class="container1">
		<form method="POST" role="form">
		<input type="text" name="email" value="Enter Email" required>
        <input type="text" name="subject" value="Subject" required>
	     <textarea name='desc'>Description</textarea>
		 <button type="submit" class="btn btn-default"><p>Submit</button>
		</form>
		</div>
	</div>
</div>

<?php include "footer.php"; ?>