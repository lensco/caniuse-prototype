<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Can I Use ... Compatibility tables for support of HTML5, CSS3, SVG and more in desktop and mobile browsers</title>
	<link href="<?php if ($_GET['c'] == "light") { echo "light"; } else { echo "dark"; } ?>.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
	<meta name="viewport" content="width=device-width">
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->
	<script>
	function toggle(selector) {
		$selector = document.querySelector(selector);
		if($selector.style.display == 'none') {
			$selector.style.display = 'block';
		} else {
			$selector.style.display = 'none';
		}
	}
	function show(selector) {
		document.querySelector(selector).style.display = 'block';
	}
	function hide(selector) {
		document.querySelector(selector).style.display = 'none';
	}
	</script>
</head>
<body>
	<nav role="navigation">
		<ul class="left">
			<li><a href="#">About</a></li>
			<li><a href="#">News</a></li>
		</ul>
		<a class="news" href="#">
			<span class="date">December 9, 2012 -</span> Three new features added: Strict Transport Security, CSS outline property and download attribute
		</a>
		<ul class="right">
			<li><a href="#" onclick="javascript:toggle('#comparison_wrap'); toggle('#options_compare'); toggle('.feature');">Compare<span> browsers</span></a></li>
			<li><a href="#" class="index" onclick="javascript:toggle('#index')"><i class="icon index"></i> Index</a></li>
		</ul>
	</nav>
	
	<aside id="top_ad">
		<!-- ad placeholder code -->
		<div style=" border: medium none; color: #DB9E00; display: inline-table; height: 15px; margin: 0; padding: 0; position: relative; visibility: visible; width: 728px;">
			text ads here
		</div>
	</aside>
	
	<section class="search" role="search">
		Can I use
		<input type="text" name="feat_search" autocomplete="off" autofocus value="flexbox">
		?
		<a href="#" class="options" onclick="javascript:toggle('#options');">
			<i class="icon settings"></i>
			<span>Settings</span>
		</a>
	</section>
	
	<section id="options" class="searchPanel" style="display: none;">
		<fieldset id="cats">
			<legend>Category</legend>
			<label><input type="checkbox" value="All" checked> All</label> 
			<label><input type="checkbox" value="CSS" checked> CSS</label> 
			<label><input type="checkbox" value="HTML5" checked> HTML5</label> 
			<label><input type="checkbox" value="JS API" checked> JS API</label> 
			<label><input type="checkbox" value="SVG" checked> SVG</label> 
			<label><input type="checkbox" value="Other" checked> Other</label>
		</fieldset>
		<fieldset id="statuses">
			<legend>Status</legend>
			<label><input type="checkbox" value="All"> All</label> 
			<label><input type="checkbox" value="rec" checked> Recommendation</label> 
			<label><input type="checkbox" value="pr" checked> Proposed Rec.</label> 
			<label><input type="checkbox" value="cr" checked> Candidate Rec.</label> 
			<label><input type="checkbox" value="wd" checked> Working Draft</label> 
			<label><input type="checkbox" value="other" checked> Other</label> 
			<label><input type="checkbox" value="unoff"> Unofficial / Note</label>
		</fieldset>
		<fieldset id="agents">
			<legend>Web Browser</legend>
			<p><label><input type="checkbox" onclick="caniuse.selAll(this);" value="All"> All</label></p>
			<div class="optwrap">
				<label><input type="checkbox" value="desktop" checked> Desktop</label>
				<div class="desktop">
					<label><input type="checkbox" value="ie" checked> IE</label> 
					<label><input type="checkbox" value="firefox" checked> Firefox</label> 
					<label><input type="checkbox" value="chrome" checked> Chrome</label> 
					<label><input type="checkbox" value="safari" checked> Safari</label> 
					<label><input type="checkbox" value="opera" checked> Opera</label>
				</div>
			</div>
			<div class="optwrap">
				<label><input type="checkbox" value="mobile" checked> Mobile</label>
				<div class="mobile">
					<label><input type="checkbox" value="ios_saf" checked> iOS Safari</label> 
					<label><input type="checkbox" value="op_mini" checked> Opera Mini</label> 
					<label><input type="checkbox" value="android" checked> Android Browser</label> 
					<label><input type="checkbox" value="op_mob"> Opera Mobile</label> 
					<label><input type="checkbox" value="bb" checked> Blackberry Browser</label> 
					<label><input type="checkbox" value="and_chr"> Chrome for Android</label> 
					<label><input type="checkbox" value="and_ff"> Firefox for Android</label>
				</div>
			</div>
		</fieldset>
		<fieldset id="eras">
			<legend>Versions shown</legend>
			<label>
				Minimum browser usage %:<br>
				<input id="version_threshold" type="range" step="0.1" min="0" max="10" value="0">
			</label>
			<p class="dim">
				Threshold set at <span id="usage_val">0.88</span>%<br>
				Total users not shown is <span id="missing_val">8.1</span>%
			</p>
			<label><input type="checkbox" id="include_all_mobile" checked> Show all mobile versions</label>		
		</fieldset>
		<fieldset id="misc">
			<legend>Other options</legend>
			<p>
				<label><input type="checkbox" value="p"> Accept polyfills</label>
				<label><input type="checkbox" value="bw_shaded"> Accessible colors</label>
				<label><input type="checkbox" value="show_conc"> Show conclusions</label>
			</p>
			<label>Sort
				<select name="sort" onchange="caniuse.MC()">
					<option value="usr_score">Most users first</option>
					<option value="rusr_score">Least users first</option>
					<option value="score">Most supported first</option>
					<option value="rscore">Least support first</option>
					<option value="alpha">Alphabetical</option>
					<option value="ralpha">Reverse Alphabetical</option>
				</select>
			</label>
		</fieldset>
		
		<input class="button import" type="button" value="Import stats" onclick="javascript:hide('#options');show('#import');">
		<input class="button save" type="submit" value="Save" onclick="javascript:hide('#options');">
	</section>
	
	<section id="import" class="searchPanel" style="display: none;">
		<h2>Import statistics (beta)</h2>
		<p>Using this form, you can import visitor statistics from your Google Analytics account(s). Once imported, the information is displayed in the upper-right corner for each feature table. Browser statistics are stored in your browser for future use.</p>
		<input type="submit" value="Load" onclick="javascript:hide('#import');">
	</section>
	
	<div id="options_compare" style="display:none">
		<p class="browser_compare_note">Select browsers to compare</p><fieldset id="cats"><legend>Category</legend><label><input type="checkbox" checked="" value="All" onclick="caniuse.selAll(this);">All</label><p><input type="checkbox" checked="" value="PNG" onclick="caniuse.MC()"><a href="#" onclick="return caniuse.MC('PNG')">PNG</a></p><p><input type="checkbox" checked="" value="Other" onclick="caniuse.MC()"><a href="#" onclick="return caniuse.MC('Other')">Other</a></p><p><input type="checkbox" checked="" value="HTML5" onclick="caniuse.MC()"><a href="#" onclick="return caniuse.MC('HTML5')">HTML5</a></p><p><input type="checkbox" checked="" value="DOM" onclick="caniuse.MC()"><a href="#" onclick="return caniuse.MC('DOM')">DOM</a></p><p><input type="checkbox" checked="" value="JS API" onclick="caniuse.MC()"><a href="#" onclick="return caniuse.MC('JS API')">JS API</a></p><p><input type="checkbox" checked="" value="CSS3" onclick="caniuse.MC()"><a href="#" onclick="return caniuse.MC('CSS3')">CSS3</a></p><p><input type="checkbox" checked="" value="CSS" onclick="caniuse.MC()"><a href="#" onclick="return caniuse.MC('CSS')">CSS</a></p><p><input type="checkbox" checked="" value="CSS2" onclick="caniuse.MC()"><a href="#" onclick="return caniuse.MC('CSS2')">CSS2</a></p><p><input type="checkbox" checked="" value="SVG" onclick="caniuse.MC()"><a href="#" onclick="return caniuse.MC('SVG')">SVG</a></p><p><input type="checkbox" checked="" value="Canvas" onclick="caniuse.MC()"><a href="#" onclick="return caniuse.MC('Canvas')">Canvas</a></p><p><input type="checkbox" checked="" value="Summary" onclick="caniuse.MC()"><a href="#" onclick="return caniuse.MC('Summary')">Summary</a></p></fieldset><fieldset id="statuses"><legend>Status</legend><label><input type="checkbox" value="All" onclick="caniuse.selAll(this);">All</label><label><input type="checkbox" checked="" value="rec" onclick="caniuse.MC()">Recommendation</label><label><input type="checkbox" checked="" value="pr" onclick="caniuse.MC()">Proposed Rec.</label><label><input type="checkbox" checked="" value="cr" onclick="caniuse.MC()">Candidate Rec.</label><label><input type="checkbox" checked="" value="wd" onclick="caniuse.MC()">Working Draft</label><label><input type="checkbox" checked="" value="other" onclick="caniuse.MC()">Other</label><label><input type="checkbox" value="unoff" onclick="caniuse.MC()">Unofficial / Note</label></fieldset><form id="comp_opts"><fieldset class="browser_opts"><legend>IE</legend><label><input type="checkbox" value="ie+5.5" onchange="caniuse.MC(0, this)">5.5</label><label><input type="checkbox" value="ie+6" onchange="caniuse.MC(0, this)">6.0</label><label><input type="checkbox" value="ie+7" onchange="caniuse.MC(0, this)">7.0</label><label><input type="checkbox" value="ie+8" onchange="caniuse.MC(0, this)">8.0</label><label><input type="checkbox" value="ie+9" onchange="caniuse.MC(0, this)">9.0</label><label><input type="checkbox" value="ie+10" onchange="caniuse.MC(0, this)">10.0</label></fieldset><fieldset class="browser_opts"><legend>Firefox</legend><label><input type="checkbox" value="firefox+2" onchange="caniuse.MC(0, this)">2.0</label><label><input type="checkbox" value="firefox+3" onchange="caniuse.MC(0, this)">3.0</label><label><input type="checkbox" value="firefox+3.5" onchange="caniuse.MC(0, this)">3.5</label><label><input type="checkbox" value="firefox+3.6" onchange="caniuse.MC(0, this)">3.6</label><label><input type="checkbox" value="firefox+4" onchange="caniuse.MC(0, this)">4.0</label><label><input type="checkbox" value="firefox+5" onchange="caniuse.MC(0, this)">5.0</label><label><input type="checkbox" value="firefox+6" onchange="caniuse.MC(0, this)">6.0</label><label><input type="checkbox" value="firefox+7" onchange="caniuse.MC(0, this)">7.0</label><label><input type="checkbox" value="firefox+8" onchange="caniuse.MC(0, this)">8.0</label><label><input type="checkbox" value="firefox+9" onchange="caniuse.MC(0, this)">9.0</label><label><input type="checkbox" value="firefox+10" onchange="caniuse.MC(0, this)">10.0</label><label><input type="checkbox" value="firefox+11" onchange="caniuse.MC(0, this)">11.0</label><label><input type="checkbox" value="firefox+12" onchange="caniuse.MC(0, this)">12.0</label><label><input type="checkbox" value="firefox+13" onchange="caniuse.MC(0, this)">13.0</label><label><input type="checkbox" value="firefox+14" onchange="caniuse.MC(0, this)">14.0</label><label><input type="checkbox" value="firefox+15" onchange="caniuse.MC(0, this)">15.0</label><label><input type="checkbox" value="firefox+16" onchange="caniuse.MC(0, this)">16.0</label><label><input type="checkbox" value="firefox+17" onchange="caniuse.MC(0, this)">17.0</label><label><input type="checkbox" value="firefox+18" onchange="caniuse.MC(0, this)">18.0</label><label><input type="checkbox" checked="" value="firefox+19" onchange="caniuse.MC(0, this)">19.0</label><label><input type="checkbox" value="firefox+20" onchange="caniuse.MC(0, this)">20.0</label><label><input type="checkbox" value="firefox+21" onchange="caniuse.MC(0, this)">21.0</label></fieldset><fieldset class="browser_opts"><legend>Chrome</legend><label><input type="checkbox" value="chrome+4" onchange="caniuse.MC(0, this)">4.0</label><label><input type="checkbox" value="chrome+5" onchange="caniuse.MC(0, this)">5.0</label><label><input type="checkbox" value="chrome+6" onchange="caniuse.MC(0, this)">6.0</label><label><input type="checkbox" value="chrome+7" onchange="caniuse.MC(0, this)">7.0</label><label><input type="checkbox" value="chrome+8" onchange="caniuse.MC(0, this)">8.0</label><label><input type="checkbox" value="chrome+9" onchange="caniuse.MC(0, this)">9.0</label><label><input type="checkbox" value="chrome+10" onchange="caniuse.MC(0, this)">10.0</label><label><input type="checkbox" value="chrome+11" onchange="caniuse.MC(0, this)">11.0</label><label><input type="checkbox" value="chrome+12" onchange="caniuse.MC(0, this)">12.0</label><label><input type="checkbox" value="chrome+13" onchange="caniuse.MC(0, this)">13.0</label><label><input type="checkbox" value="chrome+14" onchange="caniuse.MC(0, this)">14.0</label><label><input type="checkbox" value="chrome+15" onchange="caniuse.MC(0, this)">15.0</label><label><input type="checkbox" value="chrome+16" onchange="caniuse.MC(0, this)">16.0</label><label><input type="checkbox" value="chrome+17" onchange="caniuse.MC(0, this)">17.0</label><label><input type="checkbox" value="chrome+18" onchange="caniuse.MC(0, this)">18.0</label><label><input type="checkbox" value="chrome+19" onchange="caniuse.MC(0, this)">19.0</label><label><input type="checkbox" value="chrome+20" onchange="caniuse.MC(0, this)">20.0</label><label><input type="checkbox" value="chrome+21" onchange="caniuse.MC(0, this)">21.0</label><label><input type="checkbox" value="chrome+22" onchange="caniuse.MC(0, this)">22.0</label><label><input type="checkbox" value="chrome+23" onchange="caniuse.MC(0, this)">23.0</label><label><input type="checkbox" value="chrome+24" onchange="caniuse.MC(0, this)">24.0</label><label><input type="checkbox" checked="" value="chrome+25" onchange="caniuse.MC(0, this)">25.0</label><label><input type="checkbox" value="chrome+26" onchange="caniuse.MC(0, this)">26.0</label><label><input type="checkbox" value="chrome+27" onchange="caniuse.MC(0, this)">27.0</label></fieldset><fieldset class="browser_opts"><legend>Safari</legend><label><input type="checkbox" value="safari+3.1" onchange="caniuse.MC(0, this)">3.1</label><label><input type="checkbox" value="safari+3.2" onchange="caniuse.MC(0, this)">3.2</label><label><input type="checkbox" value="safari+4" onchange="caniuse.MC(0, this)">4.0</label><label><input type="checkbox" value="safari+5" onchange="caniuse.MC(0, this)">5.0</label><label><input type="checkbox" value="safari+5.1" onchange="caniuse.MC(0, this)">5.1</label><label><input type="checkbox" value="safari+6" onchange="caniuse.MC(0, this)">6.0</label></fieldset><fieldset class="browser_opts"><legend>Opera</legend><label><input type="checkbox" value="opera+9.5-9.6" onchange="caniuse.MC(0, this)">9.5-9.6</label><label><input type="checkbox" value="opera+10.0-10.1" onchange="caniuse.MC(0, this)">10.0-10.1</label><label><input type="checkbox" value="opera+10.5" onchange="caniuse.MC(0, this)">10.5</label><label><input type="checkbox" value="opera+10.6" onchange="caniuse.MC(0, this)">10.6</label><label><input type="checkbox" value="opera+11" onchange="caniuse.MC(0, this)">11.0</label><label><input type="checkbox" value="opera+11.1" onchange="caniuse.MC(0, this)">11.1</label><label><input type="checkbox" value="opera+11.5" onchange="caniuse.MC(0, this)">11.5</label><label><input type="checkbox" value="opera+11.6" onchange="caniuse.MC(0, this)">11.6</label><label><input type="checkbox" value="opera+12" onchange="caniuse.MC(0, this)">12.0</label><label><input type="checkbox" value="opera+12.1" onchange="caniuse.MC(0, this)">12.1</label><label><input type="checkbox" value="opera+12.5" onchange="caniuse.MC(0, this)">12.5</label></fieldset><fieldset class="browser_opts"><legend>iOS Safari</legend><label><input type="checkbox" value="ios_saf+3.2" onchange="caniuse.MC(0, this)">3.2</label><label><input type="checkbox" value="ios_saf+4.0-4.1" onchange="caniuse.MC(0, this)">4.0-4.1</label><label><input type="checkbox" value="ios_saf+4.2-4.3" onchange="caniuse.MC(0, this)">4.2-4.3</label><label><input type="checkbox" value="ios_saf+5.0-5.1" onchange="caniuse.MC(0, this)">5.0-5.1</label><label><input type="checkbox" value="ios_saf+6" onchange="caniuse.MC(0, this)">6.0</label></fieldset><fieldset class="browser_opts"><legend>Opera Mini</legend><label><input type="checkbox" value="op_mini+5.0-7.0" onchange="caniuse.MC(0, this)">5.0-7.0</label></fieldset><fieldset class="browser_opts"><legend>Android Browser</legend><label><input type="checkbox" value="android+2.1" onchange="caniuse.MC(0, this)">2.1</label><label><input type="checkbox" value="android+2.2" onchange="caniuse.MC(0, this)">2.2</label><label><input type="checkbox" value="android+2.3" onchange="caniuse.MC(0, this)">2.3</label><label><input type="checkbox" value="android+3" onchange="caniuse.MC(0, this)">3.0</label><label><input type="checkbox" value="android+4" onchange="caniuse.MC(0, this)">4.0</label><label><input type="checkbox" value="android+4.1" onchange="caniuse.MC(0, this)">4.1</label><label><input type="checkbox" value="android+4.2" onchange="caniuse.MC(0, this)">4.2</label></fieldset><fieldset class="browser_opts"><legend>Blackberry Browser</legend><label><input type="checkbox" value="bb+7" onchange="caniuse.MC(0, this)">7.0</label><label><input type="checkbox" value="bb+10" onchange="caniuse.MC(0, this)">10.0</label></fieldset><fieldset class="browser_opts"><legend>Opera Mobile</legend><label><input type="checkbox" value="op_mob+10" onchange="caniuse.MC(0, this)">10.0</label><label><input type="checkbox" value="op_mob+11.5" onchange="caniuse.MC(0, this)">11.5</label><label><input type="checkbox" value="op_mob+12" onchange="caniuse.MC(0, this)">12.0</label><label><input type="checkbox" value="op_mob+12.1" onchange="caniuse.MC(0, this)">12.1</label></fieldset><fieldset class="browser_opts"><legend>Chrome for Android</legend><label><input type="checkbox" value="and_chr+0" onchange="caniuse.MC(0, this)">18.0</label></fieldset><fieldset class="browser_opts"><legend>Firefox for Android</legend><label><input type="checkbox" value="and_ff+0" onchange="caniuse.MC(0, this)">14.0</label></fieldset></form>
	</div>
	
	<div id="content">
		<article class="feature" id="datauri" role="article">
			<a class="permalink" href="#feat=datauri" title="Permanent link to the Flexible Box Layout Module compatibility table">#</a>

			<h1>Flexible Box Layout Module</h1>
			<a class="specification cr" href="http://www.w3.org/TR/css3-flexbox/">
				<i class="icon spec"></i>
				CR
			</a>
	
			<p class="description">Method of positioning elements in horizontal or vertical stacks.</p>
	
			<aside class="supportStats">
				Support
				<span class="support" title="The CSS3 Animations feature is fully available to 35.4% of browser users worldwide.">35.4%</span> +
				<span class="partial" title="The CSS3 Animations feature is partly available to 44.6% of browser users worldwide.">44.6%</span> =
				<span class="total" title="The CSS3 Animations feature is available to 79.9% of browser users worldwide.">79.9%</span>
			</aside>		
			
			<div class="support_container view-mode-normal">
				<table>
					<thead>
						<tr>
							<th class="ie">IE</th>
							<th class="firefox">Firefox</th>
							<th class="chrome">Chrome</th>
							<th class="safari">Safari</th>
							<th class="opera">Opera</th>
							<th class="ios_saf">iOS Safari</th>
							<th class="op_mini">Opera Mini</th>
							<th class="android">Android Browser</th>
							<th class="bb">Blackberry Browser</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>			
								<ol>
									<li></li>
									<li class="stat-cell n past">8</li>
									<li class="stat-cell n past">9</li>
									<li class="stat-cell a x  current">
										10
										<h5 class="note-header"> See notes: </h5>
										<ul class="note-list"><span class="num-tag num-tag--2">2</span></ul>
									</li>
									<li class="stat-cell y future">11</li>
								</ol>
							</td>
							<td>
								<ol>
									<li></li>
									<li class="stat-cell a x  past">
										21
										<h5 class="note-header"> See notes: </h5>
										<ul class="note-list"><span class="num-tag num-tag--1">1</span></ul>
									</li>
									<li class="stat-cell a  past">
										22
										<h5 class="note-header"> See notes: </h5>
										<ul class="note-list"><span class="num-tag num-tag--3">3</span></ul>
									</li>
									<li class="stat-cell a  current">
										23
										<h5 class="note-header"> See notes: </h5>
										<ul class="note-list"><span class="num-tag num-tag--3">3</span></ul>
									</li>
									<li class="stat-cell a  future">
										24
										<h5 class="note-header"> See notes: </h5>
										<ul class="note-list"><span class="num-tag num-tag--3">3</span></ul>
									</li>
								</ol>
							</td>
							<td>
								<ol>
									<li></li>
									<li class="stat-cell y x past">26</li>
									<li class="stat-cell y x past">27</li>
									<li class="stat-cell y x current">28</li>
									<li class="stat-cell y future">29</li>
								</ol>
							</td>
							<td>
								<ol>
									<li></li>
									<li></li>
									<li class="stat-cell a x  past">
										5.1
										<h5 class="note-header"> See notes: </h5>
										<ul class="note-list"><span class="num-tag num-tag--1">1</span></ul>
									</li>
									<li class="stat-cell a x  current">
										6
										<h5 class="note-header"> See notes: </h5>
										<ul class="note-list"><span class="num-tag num-tag--1">1</span></ul>
									</li>
									<li class="stat-cell y x future">7</li>
								</ol>
							</td>
							<td>
								<ol>
									<li></li>
									<li></li>
									<li class="stat-cell y past">12.1</li>
									<li class="stat-cell y x current">15</li>
									<li class="stat-cell y x future">16</li>
								</ol>
							</td>
							<td>
								<ol>
									<li></li>
									<li></li>
									<li class="stat-cell a x  past">
										5.0-5.1
										<h5 class="note-header"> See notes: </h5>
										<ul class="note-list"><span class="num-tag num-tag--1">1</span></ul>
									</li>
									<li class="stat-cell a x  current">
										6.0-6.1
										<h5 class="note-header"> See notes: </h5>
										<ul class="note-list"><span class="num-tag num-tag--1">1</span></ul>
									</li>
									<li class="stat-cell y x future">7.0</li>
								</ol>
							</td>
							<td>
								<ol>
									<li></li>
									<li></li>
									<li></li>
									<li class="stat-cell n current">5.0-7.0</li>
									<li></li>
								</ol>
							</td>
							<td>
								<ol>
									<li class="stat-cell a x  past">
										2.3
										<h5 class="note-header"> See notes: </h5>
										<ul class="note-list"><span class="num-tag num-tag--1">1</span></ul>
									</li>
									<li class="stat-cell a x  past">
										4
										<h5 class="note-header"> See notes: </h5>
										<ul class="note-list"><span class="num-tag num-tag--1">1</span></ul>
									</li>
									<li class="stat-cell a x  past">
										4.1
										<h5 class="note-header"> See notes: </h5>
										<ul class="note-list"><span class="num-tag num-tag--1">1</span></ul>
									</li>
									<li class="stat-cell a x  current">
										4.2
										<h5 class="note-header"> See notes: </h5>
										<ul class="note-list"><span class="num-tag num-tag--1">1</span></ul>
									</li>
									<li></li>
								</ol>
							</td>
							<td>
								<ol>
									<li></li>
									<li></li>
									<li></li>
									<li class="stat-cell y x current">10</li>
									<li></li>
								</ol>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
	
			<div class="feature-tab-container">
				<ul>
					<li data-tab="notes" class="active">Notes</li>
					<li data-tab="bugs">Known issues (0)</li>
					<li data-tab="resources">Resources (3)</li>
					<li data-tab="feedback">Feedback</li>
					<li data-tab="embed">Embed</li>
				</ul>
			</div>
			<div class="feature-panel-container">
				<div data-panel="notes" class="feature-notes">
					Partial support in Android browser refers to buggy behavior in different scenarios. Support in Opera 12 is expected, but not assured.
				</div>
				<div data-panel="bugs" class="feature-bugs" style="display:none">
					<span class="note">No known issues</span>
				</div>
				<div data-panel="resources" style="display:none">
					<ul>
						<li>
							<a href="http://www.w3.org/TR/css3-animations/">Specification</a> [w3.org]  <span class="linktag link-reference">reference</span>
						</li>
						<li>
							<a href="http://robertnyman.com/2010/05/06/css3-animations/">Blog post on usage</a> [robertnyman.com]  <span class="linktag link-info">info</span>
						</li>
						<li>
							<a href="http://www.css3files.com/animation/">Information page</a> [css3files.com]  <span class="linktag link-info">info</span>
						</li>
					</ul>
				</div>
			</div>
		</article>
		<div id="comparison_wrap" style="display:none">
			<table id="browser_comparison"><caption></caption><thead><tr><th></th><th class="firefox">Firefox 19.0</th><th class="chrome">Chrome 25.0</th></tr></thead><tbody><tr><th><a onclick="caniuse.feat='xhtml';caniuse.setMode('wciu');return false;" href="#feat=xhtml">XHTML served as application/xhtml+xml</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='xhr2';caniuse.setMode('wciu');return false;" href="#feat=xhr2">XMLHttpRequest 2</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='x-doc-messaging';caniuse.setMode('wciu');return false;" href="#feat=x-doc-messaging">Cross-document messaging</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='woff';caniuse.setMode('wciu');return false;" href="#feat=woff">WOFF - Web Open Font Format</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='webworkers';caniuse.setMode('wciu');return false;" href="#feat=webworkers">Web Workers</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='websockets';caniuse.setMode('wciu');return false;" href="#feat=websockets">Web Sockets</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='webm';caniuse.setMode('wciu');return false;" href="#feat=webm">WebM/VP8 video format</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='video';caniuse.setMode('wciu');return false;" href="#feat=video">Video element</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='use-strict';caniuse.setMode('wciu');return false;" href="#feat=use-strict">ECMAScript 5 Strict Mode</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='typedarrays';caniuse.setMode('wciu');return false;" href="#feat=typedarrays">Typed Arrays</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='ttf';caniuse.setMode('wciu');return false;" href="#feat=ttf">TTF/OTF - TrueType and OpenType font support</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='transforms3d';caniuse.setMode('wciu');return false;" href="#feat=transforms3d">CSS3 3D Transforms</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='transforms2d';caniuse.setMode('wciu');return false;" href="#feat=transforms2d">CSS3 Transforms</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='touch';caniuse.setMode('wciu');return false;" href="#feat=touch">Touch events</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='text-overflow';caniuse.setMode('wciu');return false;" href="#feat=text-overflow">CSS3 Text-overflow</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='svg-smil';caniuse.setMode('wciu');return false;" href="#feat=svg-smil">SVG SMIL animation</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='svg-img';caniuse.setMode('wciu');return false;" href="#feat=svg-img">SVG in HTML img element</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='svg-html5';caniuse.setMode('wciu');return false;" href="#feat=svg-html5">Inline SVG in HTML5</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='svg-filters';caniuse.setMode('wciu');return false;" href="#feat=svg-filters">SVG filters</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='svg-css';caniuse.setMode('wciu');return false;" href="#feat=svg-css">SVG in CSS backgrounds</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='svg';caniuse.setMode('wciu');return false;" href="#feat=svg">SVG (basic support)</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='stream';caniuse.setMode('wciu');return false;" href="#feat=stream">getUserMedia/Stream API</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='script-defer';caniuse.setMode('wciu');return false;" href="#feat=script-defer">defer attribute for external scripts</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='script-async';caniuse.setMode('wciu');return false;" href="#feat=script-async">async attribute for external scripts</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='requestanimationframe';caniuse.setMode('wciu');return false;" href="#feat=requestanimationframe">requestAnimationFrame</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='rem';caniuse.setMode('wciu');return false;" href="#feat=rem">rem (root em) units</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='queryselector';caniuse.setMode('wciu');return false;" href="#feat=queryselector">querySelector/querySelectorAll</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='progressmeter';caniuse.setMode('wciu');return false;" href="#feat=progressmeter">Progress &amp; Meter</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='png-alpha';caniuse.setMode('wciu');return false;" href="#feat=png-alpha">PNG alpha transparency</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='ogv';caniuse.setMode('wciu');return false;" href="#feat=ogv">Ogg/Theora video format</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='offline-apps';caniuse.setMode('wciu');return false;" href="#feat=offline-apps">Offline web applications</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='nav-timing';caniuse.setMode('wciu');return false;" href="#feat=nav-timing">Navigation Timing API</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='namevalue-storage';caniuse.setMode('wciu');return false;" href="#feat=namevalue-storage">Web Storage - name/value pairs</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='multibackgrounds';caniuse.setMode('wciu');return false;" href="#feat=multibackgrounds">CSS3 Multiple backgrounds</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='minmaxwh';caniuse.setMode('wciu');return false;" href="#feat=minmaxwh">CSS min/max-width/height</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='matchmedia';caniuse.setMode('wciu');return false;" href="#feat=matchmedia">matchMedia</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='json';caniuse.setMode('wciu');return false;" href="#feat=json">JSON parsing</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='input-placeholder';caniuse.setMode('wciu');return false;" href="#feat=input-placeholder">input placeholder attribute</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='inline-block';caniuse.setMode('wciu');return false;" href="#feat=inline-block">CSS inline-block</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='indexeddb';caniuse.setMode('wciu');return false;" href="#feat=indexeddb">IndexedDB</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='iframe-sandbox';caniuse.setMode('wciu');return false;" href="#feat=iframe-sandbox">sandbox attribute for iframes</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='html5semantic';caniuse.setMode('wciu');return false;" href="#feat=html5semantic">New semantic elements</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='history';caniuse.setMode('wciu');return false;" href="#feat=history">Session history management</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='hashchange';caniuse.setMode('wciu');return false;" href="#feat=hashchange">Hashchange event</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='getelementsbyclassname';caniuse.setMode('wciu');return false;" href="#feat=getelementsbyclassname">getElementsByClassName</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='geolocation';caniuse.setMode('wciu');return false;" href="#feat=geolocation">Geolocation</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='form-validation';caniuse.setMode('wciu');return false;" href="#feat=form-validation">Form validation</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='fontface';caniuse.setMode('wciu');return false;" href="#feat=fontface">@font-face Web fonts</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='font-feature';caniuse.setMode('wciu');return false;" href="#feat=font-feature">Font feature settings</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='filereader';caniuse.setMode('wciu');return false;" href="#feat=filereader">FileReader API</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='fileapi';caniuse.setMode('wciu');return false;" href="#feat=fileapi">File API</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='eventsource';caniuse.setMode('wciu');return false;" href="#feat=eventsource">Server-sent DOM events</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='dragndrop';caniuse.setMode('wciu');return false;" href="#feat=dragndrop">Drag and Drop</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='datauri';caniuse.setMode('wciu');return false;" href="#feat=datauri">Data URLs</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='dataset';caniuse.setMode('wciu');return false;" href="#feat=dataset">dataset &amp; data-* attributes</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='datalist';caniuse.setMode('wciu');return false;" href="#feat=datalist">Datalist element</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='css3-colors';caniuse.setMode('wciu');return false;" href="#feat=css3-colors">CSS3 Colors</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='css-transitions';caniuse.setMode('wciu');return false;" href="#feat=css-transitions">CSS3 Transitions</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='css-textshadow';caniuse.setMode('wciu');return false;" href="#feat=css-textshadow">CSS3 Text-shadow</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='css-table';caniuse.setMode('wciu');return false;" href="#feat=css-table">CSS Table display</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='css-sel3';caniuse.setMode('wciu');return false;" href="#feat=css-sel3">CSS3 selectors</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='css-sel2';caniuse.setMode('wciu');return false;" href="#feat=css-sel2">CSS 2.1 selectors</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='css-resize';caniuse.setMode('wciu');return false;" href="#feat=css-resize">CSS resize property</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='css-repeating-gradients';caniuse.setMode('wciu');return false;" href="#feat=css-repeating-gradients">CSS Repeating Gradients</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='css-opacity';caniuse.setMode('wciu');return false;" href="#feat=css-opacity">CSS3 Opacity</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='css-mediaqueries';caniuse.setMode('wciu');return false;" href="#feat=css-mediaqueries">CSS3 Media Queries</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='css-gradients';caniuse.setMode('wciu');return false;" href="#feat=css-gradients">CSS Gradients</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='css-gencontent';caniuse.setMode('wciu');return false;" href="#feat=css-gencontent">CSS Generated content</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='css-fixed';caniuse.setMode('wciu');return false;" href="#feat=css-fixed">CSS position:fixed</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='css-counters';caniuse.setMode('wciu');return false;" href="#feat=css-counters">CSS Counters</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='css-boxshadow';caniuse.setMode('wciu');return false;" href="#feat=css-boxshadow">CSS3 Box-shadow</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='css-animation';caniuse.setMode('wciu');return false;" href="#feat=css-animation">CSS3 Animation</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='cors';caniuse.setMode('wciu');return false;" href="#feat=cors">Cross-Origin Resource Sharing</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='contenteditable';caniuse.setMode('wciu');return false;" href="#feat=contenteditable">contenteditable attribute (basic support)</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='classlist';caniuse.setMode('wciu');return false;" href="#feat=classlist">classList (DOMTokenList )</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='canvas-text';caniuse.setMode('wciu');return false;" href="#feat=canvas-text">Text API for Canvas</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='canvas';caniuse.setMode('wciu');return false;" href="#feat=canvas">Canvas (basic support)</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='calc';caniuse.setMode('wciu');return false;" href="#feat=calc">calc() as CSS unit value</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='border-radius';caniuse.setMode('wciu');return false;" href="#feat=border-radius">CSS3 Border-radius (rounded corners)</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='border-image';caniuse.setMode('wciu');return false;" href="#feat=border-image">CSS3 Border images</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='bloburls';caniuse.setMode('wciu');return false;" href="#feat=bloburls">Blob URLs</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='blobbuilder';caniuse.setMode('wciu');return false;" href="#feat=blobbuilder">BlobBuilder API</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='background-img-opts';caniuse.setMode('wciu');return false;" href="#feat=background-img-opts">CSS3 Background-image options</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='audio';caniuse.setMode('wciu');return false;" href="#feat=audio">Audio element</a></th><td class="y">Yes</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='wordwrap';caniuse.setMode('wciu');return false;" href="#feat=wordwrap">CSS3 Overflow-wrap</a></th><td class="a">Partial</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='webgl';caniuse.setMode('wciu');return false;" href="#feat=webgl">WebGL - 3D Canvas graphics</a></th><td class="a">Partial</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='wai-aria';caniuse.setMode('wciu');return false;" href="#feat=wai-aria">WAI-ARIA Accessibility features</a></th><td class="y">Yes</td><td class="a">Partial</td></tr><tr><th><a onclick="caniuse.feat='svg-html';caniuse.setMode('wciu');return false;" href="#feat=svg-html">SVG effects for HTML</a></th><td class="y">Yes</td><td class="a">Partial</td></tr><tr><th><a onclick="caniuse.feat='flexbox';caniuse.setMode('wciu');return false;" href="#feat=flexbox">Flexible Box Layout Module</a></th><td class="a">Partial</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='css3-boxsizing';caniuse.setMode('wciu');return false;" href="#feat=css3-boxsizing">CSS3 Box-sizing</a></th><td class="y">Yes</td><td class="a">Partial</td></tr><tr><th><a onclick="caniuse.feat='multicolumn';caniuse.setMode('wciu');return false;" href="#feat=multicolumn">CSS3 Multiple column layout</a></th><td class="a">Partial</td><td class="a">Partial</td></tr><tr><th><a onclick="caniuse.feat='matchesselector';caniuse.setMode('wciu');return false;" href="#feat=matchesselector">matchesSelector</a></th><td class="a">Partial</td><td class="a">Partial</td></tr><tr><th><a onclick="caniuse.feat='forms';caniuse.setMode('wciu');return false;" href="#feat=forms">HTML5 form features</a></th><td class="a">Partial</td><td class="a">Partial</td></tr><tr><th><a onclick="caniuse.feat='svg-fonts';caniuse.setMode('wciu');return false;" href="#feat=svg-fonts">SVG fonts</a></th><td class="n">No</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='sharedworkers';caniuse.setMode('wciu');return false;" href="#feat=sharedworkers">Shared Web Workers</a></th><td class="n">No</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='notifications';caniuse.setMode('wciu');return false;" href="#feat=notifications">Web Notifications</a></th><td class="n">No</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='mpeg4';caniuse.setMode('wciu');return false;" href="#feat=mpeg4">MPEG-4/H.264 video format</a></th><td class="n">No</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='mathml';caniuse.setMode('wciu');return false;" href="#feat=mathml">MathML</a></th><td class="y">Yes</td><td class="p">No</td></tr><tr><th><a onclick="caniuse.feat='input-range';caniuse.setMode('wciu');return false;" href="#feat=input-range">Range input type</a></th><td class="n">No</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='input-number';caniuse.setMode('wciu');return false;" href="#feat=input-number">Number input type</a></th><td class="n">No</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='input-color';caniuse.setMode('wciu');return false;" href="#feat=input-color">Color input type</a></th><td class="n">No</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='filesystem';caniuse.setMode('wciu');return false;" href="#feat=filesystem">Filesystem &amp; FileWriter API</a></th><td class="n">No</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='deviceorientation';caniuse.setMode('wciu');return false;" href="#feat=deviceorientation">Device Orientation events</a></th><td class="n">No</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='details';caniuse.setMode('wciu');return false;" href="#feat=details">Details &amp; Summary elements</a></th><td class="p">No</td><td class="y">Yes</td></tr><tr><th><a onclick="caniuse.feat='css-hyphens';caniuse.setMode('wciu');return false;" href="#feat=css-hyphens">CSS Hyphenation</a></th><td class="y">Yes</td><td class="n">No</td></tr><tr><th><a onclick="caniuse.feat='ruby';caniuse.setMode('wciu');return false;" href="#feat=ruby">Ruby annotation</a></th><td class="p">No</td><td class="a">Partial</td></tr><tr><th><a onclick="caniuse.feat='menu';caniuse.setMode('wciu');return false;" href="#feat=menu">Toolbar/context menu</a></th><td class="a">Partial</td><td class="n">No</td></tr><tr><th><a onclick="caniuse.feat='input-datetime';caniuse.setMode('wciu');return false;" href="#feat=input-datetime">Date/time input types</a></th><td class="n">No</td><td class="a">Partial</td></tr><tr><th><a onclick="caniuse.feat='audio-api';caniuse.setMode('wciu');return false;" href="#feat=audio-api">Audio API</a></th><td class="n">No</td><td class="a">Partial</td></tr><tr><th><a onclick="caniuse.feat='object-fit';caniuse.setMode('wciu');return false;" href="#feat=object-fit">CSS3 object-fit/object-position</a></th><td class="n">No</td><td class="n">No</td></tr><tr><th><a onclick="caniuse.feat='css-regions';caniuse.setMode('wciu');return false;" href="#feat=css-regions">CSS Regions</a></th><td class="n">No</td><td class="n">No</td></tr><tr><th><a onclick="caniuse.feat='css-grid';caniuse.setMode('wciu');return false;" href="#feat=css-grid">CSS Grid Layout</a></th><td class="n">No</td><td class="n">No</td></tr></tbody></table></div>
		</div>
	</div>
	
	<footer role="contentinfo">
		<div class="credit left">
			By <a href="http://twitter.com/Fyrd">@Fyrd</a>, design by <a href="http://twitter.com/lensco">@lensco</a>
			|
			<?php if ($_GET['c'] == "light") { ?>
				<a href="?">dark theme</a>
			<?php } else { ?>
				<a href="?c=light">light theme</a>
		<?php } ?>
		</div>
		
		<div class="social right">
			<a href="https://twitter.com/whencaniuse" class="twitter-follow-button" data-show-count="false" data-dnt="true">Follow @whencaniuse</a>
			<div class="g-plusone" data-size="medium" data-href="http://caniuse.com"></div>
			<a class="FlattrButton" style="display:none;" data-flattr-button="compact" href="http://caniuse.com"></a>
		</div>

		<aside id="bottom_ad">
			<!-- bottom ad placeholder -->
			<div style="display: inline-block; width:760px; height:90px; background:rgba(128,128,128,0.3)"></div>
		</aside>
	</footer>
	
	<section id="index" style="display: none;" role="navigation">
		<nav class="right">
			<ul>
				<li><a href="#" onclick="javascript:toggle('#index');"><i class="icon close"></i> Close</a></li>
			</ul>
		</nav>
		
		<h1>Can I use … Index</h1>
		<div id="cat_CSS">
			<h2><a href="/#cats=CSS">CSS</a></h2>
			<ol>
				<li><a href="fontface">@font-face Web fonts</a></li>
				<li><a href="calc">calc() as CSS unit value</a></li>
				<li><a href="css-sel2">2.1 selectors</a></li>
				<li><a href="css-counters">Counters</a></li>
				<li><a href="css-gencontent">Generated content</a></li>
				<li><a href="css-gradients">Gradients</a></li>
				<li><a href="css-grid">Grid Layout</a></li>
				<li><a href="css-hyphens">Hyphenation</a></li>
				<li><a href="inline-block">inline-block</a></li>
				<li><a href="minmaxwh">min/max-width/height</a></li>
				<li><a href="css-fixed">position:fixed</a></li>
				<li><a href="css-regions">Regions</a></li>
				<li><a href="css-repeating-gradients">Repeating Gradients</a></li>
				<li><a href="css-resize">resize property</a></li>
				<li><a href="css-table">Table display</a></li>
				<li><a href="transforms3d">3D Transforms</a></li>
				<li><a href="css-animation">Animation</a></li>
				<li><a href="background-img-opts">Background-image options</a></li>
				<li><a href="border-image">Border images</a></li>
				<li><a href="border-radius">Border-radius (rounded corners)</a></li>
				<li><a href="css-boxshadow">Box-shadow</a></li>
				<li><a href="css3-boxsizing">Box-sizing</a></li>
				<li><a href="css3-colors">Colors</a></li>
				<li><a href="css-mediaqueries">Media Queries</a></li>
				<li><a href="multibackgrounds">Multiple backgrounds</a></li>
				<li><a href="multicolumn">Multiple column layout</a></li>
				<li><a href="object-fit">object-fit/object-position</a></li>
				<li><a href="css-opacity">Opacity</a></li>
				<li><a href="wordwrap">Overflow-wrap</a></li>
				<li><a href="css-sel3">selectors</a></li>
				<li><a href="text-overflow">Text-overflow</a></li>
				<li><a href="css-textshadow">Text-shadow</a></li>
				<li><a href="transforms2d">Transforms</a></li>
				<li><a href="css-transitions">Transitions</a></li>
				<li><a href="word-break">word-break</a></li>
				<li><a href="flexbox">Flexible Box Layout Module</a></li>
				<li><a href="font-feature">Font feature settings</a></li>
				<li><a href="rem">rem (root em) units</a></li>
				<li><a href="ttf">TTF/OTF - TrueType and OpenType font support</a></li>
				<li><a href="viewport-units">Viewport units: vw, vh, vmin</a></li>
				<li class="unoff"><a href="css-canvas">Canvas Drawings</a></li>
				<li class="unoff"><a href="css-filters">Filter Effects</a></li>
				<li class="unoff"><a href="css-masks">Masks</a></li>
				<li class="unoff"><a href="css-reflections">Reflections</a></li>
				<li class="unoff"><a href="text-stroke">text-stroke</a></li>
				<li class="unoff"><a href="pointer-events">pointer-events (for HTML)</a></li>
			</ol>
		</div>
		<div id="cat_JS_API">
			<h2><a href="/#cats=JS_API">JS API</a></h3>
			<ol>
				<li><a href="audio-api">Audio API</a></li>
				<li><a href="bloburls">Blob URLs</a></li>
				<li><a href="x-doc-messaging">Cross-document messaging</a></li>
				<li><a href="cors">Cross-Origin Resource Sharing</a></li>
				<li><a href="deviceorientation">Device Orientation events</a></li>
				<li><a href="fileapi">File API</a></li>
				<li><a href="filereader">FileReader API</a></li>
				<li><a href="filesystem">Filesystem &amp; FileWriter API</a></li>
				<li><a href="geolocation">Geolocation</a></li>
				<li><a href="stream">getUserMedia/Stream API</a></li>
				<li><a href="hashchange">Hashchange event</a></li>
				<li><a href="indexeddb">IndexedDB</a></li>
				<li><a href="json">JSON parsing</a></li>
				<li><a href="matchesselector">matchesSelector</a></li>
				<li><a href="matchmedia">matchMedia</a></li>
				<li><a href="nav-timing">Navigation Timing API</a></li>
				<li><a href="requestanimationframe">requestAnimationFrame</a></li>
				<li><a href="eventsource">Server-sent DOM events</a></li>
				<li><a href="sharedworkers">Shared Web Workers</a></li>
				<li><a href="typedarrays">Typed Arrays</a></li>
				<li><a href="notifications">Web Notifications</a></li>
				<li><a href="websockets">Web Sockets</a></li>
				<li><a href="namevalue-storage">Web Storage - name/value pairs</a></li>
				<li><a href="webworkers">Web Workers</a></li>
				<li class="unoff"><a href="fullscreen">Full Screen API</a></li>
				<li class="unoff"><a href="sql-storage">Web SQL Database</a></li>
			</ol>
		</div>
		<div id="cat_HTML5">
			<h2><a href="/#cats=HTML5">HTML5</a></h3>
			<ol>
				<li><a href="audio">Audio element</a></li>
				<li><a href="canvas">Canvas (basic support)</a></li>
				<li><a href="input-color">Color input type</a></li>
				<li><a href="contenteditable">contenteditable attribute (basic support)</a></li>
				<li><a href="datalist">Datalist element</a></li>
				<li><a href="dataset">dataset &amp; data-* attributes</a></li>
				<li><a href="input-datetime">Date/time input types</a></li>
				<li><a href="details">Details &amp; Summary elements</a></li>
				<li><a href="dragndrop">Drag and Drop</a></li>
				<li><a href="form-validation">Form validation</a></li>
				<li><a href="forms">HTML5 form features</a></li>
				<li><a href="input-placeholder">input placeholder attribute</a></li>
				<li><a href="html5semantic">New semantic elements</a></li>
				<li><a href="input-number">Number input type</a></li>
				<li><a href="offline-apps">Offline web applications</a></li>
				<li><a href="progressmeter">Progress &amp; Meter</a></li>
				<li><a href="input-range">Range input type</a></li>
				<li><a href="ruby">Ruby annotation</a></li>
				<li><a href="iframe-sandbox">sandbox attribute for iframes</a></li>
				<li><a href="history">Session history management</a></li>
				<li><a href="canvas-text">Text API for Canvas</a></li>
				<li><a href="menu">Toolbar/context menu</a></li>
				<li><a href="video">Video element</a></li>
				<li><a href="webgl">WebGL - 3D Canvas graphics</a></li>
			</ol>
		</div>
		<div id="cat_Other">
			<h2><a href="/#cats=Other">Other</a></h3>
			<ol>
				<li><a href="script-async">async attribute for external scripts</a></li>
				<li><a href="classlist">classList (DOMTokenList )</a></li>
				<li><a href="datauri">Data URLs</a></li>
				<li><a href="script-defer">defer attribute for external scripts</a></li>
				<li><a href="use-strict">ECMAScript 5 Strict Mode</a></li>
				<li><a href="getcomputedstyle">getComputedStyle</a></li>
				<li><a href="getelementsbyclassname">getElementsByClassName</a></li>
				<li><a href="mathml">MathML</a></li>
				<li><a href="mpeg4">MPEG-4/H.264 video format</a></li>
				<li><a href="ogv">Ogg/Theora video format</a></li>
				<li><a href="png-alpha">PNG alpha transparency</a></li>
				<li><a href="queryselector">querySelector/querySelectorAll</a></li>
				<li><a href="touch">Touch events</a></li>
				<li><a href="wai-aria">WAI-ARIA Accessibility features</a></li>
				<li><a href="webm">WebM/VP8 video format</a></li>
				<li><a href="woff">WOFF - Web Open Font Format</a></li>
				<li><a href="xhtml">XHTML served as application/xhtml+xml</a></li>
				<li><a href="xhr2">XMLHttpRequest 2</a></li>
				<li class="unoff"><a href="apng">Animated PNG (APNG)</a></li>
				<li class="unoff"><a href="eot">EOT - Embedded OpenType fonts</a></li>
				<li class="unoff"><a href="spdy">SPDY networking protocol</a></li>
				<li class="unoff"><a href="xhtmlsmil">XHTML+SMIL animation</a></li>
			</ol>
		</div>
		<div id="cat_SVG">
			<h2><a href="/#cats=SVG">SVG</a></h3>
			<ol>
				<li><a href="svg-html5">Inline SVG in HTML5</a></li>
				<li><a href="svg">SVG (basic support)</a></li>
				<li><a href="svg-html">SVG effects for HTML</a></li>
				<li><a href="svg-filters">SVG filters</a></li>
				<li><a href="svg-fonts">SVG fonts</a></li>
				<li><a href="svg-css">SVG in CSS backgrounds</a></li>
				<li><a href="svg-img">SVG in HTML img element</a></li>
				<li><a href="svg-smil">SVG SMIL animation</a></li>
			</ol>
		</div>
	</section>

<div class="scripts">
	<script>
		(function() {
			var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
			po.src = 'https://apis.google.com/js/plusone.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		})();
	</script>
	<script>
		(function() {
			var s = document.createElement('script');
			var t = document.getElementsByTagName('script')[0];
			
			s.type = 'text/javascript';
			s.async = true;
			s.src = '//api.flattr.com/js/0.6/load.js?mode=auto';
			
			t.parentNode.insertBefore(s, t);
		})();
	</script>
	<script>
		!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
	</script>
</div>
</body>
</html>