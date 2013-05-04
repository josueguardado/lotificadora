
            
            <div class="content">
                
                <div class="page-header">
                    <div class="icon">
                        <span class="ico-arrow-right"></span>
                    </div>
                    <h1>Usuarios <small>LISTADO GENERAL</small></h1>
                </div> <!-- page header -->
                

                <div class="row-fluid">
                    <div class="span12">
                        <div class="block">
                            <div class="head dblue">
                                <div class="icon"><span class="ico-layout-9"></span></div>
                                <h2>Listado general de usuarios registrados</h2>
                            </div> <!-- fin head blue -->               
                                <div class="data-fluid">
                                    <table class="table fpTable lcnp" cellpadding="0" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th><input type="checkbox" class="checkall"/></th>
                                                <th width="20%">Nombre</th>
                                                <th>Email</th>
                                                <th width="20%">Cargo</th>
                                                <th width="20%">Activo</th>
                                                <th width="80" class="TAC">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php foreach ($usuarios as $fila):
                                            
                                                ?>
                                            <tr>
                                                <td><input type="checkbox" name="order[]" value="528"/></td>
                                                <td><a href="<?php $id=$fila->id;echo site_url("usuario/modificar/{$id}"); ?>"><?php echo $fila->nombre . ' ' .$fila->apellidos; ?></a></td>
                                                <td><?php echo $fila->email; ?></td>
                                                <td><span class="label"><?php echo $fila->nombreCargo; ?></span></td>
                                                <td><span class="label"><?php if($fila->activo){echo 'Si';}else{echo "No";}; ?></span></td>
                                                <td>
                                                    <a href="#" class="button green">
                                                        <div class="icon"><span class="ico-pencil"></span></div>
                                                    </a>
                                                    <a href="#" class="button red">
                                                        <div class="icon"><span class="ico-remove"></span></div>
                                                    </a>                                              
                                                </td>
                                            </tr>

                                            <?php endforeach; ?>

                                                                             
                                        </tbody>
                                    </table>                    
                                </div> <!-- data fluid -->
                        </div> <!-- block -->
                    </div> <!-- span 12 -->
                        
                </div> <!-- fin row fluid -->

                
          
        
   
