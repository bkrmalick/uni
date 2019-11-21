public class Bird extends Animal {
    public void f(String u) { System.out.println("Bird String"); }
    public void f(Object u) { System.out.println("Bird Object"); }
    public void f(String u, String v) { System.out.println("Bird String String"); }
    public void f(Object u, Object v) { System.out.println("Bird Object Object"); }
    public void tweet() { System.out.println("Chirp!"); }
}
