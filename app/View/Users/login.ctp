
<section id="slider">
    <div class="container">
            
         <div class="row-fluid">
			<div class="span6">
					<?php echo $this->Form->create('user'); ?>					
					<br>	
					<fieldset>
						<h1>Username and Password :</h1>
							<?php 
								echo $this->Form->input('username', array('label' => 'Username :', 'placeholder' => 'Username / Email'));
							?>
						
							<?php
								echo $this->Form->input('password', array('label' => 'Password :', 'placeholder' => 'Type your password here'));
							?>
							
							<?php
								echo $this->Form->submit('Sign In', array('class' => 'btn'));
								echo $this->Form->end(); 
							?> 
					</fieldset>
			</div>
			
			
			<div class="span6">
                <div id="mainslider" class="flexslider">
                    <ul class="slides">
						<li>
							<?php 
								echo $this->Html->image('blogMotoGP/slider1.jpg', array('class'=>'' , 'alt'=>'photo'));
							?>
                        </li>
                        <li>
                            <?php 
								echo $this->Html->image('blogMotoGP/slider2.jpg', array('class'=>'' , 'alt'=>'photo'));
							?>
						</li>
                        <li>
							<?php
								echo $this->Html->image('blogMotoGP/slider3.jpg', array('class'=>'' , 'alt'=>'photo'));
							?>
						</li>
						<li>
							<?php
								echo $this->Html->image('blogMotoGP/slider4.jpg', array('class'=>'' , 'alt'=>'photo'));
							?>
						</li>
                        <li>
							<?php
								echo $this->Html->image('blogMotoGP/slider6.jpg', array('class'=>'' , 'alt'=>'photo'));
							?>
						</li>
                    </ul>
                </div>
            </div>
			<br>
		</div>
	</div>
</section>

<?php echo $this->element('sql_dump'); ?>




