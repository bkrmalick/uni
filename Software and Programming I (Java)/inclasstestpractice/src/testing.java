import java.util.Scanner;


public class testing
{
    public static void main(String[] args)
    {
       // Scanner s =new Scanner(System.in);
        //int n= s.nextInt();

        for(int i=0;i<4000;i++)
            System.out.println(i + " "  + convert(i));
    }

    public static String convert(int n)
    {
        if(n>3999 || n<0)
        {
            return "";
        }
        else
        {
            int digit= n%10;
            n=(n-digit)/10;

            int ten= n%10;
            n=(n-digit)/10;

            int hundred= n%10;
            n=(n-digit)/10;

            int thousand= n%10;
            n=(n-digit)/10;


        return (romanDigit(thousand,"M" ,"" , "") +
                romanDigit(hundred ,"C" , "D", "M") +
                romanDigit( ten, "X", "L", "C") +
                romanDigit( digit ,"I" ,"V" ,"X" ) );


        }
    }


    private static String romanDigit(int n, String one, String five, String ten)
    {
        if(n==0)
            return "";
        else if(n==1)
            return one;
        else if (n==2)
            return one+one;
        else if (n==3)
            return one+one+one;
        else if (n==4)
            return one+five;
        else if(n==5)
            return five;
        else if (n==6)
            return five+one;
        else if (n==7)
            return five+one+one;
        else if (n==8)
            return five+one+one+one;
        else if (n==9)
            return one+ten;
        else
            return ten;
    }



}
