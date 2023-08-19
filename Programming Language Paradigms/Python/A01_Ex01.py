# Progama 01 - Línguagem Python - Programação Estruturada
# Autor: Juan Pablo - Data: 18/08/2023 - Linguagem: Python
"""
Descrição Narrativa: Faça um programa que leia duas notas e calcule sua média.
Levando em consideração que para ser aprovado o alu tem que ter média maior igual a 7.
"""

"""
Estrutura de looping onde vai ser solicitado os números da média do aluno.  
Caso o valor inserido seja diferente de números ou fora do intervalo de 0 a 10, será dado como erro e o looping reinicia
Até que seja inserido um valor válido, o looping vai ser feito novamente.
"""
def nota_Aluno():
    
    def solicitar_notas():
        # A ideia do looping é para quando o programa for solicitar as duas notas, possamos verificar se a nota está dentro de 0 e 10
        # O try except irá servir para que quando o usuario digite algo fora do escopo de numeros, o programa não se encerre e siga normalmente avisando ao usuario o que ocorreu
        while True:
            try:
                n1 = float(input("Qual foi a primeira nota do aluno? "));

                if 0 <= n1 <= 10: 
                    break;
                else: 
                    print("Erro! O valor inserido precisar ser entre 0 e 10, por gentileza insira um valor nesse intervalo")

            except ValueError:
                print("Erro! O valor inserido não é válido, por gentileza inseria um número.");
        while True:   
            try:
                n2 = float(input("Qual foi a segunda nota do aluno? "));

                if 0 <= n2 <= 10: 
                    break;
                else: 
                    print("Erro! O valor inserido precisar ser entre 0 e 10, por gentileza insira um valor nesse intervalo");
            
            except ValueError:
                print("Erro! O valor inserido não é válido, por gentileza inseria um número.");
        
        return n1, n2;

    # Calcular a media das notas.
    def calmedia(n1, n2):
        return (n1 + n2) / 2;

    # Verificador com If para decidir se o aluno foi aprovado ou não.
    def verificador(media):
        if media >= 7.0: 
            return "Aprovado :D"
        else: 
            return "Reprovado :(";

    nota1, nota2 = solicitar_notas();
    med = calmedia(nota1, nota2);
    rep = verificador(med);
    print("As notas inseridas foram {:.2f} e {:.2f}".format(nota1, nota2))
    print("O valor da média foi: {:.2f} ".format(med));
    print("O conceito do Aluno foi: {}".format(rep));

if(__name__ == "__main__"):
    nota_Aluno();
"""
Verificacao para ver se o arquivo esta sendo executado diretamente como um programa ou nao
Quando um arquivo Python é executado diretamente como um programa, o valor de __name__ é definido como "__main__". 
Por outro lado, se o arquivo é importado como um módulo em outro arquivo, o valor de __name__ será o nome do módulo.
"""

    

