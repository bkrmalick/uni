public class T13 {
private static int s = 1;
private int id;
T13() {
id = s;
s++;
}
public static void main(String[] args) {
T13 t1 = new T13();
System.out.println("t1: " + t1.id + ", " + t1.s);
T13 t2 = new T13();
System.out.println("t2: " + t2.id + ", " + t2.s);
}
}