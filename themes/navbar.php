<nav class="container">
	<div id="logo">
		<h1><a href="/webshop/public_html/index.php">Amanda & Co.</a></h1>
	</div>
	<div id="menu">
		<ul>
<!--			<li><a href="/webshop/public_html/menukaart.php">Menukaart</a></li> -->
			<li><a href="/webshop/public_html/bestellen.php">Bestellen</a></li>
			<li><a href="/webshop/public_html/openingstijden.php">Openingstijden</a></li>
			<li><a href="/webshop/public_html/about.php">Het Team</a></li>
			<li><a href="/webshop/public_html/contact.php">Contact</a></li>
			<?php if (isset($_SESSION['email'])) : ?>
			<li><a href="/webshop/include/logout.php">Logout</a></li>
			<?php else : ?>
				<li><a href="/webshop/public_html/login.php">Mijn Account</a></li>
			<?php endif; ?>
		</ul>
	</div>
</nav>
<!--
			<?php// if (isset($_SESSION['email'])) : ?>
				<ul>
					<li><a href="/webshop/public_html/#.php">Placeholder Text</a></li>
					<li><a href="/webshop/public_html/#.php">Placeholder Text</a></li>
					<li><a href="/webshop/public_html/#.php">Placeholder Text</a></li>
				</ul>
			<?php// endif; ?>
-->
<main>