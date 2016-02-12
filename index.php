<!DOCTYPE html>
<HTML>
	<HEAD>
		<META charset="UTF-8" />
		<TITLE>Social</TITLE>
		<LINK href = 'http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel = 'stylesheet' type = 'text/css' />
		<LINK rel = "stylesheet" href = "CSS/Login And Register/normalize.css" />
		<LINK rel="stylesheet" href="CSS/Login And Register/style.css" />
	</HEAD>
	<BODY>
		<DIV class = "form">
			<UL class = "tab-group">
				<LI class = "tab active">
					<A href = "#signup">Sign Up</A>
				</LI>
				<LI class = "tab">
					<A href = "#login">Log In</A>
				</LI>
			</UL>
			<DIV class = "tab-content">
				<DIV id = "signup">
					<H1>Sign Up for Free</H1>
					<FORM action = "/" method = "post">
						<DIV class = "top-row">
							<DIV class = "field-wrap">
								<LABEL>
									First Name<SPAN class = "req">*</SPAN>
								</LABEL>
								<INPUT type = "text" required autocomplete = "off" />
							</DIV>
							<DIV class = "field-wrap">
								<LABEL>
									Last Name<SPAN class = "req">*</SPAN>
								</LABEL>
								<INPUT type = "text" required autocomplete = "off"/>
							</DIV>
						</DIV>
						<DIV class = "field-wrap">
							<LABEL>
								Email Address<SPAN class = "req">*</SPAN>
							</LABEL>
							<INPUT type = "email" required autocomplete = "off"/>
						</DIV>
						<DIV class = "field-wrap">
							<LABEL>
								Set A Password<SPAN class = "req">*</SPAN>
							</LABEL>
							<INPUT type = "password" required autocomplete = "off"/>
						</DIV>
						<BUTTON type = "submit" class="button button-block"/>Get Started</BUTTON>
					</FORM>
				</DIV>
				<DIV id = "login">
					<H1>Welcome Back!</H1>
					<FORM action = "/" method = "post">
						<DIV class = "field-wrap">
							<LABEL>
								Email Address<SPAN class = "req">*</SPAN>
							</LABEL>
							<INPUT type = "email" required autocomplete = "off"/>
						</DIV>
						<DIV class = "field-wrap">
							<LABEL>
								Password<SPAN class = "req">*</SPAN>
							</LABEL>
							<INPUT type = "password" required autocomplete = "off"/>
						</DIV>
						<P class = "forgot">
							<A href = "#">Forgot Password?</A>
						</P>
						<BUTTON class = "button button-block"/>Log In</BUTTON>
					</FORM>
				</DIV>
			</DIV><!-- tab-content -->
		</DIV> <!-- /form -->
		<SCRIPT src = 'http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></SCRIPT>
		<SCRIPT src = "JS/Login And Register/index.js"></SCRIPT>
	</BODY>
</HTML>
