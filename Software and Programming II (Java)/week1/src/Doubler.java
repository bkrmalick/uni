import java.util.Scanner;

public class Doubler {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.print("Enter a number: ");
        int number = 2000000000;
        int doubledNumber = 2 * number;
        System.out.println("Twice " + number + " is " + doubledNumber);
    }
}
