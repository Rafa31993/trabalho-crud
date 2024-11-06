<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $stmt = $pdo->prepare("INSERT INTO alunos (nome, email) VALUES (:nome, :email)");
    $stmt->execute(['nome' => $nome, 'email' => $email]);

    header('Location: listar_alunos.php');
}
?>


<!-- // Importa a classe Produto
require_once 'db.php';
$alunoCadastrado = false;

// Verifica se a requisição é do tipo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pega os dados enviados pelo formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    

    // Criar uma nova instância da classe Produto
    $aluno = new aluno();

    // Adicionar o novo produto no banco de dados
    $aluno->adicionarAluno($nome, $email);

    // Fechar a conexão
    $produto->fecharConexao();

    $produtoCadastrado = true;

    // Redirecionar para a página de listagem ou exibir uma mensagem de sucesso
    echo "aluno adicionado com sucesso!";
    // Ou redirecionar para outra página
    // header("Location: listar_produtos.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Alunos</title>
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body> --!>
   


    <div class="container mt-5">
        <h1 class="text-center mb-4">Adicionar Novo Aluno</h1>
        
        <!-- Formulário de Cadastro de Produto -->
        <h2 class="text-center mb-4">Adicionar Novo Aluno</h2>    
        <form action="" method="POST" class="border p-4 bg-light rounded">
            
            <!-- Nome do Produto -->
            <div class="mb-3">
                <label for="nome" class="form-label">Nome do Aluno:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome do aluno" required>
            </div>
            
            <!-- Descrição -->
            <<div class="mb-3">
                <label for="descricao" class="form-label">Email:</label>
                <textarea class="form-control" id="descricao" name="email" rows="3" placeholder="Digite o email do aluno" required></textarea>
            </div>
            <input type="submit" value="salvar">
        </form>
            
            <!-- Preço -->
            <!--<div class="mb-3">
                <label for="preco" class="form-label">Preço:</label>
                <input type="number" class="form-control" id="preco" name="preco" step="0.01" placeholder="Digite o preço" required>
            </div>
            
            <!-- Quantidade 
            <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade:</label>
                <input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="Digite a quantidade" required>
            </div> -->
            
            <!-- Botão para Adicionar Produto -->
            <!-- <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-block">Salvar</button>
            </div>
            
        </form>
    </div>

    <!-- <!-- Bootstrap JS (Opcional) -->
   <!--  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
