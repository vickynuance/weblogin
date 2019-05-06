 <?php include('action_page.php'); ?>
<?php include('header.php'); ?>

<!-- <section class="mains">
	<div class="container">
		<div class="row">
			<div class="">
				<h1>Main Page</h1>
				<h3><?php //echo $base_url ?></h3>
			</div>
		</div>
	</div>
</section> -->

<section class="sliders">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img class="img-responsive" src="http://placehold.it/1280x500/3498db/2980b9" alt="First slide" style="width: 100%;">
                        <div class="carousel-caption">
                            <h3>
                                First slide</h3>
                            <p>
                                Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="http://placehold.it/1280x500/9b59b6/8e44ad" alt="Second slide" style="width: 100%;">
                        <div class="carousel-caption">
                            <h3>
                                Second slide</h3>
                            <p>
                                Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="http://placehold.it/1280x500/34495e/2c3e50" alt="Third slide" style="width: 100%;">
                        <div class="carousel-caption">
                            <h3>
                                Third slide</h3>
                            <p>
                                Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control"
                        href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
                        </span></a>
            </div>
</section>

<?php include('footer.php'); ?>