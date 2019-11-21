public class T18 {
    private static int g = 100;
    private int b;
    private String s;
    public T18(int a) {
        b = g;
        g++;
        s = "t" + a;
    }
    public static void main(String[] args) {
        T18 t1 = new T18(1);
        System.out.println(t1.s + ": " + t1.b + "/" + t1.g);
        T18 t2 = new T18(2);
        System.out.println(t2.s + ": " + t2.b + "/" + t2.g);
        T18 t3 = new T18(3);
        System.out.println(t3.s + ": " + t3.b + "/" + t3.g);
    }
}