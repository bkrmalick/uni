package lab05material;
public class Person implements HasName
{
    private String name;
    private int age;

    public Person(String name)
    {
        this.name = name;
        age = 0;
    }

    @Override
    public String getName()
    {
        return name;
    }
    public void birthday()
    {
        age++;
        System.out.println("Happy birthday!");
    }
}