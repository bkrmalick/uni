public class idea
{
    public static void main(String[] args)
    {
        int a=1;
        int b=2;
        int tmp;

        System.out.println(a);
        System.out.println(b);

        tmp=a;
        a=b;
        b=tmp;

        System.out.println(a);
        System.out.println(b);

        test1();
        System.out.print(sq(2));
    }

    public static void test1()
    {
        String name="Abu Bakar Naseer";

        System.out.print(name.substring(4,9));
    }

    private static float sq(int x)
    {
        return x*x;
    }
}
