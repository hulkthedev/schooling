public class Hellis 
{
	private String model = "";
	private int speed = 0;	
	private int cost = 0;
	
	public Hellis(String model, int speed, int cost)
	{
		this.model = model;
		this.speed = speed;
		this.cost = cost;
	}
	
	public String getModel()
	{
		return this.model;
	}
	
	public int getSpeed()
	{
		return this.speed;
	}
	
	public int getCost()
	{
		return this.cost;
	}
}
