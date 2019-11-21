public class OysterCard
{
	private String number; 
	private double balance;
	private int touchInZone; 
	
	public OysterCard(String number)
	{
		this.number= number;
	}
	
	public String getCardNumber()
	{
		return number; 
	}
	
	public double getBalance()
	{
		return balance; 
	}
	
	public boolean topUp(double amount)
	{
		if(amount<0)
			return false;
			
		balance+=amount;
		
		return true;
	}

	public boolean touch(int zone)
	{
		if(touchInZone == 0)
		{
			if(balance< 2.10)
				return false;
				
			touchInZone=zone; 
			return true;
		}
		else
		{
			if(touchInZone==2 && zone==2)
				balance-=1.5;
			else if((touchInZone==1 || touchInZone==2)&& (zone==1 || zone==2))
				balance-=2.1; 
		
			touchInZone=0; 
			return true; 
		}
	}

}