public class T16 {
private static int a = 0;
private int b;
private String s;
public T16(int n) {
b = a;
a += n;
s = "O: " + n;
}
public static void main(String[] args) {
T16 t1 = new T16(1);
System.out.println(t1.s + ", " + t1.b + ", " + t1.a);
T16 t2 = new T16(2);
System.out.println(t2.s + ", " + t2.b + ", " + t2.a);
T16 t3 = new T16(3);
System.out.println(t3.s + ", " + t3.b + ", " + t3.a);
}
}