
import java.util.Arrays; 
public class Sorting
{
    public static void main(String [] args)
    {
        int[] arr = {5,4,3,2,1};
        
        //SelectionSort(arr); 
        //insertionSort(arr); 
        mergeSort(arr,0, arr.length-1); 
        System.out.println(Arrays.toString(arr)); 
        System.out.println(Arrays.toString(mergeSort(arr,0, arr.length-1))); 
        
    }
    
    public static void SelectionSort(int[] A)
    {
        for(int i=0; i<A.length-1 ; i++)
        {
            int ind = nextSmallest(A, i); 
            
            int tmp = A[i]; 
            A[i] = A[ind]; 
            A[ind] = tmp; 
        }
    }
    
    public static int nextSmallest(int[] A, int i)
    {
        int min=i;
        
        for(int j=i+1; j< A.length  ;  j++)
        {
            if(A[j] < A[min])
                min=j; 
        }
        
        return min; 
    }
    
    public static void insertionSort(int [] A)
    {
        for(int i =0 ; i < A.length ;i ++)
        {
            triggerSwap(A,i); 
        }
    }
    
    public static void triggerSwap(int[] A, int i)
    {
        int j=i; 
        
        while(j>0 && A[j] <= A[j-1])
         {
        
            int tmp=A[j-1]; 
            A[j-1] = A[j]; 
            A[j] = tmp; 
            
            
               j--; 
          }
    }
    
    public static int[] mergeSort(int [] A,int start, int end)
    {
        if(end-start > 0)
        {
            int middle = (end+start)/2; 
            
            int[] C= new int[(middle-start)+1 + (end-middle-1)+1];
            
            mergeSort(A,start, middle); 
            mergeSort(A,middle+1,end);
            
            C= merge(A,A,start,middle,middle+1,end);
            
            
        }
        
        return A; 
    }
    
    public static int [] merge(int[] A, int [] B, int sa, int ea, int sb, int eb)
    {
        int size =(ea-sa)+1 + (eb-sb)+1; 
        int[] C = new int[size]; 
        
        int ca=sa, cb=sb,cc=0; 
        
        for( int i =0; i< size; i++)
        {
            if(cb==eb+1)
            {
                C[cc] = A[ca];
                ca++; cc++;
            }
            
            else if(ca==ea+1)
            {
                C[cc] = B[cb];
                cb++; cc++;
            }
            
            
            else if(A[ca] < B[cb])
            {
                C[cc] = A[ca]; 
                cc++; ca++; 
            }
            else
            {
                C[cc] = B[cb]; 
                cc++; cb++; 
            }
        }
        
        for(int i=sa, c=0; i<=eb;i++, c++)
        {
            A[i]=C[c]; 
        }
        
        return C; 
        
    }
    
}