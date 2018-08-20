<?php
include("../database.php");
$id= $_REQUEST["id"];
$sql = "SELECT * FROM usuarios WHERE idUsuario='".$id."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$sql = "SELECT * FROM zonas";
$result2 = $conn->query($sql);
?>
<div class="card">
                                    <div class="card-header">Editar Usuario</div>
                                    <div class="card-body card-block">
                                       <input type="hidden" id="idusuario" value="<?php echo $id; ?>">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Nombre(s)</div>
                                                    <input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo $row["nombre"]; ?>">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Apellido(s)</div>
                                                    <input type="text" id="apellido" name="apellido" class="form-control" value="<?php echo $row["apellido"]; ?>">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
												<div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Sexo</div>
                                                    <select name="sexo" id="sexo" class="form-control">
													<?php 
													for ($i = 1; $i <= 3; $i++) {
													if($i==$row['sexo']){
													switch ($i) {
														case 1:
														echo '<option value="'.$i.'" selected>Hombre</option>';
														break;
														case 2:
														echo '<option value="'.$i.'" selected>Mujer</option>';
														break;
														case 3:
														echo '<option value="'.$i.'" selected>Prefiero no especificar</option>';
														break;
													}	
													}else{
														switch ($i) {
														case 1:
														echo '<option value="'.$i.'">Hombre</option>';
														break;
														case 2:
														echo '<option value="'.$i.'">Mujer</option>';
														break;
														case 3:
														echo '<option value="'.$i.'">Prefiero no especificar</option>';
														break;
													}	
													}
													}
													?>
                                                    </select>
													
                                                    <div class="input-group-addon">
                                                        <i class="fas fa-genderless"></i>
                                                    </div>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Usuario</div>
                                                    <input type="text" id="username" name="username" class="form-control" value="<?php echo $row["username"]; ?>">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Contraseña</div>
                                                    <input type="password" id="password" name="password" class="form-control"/>
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-asterisk"></i>
                                                    </div>
                                                </div>
                                            </div>
												<div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Zona</div>
                                                    <select name="zona" id="zona" class="form-control">
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
                                                    <select name="rol" id="rol" class="form-control">
                                                        <?php 
													for ($i = 1; $i <= 2; $i++) {
													if($i==$row['rol']){
													switch ($i) {
														case 1:
														echo '<option value="'.$i.'" selected>Administrador</option>';
														break;
														case 2:
														echo '<option value="'.$i.'" selected>Vendedor</option>';
														break;
														
													}	
													}else{
														switch ($i) {
														case 1:
														echo '<option value="'.$i.'">Administrador</option>';
														break;
														case 2:
														echo '<option value="'.$i.'">Vendedor</option>';
														break;
														
													}	
													}
													}
													?>
                                                    </select>
                                                    <div class="input-group-addon">
                                                        <i class="fas fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Email</div>
                                                    <input type="email" id="email" name="email" class="form-control" value="<?php echo $row["email"]; ?>">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Dirección</div>
                                                    <input type="text" id="direccion" name="direccion" class="form-control" value="<?php echo $row["direccion"]; ?>">
                                                    <div class="input-group-addon">
                                                        <i class="fas fa-home"></i>
                                                    </div>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Teléfono</div>
                                                    <input type="text" id="telefono" name="telefono" class="form-control" value="<?php echo $row["telefono"]; ?>">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-phone"></i>
                                                    </div>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Fecha de Nacimiento</div>
                                                    <input type="date" id="date" name="date" class="form-control" value="<?php echo $row["fechanacimiento"]; ?>"/>
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </div>
                                            </div>
											<div class="row">

              <div class="col" align="center"><div class="card">
			  
<iframe id="frameavatar"
    title="Inline Frame Example"
	height="100px"
	scrolling="yes"
	frameBorder="0"
    src="avatar.php?img=<?php echo $row["username"]; mysqli_close($conn);?>">
</iframe>
<br><button class="btn btn-outline-success" onclick="actualizar()">Actualizar usuario</button>
<button class="btn btn-danger" onclick="listartodos()">Cancelar</button></div>
            </div>
                                          
                                        
                                    </div>
                                </div>      
</div>