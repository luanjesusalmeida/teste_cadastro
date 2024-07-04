<?php 

if(isset($_POST['submit'])){
    /*print_r($_POST['nome']);
    print_r('<br>');
    print_r($_POST['email']);
    print_r('<br>');
    print_r($_POST['telefone']);
    print_r('<br>');
    print_r($_POST['genero']);
    print_r('<br>');
    print_r($_POST['data_nasc']);
    print_r('<br>');
    print_r($_POST['cidade']);
    print_r('<br>');
    print_r($_POST['estado']);
    print_r('<br>');
    print_r($_POST['endereco']);
    print_r('<br>');
}*/


include_once('confgi.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$genero = $_POST['genero'];
$data_nasc = $_POST['data_nasc'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$endereco = $_POST['endereco'];

$result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,data_nasc,cidade,estado,endereco) values ('$nome','$email','$telefone','$genero','$data_nasc','$cidade','$estado','$endereco' )");

}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>

        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right ,rgb(20,147,220),rgb(17,54,71));
        }


        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
            color: white;

        }

        fieldset{
        border: 3px solid dodgerblue;
        }

        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
            
        }

        .inputbox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;

        }


        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }

        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px ;
            font-size: 12;
            color: dodgerblue;
        }

        #data_nasc{
            border: none;
            padding: 8px;
            border-radius:10px;
            outline: none;
            font-size: 15px;
        }

        #submit{
            background-image: linear-gradient(to right,rgb(0,92,197), rgb(90,20,220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;    
        }


        #submit:hover{
            background-image: linear-gradient(to right,rgb(0,80,172), rgb(80,19,195));
            }
    </style>
</head>
<body>
<!--formulario-->
    <div class="box">
        <form action="formulario.php" method="post">
          <fieldset>
            <legend> <b>Formulário de Cliente</b></legend>
<br>
            <!--nome-->
            
            <div class="inputbox">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                <label for="nome" class="labelInput">Nome completo</label>
            </div>
<br><br>
            <!--email-->
            <div class="inputbox">
                <input type="text" name="email" id="email" class="inputUser" required>
                <label for="email" class="labelInput"> Email</label>
            </div>
<br><br>
            <!--telefone-->
            <div class="inputbox">
                <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                <label for="telefone" class="labelInput">Telefone</label>
            </div>
<br>
            <!--sexo-->
            <p>Sexo</p>
            <input type="radio" id="feminino" name="genero" value="feminino">
            <label for="feminino">Feminino</label>
            <br>
            <input type="radio" id="masculino" name="genero" value="masculino">
            <label for="feminino">Maculino</label>
            <br>
            <input type="radio" id="outro" name="genero" value="outro">
            <label for="feminino">outro</label>
<br><br>
            <!--data--><!---->

                <label for="data_nasc"><b>Data de nascimento</b></label>
                <input type="date" name="data_nasc" id="data_nasc"  required>  
          
<br><br><br>
            <!--cidade-->
           
            <div class="inputbox">
                <input type="text" name="cidade" id="cidade" class="inputUser" required>
                <label for="cidade" class="labelInput">Cidade</label>
            </div>
<br><br>           
            <!--estado-->

            <div class="inputbox">
                <input type="text" name="estado" id="estado" class="inputUser" required>
                <label for="estado" class="labelInput">Estado</label>
            </div>
<br><br>
            <!--endereço-->

            <div class="inputbox">
                <input type="text" name="endereco" id="endereco" class="inputUser" required>
                <label for="endereco" class="labelInput">Endereço</label>
            </div>
<br><br>
            <input type="submit" name="submit" id="submit">




          </fieldset>  
        </form>
    </div>


</body> 
</html>