
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

	<section class="container grid">
		<div class="col-12">
			<!-- <div class="col-12"> -->
				<h1>Type Style</h1>
				<p>The text is fully responsive by using ems on a per element basis or using an include that allows you set the min and max font size. </p>
			<!-- </div> -->
			<div class="block">
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
			</div>
			<div class="col-12">
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
			</div>
		</div>
	</section>
		

	<?php include 'includes/global/footer/index.php';?>
	<script src="/js/global.js"></script>
</body>
</html>
<!doctype html>
