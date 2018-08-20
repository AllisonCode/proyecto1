<?php
include("../database.php");
$sql = "SELECT * FROM zonas";
$result2 = $conn->query($sql);
?>
<div class="card">
                                    <div class="card-header">Agregar Usuario</div>
                                    <div class="card-body card-block">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Nombre(s)</div>
                                                    <input type="text" id="nombre2" name="nombre" class="form-control" value="" required="true">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Apellido(s)</div>
                                                    <input type="text" id="apellido2" name="apellido" class="form-control" value="" required="true">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
												<div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Sexo</div>
                                                    <select name="sexo" id="sexo2" class="form-control">
													<option value="1" selected>Hombre</option>
													<option value="2" >Mujer</option>
													<option value="3" >Prefiero no especificar</option>
                                                    </select>
													
                                                    <div class="input-group-addon">
                                                        <i class="fas fa-genderless"></i>
                                                    </div>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Usuario</div>
                                                    <input type="text" id="username2" name="username" class="form-control" value="" required="true">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Contraseña</div>
                                                    <input type="password" id="password2" name="password" class="form-control"/ required="true">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-asterisk"></i>
                                                    </div>
                                                </div>
                                            </div>
												<div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Zona</div>
                                                    <select name="zona" id="zona2" class="form-control">
													<?php while($row2 = $result2->fetch_assoc()) { 
													if($row2['idZona']==$row['idZona']){
														echo '<option value="'.$row2['idZona'].'" selected>'.$row2['nombreZona'].'</option>';
													}else{
														echo '<option value="'.$row2['idZona'].'">'.$row2['nombreZona'].'</option>';
													
													}
													}
													?>
                                                    </select>
                                                    <div class="input-group-addon">
                                                        <i class="fas fa-home"></i>
                                                    </div>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Rol</div>
                                                    <select name="rol" id="rol2" class="form-control">
                                                        <option value="1">Administrador</option>
														<option value="2" selected>Vendedor</option>
                                                    </select>
                                                    <div class="input-group-addon">
                                                        <i class="fas fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Email</div>
                                                    <input type="email" id="email2" name="email" class="form-control" value="" required="true">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Dirección</div>
                                                    <input type="text" id="direccion2" name="direccion" class="form-control" value="" required="true">
                                                    <div class="input-group-addon">
                                                        <i class="fas fa-home"></i>
                                                    </div>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Teléfono</div>
                                                    <input type="text" id="telefono2" name="telefono" class="form-control" value="" required="true">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-phone"></i>
                                                    </div>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Fecha de Nacimiento</div>
                                                    <input type="date" id="date2" name="date" class="form-control" value="" required="true"/>
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </div>
                                            </div>
											<div class="row">

              <div class="col" align="center"><div class="card">
<iframe id="frameavatar2"
    title="Inline Frame Example"
	height="100px"
	scrolling="yes"
	frameBorder="0"
    src="avatar.php?user=nuevo">
</iframe>
<input type="hidden" id="imagennuevousuario" value="unnameduser"/>
<br><button class="btn btn-outline-success" onclick="agregarusuario()">Agregar usuario</button>
	<button class="btn btn-danger" onclick="listartodos()">Cancelar</button></div>
            </div>
                                          
                                        
                                    </div>
                                </div>      
</div>