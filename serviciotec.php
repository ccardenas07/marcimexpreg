<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Beneficios</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Accordion with CSS3" />
        <meta name="keywords" content="accordion, css3, sibling selector, radio buttons, input, pseudo class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="js/modernizr.custom.29473.js"></script>
        <style type="text/css">
		#plarga
		{
			height: 40px;
    line-height: 18px;
		}
		</style>
    </head>
    <body>
        <div class="container">
			<!-- Codrops top bar -->
            <div class="codrops-top">
                <span class="right">
		 </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
			<header>
				
			</header>
			<section class="ac-container">
				<div>
					<input id="ac-1" name="accordion-1" type="radio"  />
					<label for="ac-1">¿En qu&eacute; tiempo se soluciona un problema de servicio t&eacute;cnico?</label>
					<article class="ac-small">
						<p>Todo problema de servicio t&eacute;cnico se trata de solucionar en 7 d&iacute;as y en casos extremos hasta 30 días acogidos a la ley del consumidor.   Pero todo depende del problema y complejidad de la reparaci&oacute;n.</p>
					</article>
				</div>
				<div>
					<input id="ac-2" name="accordion-1" type="radio" />
					<label for="ac-2">¿Qu&eacute; hago tengo un producto que requiere servicio t&eacute;cnico?</label>
					<article class="ac-small">
						<p>Existen dos procesos de ingreso a servicio t&eacute;cnico:<br />
1.	Visitar la agencia más cercana y solicitar la revisi&oacute;n del producto.<br />
2.	Comunicarte con nuestro Contact Center 1-700-500-700 
</p>
					</article>
				</div>
				<div>
					<input id="ac-3" name="accordion-1" type="radio" />
					<label for="ac-3" id="plarga">¿Qu&eacute; hago, tengo un producto en servicio t&eacute;cnico y deseo informaci&oacute;n sobre su estado de reparaci&oacute;n? </label>
					<article class="ac-small">
						<p>Para conocer el estado de reparaci&oacute;n de un producto, es necesario disponer del “N&uacute;mero de Orden de trabajo” que se entrega al cliente en el momento que se deja el producto para su revisi&oacute;n o reparaci&oacute;n. 
Con ese dato se puede llamar al Contact Center 1-700-500-700 y te indicar&aacute;n el estado de tu producto.
   </p>
					</article>
				</div>
				
			</section>
        </div>
    </body>
</html>