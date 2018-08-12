<?php include 'header.php'?>

<br>
<br>
<div id="cargando">
<div class="loader">Cargando...</div></div>


<div id="editar" style="display: none;"></div>

<div class="card">
                                    <div class="card-header">Actualizar Usuario</div>
                                    <div class="card-body card-block">

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    Nombre(s):<input type="text" id="nombre" name="nombre" placeholder="Nombre(s)" class="form-control" value="Juancito">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                    <input type="email" id="email" name="email" placeholder="Email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-asterisk"></i>
                                                    </div>
                                                    <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-success btn-sm">Submit</button>
                                            </div>
                                    </div>
                                </div>


<body onload="listartodos()">
 <div id="listar">
 </div>
</body>

<?php include 'footer.php' ?>