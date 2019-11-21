public class Test
{
    public static void main(String [] args)
    {
        //Q2
        byte b=126; //8 bit
        short s=1000; //16 bit
        int i=2000000000;  //32 bit
        float f=3.0f; //32 bit
        boolean bool=true;
        double d=3e10; //64 bit
        long l=355555555; // 64 bit

        System.out.println("b:"+b);
        System.out.println("s:"+s);
        System.out.println("i:"+i);
        System.out.println("f:"+f);
        System.out.println("bool:"+bool);
        System.out.println("d:"+d);
        System.out.println("l:"+l);

        b=123;
        s=1001;
        i=20002;
        f=56.3f;
        bool=false;
        d=2e13;
        l=2333333;

        System.out.println("\n\nAFTER CHANGE \n b:"+b);
        System.out.println("s:"+s);
        System.out.println("i:"+i);
        System.out.println("f:"+f);
        System.out.println("bool:"+bool);
        System.out.println("d:"+d);
        System.out.println("l:"+l);


        final byte b2=126; //8 bit
        final short s2=1000; //16 bit
        final int i2=2000000000;  //32 bit
        final float f2=3.0f; //32 bit
        final boolean bool2=true;
        final double d2=3e10; //64 bit
        final long l2=355555555; // 64 bit


        System.out.println("\n\nCONSTANTS \nb2:"+b2);
        System.out.println("s2:"+s2);
        System.out.println("i2:"+i2);
        System.out.println("f2:"+f2);
        System.out.println("bool2:"+bool2);
        System.out.println("d2:"+d2);
        System.out.println("l2:"+l2);

        //b2=127; //ERROR
    }



}
