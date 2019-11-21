import java.util.Scanner;

public class StringSequence
{
    public static void main(String[] args)
    {
        Scanner s = new Scanner(System.in);

        System.out.println("Please input strings (seperated by enter, ended by 'x') ");

        String curr=s.next() , smallest=curr, largest=curr;

        if(curr.equalsIgnoreCase("x"))
            return; //end program if first input is x

        int minL=curr.length(); //minimum string length
        int maxL=curr.length(); //maximum string length
        int count=1; //number of input strings
        int sumLs=curr.length(); //sum of all string lengths - integer b/c always integer value

        curr=s.next();

        while(!curr.equalsIgnoreCase("x"))//curr != "x"  or "X"
        {
            if(curr.length()<minL)
            {
               minL=curr.length();
               smallest=curr;
            }
            if(curr.length()>maxL)
            {
                maxL=curr.length();
                largest=curr;
            }

            count++;

            sumLs+= curr.length();

            curr=s.next();

        }

        System.out.println("An example of a String with smallest length is '" + smallest + "' with length " + smallest.length());
        System.out.println("An example of a String with largest length is '" + largest + "' with length " + largest.length());
        System.out.println("Sum of all lengths of input strings: " + sumLs);
        System.out.println("No. of Strings input: " + count);
        System.out.println("Average string length: " + (double)sumLs/count ); //casting sumLs to avoid integer division

    }


}
