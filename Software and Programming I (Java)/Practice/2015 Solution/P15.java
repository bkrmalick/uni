public class P15
{
public static void main( String[] args)
{
    int[] v={0,1,2,3};
    
    System.out.println(v[1]+", "+v[2]+", "+v[3]);
    fiddle(v,v[2]);
    System.out.println(v[1]+", "+v[2]+", "+v[3]);
    fiddle(v,v[3]);
    System.out.println(v[1]+", "+v[2]+", "+v[3]);
}

public static void fiddle(int[] array, int idx)
{
    array[idx] =array[idx-1] + array[idx-2];
}
    
}