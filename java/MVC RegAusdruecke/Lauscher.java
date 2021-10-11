import java.awt.event.*;
import java.util.regex.*;

public class Lauscher implements ActionListener
{
	private Window window;
	Pattern pattern = null;
	
	public void actionPerformed(ActionEvent ae)
	{
		String datum_ausdruck = "^[0-9]{2}-[a-z,A-Z]{3}-[0-9]{2,4}$";
		String counter_ausdruck = "^[0-9]{3}\\.[0-9]{2}$";
		
		String counter = window.getCounter();
		String datum = window.getDatum();
		
		try
		{
			pattern = Pattern.compile(datum_ausdruck);
		}		
		catch(PatternSyntaxException pe) { System.out.println("Fehlerhaftes Muster"); }	
		
		if(datum == null) System.exit(0);
		Matcher matcher = pattern.matcher(datum);
		
		if(matcher.matches())
		{
			window.setAnswer().setText("Stimmt!");
		}
		else window.setAnswer().setText("Stimmt nicht!");
	}

	public Lauscher(Window window)
	{
		this.window = window;
	}
}