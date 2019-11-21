package q1;

public class DriverPair
{

    public static void main(String[]args)
    {
        Pair<Integer,String> p1 = new Pair<Integer,String>(42, "Foo");
        Pair<Integer,String> p2 = new Pair<Integer,String>(p1);
        Pair<String,Integer> p3 = p1.swap();
//Pair<String,Number> p4 = new Pair<String,Number>(p3);
        System.out.println("p1: " + p1);
        System.out.println("p2: " + p2);
        System.out.println("p3: " + p3);
//System.out.println("p4: " + p4);
        System.out.println("p1.getOne(): " + p1.getOne());
        System.out.println("p1.getTwo(): " + p1.getTwo());
    }
}
