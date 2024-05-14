function calcularValorTotal(input) {
    const row = input.parentNode.parentNode; // Obtém a linha da tabela
    const valorVenda = parseFloat(row.cells[2].innerText.replace('.', '').replace(',', '.')); // Obtém o valor de venda da terceira coluna
    const quantidadeMaxima = parseInt(input.max); // Obtém a quantidade máxima permitida para este produto
    let quantidade = parseInt(input.value); // Obtém a quantidade inserida pelo usuário

    // Verifica se a quantidade inserida é maior que a quantidade máxima permitida
    if (quantidade > quantidadeMaxima) {
        quantidade = quantidadeMaxima; // Define a quantidade como a quantidade máxima permitida
        input.value = quantidade; // Atualiza o valor do input para refletir a quantidade máxima
    }

    const valorTotal = valorVenda * quantidade; // Calcula o valor total com base na quantidade selecionada
    row.cells[4].innerText = valorTotal.toFixed(2); // Define o valor total na quinta coluna formatado com duas casas decimais
}