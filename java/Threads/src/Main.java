public class Main 
{
	public static void main(String[] args)
	{
		PingPong ping = new PingPong("Ping", 900);
		PingPong pong = new PingPong("Pong", 1500);
		
		ping.start();		
		pong.start();
	}
}
