// Função para inserir números e operadores no visor da calculadora
function insert(n1) {
    // Obtém o elemento de resultado
    var resultado = document.getElementById('resultado');
    
    // Obtém o conteúdo atual
    var n2 = resultado.textContent;
    
    // Concatena o novo valor (n1) ao conteúdo atual
    resultado.textContent = n2 + n1;
}

// Função para limpar o visor da calculadora
function clean() {
    // Obtém o elemento de resultado e redefine seu conteúdo para vazio
    document.getElementById('resultado').textContent = "";
}

// Função para retroceder (apagar o último caractere) no visor
function back() {
    // Obtém o elemento de resultado
    var resultado = document.getElementById('resultado');
    
    // Obtém o conteúdo atual
    var conteudo = resultado.textContent;
    
    // Remove o último caractere usando substring e atualiza a calculadora
    resultado.textContent = conteudo.substring(0, conteudo.length - 1);
}

// Função para calcular e exibir o resultado
function calcular() {
    // Obtém o elemento de resultado
    var resultado = document.getElementById('resultado');
    
    // Obtém o conteúdo atual da calculadora
    var conteudo = resultado.textContent;
    
    // Verifica se há uma expressão válida e a calcula usando eval
    if (conteudo) {
        resultado.textContent = eval(conteudo);
    } else {
        // Se o visor estiver vazio, exibe "Nada..."
        resultado.textContent = "Nada...";
    }
}
