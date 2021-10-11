import java.io.*;
import java.util.regex.*;


public class Main 
{	
	public static void main(String[] args)
	{
		try 
		{
			InputStreamReader in = new InputStreamReader(System.in);
			BufferedReader buf = new BufferedReader(in);
			
			System.out.println("Hier eingeben: ");
			String lal = buf.readLine();
	
			String reg ="^[0-9]{2}$";
			Pattern pattern = null;
			
			try
			{
				pattern = Pattern.compile(reg);
			}
			
			catch(PatternSyntaxException pe)
			{
				
			}
			
			if(lal==null) System.exit(0);
		
			Matcher matcher=pattern.matcher(lal);
		
			if(matcher.matches())
			{ 
				System.out.println("SIEG");
			}
		} 
		catch(IOException e) 
		{
			e.printStackTrace();
		}
	}
}