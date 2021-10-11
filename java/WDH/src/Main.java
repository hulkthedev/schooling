import java.awt.*;
import java.awt.event.*;

import javax.swing.*;

public class Main extends JApplet
{
	Container con = getContentPane();
	
	JTextField tf1 = new JTextField(12);
	JTextField tf2 = new JTextField(12);
	
	JLabel l1 = new JLabel("Zahl 1:");
	JLabel l2 = new JLabel("Zahl 2:");
	JLabel l3 = new JLabel("");
	
	JButton b1 = new JButton("OK");
	
	
	public void init()
	{
		System.out.println("Initialisiert");
		
		con.setLayout(new FlowLayout());
		setSize(170,150);
		setVisible(true);
	}
	
	public void start()
	{
		System.out.println("Gestartet");
		
		con.add(l1);
		con.add(tf1);
		con.add(l2);
		con.add(tf2);
		con.add(l3);
		con.add(b1);
		
		b1.addActionListener(new Lauscher());
	}
	
	public void stop()
	{
		System.out.println("Pausiert");
	}
	
	public void destroy()
	{
		System.out.println("Beendet");
	}
	
	class Lauscher implements ActionListener
	{
		public void actionPerformed(ActionEvent e) 
		{
			String input = tf1.getText();
			double z1 = Double.parseDouble(input);
			
			input = tf2.getText();
			double z2 = Double.parseDouble(input);
			
			l3.setText("(" + z1 + " * " + z2 + " = " + (z1 * z2));
		}		
	}
}
