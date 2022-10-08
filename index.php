<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Marcimex - Preguntas Frecuentes</title>
<link href="css/estilo.css" type="text/css" rel="stylesheet" />
<style type="text/css">
.boton{ width:115px; float:left; background:url(imagenes/preguntas.png) no-repeat top center;
 background-position:30 50;
 }
#beneficio{ background-position:13px -350px}
#beneficio:hover, #beneficio.active{ background-position:12px -770px; background-color:#045E95; cursor:pointer; }
#credito{ background-position:13px -210px}
#credito:hover, #credito.active{ background-position:13px -630px; background-color:#045E95; cursor:pointer}
#cobranzas{ background-position:13px -280px}
#cobranzas:hover, #cobranzas.active{ background-position:13px -700px; background-color:#045E95; cursor:pointer}
#informacion{ background-position:13px -140px}
#informacion:hover, #informacion.active{ background-position:13px -560px; background-color:#045E95; cursor:pointer}
#servicio{ background-position:13px -70px}
#servicio:hover, #servicio.active{ background-position:13px -490px; background-color:#045E95; cursor:pointer}
#aslotu{ background-position:13px 0px;}
#aslotu:hover, #aslotu.active{ background-position:13px -420px; background-color:#045E95; cursor:pointer}

.innertube{
	margin:0px auto;
	overflow: hidden;
}
.botonini
{
	clear: inherit;
	position: relative;
	padding: 180px 0 0 50px;
}

</style>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
$(document).ready(function() {
    $("#cssmenu li").on("click", function() {
        $("#cssmenu li").removeClass("active");
        $(this).addClass("active");
    });
});
 function preguntas(valuePreg)
 {
	
	// alert(valuePreg);
	var preguntas = document.getElementById("preguntas");
	preguntas.innerHTML = " "; 
	//robos
	if(valuePreg == 0 )
	{	 
	
preguntas.innerHTML='<iframe  src="beneficios.php"width=690 height=550 frameborder="0"  marginwidth=2 marginheight=4 align=left ></iframe>';
	}
		if(valuePreg ==1 )
	{	 
	
preguntas.innerHTML='<iframe  src="credito.php" width=690 height=550 frameborder="0"  marginwidth=2 marginheight=4 align=left ></iframe>';
	}
	if(valuePreg ==2 )
	{	 
	
preguntas.innerHTML='<iframe  src="cobranza.php" width=690 height=550 frameborder="0"  marginwidth=2 marginheight=4 align=left ></iframe>';
	}
	if(valuePreg ==3 )
	{	 
	
preguntas.innerHTML='<iframe  src="informacion.php" width=690 height=550 frameborder="0"  marginwidth=2 marginheight=4 align=left></iframe>';
	}
	if(valuePreg ==4 )
	{	 
	
preguntas.innerHTML='<iframe  src="serviciotec.php" width=690 height=550 frameborder="0"  marginwidth=2 marginheight=4 align=left ></iframe>';
	}
	if(valuePreg ==5 )
	{	 
	
preguntas.innerHTML='<iframe  src="solucion.php" width=690 height=550 frameborder="0"  marginwidth=2 marginheight=4 align=left ></iframe>';
	}
 }
 

	</script>
</head>

<body>
<div class="wrapper">
<div class="botonini">
<img src="imagenes/marcimex_faq.jpg" />
</div>
<div class="men2u" >
	<ul id="cssmenu">
    	<li onclick="preguntas('0');" class="boton active" id="beneficio">
        <a  ></a>
        </li>
        <li onclick="preguntas('1');"class="boton" id="credito">
        <a  ></a>
        </li>
       <li onclick="preguntas('2');"class="boton" id="cobranzas">
        <a ></a>
         </li>
         <li  onclick="preguntas('3');" class="boton" id="informacion">
        <a  ></a>
        </li>
        <li  onclick="preguntas('4');"class="boton" id="servicio">
        <a  ></a>
        </li>
         <li  onclick="preguntas('5');"class="boton" id="aslotu">
        <a  ></a>
        </li>
        <!---->
    
    </ul>
    
    
   
<div class="innertube">
	<div id="preguntas">
		<iframe  src="beneficios.php" width=690 height=350 frameborder="0"  marginwidth=2 marginheight=4 align=left></iframe>
	</div>
</div>
</div>
</div>
</body>
</html>