public class P18 {
public static void main(String[] args) {
int[] array = { 1, 2, 3, 4 };
int k = 2;
print(array);
k = array[k] - 1;
fiddle(array, k);
print(array);
k = array[k] - 1;
fiddle(array, k);
print(array);
}
public static void fiddle(int[] a, int idx) {
a[idx] = 2 * a[idx - 1];
}
public static void print(int[] v) {
System.out.print(v[0]);
for (int i = 1; i < v.length; i++)
System.out.print(", " + v[i]);
System.out.println();
}
}