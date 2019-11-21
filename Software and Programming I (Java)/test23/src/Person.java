public class Person
{
    //Instance variables
    private String fullName;
    private int age;
    private double height;
    private int[] prevAges;

    private static int unix=1;

    //constructor
    public Person(String fullName, int age, double height)
    {
        this.fullName=fullName;
        this.age=age;
        this.height=height;
        //this.prevAges = new
    }

    //accessors
    public int getAge()
    {
        return age;
    }

    public double getHeight()
    {
        return height;
    }

    public String getFullName()
    {
        return fullName;
    }

    public int getUnix()
    {
        return this.unix;
    }

    //mutator
    public void changeUnix(int newUnix)
    {
        this.unix = newUnix;
    }

    public void changeNameOf(Person p)
    {
        p.fullName = "Name Hacked";
    }

}

