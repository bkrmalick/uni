package sp1.lab8;
import static java.lang.System.out;

public class Person
{
    private String name;
    private int age;

    private double height;
    private double weight;
    private String address;

    private static int n=0;


    public Person(String name, int age)
    {
        this.name = name;
        this.age= age;

        n++;
    }

    public Person()
    {
        n++;
    }

    public void getDetails()
    {
        out.println("Name: " + name);
        out.println("Age : " + age);
    }

    public void setAge(int age)
    {
        this.age = age;
    }

    public static int getN()
    {
        return n;
    }

    public int expectedPay()
    {
        return -1;
    }

}
