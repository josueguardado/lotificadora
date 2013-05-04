                </div> <!-- fin content -->
            
        </div> <!-- fin body -->
 </div> <!-- fin wrapper -->
      <!-- /////////////////////////////////////////////////////////////////////// -->
                      <!-- jQuery modal dialog -->
                    <div id="dialogoUsuario" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3 id="myModalLabel">Configuraciones</h3>
                        </div>
                        <div class="modal-body">
                            <button onclick="salirapp();"  class="btn" data-dismiss="modal" aria-hidden="true">Salir del sistema</button>            
                            <button onclick="perfilusuario()" class="btn btn-success" data-dismiss="modal" aria-hidden="true">Ir a mi perfil</button>
                        </div>
                        <div class="modal-footer">
                            <p><?php echo  $this->config->item('NombreApp'); ?></p>
                        </div>
                    </div>  <!-- fin modal -->    
                    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <script>
        function salirapp(){
          window.location.href = '<?php echo site_url('usuario/logout'); ?>';
        };
        function perfilusuario(){
          window.location.href = '<?php echo site_url('usuario/perfil'); ?>';
        };
    </script>

    <script>

        $(document).on('ready',function(){


            // $('#registroUsuario').on('submit',function(e){
            //     e.preventDefault();
            //     var cargo=$(this).serialize();

            //     alert(cargo);
            // });
            


        });



    </script>
    
</body>
</html>