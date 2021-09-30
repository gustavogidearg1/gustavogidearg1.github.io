<!doctype html>
<html>
<head>
<title>Contacto</title>

 <link rel="stylesheet" href="css/estilo.css">
	 <script type="text/javascript" src="js/Archivo.js"></script>

</head>

<body>
	<header class="menu">
				<nav>
					<ul>
            
		<li><a href="http://planidear.com.ar/Tienda/"> Inicio </a></li>
		<li><a href="http://planidear.com.ar/Tienda/nosotros.html">Quienes somos</a></li>
	<li><a href="http://planidear.com.ar/Tienda/Productos.html"> Producto</a></li>
	<li>	<a href="http://planidear.com.ar/Tienda/FormContacto.php"> Contacto </a></li>
   		<li><a href="http://planidear.com.ar/Tienda/Login.html"> Login </a></li>
       
		</ul>
	</nav>
	
	</header>
	
	</header>
<table width="200" border="0" align="center">
	  <tbody>
	    <tr>
	      <td><img src="/Tienda/img/ImagenCabeceraContacto.jpg" alt="Contacto" width="626" height="101" class="nav"/></td>
        </tr>
      </tbody>
</table>
<form action="http://planidear.com.ar/Tienda/insertarContacto.php" method="post" name="form1" enctype="multipart/form-data">
<p align="center">&nbsp;</p>
<div align="left">
  <table width="826" border="0" align="center">
    <tr>
      <td colspan="2" align="center">&nbsp;</td>
    </tr>
    <tr>
      <td width="85">Nombre :</td>
      <td width="493"><input name="txtNombreContacto" type="text" required="required" id="txtNombreContacto" size="50" autofocus /></td>
    </tr>
    <tr>
      <td>Email: </td>
      <td><label>
        <input name="txtEmail" type="email" required="required" id="txtEmail" onBlur="MM_validateForm('subject','','RisEmail');return document.MM_returnValue" size="50"/>
      </label></td>
    </tr>
    <tr>
      <td> Empresa
        :</td>
      <td><label>
        <input name="txtEmpresa" type="text" id="txtEmpresa" size="50" />
      </label></td>
    </tr>
    <tr>
      <td>Imagen muestra :</td>
      <td><p>
        <input type="file" name="archivo">
        <input type="submit" name="submit" value="enviar">
      </p></td>
    </tr>
    <tr>
      <td>Consulta:</td>
      <td><p>
        <textarea name="txtConsulta" cols="80" id="txtConsulta" onChange="MM_validateForm('message','','R');return document.MM_returnValue"></textarea>
      </p></td>
    </tr>
    <tr>
      <td> Telefono : </td>
      <td><input name="txtTelefono" type="text" id="txtTelefono" size="50" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label> </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="btnEnviar" id="btnEnviar" value="Enviar" />
      </label></td>
    </tr>
  </table>
</div>
	  </form>
</body>
</html>