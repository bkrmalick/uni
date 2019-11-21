package lab05material;

public class RentalProperty implements ProvidesMonthlyIncome
{
    private String address;
    private int monthlyRent;

    public RentalProperty(String address, int monthlyRent)
    {
        this.address=address;
        this.monthlyRent=monthlyRent;
    }

    public double getMonthlyIncome()
    {
        return monthlyRent;
    }

}
