public class Titten 
{
	private String bh   = "";
	private int anzahl  = 0;
	private double note = 0.0;
	
	public Titten(String bh, int anzahl, double note)
	{
		this.bh = bh;
		this.anzahl = anzahl;
		this.note = note;
	}
	
	public String getBH()
	{
		return this.bh;
	}
	
	public int getAnzahl()
	{
		return this.anzahl;
	}
	
	public double getNote()
	{
		return this.note;
	}
}
