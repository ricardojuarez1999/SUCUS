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
	<title>Inicio</title>
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
		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-3 col-md-4 pd-left-none no-pd">
								<div class="main-left-sidebar no-margin">
									<div class="user-data full-width">
										<div class="user-profile">
											<div class="username-dt">
												<div class="usr-pic">
													<img src="images/resources/user-pic.png" alt="">
												</div>
											</div>
											<div class="user-specs">
												<h3>Ricardo Juarez</h3>
												<span>Descripcion de la persona</span>
											</div>
										</div>
										<ul class="user-fw-status">
											<li>
												<h4>Amigos</h4>
												<span>34</span>
											</li>
											<li>
												<a href="perfil.html" title="">Ver Perfil</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-8 no-pd">
								<div class="main-ws-sec">
									<div class="post-topbar">
										<div class="user-picy">
											<img src="images/resources/user-pic.png" alt="">
										</div>
										<div class="post-st">
											<ul>
												<li><a class="post-jb active" href="#" title="">Nueva Publicacion</a></li>
											</ul>
										</div>
									</div>
									<div class="post-bar">
										<div class="post_topbar">
											<div class="usy-dt">
												<img src="images/resources/jass.png" alt="">
												<div class="usy-name">
													<h3>Quebin</h3>
													<span><img src="images/clock.png" alt="">14/10/2021</span>
												</div>
											</div>
										</div>
										<div class="job_descp">
											<ul class="job-dt">
												<p>Descripcion de post</p>
											</ul>
											<ul><img src="images/resources/p1.png" alt=""></ul>
										</div>
									</div>
										<div class="top-profiles">
											<div class="pf-hd">
												<h3>Top Profiles</h3>
												<i class="la la-ellipsis-v"></i>
											</div>
											<div class="profiles-slider">
												<div class="user-profy">
													<img src="images/resources/user1.png" alt="">
													<h3>John Doe</h3>
													<span>Graphic Designer</span>
													<ul>
														<li><a href="#" title="" class="followw">Follow</a></li>
														<li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
														<li><a href="#" title="" class="hire">hire</a></li>
													</ul>
													<a href="#" title="">View Profile</a>
												</div>
												<div class="user-profy">
													<img src="images/resources/user2.png" alt="">
													<h3>John Doe</h3>
													<span>Graphic Designer</span>
													<ul>
														<li><a href="#" title="" class="followw">Follow</a></li>
														<li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
														<li><a href="#" title="" class="hire">hire</a></li>
													</ul>
													<a href="#" title="">View Profile</a>
												</div>
												<div class="user-profy">
													<img src="images/resources/user3.png" alt="">
													<h3>John Doe</h3>
													<span>Graphic Designer</span>
													<ul>
														<li><a href="#" title="" class="followw">Follow</a></li>
														<li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
														<li><a href="#" title="" class="hire">hire</a></li>
													</ul>
													<a href="#" title="">View Profile</a>
												</div>
												<div class="user-profy">
													<img src="images/resources/user1.png" alt="">
													<h3>John Doe</h3>
													<span>Graphic Designer</span>
													<ul>
														<li><a href="#" title="" class="followw">Follow</a></li>
														<li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
														<li><a href="#" title="" class="hire">hire</a></li>
													</ul>
													<a href="#" title="">View Profile</a>
												</div>
												<div class="user-profy">
													<img src="images/resources/user2.png" alt="">
													<h3>John Doe</h3>
													<span>Graphic Designer</span>
													<ul>
														<li><a href="#" title="" class="followw">Follow</a></li>
														<li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
														<li><a href="#" title="" class="hire">hire</a></li>
													</ul>
													<a href="#" title="">View Profile</a>
												</div>
												<div class="user-profy">
													<img src="images/resources/user3.png" alt="">
													<h3>John Doe</h3>
													<span>Graphic Designer</span>
													<ul>
														<li><a href="#" title="" class="followw">Follow</a></li>
														<li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
														<li><a href="#" title="" class="hire">hire</a></li>
													</ul>
													<a href="#" title="">View Profile</a>
												</div>
											</div>
										</div>
										<div class="post-bar">
											<div class="post_topbar">
												<div class="usy-dt">
													<img src="images/resources/jass.png" alt="">
													<div class="usy-name">
														<h3>Quebin</h3>
														<span><img src="images/clock.png" alt="">14/10/2021</span>
													</div>
												</div>
											</div>
											<div class="job_descp">
												<ul class="job-dt">
													<p>Descripcion de post</p>
												</ul>
												<ul><img src="images/resources/p1.png" alt=""></ul>
											</div>
										</div>
										<div class="post-bar">
											<div class="post_topbar">
												<div class="usy-dt">
													<img src="images/resources/jass.png" alt="">
													<div class="usy-name">
														<h3>Quebin</h3>
														<span><img src="images/clock.png" alt="">14/10/2021</span>
													</div>
												</div>
											</div>
											<div class="job_descp">
												<ul class="job-dt">
													<p>Descripcion de post</p>
												</ul>
												<ul><img src="images/resources/p1.png" alt=""></ul>
											</div>
										</div>
										</div>
										<div class="process-comm">
											<div class="spinner">
												<div class="bounce1"></div>
												<div class="bounce2"></div>
												<div class="bounce3"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 pd-right-none no-pd">
								<div class="right-sidebar">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<div class="post-popup job_post">
			<div class="post-project">
				<h3>Nueva Publicacion</h3>
				<div class="post-project-fields">
					<form>
						<div class="row">
							<div class="col-lg-12">
								<textarea name="description" placeholder="Description"></textarea>
							</div>
							<div class="col-lg-12">
								<ul>
								<div class="add-dp" id="OpenImgUpload">
									<input type="file" id="file">
									<label for="file"><i class="fas fa-camera"></i></label>
								</div>
								</ul>
							</div>
							<ul>
							<div class="col-lg-12">
								<ul>
									<li><button class="active" type="submit" value="post">Publicar</button></li>
									<li><a href="#" title="">Cancelar</a></li>
								</ul>
							</div>
							</ul>
						</div>
					</form>
				</div>
				<a href="#" title=""><i class="la la-times-circle-o"></i></a>
			</div>
		</div>
	</div>
<script type="text/javascript">
	var token = '<?php echo $_SESSION['TOKEN']?>'
	console.log(token);
</script>
<?php include('./components/scripts.php')?>
</body>
</html>
