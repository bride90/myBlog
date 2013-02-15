<section id="container">
    <div class="container">
		<section class="headset">
            <div class="row">
                <div class="span4 clearfix">
                    <!--img src="../img/icon1.png" class="icon" alt=""-->																		<!--HTML CODE-->
					<?php echo $this->Html->image('icon1.png', array('class' => 'icon' , 'alt' => '')); ?>				<!--PHP CODE-->
                    <h3>MyBlog</h3>
                    <p>Hi' there Welcome to MotoGP Blog...</p>
                </div>
                <div class="span4 clearfix">
                    <!--img src="../img/icon2.png" class="icon" alt=""-->
					<?php echo $this->Html->image('icon2.png', array('class' =>'icon' , 'alt' =>'')); ?>					
                    <h3>Add New Post</h3>
                    <p>You can add new post...</p>
                </div>
                <div class="span4 clearfix">
                    <!--img src="../img/icon3.png" class="icon" alt=""-->														
					<?php echo $this->Html->image('icon3.png', array('class'=>'icon' , 'alt' =>'' )); ?>						
					<h3>Logout</h3>
                    <p>Logout, Hope To See You Again...</p>
                </div>
            </div>
        </section>
		<hr>
        <section>
            <div class="row">
                <div class="span8">
                    <h3>Superbike World Championship </h3>
                    <p>
						Superbike World Championship (also known as SBK) is the premier international superbike Championship. The championship was founded in 1988. It is regulated by the FIM and managed and promoted by FGSport.
					</p>
					<p>
						Ducati has been the most successful manufacturer in the series over the years, accumulating 15 manufacturer championships. Honda has won it 6 times, with Suzuki claiming one championship. Australia's Troy Bayliss won the 2006 and 2008 titles riding for Xerox Ducati and James Toseland, from the UK, was the winner of the 2007 championship riding for Hannspree Ten Kate Honda.
                    </p>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab1">AMA Superbike</a></li>
                        <li class=""><a data-toggle="tab" href="#tab2">British Superbike</a></li>
                        <li class=""><a data-toggle="tab" href="#tab3">All Japan Superbike</a></li>
	               </ul>
                    <div class="tab-content">
                        <div id="tab1" class="tab-pane active">
                            <p>
                                The AMA Superbike is the premier superbike racing series in the United States. It is part of the AMA Pro Racing series, and was managed by the AMA until 2009 when the AMA sold the series to the Daytona MotorSports Group.
							</p>
							<p>
								Originally launched in 1976, it is now the longest running superbike championship. The series allows more engine modifications than most Superbike championships. 
							</p>
							<p>
								Australian Mat Mladin has dominated the AMA Superbike championship in recent years winning 6 titles since 1999. 2006 MotoGP champion American Nicky Hayden won the 2002 championship. Texan Ben Spies won the 2006-2008 championships riding for the Yoshimura Suzuki team, before moving on to the World Championship to ride for Yamaha.
                            </p>
                        </div>
                        <div id="tab2" class="tab-pane">
                            <p>
								The British Superbike championship (known to most as "BSB") is the leading motorcycle racing championship in the United Kingdom. 
							</p>
							<p>
								It is managed and organised by MCRCB-Events. The commercial and television rights have been delegated to MotorSport Vision.[1] Ducati, Kawasaki, Suzuki and Yamaha all have well supported teams, while Honda has the only HRC supported superbike team outside of Japan. 
							</p>
							<p>
								Japanese rider Ryuichi Kiyonari won the 2006, 2007 and 2010 titles riding for HM Plant Honda.
                            </p>
                        </div>
                        <div id="tab3" class="tab-pane">
                            <p>
                                The All Japan Road Race Championship, also known as MFJ Superbike is the premiere motorcycle road racing championship in Japan and is run by MFJ.
                            </p>
                            <p>
                                The championship started in 1967 and has been running a superbike class since 1994. The series runs a small 7 round schedule but has a large field of Japanese riders and bikes. Atsushi Watanabe won the 2007 championship riding a Yoshimura Suzuki.
                            </p>
                        </div>
					</div>
                </div>
                <div class="span4">
                    <h3>Picture Gallery</h3>
                    <p>
						Superbike racing is a category of motorcycle racing that employs modified production motorcycles. 
					</p>
					<p>
						Superbike World Championship is the international superbike championship, and national superbike championships.
					</p>
                    <div id="latestwork-sidebar" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="active item">
							<?php 
								echo $this->Html->image('moto1.jpg', array('class'=>'photo' , 'alt'=>'')); 						#--insert IMAGE code
							?>
							</div>							
                            <div class="item">
							<?php
								echo $this->Html->image('moto2.jpg', array('class'=>'photo' , 'alt'=>''));
							?>
							</div>
                            <div class="item">
							<?php
								echo $this->Html->image('moto3.jpg', array('class'=>'' , 'alt'=>'photo'));
							?>
							</div>
                        </div>
                        <a class="carousel-control left" href="#latestwork-sidebar" data-slide="prev"></a>
                        <a class="carousel-control right" href="#latestwork-sidebar" data-slide="next"></a>
                    </div>
                    <script type="text/javascript">
                        $(document).ready(function(){
                            $('.carousel').carousel({
                                interval: 5000
                            })
                        });
                    </script>
				</div>
            </div>
		</section>
	</div>
</section>
			<?php echo $this->element('features_home'); ?>

