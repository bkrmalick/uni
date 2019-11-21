public class S12 {
public static void main(String[] args) {
int[] r = {5,6,8,10};
for(int i = 0; i < r.length; i++)
System.out.println(f(r[i]));
}
public static int f(int j) {
return 15 % j;
}
}