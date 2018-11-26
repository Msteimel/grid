<article id="grids" class="grid">
	<div class="col-10 offset-1">
		<div class="section-type">
			<div class="section-headlines">
				<h1 class="section-title">Grid</h1>
				<p class="lead">There are two grids, one in the more traditional vien using floats and a sass function based on the number of columns desired. The second grid is done in css-grid to all for more flexible and precise control.</p>
			</div>
		</div>
	</div>
</article>
<section class="grid">
	<div class="col-10 offset-1">
		<div class="space-med">
			<section class="block-title">Traditional Grid <code>.grid</code></section>
			<p>This tradition grid is set to a 12 column layout by default. Using <code>.col-#</code> to define the width of the column and using <code>.offset-#</code> to push the columnd form the right.</p>
		</div>
	</div>
	<div class="example-grid">
		<div class="col-11"><div>col-11</div></div><div class="col-1"><div>1</div></div>
		<div class="col-10"><div>col-10</div></div><div class="col-2"><div>col-2</div></div>
		<div class="col-9"><div>col-9</div></div><div class="col-3"><div>col-3</div></div>
		<div class="col-8"><div>col-8</div></div><div class="col-4"><div>col-4</div></div>
		<div class="col-7"><div>col-7</div></div><div class="col-5"><div>col-5</div></div>
		<div class="col-6"><div>col-6</div></div><div class="col-6"><div>col-6</div></div>
		<div class="col-5"><div>col-5</div></div><div class="col-7"><div>col-7</div></div>
		<div class="col-4"><div>col-4</div></div><div class="col-8"><div>col-8</div></div>
		<div class="col-3"><div>col-3</div></div><div class="col-9"><div>col-9</div></div>
		<div class="col-2"><div>col-2</div></div><div class="col-10"><div>col-10</div></div>
		<div class="col-1"><div>1</div></div><div class="col-11"><div>col-11</div></div>
		<div class="col-12"><div>col-12</div></div>
	</div>
</section>
<section class="grid">
	<div class="col-10 offset-1">
		<div class="space-large">
			<section class="block-title">Traditional Grid &ndash; Offest <code>.offset-#</code></section>
			<p>This tradition grid is set to a 12 column layout by default. Using <code>.col-10#</code> to define the width of the column and using <code>.offset-#</code> to push the columnd form the right.</p>
		</div>
	</div>
	<div class="example-grid">
		<div class="offset-1 col-11"><div>Offset-1</div></div>
		<div class="offset-2 col-10"><div>Offset-2</div></div>
		<div class="offset-3 col-9"><div>Offset-3</div></div>
		<div class="offset-4 col-8"><div>Offset-4</div></div>
		<div class="offset-5 col-7"><div>Offset-5</div></div>
		<div class="offset-6 col-6"><div>Offset-6</div></div>
		<div class="offset-7 col-5"><div>Offset-7</div></div>
		<div class="offset-8 col-4"><div>Offset-8</div></div>
		<div class="offset-9 col-3"><div>Offset-9</div></div>
		<div class="offset-10 col-2"><div>Offset-10</div></div>
		<div class="offset-11 col-1"><div>11</div></div>
	</div>
</section>
<section class="grid-css">
	<div class="col-2-11">
		<div class="space-med">
			<section class="block-title">Css Grid <code>.grid-css</code></section>
			<p><code>.grid-css</code> allows you to specifically place a column using <code>.col-#-#</code> for the start and end line of the column.  You can also use <code>.row-#-#</code> to set the height of an element, however it seems to work best to use it for all elements, or not at all.</p>
		</div>
	</div>
</section>
<section class="grid-css example-grid">
		<div class="col-1-12"><div>col-1-12</div></div>
		<div class="col-2-3"><div>col-2-3</div></div>
		<div class="col-6-10"><div>col-6-10</div></div>
		<div class="col-4-12"><div>col-4-12</div></div>
		<div class="col-5-12"><div>col-5-12</div></div>
		<div class="col-2-6"><div>col-2-6</div></div>
		<div class="col-1-4"><div>col-1-4</div></div>
		<div class="col-8-12"><div>col-8-12</div></div>
		<div class="col-4-6"><div>col-4-6</div></div>
		<div class="col-2-5"><div>col-2-5</div></div>
		<div class="col-11-12"><div>col-11-12</div></div>
</section>	