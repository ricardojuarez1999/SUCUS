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
	<title>Perfil</title>
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
		<section class="cover-sec">
			<img src="images/resources/Sucus.png" alt=""  height="500px", width="20px">
		</section>
		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-3">
								<div class="main-left-sidebar">
									<div class="user_profile">
										<div class="user-pro-img">
											<img src="images/resources/user-pro-img.png" alt="">
										</div>
										<div class="user_pro_status">
											<ul class="flw-hr">
												<li><a href="#" title="" class="flww"><i class="la la-plus"></i> Solicitud de amistad</a></li>
											</ul>
											<ul class="flw-status">
												<li>
													<span>Amigos</span>
													<b>155</b>
												</li>
											</ul>
										</div>
										<ul class="social_links">
											<li><h1>Descripcion</h1>></li>
											<li><p>Quebin enojado</p></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="main-ws-sec">
									<div class="user-tab-sec">
										<h3>Quebin Hurtarte</h3>
										<div class="tab-feed">
											<ul>
												<li data-tab="feed-dd" class="active">
													<a href="#" title="">
														<img src="images/ic1.png" alt="">
														<span>Blog</span>
													</a>
												</li>
												<li data-tab="info-dd">
													<a href="#" title="">
														<img src="images/ic2.png" alt="">
														<span>Descripcion</span>
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="product-feed-tab current" id="feed-dd">
										<div class="posts-section">
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
											<div class="process-comm">
												<div class="spinner">
													<div class="bounce1"></div>
													<div class="bounce2"></div>
													<div class="bounce3"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="product-feed-tab" id="info-dd">
										<div class="user-profile-ov">
											<h3>Descripcion</h3>
											<p>Breve descripcion del perfil</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="right-sidebar">
									<div class="message-btn">
										<a href="#" title=""><i class="fa fa-envelope"></i> Enviar solicitud de chat</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<?php
			include './components/footer.php'
		?>
	</div>
	<?php include('./components/scripts.php')?>
</body>
</html>
