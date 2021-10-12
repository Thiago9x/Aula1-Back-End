<?php
    if(isset($_GET["btnSave"])){
//$_GET permite regatar um dado enviado pelo metodo get
    $nome = $_GET["txtNome"];
    $uf = $_GET["sltUf"];
    $sex = $_GET["rdoSex"];
    $langPort=null;
    $langEng=null;
    $langGer=null;
    $langSpan=null;
//    isset() verifica se o objeto ou variavel existe ou foi criado na programação (retorna verdadeiro ou falso)

//tratamento de erro para quando o checkbox não for selecionado
    if(isset($_GET["chkPort"])){
    $langPort = $_GET["chkPort"];
    }
    if(isset($_GET["chkEng"])){
    $langEng = $_GET["chkEng"];
    }
    if(isset($_GET["chkGer"])){
    $langGer = $_GET["chkGer"];
    }
    if(isset($_GET["chkSpan"])){
    $langSpan = $_GET["chkSpan"];
    }
    $password = $_GET["txtPwd"];
    $note = $_GET["txtNote"];
    
    echo("The name entered was: <span class='variaveis'>" . $nome . "</span>");
    echo("<br>The Uf choosed was: <span class='variaveis'>" . $uf . "</span>");
    echo("<br>The sex choosed was: <span class='variaveis'>" . $sex . "</span>");
    echo("<br>The language choosed was: <span class='variaveis'>" . $langPort . " " . $langEng . " " . $langGer  . " " . $langSpan . "</span>");
    echo("<br>The password entered was: <span class='variaveis'>" . $password . "</span>");
    echo("<br>The note enteres was: <span class='variaveis'>" . $note . "</span>");

    
    }
?>


<!DOCTYPE html>

<html lang="pt BR">
    <head>
        <title>
            Aula Fromularios
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet"
              type="text/css"
              href="css/style.css">              
    </head>
    <body>
        
        <div id="formContatos">
            <h1>Register</h1>
<!--
                Method = "get" = Enviar dados pela URL
                method = "post" = enviar dados por variaveis Iterno do Servidor
-->
            
<!--            
                action = "" = 
-->
            <form name="frmContatos" action="" method="get">
<!--                
                name = id/class
                maxlenght = maximo de caracteris que fica dentro da caixa de texto    
-->
        <div>
            <lable>
                  Name :
            </lable> 
<!--            placeholder="" = Lembrete ao Usuario-->
                <input type="text" name="txtNome" size="50" maxlength="51" value = "" placeholder="Write your name">
        </div>
        <div>
            <lable>
                UF : 
            </lable>
                <select name="sltUf">
                    <option value="" selected>Choose an iten</option>
                    <option value="OH"> Ohio </option>
                    <option value="CA"> California </option>
                    <option value="FL"> Florida </option>
                    <option value="NY"> New York </option>
                </select> 
        </div>
        <div>
            <label> 
                Sex : 
            </label> 
            <input type="radio" name="rdoSex" value="F" > Female
            <input type="radio" name="rdoSex" value="M"> Masculine
            <input type="radio" name="rdoSex" value="O" checked> Others
        </div>
        <div>
            <label>
                Languages : 
            </label>
            <input type="checkbox" name="chkPort" value="pt-BR">Portuguese
            <input type="checkbox" name="chkEng" value="Eng">English
            <input type="checkbox" name="chkGer" value="Ger">German
            <input type="checkbox" name="chkSpan" value="Span">Spanish
        </div>
        <div>
            <label>
                Password : 
            </label>
            <input type="password" name="txtPwd" size="20" maxlength="20">
        </div>
        <div>
            <lable>
                Note : 
            </lable>
            <textarea name="txtNote" cols="50" rows="4" maxlength="500" placeholder="Max. 500 letters"></textarea>
        </div>
        <input type="reset" name="btnReset" value="Reset">
        <input type="submit" name="btnSave" value="Save">
<!--                button sera utilizado exclusivamente pelo JS
                    submit sera utilizado ao conjunto com o form, para retirar os dados do formulario
                    reset permite limpar as caixas do formulario sem atualiza-las-->
            </form>
        </div>
    </body>
</html>