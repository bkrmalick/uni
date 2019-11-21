import java.util.Scanner;

public class week2 {
    public static void main(String[] args)
    {
        /* uncomment to take input

        int n=scan("Input n: ";
        System.out.println("Roman conversion: " + convert(n) );
        */


        for(int i=0;i<4000;i++)
        {
            System.out.println(i + " : " + convert(i));
        }

    }

    private static int scan(String prompt) //method to take input
    {
        System.out.println(prompt);

        Scanner s = new Scanner(System.in);

        int n = s.nextInt();

        return n;
    }

    public static String convert(int n) //method to convert n to roman where 0 <= n < = 3999
    {
        String str="";

        if(!(n>=0 && n<=3999)) //n not in range
        {
            System.out.println("Error: n not in req range");
            return str;
        }

        //Extracting individual digits
        int unit = n%10;

        n=(n-unit)/10;

        int tens = n%10;

        n=(n-tens)/10;

        int hundreds = n%10;

        n=(n-hundreds)/10;

        int thousands= n%10;

        //converting ind digits and joining
        str= romanDigit(thousands, "M","","") //wont need five and ten since program input < 4000
            +romanDigit(hundreds,"C","D","M")
            +romanDigit(tens,"X","L","C")
            +romanDigit(unit,"I","V", "X");


        return str ;
    }

    public static String romanDigit(int n, String one, String five, String ten)
    {
        String str="";

        if(n==1)
        {
            str=one;
        }
        else if(n==2)
        {
            str=one+one;
        }
        else if(n==3)
        {
            str=one+one+one;
        }
        else if(n==4)
        {
            str=one + five;
        }
        else if(n==5)
        {
            str=five;
        }
        else if(n==6)
        {
            str=five+one;
        }
        else if(n==7)
        {
            str=five+one+one;
        }
        else if(n==8)
        {
            str=five+one+one+one;
        }
        else if(n==9)
        {
            str=one+ten;
        }
        else
        {
            //rest digits can be ignored as they might be
            // negative or 0 for inputs that don't have thousands/hundreds/tens digit
        }

        return str;
    }

}
