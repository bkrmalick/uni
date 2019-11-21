public class S15
{
    public static void main(String[] args)
    {
        int[] r= {2,1,3,2,6,3,7,4};
        for(int i=1; i<=r.length -2 ;i+=2)
            System.out.print(f(r[i+1]));
        
    }
    
    public static String f(int r)
    {
        return r-1 + "-"; 
    }
    
    
    public static int getLongestRunLength(int[] v)
{
	int run=1, maxRun=1;
	int prev=v[0]; 
	for(int i=1; i<v.length; i++)
	{	if(v[i] == prev)
		{
			run++; 
			if(run>maxRun)
			{
				maxRun=run; 
			}
		}
		else
		{	
			run=1; 
		}

		prev=v[i]; 

	}


	return maxRun; 
}
    
}