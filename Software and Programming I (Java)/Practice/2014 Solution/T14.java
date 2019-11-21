public class T14 {
private static int s = 0;
private int i, j;
T14(int j) {
this.j = j;
s++;
this.i = s;
}
public static void main(String[] args) {
T14 t1 = new T14(3);
System.out.println("t1: " + t1.i + ", " + t1.j + ", " + t1.s);
T14 t2 = new T14(2);
System.out.println("t2: " + t2.i + ", " + t2.j + ", " + t2.s);
}
}