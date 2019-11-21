package sp1.lab8;

public class Student extends Person
{
    private String dept;
    private int marks;


    public Student(String name, int age, String dept, int marks)
    {
        super(name, age);

        this.dept = dept;
        this.marks = marks;
    }

    public void getDetails()
    {
        super.getDetails();

        System.out.println("Department: " + dept);
        System.out.println("Marks: " + marks);
    }

    public int expectedPay()
    {
        return marks*24;
    }

}
