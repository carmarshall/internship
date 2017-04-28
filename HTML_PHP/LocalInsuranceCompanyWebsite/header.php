<?
$m = substr($_SERVER["SCRIPT_NAME"], 1, 5);
?>
<div id="page">
	<div id="header">
		<a href="/">	<img class="logo" src="/image/logo.gif" alt="Beiler Insurance Agency logo"></a>
		<div class="contactinfo">
			<div class="text">BEILER INSURANCE AGENCY</div>
			<div class="slogan">Affordable Insurance</div>
			<div class="phone">717-442-9234</div>
			<div class="addthis">
			<!-- <div class="addthis_native_toolbox"></div> -->
				<div class="addthis_horizontal_follow_toolbox"></div>
				<div class="addthis_sharing_toolbox"></div>
		</div>
	</div>
	</div>
	<div id="menu">
		<ul>
			<li><a id="linkHome<?= $m == "index" ? "Sel" : "" ?>" href="/">Home</a></li>
			<li><a id="linkPersonal<?= $m == "perso" ? "Sel" : "" ?>" href="/personal/">Personal</a></li>
			<li><a id="linkBusiness<?= $m == "busin" ? "Sel" : "" ?>" href="/business/">Business</a></li>
			<li><a id="linkQuotes<?= $m == "quote" ? "Sel" : "" ?>" href="/quotes/">Quotes</a></li>
			<li><a id="linkGlossary<?= $m == "gloss" ? "Sel" : "" ?>" href="/glossary/">Glossary</a></li>
			<li><a id="linkCompanies<?= $m == "compa" ? "Sel" : "" ?>" href="/companies/">Companies</a></li>
			<li><a id="linkContact<?= $m == "conta" ? "Sel" : "" ?>" href="/contact/">Contact Us</a></li>
		</ul>
	</div>
	<div id="content">
