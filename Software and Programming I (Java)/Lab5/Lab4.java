
import java.util.Scanner; 

public class Lab4
{
 public static void main(String [] args)
 {
     Scanner s=new Scanner(System.in); 
  while(true)
  {
     System.out.println("Input n: ");
     
     System.out.println("nth fibonacci: " + (fibonacci(s.nextInt())==-1 ? "error" :s.nextInt()  ));
  }
 }   
 
 private static int fibonacci(int n)
 {
     int f1=1;
     int f2=1;
     int f3; 
     
     if(n<0)
     {
         return -1; 
     }
     else if(n<3) //1st or 2nd 
     {
      return 1;    
     } 
     else
     {
         for(int k=3;k<=n;k++)
         {  
             f3=f2+f1; 
             
             f1=f2;
             f2=f3;
             
         }
     }
     
     return f2; 
 }
}