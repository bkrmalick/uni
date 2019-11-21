
import java.util.Scanner; 
import java.util.Random;

public class Driver
{
    public static void main(String[] args)
    {
        Scanner s = new Scanner(System.in);
        String[] airportCodes= {"GTK","LHR","LGW","AHU"};
        
        
        Aircraft a1=new Aircraft();   
        Aircraft a2=new Aircraft();
        Aircraft a3=new Aircraft();
        
        System.out.println("\nAircraft with ID " + a1.getID() + " " +a1.getAirportCode());
        System.out.println("Aircraft with ID " + a2.getID() + " " +a2.getAirportCode());
        System.out.println("Aircraft with ID " + a3.getID() + " " +a3.getAirportCode());
        
        
        System.out.print("\nDelivering to random airports..."); 
        //System.out.print("Input airport codes for the aircraft with ID "+a1.getID()+":");
        a1.land(getRandomAirportCode(airportCodes));
        
        //System.out.print("Input airport codes for the aircraft with ID "+a2.getID()+":");
        a2.land(getRandomAirportCode(airportCodes));
        
        //System.out.print("Input airport codes for the aircraft with ID "+a3.getID()+":");
        a3.land(getRandomAirportCode(airportCodes));

        
        
        
        System.out.println("\nAircraft with ID " + a1.getID() + " " +a1.getAirportCode());
        System.out.println("Aircraft with ID " + a2.getID() + " " +a2.getAirportCode());
        System.out.println("Aircraft with ID " + a3.getID() + " " +a3.getAirportCode());
        
        
        
        
        
        System.out.println("\nAttempting to takeoff " + (a1.getID()) + "...");
        a1.takeOff();
        System.out.println("Aircraft with ID " + a1.getID() + " " +a1.getAirportCode());
        
        
    
        System.out.println("\nTotal number of Aircrafts in the system: "+ Aircraft.getNumberOfAircraft());
    }
    
    
    private static String getRandomAirportCode(String[] codes)
    {
        Random r=new Random();
        
        return codes[r.nextInt(codes.length)];
    }
    
}