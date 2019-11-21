public class Q2
{
    public static void main(String[] args)
    {
        double[] x = //{1,2,3,4,5,6,7};//
        {8, 4, 5, 21, 7, 9, 18, 2, 100};
        System.out.println("Before rotation: ==============================");
        for (int i = 0; i < x.length; i++)
        {
            System.out.println("x[" + i + "]: " + x[i]);
        }

        x = rotate(x, 3);
        System.out.println("After rotation: ==============================");
        for (int i = 0; i < x.length; i++)
        {
            System.out.println("x[" + i + "]: " + x[i]);
        }
    }

    public static double[] rotate(double[] x, int n)
    {

        double[] y=java.util.Arrays.copyOf(x,x.length);
        double[] z=java.util.Arrays.copyOf(x,x.length);


        for(int j=0;j<=n;j++)
        {   for(int i=0;i<y.length;i++)
            {
               int ind=i-1;

               if(ind <0)
                ind=z.length-1;

                y[i]=z[ind];
            }
            z=java.util.Arrays.copyOf(y,y.length);
        }

        return y;
    }


}
