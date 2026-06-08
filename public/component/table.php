<hr>

<h4> Usuários Cadastrados</h4>

<table border="1" cellpadding="2">

    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Senha</th>
        <th>Editar</th>
        <th>Excluir</th>
    </tr>

    <?php
    
    $sqlUsuarios = "SELECT * FROM usuarios";

    $resultadoUsuarios = $conn -> query($sqlUsuarios);

    while($linha = $resultadoUsuarios->fetch_assoc()){
        echo "<tr>
        
            <td>" . $linha["id"] . "</td>
            <td>" . $linha["usuario"] . "</td>
            <td>" . $linha["senha"] . "</td>
            <td> <a href='editar.php?id=". $linha["id"] ."'>Editar</td>
            <td> <a href='excluir.php?id=". $linha["id"] ."'
             onclick='return confirm(\"Deseja realmente excluir este usuário?\")'>Excluir</td>
        
        </tr>";
    }
    
    ?>

</table>