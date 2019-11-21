public class tjhu {
    public static void main(String[] args)
    {
        String s ="rum";

        //System.out.println(s.substring(0,1));

        for (int c=0;c<s.length();c++)
        {
            for(int i=1;c+i<=s.length();i++)
            {
                System.out.println(s.substring(c,c+i));
            }
        }




    }
}
