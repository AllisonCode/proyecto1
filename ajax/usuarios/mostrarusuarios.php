
                            <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small" onclick="agregarform()">
                                            <i class="zmdi zmdi-plus"></i>Agregar usuario</button>
                                    </div>
<br>
<div class="card">
<div class="card-header">
                    <strong class="card-title">Lista de Usuarios</strong>
                  </div>
 <div class="table-responsive table-responsive-data2">
                                    <table id="tablausuarios" class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>Avatar</th>
												<th>Nombre</th>
                                                <th>Email</th>
                                                <th>Usuario</th>
												<th>Zona</th>
                                                <th>Rol</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
										
										
<?php 
include("../database.php");

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);
$data = '<tr class="tr-shadow">';
if ($result->num_rows > 0) {		
					while($row = $result->fetch_assoc()) {
					$data.='<td><img src="uploads/avatar_'.$row["username"].'.jpg?random='.rand(1,100).'" alt="'.$row["nombre"].' '.$row["apellido"].'" width="100px" height="100px" /></td>';
					$data.='<td>'.$row["nombre"].' '.$row["apellido"].'</td>';
                    $data.='<td><span class="block-email">'.$row["email"].'</span></td>';
                    $data.='<td>'.$row["username"].'</td>';
					$sql = "SELECT nombreZona FROM zonas WHERE idZona='".$row["idZona"]."'";
					$result2 = $conn->query($sql);
					while($row2 = $result2->fetch_assoc()) {
					$data.='<td>'.$row2["nombreZona"].'</td>';
					}
					if($row["rol"]==1){
					$data.='<td><span class="role member">Administrador</span></td>';
					}else{
						$data.='<td><span class="role user">Vendedor</span></td>';
					}
                     $data.='                           <td>
                                                    <div class="table-data-feature">
                                                        
                                                        <button class="item" title="Editar" name="editar" onclick="listarusuario('.$row["idUsuario"].')">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" title="Eliminar" name="deleteuser" onclick="eliminarusuario('.$row["idUsuario"].')">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                       
                                                    </div>
                                                </td>
                                            </tr>
											<tr class="spacer"></tr>';
					}
				}

				echo $data;
				mysqli_close($conn);
?>
                                        </tbody>
                                    </table>
									</div>
									</div>