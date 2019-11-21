import java.util.Scanner;

public class cmd
{
    public static void main(String[]args)
    {
        String concat="";
        for(String s:args)
            concat+=" " + s;

        Scanner s=new Scanner(concat);

        while(s.hasNext())
        {
            if(s.hasNextInt())
            {
                System.out.println("int : "+s.nextInt());
            }
            else if (s.hasNextDouble())
            {
                System.out.println("double : "+s.nextDouble());
            }
        }
    }
}
