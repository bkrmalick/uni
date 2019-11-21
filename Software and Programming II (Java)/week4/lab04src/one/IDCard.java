package one;

public class IDCard extends Card
{
    private String id;

    public IDCard()
    {
        this("","");
    }

    public IDCard(String name, String id)
    {
        super(name);
        this.id=id;
    }

    @Override
    public String format()
    {
        return super.format()+", ID number: "+id;
    }

    @Override
    public String toString()
    {
        return super.toString()+"[id="+id+"]";
    }

    public String getID()
    {
        return id;
    }

    @Override
    public boolean equals(Object o)
    {
        if(!super.equals(o))
            return false;

        IDCard c= (IDCard) o;

        return (this.getID().equals(c.getID()));
    }


}
