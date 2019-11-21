
public class Account
{
	private static int lastNumber=0;
	private int number;
	private double balance;
	
	public Account()
	{
		number=lastNumber++; 
	}

	public int getAccountNumber()
	{
		return number;
	}
	
	public double getBalance()
	{
		return balance;
	}
	
	public boolean debit(double amount)
	{
		if(amount<0 || (balance-amount)<0)
			return false;
			
		balance-=amount;
		return true;
	}
	
	public boolean credit(double amount)
	{
		if(amount<0)	
			return false;
			
		balance+=amount;
		return true; 
	}
}