public class Q1
{
    public static void main(String [] args)
    {
        double[] x= {8,4,5,21,7,9,18,2,100};

        System.out.println("Items in Array: "+x.length);
        System.out.println("First Item in Array: "+x[0]);
        System.out.println("Last Item in Array: "+x[x.length-1]);

        for(int i=0;i<x.length;i++)
            System.out.print(" " + x[i]);

        System.out.println();
        for(int i=0;i<x.length;i++)
            System.out.print((i!=0?",":"")+"x["+i+"]: " + x[i]);

        System.out.println();
        for(int i=x.length-1;i>=0;i--)
            System.out.print((i!=x.length-1?",":"")+"x["+i+"]: " + x[i]);

        System.out.println();
        System.out.println(java.util.Arrays.toString(x));

        for(double d:x)
            System.out.print(" "+d);
    }


}
