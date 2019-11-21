import java.util.Scanner; 
public class Driver 
{
     public static void main2(String[] args)
     {
         Scanner in= new Scanner(System.in); 
         final int SIZE=2; 
         
         Student[] students = new Student[SIZE];
         
         String name; 
         int year; 
         String programme; 
         
         for(int i=0; i<SIZE;i++)
         {
             
             System.out.println("\nInput student name: ");
             name = in.nextLine(); 
             
             System.out.println("Input graduation year: ");
             year = in.nextInt(); 
             in.nextLine();
             
             System.out.println("Input programme: "); 
             programme = in.nextLine();
             
             students[i] = new Student(name, year, programme); 
         }
         
         System.out.println("\n\nNames of Students in BSc ISM programme: ");
         
         for(Student s: students)
         {
             if( (s.getProgramme()).equalsIgnoreCase("Bsc ISM"))//(("BSc ISM").equals(s.getProgramme()))
             {
                 System.out.println(s); 
             }
         }
     }
     
     public static void main(String[] args)
     {
         Scanner in= new Scanner(System.in); 
         final int SIZE=3; 
         
         Person[] people= new Person[SIZE];
         
         people[0] = new Person("Abu Bakar", 1998 );
         people[1] = new Student("Albert Einstein", 1965, "Bsc Computer Science");
         people[2] = new Tutor("Eduardo", 1970, 25500); 
         
         for(Person p: people)
         {
             System.out.println(p);
         }
         
     }
    
    
}