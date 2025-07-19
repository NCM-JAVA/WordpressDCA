<?php /* Template Name: MyPageTemplate */ ?>


<?php get_header();?>


<!--*********************** banner carousel https://codepen.io/adorade/pen/YzdEbyr*********************** -->
<body>
  <div id="main">
    <?php
echo do_shortcode('[smartslider3 slider="1"]');
?>
</div>

	  
	  <!-- ********************Important links, podast and news section ******************** -->
	 
    <section style="margin-top: 20px;">
      <div class="container imp-news-sec">
        <div class="row align-items-stretch">
          <div class="col-12 col-md-8 left-section">

            <div class="important-links border-2 rounded mb-3 bg-white">
              <h5 class="text-center mt-3 fw-light">IMPORTANT LINKS</h5>
              <div class="d-flex justify-content-around">
               <div class="card wallet p-3 shadow">
                   <img src="<?php echo get_template_directory_uri(); ?>/Assets/images/Reform Booklets.jpg" alt srcset>
                  <div class="overlay"></div>
                 <p>Reform <br> Booklets</p>
                </div>
              <div class="card wallet p-3 shadow">
                   <img src="<?php echo get_template_directory_uri(); ?>/Assets/images/dashboard.png" alt srcset>
                  <div class="overlay"></div>
                  <p>Dashboard</p>
                </div>
               <div class="card wallet p-3 shadow">
                   <img src="<?php echo get_template_directory_uri(); ?>/Assets/images/blogging_15270611.png" alt srcset>
                  <div class="overlay"></div>
                  <p>Blog</p>
                </div>
                  <div class="card wallet p-3 shadow">
                   <img src="<?php echo get_template_directory_uri(); ?>/Assets/images/flour_10784888.png" alt srcset>
                  <div class="overlay"></div>
                  <p>(PMGKAY)</p>
                </div>
                  <div class="card wallet p-3 shadow">
                   <img src="<?php echo get_template_directory_uri(); ?>/Assets/images/video-player_4263305.png" alt
                    srcset>
                  <div class="overlay"></div>
                  <p>Audio / Video</p>
                </div>
              </div>
            </div>

            <div class="podcast-section border-2 rounded bg-white">
              <h5 class="text-center mt-3 fw-light">PODCAST</h5>
              
			  
                <div class="d-flex">
                  <div class="w-50 my-auto">
                    <p>Jagriti Rap Song</p>
                  </div>
                  <div>
                    <audio controls>
                      <source src="horse.ogg" type="audio/ogg">
                      <source src="http://125.20.102.85/wordpress/wp-content/uploads/2024/08/nightfall-future-bass-music-228100-2.mp3" type="audio/mpeg">
                      Your browser does not support the audio element.
                    </audio>
                  </div>
                </div>
                <div class="d-flex">
                  <div class="w-50 my-auto">
                    <p>Has someone seen her? She is coming soon….</p>
                  </div>
                  <div>
                    <audio controls>
                      <source src="horse.ogg" type="audio/ogg">
                      <source src="http://125.20.102.85/wordpress/wp-content/uploads/2024/08/nightfall-future-bass-music-228100-2.mp3" type="audio/mpeg">
                      Your browser does not support the audio element.
                    </audio>
                  </div>
                </div>
              </div>
            </div>

          <div class="col-12 col-md-4 right-section h-100">
            <div class="news-section rounded shadow-lg">
              <div class="d-flex justify-content-between pt-2 px-3 mb-2">
                <div class="heading d-flex">
                   <img src="<?php echo get_template_directory_uri(); ?>/Assets/images/Reform Booklets.jpg" alt srcset>
                  <h4 class="my-auto" style="font-size:22px;">Latest News</h4>
                </div>
				
                <div>
                  
				  <button style="background:white;"><a href="http://125.20.102.85/wordpress/blogs" style="color:black!important;">View All</a></button>
	
				
                </div>
			
              </div>
              <div class="holder">
                <ul id="ticker01" class="h-100 px-3">
				<marquee class="marq"
                 direction="up"
                 loop="" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();">
           
			<?php echo do_shortcode("[pt_view id=227908fcwh]"); ?></marquee>
				
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>

    <!-- ********************about us, ministers, twitter section ******************** -->

    <section class="about_detail bg-white py-3">
	
      <div class="container">
        <div class="row my-3">
          <!-- minister-section -->
		 
      <div class="minister-section col-12 col-md-4 pe-md-0">
            <div class="border-bottom border-4 border-maroon">
              <h5 class="ms-2 text-dark text-center text-capitalize">Hon'ble
                Ministers</h5>
            </div>
            <div class="d-flex flex-column my-4 gap-4">
			 <?php
		 echo do_shortcode( '[gsteam id=7]');
		?>
            </div>
          </div>
		 
          <!-- about section  -->
          <div class="col-12 col-md-4 bg-maroon text-white">
            <h5 class="ms-2 text-capitalize pt-2">WELCOME TO DEPARTMENT OF
              CONSUMER AFFAIRS</h5>
            <p class="text-justify lh-1"style="line-height:18px!important;">Department of Consumer Affairs is one
              of the two Departments under the Ministry of Consumer Affairs,
              Food & Public Distribution. It was constituted as a separate
              Department in June 1997 as it was considered necessary to have a
              separate Department to give a fillip to the nascent consumer
              movement in the country.<br/>
            The Department has been entrusted with the following work</p>
            <ul>
              <li class="point">1: Implementation of Consumer Protection Act, 2019.</li>
              <li class="point">2: Implementation of Bureau of Indian Standards Act, 2016</li>
              <li class="point">3: Implementation of Standards of Weights and Measures - The
                Legal Metrology Act, 2009.</li>
              <li class="point">4: Regulation of Packaged Commodities.</li>
              
            </ul>
          </div>
          <!-- social media section  -->
          <div class="col-12 col-md-4 ps-md-0">
            <div class="border-bottom border-4 border-maroon mt-3 mt-md-0">
              <h5 class="ms-2 text-dark text-center text-capitalize">Social
                Media</h5>
				
            </div>
			
       <div class="mt-2 px-2">
  <a class="tweets" style="color:black!important;margin-left: 8px; font-weight: 600;font-size: 18px;" href="https://twitter.com/jagograhakjago?ref_src=twsrc%5Etfw" 
    ><p>Tweets by jagograhakjago</a>
	<br/><br/>
	<a class="twitter-timeline" data-height="350" data-theme="light"
     href="https://twitter.com/jagograhakjago?ref_src=twsrc%5Etfw" 
    >Tweets by jagograhakjago</a>

  <script async src="https://platform.twitter.com/widgets.js" tabindex="-1"  charset="utf-8"></script>
</div>

          </div>
        </div>
      </section>

      <!-- ******************* Photo Gallery section ******************* -->
      <section>
        <div class="container justify-content-center gallery-section">
          <div class="d-flex justify-content-center mb-3">
            <div 
              class="gallery-section text-center heading border-bottom border-danger border-3 w-25">
              <h3 class="mb-1 text-black">Gallery Section</h3>
            </div>
          </div>
<?php echo do_shortcode('[foogallery id="664"]');?>
      </section>
      
<?php the_content(); ?> 

	 </body> 
<?php get_footer();?>

<script>
  // Wait for the iframe to load
  window.addEventListener('load', function() {
    // Use a small timeout to ensure the iframe is fully rendered
    setTimeout(function() {
      // Select the dynamically generated iframe inside the Twitter widget
      var twitterIframe = document.querySelector('.twitter-timeline iframe');
      
      if (twitterIframe) {
        // Disable keyboard focus on the iframe
        twitterIframe.setAttribute('tabindex', '-1');
       
      }
    }, 1000); // Adjust timeout if needed based on the loading speed of the widget
  });
</script>

