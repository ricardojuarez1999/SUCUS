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
			<img src="images/resources/Sucus.png" alt="" height="500px", width="20px">
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
											<div class="add-dp" id="OpenImgUpload">
												<input type="file" id="file">
												<label for="file"><i class="fas fa-camera"></i></label>
											</div>
										</div>
										<div class="user_pro_status">
											<ul class="flw-status">
												<li>
													<span>Amigos</span>
													<b>155</b>
												</li>
											</ul>
										</div>
										<ul class="social_links">
											<li><h1>Descripcion</h1></li>
											<li><p>Ricardo es hijo de quebin y papa de wilber</p></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="main-ws-sec">
									<div class="user-tab-sec rewivew">
										<h3>Ricardo Juarez</h3>
                                            <div class="tab-feed st2 settingjb">
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
													<div class="ed-opts">
														<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
														<ul class="ed-options">
															<li><a href="#" title="">Eliminar</a></li>
														</ul>
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
											<h3><a href="#" title="" class="overview-open">Descripcion</a> <a href="#" title="" class="overview-open"><i class="fa fa-pencil"></i></a></h3>
											<p>Aqui se encuentra una breve descripcion del perfil</p>
										</div>
									</div>
									<div class="product-feed-tab" id="rewivewdata">
                                        <section ></section>
										<div class="posts-section">
											<div class="post-bar reviewtitle">
												<h2>Reviews</h2>
											</div>
											<div class="post-bar ">
												<div class="post_topbar">
													<div class="usy-dt">
														<img src="images/resources/bg-img3.png" alt="">
														<div class="usy-name">
															<h3>Rock William</h3>
															<div class="epi-sec epi2">
													<ul class="descp review-lt">
														<li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
														<li><img src="images/icon9.png" alt=""><span>India</span></li>
													</ul>
												</div>
														</div>
													</div>
												</div>
												<div class="job_descp mngdetl">
													<div class="star-descp review">
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-half-o"></i></li>
											</ul>
											<a href="#" title="">5.0 of 5 Reviews</a>
										</div>
										<div class="reviewtext">
											<p>Lorem ipsum dolor sit amet, adipiscing elit. Nulla luctus mi et porttitor ultrices</p>
											<hr>
										</div>
										<div class="post_topbar post-reply">
													<div class="usy-dt">
														<img src="images/resources/bg-img4.png" alt="">
													<div class="usy-name">
														<h3>John Doe</h3>
														<div class="epi-sec epi2">
													<p><i class="la la-clock-o"></i>3 min ago</p>
													<p class="tahnks">Thanks :)</p>
												</div></div>
												</div>
												</div>
												<div class="post_topbar rep-post rep-thanks">
													<hr>
													<div class="usy-dt">
														<img src="images/resources/bg-img4.png" alt="">
														<input class="reply" type="text" placeholder="Reply">
														<a class="replybtn" href="#">Send</a>
													</div>
												</div>
										</div>
											</div>
											<div class="post-bar post-thanks">
												<div class="post_topbar">
													<div class="usy-dt">
														<img src="images/resources/bg-img1.png" alt="">
														<div class="usy-name">
															<h3>Jassica William</h3>
															<div class="epi-sec epi2">
													<ul class="descp review-lt">
														<li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
														<li><img src="images/icon9.png" alt=""><span>India</span></li>
													</ul>
												</div>
														</div>
													</div>
													<div class="ed-opts">
														<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
														<ul class="ed-options">
															<li><a href="#" title="">Edit Post</a></li>
															<li><a href="#" title="">Unsaved</a></li>
															<li><a href="#" title="">Unbid</a></li>
															<li><a href="#" title="">Close</a></li>
															<li><a href="#" title="">Hide</a></li>
														</ul>
													</div>
												</div>
												<div class="job_descp mngdetl">
													<div class="star-descp review">
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-half-o"></i></li>
											</ul>
											<a href="#" title="">5.0 of 5 Reviews</a><br><br>
											<p>Awesome Work, Thanks John!</p>
											<hr>
										</div>
										<div class="post_topbar rep-post">
												<div class="usy-dt">
													<img src="images/resources/bg-img4.png" alt="">
													<input class="reply" type="text" placeholder="Reply">
													<a class="replybtn" href="#">Send</a>
												</div>
												</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="right-sidebar">
									<div class="message-btn">
										<a href="configuracion.html" title=""><i class="fas fa-cog"></i> Configuracion</a>
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
		<div class="overview-box" id="overview-box">
			<div class="overview-edit">
				<h3>Descripcion</h3>
				<span>5000 caracteres minimo</span>
				<form>
					<textarea></textarea>
					<button type="submit" class="save">Guardar</button>
					<button type="submit" class="cancel">Cancelar</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div>
		</div>
	</div>
	<?php include('./components/scripts.php')?>
</body>
</html>
