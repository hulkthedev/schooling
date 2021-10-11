import java.awt.*;
import javax.swing.*;
import java.awt.event.*;

public class GUI extends JFrame
{
	private Container con = getContentPane();
	
	private JTextField zahl1 = new JTextField(20);
	private JTextField zahl2 = new JTextField(20);
	private JTextField res   = new JTextField(20);
	private JButton    calc  = new JButton("Berechnen");
	
	public GUI()
	{
		setTitle("GGT @ GUI");
		setSize(270,150);
		setLocation(500,750);
		setDefaultCloseOperation(EXIT_ON_CLOSE);
		
		con.setLayout(new FlowLayout());
		con.add(zahl1);
		con.add(zahl2);
		con.add(res);
		con.add(calc);
		
		setVisible(true);
		calc.addActionListener(new Lauscher());
	}
	
	class Lauscher implements ActionListener
	{
		public void actionPerformed(ActionEvent ae)
		{
			String input = "";
			int z1 = 0, z2 = 0, ggt = 0, big = 0;
			
			input = zahl1.getText();
			z1 = Integer.parseInt(input);
			
			input = zahl2.getText();
			z2 = Integer.parseInt(input);
			
			System.out.println("Eingabe 1: " + z1);
			System.out.println("Eingabe 2: " + z2);
			
			if(z1 > z2) big = z1;
			else big = z2;
			
			for(int i = 1; i < big; i++) {
				if(z1 % i == 0 && z2 % i == 0) ggt = i; }
			
			System.out.println("GGT: " + ggt);			
			res.setText("GGT: " + ggt);			
		}
	}
}
