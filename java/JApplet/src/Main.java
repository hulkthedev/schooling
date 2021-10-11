import java.awt.*;
import javax.swing.*;
import java.awt.event.*;

public class Main extends JApplet
{
	Container con;
	
	JTextField zahl;
	JTextField prim;
	JButton calc;
	
	public void init()
	{
		System.out.println("Applet initialisiert");
		
		con = getContentPane();
		con.setLayout(new FlowLayout());
		con.setBackground(Color.GRAY);
	}
	
	public void start()
	{
		System.out.println("Applet gestartet!");
		
		zahl = new JTextField(20);
		prim = new JTextField(20);
		calc = new JButton("OK");
				
		con.add(zahl);
		con.add(calc);
		con.add(prim);
		
		calc.addActionListener(new Lauscher());
	}
	
	public void stop()
	{
		System.out.println("Applet pausiert!");
	}
	
	public void destroy()
	{
		System.out.println("Applet geschlossen!");
	}
	
	class Lauscher implements ActionListener
	{
		public void actionPerformed(ActionEvent e) 
		{
			String input = zahl.getText();
			int zahl1 = Integer.parseInt(input);
			boolean isPrim = false;
			
			for(int i = 2; i < zahl1; i++)
			{
				if(zahl1 % i == 0)
				{
					isPrim = true;
					break;
				}
			}
			if(isPrim == true) prim.setText("[" + zahl1 + "] ist keine Primzahl!");
			else prim.setText("[" + zahl1 + "] ist eine Primzahl!");
		}		
	}
}
