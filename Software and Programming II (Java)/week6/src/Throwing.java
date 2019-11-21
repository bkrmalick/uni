import java.util.Scanner;
import java.io.IOException;

public class Throwing
{
    public static void main(String[] args)
    {
        boolean isInt=false;

        while(!isInt)
        {
            try
            {
                int x=getInt();
                isInt=true;
                System.out.println(x);
            }
            catch(IOException e)
            {
                e.printStackTrace();
            }
        }
    }

    public static int getInt() throws IOException
    {
        Scanner s= new Scanner(System.in);

        System.out.print("Input integer: ");

        if(s.hasNextInt())
        {
            int x=s.nextInt();
            return x;
        }
        else
        {
            throw new IOException("NaN");
        }


    }
}
