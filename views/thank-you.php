<!DOCTYPE HTML>
<html>
	<?php include_once("includes/head.php")?>
	<?php include_once("includes/header.php")?>

	
<section id="services-hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" data-aos="fade-right" data-aos-duration="1500">
				<h1 class=" text-center"><?php if (isset($_REQUEST['thanksMsg'])) {
                                                                            echo $_REQUEST['thanksMsg'];
                                                                        } ?></h1>
                    <h1  class="text-center"><?php if (isset($_REQUEST['successMsg'])) {
                                                                            echo $_REQUEST['successMsg'];
                                                                        } ?></h1></div>
                </div>
            </div>
        </div>
    </section>

			<!-- FOOTER START -->

			<?php include_once("includes/footer.php")?>
<style>
    section#services-hero-section {
        margin-bottom: 0px !important;
    }
    </style>
	</body>
</html>