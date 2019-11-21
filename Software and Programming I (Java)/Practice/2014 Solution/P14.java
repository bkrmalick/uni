public class P14 {
public static void main(String[] args) {
String[] v = { "mary", "henry", "rose" };
System.out.println(v[0] + ", " + v[1] + ", " + v[2]);
fiddle(v, v[0]);
System.out.println(v[0] + ", " + v[1] + ", " + v[2]);
}
public static void fiddle(String[] array, String s) {
array[0] = "alfie";
array[2] = array[2] + s;
}
}