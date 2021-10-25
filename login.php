<?php
	session_start();
	if(!empty($_SESSION['TOKEN'])){
		header('Location:/sucus_pg/index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>WorkWise Html Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<?php include('./components/styles.php')?>
</head>
<body class="sign-in">
	<div class="wrapper">
		<div class="sign-in-page">
			<div class="signin-popup">
				<div class="signin-pop">
					<div class="row">
						<div class="col-lg-6">
							<div class="cmp-info">
								<div class="cm-logo">
									<img src="images/cm-logo.png" alt="">
									<p>Proyecto de Desarrollo Web Red Social espero que les guste putos</p>
								</div>
								<img src="images/cm-main-img.png" alt="">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="login-sec">
								<ul class="sign-control">
									<li data-tab="tab-1" class="current"><a href="#" title="">Iniciar sesion</a></li>
									<li data-tab="tab-2"><a href="#" title="">Registrarse</a></li>
								</ul>
								<div class="sign_in_sec current" id="tab-1">
									<h3>Iniciar Sesion</h3>
									<form id = 'formLogin' >
										<div class="row">
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="text" id = 'email' name="email" placeholder="Email" require>
													<i class="la la-user"></i>
												</div>
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="password" id = "password" name="password" placeholder="Password" require>
													<i class="la la-lock"></i>
												</div>
											</div>
											<div class="col-lg-12 no-pdd">
												<button type="submit" value="submit">Iniciar Sesion</button>
											</div>
										</div>
									</form>
									<div class="login-resources" id = 'error-credentials'>
									</div>
								</div>
								<div class="sign_in_sec" id="tab-2">
									<div class="signup-tab">
										<i class="fa fa-long-arrow-left"></i>
										<ul>
											<li data-tab="tab-3" class="current"><a href="#" title="">User</a></li>
											<li data-tab="tab-4"><a href="#" title="">User Admin</a></li>
										</ul>
									</div>
									<div class="dff-tab current" id="tab-3">
										<form id = "formRegister">
											<div class="row">
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" id="useridentity" name="useridentity" placeholder="Nombre del usuario" require>
														<i class="la la-user"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" id = "nameUser" name="name" placeholder="Nombre completo" require>
														<i class="la la-user"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="email" id="emailUser" name="email" placeholder="Correo Electronico" require>
														<i class="la la-globe"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" id="passwordUser" name="password" placeholder="Contraseña" require>
														<i class="la la-lock"></i>
													</div>
												</div>
                                                <div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="date" id="dobUser" name="dobUser" placeholder="Fecha de Cumpleaños" require>
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<button type="submit" value="submit">Registrar</button>
                                                    <div class="login-resources" id = 'error-credentials-form-user'>
                                                    </div>
												</div>
											</div>
										</form>
									</div>
									<div class="dff-tab" id="tab-4">
										<form id = 'formRegisterAdmin'>
											<div class="row">
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" id = "useridentityAdmin" name="useridentityAdmin" placeholder="Nombre del usuario">
														<i class="la la-user"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" id = "nameAdmin" name="nameAdmin" placeholder="Nombre completo">
														<i class="la la-user"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="email" id="emailAdmin" name="emailAdmin" placeholder="Correo Electronico">
														<i class="la la-globe"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" id ='passwordAdmin' name="passwordAdmin" placeholder="Contraseña">
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" id = "claveAdmin" name="claveAdmin" placeholder="Clave para creacion">
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<button type="submit" value="submit">Iniciar Sesion</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
<script type="text/javascript" src="js/login.js"></script>
<script type="text/javascript" src="js/register.js"></script>
<script src="https://momentjs.com/downloads/moment-with-locales.min.js"></script>
<?php include('./components/scripts.php')?>
</body>
</html>


