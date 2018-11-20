
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
				<h1>Type Style</h1>
				<p>The text is fully responsive by using ems on a per element basis or using an include that allows you set the min and max font size. </p>
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
		<div class="col-11">11</div><div class="col-1">col-1</div>
		<div class="col-10">10</div><div class="col-2">col-2</div>
		<div class="col-9">9</div><div class="col-3">col-3</div>
		<div class="col-8">8</div><div class="col-4">col-4</div>
		<div class="col-7">7</div><div class="col-5">col-5</div>
		<div class="col-6">6</div><div class="col-6">col-6</div>
		<div class="col-5">5</div><div class="col-7">col-7</div>
		<div class="col-4">4</div><div class="col-8">col-8</div>
		<div class="col-3">3</div><div class="col-9">col-9</div>
		<div class="col-2">2</div><div class="col-10">col-10</div>
		<div class="col-1">1</div><div class="col-11">col-11</div>
		<div class="col-12">12</div>
	</section>
	<section class="grid">
		<div class="col-10 offset-1">
			<section class="block">Traditional Grid &ndash; Offest <code>.grid</code></section>
			<p>This tradition grid is set to a 12 column layout by default. Using `.col-#` to define the width of the column and using `.offset-#` to push the columnd form the right. it first needs to be wrapped in `.grid`</p>
		</div>
		<div class="col-12">No offset</div>
		<div class="offset-1 col-11">Offset-1</div>
		<div class="offset-2 col-10">Offset-2</div>
		<div class="offset-3 col-9">Offset-3</div>
		<div class="offset-4 col-8">Offset-4</div>
		<div class="offset-5 col-7">Offset-5</div>
		<div class="offset-6 col-6">Offset-6</div>
		<div class="offset-7 col-5">Offset-7</div>
		<div class="offset-8 col-4">Offset-8</div>
		<div class="offset-9 col-3">Offset-9</div>
		<div class="offset-10 col-2">Offset-10</div>
		<div class="offset-11 col-1">OS-11</div>
	</section>

	<section class="grid-css">
		<div class="col-2-11">
			<section class="block">Css Grid <code>.grid-css</code></section>
			<p>`.grid-css` allows you to specifically place a column using `.col-#-#` for the start and end line of the column.  You can also use `.row-#-#` to set the height of an element, however it seems to work best to use it for all elements, or not at all.</p>
		</div>
		<div class="col-1-12">col-1-12</div>
		<div class="col-2-12">col-2-12</div>
		<div class="col-3-12">col-3-12</div>
		<div class="col-4-12">col-4-12</div>
		<div class="col-5-12">col-5-12</div>
		<div class="col-2-6">col-2-6</div>
		<div class="col-1-4">col-1-4</div>
		<div class="col-8-12">col-2-12</div>
		<div class="col-4-6">col-4-6</div>
		<div class="col-2-5">col-2-5</div>
		<div class="col-11-12">col-11-12</div>
	</section>	
		
	<article class="container grid">
		<div class="col-10 offset-1">
			<h1>Form</h1>
			<p>Form styles and the real money makers: buttons.</p>
		</div>
		<section>
			<div class="col-12 block-title">Form</div>
			<div class="col-4"><label for="">This is a label</label><input type="text" placeholder="This is an input"></div>
			<div class="col-4"><label for="">This is a label</label><input type="text" placeholder="This is an input"></div>
			<div class="col-4"><label for="">This is a label</label>
				<select name="" id="">
					<option value="">I am an option</option>
					<option value="">I am an option</option>
					<option value="">I am an option</option>
				</select> 
			</div>
			<div class="col-12"><label for="">Text Area</label><textarea name="" id="" cols="30" rows="10"></textarea></div>
		</section>
		<section>
			<div class="col-12 block-title">Primary Buttons</div>
			<div class="col-3">
				<a href="#" class="btn">.btn</a>
			</div>
			<div class="col-3">
				<a href="#" class="btn btn-large">.btn-large</a>
			</div>
			<div class="col-3">
				<a href="#" class="btn btn-small">.btn-smal</a>
			</div>
			<div class="col-3">
				<a href="#" class="btn btn-ghost">.btn-ghost</a>
			</div>
			<div class="col-3">
				<input type="button" name="">input[type=‘button’]
			</div>
			<div class="col-3">
				<input type="submit" name="">input[type=‘submit’]
			</div>
			<div class="col-3">
				<button>Button</button>
			</div>
			<div class="col-12">
				<a href="#" class="btn btn-ful">.btn-full</a>
			</div>
		</section>
	</article>

	<?php include 'includes/global/footer/index.php';?>
	<script src="/js/global.js"></script>
</body>
</html>
<!doctype html>
