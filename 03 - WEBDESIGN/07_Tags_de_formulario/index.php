<!DOCTYPE html>
<html lang='pt-br'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='robots' content='index, follow'>
    <link rel='shortcut icon' href=''>
    <link rel='stylesheet' href=''>
    <title>Document</title>
</head>

<body>
    <!-- form:get Aparece na URL -->
    <main>
        <form action="" method="POST">
            <fieldset>
                <legend>
                    Meu formulário
                </legend>
            </fieldset>
            <!--Entrada de dados -->
            <!-- readonly: Deixa o input somente leitura -->
            <p>
                Insira seu nome: <input type:"text" name="nome" id="nome" placeholder="Insira o seu nome" required>
            </p>
            <p>
                Insira seu email: <input type="email" name="email" id="email" placeholder="Insira o seu email" required>
            </p>
            <p>
                Insira sua senha: <input type="password" name="senha" id="senha" placeholder="Insira sua senha"
                    required>
            </p>
            <p>
            <p>
                Insira seu sexo: <br>
                <input type="radio" name="sexo" required> Masculino
                <input type="radio" name="sexo" required> Feminino
            </p>
            <p>
                Informe suas tecnologias preferidas: <br>
                <input type="checkbox" name="HTML" id="HTML"> HTML 5
                <input type="checkbox" name="CSS" id="CSS"> CSS 3
                <input type="checkbox" name="JAVASCRIPT" id="JAVASCRIPT"> JAVASCRIPT
                <input type="checkbox" name="PHP" id="PHP"> PHP 8
            </p>
            <p>
                Insira o arquivo <input type="file" name="file" id="file">
            </p>
            <p>
                Informe uma URL <input type="url" name="url" id="url" required>
            </p>
            <p>
                Range <input type="range" name="range" id="range" max="10" min="1" step="1">
            </p>
            <p>
                Selecione um curso <br>
                <select name="Curso" id="curso">
                    <optgroup label="Grupo 1">
                        <option value="">Grupo 1.1</option>
                        <option value="">Grupo 1.2</option>
                    </optgroup>
                    <optgroup label="Grupo 2">
                        <option value="">Grupo 2.1</option>
                        <option value="">Grupo 2.2</option>
                    </optgroup>
                    <option value="">Opção 1</option>
                    <option value="">Opção 2</option>
                    <option value="">Opção 3</option>
                </select>
            </p>
            <p>
                Date: <input type="date" name="date" id="date" required>
            </p>
            <p>
                Time: <input type="time" name="time" id="time" required>
            </p>
            <p>
                <input type="datetime-local" name="" id="">
            </p>
            <p>
                <button type="submit">
                    Validar
                </button>
            </p>

        </form>
    </main>
    <script> </script>
</body>

</html>