<?php
	session_start();
	if(empty($_SESSION['TOKEN'])){
		header('Location:/sucus_pg/login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Configuraciones</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<?php include('./components/styles.php')?>
</head>
<body>
	<div class="wrapper">
		<?php
			include './components/header.php'
		?>
		<section class="profile-account-setting">
			<div class="container">
				<div class="account-tabs-setting">
					<div class="row">
						<div class="col-lg-3">
							<div class="acc-leftbar">
								<div class="nav nav-tabs" id="nav-tab" role="tablist">
								    <a class="nav-item nav-link active" id="nav-notification-tab" data-toggle="tab" href="#nav-notification" role="tab" aria-controls="nav-notification" aria-selected="false"><i class="fa fa-flash"></i>Notificaciones</a>
								    <a class="nav-item nav-link" id="nav-password-tab" data-toggle="tab" href="#nav-password" role="tab" aria-controls="nav-password" aria-selected="false"><i class="fa fa-lock"></i>Cambio de Contraseña</a>
								    <a class="nav-item nav-link" id="nav-deactivate-tab" data-toggle="tab" href="#nav-deactivate" role="tab" aria-controls="nav-deactivate" aria-selected="false"><i class="fa fa-random"></i>Editar informacion</a>
								</div>
							</div>
						</div>
						<div class="col-lg-9">
							<div class="tab-content" id="nav-tabContent">
								<div class="tab-pane fade" id="nav-acc" role="tabpanel" aria-labelledby="nav-acc-tab">
									<div class="acc-setting">
										<h3>Account Setting</h3>
										<form>
											<div class="notbar">
												<h4>Notification Sound</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pretium nulla quis erat dapibus, varius hendrerit neque suscipit. Integer in ex euismod, posuere lectus id</p>
												<div class="toggle-btn">
													<div class="custom-control custom-switch">
														<input type="checkbox" class="custom-control-input" id="customSwitch1">
														<label class="custom-control-label" for="customSwitch1"></label>
													</div>
												</div>
											</div>
											<div class="notbar">
												<h4>Notification Email</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pretium nulla quis erat dapibus, varius hendrerit neque suscipit. Integer in ex euismod, posuere lectus id</p>
												<div class="toggle-btn">
													<div class="custom-control custom-switch">
														<input type="checkbox" class="custom-control-input" id="customSwitch2">
														<label class="custom-control-label" for="customSwitch2"></label>
													</div>
												</div>
											</div>
											<div class="notbar">
												<h4>Chat Message Sound</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pretium nulla quis erat dapibus, varius hendrerit neque suscipit. Integer in ex euismod, posuere lectus id</p>
												<div class="toggle-btn">
													<div class="custom-control custom-switch">
														<input type="checkbox" class="custom-control-input" id="customSwitch3">
														<label class="custom-control-label" for="customSwitch3"></label>
													</div>
												</div>
											</div>
											<div class="save-stngs">
												<ul>
													<li><button type="submit">Save Setting</button></li>
													<li><button type="submit">Restore Setting</button></li>
												</ul>
											</div>
										</form>
									</div>
								</div>
                                <div class="tab-pane fade" id="nav-password" role="tabpanel" aria-labelledby="nav-password-tab">
                                    <div class="acc-setting">
										<h3>Cambio de Contraseña</h3>
										<form>
											<div class="cp-field">
												<h5>Contraseña Antigua</h5>
												<div class="cpp-fiel">
													<input type="text" name="old-password" placeholder="Contraseña Antigua">
													<i class="fa fa-lock"></i>
												</div>
											</div>
											<div class="cp-field">
												<h5>Contraseña Nueva</h5>
												<div class="cpp-fiel">
													<input type="text" name="new-password" placeholder="Contraseña Nueva">
													<i class="fa fa-lock"></i>
												</div>
											</div>
											<div class="cp-field">
												<h5>Repetir Contraseña</h5>
												<div class="cpp-fiel">
													<input type="text" name="repeat-password" placeholder="Repetir Contraseña">
													<i class="fa fa-lock"></i>
												</div>
											</div>
											<div class="save-stngs pd2">
												<ul>
													<li><button type="submit">Guardar</button></li>
												</ul>
											</div>
										</form>
									</div>
                                </div>
                                    <div class="tab-pane fade show active" id="nav-notification" role="tabpanel" aria-labelledby="nav-notification-tab">
                                        <div class="acc-setting">
                                        	<h3>Notifications</h3>
                                        	<div class="notifications-list">
                                        		<div class="notfication-details">
                                        			<div class="noty-user-img">
                                        				<img src="images/resources/ny-img1.png" alt="">
                                        			</div>
                                        			<div class="notification-info">
                                        				<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                        				<span>2 min ago</span>
                                        			</div>
                                        		</div>
                                        		<div class="notfication-details">
                                        			<div class="noty-user-img">
                                        				<img src="images/resources/ny-img2.png" alt="">
                                        			</div>
                                        			<div class="notification-info">
                                        				<h3><a href="#" title="">Poonam Verma</a> Bid on your Latest project.</h3>
                                        				<span>2 min ago</span>
                                        			</div>
                                        		</div>
                                        		<div class="notfication-details">
                                        			<div class="noty-user-img">
                                        				<img src="images/resources/ny-img3.png" alt="">
                                        			</div>
                                        			<div class="notification-info">
                                        				<h3><a href="#" title="">Tonney Dhman</a> Comment on your project.</h3>
                                        				<span>2 min ago</span>
                                        			</div>
                                        		</div>
                                        		<div class="notfication-details">
                                        			<div class="noty-user-img">
                                        				<img src="images/resources/ny-img1.png" alt="">
                                        			</div>
                                        			<div class="notification-info">
                                        				<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                        				<span>2 min ago</span>
                                        			</div>
                                        		</div>
                                        		<div class="notfication-details">
                                        			<div class="noty-user-img">
                                        				<img src="images/resources/ny-img1.png" alt="">
                                        			</div>
                                        			<div class="notification-info">
                                        				<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                        				<span>2 min ago</span>
                                        			</div>
                                        		</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="blockking" role="tabpanel" aria-labelledby="nav-blockking-tab">
                                        <div class="helpforum">
                                            <div class="row">
                                                <div class="col-12 security">
                                                    <h3>Blocking</h3>
                                                    <hr>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h4>Blocking</h4>
                                                        <p>See your list,and make changes if you'd like</p>
                                                        <div class="bloktext">
                                                        <p>You are not bloking anyone</p>
                                                        <p>Need to blok or report someone? Go to the profile of the person you want to blok and select "Blok or Report" from the drowp-down menu at the top of the profile summery</p>
                                                        <p>Note: After you have blocked the person, Any previous profile views of yours and of the other person will disappear from each of your "Who's viewed your profile" sections. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-deactivate" role="tabpanel" aria-labelledby="nav-deactivate-tab">
                                    <div class="acc-setting">
										<h3>Editar informacion de la Cuenta</h3>
										<form>
											<div class="cp-field">
												<h5>Contraseña</h5>
												<div class="cpp-fiel">
													<input type="password" name="password" placeholder="Contraseña">
													<i class="fa fa-lock"></i>
												</div>
											</div>
											<div class="cp-field">
												<h5>Nueva Descripcion de la cuenta</h5>
												<textarea></textarea>
											</div>
											<div class="save-stngs pd3">
												<ul>
													<li><button type="submit">Guardar</button></li>
												</ul>
											</div>
										</form>
									</div>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php
			include './components/footer.php'
		?>
	</div>
	<?php include('./components/scripts.php')?>
</body>
</html>
