public class PingPong extends Thread
{
	private String name = "";
	private int zeit    = 0;
	
	public PingPong(String name, int zeit)
	{
		this.name = name;
		this.zeit = zeit;
	}
	
	public void run()
	{
		for(int i = 0; i < 10; i++)
		{
			System.out.println("[" + i + "] - " + name);
			
			try
			{
				Thread.sleep(zeit);
			}
			catch(InterruptedException ie)
			{
				System.out.println("" + ie.toString());
			}
		}
	}
}
