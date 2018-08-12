<?php include 'header.php'?>

<br>
<br>
<div id="cargando">
<div class="loader">Cargando...</div></div>


<div id="editar" style="display: none;"></div>
<div class="card">
                                    <div class="card-header">Editar Usuario</div>
                                    <div class="card-body card-block">
                                       
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Nombre(s)</div>
                                                    <input type="text" id="nombre" name="nombre" class="form-control" value="Juancito">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Apellido(s)</div>
                                                    <input type="text" id="apellido" name="apellido" class="form-control" value="Pérez">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Usuario</div>
                                                    <input type="text" id="username" name="username" class="form-control" value="Juancito">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Contraseña</div>
                                                    <input type="password" id="password" name="password" class="form-control">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-asterisk"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Email</div>
                                                    <input type="email" id="email" name="email" class="form-control">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                            </div>
                                        
                                    </div>
                                </div>

<body onload="listartodos()">
 <div id="listar">
 </div>
</body>

<?php include 'footer.php' ?>