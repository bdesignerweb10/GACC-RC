<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Consultoria e treinamentos" />  

    <title>GACC - Rio Claro / SP</title>
    <link rel="stylesheet" href="../css/style.css">    
    <link rel="stylesheet" href="../css/lightbox.min.css">  
    <script src="../js/main.js"></script> 
</head>
<?php   

	if (isset($_POST['empresa']) && !empty($_POST['empresa'])) {
		$empresa = $_POST['empresa'];
	}

    if (isset($_POST['responsavel']) && !empty($_POST['responsavel'])) {
        $responsavel = $_POST['responsavel'];
    }

	if (isset($_POST['email']) && !empty($_POST['email'])) {
		$email = $_POST['email'];
	}

    if (isset($_POST['telefone']) && !empty($_POST['telefone'])) {
        $telefone = $_POST['telefone'];
    }

	if (isset($_POST['celular']) && !empty($_POST['celular'])) {
        $celular = $_POST['celular'];
    }
	
	
    $serverEmail = 'contato@gacc-rc.org.br';
    $serverSenha = 'gacc1997';
    $serverNome = 'Empresa Parceira | GACC Rio Claro';
    $assunto = 'Projeto Empresa Parceira';

    $enviaNome = 'GACC Rio Claro';
    $enviaEmail = 'contato@gacc-rc.org.br';

    $msg = 'Mensagem enviada do site GACC Rio Claro'.'<br />';
    $msg .= '________________________________________________________'.'<br /><br />';
    $msg .= 'Empresa: '.$empresa.'<br />';
    $msg .= 'Responsável: '.$responsavel.'<br />';
    $msg .= 'E-mail: '.$email.'<br />';
    $msg .= 'Telefone: '.$telefone.'<br />';
    $msg .= 'Celular: '.$celular.'<br />';   
    $msg .= '________________________________________________________'.'<br /><br />';
    

    require_once('../lib/PHPMailer/PHPMailerAutoload.php');

    $mail = new PHPMailer();

    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Charset = 'utf8_decode()';
    $mail->Host = 'mail.'.substr(strstr($serverEmail, '@'), 1);
    $mail->Port = '587';
    $mail->Username = $serverEmail;
    $mail->Password = $serverSenha;
    $mail->From = $serverEmail;
    $mail->FromName = utf8_decode($serverNome);
    $mail->IsHTML(true);
    $mail->Subject = utf8_decode($assunto);
    $mail->Body = utf8_decode($msg);

    $mail->AddAddress($enviaEmail, utf8_decode($enviaNome));    
?>

<?php 
    if (!$mail->Send()) { ?>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Ops! Erro ao enviar mensagem</h4>
                    </div>
                    <div class="modal-body">                                
                        Ocorreu um erro ao enviar sua mensagem, por favor tente novamente mais tarde.
                    </div>
                    <div class="modal-footer">
                        <a href="../empresa-parceira.php"><button type="button" class="btn btn-danger">Fechar</button></a>
                    </div>
                </div>
            </div>
        </div>          
        <script>
            $(document).ready(function () {
                $('#myModal').modal('show');
            });
        </script>    
    <?php  } else { ?>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Mensagem enviada com Sucesso!</h4>
                    </div>
                    <div class="modal-body">
                        Obrigado por entrar em contato conosco, em breve retornaremos.
                    </div>
                    <div class="modal-footer">                            
                        <a href="../contato.php"><button type="button" class="btn btn-danger">Fechar</button></a>
                    </div>
                </div>
            </div>
        </div>              
        <script>
            $(document).ready(function () {
                $('#myModal').modal('show');
            });
        </script>   
    <?php } ?>
</html>   
