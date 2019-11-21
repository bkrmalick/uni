public class test{
    
 public static void main(String[] args)
 {
     
 }

 public static void printLongestRun(String[] v)
{
	int runStart=0, runEnd=0, maxRunStart=0, maxRunEnd=0;
	String prev=v[0];

	for(int i=1; i<v.length ; i++)
	{
		if(v[i].equals(prev))
			runEnd++;	
		if(!v[i].equals(prev) || i==v.length-1)
		{
			if((runEnd-runStart)>(maxRunEnd-maxRunStart))
			{
				maxRunEnd=runEnd;
				maxRunStart=runStart; 
			}
			runStart=runEnd=i;		
		}	
		
		prev=v[i]; 

	}

	for(int i=0;i<maxRunStart;i++)
		System.out.print(v[i]+" ");		
	
	System.out.print("(");
	for(int i=maxRunStart ;i<=maxRunEnd;i++)
		System.out.print(v[i]+" ");

	System.out.print(")");

	for(int i=maxRunEnd+1; i<v.length;i++)
		System.out.print(v[i]+" "); 
}
}