
import java.util.Scanner;
public class Q25
{
    public static void main(String[] args)
    {
        int n=0;
        double sum=0;
        String input="";


        input =(new Scanner(System.in)).nextLine();

        while(!input.equalsIgnoreCase("q"))
        {
            sum+=Double.parseDouble(input);
            n++;
            input =(new Scanner(System.in)).nextLine();
        }

        System.out.println("sum: "+sum+" \n "+"no. : "+n);

    }
}
