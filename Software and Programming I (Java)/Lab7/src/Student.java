public class Student
{
    //instance variables
    private String name;
    private double totalScore;
    private int n;
    private static int x;

    public Student(String firstName, String lastName)
    {
        this.name = firstName + " " + lastName;
        this.totalScore=0;
        this.n=0;
    }

    public String getName()
    {
        return name;
    }

    public void addQuizScore(int score)
    {
        totalScore += score;
        n++;
    }

    public double getTotalScore()
    {
        return totalScore;
    }

    public double getAverageScore()
    {
        return totalScore/n;
    }

    public static int getX()
    {
      return  x;
    }

}
