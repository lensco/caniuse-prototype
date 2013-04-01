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
			<li><a href="#">Compare<span> browsers</span></a></li>
			<li><a href="#" class="index" onclick="javascript:document.getElementById('index').style.display = 'block';"><i class="icon index"></i> Index</a></li>
		</ul>
	</nav>
	
	<section class="search" role="search">
		Can I use
		<input type="text" name="feat_search" autocomplete="off" autofocus value="CSS animations">
		?
		<a href="#" class="options" onclick="javascript:document.getElementById('options').style.display = 'block';">
			<i class="icon settings"></i>
			<span>Settings</span>
		</a>
	</section>
	
	<section id="options" class="searchPanel" style="display: none;">
		<fieldset id="cats">
			<legend>Category</legend>
			<label><input type="checkbox" value="All" checked> All</label><br>
			<label><input type="checkbox" value="CSS" checked> CSS</label><br>
			<label><input type="checkbox" value="HTML5" checked> HTML5</label><br>
			<label><input type="checkbox" value="JS API" checked> JS API</label><br>
			<label><input type="checkbox" value="SVG" checked> SVG</label><br>
			<label><input type="checkbox" value="Other" checked> Other</label>
		</fieldset>
		<fieldset id="statuses">
			<legend>Status</legend>
			<label><input type="checkbox" value="All"> All</label><br>
			<label><input type="checkbox" value="rec" checked> Recommendation</label><br>
			<label><input type="checkbox" value="pr" checked> Proposed Rec.</label><br>
			<label><input type="checkbox" value="cr" checked> Candidate Rec.</label><br>
			<label><input type="checkbox" value="wd" checked> Working Draft</label><br>
			<label><input type="checkbox" value="other" checked> Other</label><br>
			<label><input type="checkbox" value="unoff"> Unofficial / Note</label>
		</fieldset>
		<fieldset id="agents">
			<legend>Web Browser</legend>
			<p><label><input type="checkbox" onclick="caniuse.selAll(this);" value="All"> All</label></p>
			<div class="optwrap">
				<label><input type="checkbox" value="desktop" checked> Desktop</label>
				<div class="desktop">
					<label><input type="checkbox" value="ie" checked> IE</label><br>
					<label><input type="checkbox" value="firefox" checked> Firefox</label><br>
					<label><input type="checkbox" value="chrome" checked> Chrome</label><br>
					<label><input type="checkbox" value="safari" checked> Safari</label><br>
					<label><input type="checkbox" value="opera" checked> Opera</label>
				</div>
			</div>
			<div class="optwrap">
				<label><input type="checkbox" value="mobile" checked> Mobile</label>
				<div class="mobile">
					<label><input type="checkbox" value="ios_saf" checked> iOS Safari</label><br>
					<label><input type="checkbox" value="op_mini" checked> Opera Mini</label><br>
					<label><input type="checkbox" value="android" checked> Android Browser</label><br>
					<label><input type="checkbox" value="op_mob"> Opera Mobile</label><br>
					<label><input type="checkbox" value="bb" checked> Blackberry Browser</label><br>
					<label><input type="checkbox" value="and_chr"> Chrome for Android</label><br>
					<label><input type="checkbox" value="and_ff"> Firefox for Android</label>
				</div>
			</div>
		</fieldset>
		<fieldset id="eras">
			<legend>Versions shown</legend>
			<label>
				Minimum browser usage %:<br>
				<input id="version_threshold" type="range" step="0.1" min="0" max="10" value="0">
			</label><br>
			<p class="dim">
				Threshold set at <span id="usage_val">0.88</span>%<br>
				Total users not shown is <span id="missing_val">8.1</span>%
			</p>
			<label><input type="checkbox" id="include_all_mobile" checked> Show all mobile versions</label>		
		</fieldset>
		<fieldset id="misc">
			<legend>Other options</legend>
			<p>
				<label><input type="checkbox" value="p"> Accept polyfills</label><br>
				<label><input type="checkbox" value="bw_shaded"> Accessible colors</label><br>
				<label><input type="checkbox" value="show_conc"> Show conclusions</label>
			</p>
			<label>Sort</label>
			<select name="sort" onchange="caniuse.MC()">
				<option value="usr_score">Most users first</option>
				<option value="rusr_score">Least users first</option>
				<option value="score">Most supported first</option>
				<option value="rscore">Least support first</option>
				<option value="alpha">Alphabetical</option>
				<option value="ralpha">Reverse Alphabetical</option>
			</select>
		</fieldset>
		
		<input class="button import" type="button" value="Import stats" onclick="javascript:document.getElementById('options').style.display = 'none';document.getElementById('import').style.display = 'block';">
		<input class="button save" type="submit" value="Save" onclick="javascript:document.getElementById('options').style.display = 'none';">
	</section>
	
	<section id="import" class="searchPanel" style="display: none;">
		<h2>Import statistics (beta)</h2>
		<p>Using this form, you can import visitor statistics from your Google Analytics account(s). Once imported, the information is displayed in the upper-right corner for each feature table. Browser statistics are stored in your browser for future use.</p>
		<input type="submit" value="Load" onclick="javascript:document.getElementById('import').style.display = 'none';">
	</section>
	
	<article class="feature" id="datauri" role="article">
		<a class="permalink" href="#feat=datauri" title="Permanent link to the CSS3 Animation compatibility table">#</a>

		<h1>CSS3 Animation</h1>
		<a class="specification wd" href="http://www.ietf.org/rfc/rfc2397.txt">
			<i class="icon spec"></i>
			Working Draft
		</a>

		<p class="description">Complex method of animating certain properties of an element</p>
		
		<aside class="supportStats">
			Support <a href="#">*</a>
			<span class="support" title="The CSS3 Animations feature is fully available to 59.2% of browser users worldwide.">59.2%</span> +
			<span class="partial" title="The CSS3 Animations feature is partly available to 2.39% of browser users worldwide.">2.39%</span> =
			<span class="total" title="The CSS3 Animations feature is available to 61.59% of browser users worldwide.">61.59%</span>
		</aside>
		
		<div class="tableWrapper">
			<table class="main"><thead><tr><th class="first"><a href="#" onclick="return caniuse.allVersions(this)">Show all versions</a></th><th class="ie">IE</th><th class="firefox">Firefox</th><th class="chrome">Chrome</th><th class="safari">Safari</th><th class="opera">Opera</th><th class="ios_saf">iOS Safari</th><th class="op_mini">Opera Mini</th><th class="android">Android Browser</th><th class="bb">Blackberry Browser</th></tr></thead><tbody><tr class="e-4"><th></th><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td class="a x" data-browser="android|2.1" data-tooltip="partial (global usage: 0.12%)">2.1<span class="pre" title="Requires this prefix to work">-webkit-</span></td><td></td></tr><tr class="e-3"><th></th><td></td><td class="y x" data-browser="firefox|12" data-tooltip="yes (global usage: 1%)">12.0<span class="pre" title="Requires this prefix to work">-moz-</span></td><td></td><td></td><td></td><td class="y x" data-browser="ios_saf|3.2" data-tooltip="yes (global usage: 0.16%)">3.2<span class="pre" title="Requires this prefix to work">-webkit-</span></td><td></td><td class="a x" data-browser="android|2.2" data-tooltip="partial (global usage: 0.45%)">2.2<span class="pre" title="Requires this prefix to work">-webkit-</span></td><td></td></tr><tr class="e-2"><th></th><td class="n" data-browser="ie|7" data-tooltip="no (global usage: 1.02%)">7.0</td><td class="y x" data-browser="firefox|13" data-tooltip="yes (global usage: 1.14%)">13.0<span class="pre" title="Requires this prefix to work">-moz-</span></td><td></td><td></td><td></td><td class="y x" data-browser="ios_saf|4.0-4.1" data-tooltip="yes (global usage: 0.05%)">4.0-4.1<span class="pre" title="Requires this prefix to work">-webkit-</span></td><td></td><td class="a x" data-browser="android|2.3" data-tooltip="partial (global usage: 1.75%)">2.3<span class="pre" title="Requires this prefix to work">-webkit-</span></td><td></td></tr><tr class="e-1"><th></th><td class="n" data-browser="ie|8" data-tooltip="no (global usage: 12.04%)">8.0</td><td class="y x" data-browser="firefox|14" data-tooltip="yes (global usage: 13.41%)">14.0<span class="pre" title="Requires this prefix to work">-moz-</span></td><td class="y x" data-browser="chrome|20" data-tooltip="yes (global usage: 2.58%)">20.0<span class="pre" title="Requires this prefix to work">-webkit-</span></td><td class="y x" data-browser="safari|5.1" data-tooltip="yes (global usage: 2.18%)">5.1<span class="pre" title="Requires this prefix to work">-webkit-</span></td><td></td><td class="y x" data-browser="ios_saf|4.2-4.3" data-tooltip="yes (global usage: 0.41%)">4.2-4.3<span class="pre" title="Requires this prefix to work">-webkit-</span></td><td></td><td class="a x" data-browser="android|3" data-tooltip="partial (global usage: 0.07%)">3.0<span class="pre" title="Requires this prefix to work">-webkit-</span></td><td></td></tr><tr class="e0"><th>current</th><td class="n" data-browser="ie|9" data-tooltip="no (global usage: 15.45%)">9.0</td><td class="y x" data-browser="firefox|15" data-tooltip="yes (global usage: 0.88%)">15.0<span class="pre" title="Requires this prefix to work">-moz-</span></td><td class="y x" data-browser="chrome|21" data-tooltip="yes (global usage: 24.16%)">21.0<span class="pre" title="Requires this prefix to work">-webkit-</span></td><td class="y x" data-browser="safari|6" data-tooltip="yes (global usage: 1.02%)">6.0<span class="pre" title="Requires this prefix to work">-webkit-</span></td><td class="y x" data-browser="opera|12" data-tooltip="yes (global usage: 1.05%)">12.0<span class="pre" title="Requires this prefix to work">-o-</span></td><td class="y x" data-browser="ios_saf|5.0-5.1" data-tooltip="yes (global usage: 4.59%)">5.0-5.1<span class="pre" title="Requires this prefix to work">-webkit-</span></td><td class="n" data-browser="op_mini|5.0-7.0" data-tooltip="no (global usage: 2.18%)">5.0-7.0</td><td class="y x" data-browser="android|4" data-tooltip="yes (global usage: 0.48%)">4.0<span class="pre" title="Requires this prefix to work">-webkit-</span></td><td class="y x" data-browser="bb|7" data-tooltip="yes (global usage: 0.13%)">7.0<span class="pre" title="Requires this prefix to work">-webkit-</span></td></tr><tr class="e1"><th>near future</th><td class="y" data-browser="ie|10" data-tooltip="yes (global usage: 0.05%)">10.0</td><td class="y" data-browser="firefox|16" data-tooltip="yes (global usage: 0.04%)">16.0</td><td class="y x" data-browser="chrome|22" data-tooltip="yes (global usage: 0.13%)">22.0<span class="pre" title="Requires this prefix to work">-webkit-</span></td><td></td><td class="y" data-browser="opera|12.5" data-tooltip="yes (global usage: 0.01%)">12.5</td><td class="y x" data-browser="ios_saf|6" data-tooltip="yes (global usage: 0%)">6.0<span class="pre" title="Requires this prefix to work">-webkit-</span></td><td></td><td></td><td class="y x" data-browser="bb|10" data-tooltip="yes (global usage: 0%)">10.0<span class="pre" title="Requires this prefix to work">-webkit-</span></td></tr><tr class="e2"><th>farther future</th><td></td><td class="y" data-browser="firefox|17" data-tooltip="yes (global usage: 0%)">17.0</td><td class="y x" data-browser="chrome|23" data-tooltip="yes (global usage: 0.03%)">23.0<span class="pre" title="Requires this prefix to work">-webkit-</span></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table>
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
	</footer>
	
	<section id="index" style="display: none;" role="navigation">
		<nav class="right">
			<ul>
				<li><a href="#" onclick="javascript:document.getElementById('index').style.display = 'none';"><i class="icon close"></i> Close</a></li>
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