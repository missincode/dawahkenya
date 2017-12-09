<?php
if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action']))):

	if (isset($_POST['myname'])) { $myname = $_POST['myname']; }
	if (isset($_POST['myemail'])) { $email = $_POST['myemail']; }
	if (isset($_POST['mysubject'])) { $subject = $_POST['mysubject']; }
	if (isset($_POST['mycomments'])) {
			$mycomments = filter_var($_POST['mycomments'], FILTER_SANITIZE_STRING ); 
	}

	$formerrors = false;

	if ($myname === '') :
		$err_myname = '<div class="error">Sorry, your name is a required field</div>';
		$formerrors = true;
	endif; // input field empty

	


	if ($mysubject !== $mysubject) :
		$err_mysubject = '<div class="error">Sorry, a subject is required</div>';
		$formerrors = true;
	endif; //passwords don't match


	if ( !(preg_match('/[A-Za-z]+, [A-Za-z]+/', $myname)) ) :
		$err_patternmatch = '<div class="error">Sorry, the name must be in the format: Last, First</div>';
		$formerrors = true;
	endif; // pattern doesn't match

  $formdata = array (
    'myname' => $myname,
    'myemail' => $myemail,
    'mysubject' => $mysubject,
    'mycomments' => $mycomments,
  );

	if (!($formerrors)) :
		$to				= 	"marvinoduor@gmail.com";
		$subject	=		"From $myname -- Comment Page";
		$message	=		json_encode($formdata);

		$replyto	=		"From: fromprocessor@iviewsource.com \r\n".
									"Reply-To: donotreply@iviewsource.com \r\n";

		if (mail($to, $subject, $message)):
			$msg = "Thanks for filling out our form";
		else:
			$msg = "Problem sending the message";
		endif; // mail form data

	endif; // check for form errors

endif; //form submitted
?>
