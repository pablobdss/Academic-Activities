# Progama 02 - Línguagem Python - Programação Estruturada
# Autor: Juan Pablo - Data: 18/08/2023 - Linguagem: Python
"""
Descrição Narrativa: Faça um programa que solicite o preço da mercadoria e o percentual de desconto.
Exiba o valor do desconto e o preço a pagar.
"""
def calculadora_Desconto():
    def solicitar_valores():

        while True:
            try:
                preco = float(input("Qual o valor do produto? "));
                break;
            except ValueError:
                print("Erro! Por favor insira um número.");
                

        while True:
            try:
                desconto = float(input("Qual o percentual de desconto do produto? "));
                break;
            except ValueError:
                print("Erro! Por favor insira um número.");
        return preco, desconto;

    def val_desconto (preco, desconto):
        return (preco * desconto) / 100;

    def pagamento (preco, valor_desconto):
        return preco - valor_desconto;
        
    preco, desconto = solicitar_valores();
    valor_desconto = val_desconto(preco, desconto);
    a_pagar = pagamento(preco, valor_desconto);

    print("O valor do produto é de R${:.2f}".format(preco));
    print("O percentual de desconto é de {:.2f}%".format(desconto));
    print("O valor de desconto é de R${:.2f}".format(valor_desconto));
    print("O valor a pagar é de R${:.2f}".format(a_pagar));

if(__name__ == "__main__"):
    calculadora_Desconto();
"""
Verificacao para ver se o arquivo esta sendo executado diretamente como um programa ou nao
Quando um arquivo Python é executado diretamente como um programa, o valor de __name__ é definido como "__main__". 
Por outro lado, se o arquivo é importado como um módulo em outro arquivo, o valor de __name__ será o nome do módulo.
"""