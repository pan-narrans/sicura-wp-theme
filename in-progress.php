<?php
/*
Template Name: IN PROGRESS
*/
?>

<?php get_header(); ?>

<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

	<div class="content-area">
		<main>
			<section class="middle-area">
				<div class="container">
					<div class="row">
						<h2>IN PROGRESS</h2>											
					</div>

					

					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="3JGRRT2NXHTVG">
					<table>
					<tr><td><input type="hidden" name="on0" value="Cursos">Cursos</td></tr><tr><td><select name="os0">
						<option value="Aula 1">Aula 1 €1,00 EUR</option>
						<option value="Aula 2">Aula 2 €1,50 EUR</option>
						<option value="Aula 3">Aula poenes 3 €2,00 EUR</option>
					</select> </td></tr>
					</table>
					<input type="hidden" name="currency_code" value="EUR">
					<input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal, la forma rápida y segura de pagar en Internet.">
					<img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
					</form>

				</div>
			</section>
        </main>
    </div>
    
<?php get_footer(); ?>