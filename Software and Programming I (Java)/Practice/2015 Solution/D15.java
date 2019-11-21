public class D15 {
 
    public static void main(String[] args)
    {
        for(int i=0; i<4; i++)
        {
            for(int j=0; j<4;j++)
                if((i%2==0 && j%2==0) || (i%2==1 && j%2==1))
                    System.out.print("w");
                else
                    System.out.print("b");
            System.out.println(); 
            
        }
        
    }
    
    
    public static void printWords(String s)
{
	for(int i=0; i<s.length() ;i++)
	{
		if(Character.isWhitespace(s.charAt(i)))
			System.out.println();
		else
			System.out.print(s.charAt(i));
			

	}



}
    
}