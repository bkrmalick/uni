import java.util.Scanner;

public class Driver 
{
    
 
    public static void main(String[] args)
    {
     
     Scanner s=new Scanner(System.in);
        
     CashRegister r1 = new CashRegister();
     CashRegister r2 = new CashRegister();
     CashRegister r3 = new CashRegister();
     
     //r1.addItem(s.nextDouble()); 
     
     //System.out.println("Your register 1 total is : "+ r1.getTotal());
     
     //r2.addItem(s.nextDouble());
     //r2.addItem(s.nextDouble());
     
     //System.out.println("Your register 2 total is : "+ r2.getTotal());
     
     r3.addItem(s.nextDouble());
     r3.addItem(s.nextDouble());
     r3.addItem(s.nextDouble());
     r3.addItem(s.nextDouble());
     //r3.undo();
     
     System.out.println("Your register 3 total is : "+ r3.getTotal());
     
     r3.undo();
     
     System.out.println("Your register 3 total is : "+ r3.getTotal());
     
        
    }
    
}