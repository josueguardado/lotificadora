  
    <div id="loader"><img src="<?php echo base_url();?>static/img/loader.gif"/></div>
       
    <div class="login">

        <div class="page-header">
            <div class="icon">
                <span class="ico-arrow-right"></span>
            </div>
            <h1>Autenticación <small><?php echo  $this->config->item('NombreApp'); ?></small></h1>
        </div>  <!-- fin page header -->      
        
        <div class="row-fluid">
            <div class="span12">
                <?php echo validation_errors(); ?>
            </div>
            <?php echo form_open('usuario'); ?>

                <div class="row-form">
                    <div class="span12">
                        <input type="text" name="email" placeholder="Usuario"/>
                    </div>
                </div>
                <div class="row-form">
                    <div class="span12">
                        <input type="password" name="clave" placeholder="Clave"/>
                    </div>            
                </div>
               <!--  <div class="row-form">
                    <div class="span12">
                        <input type="checkbox"/> Keep me signed in
                    </div>
                </div> -->
                <div class="row-form">
                    <div class="span12">
                        <button class="btn">Ingresar <span class="icon-arrow-next icon-white"></span></button>
                    </div>                
                </div>

            <?php echo form_close(); ?>
        </div> <!-- fin row fluid -->
    </div>  <!-- fin login -->
    
</body>
</html>
