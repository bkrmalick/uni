
import java.util.*;
public class test
{
    public static final double PI_VALUE=3.142;
    
    public static void main(String[] args)
    {
        // int a = 10; int b = 3; boolean f = false;    
        // System.out.println((a > b ? b : a) > 3 && !f); 
        // String[] s={"B","B","C"};
        // System.out.println(getTotalUcasTariff(s));
        
        
        // double[] arr={2,-4,1};
        
        // System.out.println(Arrays.toString(multiply(3,arr)));
        
        // ComboLock lock=new ComboLock(20,15,37);
        
   
        
        // Scanner s= new Scanner(System.in); 
        
        // while(true)
        // {
                 // lock.reset();
            // lock.turnClockwise(s.nextInt()); 
            // // lock.turnClockwise(s.nextInt()); 
            // // lock.turnClockwise(s.nextInt());
            
            // System.out.println(lock.open()); 
        // }
        

    }
    
    public static void printSubstrings(String word)
{
	for(int len=1; len<=word.length() ; len++)
	{
		for(int i=0; i+len <= word.length() ; i++)
			System.out.println(word.substring(i,i+len));
	}

}
    
    public static double[] multiply(double factor, double[] vector)
{
	double[] newVector=new double[vector.length];

	for(int i=0; i<vector.length ; i++)
		newVector[i]=vector[i]*factor;

	return newVector;

}
    
    public static int getUcasTariff(String grade)
{
	int marks; 

	if(grade.equals("A*"))
		marks=56;
	else if(grade.equals("A"))
		marks=48;
	else if(grade.equals("B"))
		marks=40;
	else if(grade.equals("C"))
		marks=32;
	else if(grade.equals("D"))
		marks=24;
	else if(grade.equals("E"))
		marks=16;
	else
		marks=0;

	return marks; 			
}

public static int getTotalUcasTariff(String[] grades)
{
	int totalMarks=0;
	
	for(String grade: grades)
		totalMarks+=getUcasTariff(grade);

	return totalMarks;
}
}

