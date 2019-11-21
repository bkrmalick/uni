/**
 * Small test class to play with exceptions.
 *
 * @author Carsten Fuhs
 */
 package provided;
public class ExceptionTester {

    // foo, bar, baz are "meta-syntactical variables", names that are
    // widely used in code examples to say that the name does not
    // really matter
    //
    // https://en.wikipedia.org/wiki/Metasyntactic_variable

    public static void bar(int j) {
        if (j <= 0) {
            Object o = null;
            int x = o.hashCode(); // boom!
            System.out.println("bar!");
        }
        bar(j-1);
    }
    
    public static void foo(int i) {
        bar(i);
        System.out.println("foo!");
    }

    public static void main(String[] args) {
        try {
            foo(0);
            System.out.println("main!");
        } catch (NullPointerException npe) {
            // causing and catching this NullPointerException just to
            // show how to print a stack trace from an exception
            System.out.println("Here's the stack trace of our NullPointerException:");
            npe.printStackTrace();
        }
        System.out.println("Caught NullPointerException, now continuing.");
        System.out.println();
        System.out.println("Let's throw a MyUncheckedException and not catch it!");
        if (true) {
            // Try removing the "if (true) { ... }" around the throw-statement.
            // What does the compiler say?
            throw new MyUncheckedException("Here we go ...");
        }
        System.out.println("Still running?");
    }
}
