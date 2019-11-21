package sp2.lab9;
import sp1.lab8.*;


public class Driver
{
    public static void main(String[] args)
    {
        Student s1 = new Student("Bkr",14,"cs",69);

        s1.getDetails();

        Person p1 = s1;
        p1.setAge(32);

        s1.getDetails();

        System.out.println("Expected pay: " + p1.expectedPay());
    }
}
