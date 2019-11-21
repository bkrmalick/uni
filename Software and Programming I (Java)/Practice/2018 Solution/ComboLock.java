
public class ComboLock
{
    private int[] key;
    private int count;
    private int[] code;

    public ComboLock(int k1, int k2, int k3)
    {
        key=new int[3];
        key[0]=k1;
        key[1]=-k2;
        key[2]=k3;

        
        count=0;
        code=new int[3]; 
    }

    public void reset()
    {
        count=0;    
    }   

    public void turnClockwise(int position)
    {
        if(count<3)
        {
            code[count++]= +position; 
        }
        else
        {
            code[0]=code[1];
            code[1]=code[2];
            code[2]= +position;

        }
    
    }


    public void turnCountClockwise(int position)
    {
        turnClockwise(-position);

    }

    public boolean open()
    {
        return ( count==3 && code[0]==key[0] && code[1]==key[1] && code[2]==key[2] );
    }

}
