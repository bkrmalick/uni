public class Class3
{
    public static void main(String[] args)
    {
        printPowersOfTen(15);
    }

    public static void printPowersOfTen(int n) //10^1 to 10^n
    {
        long x=1; //int not big enough to represent greater powers of 10

        for(int pow=1;pow<=n;pow++)
        {
            x*=10; //x=x*10
            System.out.println("10^"+pow+" = "+x);
        }
    }

}
