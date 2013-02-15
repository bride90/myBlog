<div class="row">
	<div class="span2 logo">
		<a href="./index.html">
			<?php 
				echo $this->Html->image('newLogo.png', array('class'=>'' , 'alt'=>'Logo'));
			?>
		</a>
	</div>
	<div class="span10">
		<nav id="menu" class="pull-right">
			<ul>
				<li>
					<a href="./pages/home.ctp" class="current">
						<span class="name">Home Page</span>
						<span class="desc">"Welcome Page"</span>
					</a>
				</li>
				<li>
					<a href="./about.html">
						<span class="name">Features</span>
						<span class="desc">"Features & Services"</span>
					</a>
					<ul>
						<li><a href="./about.html">About Us</a></li>
						<li class="last"><a href="./services.html" >Our Services</a></li>
					</ul>
				</li>
				<li>
					<a href="./portfolio2.html">
						<span class="name">Portfolio</span>
						<span class="desc">"Our Works"</span>
					</a>
					<ul>
						<li><a href="./portfolio2.html">Portfolio 2 col</a>
							<ul>
								<li><a href="./portfolio2.html">Portfolio 2 Columns</a></li>
								<li class="last"><a href="./portfolio2ex.html">Portfolio 2 Columns Extended</a></li>
							</ul>
						</li>
						<li><a href="./portfolio3.html">Portfolio 3 col</a>
							<ul>
								<li><a href="./portfolio3.html">Portfolio 3 Columns</a></li>
								<li class="last"><a href="./portfolio3ex.html">Portfolio 3 Columns Extended</a></li>
							</ul>
						</li>
						<li class="last"><a href="./portfolio4.html">Portfolio 4 col</a>
							<ul>
								<li><a href="./portfolio4.html">Portfolio 4 Columns</a></li>
								<li class="last"><a href="./portfolio4ex.html">Portfolio 4 Columns Extended</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="./blog.html">
						<span class="name">Blogs</span>
						<span class="desc">"Latest News"</span>
					</a>
					<ul>
						<li><a href="./blog.html">Blog</a></li>
						<li class="last"><a href="./blog-single.html">Blog Single</a></li>
					</ul>
				</li>
				<li>
					<a href="./contact.html" >
						<span class="name">Get in Touch</span>
						<span class="desc">"Contact Us"</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>
</div>
