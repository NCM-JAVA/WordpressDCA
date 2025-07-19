<!-- ******************* footer section ******************* -->
<style>
.footer-visits {
  background-color:#630000;
    text-align: center;
    font-size: 14px;
    color: #fff;
    margin-top: -50px!important;
    padding:10px;
}
@media screen and (max-width: 600px){
  .footer-visits {
    margin-left: 2px;
    
    margin-top: 0px!important;

}
}
</style>
        <footer>
		<?php
wp_nav_menu( array( 
    'theme_location' => 'secondary-menu') );
?> 
          <div class="container">

            <div class="row">

              <!-- ****** logo section ****** -->
              <div class="col-12 col-md-4">
                <div class="bg d-flex justify-content-center h-100">
      <img class="my-auto" style="padding: 12px;background-color: white!important;"src="<?php echo get_template_directory_uri(); ?>/Assets/images/Logo.png" alt
                    srcset>
                </div>
              </div>

              <!-- ******useful links section  ****** -->
              <div class="col-12 col-md-4 text-white py-3">
                <h5>Address</h5>
                <a
                  href="https://consumerhelpline.gov.in">https://consumerhelpline.gov.in</a>
              </div>

              <div class="col-12 col-md-4 mb-3 text-white py-3">
                <h5>Contact Information</h5>
                <p>National Consumer Helpline<br>
                  (Department of Consumer Affairs, Govt. of India)<br>
                  Toll Free No.
                  <span class="fw-bold"><a href="tel:1800-11-4000">1800-11-4000</a> OR <a href="tel:1915">1915</a></span> <br>
                  Register your grievance through NCH APP</p>
              </div>

            </div>
          </div>

          <div class="footer_end bg-footer-dark">
            <div class="container">
              <div class="d-flex justify-content-between text-white py-2">
                <p>Content Owned by DCA</p>
				    
			<div class="d-flex justify-content-between text-white py-2">
				<p>Last Update On: <span id="lastModified"></span></p>
			
</div>

              </div>
            </div>
          </div>

  <?php wp_footer();?>
     </footer>

<script>
        // Get the last modified date
        const lastModified = new Date(document.lastModified);

        // Format the date to exclude time
        const formattedDate = lastModified.toLocaleDateString();

        // Display the date
        document.getElementById("lastModified").textContent = formattedDate;
</script>
