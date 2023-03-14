<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style type="text/css">
		*{
			padding: 0;
			margin: 0;
			text-align:  center;
			font-family: system-ui;
		}
		#contenedor{
			height: 100vh;
			display: grid;
			grid-template-areas: 'header header header'
								'nav nav nav'
								'section section aside'
								'footer footer footer';
			grid-template-columns: 1fr 1fr 30%;
			grid-template-rows: 10% 10% auto 10%;
		}
		#header{
			grid-area: header;
			background-color: #0df;
		}
		#nav{
			grid-area: nav;
			background-color: #ff9;
		}
		#section{
			grid-area: section;
			background-color: #f71;
		}
		#aside{
			grid-area: aside;
			background: -webkit-radial-gradient(circle,#fff,#fb9,#f81);
			order: 4;
		}
		#footer{
			grid-area: footer;
			background-color: #0a0;
			order: 2;

		}
		form{
			width: fit-content;
			height: fit-content;
			border: 1px solid #ccc;
			padding: 16px 5px;
			border-radius: 5px ;
			margin: 35px auto;
		}
		input,select{
			border: 1px solid #ccc;
			padding: 0 5px;
			width: 100%;
			box-sizing: border-box;
			background-color: #ddd6;
			border-radius: 3px;
			outline: none;
			border:  none;
		}
		.box{
			padding-bottom: 5px;
		}
		.form-inline{
			border: 1px solid #ccc;
			padding: 8px 10px 4px;
			border-radius: 2px;
		}
	    .form-inline label,.form-inline input{
			display: inline-block;
			width: auto;
			padding-right: 15px;
		}
		.error{
			color: #f00;
			font-size: 90%;
		}
		input[type="text"]{
			outline: none;
		}
		input[type="submit"]{
			font-weight: 200;
			background-color: #333;
			color: #fff;
			padding: 5px;
			margin-top: 10px;
			cursor: pointer;
		}
		input[type="submit"]:hover{
			padding: 5px;
			box-shadow: 0 3px 0 #fff;
		}
		.input-1{
			background-image: url("validar.jpg");
			background-repeat: no-repeat;
			background-position: right 10px center;
			border: 1px solid #0ff;

		}
		.input-2{
			background-image: url("cancelar.jpg");
			background-repeat: no-repeat;
			background-position: right 10px center;
			border: 1px solid #e00;
		}
		.input-3{
			border: 1px solid #0ff;	
		}
		.input-4{
			border: 1px solid #f00;	
		}
		label{
			display: block;
			text-align: left;
		}

	</style>
</head>
<body>
	<h2>Diseño maqueta Pedro Luis</h2>
	<div id="contenedor">
		<header id="header">Cabecera</header>
		<nav id="nav">Menu</nav>
		<section id="section">Contenido</section>
		<aside id="aside">
			<form action="" id="form"  method="post">
				<h2>Formulario de registro</h2>
					<div class="box">
						<label for="">Nombre Completo</label>
						<input type="text" id="name" name="name">
						<div class="error" id="nameErr"></div>
					</div>
					<div class="box">
						<label for="">Correo Electronico</label>
						<input type="text" id="email" name="email">
						<div class="error" id="emailErr"></div>
					</div>
					<div class="box">
						<label for="">Numero Celular</label>
						<input type="text" id="mobile">
						<div class="error" id="mobileErr"></div>
					</div>
					<div class="box">
						<label for="">Pais</label>
						<select id="country">
							<option value="">Select</option>
							<option value="">India</option>
							<option value="">London</option>
						</select>
						<div class="error" id="countryErr"></div>
					</div>
					<div class="box">
						<label for="">Genero</label>
						<div class="form-inline" id="gender">
							<label for=""><input name="gender" type="radio">Masculino</label>
							<label for=""><input name="gender" type="radio">Femenino</label>
						</div>
						<div class="error" id="genderErr"></div>
					</div>
					<div><input type="submit" value="Enviar"></div>
			</form>
		</aside>
		<footer id="footer">Pie de Pagina</footer>
	</div>

	<script type="text/javascript">

		let form= document.getElementById("form");
		form.addEventListener("submit",(e)=>{
			e.preventDefault();
			ValidarForm();
		})
		let nameElem = document.getElementById("name"); 
		let emailElem = document.getElementById("email"); 

		const ImprimirError=(id,msg)=>{
			document.getElementById(id).textContent = msg;
		}
		const agregarClase=(val1,val2)=>{
			nameElem.classList.add(val1);
			nameElem.classList.remove(val2);
		}
		
		const ValidarForm=()=>{
		if(nameElem.value == ""){
			ImprimirError("nameErr","Porfavor! Ingrese su nombre...");
			agregarClase("input-2","input-1");		
		}else{
			let regex = /^[a-zA-Z\s]+$/;
			if(regex.test(nameElem.value) === false){
				ImprimirError("nameErr","Porfavor! Ingrese un nombre valido...");
				agregarClase("input-2","input-1");
			}else{
				ImprimirError("nameErr","");
				agregarClase("input-1","input-2");
			}
		}

		if(emailElem.value == ""){
			ImprimirError("emailErr","Porfavor! Ingrese su email...");
			agregarClase("input-2","input-1");		
		}else{
			let regex = /^[a-zA-Z0-9.-_]+@[a-zA-Z0-9.-_]+\.[a-zA-Z]+$/;
			if(regex.test(emailElem.value) === false){
				ImprimirError("emailErr","Porfavor! Ingrese un email valido...");
				agregarClase("input-2","input-1");
			}else{
				ImprimirError("emailErr","");
				agregarClase("input-1","input-2");
			} 
		}
		}
		

// const validarNombre=()=>{
// 			nameElem = nameElem.value;
// 			let regex = /^[a-zA-Z\s]+$/;
// 			let msg1 = "Porfavor! Ingrese su nombre...";
// 			let msg2 = "Porfavor! Ingrese un nombre valido...";
// 			let error = "nameErr";
// 			ValidarFor
	</script>
</body>
</html>