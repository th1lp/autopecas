
function venderProduto(button) {
    console.log('Botão "Vender" clicado!');
    const row = button.parentNode.parentNode; // Obtém a linha da tabela
    const codigo = row.cells[0].innerText; // Obtém o código do produto
    const quantidade = parseInt(row.querySelector('.form-control').value); // Obtém a quantidade a ser vendida

    // Aqui você deve implementar a lógica para registrar a venda no banco de dados
    // Por exemplo, você pode usar AJAX para enviar uma requisição ao servidor e atualizar o estoque

    // Exemplo de chamada AJAX para enviar os dados de venda para o servidor
    // Você precisa ajustar isso de acordo com sua estrutura de backend (por exemplo, usando PHP para atualizar o banco de dados)
    fetch('../scripts/salvar_vendas.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ codigo: codigo, quantidade: quantidade }),
    })
        .then(response => {
            if (response.ok) {
                // Atualizar a interface ou mostrar uma mensagem de sucesso
                console.log('Venda realizada com sucesso!');
            } else {
                console.error('Erro ao registrar venda.');
            }
        })
        .catch(error => {
            console.error('Erro ao conectar com o servidor:', error);
        });
}
