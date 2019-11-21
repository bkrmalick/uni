public class test
{
    public static void main(String[] args)
    {
        
for (int i = 1; i <= 16; i = i + i)
System.out.print(i - 1);
System.out.println("\n----------");
 int p = 1;
while (p <= 16) {
    System.out.print(p - 1);
    p += p;
}
System.out.println("\n----------");
 int k = 1;
while (k <= 16) {
System.out.print(k - 1);
k+=k;
}
System.out.println("\n----------");
    }
    
    
    public static String getType(int f)
{
	String s; 

	if(f>=30 && f<=300)
		s="long wave AM";
	else if(f>300 && f<=3000)
		s="medium-wave AM";
	else if(f>3000 && f<=30000)
		s="short-wave AM";
	else if(f>30000 && f<=300000)
		s="FM";
	else
		s="unknown";

	return s;		

}
public static double[] multiply(double[] v, double c)
{
	double[] v2=new double[v.length];

	int count=0;

	for(double d: v)
	{
		v2[count]=v[count++]*c; 
	}
	
	return v2; 
}

public static double avg(double[] num)
{
	double sum=0; 
	for(double n: num)
	{
		sum+=n;		
	}


	return sum/num.length;
}

public static boolean compareLast4(String s1, String s2)
{
	if(s1.length() <4 || s2.length()<4)
		return false;


	return (  s1.substring(s1.length()-4, s1.length()).equals(s2.substring(s2.length()-			4,s2.length())));	
}

public static int[] reverse(int[] v)
{
	int a; 

	for(int i=0; i<v.length/2 ; i++)
	{
		a=v[i];

		v[i]=v[v.length-1-i];

		v[v.length-1-i] = a; 
	}

	return v;
}

}