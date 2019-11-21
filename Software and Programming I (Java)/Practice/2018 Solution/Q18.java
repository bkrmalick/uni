public class Q18 {
private static int NUMBER = 20;
private int n;
private Q18(int n) {
this.n = n;
}
public static void main0(String[] args) {
String greeting = "Hello World no. ";
for (int i = 0; i < NUMBER; i++) {
if (i % 2 == 1) {
Q18 g = new Q18(3);
greeting = greeting.substring(0,24) + g.n + "!";
System.out.println(greeting);
}
}
}}