package calculatorModels;

import java.util.Scanner;

public class CalculatorOperations {
        private int n1;
        private int n2;
        private int escolha;
        private int exit;

        public void setNumber1(int num1) {
          n1 = num1;
        }

        public void setNumber2(int num2) {
          n2 = num2;
        }

       public void execute() {
          Scanner leitor = new Scanner(System.in);
          escolha = leitor.nextInt();
          leitor.close();
       }
       
       public int getSoma(){
          return n1 + n2;
       }

       public int getSubtrai(){
          return n1 - n2;
       }

       public double getDivide(){
          if (n1 != 0 && n2 != 0) {
               return (double) n1 / n2;
           } else {
               throw new ArithmeticException("Divisão por zero não permitida.");
           }
       }
       
       public int getMultiplica(){
          return n1 * n2;
       }
}
