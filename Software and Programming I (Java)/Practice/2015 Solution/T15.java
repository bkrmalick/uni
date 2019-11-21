public class T15 {
 private static int c=1;
 private int b, n; 
 
 T15(int b)
 {
     c++;
     this.b=b;
     this.n=c; 
     
 }
 
 public static void main(String [] args)
 {
    T15 t1= new T15(3);
    System.out.println("1: " + t1.b +", " +t1.n + ", " + t1.c);
    T15 t2= new T15(2);
    System.out.println("2: "+ t2.b+ ", " + t2.n + ", " + t2.c);
     
    }
    
    
}