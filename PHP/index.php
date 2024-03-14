<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário Moderno</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
            background-color: #f8f9fa;
            text-align: center;
            align-items: center;
            line-height: 25px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            }
            
            .form-container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            }

            .form-container h2 {
            text-align: center;
            font-size: 45px;
            }
            
            .form-control {
            border-radius: 5px;
            }
            
            .form-check {
            text-align: center;
            align-items: center; 
            }
            
            .form-control:focus {
            box-shadow: none;
            border-color: #80bdff;
            }
            
            .btn-custom {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            }
            
            .btn-custom:hover {
            background-color: #0056b3;
            border-color: #0056b3;

            }
        </style>
    </head>
    
    <body>
        <div class="container mt-5">
            <div class="form-container">
                <h2 class="mb-4">Formulário</h2>
                <form method="GIT" action="styles.php" class="form-group">
                    <B>Preencha os Campos de Cadastro Abaixo</B><br><br>

                    <label for="name"><b>Nome:</b></label>
                    <input type="test" name="name" class="form-control"><br>

                    <label for="rg"><b>RG:</b></label>
                    <input type="text" name="rg" class="form-control"><br>
                    
                    <label for="cpf"><b>CPF:</b></label>
                    <input type="text" name="cpf" class="form-control"><br>
                    
                    <label for="endereco"><b>Endereço:</b></label>
                    <input type="text" name="endereco" class="form-control"><br>
                    
                    <label for="idade"><b>Idade:</b></label>
                    <input type="number" name="idade" class="form-control"><br>

                    <label for="telefone"><b>Telefone:</b></label>
                    <input type="number" name="telefone" class="form-control"><br>
                    
                    <label for="dataNascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="dataNascimento" class="form-control"><br>
                    
                    <label for="cor"><b>Cor Favorita:</b></label>
                    <input type="color" name="cor" class="form-control"><br>


                    <fieldset class="form-check form-check-inline">
                        <legend><b>Qual seu Sexo?</b></legend>

                        <input type="checkbox" name="sexo" value="Masculino" class="form-check-input" checked>
                        <label for="estacao" class="form-check-label">Masculino</label><br>

                        <input type="checkbox" name="sexo" value="Feminino" class="form-check-input">
                        <label for="estacao" class="form-check-label">Feminino</label><br>

                        <input type="checkbox" name="sexo" value="Outro" class="form-check-input">
                        <label for="estacao" class="form-check-label">Outro</label><br>
                    </fieldset>


                    <fieldset class="form-check form-check-inline">
                        <legend><b>Preferência de Estação do Ano:</b></legend>

                        <input type="checkbox" name="estacao" value="Verão" class="form-check-input" checked>
                        <label for="estacao" class="form-check-label">Verão</label><br>

                        <input type="checkbox" name="estacao" value="Outono" class="form-check-input">
                        <label for="estacao" class="form-check-label">Outono</label><br>

                        <input type="checkbox" name="estacao" value="Inverno" class="form-check-input">
                        <label for="estacao" class="form-check-label">Inverno</label><br>

                        <input type="checkbox" name="estacao" value="Priamavera" class="form-check-input">
                        <label for="estacao" class="form-check-label">Primavera</label><br>
                    </fieldset>


                    <fieldset class="form-check form-check-inline">
                        <legend><b>Qual Sistema Operacional está Ulizando?</b></legend>

                        <input type="checkbox" name="sistema" value="Windows" class="form-check-input" checked>
                        <label for="estacao" class="form-check-label">Windows</label><br>

                        <input type="checkbox" name="sistema" value="Linux" class="form-check-input">
                        <label for="estacao" class="form-check-label">Linux</label><br>

                        <input type="checkbox" name="sistema" value="MAC" class="form-check-input">
                        <label for="estacao" class="form-check-label">MAC</label><br>
                    </fieldset>

                    <fieldset class="form-check form-check-inline">
                        <legend><b>Qual seu Console Favorito?</b></legend>

                        <input type="checkbox" name="console" value="XBOX" class="form-check-input" checked>
                        <label for="estacao" class="form-check-label">XBOX</label><br>

                        <input type="checkbox" name="console" value="Playstation" class="form-check-input">
                        <label for="estacao" class="form-check-label">Playstation</label><br>

                        <input type="checkbox" name="console" value="Nintendo" class="form-check-input">
                        <label for="estacao" class="form-check-label">Nintendo</label><br>
                    </fieldset>

                    <input type="submit" class="btn btn-custom">
                </form>
            </div>
        </div>
    </body>
</html>
