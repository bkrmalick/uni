public class test
{
    public static boolean isLeapYear(int y)
    {
    	if( ((y%4)==0 && (y%100)!=0) || ( (y%100)==0 && (y%400)==0 ) )
    		return true;
    
    	return false; 
    }
    
    
    public static void main(String[] main)
    {
        // for(int i=16; i>=2;i=i/2)
            // System.out.print(i/2);
        // System.out.println(); 
        
        // int q=16;
        // while(q>=2)
        // {
         // // q=q/2;
         // System.out.print(q=q/2);
            
        // }
        // System.out.println();
        
        // int v=16;
        
        // do
        // {
         // System.out.print(v/=2);
         
            
        // }while(v>=2);
        // System.out.println();
        
        
        int a=9;
        int b=2;
        
        System.out.println(a>8 || b>9 -a/9 && a==b); 
    }
    
    public static double getEuclideanNorm(double [] vec)
{
	int sum=0;

	for(double d: vec)
		sum+=d*d;

	return Math.sqrt(sum);

}


public static double[] getNormalised(double[] vec)
{
	double n=getEuclideanNorm(vec);
	double[] newVec=new double[vec.length];
	for(int i=0; i<vec.length ;i++)
		newVec[i]=vec[i]/n;

	return newVec;
		

}
    
}