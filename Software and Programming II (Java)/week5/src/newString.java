public class newString implements odd<String>
{

//@Override
    public String getOddChar(String other)
    {
        String r="";
        for(int i=0;i<other.length();i++)
            if(i%2!=1)
                r+=other.charAt(i);

        return r;
    }
}
