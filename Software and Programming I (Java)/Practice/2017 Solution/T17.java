public class T17 {
private static int a = 2;
private int b;
private String s;
public T17(int n) {
b = a;
a += n;
s = "T" + n;
}
public static void main(String[] args) {
T17 t1 = new T17(1);
System.out.println(t1.s + ": " + t1.b + ", " + t1.a);
T17 t2 = new T17(2);
System.out.println(t2.s + ": " + t2.b + ", " + t2.a);
T17 t3 = new T17(3);
System.out.println(t3.s + ": " + t3.b + ", " + t3.a);
}
}
