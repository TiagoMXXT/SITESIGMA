<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

if(isset($_POST['txtNome'])){
    
    $nome = $_POST['txtNome'];
    $email = $_POST['txtEmail'];
    $telefone = $_POST['txtphone'];
    $mensagem = $_POST['txtmensagem'];

    echo "$nome <br> $email <br> $telefone <br> $mensagem";

}
?>

<h1>Contato</h1>

<form action="./contato.php" method="post">
<!---------------------------------------------------------->
    <ul>
        <li>
            <label for="txtNome">NOME COMPLETO.</label>
            <input type="text" name="txtNome" id="txtNome" > 
        </li>
    </ul>
<!---------------------------------------------------------->
    <ul>
        <li>
            <label for="txtEmail">Email.</label>
            <input type="text" name="txtEmail" id="txtEmail">
        </li>
    </ul>
<!---------------------------------------------------------->
    <ul>
        <li>
            <label for="txtphone">Telefone.</label>
            <input type="text" name="txtphone" id="txtphone">
        </li>
    </ul>
<!---------------------------------------------------------->
    <ul>
        <li>    
            <label for="txtmensagem">Mensagem</label>
            <input type="text" name="txtmensagem" id="txtmensagem">
        </li>
    </ul>
<!---------------------------------------------------------->

    <input type="submit" value="CADASTRAR"> <!--cadastrar-->
    
<!---------------------------------------------------------->
  
</form>



<?php
// include do footer
include_once './includes/_footer.php';
?>