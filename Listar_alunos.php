<?php
// Incluir a classe Produto
//include 'db.php';

// $query = $pdo -> query("SELECT * FROM aluno");
//$alunos = $query -> fetchALL(PDO::FETCH_ASSOC);

require_once 'db.php';

$aluno = new Aluno();

$alunos = $aluno->ListarAlunos();

?>
    <h2>Lista de Alunos</h2>

    <a href="adicioar_aluno.php">Adicionar Novo Aluno</a>
        <table border="1">
            
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>                    
                </tr>
           
                <?php foreach ($alunos as $aluno): ?>
                    <tr>
                        <td><?php echo $aluno['id']; ?></td>
                        <td><?php echo $aluno['nome']; ?></td>
                        <td><?php echo $aluno['email']; ?></td>
                        <td>
                            <a href="editar_aluno.php?id=<?php echo $aluno['id']; ?>">Editar</a>
                            <a href="excluir_aluno.php?id=<?php echo $aluno['id']; ?>">Excluir</a>
                    </tr>
                <?php endforeach; ?>
            
        </table>
