/* BMI mit Konsoleneingabe und Wrapperklasse */
import java.io.*;

public class Main 
{
	public static void main(String[] args) 
	{
		String input = "";
		double gew = 0.0, gro = 0.0, bmi = 0.0;
		
		InputStreamReader isr = new InputStreamReader(System.in);
		BufferedReader    buf = new BufferedReader(isr);
		
		try
		{
			System.out.print("Ihre Groesse: ");
			input = buf.readLine();
			gro = Double.parseDouble(input);
			/* gro = Integer.parseInt(input); <== INTEGER */
			
			System.out.print("Ihr Gewicht: ");
			input = buf.readLine();
			gew = Double.parseDouble(input);
			/* gew = Integer.parseInt(input); <== INTEGER */
			
			bmi =  gew / (gro * gro);
			bmi *= 100;
			bmi =  (int)bmi / 100;
			
			if(bmi >= 25.1) System.out.println("Zu Fett! [" + bmi + "]");
			else if(bmi <= 19.9) System.out.println("Zu Dünn! [" + bmi + "]");
			else System.out.println("Optimal! [" + bmi + "]");
			
		}
		catch(IOException a)
		{
			System.out.println("" + a.toString());
		}
	}
}
