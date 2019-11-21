import java.util.*;


public class test
{
    public static void main(String[] args)
    {
        //int a = 10; int b = 3; boolean f = true;
        //System.out.println(a == b || f && b > 6 - a / b ? a : b);
        
        // printTrainDelay(615,616);
        
// int k = 1;
// for (int i = 9; i > 2; i = i - 3) {
// k = k + i;
// System.out.print(k - 1);
// }
// System.out.println("\n------------------------------");
 // k = 1;
// int v = 9;
// while (v > 2) {

// k = k + v;
// System.out.print(k - 1);
// v = v - 3;
// }
// System.out.println("\n------------------------------");
 // k = 1;
// int j = 9;
// do {

// k = k + j;
// System.out.print(k - 1);
// j = j - 3;
// } while (j > 2);

    // double[] arr={-2,-4,9};
    
    // System.out.println(taxicabNorm(arr));
    
    // double[] arr={-2,-4,9};
    // double[] arr2={3,-2,4};
    
    // System.out.println(Arrays.toString(difference(arr,arr2)));
    
    String[] countr={"Pakistan","India","Bangladesh","Nepal"};
    int[] popul={308921,2932,92329,89218};
    
    printTable(countr, popul);

    }
    
    public  void printTrainDelay(int sched, int est)
    {
	int x=est-sched;

	if(x==0)
		System.out.println("the train is on time");
	else if(x==1)
		System.out.println("the train is delayed by 1 minute");
	else
		System.out.println("the train is delayed by "+x+" minutes.");

	if(x>30)
		System.out.println("claim compensation");
    }
    
    public double taxicabNorm(double[] vec)
    {
    	double norm=0;
    
    	for(double value:vec)
    		norm+=(value<0?-value:value);
    
    	return norm;
    
    }
    
    public static double[] difference(double[] vec1, double[] vec2)
    {
    	double[] vecDiff=new double[vec1.length];
    	for(int i=0; i<vec1.length ; i++)
    		vecDiff[i]=vec1[i]-vec2[i];
    
    	return vecDiff;
    }
    
    public static void printTable(String[] countries, int[] populations)
{
	int maxLen=0, maxPopLen=0;
	
	for(String s: countries)
		maxLen=(s.length()>maxLen)?s.length():maxLen;
	
	for(int p:populations)
		maxPopLen=((p+"").length() > maxPopLen)?(p+"").length():maxPopLen;

	for(int i=0;i<populations.length;i++)
	{
		System.out.print(countries[i]);

		for(int j=0;j<maxLen-countries[i].length();j++)
			System.out.print(" ");

		System.out.print(" | ");

		for(int j=0;j<maxPopLen-(populations[i]+"").length();j++)
			System.out.print(" ");

		System.out.println(populations[i]);
	}

}

    
}