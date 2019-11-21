
public class test2
{
    
    private static final double PI =3.142; 
    public static void main(String[] args)
    {
        double third=(double)1/3; 
        double thirdDec=0.33333333;
        
        final double EPSILON=1e-14; 
        
        System.out.println(Math.abs(third-thirdDec)<EPSILON); 
        
    }
    
}