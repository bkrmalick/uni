
import java.util.Scanner;

public class exc2
{
    public static void main(String[] args)
    {
        int n=scan();
        
        String s = convert(n);
        
        System.out.println(s);
    }
    
    
   public static String convert(int n)
   {
    String str="";
     if(!(n<= 3999 && n>=0))
     {
         return "Error";
     }
     else
     {
         
         
         int thousand = n/1000;
         int hundred = (n%1000)/100;
         
         int ten = (n%100)/10;
         
         int unit = n%10;
         
         if(thousand ==1)
         {
             str+="M";
         }
         else if (thousand ==2)
         {
             str+="MM";   
         }
         else
         {
             str+="MMM";
         }
         
     }
     
     return str;
     // String str="";
     
     // int rem=n%10;
     // n=(n-rem)/10;
     
     // if (rem ==1)
     // {
         // str="I"+str;
     // }
     // else if (rem ==2)
     // {
         // str="II"+str;
     // }
     // else if (rem ==3)
     // {
         // str+="III"+str;
     // }
     // else if (rem ==4)
     // {
         // str="IV";
     // }
     // else if (rem ==5)
     // {
         // str="V"+str;
     // }
     // else if (rem ==6)
     // {
         // str="VI"+str;
     // }
     // else if (rem ==7)
     // {
         // str="VII"+str;
     // }
     // else if (rem ==8)
     // {
         // str="VIII"+str;
     // }
     // else if(rem == 9)
     // {
         // str= "IX" + str;
     // }

    // rem=n%10;
    // n=(n-rem)/10;
   
    
    // if(n==0 && rem==0)
    // {
         // System.out.println(str);
         // return str;
    // }
    // else if (rem ==1)
     // {
         // str="X"+str;
     // }
     // else if (rem ==2)
     // {
         // str="II"+str;
     // }
     // else if (rem ==3)
     // {
         // str+="III"+str;
     // }
     // else if (rem ==4)
     // {
         // str="IV";
     // }
     // else if (rem ==5)
     // {
         // str="L"+str;
     // }
     // else if (rem ==6)
     // {
         // str="VI"+str;
     // }
     // else if (rem ==7)
     // {
         // str="VII"+str;
     // }
     // else if (rem ==8)
     // {
         // str="VIII"+str;
     // }
     // else if(rem == 9)
     // {
         // str= "IX" + str;
     // }
     
     
      // System.out.println(str);
         // return str;
    
    }
    
    public static int scan()
    {
        Scanner n = new Scanner(System.in);
        System.out.println("Input n:");
        int x = n.nextInt();
        
        return x;
    }
}