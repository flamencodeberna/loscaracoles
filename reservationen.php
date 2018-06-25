<?php include('include/header.html'); ?>
<?php include('include/navigation.php'); ?>
<div class="container">
	<div class="row">
		<div class="col-lg-8 mx-auto py-5">
			<h1>Manuel Montero</h1>
			<p>Fr 14. September 2018, Lorrainestrasse 4, 3013 Bern</p>
            <p>ACHTUNG: Reservation ist bis am 18.07.2018 nur für Caracoes-Mitglieder möglich. Anschliessend ist es für alle offen.</p>
			 <?php perch_content('reservationen');	?>  
		</div>
	</div>
</div>
<?php include('include/footer.html'); ?>
