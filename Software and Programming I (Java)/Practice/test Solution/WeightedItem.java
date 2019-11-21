public class WeightedItem implements Item
{
	private double pricePerKg, weight; 
	
	public WeightedItem(double pricePerKg, double weight)
	{
		this.pricePerKg=pricePerKg;
		this.weight=weight;
	}
	
	public double getPrice()
	{
		return weight*pricePerKg;
	}
	
	public double getPricePerKg()
	{
		return pricePerKg;
	}

	public double getWeight()
	{
		return weight;
	}	
	
	public String toString()
	{
		return "Weighted Item - weight: " +weight + ", Price Per Kg: "+pricePerKg; 
	}

}