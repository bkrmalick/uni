package q1;

public class Pair<o,t>
{
    private o one;
    private t two;

    public Pair(o one, t two)
    {
        this.one=one;
        this.two=two;
    }


    public Pair(Pair<o,t> p)
    {
        this(p.getOne(),p.getTwo());
    }

    public o getOne()
    {
        return one;
    }

    public t getTwo()
    {
        return two;
    }

    public Pair<t,o> swap()
    {
        return new Pair<t,o>(two,one);
    }

    @Override
    public String toString()
    {
        return "[ one: "+one+" , "+" two: "+two+" ]";
    }
}
