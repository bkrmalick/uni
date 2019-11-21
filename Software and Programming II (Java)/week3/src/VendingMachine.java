/**
 * Represents a vending machine
 * A vending machine accepts tokens and dispenses cans
 * A vending machine has a fixed size in terms of how many cans it can store
 *
 * @author Abu Bakar Naseer
 * @version 1.0
 * @since 2019-10-21
 */

public class VendingMachine
{
    /**
     * tokens the current instance has, intialised to 0 by default
     */
    private double tokens;
    /**
     * number of cans that the current instance has, intialised to 10 unless stated otherwise
     */
    private int cans;
    /**
     * Limit of cans that the vending machine can store
     */
    private static int canLimit=50;

    public VendingMachine()
    {
        this(10);
    }

    public VendingMachine(int cans)
    {
        this.cans=cans;
        this.tokens=0;
    }

    /**
     * Inserts single token into vending machine instance
     */
    public void insertToken()
    {
        if(cans>=0)
        {
            tokens++;
            this.dispenseCan();
        }
    }

    /**
     * Fills up vending machine with more cans
     * @param n no. of cans to add
     * @return whether cans successfully added
     */
    public boolean fillUp(int n)
    {
        if((cans+n)<=canLimit)
        {
            cans+=n;
            return true;
        }

        return false;
    }

    /**
     * Dispenses a single unit of can from the vending machine
     */
    public void dispenseCan()
    {
        cans--;
    }

    public double getTokenCount()
    {
        return tokens;
    }

    public int getCanCount()
    {
        return cans;
    }



}
