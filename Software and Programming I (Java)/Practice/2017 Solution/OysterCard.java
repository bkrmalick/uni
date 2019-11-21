public class OysterCard
{
	private String number;
	private double balance, dailyCharge;
	private int lastTouchDate, lastTouchTime; 

	public OysterCard(String number)
	{
		this.number=number; 
		lastTouchDate=lastTouchTime=-1;

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
		if( amount<0)
			return false;
	
		else
		{
			balance+=amount;
			return true;
		}
	
	}

	public boolean touch(int date, int time)
	{
		if(balance<1.5)
			return false;

		if((time-lastTouchTime)<60 && date==lastTouchDate && lastTouchDate!=-1)
			return true;

		if(date>lastTouchDate)
			dailyCharge=0;

		if(dailyCharge>=4.50)
			return true;

		balance-=1.5;
		dailyCharge+=1.5;

		lastTouchDate=date;
		lastTouchTime=time;
		
		return true;
	}


}