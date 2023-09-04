package calculatorModels;

public class CalculatorMenu {

    private String inicio = """
        *******************************************************
        *          Bem vindo a calculadora v0.01! :D          *
        *  No momento funcionamos apenas com dois numeros :'( *               
        *******************************************************
    """;

    private String menuOperation = """
        Qual operação você deseja realizar com esses numeros?
        (1) Somar
        (2) Subtrair
        (3) Dividir
        (4) Multiplicar
        (5) Todos acima
        (6) Sair
    """;

    public String getInicio () {
        return inicio;
    }

    public String getMenuOperation() {
        return menuOperation;
    
    }
}
