import java.util.*;

public class Q6
{
    public static void main(String [] args)
    {
        Scanner s= new Scanner(System.in);
        ArrayList<Integer> al=new ArrayList<>();
        System.out.println("Enter a number: ");
        int inp=s.nextInt();

        int countE=0,sum=0, sumOdd=0;

        while(inp!=-1)
        {
            al.add(inp);
            sum+=inp; sumOdd=((inp%2)==0?sumOdd:sumOdd+inp);
            if(inp%2==0)
                countE++;
            inp=s.nextInt();
        }

        double avg =(double)sum/al.size();
        double avgE= (sum-sumOdd)/countE;

        int sum1=0;
        for(int i:al)
            if(i%2==0)
                sum1+=Math.pow((i-avgE),2);

        System.out.println("# of items: "+ al.size());
        System.out.println("Average: "+avg);
        System.out.println("Standard Deviation: "+ Math.sqrt( (double)sum1/countE ));
        System.out.println("Sum of odd: "+ sumOdd);
    }
}
