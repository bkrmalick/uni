public class Tutor extends Person
{
    private double salary; 
    
    public Tutor(String name, int year,double salary)
    {
        super(name, year); 
        this.salary=salary; 
    }
    
    public double getSalary()
    {
        return salary; 
    }
    
    public String toString()
    {
        return super.toString() + ", Salary: " + salary; 
    }
    
}