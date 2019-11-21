//package bkr;

public class exmapleclass
{
    public static void main(String[] args)
    {
        float intialVal=1000;

        System.out.print(interestAfter(3,intialVal));

    }

    private static float interestAfter(int yr, float intialVal)
    {
        return intialVal * (float)(Math.pow(1.05,yr));
    }
}
