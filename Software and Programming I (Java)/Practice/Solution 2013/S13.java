public class S13 {
public static void main(String[] args) {
int[] r = { 2, 3, 7, 12, 10 };
for(int i = 0; i < r.length - 1; i++)
System.out.println(f(r[i + 1]));
}
public static int f(int r) {
return r % 2;
}
}