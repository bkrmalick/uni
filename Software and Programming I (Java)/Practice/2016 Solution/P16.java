public class P16 {
public static void main(String[] args) {
int[] v = { 1, 2, 3, 4 };
print(v);
fiddle(v, v[2] - 1);
print(v);
fiddle(v, v[3] - 1);
print(v);
}
public static void fiddle(int array[], int idx) {
array[idx] = array[idx - 1] * 2;
}
public static void print(int array[]) {
System.out.print(array[0]);
for (int i = 1; i < array.length; i++)
System.out.print(", " + array[i]);
System.out.println();
}
}