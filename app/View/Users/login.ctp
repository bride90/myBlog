	
	
	<section id="slider">
		<div class="container">
		
			<div class="row-fluid">
				<div id="myCarousel" class="carousel slide">
					<div class="span6">
						<form class="form-horizontal">
							<div class="control-group">
								<br>
								<br>
								<h3 align="center">Username & Password</h3>
								<label class="control-label" for="inputUser">Username/Email</label>
								<div class="controls">
									<input type="text" id="inputUser" placeholder="Username/Email">
								</div>
							</div>
							
							<div class="control-group">
								<label class="control-label" for="inputPassword">Password</label>
								<div class="controls">
									<input type="password" id="inputPassword" placeholder="Password">
								</div>
							</div>
							
							<div class="control-group">
								<div class="controls">
									<label class="checkbox">
										<input type="checkbox"> Remember me
									</label>
									<button class="btn btn-primary" type="button">Sign In</button>
								</div>
							</div>
						</form>
					</div>
				
					<div class="span6">
						<!-- Carousel items -->
						<div class="carousel-inner">
							<div class="active item">
								<?php
									echo $this->Html->image('blogMotoGP/slider1.jpg', array('class'=>'', 'alt'=>'photo'));
								?>
							</div>
							<div class="item">
								<?php
									echo $this->Html->image('blogMotoGP/slider2.jpg', array('class'=>'', 'alt'=>'photo'));
								?>
							</div>
							<div class="item">
								<?php
									echo $this->Html->image('blogMotoGP/slider3.jpg', array('class'=>'', 'alt'=>'photo'));
								?>
							</div>
							<div class="item">
								<?php
									echo $this->Html->image('blogMotoGP/slider4.jpg', array('class'=>'', 'alt'=>'photo'));
								?>
							</div>
							<div class="item">
								<?php
									echo $this->Html->image('blogMotoGP/slider6.jpg', array('class'=>'', 'alt'=>'photo'));
								?>
							</div>
						</div>
						
						<!-- Carousel nav -->
						<a class="carousel-control left" href="#myCarousel" data-slide="prev"></a>
						<a class="carousel-control right" href="#myCarousel" data-slide="next"></a>	
					</div>
				</div>
			</div>

		</div>
	</section>


   


<?php echo $this->element('sql_dump'); ?>




