
public class Basket
{
    private Item[] items;
    private int count;
    private final int SIZE;
    
    public Basket()
    {   
        SIZE=10;
    
        items=new Item[SIZE];
    }
    
    public void addItem(Item item)
    {
        if(count<SIZE)
        {
            items[count++]=item;
        }
    }
    
    public int getCount()
    {
        return count;
    }
    
    public double getTotal()
    {
        double sum=0; 
        
        for(int i=0;i<count;i++)
            sum+=items[i].getPrice(); 
            
        return sum; 
    }
    
    public void printBasket()
    {
        for(Item i:items)
            System.out.println(i); 
    }

}