<?php
	require_once("connect.php");
	if (!isset($_SESSION["usu_id"]) || empty($_SESSION["usu_id"]) || 
		!isset($_SESSION['usu_nivel']) || empty($_SESSION["usu_nivel"]) ||
		$_SESSION['usu_nivel'] == "3" || $_SESSION["usu_id"] == "0") die('29001 - Você não tem permissão para acessar essa página!');

	if(isset($_GET['act']) && !empty($_GET['act'])) {
		switch ($_GET['act']) {
			case 'showupd':
				try {
					if(!isset($_GET['id']) || empty($_GET['id'])) {
						echo '{"succeed": false, "errno": 27004, "title": "Parâmetro não encontrado!", "erro": "Parâmetro do ID do evento não enviado! Favor contatar o administrador mostrando o erro!"}';
						exit();
					}

					$id = $_GET['id']; // $_SESSION["fake_id"];

			    	$qry_noticia = $conn->query("SELECT id_noticia, titulo,descricao, ativo, data_publicacao FROM tbl_noticias WHERE id_noticia = $id") or trigger_error("27005 - " . $conn->error);

					if ($qry_noticia && $qry_noticia->num_rows > 0) {
						$dados = "";
		    			while($post = $qry_noticia->fetch_object()) {
		    				$dados = '{"id" : "' . $post->id_noticia . '", "nome" : "' . $post->titulo . '", "descricao" : "'. $post->descricao .'"  ,"ativo" : "' . $post->ativo . '"}';
		    			}

						echo '{"succeed": true, "dados": ' . $dados . '}';
						exit();
		    		}
		    		else {
		    			throw new Exception('Nenhum evento encontrado com o ID ' . $id . "!");
		    		}
				} catch(Exception $e) {
					echo '{"succeed": false, "errno": 24005, "title": "Erro ao carregar os dados!", "erro": "Ocorreu um erro ao carregar os dados: ' . $e->getMessage() . '"}';
					exit();
				}
		        break;

			case 'add':
				try {
					$conn->autocommit(FALSE);					
					if(isset($_POST) && !empty($_POST) && $_POST["nome"]) {
						$isValid = true;
						$errMsg = "";

						if(!isset($_POST["nome"]) || empty($_POST["nome"])) {
							$errMsg .= "Titulo do Post";
							$isValid = false;
						}
						

						if(!isset($_POST["descricao"]) || empty($_POST["descricao"])) {
							$errMsg .= "Descrição do post";
							$isValid = false;
						}						

						if(!$isValid) {
							echo '{"succeed": false, "errno": 27006, "title": "Erro em um ou mais campos do formulário!", "erro": "Ocorreram erros nos seguintes campos do formulário: <b>' . $errMsg . '</b>"}';
							$conn->rollback();
							exit();
						}
						else {

							if(isset($_FILES['img'])) {
								//Pegando extensão do arquivo								
								$ext = strtolower(substr($_FILES['img']['name'],-4)); 
								//Definindo um novo nome para o arquivo
							    $new_name = date("Y.m.d-H.i.s") . $ext; 
							    //Diretório para uploads 
							    $dir = '../../img/noticias/'; 
							    //Fazer upload do arquivo
							    move_uploaded_file($_FILES['img']['tmp_name'], $dir.$new_name); 
							    //Permissão na pasta (Linux)
							    chmod("../../img/noticias/" . $new_name, 644);
							}

							$imagem = $_FILES['img']['name'];							
							$nome = $_POST["nome"];
							$descricao= $_POST["descricao"];
							$ativo = (isset($_POST["ativo"]) && $_POST["ativo"] == "1" ? "1" : "0");
							$data_postagem = date('Y-m-d');

							$qry_noticia = "INSERT INTO tbl_noticias (titulo, img ,descricao ,ativo, data_publicacao) VALUES ('" . $nome . "', '" . $new_name . "' ,'" . $descricao . "', '". $ativo ."' ,'".$data_postagem."')";

							if ($conn->query($qry_noticia) === TRUE) {
								$conn->commit();
								echo '{"succeed": true}';
							} else {
						        throw new Exception("Erro ao inserir o slide: " . $qry_noticia . "<br>" . $conn->error);
							}							
						}
					}
					else {
						echo '{"succeed": false, "errno": 27008, "title": "Erro ao enviar o formulário!", "erro": "Ocorreu um erro ao tentar enviar seu formulário, favor recarregar a página e tentar novamente!"}';
						$conn->rollback();
						exit();
					}
				} catch(Exception $e) {
					$conn->rollback();

					echo '{"succeed": false, "errno": 27007, "title": "Erro ao salvar os dados!", "erro": "Ocorreu um erro ao salvar os dados: ' . $e->getMessage() . '"}';
				}
		        break;
	        case 'edit':
				try {
					$conn->autocommit(FALSE);

					if(!isset($_GET['id']) || empty($_GET['id'])) {
						echo '{"succeed": false, "errno": 27014, "title": "Parâmetro não encontrado!", "erro": "Parâmetro do ID do evento não enviado! Favor contatar o administrador mostrando o erro!"}';
						exit();
					}	

					$id = $_GET['id'];			

					if(isset($_POST) && !empty($_POST) && $_POST["nome"]) {
						$isValid = true;
						$errMsg = "";

						if(!isset($_POST["nome"]) || empty($_POST["nome"])) {
							$errMsg .= "Titulo do Post";
							$isValid = false;
						}					

						if(!isset($_POST["descricao"]) || empty($_POST["descricao"])) {
							$errMsg .= "Descrição do post";
							$isValid = false;
						}

						if(!$isValid) {
							echo '{"succeed": false, "errno": 27010, "title": "Erro em um ou mais campos do formulário!", "erro": "Ocorreram erros nos seguintes campos do formulário: <b>' . $errMsg . '</b>"}';
							$conn->rollback();
							exit();
						}
						else {		

							if(isset($_FILES['img'])) {
								//Pegando extensão do arquivo								
								$ext = strtolower(substr($_FILES['img']['name'],-4)); 
								//Definindo um novo nome para o arquivo
							    $new_name = date("Y.m.d-H.i.s") . $ext; 
							    //Diretório para uploads 
							    $dir = '../../img/noticias/'; 
							    //Fazer upload do arquivo
							    move_uploaded_file($_FILES['img']['tmp_name'], $dir.$new_name); 
							    //Permissão na pasta (Linux)
							    chmod("../../img/noticias/" . $new_name, 644);							   
							}

							$imagem = $_FILES['img']['name'];							
							$nome = $_POST["nome"];
							$descricao= $_POST["descricao"];
							$ativo = (isset($_POST["ativo"]) && $_POST["ativo"] == "1" ? "1" : "0");
							$data_postagem = date('d/m/y');
							

							$qry_noticia = "UPDATE tbl_noticias 
											  SET titulo = '" . $nome . "',
											  	  img = '" . $new_name . "',
											      descricao = '" . $descricao . "',
											      ativo = " . $ativo . ",											      
											      data_publicacao = '" . $data_postagem . "'
											WHERE id_noticia = $id";
							if ($conn->query($qry_noticia) === TRUE) {
								$conn->commit();
								echo '{"succeed": true}';
							} else {
						        throw new Exception("Erro ao alterar o evento: " . $qry_noticia . "<br>" . $conn->error);
							}
						}
					}
					else {
						echo '{"succeed": false, "errno": 27012, "title": "Erro ao enviar o formulário!", "erro": "Ocorreu um erro ao tentar enviar seu formulário, favor recarregar a página e tentar novamente!"}';
						$conn->rollback();
						exit();
					}
				} catch(Exception $e) {
					$conn->rollback();

					echo '{"succeed": false, "errno": 27013, "title": "Erro ao salvar os dados!", "erro": "Ocorreu um erro ao salvar os dados: ' . $e->getMessage() . '"}';
				}
		        break;
		    case 'del':
			try {
				$conn->autocommit(FALSE);

				if(!isset($_GET['id']) || empty($_GET['id'])) {
					echo '{"succeed": false, "errno": 27020, "title": "Parâmetro não encontrado!", "erro": "Parâmetro do ID do evento não enviado! Favor contatar o administrador mostrando o erro!"}';
					exit();
				}

				$id = $_GET['id']; // $_SESSION["fake_id"];

				$qrydel_noticia = "DELETE FROM tbl_noticias WHERE id_noticia = $id";
				if ($conn->query($qrydel_noticia) === TRUE) {
				
					$qrydelnoticia = "DELETE FROM tbl_noticias WHERE id_noticia = $id";
					if ($conn->query($qrydelnoticia) === TRUE) {
						$conn->commit();
						echo '{"succeed": true}';
					} else {
				        throw new Exception("Erro ao remover o evento: " . $qrydelnoticia . "<br>" . $conn->error);
					}
				} else {
			        throw new Exception("Erro ao remover os times do evento: " . $qrydel_noticia . "<br>" . $conn->error);
				}
			} catch(Exception $e) {
				$conn->rollback();

				echo '{"succeed": false, "errno": 27021, "title": "Erro ao salvar os dados!", "erro": "Ocorreu um erro ao salvar os dados: ' . $e->getMessage() . '"}';
			}
	        break;
		}
	}
?>