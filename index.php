<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Home | COMP1002 HTML, CSS, and JS Fundamentals</title>
		<meta name="author" content="The name of the document’s author to go here" />
		<meta name="description" content="A concise and accurate summary of the document content is to appear here">
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
		<link rel="stylesheet" href="css/styles.css" />
	</head>
	<body id="section1">
		<!-- Page-level header -->
		<header>
 			<img src="images/html-logo.svg" height="75" width="75" alt="HTML" />
			<h1>HTML, CSS, and JS Fundamentals</h1>
			<h2>Building Blocks for Web Developers</h2>
<!-- STEP 1: Cut the NAV element code below out of this file and onto your clipboard -->
<!-- STEP 2: Open the file 'global-nav.php' inside the new folder called 'includes' and look for STEP 3 -->
<!-- STEP 6: Add some PHP delimiters so that we can do some programming that will run on the server just below this comment -->
<?php
	include("includes/global-nav.php");
?>
<!-- STEP 7: Inside the above PHP code delimiters, add the include or require statement, followed by the server path to nav.php - we need the $_SERVER['DOCUMENT_ROOT'] as well as the directory path to the file, which is '\includes\global-nav.php' - upload index.php to the server and test it in the browser -->
<!-- STEP 8: Remove EVERY instance of the NAV element inside the HEADER in every page on the site and replace it with the above PHP - upload all the updated files and test them in your browser -->
<!-- STEP 9: Why would we go to all this trouble? Let's add a new link to the global navigation system by editing one single file, and having all site pages reflect this change - open up global-nav.php again in your code editor and proceed to STEP 10 -->
		</header>
		<!-- Page-level main content -->
		<main>
			<!-- News Section -->
			<section>
				<h3>Building Blocks In The News</h3>
				<!-- First Article -->
				<article>
					<h4>Latest Research Reveals Building Blocks are Cool</h4>
					<p>by Blocky Blockhead<br /><time datetime="2018-03-29">March 29, 2018</time></p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipiscing. Platea dictumst vestibulum rhoncus est pellentesque. Read more…</p>
				</article>
				<!-- Second Article -->
				<article>
					<h4>Building Blocks Aren’t Just For Kids</h4>
					<p>by Rectangle Square<br /><time datetime="2017-06-17">June 17, 2017</time></p>
					<p>Amet risus nullam eget felis eget nunc lobortis. Eget arcu dictum varius duis at consectetur lorem donec. Arcu felis bibendum ut tristique et egestas quis. Turpis tincidunt id aliquet risus feugiat in ante metus. Read more…</p>
				</article>
				<!-- Third Article -->
				<article>
					<h4>Investors Bet Big on Building Block Products</h4>
					<p>by Right Angle<br /><time datetime="2018-02-15">February 15, 2018</time></p>
					<p>At imperdiet dui accumsan sit amet nulla facilisi morbi tempus. Arcu cursus euismod quis viverra nibh cras. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper. Aenean sed adipiscing diam donec adipiscing. Read more…</p>
				</article>
			</section>
			<!-- Side Notes / Related Information -->
			<aside>
				<!-- Newsletter Subscribe Form -->
				<h3>Subscribe to Newsletter</h3>
				<form action="subscribe.php" method="get">
					<label for="emailAddress">Email</label>
					<input type="email" name="emailAddress" id="emailAddress" required />
					<button type="submit">Subscribe</button>
				</form>
				<figure>
					<img src="images/mini-figure.png" width="176" height="285" alt="Mini figure">
					<figcaption><a href="https://www.lego.com/" rel="external" title="Visit the offical LEGO® Web site">LEGO®</a> mini figure by Vanja (Public Domain)</figcaption>
					<!-- Mini figure by Vanja (Public Domain) https://openclipart.org/detail/224315/clip-is-a-brick-minifig-4 -->
				</figure>
				<h3>Did You Know…?</h3>
				<p>One of the most important components of effective life-long learning is <em>play</em>. Learning a new skill (like Web development) should include a certain amount of play. Renowned children’s programming entertainer Mr. Rogers certainly knew about the value that play represented:</p>
				<!-- Quotation -->
				<blockquote cite="https://www.brainyquote.com/quotes/fred_rogers_193081">
					<p>Play is often talked about as if it were a relief from serious learning. But for children, play <em>is</em> serious learning. Play is really the work of childhood. –Fred Rogers</p>
				</blockquote>
				<p>Take a little time every day to just <strong>play</strong> with technology – you’ll be surprised how much you learn.</p>
			</aside>
		</main>
		<!-- Page-level footer -->
		<footer>
			<!-- Fine print navigation -->
			<nav>
				<a href="about/privacy-policy.php" title="Read our Privacy Policy">Privacy Policy</a> | <a href="about/privacy-policy.php#personal-information" title="Learn about how we treat your personal information">Use of Personal Information</a> | <a href="about/terms-of-use.php" title="Understand our Terms of Use">Terms of Use</a> | <a href="about/terms-of-use.php#limitation-liability" title="Our Limitation of Liability explained">Limitation of Liability</a>
			</nav>
			<p><small>© HTML, CSS, and JS Blocks Inc.</small></p>
		</footer>
	</body>
</html>
