<?php include "_head.php" ?>

	<title>Bug Bounties &bull; Shadow Project</title>
	<meta property="og:title" content="Bug Bounties &bull; Shadow Project" />
	<meta property="og:description" content="???" />
	<meta property="og:url" content="http://shadowproject.io/bug-bounties" />
</head>
<body>


<?php include "_header.php" ?>


<div class="row">
	<div class="medium-4 large-3 columns">


		<div id="sidebar">
			<ul class="nav">
				<li><a href="/">About</a></li>
				<li><a href="getting-started">Getting started</a></li>
				<li><a href="features">Features</a></li>
				<li><a href="documentation">Documentation</a></li>
				<li><a href="development">Development</a></li>
				<li><a class="active" href="bug-bounties">Bug Bounties</a></li>
				<li><a href="community">Community</a></li>
				<li><a href="faq">FAQ</a></li>
				<li><a href="contact">Contact</a></li>
			</ul>
		</div><!-- #sidebar -->


	</div>
	<div class="medium-8 large-9 columns">


		<div id="content">
			<h2>Shadow Bug &amp; Bounty Program</h2>
			<p>
				According to <a href="http://en.wikipedia.org/wiki/Linus">Linus’ Law</a>, <em>“given enough eyeballs, all bugs are shallow”</em>. That’s one of the reasons why Shadow’s source code is publicly available; but merely making the source code available doesn’t accomplish anything if people don’t read it!
			</p>
			<p>
				For this reason, Shadow has a series of bug bounties. Similar to the bounties offered by <a href="http://www.mozilla.org/security/bug-bounty.html">Mozilla</a> and <a href="http://blog.chromium.org/2010/01/encouraging-more-chromium-security.html">Google</a>, Shadow bug bounties provide an opportunity for people who find bugs to be compensated. Unlike those programs, however, Shadow’s bounties are not limited to security vulnerabilities.
			</p>
			<p>
				Depending on the type of bug and when it is reported, different bounties will be awarded. Bounties are paid out in SDC, at the 3-day average of each to a fixed US Dollar value.
			</p>

			<h3>Things that do not qualify under the bug bounty</h3>
			<ul>
				<li>Bugs found on third-party/community sites, software or services, which is not due to an improper configuration issue specific to us. Please submit any potential issues to the maintainers of that site or providers of that service.</li>
				<li>Vulnerabilities which are too broad or not documented properly (i.e. do not include a specific example relevant to a Shadow-controlled site or application).</li>
				<li>Bugs or issues with a third-party site, software, or service that we use, which is not due to an improper configuration issue specific to us. Please submit any potential issues to the maintainers of that site or providers of that service.</li>
				<li>Bugs and errors found in software/code that is still undergoing alpha or beta testing.</li>
				<li>Usability issues</li>
				<li>Anything requiring social engineering</li>
				<li>DOS/DDOS attacks</li>
				<li>Missing HSTS (HttpOnly flags), Secure flag, Browser Cache vulnerabilities</li>
				<li>CSRF that doesn’t affect the victim</li>
				<li>Referrer leakage to pages an attacker cannot control.</li>
				<li>The presence of unnecessary files, e.g. for backups, when these files do not expose any sensitive information.</li>
				<li>Anything that is the result of an automated Nessus/PCI scans (too general)</li>
				<li>DNS issues (e.g. lack of an SPF record)</li>
				<li>SSL certificate issues</li>
				<li>Bugs that have received mainstream tech media or community attention before the date of your disclosure.</li>
			</ul>

			<h2>Bug Bounties &amp; Rewards</h2>
			<table>
				<tr>
					<th>$1500</th>
					<td>Deanonymize ShadowChat or ShadowSend (proof that a protocol is not anonymous)</td>
				</tr>
				<tr>
					<th>$750</th>
					<td>A flaw in the protocol that allows for theft or loss of funds</td>
				</tr>
				<tr>
					<th>$500</th>
					<td>A bug in the reference client that leads to consensus issues</td>
				</tr>
				<tr>
					<th>$250</th>
					<td>A bug which causes data corruption or loss</td>
				</tr>
				<tr>
					<th>$100</th>
					<td>A bug which causes the application to crash</td>
				</tr>
				<tr>
					<th>$50</th>
					<td>Other non-harmless bugs</td>
				</tr>
				<tr>
					<th>$10</th>
					<td>‘Harmless’ bugs, e.g. cosmetic errors</td>
				</tr>
			</table>
			<p>
				<em>Note</em> &mdash; Bounties will be paid out for bugs found in the <a href="https://github.com/ShadowProject/shadow/tree/master">master branch of the official GitHub repositories</a>.
			</p>
		</div><!-- #content -->


	</div>
</div>


<?php include "_footer.php" ?>
