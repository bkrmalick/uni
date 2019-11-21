public class test
{

public static void main(String[] args)
{
    odd <String> o= new newString();

    String s="i a m o d d";

    //ideally: s.getOdd();

   //test(s, new odd <String>(){
  //  public String getOddChar(String s)
   // {
   //    return "hello";
   // }
  // }
   //);


   test(s, x-> {return x.substring(5);} );

}

    public static void test(String s, odd<String> o)
    {
        System.out.println(o.getOddChar(s));
    }
}
