public class D14 {
public static void main(String[] args) {
for(int i = 0; i < 5; i++) {
for(int j = 0; j < 5; j++)
if (i >= 3 && j + i >= 5 && j <= i)
System.out.print("x");
else
System.out.print(".");
System.out.println();
}
}
}