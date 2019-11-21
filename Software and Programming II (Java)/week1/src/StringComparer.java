import java.util.Scanner;
public class StringComparer {

public static void main(String [] args)
{
    Scanner s= new Scanner(System.in);


while(true)
{
    String s1= s.nextLine().trim();
    String s2= s.nextLine().trim();
    String s3= s.nextLine().trim();

   if(s1.compareTo(s2)>0)
    {
       if(s1.compareTo(s3)<0)
        System.out.println(s1);
    }
   if(s1.compareTo(s2)<0)
   {
       if(s1.compareTo(s3)>0)
           System.out.println(s1);
   }
     if(s2.compareTo(s1)>0)
   {
       if(s2.compareTo(s3)<0)
           System.out.println(s2);
   }
    if(s2.compareTo(s1)<0)
   {
       if(s2.compareTo(s3)>0)
           System.out.println(s2);
   }
    if(s3.compareTo(s2)>0)
   {
       if(s3.compareTo(s1)<0)
           System.out.println(s3);
   }
    if(s3.compareTo(s2)<0)
    {
        if(s3.compareTo(s1)>0)
            System.out.println(s3);
    }

    /*BREAKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK*/
    if(s1.compareTo(s2)>0 && s1.compareTo(s3)<0)
    {
            System.out.println(s1);
    }
    if(s1.compareTo(s2)<0 && s1.compareTo(s3)>0)
    {
            System.out.println(s1);
    }
    if(s2.compareTo(s1)>0 && s2.compareTo(s3)<0)
    {
            System.out.println(s2);
    }
    if(s2.compareTo(s1)<0 && s2.compareTo(s3)>0)
    {
            System.out.println(s2);
    }
    if(s3.compareTo(s2)>0 && s3.compareTo(s1)<0)
    {
            System.out.println(s3);
    }
    if(s3.compareTo(s2)<0 && s3.compareTo(s1)>0)
    {
            System.out.println(s3);
    }

}

}
}
