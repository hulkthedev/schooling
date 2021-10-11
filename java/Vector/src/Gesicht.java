public class Gesicht
{
	private String haarfarbe  = "";
	private String augenfarbe = "";
	private double note       = 0.0;
	
	public Gesicht(String haarfarbe, String augenfarbe, double note)
	{
		this.haarfarbe = haarfarbe;
		this.augenfarbe = augenfarbe;
		this.note = note;
	}
	
	public String getHaarfarbe()
	{
		return this.haarfarbe;
	}
	
	public String getAugenfarbe()
	{
		return this.augenfarbe;
	}
	
	public double getNote()
	{
		return this.note;
	}
}
