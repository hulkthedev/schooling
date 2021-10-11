
public class Berechne 
{
	public int getKGV(int z1, int z2)
	{
		int big = 0;
		
		if(z1 > z2) big = z1;
		else big = z2;
		
		while((big % z1) != 0 || (big % z2) != 0)
		{
			big++;
		}		
		return big;
	}
}
