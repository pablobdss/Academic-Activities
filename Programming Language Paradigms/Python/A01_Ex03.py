# Progama 03 - Línguagem Python - Programação Estruturada
# Autor: Juan Pablo - Data: 18/08/2023 - Linguagem: Python
"""
Descrição narrativa: Escreva um programa para calcular a redução do tempo de vida de um fumante.
Pergunte a quantidade de cigarros fumados por dia e quantos anos ele já fumou. 
Considere que um fumante perde 10 minutos de vida a cada cigarro, e calcule quantos dias de vida um fumante perderá. 
Exiba o total em dias.
"""
def contador_Cigarro():

    def solicitar_dados():
        while True:
            try: 
                cigarrosPorDia = int(input("Quantos cigarros você fuma por dia? "));
                break;
            except ValueError:
                print("Erro! Por gentileza insira um número.");

        while True:
            try: 
                anosFumando = int(input("Há quantos anos você fuma cigarro? "));
                break;
            except ValueError:
                print("Erro! Por gentileza insira um número.");
        return cigarrosPorDia, anosFumando;

    def reducao_minutos(cigarrosPorDia, anosFumando):
        return (cigarrosPorDia * 10) * (anosFumando * 365);
    def reducao_dias(reducao_minutos):
        return reducao_minutos / (24 * 60);
    def reducao_anos(reducao_dias):
        return reducao_dias / 365;


    cigarrosPorDia, anosFumando = solicitar_dados();
    tempRedminutos = reducao_minutos(cigarrosPorDia, anosFumando)
    tempRedDias = reducao_dias(tempRedminutos); #corrigir
    tempRedAnos = reducao_anos(tempRedDias); #corrigir

    print("Redução do tempo em dias de {:.2f} dias" .format(tempRedDias));
    print("Redução do tempo em anos é de {:.2f} anos" .format(tempRedAnos));

if(__name__ == "__main__"):
    contador_Cigarro();
"""
Verificacao para ver se o arquivo esta sendo executado diretamente como um programa ou nao
Quando um arquivo Python é executado diretamente como um programa, o valor de __name__ é definido como "__main__". 
Por outro lado, se o arquivo é importado como um módulo em outro arquivo, o valor de __name__ será o nome do módulo.
"""