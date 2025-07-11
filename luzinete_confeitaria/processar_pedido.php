<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $nome = htmlspecialchars($_POST['nome']);
    $telefone = htmlspecialchars($_POST['telefone']);
    $pedido = htmlspecialchars($_POST['pedido']);
    $observacoes = htmlspecialchars($_POST['observacoes']);

    // Monta a mensagem para o WhatsApp
    $mensagem = "Olá, meu nome é *{$nome}* e gostaria de fazer o seguinte pedido:\n\n";
    $mensagem .= "*Pedido:* {$pedido}\n";

    if (!empty($observacoes)) {
        $mensagem .= "*Observações:* {$observacoes}\n";
    }

    $mensagem .= "\nMeu contato para dúvidas: {$telefone}";

    // Codifica a mensagem para URL
    $mensagem_codificada = urlencode($mensagem);

    // Seu número de WhatsApp (com código do país, sem espaços ou traços)
    $seu_numero_whatsapp = "SEU_NUMERO_WHATSAPP"; // <-- MUDE AQUI!

    // Cria o link do WhatsApp
    $whatsapp_url = "https://api.whatsapp.com/send?phone={$seu_numero_whatsapp}&text={$mensagem_codificada}";

    // Redireciona o usuário para o WhatsApp
    header("Location: {$whatsapp_url}");
    exit();
} else {
    // Se alguém tentar acessar processar_pedido.php diretamente, redireciona para a página inicial
    header("Location: index.php");
    exit();
}

?>