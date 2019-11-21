public class LoyaltyCard
{
	private String number;
	private double balance;

	public LoyaltyCard(String number)
	{
		this.number=number;
	}

	public String getCardNumber()
	{
		return number;
	}


	public double getBalance()
	{
		return balance;
	}


	public void collect(double amount, int bags)
	{
		balance+=2*amount + bags;

	}

	public double redeem(int points)
	{
		if(points<500 || points>balance) //(double) points
			return 0;

		balance-=points;
		
		return 0.01*points/2.0; 
	}
}
