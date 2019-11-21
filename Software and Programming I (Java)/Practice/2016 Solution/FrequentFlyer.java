public class FrequentFlyer
{
	private double points, pointsInYear;
	private int accountNumber, tier;
	
	public FrequentFlyer(int accountNumber)
	{
		this.accountNumber = accountNumber;	

	}

	public int getAccountNumber()
	{
		return accountNumber; 
	}
	
	public int getTier()
	{
		return tier;
	}

	public double getBalance()
	{
		return points;
	}

	public void addFlight(int miles)
	{
		points+=miles*(tier==1?1.25:1);	
		pointsInYear+=miles*(tier==1?1.25:1);	

	}

	public void endOfYear()
	{
		if(pointsInYear>10000)
		{
			tier=1;
			pointsInYear=0;
		}
	}	


	public boolean redeemPoints(int points)
	{
		if(this.points>=points)
		{	
			this.points-=points;
			return true;
		}
		return false;
	}

}