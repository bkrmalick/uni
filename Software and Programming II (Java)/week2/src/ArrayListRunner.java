import java.util.ArrayList;

public class ArrayListRunner
{
    public static void main(String[] args)
    {
        ArrayList<String> names = new ArrayList<String>();
        System.out.println(names);

        names.add("Alice");
        names.add("Bob");
        names.add("Connie");
        names.add("David");
        names.add("Edward");
        names.add("Fran");
        names.add("Gomez");
        names.add("Harry");

        System.out.println("Names: " + names);

        System.out.println("First Value: " + names.get(0) + "\nLast Value: "+names.get(names.size()-1));
        System.out.println("Size: " + names.size());

        names.set(0,"Anna");
        System.out.println("Names: " + names);

        names.add(4,"Doug");
        System.out.println("Names: " + names);

        ArrayList<String> names2=new ArrayList<String>(names);
        names.remove(0);
        System.out.println("Names2: " + names2);
        System.out.println("Names: " + names);

        ArrayList<String> list = new ArrayList<String>();
        list.add("P");
        list.add("Q");
        list.add("R");
        list.set(2,"s");
        list.add(2,"T");
        list.add("u");
        System.out.println(list);

    }
}
