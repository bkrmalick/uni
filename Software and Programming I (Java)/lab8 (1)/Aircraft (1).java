public class Aircraft
{
    
    //instance variables
    private int id;
    private String airportCode;
    //class variables
    private static int lastAssignedId=0;
    
    public Aircraft()
    {
      this.lastAssignedId++;
      this.airportCode=null; 
      this.id=this.lastAssignedId;
    }
    
    public int getID()
    {
        return id;
    }
    
    public boolean takeOff()
    {
        if(airportCode != null)
        {
            airportCode = null; 
            return true;
        }
        
        return false;
    }
    
    public boolean land(String airport)
    {
        if(airportCode==null)
        {
            airportCode=airport;
            return true; 
        }
        
        return false; 
    }
    
    public String getAirportCode()
    {
        
        return (airportCode == null)? " is in flight" : " is at "+airportCode; 
    }
    
    public static int getNumberOfAircraft()
    {
        return lastAssignedId;
    }
}