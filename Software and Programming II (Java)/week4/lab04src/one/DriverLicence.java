
package one;
import java.util.Calendar;
import java.util.GregorianCalendar;



public class DriverLicence extends IDCard
{
    private int expirationYear;

    public DriverLicence()
    {
        this("","",-1);
    }

    public DriverLicence(String name, String id, int expirationYear)
    {
        super(name, id);
        this.expirationYear=expirationYear;
    }

    public int getExpirationYear()
    {
        return expirationYear;
    }

    @Override
    public String format()
    {
        return super.format()+", Expiration Year: "+expirationYear;
    }

    @Override
    public boolean isExpired()
    {
        GregorianCalendar calendar = new GregorianCalendar();

        //System.out.println("YEAR:"+calendar.get(Calendar.YEAR));

        if(( calendar.get(Calendar.YEAR))>( expirationYear))
            return true;

            return false;
    }

    public String toString()
    {
        return super.toString() + "[Expiration Year: "+expirationYear+"]";
    }

    @Override
    public boolean equals(Object o)
    {
        if(!super.equals(o))
            return false;

        DriverLicence c= (DriverLicence) o;

        return (expirationYear==c.getExpirationYear());
    }

}
