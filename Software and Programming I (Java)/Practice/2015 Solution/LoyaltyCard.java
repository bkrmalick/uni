public class LoyaltyCard
{
	private int numOfCoffees;
	private double balance;
	private String number;


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

	public void collectRewards(double amount, int coffees)
	{
		balance+=amount;
		numOfCoffees+=coffees; 	
	}

	public boolean isFreeCoffeeAvailable()
	{
		return (numOfCoffees >= 9); 
	}
	
	public boolean redeemFreeCoffee()
	{
		if(!this.isFreeCoffeeAvailable())
			return false;


		numOfCoffees-=9;
		return true; 

	}

}