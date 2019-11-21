public class InterestCalculator 
{
   
    public static void main(String arg[])
    {
        double intialBal=1000;
        double currentBal=intialBal;
        
        System.out.println("Intial Balance: £"+ intialBal);
        
        currentBal = progressYear(currentBal);
        
        System.out.println("Balance after 1 year: £"+currentBal);
        
        currentBal = progressYear(currentBal);
        
        System.out.println("Balance after 2 years: £"+currentBal);
        
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
   
}
    