
            
            <div class="content">
                
                <div class="page-header">
                    <div class="icon">
                        <span class="ico-arrow-right"></span>
                    </div>
                    <h1>Usuario <small>PERFIL - REGISTRO/MODIFICACION</small></h1>
                </div> <!-- page header -->  
                <div class="row-fluid">
                    <div class="span12" id="spanreg">
                        <div class="span6">
                            <div class="area">
                                
                                <form class="form-horizontal" name="registroUsuario" id="registroUsuario" action="<?php 
                                    if(isset($usuario) && $usuario->id>0){
                                        $id=$usuario->id;
                                        echo site_url("usuario/registrar/{$id}"); 
                                    }else{
                                        echo site_url('usuario/registrar');
                                    }
                                    ?>" method="post">
                                    <div class="heading">
                                        <h4 class="form-heading">Datos personales</h4>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="nombre">Nombre</label>
                                        <div class="controls">
                                            <input type="text" id="nombre" name="nombre" placeholder="Nombre" value="<?php 

                                                if(isset($usuario) && $usuario->id>0 && !isset($key)){
                                                    echo $usuario->nombre;
                                                }else{
                                                    echo set_value('nombre');
                                                } ?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputFirst">Apellidos</label>
                                        <div class="controls">
                                            <input type="text" id="inputFirst" name="apellidos" placeholder="Apellidos" value="<?php 
                                            if(isset($usuario) && $usuario->id>0 && !isset($key)){
                                                    echo $usuario->apellidos;
                                                }else{
                                                    echo set_value('apellidos');
                                                } ?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputLast">Teléfono</label>
                                        <div class="controls">
                                            <input type="text" id="inputLast" name="telefono" maxlength="9" placeholder="0000-0000" value="<?php 
                                                if(isset($usuario) && $usuario->id>0 && !isset($key)){
                                                    echo $usuario->telefono;
                                                }else{
                                                    echo set_value('telefono');
                                                } ?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputEmail">Cargo</label>
                                        <div class="controls">
                                            <select name="cargo" id="" <?php if(isset($usuario) && $usuario->cargo>0){ ?>disabled="disabled" <?php } ?>>
                                                <option value="0" <?php echo set_select('cargo', '0', TRUE); ?> >Seleccione una opcion..</option>
                                                <option value="1" <?php if(isset($usuario) && $usuario->cargo==1){echo "selected";} ?> <?php echo set_select('cargo', '1'); ?> >Administrador</option>
                                                <option value="2" <?php if(isset($usuario) && $usuario->cargo==2){echo "selected";} ?> <?php echo set_select('cargo', '2'); ?> >Digitador</option>
                                                <option value="3" <?php if(isset($usuario) && $usuario->cargo==3){echo "selected";} ?> <?php echo set_select('cargo', '3'); ?> >Developer</option>

                                            </select>

                                            <br><br>
                                            <?php echo validation_errors(); ?>
                                        </div>

                                    </div>
                                  
                                    
                                 
                            </div>
                        </div> <!-- span 6 -->
                        <div class="span4">
                            <div class="area form-horizontal">
                                
                                    <div class="heading">
                                        <h4 class="form-heading">Datos de acceso</h4>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="Email" >Email</label>
                                        <div class="controls">
                                            <input type="text" id="Email" name="email" autocomplete="off" placeholder="hola@mail.com" value="<?php 
                                             if(isset($usuario) && $usuario->id>0 && !isset($key)){
                                                echo $usuario->email;

                                                }else{
                                                    echo set_value('email');
                                                } ?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputPassword">Constraseña</label>
                                        <div class="controls">
                                            <input type="password" id="inputPassword" autocomplete="off" name="clave" placeholder="Min. 8 caracteres" value="<?php echo set_value('clave'); ?>" <?php if(isset($usuario) && $usuario->cargo>0){ ?>disabled="disabled" <?php } ?>>
                                        </div>
                                    </div>
                                    
                                    <div class="control-group">
                                        <div class="controls">
                                            <button type="submit" class="btn btn-success btn-large"><?php if(isset($usuario) && $usuario->cargo>0){ ?>Actualizar <?php }else{echo "Registrar";} ?></button>
                                            <button type="reset" class="btn btn-large">Limpiar</button>


                                        </div>
                                    </div>  
                                </form> 
                            </div>
                        </div> <!-- span 4 -->
                    </div> <!-- span 12 -->
                        
                </div> <!-- fin row fluid -->

                
          
        
   
