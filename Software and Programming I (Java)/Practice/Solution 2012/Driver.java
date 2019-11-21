    public class Driver
{
    public static void main(String[] args)
    {
 // for (int i = 5; i > 1; i--)
// System.out.print(2*i - 1);
// System.out.println();
 // int j = 5;
// while (j > 1) {

// System.out.print(2*j - 1);
// j = j - 1;
// }
// System.out.println();
 // int k = 5;
// while (k >1) {
// System.out.print(2*k - 1);
// k = k - 1;
// }
// System.out.println();

    double d=1.23;
    System.out.println(d+"\n"+(int)d);

        
    }
    public static double geometricMean(int[] a)
{
    if(a.length<1)
        return 0; 
        
    double d=1;
    
    for(int n:a)
        d*=n;
    
    return Math.pow(d, 1.0/a.length);
}

public static String first5(String s)
{
    return ( (s.length()<5)?s:s.substring(0,5) );
}

public static double[] sum(double[] a, double[] b)
{
    if(a.length!=b.length)
        return null;

    double[] v=new double[a.length];
    
    for(int i=0;i<a.length;i++)
        v[i]=a[i]+b[i]; 

    return v;
}
    public static double CalcTax(double inc)
{
    double t; 
    
    if(inc<=7475)
        t=0;
    else if(inc<=42475)
        t=0.2*(inc-7475); 
    else
        t=0.2*(42475-7475) + 0.4*(inc-42475);
    
    return t;
}
 public static int[] splice(int[] v, int[] w)
{
    if(v.length!=w.length)
        return null;

    int[] vw= new int[v.length+w.length];
    
    for(int i=0, j=0, k=0; i<vw.length ; i++)
        if(i%2==0)
            vw[i]=v[j++];
        else    
            vw[i]=w[k++];
            
    return vw; 
}   
}