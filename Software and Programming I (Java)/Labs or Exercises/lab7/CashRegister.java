public class CashRegister
{
    //instance variables
    private int count;
    private double[] items;
    
    private static final int LIMIT=3; 
  
    //methods
    
    //constructor
    public CashRegister()
    {
         count=0;
         items=new double[LIMIT];
    }
    
    
    //accessors
    public int getCount()
    {
        return count;
    }
    
    public double getTotal()
    {
        double total = 0; 
        
        for(int i=0;i<count;i++)
        {
            total=total+items[i]; 
            
        }
        return total;
    }
    
    
    //mutator
    public void addItem(double price)
    {
        if(count < LIMIT)
        {
            items[count]=price;
            count++;
        }
        else
        {
            System.out.println("cannot exceed limit");
        }
    }
    
    public void clear()
    {
        count=0; 
        
        for(int i=0;i<count;i++)
        {
            items[i]=0;   
        }
    }
    
    public void undo()
    {   
        count--;
        items[count]=0;
    }
    
}