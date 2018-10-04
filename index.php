
<!DOCTYPE html>

<html>
<?php include 'includes/global/head/index.php';?>


<body>
	<div class="grid-12 example-grid container">
	<?php include 'includes/global/header/index.php';?>
		<div class="col-12">
			<h1>Header 1</h1>
			<h2>Header 2</h2>
			<h3>Header 3</h3>
			<h4>Header 4</h4>
			<h5>Header 5</h5>
			<h6>Header 6</h6>
			<p>Elit in do excepteur et commodo pariatur et id cillum mollit nulla voluptate commodo amet sed dolore occaecat ut consequat nulla cupidatat labore laborum eiusmod ad qui dolore.</p>
			<blockquote>
				<p>Aliquip adipisicing velit mollit sit incididunt cupidatat irure commodo ea consectetur occaecat consequat.</p> 
				<cite>Bob</cite>
			</blockquote>
		</div>
		
		<div class="col-12">
			<h2>Forms</h2>
			<form action="">
				<div class="col-4">
					<label for="">This is a label</label>
					<input type="text" class="text" placeholder="This is an input...">
				</div>
				<div class="col-4">
					<label for="">This is a label</label>
					<input type="text" class="text" placeholder="This is an input...">
				</div>
				<div class="col-4">
					<label for="">This is a label</label>
					<select name="" id="">
						<option value="" class="select-label">I am an option</option>
						<option value="">I am an option</option>
						<option value="">I am an option</option>
					</select>
				</div>
				<div class="col-12">
					<textarea class="textarea"></textarea>
				</div>
					<input type="radio" name="gender" value="male"> Male
					<input type="radio" name="gender" value="female"> Female
					<input type="radio" name="gender" value="other"> Other  
					
					<label class="switch">
						<input type="checkbox">
						<span class="slider"></span>
					</label>
					<input type="submit" value="Submit">
			</form>
		</div>

		<div class="col-12">
			<section class="wrap">
			<h3>Responsive Flexbox Table</h3>
			  <p>I mean, it's still a table. It's just built with flexbox.</p>
				<ul class="table">
					<li class="table-head">
						<span class="title">Title</span>
						<span class="col-2">Description</span>
						<span class="col-3">Language</span>
						<span class="col-4">Category</span>
						<span class="col-5">Updated</span>
					</li>
			    <li>
						<span class="title">Title 1</span>
						<span class="col-2">Magna dolor cupidatat proident cupidatat sint veniam cillum anim adipisicing deserunt nisi voluptate commodo ea id ad voluptate.</span>
						<div class="col-3">
							<span class="sub-col"><a href="#">ENG</a></span>
							<span class="sub-col"><a href="#">ESP</a></span>
						</div>
						<span class="col-4">Other</span>
						<span class="col-5">6-17-18</span>
					</li>
				  <li>
						<span class="title">Title 2</span>
						<span class="col-2">Magna dolor cupidatat proident cupidatat sint veniam cillum anim adipisicing deserunt nisi voluptate commodo ea id ad voluptate.</span>
						<div class="col-3">
							<span class="sub-col"><a href="#">ENG</a></span>
							<span class="sub-col"><a href="#">ESP</a></span>
						</div>
						<span class="col-4">Other</span>
						<span class="col-5">6-17-18</span>
					</li>
				  <li>
						<span class="title">Title 3</span>
						<span class="col-2">Magna dolor cupidatat proident cupidatat sint veniam cillum anim adipisicing deserunt nisi voluptate commodo ea id ad voluptate.</span>
						<div class="col-3">
							<span class="sub-col"><a href="#">ENG</a></span>
							<span class="sub-col"><a href="#">ESP</a></span>
						</div>
						<span class="col-4">Other</span>
						<span class="col-5">6-17-18</span>
					</li>
				</ul>	
			</section>
		</div>

		<div class="col-1">
			<div class="example-col">1</div>
		</div>
		<div class="col-11">
			<div class="example-col">11</div>
		</div>
		<div class="col-2">
			<div class="example-col">2</div>
		</div>
		<div class="col-10">
			<div class="example-col">10</div>
		</div>
		<div class="col-3">
			<div class="example-col">3</div>
		</div>
		<div class="col-9">
			<div class="example-col">9</div>
		</div>
		<div class="col-4">
			<div class="example-col">4</div>
		</div>
		<div class="col-8">
			<div class="example-col">8</div>
		</div>
		<div class="col-5">
			<div class="example-col">5</div>
		</div>
		<div class="col-7">
			<div class="example-col">7</div>
		</div>
		<div class="col-6">
			<div class="example-col">6</div>
		</div>
		<div class="col-6">
			<div class="example-col">6</div>
		</div>
		<div class="col-7">
			<div class="example-col">7</div>
		</div>
		<div class="col-5">
			<div class="example-col">5</div>
		</div>
		<div class="col-8">
			<div class="example-col">8</div>
		</div>
		<div class="col-4">
			<div class="example-col">4</div>
		</div>
		<div class="col-9">
			<div class="example-col">9</div>
		</div>
		<div class="col-3">
			<div class="example-col">3</div>
		</div>
		<div class="col-10">
			<div class="example-col">10</div>
		</div>
		<div class="col-2">
			<div class="example-col">2</div>
		</div>
		<div class="col-11">
			<div class="example-col">11</div>
		</div>
		<div class="col-1">
			<div class="example-col">1</div>
		</div>
		<div class="col-12">
			<div class="example-col">12</div>
		</div>
	</div>

	<div class="grid-12 example-grid container">
		<div class="offset-1 col-11">
			<div class="example-col">offset-1</div>
		</div>
		<div class="offset-2 col-10">
			<div class="example-col">offset-2</div>
		</div>
		<div class="offset-3 col-9">
			<div class="example-col">offset-3</div>
		</div>
		<div class="offset-4 col-8">
			<div class="example-col">offset-4</div>
		</div>
		<div class="offset-5 col-7">
			<div class="example-col">offset-5</div>
		</div>
		<div class="offset-6 col-6">
			<div class="example-col">offset-6</div>
		</div>
		<div class="offset-7 col-5">
			<div class="example-col">offset-7</div>
		</div>
		<div class="offset-8 col-4">
			<div class="example-col">offset-8</div>
		</div>
		<div class="offset-9 col-3">
			<div class="example-col">offset-9</div>
		</div>
		<div class="offset-10 col-2">
			<div class="example-col">offset-10</div>
		</div>
		<div class="offset-11 col-1">
			<div class="example-col">11</div>
		</div>
	</div>

	<div class="grid-css example-grid container">
		<div class="col-1-12">
			<p><code>.grid-css</code> enter <code>.col-#-#</code> to span the columns you need. It's set to end at the column line. Two columns that start and end on the same line will push to the next row. </p>
		</div>
		<div class="col-1-3">
			<div class="example-col">.col-1-3</div>
		</div>
		<div class="col-5-12">
			<div class="example-col">.col-5-12</div>
		</div>
		<div class="col-1-3">
			<div class="example-col">.col-1-3</div>
		</div>
		<div class="col-4-5">
			<div class="example-col">.col-4-5</div>
		</div>
		<div class="col-6-12">
			<div class="example-col">.col-6-12</div>
		</div>
		<div class="col-4-5">
			<div class="example-col">.col-4-5</div>
		</div>
		<div class="col-5-8">
			<div class="example-col">.col-5-8</div>
		</div>
	</div>

	<?php include 'includes/global/footer/index.php';?>
	<script src="/js/global.js"></script>
</body>
</html>
<!doctype html>
