public class q18 {
    private static int NUMBER = 20;
    private int n1;
    private q18(int n) {
        n1 = n;
    }
    public static void main0(String[] args) {
        String greeting = "Hello World no. ";
        for (int i = 0; i < NUMBER; i++) {
            if (i % 2 == 1) {
                q18 g = new q18(3);
                greeting = greeting.substring(0,24) + g.n1 + "!";
                System.out.println(greeting);
            }
        }
    }
}