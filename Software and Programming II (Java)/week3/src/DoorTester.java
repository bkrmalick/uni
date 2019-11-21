/**
 * A class to test the Door class.
 */
public class DoorTester {
    /**
     * Tests the methods of the Door class
     * @param args not used
     */
    public static void main(String[] args) {
        Door frontDoor = new Door("Front", "open");
        System.out.println("The front door is " + frontDoor.getState());
        System.out.println("Expected: open");
        Door backDoor = new Door("Back", "closed");
        System.out.println("The back door is " + backDoor.getState());
        System.out.println("Expected: closed");
// Use the mutator to change the state variable
        backDoor.setState("open");
        System.out.println("The back door is " + backDoor.getState());
        System.out.println("Expected: open");
// Use the mutator to change the name variable
        backDoor.setName("Kitchen");
        System.out.println("The back door is called " + backDoor.getName());
        System.out.println("Expected: Kitchen");

        Door sideDoor= new Door("Side","closed");
        System.out.println("Side door state: "+ sideDoor.getState());
        System.out.println("Side door name: "+ sideDoor.getName());
        sideDoor.setState("open");
        System.out.println("Side door state: "+ sideDoor.getState());

        //Q8
        //Door.state is an instance variable that exists throughout lifetime of class instance
        // newState is a parameter variable that only exists while the mutator runs and is discarded afterwards

        //Q9
        //implicit paramter is this (reference to instance of class)
        //explicit parameter is String "open"
    }
}
