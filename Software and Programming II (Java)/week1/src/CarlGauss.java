
import java.util.Scanner;
public class CarlGauss {
    public static void main(String[] args)
    {
        Scanner s= new Scanner(System.in);

        int n=s.nextInt();

        int sum=0;

        for(int i=1; i<=100; i++)
        {
            sum+=i;
        }

        System.out.println("Sum: "+sum);

         sum=0;
        int count=1;
        while(count<=100)
            sum+=count++;

        System.out.println("Sum: "+sum);

        sum=0;
         count=1;

        do {
            sum+=count++;
        }while(count<=100);


        System.out.println("Sum: "+sum);
    }
}
