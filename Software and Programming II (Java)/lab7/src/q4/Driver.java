package q4;

import java.util.ArrayList;
import java.lang.Number;
import java.math.BigInteger;

public class Driver
{
    public static void main(String[]args)
    {
        ArrayList<Number> xs = new ArrayList<Number>();
        xs.add(2.5);
        xs.add(3);
        xs.add(BigInteger.valueOf(12));
        xs.add(7L);
        xs.add(8.2f);
        double xsSum = sum(xs);
        System.out.println("The sum of " + xs + " is: " + xsSum);
    }

    public static <E extends Number> double sum(ArrayList<E> a)
    {
        double sum=0;
        for(Number n:a)
            sum+=n.doubleValue();

        return sum;
    }

}
