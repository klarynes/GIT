
<div class='fotogallery-list'>
				<div class='fotogallery-list-controls'>
					<div class='uwe-c1'> <a href='#'><</a> </div>
					<div class='uwe-c2'> <a href='#'>></a> </div>
					<div class='clr'></div>
				</div>
				<div class="fotogallery-buttons-holder">
					<ul class='fotogallery-buttons' data-tab="<?php echo $tab; ?>">
						<?php 
						
							$tabs_link ="";
							foreach ($tabs as $tab) {
								$tabs_link .= '<li><a href="#tabs-'.$tab->position.'">'.$tab->name.'</a></li>';
							}
							echo $tabs_link;
						?>					
						<div class='clr'></div>
					</ul>
				</div>
				<?php 
					foreach ($tabs as $tab) {
						echo '<div class="gallery-inner" id="tabs-'.$tab->position.'">';
							echo '<div class="album-description">
									<div class="album-name">
										'.$tab->name.' <strong>['.$tab->counts->bookmaks.']</strong>
									</div>
									<div class="dropd">
										<div class="favorite">	
											<span id="favi">MY FAVORITE</span>
											<img src="'.$base_url.'styles/images/stars.png" alt="star" />
										</div>
										<div class="search">
											<span id="findy">SEARCH</span>
											<img src="'.$base_url.'styles/images/findic.png" alt="find" />
										</div>
										<div class="bookm"> 	
											<span id="bbb">GO TO BOOKMARK:</span> 		
											<ul>
												<li class="act"><span>Vybraná videa </span><img src="'.$base_url.'styles/images/dwn.png" alt="dwn" />
													<div class="uwe_scrollbar">
														<div class="scrollbar"><div class="track"><div class="thumb1"><div class="end"></div></div></div></div>
														<div class="viewport">
															<div class="overview">
																<ul>
																	'.$tabs_link.'
																</ul>
															</div>
														</div>
													</div>	
												</li>
											</ul>
										</div>
										<div class="clr"></div>
									</div>	

									<div class="clr"></div>
								</div>
								<div class="album-threebars">
									<img src="'.$base_url.'"styles/images/stin.png" alt="stin" id="threebar-shd" />
									<img src="'.$base_url.'styles/images/stin2.png" alt="stin" id="threebar-shd2" />
									
							';	
						
							
											
						
							
							$loop = $tab->counts->albums;
							$aloop = 3;
							$positionkrat = 3;
							if($tab->counts->lastAlbum > 0) {
								$loop++;
							}
							if($tab->counts->albums == 0 && $tab->counts->lastAlbum > 0){
								
								$loop = 1;
							}
							
							
							for($i = 1; $i <= $loop; $i++){
								echo '<div class="album-threebar">';
								
								if($i == $loop){
									if($tab->counts->lastAlbum == 0){
										$aloop = 3;
									}
									else {
										$aloop = $tab->counts->lastAlbum;
									}
									
								}
								
								for($a = 1; $a <= $aloop; $a++){
									/*echo "<span style='background: white;'>";
									print_r($tab->counts);
									echo "</span>";*/
										$position = ($positionkrat*($i-1) +$a)-1;
									echo '<div class="threebar-item">
									
										<div class="threebar-item-left">
											<strong>'.$tab->bookmarks[$position]->description.'</strong>
											<p></p>
											<span>'.$tab->bookmarks[$position]->time.' ['.$tab->bookmarks[$position]->position.'/'.$tab->counts->bookmaks.'] ~ '.$tab->bookmarks[$position]->date.'</span>
											<img src="'.$base_url.'styles/images/stars.png" class="fav-ozn" alt="addto" />
										</div>
										<div class="threebar-item-right">
											<img src="'.$base_url.$tab->bookmarks[$position]->preview.'" alt="poster" />
										</div>
										<div class="clr"></div>
									</div>';
									
									
									
									
									
									
								}
							echo '<div class="uwe-smallch">01>03</div>
								</div>	';

							}
							echo '<div class="clr"></div>
					</div>
				</div>';
					
					}
					
				?>	
					
							
							
								
									
							
					
							
							
								
										
					
				
				
				
				
							

					
				
				
				
				
				
				
				
				
				
				
				
					
			</div>
			<div class='fotogallery-footer'>
				<div class='fotogallery-footer-copy'>
					© Powered by visual~galleries.eu, domain of U&WE®
				</div>
				<div class='fotogallery-footer-paging'>
					<div class='fotogallery-start'>
					<a href='#' id="revleft"><img src='<?php echo $base_url; ?>styles/images/uleft.png' alt='left' /></a>
					<a href='#' id="revright"><img src='<?php echo $base_url; ?>styles/images/uright.png' alt='right' /></a>
					 
					<a href="#">|<</a> </div>
					<div class='fotogallery-revind'><a href="#"><<</a> </div>
					<div class='fotogallery-numbering'>001>009  |  010>018  |  019>027</div>
					<div class='fotogallery-revind2'><a href="#">>></a></div>
					<div class='fotogallery-stop'><a href="#">>|</a></div>
					<div class='clr'></div>
				</div>	
				<div class='fotogallery-footer-icons'  data-hide="<?php echo $hide; ?>">
					<a href='#'><img src='<?php echo $base_url; ?>styles/images/sear.png' alt='search'></a>
					<a href='#'><img class="fotogallery-footer-hide" src='<?php echo $base_url; ?>styles/images/hide.png' alt='search'></a>
				</div>
				<div class='clr'></div>
			</div>
		</div>
	</div>