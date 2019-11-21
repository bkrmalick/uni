public class Student extends Person
{
    //Instance Variables
    private String programme; 
    
    
    //constructs
    public Student(String name, int year, String programme)
    {
        super(name, year); 
        
        this.programme=programme;
    }
    
    //accessors
    
    public String getProgramme()
    {
        return programme; 
    }
    
    public String toString()
    {
        return super.toString() + ", Programme: " + programme;  
    }
    
    
}