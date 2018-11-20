
<!DOCTYPE html>

<html>
<?php include 'includes/global/head/index.php';?>


<body>

	<section class="hero">
		<div class="grid">
			<?php include 'includes/global/header/index.php';?>
			<div class="col-12">
				<div class="hero-content">
					<h1 class="hero--headline">Another Dumb Framework</h1>
					<p>I built this to challenge myself and learn more about frameworks and element design.</p>
				</div>
			</div>
		</div>
		<div class="hero--overlay"></div>	
	</section>

	<article class="container grid">
		<div class="col-10 offset-1">
			<!-- <div class="col-12"> -->
				<h1>Type Style</h1>
				<p>The text is fully responsive by using ems on a per element basis or using an include that allows you set the min and max font size. </p>
			<!-- </div> -->
			<section class="block">
				<div class="col-6">
					<div class="block-title">Headings</div>
					<h1>Heading 1</h1>
					<h2>Heading 2</h2>
					<h3>Heading 3</h3>
					<h4>Heading 4</h4>
					<h5>Heading 5</h5>
					<h6>Heading 6</h6>
				</div>
				<div class="col-6">
					<div class="block-title">Pararaph Tags</div>
					<p class="lead">This is a lead paragraph</p>
					<p><strong>This is a strong paragraph</strong></p>
					<p>This is a normal paragraph</p>
					<p><em>This is a em/italic paragraph</em></p>
					<a href="#">This is an anchor tag</a>
					<div class="block-title">Code</div>
					<div class="codeblock">
						<span>code-block {</span>
							<span>border: 1px solid #333;</span>
							<span>padding: 0.5em;</span>
							<span>text-align: center;</span>
						<span>}</span>
					</div>
					<code>.code { padding: 0.5em; }</code>
				</div>
			</section>
			<section class="block">
				<div class="col-4">
					<ul>
						<li>Dolore non nisi quis sit.</li>
						<li>Mollit enim.</li>
						<li>Lorem ipsum nulla duis incididunt.</li>
					</ul>
				</div>
				<div class="col-4">
					<ol>
						<li>In amet esse nulla.</li>
						<li>Excepteur dolore.</li>
						<li>Et cupidatat dolor.</li>
					</ol>
				</div>
				<div class="col-4">
					<ul class="list--plain">
						<li>Eu non.</li>
						<li>Aute quis eu.</li>
						<li>Mollit ea ut aliquip amet.</li>
					</ul>
				</div>
			</section>
			<section class="block">
				<ul class="inline-list">
					<li>Et velit in.</li>
					<li>Lorem ipsum culpa eiusmod minim.</li>
					<li>Lorem ipsum sit excepteur.</li>
					<li>Pariatur eu.</li>
					<li>Occaecat ex reprehenderit.</li>
				</ul>
			</section>
			<section>
				<div class="block-title">Block Quote</div>
				<blockquote>
					Reprehenderit consequat consectetur consequat laborum reprehenderit officia cillum et laboris sunt culpa duis esse velit sit consectetur est cillum mollit ut consequat qui.
					<cite>Billy</cite>
				</blockquote>
				<blockquote class="quote">Ullamco sit in commodo deserunt commodo in dolor consequat sunt dolore duis sit cupidatat est laboris mollit nulla excepteur.</blockquote>
			</section>
		</div>
	</article>

	<article class="container grid">
		<div class="col-10 offset-1">
			<h1>Grid</h1>
			<p class="lead">There are two grids, one in the more traditional vien using floats and a sass function based on the number of columns desired. The second grid is done in css-grid to all for more flexible and precise control.</p>
		</div>
	</article>
	<section class="grid">
			<div class="col-10 offset-1">
				<section class="block">Traditional Grid <code>.grid</code></section>
				<p>This tradition grid is set to a 12 column layout by default. Using `.col-#` to define the width of the column and using `.offset-#` to push the columnd form the right. it first needs to be wrapped in `.grid`</p>
			</div>
		<span><div class="col-11">11</div><div class="col-1">1</div></span>
		<span><div class="col-10">10</div><div class="col-2">2</div></span>
		<span><div class="col-9">9</div><div class="col-3">3</div></span>
		<span><div class="col-8">8</div><div class="col-4">4</div></span>
		<span><div class="col-7">7</div><div class="col-5">5</div></span>
		<span><div class="col-6">6</div><div class="col-6">6</div></span>
		<span><div class="col-5">5</div><div class="col-7">7</div></span>
		<span><div class="col-4">4</div><div class="col-8">8</div></span>
		<span><div class="col-3">3</div><div class="col-9">9</div></span>
		<span><div class="col-2">2</div><div class="col-10">10</div></span>
		<span><div class="col-1">1</div><div class="col-11">11</div></span>
		<div class="col-12">12</div>
	</section>
		

	<?php include 'includes/global/footer/index.php';?>
	<script src="/js/global.js"></script>
</body>
</html>
<!doctype html>
