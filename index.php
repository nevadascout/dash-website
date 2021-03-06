<!DOCTYPE html>
<head>
	<meta charset="UTF-8">

	<title>Dash - The ultimate SQF development environment for ArmA</title>

	<link rel="stylesheet" href="./styles.css">
	<script src="scroll.min.js"></script>

	<link rel="icon" type="image/png" href="./favicon.ico" />

</head>
<body>
	<div class="header home">
		<h1>Dash</h1>
		<h2>The ultimate SQF development environment</h2>

		<center>
			<img src="./img/dash-for-website.png" class="img-screenshot" />
		</center>

		<div class='links'>
			<a href='#download' class='button scroll'>Download v1.2</a>
			<a href='#features' class='meta scroll'>Take the Feature Tour &rarr;</a>
		</div>

		<div class="clear"></div>
	</div>

	<section id="features"></section>

	<div class="content">
		<div class="container">

			<div class="feature">
				<h3>Syntax Highlighting</h3>
				<img src='./img/syntax-highlighting.png' class="small-screenshot right" />

				<p class='subtitle'>Full support for SQF and CPP files</p>
				<p>Dash's syntax highlighing makes your SQF code more readable by easily separating out variables, strings and script commands.</p>
				<p>Don't like the style? Dash 1.2 supports full customisation of the syntax highlighting keywords so you can tweak them to your liking.</p>
			</div>

			<div class="feature">
				<h3>ArmaSense</h3>
				<img src='./img/armasense.gif' class="small-screenshot right" />

				<p class='subtitle'>The intelligent code suggestion/auto-completion engine for Dash.</p>
				<p>Simply start typing and ArmaSense will suggest a list of relevant scripting commands from ArmA 2:OA and ArmA 3.</p>
				<p>ArmaSense will also suggest any variables defined in the current file.</p>
				<p><i>This will be hugely expanded in Dash 2.0 to include additional features such as: showing variables defined in the current project not just the current file, plus giving variables currently in scope a higher ranking on the suggestion list.</i></p>
			</div>

			<div class="feature">
				<h3>Built-In SQF Compiler <span>Coming soon</span></h3>
				<img src='./img/sqf-compiler.png' class="small-screenshot right" />

				<p class='subtitle'>Instant error checking without needing to start Arma</p>
				<p>Simply click the compile button to start compiling the file you're working on to check for syntax errors.</p>
				<p><i>This will be hugely expanded in Dash 2.0 to display compilation errors at edit-time in the style of Word's "wavy red underlines" for code sections are that are broken &mdash; as you're typing.</i></p>
				<p><i>More info coming soon</i></p>
			</div>

			<div class="feature">
				<h3>Code Folding</h3>
				<img src='./img/code-folding.gif' class="small-screenshot right" />

				<p class='subtitle'>Easily hide code you're not working on</p>
				<p>To hide code that you're not working on you have several options.</p>
				<p>First, you can hide anything inside a set of braces ("{" and "}") by clicking the plus icon in the sidebar.</p>
				<p>Second, you can hide any other code by creating two comments: "//#region" and "//#endregion" to hide any code inbetween.</p>
			</div>

			<div class="feature">
				<h3>From 1 File To 10,000</h3>
				<img src='./img/many-files.png' class="small-screenshot right" />

				<p class='subtitle'>Dash allows you to work on Arma extensions that are of any size.</p>
				<p>From a simple, single file script, to a complicated extension comprised of hundreds of files, Dash allows you to work quickly and effectively.</p>
			</div>

			<div class="feature">
				<h3>Lookup Script Commands</h3>
				<img src='./img/lookup-definition.png' class="small-screenshot right" />

				<p class='subtitle'>Directly lookup scripting commands on the Arma Wiki</p>
				<p>Simply select an Arma scripting command eg. "addMagazineGlobal", then press F12 to open a browser tab and go directly to that page in the Bohemia Wiki.</p>
			</div>

			<div class="feature">
				<h3>RPT File Analyser <span>Coming soon</span></h3>
				<img src='./img/rpt-files.png' class="small-screenshot right" />

				<p class='subtitle'>Directly open an RPT file with Dash to analyse it</p>
				<p>Opening an RPT file in Dash will allow you to view errors quickly and easily.</p>
				<p>It will also allow you to jump straight to the offending code, and Dash will intelligently parse the error and suggest a fix for the problem.</p>
				<p><i>More info coming soon</i></p>
			</div>

			<div class="feature">
				<h3>Dash Projects <span>Coming soon</span></h3>
				<img src='./img/projects.png' class="small-screenshot right" />

				<p class='subtitle'>Manage your Arma extension project in a single place</p>
				<p>Dash will allow for creating projects that contain all files associated with your extension.</p>
				<p>It will also allow you to create PBOs and work directly inside them without the need to extract them first. Simple open the PBO in Dash and start working!</p>
				<p><i>More info coming soon</i></p>
			</div>

			<div class="feature small">
				<h3>Pack/Unpack PBOs <span>Coming soon</span></h3>
				<!-- <img src='./img/placeholder.png' class="small-screenshot right" /> -->

				<p class='subtitle'>Pack/Unpack PBO's directly from the Dash project view</p>
				<p>Right click on a folder and select "Pack PBO" to instantly create one.</p>
				<p><i>More info coming soon</i></p>
			</div>

			<div class="clear"></div>
		</div>
	</div>

	<div class="download">
		<div class="container">
			<section id="download"></section>

			<h3>Download Dash</h3>

			<div class='right download-link'>
				<a href='#' class='button'>Download Installer</a>
				<span class='meta'>v1.2 &nbsp; &bull; &nbsp; 1.5 MB</span>
				<span class='meta'><a href='#'>Release Notes</a></span>
			</div>

			<p>You can directly download the Dash installer by clicking the link to the right.</p>
			<p>Alternatively, you can find <a href='#'>Dash on Armaholic</a>.</p>
		</div>
	</div>

	<div class="footer home-footer">
		<div class="container">
			<div class="col">
				<h4>Dash Blog</h4>
				<ul>
					<li><a href='#'>Future Feature: ArmaSense + User Defined Variables</a></li>
					<li><a href='#'>SQF Coding Standards</a></li>
					<li><a href='#'>Introducing Dash</a></li>
				</ul>
			</div>

			<div class="col">
				<h4>Releases</h4>
				<ul>
					<li><a href='#'>v1.1 &mdash; March 9th 2015</a></li>
					<li><a href='#'>v1.0 &mdash; March 7th 2015</a></li>
				</ul>
			</div>

			<div class="col">
				<h4>About</h4>
				<p>Dash is written in C# and developed by <a href="https://twitter.com/nevada_scout" rel="nofollow" target="_blank">nevada_scout</a>.</p>
				<p>Dash uses an SQF lexer / parser written by <a href="http://charliehadden.co.uk/" rel="nofollow" target="_blank">Charlie Hadden</a>.</p>
				<p>Dash uses a modified version of the <a href="https://github.com/PavelTorgashov/FastColoredTextBox" rel="nofollow" target="_blank">FastColoredTextBox</a> control.</p>
			</div>

			<div class="col">
				<h4>Legal</h4>
				<p>This website is not affiliated with or authorized by Bohemia Interactive a.s. Bohemia Interactive, ArmA, DayZ and all associated logos and designs are trademarks or registered trademarks of Bohemia Interactive a.s.</p>
			</div>

			<p class='small-links'>
				<a href='https://github.com/nevadascout/dash-core/issues' rel="nofollow" target="_blank">Issue Tracker</a>
				<a href='https://github.com/nevadascout/dash-core' rel="nofollow" target="_blank">Source Code</a>
				&bull;
				&nbsp;
				Find Dash On:
				<a href='#' rel="nofollow" class='first' target="_blank">Armaholic</a>
				<a href='#' rel="nofollow" target="_blank">Bohemia Forums</a>
				<a href='#' rel="nofollow" target="_blank">Epoch Mod Forums</a>
				</p>
		</div>
	</div>
</body>
</html>