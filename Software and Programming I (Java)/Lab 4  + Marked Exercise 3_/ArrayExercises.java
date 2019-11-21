import java.util.Scanner;
import java.util.Arrays; //importing class? 

public class ArrayExercises
{
    public static void main(String[] args)
    {
        final int SIZE=5;
        
        Scanner s  = new Scanner(System.in); 
        int[] arr= new int[SIZE];
        
        for (int i=0; i< arr.length ;i++) //length not operation?
        {
            System.out.print("Please input int number " + (i+1) + ":");
            arr[i] = s.nextInt(); 
        }  
        
        System.out.println("");
        
        printArr("input array:",arr);
        System.out.println("Sum of Array: " + arraySum(arr));
        System.out.println("Alt sum of Array: " + altsum(arr));
     
        
       printArr("Mirrored Array:", mirrorArray(arr));
    }
    
    private static void printArr(String prompt, int [] arr)
    {
        System.out.println(prompt + " " + Arrays.toString(arr));
    }
    
    
    private static int arraySum(int [] arr)
    {
        int sum=0;
        
        for(int i=0; i< arr.length ; i++)
        {
            sum+=arr[i];
        }
        
        return sum;
    }
    
    private static int altsum(int [] arr)
    {
        int sum=0;
        
        for(int i=0; i< arr.length ; i++)
        {
            if(i%2==0)
            {
                sum+=arr[i];
            }
            else
            {
                sum-=arr[i]; 
            }
        }
        
        return sum;
    }
    
    private static int[] mirrorArray(int[] arr)
    {
        final int SIZE_NEW = arr.length *2; 
        
        int[] arrNew= new int[SIZE_NEW];
        
        for(int i=0; i< arr.length ; i++)
        {
            arrNew[i] = arr[i];
            arrNew[arr.length + i] = arr[arr.length - i -1 ];
        }
        
        return arrNew;
    }
    
}