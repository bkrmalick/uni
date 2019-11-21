public class T09 {
    private int i = 1;
    private static int v = 2;
    public T09() {
        System.out.println("constructor of T09: i = " + i + ", v = " + v);
        i = 0;
        v++;
    }
    public static void main(String[] args) {
        T09 t1 = new T09();
        System.out.println("t1: i = " + t1.i + ", v = " + t1.v);
        t1.v = 7;
        T09 t2 = new T09();
        System.out.println("t2: i = " + t2.i + ", v = " + t2.v);
        t1.v = 5;
        System.out.println("t2: i = " + t2.i + ", v = " + t2.v);
    }
}