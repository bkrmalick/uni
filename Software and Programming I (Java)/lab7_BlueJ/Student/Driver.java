public class Driver
{

    public static void main(String[] args)
    {
        Student s1= new Student("Bakar","Naseer");

        System.out.println("Name of Student: " + s1.getName());

        s1.addQuizScore(24);
        s1.addQuizScore(56);
        s1.addQuizScore(34);

        System.out.println("Total Score: " + s1.getTotalScore());

        System.out.println("Avg: " + s1.getAverageScore());


    }

}
