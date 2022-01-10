<?php

if($_SESSION["rol"] != "Paciente"){

	echo '<script>

	window.location = "inicio";
	</script>';

	return;

}

?>

<div class="content-wrapper">

	<section class="content">
		
		<div class="box">
			
			<div class="box-body">

                <?php

				/* $editarPerfil = new SecretariasC();
				$editarPerfil -> EditarPerfilSecretariaC();
				$editarPerfil -> ActualizarPerfilSecretariaC(); */


                /* $editarPerfil = new PacientesC();
				$editarPerfil -> EditarPerfilPacienteC();
				$editarPerfil -> ActualizarPerfilPacienteC(); */
				?>

                <form method="post" enctype="multipart/form-data">

                    <div class="row">

                        <div class="col-md-6 col-xs-12">

                        <h2>Nombre:</h2>
                        <input type="text" class="input-lg" name="nombrePerfil" value="">


                        <h2>Apellido:</h2>
                        <input type="text" class="input-lg" name="apellidoPerfil" value="">
                        <input type="hidden" class="input-lg" name="idPerfil" value="">

                        <h2>Usuario:</h2>
                        <input type="text" class="input-lg" name="usuarioPerfil" value="">

                        <h2>Clave:</h2>
                        <input type="text" class="input-lg" name="clavePerfil" value="">

                        <h2>Documento:</h2>
                        <input type="text" class="input-lg" name="documentoPerfil" value="">                      

                        </div>

                        <div class="col-md-6 col-xs-12">

                            <br><br>

                            <input type="file" name="imgPerfil">


                        </div>

                    </div>

                </form>

							

			</div>

		</div>

	</section>

</div>