
import java.util.Scanner;
import java.lang.Math;
public class test2 {


    public static void main (String [] args)
    {
        //System.out.println( Math.min((new Scanner(System.in)).nextInt(),(new Scanner(System.in)).nextInt()));

        int n=20; //all
        if (n > 10) System.out.print("*****");
        if (n > 7) System.out.print("****");
        if (n > 4) System.out.print("***");
        if (n > 1) System.out.print("**");
        System.out.println("*");

        n=2; //**
        if (n > 10) System.out.print("*****");
        if (n > 7) System.out.print("****");
        if (n > 4) System.out.print("***");
        if (n > 1) System.out.print("**");
        System.out.println("*");

        n=1;//none
        if (n > 10) System.out.print("*****");
        if (n > 7) System.out.print("****");
        if (n > 4) System.out.print("***");
        if (n > 1) System.out.print("**");
        System.out.println("*");


//        How many * will be printed when the code is executed
//        (a) with n = 6?
//            (b) with n = 20?
//            (c) with n = 2?
//            (d) with n = 1?
    }



}
