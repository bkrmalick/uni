public class CodedItem implements Item
{
	private String code;
	private double price;
	
	
	public CodedItem(String code, double price)
	{
		this.code=code;
		this.price=price;
	}
	
	public String getCode()
	{
		return code;
	}
	
	public double getPrice()
	{
		return price;
	}
	
	public String toString()
	{
		return "Coded Item - Code: "+code+", Price: "+price;
	}

}