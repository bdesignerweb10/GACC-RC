<?php
	require_once('header.php');
	require_once("acts/connect.php");
	$id = $_GET['id']; // $_SESSION["fake_id"];

	$qrydel_foto = "DELETE FROM tbl_galeria_eventos WHERE id_galeria = $id";
		if ($conn->query($qrydel_foto) === TRUE) {
		
			$qrydelfoto = "DELETE FROM tbl_galeria_eventos WHERE id_galeria = $id";
				if ($conn->query($qrydelfoto) === TRUE) {
					$conn->commit();
						echo '<div class="alert alert-danger" role="alert">
								<p class="lead">Foto Removida!</p>
									<div class="col-sm-2">
										<a href="ger-eventos.php" class="btn btn-form btn-primary mb-2">Voltar</a>
									</div>
								</div>';
				} else {
			        throw new Exception("Erro ao remover o evento: " . $qrydelfoto . "<br>" . $conn->error);
				}
			} else {
		        throw new Exception("Erro ao remover os times do evento: " . $qrydel_foto . "<br>" . $conn->error);
		}
?>