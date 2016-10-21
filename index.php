<?php
	require_once ("template.php");
	require_once('article_tracker.php');

	$content = '
	
			<!-- This slider is taken from http://webdeveloperplus.com/jquery/featured-content-slider-using-jquery-ui/ -->
			<div id="featured" >
				<ul class="ui-tabs-nav">
					<li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-1"><a href="#fragment-1"><img src="images/vitamin1-small.png" alt="" /><span>Find information omkring D-vitamin</span></a></li>
					<li class="ui-tabs-nav-item" id="nav-fragment-2"><a href="#fragment-2"><img src="images/vitamin2-small.png" alt="" /><span>D-vitamin i maden</span></a></li>
					<li class="ui-tabs-nav-item" id="nav-fragment-3"><a href="#fragment-3"><img src="images/vitamin6-small.png" alt="" /><span>Få mere viden omkring D-vitamin</span></a></li>
					<li class="ui-tabs-nav-item" id="nav-fragment-4"><a href="#fragment-4"><img src="images/vitamin4-small.png" alt="" /><span>Se den nye kampagne video nedenfor</span></a></li>
				</ul>
				
				<!-- First Content -->
				<div id="fragment-1" class="ui-tabs-panel" style="">
					<img src="images/vitamin1.png" alt="" />
					<div class="info" >
					<h2><a href="vitaminD-php" >Find information omkring D-vitamin</a></h2>
					<p><a href="vitaminD.php" >læs mere her</a></p>
					</div>
				</div>
				
				<!-- Second Content -->
				<div id="fragment-2" class="ui-tabs-panel ui-tabs-hide" style="">
					<img src="images/vitamin2.png" alt="" />
					<div class="info" >
					<h2><a href="food.php" >D-vitamin i maden</a></h2>
					<p><a href="food.php" >læs mere her</a></p>
					</div>
				</div>
				
				<!-- Third Content -->
				<div id="fragment-3" class="ui-tabs-panel ui-tabs-hide" style="">
					<img src="images/vitamin6.png" alt="" />
					<div class="info" >
					<h2><a href="article.php" >Få mere viden omkring D-vitamin</a></h2>
					<p><a href="article.php" >læs mere her</a></p>
					</div>
				</div>
				
				<!-- Fourth Content -->
				<div id="fragment-4" class="ui-tabs-panel ui-tabs-hide" style="">
					<img src="images/vitamin4.png" alt="" />
					<div class="info" >
					<h2><a href="#" >Se den nye kampagne video nedenfor</a></h2>
					<p><a href="#" ></a></p>
					</div>
				</div>
			</div>

			<div class="facts">
				<h2>Så er den her <br /> Den nye kampagne video</h2>
				<iframe width="560" height="315" src="//www.youtube.com/embed/Ry8kkduH-Lk" allowfullscreen></iframe>
			
			</div>
			
			
		
		';
	$arguments = array();
	$arguments["extraHeaders"] = '';
	
	$arguments["content"] = $content;
	printPage ($arguments);


?>