import java.util.Scanner;

public class InterestCalculator2
{
   
    public static void main(String arg[])
    {
        
        
        double target = scan();
        double intialBal=1000;
        double currentBal=intialBal;
        
        System.out.println("Intial Balance: £"+ intialBal);
        
         if (target == intialBal)
        {
            System.out.println("Congratulations, you have reached your target.");
            
        }
        else
        {
            int count = 2;
            while(currentBal < target)
            {
                currentBal= progressYear(currentBal);
                System.out.println("Balance after "+count+" year(s): £"+currentBal);
                count++;
            }
            
        }
        
        
    }
    
     private static double interestOn(double b)
    {
        double interest=b*0.05;
        
        return interest;
        
    }
    
    private static double progressYear(double currentBal)
    {
        currentBal = currentBal + interestOn(1000);
        
        return currentBal;
    }
   
    public static double scan()
    {
        System.out.println("Input target: ");
        
        Scanner scan = new Scanner (System.in);
        
        double target = scan.nextDouble();
        
        return target;
    }
}
    