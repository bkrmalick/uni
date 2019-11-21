public class test
{
    
    public static void main(String[] args)
    {
        // int a = 10; int b = 0;
        // System.out.println(7 < a || a == b && b > 9 - a / b);
        // double[] a= {2,4,4,4,7,9};
        
        // System.out.println(getStandardDeviation(a));
        
        
        int []data={1,3,2,4};
        String[] labels={"One", "three","two","four"};
        
        printBar(data, labels);
    }
    public void printDegreeClassification(int avg)
{
	//int avg=s.getAverage();
	String c;
	
	if(avg>=70)
		c="First";
	else if(avg>=60)
		c="Upper Second";
	else if(avg>=50)
		c="Lower Second";
	else if(avg>=40)
		c="Third";
	else if(avg>=30)
		c="Pass";
	else
		c="Fail";

	System.out.println(c);
}


public static double getMean(double[] vec)
{
	double sum=0;

	for(double d: vec)
		sum+=d;
	return sum/vec.length;
}


public static double getStandardDeviation(double[] vec)
{
	double a=getMean(vec);

	double sum=0;

	for(double d:vec)
		sum+=(d-a)*(d-a);

	return Math.sqrt(sum/vec.length);
}


public static void printBar(int[] data, String[] labels)
{
	int maxLabelLen=0;
	int maxData=-1;

	for(int i:data)
		maxData=(i>maxData)?i:maxData;

	for(String s:labels)
		maxLabelLen=(s.length() > maxLabelLen)?s.length():maxLabelLen;
	
	for(int i=0;i<labels.length;i++)
	{
		for(int j=0;j<(maxLabelLen-labels[i].length());j++)
			System.out.print(" ");

		System.out.print(labels[i]+" ");

		int nStr=(data[i]*40)/maxData;

		for(int j=0;j<nStr;j++)
			System.out.print("*");

		System.out.println("");


	}


}


}


