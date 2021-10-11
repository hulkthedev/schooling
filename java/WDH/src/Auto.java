public class Auto 
{
	private String hersteller = "";
	private int speed = 0;	
	private int ps = 0;
	
	public Auto(String hersteller, int speed, int ps)
	{
		this.hersteller = hersteller;
		this.speed = speed;
		this.ps = ps;
	}
	
	public String getHesteller()
	{
		return this.hersteller;
	}
	
	public int getSpeed()
	{
		return this.speed;
	}
	
	public int getPs()
	{
		return this.ps;
	}
}
