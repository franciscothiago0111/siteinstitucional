<?php
class contatoController extends controller{

	
	public function index(){
        $dados = array(
        	'aviso' => ''
        );

        if(isset($_POST['nome']) && !empty($_POST['nome'])){
        	$nome = addslashes($_POST['nome']);
        	$email = addslashes($_POST['email']);
        	$msg = addslashes($_POST['msg']);

        	$para = "suporte@b7web.com.br";
        	$assunto = "duvida do site";
        	$mensagem = "Nome: ".$nome."<br/>E-mail: ".$email."<br/>Mensagem ".$msg;


        	$cabecalho = 'From: suporte@b7web.com.br'. "\r\n".
        	'Reply-To: '.$email. "\r\n".
        	 'X-Mailer: PHP/'.phpversion();

        	 print_r($_POST);

        	 mail($para, $assunto, $mensagem, $cabecalho);

        	 $dados['aviso'] = "email enviado com sucesso!";

        }

        

		$this->loadTemplate('contato', $dados);
	}

		 


}

?>