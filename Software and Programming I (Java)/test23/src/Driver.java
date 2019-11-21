public class Driver
{
    public static void main(String[] args)
    {
        Person p1=new Person("Abu Bakar Naseer",20,164);

        System.out.println(p1.getFullName()+ " has unix " + p1.getUnix());

        p1.changeUnix(2);

        Person p2= new Person("Sarah Naseer", 22, 160);

        System.out.println(p2.getFullName() + " has unix " + p2.getUnix() ) ;

        p2.changeNameOf(p1);

        System.out.println(p1.getFullName()+ " has unix " + p1.getUnix());


        Location house=new Location();

        house.printAll();


        //int[] arr = new int[2];

//
       // arr[0]=1;
       // arr[1]=23;
//
//
       // for(int x:arr)
       // {
       //     System.out.println(x);
       // }
    }
}
