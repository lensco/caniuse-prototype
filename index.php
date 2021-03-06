<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Can I Use ... Compatibility tables for support of HTML5, CSS3, SVG and more in desktop and mobile browsers</title>
	<link href="<?php if ($_GET['c'] == "light") { echo "light"; } else { echo "dark"; } ?>.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,700" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav role="navigation">
		<ul class="left">
			<li><a href="#" onclick="javascript:toggle('#about')">About</a></li>
			<li><a href="#" onclick="javascript:toggle('#news')">News</a></li>
		</ul>
		<a class="news" href="#" onclick="javascript:toggle('#news')">
			<span class="date">Sep 03, 2013 -</span> New browser added: IE Mobile 10
		</a>
		<ul class="right">
			<li><a href="#" onclick="javascript:toggle('#compare-content'); toggle('#compare-options'); toggle('.feature');">Compare<span> browsers</span></a></li>
			<li><a href="#" class="index" onclick="javascript:toggle('#index')"><i class="icon icon-index"></i> Index</a></li>
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
			<i class="icon icon-settings"></i>
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
			<legend>Web Browsers</legend>
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
			<legend>Usage data</legend>
			<label>
				Minimum browser usage: 0.88%<br>
				<input id="version_threshold" type="range" step="0.1" min="0" max="5" value="0.88">
			</label>
			<p class="dim">
				Total users not shown: <span id="missing_val">8.1</span>%
			</p>
		</fieldset>
		<fieldset id="misc">
			<legend>Other options</legend>
			<p>
				<label><input type="checkbox" value="bw_shaded"> Accessible colors</label>
			</p>
			<label>List sort:<br>
				<div class="select">
					<select name="sort" onchange="caniuse.MC()">
						<option value="usr_score">Most users first</option>
						<option value="rusr_score">Least users first</option>
						<option value="score">Most supported first</option>
						<option value="rscore">Least support first</option>
						<option value="alpha">Alphabetical</option>
						<option value="ralpha">Reverse Alphabetical</option>
					</select>
				</div>
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
	
	<aside class="country-message">Detected your country as Belgium. Would you like to import usage data for that country?<br><button class="ciu-button  region-detected-button">Import</button> <button class="ciu-button  region-detected-button">No thanks</button></aside>
	
	<div id="compare-options" class="searchPanel" style="display:none">
		<button id="browser_compare_reset">Reset selection</button>
		<h2>Select browsers to compare</h2>
		<fieldset>
			<legend>Categories</legend>
			<label><input type="checkbox" value="all" data-select-subjects="compare_cats" checked> All</label>
			<label><input type="checkbox" value="CSS" data-select-id="compare_cats" checked> <a href="#compare_cats=CSS">CSS</a></label>
			<label><input type="checkbox" value="HTML5" data-select-id="compare_cats" checked> <a href="#compare_cats=HTML5">HTML5</a></label>
			<label><input type="checkbox" value="JS API" data-select-id="compare_cats" checked> <a href="#compare_cats=JS API">JS API</a></label>
			<label><input type="checkbox" value="Other" data-select-id="compare_cats" checked> <a href="#compare_cats=Other">Other</a></label>
			<label><input type="checkbox" value="SVG" data-select-id="compare_cats" checked> <a href="#compare_cats=SVG">SVG</a></label>
		</fieldset>
		<div>
			<fieldset>
				<legend>IE</legend>
				<label><input type="checkbox" value="ie+5.5" data-select-id="compare">5.5</label>
				<label><input type="checkbox" value="ie+6" data-select-id="compare">6</label>
				<label><input type="checkbox" value="ie+7" data-select-id="compare">7</label>
				<label><input type="checkbox" value="ie+8" data-select-id="compare">8</label>
				<label><input type="checkbox" value="ie+9" data-select-id="compare">9</label>
				<label><input type="checkbox" value="ie+10" data-select-id="compare">10</label>
				<label><input type="checkbox" value="ie+11" data-select-id="compare">11</label>
			</fieldset>
			<fieldset>
				<legend>Firefox</legend>
				<label><input type="checkbox" value="firefox+2" data-select-id="compare">2</label>
				<label><input type="checkbox" value="firefox+3" data-select-id="compare">3</label>
				<label><input type="checkbox" value="firefox+3.5" data-select-id="compare">3.5</label>
				<label><input type="checkbox" value="firefox+3.6" data-select-id="compare">3.6</label>
				<label><input type="checkbox" value="firefox+4" data-select-id="compare">4</label>
				<label><input type="checkbox" value="firefox+5" data-select-id="compare">5</label>
				<label><input type="checkbox" value="firefox+6" data-select-id="compare">6</label>
				<label><input type="checkbox" value="firefox+7" data-select-id="compare">7</label>
				<label><input type="checkbox" value="firefox+8" data-select-id="compare">8</label>
				<label><input type="checkbox" value="firefox+9" data-select-id="compare">9</label>
				<label><input type="checkbox" value="firefox+10" data-select-id="compare">10</label>
				<label><input type="checkbox" value="firefox+11" data-select-id="compare">11</label>
				<label><input type="checkbox" value="firefox+12" data-select-id="compare">12</label>
				<label><input type="checkbox" value="firefox+13" data-select-id="compare">13</label>
				<label><input type="checkbox" value="firefox+14" data-select-id="compare">14</label>
				<label><input type="checkbox" value="firefox+15" data-select-id="compare">15</label>
				<label><input type="checkbox" value="firefox+16" data-select-id="compare">16</label>
				<label><input type="checkbox" value="firefox+17" data-select-id="compare">17</label>
				<label><input type="checkbox" value="firefox+18" data-select-id="compare">18</label>
				<label><input type="checkbox" value="firefox+19" data-select-id="compare">19</label>
				<label><input type="checkbox" value="firefox+20" data-select-id="compare">20</label>
				<label><input type="checkbox" value="firefox+21" data-select-id="compare">21</label>
				<label><input type="checkbox" value="firefox+22" data-select-id="compare">22</label>
				<label><input type="checkbox" value="firefox+23" data-select-id="compare">23</label>
				<label><input type="checkbox" value="firefox+24" data-select-id="compare">24</label>
			</fieldset>
			<fieldset>
				<legend>Chrome</legend>
				<label><input type="checkbox" value="chrome+4" data-select-id="compare">4</label>
				<label><input type="checkbox" value="chrome+5" data-select-id="compare">5</label>
				<label><input type="checkbox" value="chrome+6" data-select-id="compare">6</label>
				<label><input type="checkbox" value="chrome+7" data-select-id="compare">7</label>
				<label><input type="checkbox" value="chrome+8" data-select-id="compare">8</label>
				<label><input type="checkbox" value="chrome+9" data-select-id="compare">9</label>
				<label><input type="checkbox" value="chrome+10" data-select-id="compare">10</label>
				<label><input type="checkbox" value="chrome+11" data-select-id="compare">11</label>
				<label><input type="checkbox" value="chrome+12" data-select-id="compare">12</label>
				<label><input type="checkbox" value="chrome+13" data-select-id="compare">13</label>
				<label><input type="checkbox" value="chrome+14" data-select-id="compare">14</label>
				<label><input type="checkbox" value="chrome+15" data-select-id="compare">15</label>
				<label><input type="checkbox" value="chrome+16" data-select-id="compare">16</label>
				<label><input type="checkbox" value="chrome+17" data-select-id="compare">17</label>
				<label><input type="checkbox" value="chrome+18" data-select-id="compare">18</label>
				<label><input type="checkbox" value="chrome+19" data-select-id="compare">19</label>
				<label><input type="checkbox" value="chrome+20" data-select-id="compare">20</label>
				<label><input type="checkbox" value="chrome+21" data-select-id="compare">21</label>
				<label><input type="checkbox" value="chrome+22" data-select-id="compare">22</label>
				<label><input type="checkbox" value="chrome+23" data-select-id="compare">23</label>
				<label><input type="checkbox" value="chrome+24" data-select-id="compare">24</label>
				<label><input type="checkbox" value="chrome+25" data-select-id="compare">25</label>
				<label><input type="checkbox" value="chrome+26" data-select-id="compare">26</label>
				<label><input type="checkbox" value="chrome+27" data-select-id="compare">27</label>
				<label><input type="checkbox" value="chrome+28" data-select-id="compare">28</label>
				<label><input type="checkbox" value="chrome+29" data-select-id="compare">29</label>
			</fieldset>
			<fieldset>
				<legend>Safari</legend>
				<label><input type="checkbox" value="safari+3.1" data-select-id="compare">3.1</label>
				<label><input type="checkbox" value="safari+3.2" data-select-id="compare">3.2</label>
				<label><input type="checkbox" value="safari+4" data-select-id="compare">4</label>
				<label><input type="checkbox" value="safari+5" data-select-id="compare">5</label>
				<label><input type="checkbox" value="safari+5.1" data-select-id="compare">5.1</label>
				<label><input type="checkbox" value="safari+6" data-select-id="compare">6</label>
				<label><input type="checkbox" value="safari+7" data-select-id="compare">7</label>
			</fieldset>
			<fieldset>
				<legend>Opera</legend>
				<label><input type="checkbox" value="opera+9.5-9.6" data-select-id="compare">9.5-9.6</label>
				<label><input type="checkbox" value="opera+10.0-10.1" data-select-id="compare">10.0-10.1</label>
				<label><input type="checkbox" value="opera+10.5" data-select-id="compare">10.5</label>
				<label><input type="checkbox" value="opera+10.6" data-select-id="compare">10.6</label>
				<label><input type="checkbox" value="opera+11" data-select-id="compare">11</label>
				<label><input type="checkbox" value="opera+11.1" data-select-id="compare">11.1</label>
				<label><input type="checkbox" value="opera+11.5" data-select-id="compare">11.5</label>
				<label><input type="checkbox" value="opera+11.6" data-select-id="compare">11.6</label>
				<label><input type="checkbox" value="opera+12" data-select-id="compare">12</label>
				<label><input type="checkbox" value="opera+12.1" data-select-id="compare">12.1</label>
				<label><input type="checkbox" value="opera+15" data-select-id="compare">15</label>
				<label><input type="checkbox" value="opera+16" data-select-id="compare">16</label>
			</fieldset>
			<fieldset>
				<legend>iOS Safari</legend>
				<label><input type="checkbox" value="ios_saf+3.2" data-select-id="compare">3.2</label>
				<label><input type="checkbox" value="ios_saf+4.0-4.1" data-select-id="compare">4.0-4.1</label>
				<label><input type="checkbox" value="ios_saf+4.2-4.3" data-select-id="compare">4.2-4.3</label>
				<label><input type="checkbox" value="ios_saf+5.0-5.1" data-select-id="compare">5.0-5.1</label>
				<label><input type="checkbox" value="ios_saf+6.0-6.1" data-select-id="compare">6.0-6.1</label>
				<label><input type="checkbox" value="ios_saf+7.0" data-select-id="compare">7.0</label>
			</fieldset>
			<fieldset>
				<legend>Opera Mini</legend>
				<label><input type="checkbox" value="op_mini+5.0-7.0" data-select-id="compare">5.0-7.0</label>
			</fieldset>
			<fieldset>
				<legend>Android Browser</legend>
				<label><input type="checkbox" value="android+2.1" data-select-id="compare">2.1</label>
				<label><input type="checkbox" value="android+2.2" data-select-id="compare">2.2</label>
				<label><input type="checkbox" value="android+2.3" data-select-id="compare">2.3</label>
				<label><input type="checkbox" value="android+3" data-select-id="compare">3</label>
				<label><input type="checkbox" value="android+4" data-select-id="compare">4</label>
				<label><input type="checkbox" value="android+4.1" data-select-id="compare">4.1</label>
				<label><input type="checkbox" value="android+4.2" data-select-id="compare">4.2</label>
			</fieldset>
			<fieldset>
				<legend>Opera Mobile</legend>
				<label><input type="checkbox" value="op_mob+10" data-select-id="compare">10</label>
				<label><input type="checkbox" value="op_mob+11.5" data-select-id="compare">11.5</label>
				<label><input type="checkbox" value="op_mob+12" data-select-id="compare">12</label>
				<label><input type="checkbox" value="op_mob+12.1" data-select-id="compare">12.1</label>
				<label><input type="checkbox" value="op_mob+14" data-select-id="compare">14</label>
			</fieldset>
			<fieldset>
				<legend>Blackberry</legend>
				<label><input type="checkbox" value="bb+7" data-select-id="compare">7</label>
				<label><input type="checkbox" value="bb+10" data-select-id="compare">10</label>
			</fieldset>
			<fieldset>
				<legend>Chrome - Android</legend>
				<label><input type="checkbox" value="and_chr+28" data-select-id="compare">28</label>
			</fieldset>
			<fieldset>
				<legend>Firefox - Android</legend>
				<label><input type="checkbox" value="and_ff+23" data-select-id="compare">23</label>
			</fieldset>
		</div>
	</div>
	
	<div id="content">
		<article class="feature" id="datauri" role="article">
			<a class="permalink" href="#feat=datauri" title="Permanent link to the Flexible Box Layout Module compatibility table">#</a>

			<h1>Flexible Box Layout Module</h1>
			<a class="specification cr" href="http://www.w3.org/TR/css3-flexbox/">
				<i class="icon icon-spec"></i>
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
					<li data-tab="notes" class="tab active" onclick="javascript:show('.feature-notes'); hide('.feature-bugs'); hide('.feature-resources'); hide('.feature-feedback'); activetab(this);">Notes</li>
					<li data-tab="bugs" class="tab" onclick="javascript:show('.feature-bugs'); hide('.feature-notes'); hide('.feature-resources'); hide('.feature-feedback'); activetab(this);">Known issues (1)</li>
					<li data-tab="resources" class="tab" onclick="javascript:show('.feature-resources'); hide('.feature-bugs'); hide('.feature-notes'); hide('.feature-feedback'); activetab(this);">Resources (3)</li>
					<li data-tab="feedback" class="tab" onclick="javascript:show('.feature-feedback'); hide('.feature-bugs'); hide('.feature-resources'); hide('.feature-notes'); activetab(this);">Feedback</li>
				</ul>
			</div>
			<div class="feature-panel-container">
				<div data-panel="notes" class="feature-notes">
					<p>Most partial support refers to supporting an <a href="http://www.w3.org/TR/2009/WD-css3-flexbox-20090723/">older version</a> of the specification or an <a href="http://www.w3.org/TR/2012/WD-css3-flexbox-20120322/">older syntax</a>. For Firefox 21+ it refers to lack of flex-wrap &amp; flex-flow support.</p><p class="num-note"><span>1.</span> Only supports the <a href="\&quot;http://www.w3.org/TR/2009/WD-css3-flexbox-20090723/\&quot;">old flexbox specification</a></p><p class="num-note"><span>2.</span> Only supports the <a href="\&quot;http://www.w3.org/TR/2012/WD-css3-flexbox-20120322/\&quot;">2012 syntax</a></p><p class="num-note"><span>3.</span> Does not support flex-wrap or flex-flow properties</p>
				</div>
				<div data-panel="bugs" class="feature-bugs" style="display:none">
					<ol><li class="feature-bug-item">Firefox does not support specifying widths in percentages. <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=529761">See bug</a>.</li></ol>
				</div>
				<div data-panel="resources" class="feature-resources" style="display:none">
					<ul><li class="feature-link-item"><a href="http://www.w3.org/TR/css3-flexbox/">Specification</a>[w3.org] <span class="linktag">ref</span></li><li class="feature-link-item"><a href="http://bennettfeely.com/flexplorer/">Flexbox CSS generator</a>[bennettfeely.com] <span class="linktag">demo</span></li><li class="feature-link-item"><a href="http://dev.opera.com/articles/view/advanced-cross-browser-flexbox/">Tutorial on cross-browser support</a>[dev.opera.com] <span class="linktag">info</span><span class="linktag">tutorial</span></li><li class="feature-link-item"><a href="http://www.adobe.com/devnet/html5/articles/working-with-flexbox-the-new-spec.html">Article on using the latest spec</a>[adobe.com] <span class="linktag">info</span><span class="linktag">tutorial</span></li></ul>
				</div>
				<div data-panel="feedback" class="feature-feedback" style="display:none">
					<p>Send your comments, corrections, etc. Note that your comment will not be kept on the site. Please include an email address if you would like a response. Or, <a href="https://github.com/Fyrd/caniuse/blob/master/features-json/flexbox.json" target="_blank">edit this data on GitHub</a></p>
					<form>
						<textarea class="feature__feedback-textarea" name="comment" required="required"></textarea>
						<p><input type="submit" value="Submit"></p>
					</form>
				</div>
			</div>
		</article>
		
		<div class="compare-content" id="compare-content" style="display:none">
			<div class="support_container">
				<table>
					<thead>
						<tr>
							<th></th>
							<th class="firefox">Firefox 19.0</th>
							<th class="chrome">Chrome 25.0</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td colspan="3">
								<h2>Mixed support</h2>
							</td>
						</tr>
						<tr>
							<th><a href="#feat=wordwrap">CSS3 Overflow-wrap</a></th>
							<td class="a">Partial</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=webgl">WebGL - 3D Canvas graphics</a></th>
							<td class="a">Partial</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=wai-aria">WAI-ARIA Accessibility features</a></th>
							<td class="y">Yes</td>
							<td class="a">Partial</td>
						</tr>
						<tr>
							<th><a href="#feat=svg-html">SVG effects for HTML</a></th>
							<td class="y">Yes</td>
							<td class="a">Partial</td>
						</tr>
						<tr>
							<th><a href="#feat=flexbox">Flexible Box Layout Module</a></th>
							<td class="a">Partial</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=css3-boxsizing">CSS3 Box-sizing</a></th>
							<td class="y x">Yes</td>
							<td class="a">Partial</td>
						</tr>
						<tr>
							<th><a href="#feat=multicolumn">CSS3 Multiple column layout</a></th>
							<td class="a x">Partial</td>
							<td class="a x">Partial</td>
						</tr>
						<tr>
							<th><a href="#feat=matchesselector">matchesSelector</a></th>
							<td class="a">Partial</td>
							<td class="a">Partial</td>
						</tr>
						<tr>
							<th><a href="#feat=forms">HTML5 form features</a></th>
							<td class="a">Partial</td>
							<td class="a">Partial</td>
						</tr>
						<tr>
							<th><a href="#feat=svg-fonts">SVG fonts</a></th>
							<td class="n">No</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=sharedworkers">Shared Web Workers</a></th>
							<td class="n">No</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=notifications">Web Notifications</a></th>
							<td class="n">No</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=mpeg4">MPEG-4/H.264 video format</a></th>
							<td class="n">No</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=mathml">MathML</a></th>
							<td class="y">Yes</td>
							<td class="p">No</td>
						</tr>
						<tr>
							<th><a href="#feat=input-range">Range input type</a></th>
							<td class="n">No</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=input-number">Number input type</a></th>
							<td class="n">No</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=input-color">Color input type</a></th>
							<td class="n">No</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=filesystem">Filesystem &amp; FileWriter API</a></th>
							<td class="n">No</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=deviceorientation">Device Orientation events</a></th>
							<td class="n">No</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=details">Details &amp; Summary elements</a></th>
							<td class="p">No</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=css-hyphens">CSS Hyphenation</a></th>
							<td class="y">Yes</td>
							<td class="n">No</td>
						</tr>
						<tr>
							<th><a href="#feat=ruby">Ruby annotation</a></th>
							<td class="p">No</td>
							<td class="a">Partial</td>
						</tr>
						<tr>
							<th><a href="#feat=menu">Toolbar/context menu</a></th>
							<td class="a">Partial</td>
							<td class="n">No</td>
						</tr>
						<tr>
							<th><a href="#feat=input-datetime">Date/time input types</a></th>
							<td class="n">No</td>
							<td class="a">Partial</td>
						</tr>
						<tr>
							<th><a href="#feat=audio-api">Audio API</a></th>
							<td class="n">No</td>
							<td class="a">Partial</td>
						</tr>
						<tr>
							<td colspan="3">
								<h2>Supported</h2>
							</td>
						</tr>
						<tr>
							<th><a href="#feat=xhtml">XHTML served as application/xhtml+xml</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=xhr2">XMLHttpRequest 2</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=x-doc-messaging">Cross-document messaging</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=woff">WOFF - Web Open Font Format</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=webworkers">Web Workers</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=websockets">Web Sockets</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=webm">WebM/VP8 video format</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=video">Video element</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=use-strict">ECMAScript 5 Strict Mode</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=typedarrays">Typed Arrays</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=ttf">TTF/OTF - TrueType and OpenType font support</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=transforms3d">CSS3 3D Transforms</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=transforms2d">CSS3 Transforms</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=touch">Touch events</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=text-overflow">CSS3 Text-overflow</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=svg-smil">SVG SMIL animation</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=svg-img">SVG in HTML img element</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=svg-html5">Inline SVG in HTML5</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=svg-filters">SVG filters</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=svg-css">SVG in CSS backgrounds</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=svg">SVG (basic support)</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=stream">getUserMedia/Stream API</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=script-defer">defer attribute for external scripts</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=script-async">async attribute for external scripts</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=requestanimationframe">requestAnimationFrame</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=rem">rem (root em) units</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=queryselector">querySelector/querySelectorAll</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=progressmeter">Progress &amp; Meter</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=png-alpha">PNG alpha transparency</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=ogv">Ogg/Theora video format</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=offline-apps">Offline web applications</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=nav-timing">Navigation Timing API</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=namevalue-storage">Web Storage - name/value pairs</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=multibackgrounds">CSS3 Multiple backgrounds</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=minmaxwh">CSS min/max-width/height</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=matchmedia">matchMedia</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=json">JSON parsing</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=input-placeholder">input placeholder attribute</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=inline-block">CSS inline-block</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=indexeddb">IndexedDB</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=iframe-sandbox">sandbox attribute for iframes</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=html5semantic">New semantic elements</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=history">Session history management</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=hashchange">Hashchange event</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=getelementsbyclassname">getElementsByClassName</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=geolocation">Geolocation</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=form-validation">Form validation</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=fontface">@font-face Web fonts</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=font-feature">Font feature settings</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=filereader">FileReader API</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=fileapi">File API</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=eventsource">Server-sent DOM events</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=dragndrop">Drag and Drop</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=datauri">Data URLs</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=dataset">dataset &amp; data-* attributes</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=datalist">Datalist element</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=css3-colors">CSS3 Colors</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=css-transitions">CSS3 Transitions</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=css-textshadow">CSS3 Text-shadow</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=css-table">CSS Table display</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=css-sel3">CSS3 selectors</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=css-sel2">CSS 2.1 selectors</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=css-resize">CSS resize property</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=css-repeating-gradients">CSS Repeating Gradients</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=css-opacity">CSS3 Opacity</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=css-mediaqueries">CSS3 Media Queries</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=css-gradients">CSS Gradients</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=css-gencontent">CSS Generated content</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=css-fixed">CSS position:fixed</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=css-counters">CSS Counters</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=css-boxshadow">CSS3 Box-shadow</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=css-animation">CSS3 Animation</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=cors">Cross-Origin Resource Sharing</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=contenteditable">contenteditable attribute (basic support)</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=classlist">classList (DOMTokenList )</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=canvas-text">Text API for Canvas</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=canvas">Canvas (basic support)</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=calc">calc() as CSS unit value</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=border-radius">CSS3 Border-radius (rounded corners)</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=border-image">CSS3 Border images</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=bloburls">Blob URLs</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=blobbuilder">BlobBuilder API</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=background-img-opts">CSS3 Background-image options</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<th><a href="#feat=audio">Audio element</a></th>
							<td class="y">Yes</td>
							<td class="y">Yes</td>
						</tr>
						<tr>
							<td colspan="3">
								<h2>Not supported</h2>
							</td>
						</tr>
						<tr>
							<th><a href="#feat=object-fit">CSS3 object-fit/object-position</a></th>
							<td class="n">No</td>
							<td class="n">No</td>
						</tr>
						<tr>
							<th><a href="#feat=css-regions">CSS Regions</a></th>
							<td class="n">No</td>
							<td class="n">No</td>
						</tr>
						<tr>
							<th><a href="#feat=css-grid">CSS Grid Layout</a></th>
							<td class="n">No</td>
							<td class="n">No</td>
						</tr>
					</tbody>
				</table>				
			</div>
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
	
	<section id="about" class="page" style="display: none;">
		<nav>
			<ul>
				<li><a href="#" onclick="javascript:toggle('#about');"><i class="icon icon-close"></i> Close</a></li>
			</ul>
		</nav>
		
		<div class="content">
			<h1>Can I Use – About</h1>
			
			<p>Can I Use provides compatibility tables for support of HTML5, CSS3, SVG and more in desktop and mobile browsers.</p>
			<h2>FAQ</h2>
			<p><b>May I use your data in my presentation/article/site, etc?</b><br>
			Yes, the support data on this site is free to use under the <a href="http://creativecommons.org/licenses/by-nc/3.0/">CC BY-NC 3.0</a> license.</p>

			<p><b>Do you have the data available in a raw format?</b><br>
			Yes, the raw support data is available on <a href="https://github.com/fyrd/caniuse">GitHub</a> and is updated regularly.</p>

			<p><b>Could you add feature X to the site?</b><br>
			Adding features takes quite some time and there are many requests for additions. Because of this I use <a href="http://www.google.com/moderator/#15/e=ae425&t=ae425.40">Google Moderator</a> to manage requests. Feel free to add/vote for your feature there.</p>

			<p><b>Which features do you choose to add to this list?</b><br>
			I use the following criteria:</p>
			<ol>
				<li>Useful to web designers/developers</li>
				<li>Likely to be eventually implemented by the majority of browsers</li>
				<li>Currently lacking at least one implementation</li>
			</ol>
			<p>Most features are added in priority order from <a href="http://www.google.com/moderator/#15/e=ae425&t=ae425.40">this list</a>.</p>
			
			<p><b>How do you test support?</b><br>
			I use a <a href="http://tests.caniuse.com">hand-crafted test suite</a> to test features, which tests for basic support of each feature.</p>
			
			<p><b>Where do you get your information for upcoming versions?</b><br>
			Most information comes directly from the latest developer/preview/nightly builds as seen in this list:</p>
			<ul>
				<li>Internet Explorer information is based on any news that comes in (pending public builds for IE10).</li>
				<li>Future Firefox information is based on features planned for the latest Gecko build.</li>
				<li>Future Safari information is based on the latest Webkit nightly builds.</li>
				<li>Chrome information is based on the latest developer preview.</li>
				<li>Future Opera information is based on any experimental or weekly builds</li>
			</ul>
			
			<p><b>When is a feature considered "supported"?</b><br>
			When its primary purpose is largely fulfilled. It does not mean it's 100% supported, just that it's usable in most cases.</p>
			
			<p><b>How often is this page updated?</b><br>
			I try to keep it as current as possible, with new information being usually being processed within a few days. Follow the <a href="http://beta.caniuse.com/feed.php">feed</a> if you'd like keep up with all the changes made.</p>
			

		</div>
	</section>
	
	<section id="news" class="page" style="display: none;">
		<nav>
			<ul>
				<li><a href="#" onclick="javascript:toggle('#news');"><i class="icon icon-close"></i> Close</a></li>
			</ul>
		</nav>
		
		<div class="content">
			<h1>Can I Use – News</h1>

			<article>
				<span class="date">Sep 3, 2013</span>
				<h3>New browser added: IE Mobile 10</h3>
				<p>After a long time of requests to add IE Mobile to Can I Use, I'm happy to report that Internet Explorer for Windows Phone 8 was just added to the site!</p>
				<p>IE Mobile 10 has much of the same support as seen in IE10 for desktop, with a <a href="http://caniuse.com/#compare=ie+10,ie_mob+10">few exceptions</a>.</p>
				<p>Stay tuned for more and bigger site announcements!</p>
			</article>

			<article>
				<span class="date">May 31, 2013</span>
				<h3>Five new features added: Templates, JPEG-XR, Channel messaging, Opus & Pointer events</h3>
				<p>Things have been busy both in the background of the caniuse site development as well as on GitHub where over the past month or so contributors have added the following five(!) features:</p>
				<p><a href="http://caniuse.com/#feat=template">HTML templates</a> - Method of declaring a portion of reusable markup that is parsed but not rendered until cloned.</p>
				<p><a href="http://caniuse.com/#feat=jpegxr">JPEG XR</a> - The latest JPEG image format of Joint Photographic Experts Group which boasts better compression and supports lossless compression, alpha channel, and 48-bit deep color over normal jpg format.</p>
				<p><a href="http://caniuse.com/#feat=channel-messaging">Channel messaging</a> - Method for having two-way communication between browsing contexts (using MessageChannel)</p>
				<p><a href="http://caniuse.com/#feat=opus">Opus audio</a> - Royalty-free open audio codec by Mozilla, which incorporated SILK from Skype and CELT from Xiph.org, to serve higher sound quality and lower latency at the same bitrate.</p>
				<p><a href="http://caniuse.com/#feat=pointer">Pointer Events</a> - This specification integrates various inputs from mice, touchscreens, and pens, making separate implementations no longer necessary and authoring for cross-device pointers easier.</p>
				<p>Thanks again to all the wonderful Caniuse GitHub contributors for your additions and updates! In the mean time I've been working heavily behind the scenes on making the site better and more useful to developers, stay tuned for more news on this front.</p>
			</article>

			<article>
				<span class="date">Apr 3, 2013</span>
				<h3>Three new features added: Shadow DOM, WebP images & Intrinsic width & height</h3>
				<p>Thanks to more user contributions, the following three features were added to the site:</p>
				<p>- The <a href="http://caniuse.com/#feat=shadowdom">Shadow DOM</a> allows the creation of widgets that use a DOM separate from the host's document DOM</p>
				<p>- The <a href="http://caniuse.com/#feat=webp">WebP</a> image format that supports both lossy and lossless images at smaller sizes than jpeg or png.</p>
				<p>- <a href="http://caniuse.com/#feat=intrinsic-width">Intrinsic width &amp; height</a> CSS values like min-content allow more types of layout sized based on content rather than specific measurements.</p>
				<p>Thanks again to everyone who helped contribute this data!</p></div>
			</article>
		</div>
	</section>
	
	<section id="index" class="page" style="display: none;" role="navigation">
		<nav class="right">
			<ul>
				<li><a href="#" onclick="javascript:toggle('#index');"><i class="icon icon-close"></i> Close</a></li>
			</ul>
		</nav>
		
		<h1>Can I use … Index</h1>
		<div id="cat_CSS">
			<h2><a href="/#cats=CSS">CSS</a></h2>
			<ul>
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
			</ul>
		</div>
		<div id="cat_JS_API">
			<h2><a href="/#cats=JS_API">JS API</a></h2>
			<ul>
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
			</ul>
		</div>
		<div id="cat_HTML5">
			<h2><a href="/#cats=HTML5">HTML5</a></h2>
			<ul>
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
			</ul>
		</div>
		<div id="cat_Other">
			<h2><a href="/#cats=Other">Other</a></h2>
			<ul>
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
			</ul>
		</div>
		<div id="cat_SVG">
			<h2><a href="/#cats=SVG">SVG</a></h2>
			<ul>
				<li><a href="svg-html5">Inline SVG in HTML5</a></li>
				<li><a href="svg">SVG (basic support)</a></li>
				<li><a href="svg-html">SVG effects for HTML</a></li>
				<li><a href="svg-filters">SVG filters</a></li>
				<li><a href="svg-fonts">SVG fonts</a></li>
				<li><a href="svg-css">SVG in CSS backgrounds</a></li>
				<li><a href="svg-img">SVG in HTML img element</a></li>
				<li><a href="svg-smil">SVG SMIL animation</a></li>
			</ul>
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
		function activetab(el) {
			var tabs = document.querySelectorAll('.tab');
			for(var i=0; i<tabs.length; i++) {
				tabs[i].classList.remove('active');
			}		
			el.classList.add('active');
		}
	</script>
</div>
</body>
</html>