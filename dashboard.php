<?php
	session_start();
	if(empty($_SESSION['TOKEN'])){
		header('Location:/sucus_pg/login.php');
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>WorkWise Html Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
                <div class="col-lg-12">
                    <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-status" role="tabpanel" aria-labelledby="nav-status-tab">
                        <div class="acc-setting">
                        <h3>Dashboard</h3>
                        <div class="profile-bx-details">
                            <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="profile-bx-info">
                                <div class="pro-bx">
                                    <i class="fa fa-user"></i>
                                    <div class="bx-info">
                                    <h3>10%</h3>
                                    <h5>Tasa de conversión</h5>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="profile-bx-info">
                                <div class="pro-bx">
                                    <i class="fa fa-eye"></i>
                                    <div class="bx-info">
                                    <h3>112K</h3>
                                    <h5>Visitas totales</h5>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="acc-setting mt-4">
                        <h3>Visitas por página</h3>
                        <table class="table">
                            <thead>
                            <th>Página</th>
                            <th>Visitas</th>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Inicio</td>
                                <td>32</td>
                            </tr>
                            <tr>
                                <td>Amigos</td>
                                <td>423</td>
                            </tr>
                            <tr>
                                <td>Búsqueda</td>
                                <td>42</td>
                            </tr>
                            <tr>
                                <td>Perfil</td>
                                <td>14</td>
                            </tr>
                            <tr>
                                <td>Mensajes</td>
                                <td>144</td>
                            </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>
        </div>
        <?php include('./components/scripts.php')?>
    </body>
</html>
