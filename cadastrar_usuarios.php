<?php
    require_once 'CLASSES/usuarios.php';
    $u = new Usuario(); 
?>

<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>Projeto Login</title>
    <link rel="stylesheet" href="CSS/estilo_index.css">
</head>
<body>
<div id="corpo-form-cadastro">
    <h1>Cadastrar</h1>
    <form method="POST">
        <input type="text" name="nome" placeholder="Nome Completo"> 
        <input type="text" name="telefone" placeholder="Telefone">
        <input type="email" name="email" placeholder="Usuário">
        <input type="password" name="senha" placeholder="Senha">
        <input type="password" name="confSenha" placeholder="Confirmar Senha">
        <input type="submit" value="CADASTRAR">
    </form>
</div>
<?php
if(isset($_POST['nome'])){
    $nome = addslashes($_POST['nome']);
    $telefone = addslashes($_POST['telefone']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $confirmarsenha = addslashes($_POST['confSenha']);
    if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarsenha)) {
        $u->conectar("cervejaria","localhost","root","");
        if($u->msgErro == ""){
            if($senha == $confirmarsenha){
                if($u->cadastrar($nome,$telefone,$email,$senha)){
                    ?>
                    <div id="msg-sucesso"> 
                    Cadastrado com sucesso! Acesse para entrar!
                    </div>
                    <?php
                }else{
                    ?>
                    <div class="msg-erro">
                    Email já cadastrado!
                    </div>
                    <?php
                }
            }else {
                ?>
                <div class="msg-erro">
                Senha e confirmar senha não correspondem!
                </div>
                <?php
            }
        }else {
            echo "Erro: ".$msgErro;
        }
    }else {
        ?>
        <div class="msg-erro">
        Preencha todos os campos
        </div>
        <?php
    }
}
?>
</body>
</html>