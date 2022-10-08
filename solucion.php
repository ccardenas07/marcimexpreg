<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>menu</title>
<link href="css/estilo.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
$(document).ready(function() {
    $("#button li").on("click", function() {
        $("#button li").removeClass("active");
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
	
preguntas.innerHTML='<iframe  src="solucionrefri.php" width="690" height="643" frameborder="0"  marginwidth=0 marginheight=4 align=left ></iframe>';
	}
		if(valuePreg ==1 )
	{	 
	
preguntas.innerHTML='<iframe  src="solucioncocina.php" width="690" height="643" frameborder="0"  marginwidth=0 marginheight=4 align=left ></iframe>';
	}	
 } 

</script>
</head>

<body >
<style>
.boton{ width:85px; float:left; background:url(imagenes/preguntas.png) no-repeat top center;
 background-position:30 50;
 }
.boton1{width:100px; float:left; background:url(imagenes/spritebtsolucion.png) no-repeat top center;
 background-position:30 50;}

body
{
	overflow-y: hidden; overflow-x: hidden;
}
.innertube{
	margin-top: 0;
}

</style>


	 <ul id="button">
    	<li onclick="preguntas('0');"  class="active"> <i class="flaticon-refrigerator2"></i> Refrigeradora </li>
        <li onclick="preguntas('1');" ><i class="flaticon-oven1"></i> Cocina</li>
    </ul>
    
    
   
<div class="innertube">
	<div id="preguntas">
		<iframe  src="solucioncocina.php" width=690 height=649 frameborder="0"  marginwidth=2 marginheight=4 align=left></iframe>
	</div>

</div>
</body>
</html>