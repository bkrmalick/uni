import java.util.Scanner; 

public class InterestCalc3 
{
    public static void main(String[] args)
    {
        Scanner s = new Scanner(System.in);
        
        System.out.println("Input Intial Balance: ");
        double intial = s.nextDouble();
        System.out.println("Input Target Balance: ");
        double target = s.nextDouble();
        double curr=intial;
        
        for(int i=0;i<10;i++)
        {
           curr=curr*1.05;
        }
        
        System.out.println("Interest:" + (curr-intial));
        
        curr= intial;
        
        int count=0;
        while(curr<intial*2)
        {
             curr=curr*1.05;
             count++;
        }
        
        System.out.println("Value:" + curr);
        System.out.println("Years Took:" + count);
    }
}