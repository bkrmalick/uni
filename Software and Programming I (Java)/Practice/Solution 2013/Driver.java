public class Driver
{
    public static void main(String[] main)
    {
// for (int i = 2; i < 12; i = i + 2)
// System.out.print(3 - i % 3);
// System.out.println();

 // int j = 2;
// while (j < 12) {
// System.out.print(3 - j % 3);
// j += 2;
// }
// System.out.println();
// int k = 2;
// while (k < 12) {
// System.out.print(3 - k % 3);
// k = k + 2;
// }
// System.out.println();

for(int i = 0; i < 5; i++) {
for(int j = 0; j < 5; j++)
if (i == j || i + j == 4)
System.out.print("O");
else
System.out.print(".");
System.out.println();
}


        
    }
    
    public static double[] square(double[] a)
{
	double[] squares=new double[a.length]; 
	
	for(int i=0; i<a.length ; i++)
		squares[i]=a[i]*a[i]; 
	
	return squares;
}
    
    public static String last4(String s)
{
	return (s.length() < 4) ? s : s.substring(s.length()-4, s.length()); 
}
    public static String getType(double s)
    {
    	String sp;
    	
    	if(s<=17)
    		sp="tropical depression";
    	else if(s<=32)
    		sp="tropical storm";
    	else if(s<=42)
    		sp="category one hurricane";
    	else
    		sp="category two+ hurricane";
    		
    	return sp; 
    }
    public static double quadAvg(double [] arr)
{
	double sum=0; 
	
	for(double d: arr)
			sum+=d*d;
			
	return Math.sqrt(sum/arr.length); 
}
  

public static int[] concatenate(int[] v, int[] w)
{
	int[] vw=new int[v.length+w.length];
	
	int count=0;
	
	for(int x:v)
		vw[count++]=x;
		
	for(int x:w)
		vw[count++]=x; 
	
	return vw; 
}  
}