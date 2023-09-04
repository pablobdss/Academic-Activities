import java.util.Scanner;
import calculatorModels.CalculatorMenu;
import calculatorModels.CalculatorOperations;

public class Main {
    public static void main(String[] args) throws Exception {
        Scanner leitor = new Scanner(System.in);

        CalculatorOperations myOperations = new CalculatorOperations();
        CalculatorMenu myMenu = new CalculatorMenu();

        boolean menu = true;
        boolean validation = true;
        int escolha;
        int exit;

        while (menu) {

            System.out.println(myMenu.getInicio());

            System.out.print("Digite o seu primeiro número: ");
            myOperations.setNumber1(leitor.nextInt());

            System.out.print("Digite o seu segundo número: ");
            myOperations.setNumber2(leitor.nextInt());

            System.out.println(myMenu.getMenuOperation());

            escolha = leitor.nextInt();

            switch (escolha){

                case 1:
 
                System.out.println(String.format("O valor da sua soma é %d", myOperations.getSoma()));
                break;
 
                case 2:
 
                System.out.println(String.format("O valor da sua subtração é %d", myOperations.getSubtrai()));
                break;
 
                case 3:
 
                System.out.println(String.format("O Valor da sua divisão é de %.2f", myOperations.getDivide()));
                break;
 
                case 4:
 
                System.out.println(String.format("O valor da sua multiplicação é de %d", myOperations.getMultiplica()));
                break;
 
                case 5:
 
                System.out.println(String.format("O valor da sua soma é %d", myOperations.getSoma()));
                System.out.println(String.format("O valor da sua subtração é %d", myOperations.getSubtrai()));
                System.out.println(String.format("O Valor da sua divisão é de %.2f", myOperations.getDivide()));
                System.out.println(String.format("O valor da sua multiplicação é de %d", myOperations.getMultiplica()));
                break;
 
                case 6:
                System.out.println("Tenha um bom dia e até mais!");
                menu = false;
                break;
 
                default:
                System.out.println("Por gentileza insira uma entrada válida");
 
            }
            
            if (menu == true) {
                validation = true;
            }
            else{
                validation = false;
            }

            while (validation){
            System.out.println("\n Deseja continuar?\n (1) Sim\n (2) Não");
            exit = leitor.nextInt();

            if (exit == 1){
                validation = false;
                break;
            }
            else if (exit == 2){
                System.out.println("Tenha um bom dia e até mais!");
                validation = false;
                menu = false;
                break;
            }
            else{
                System.out.println("Por gentileza insira uma entrada válida!");
                continue;
            }                                               
            }
        }
        leitor.close();    
    }   
    
}
