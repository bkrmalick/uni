public class Expressions {
    public static void main(String[] args) {
        int a = 3;
        int b = 4;
        int c = 5;
        int d = 17;
        System.out.println((a + b) / c);
// 3 and 4 are added with sum 7
// 7 is divided by 5 with quotient 1
        System.out.println(a + b / c);
// 4 is divided by 5 with quotient 0
// 3 is added to 0 with sum 3
        System.out.println(a + 1); //4
        System.out.println(d % c); //2
        System.out.println(d / c); //3
        System.out.println(d % b); //1
        System.out.println(d / b); //4
        System.out.println(d + a / d + b);     //21
        System.out.println((d + a) / (d + b)); //0
        System.out.println(Math.sqrt(b));      //2
        System.out.println(Math.pow(a, b));    //81
        System.out.println(Math.abs(-a));       //3
        System.out.println(Math.max(a, b));     //4
    }
}