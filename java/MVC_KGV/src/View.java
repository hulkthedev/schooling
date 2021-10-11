import java.awt.*;
import javax.swing.*;

public class View extends JFrame
{
	Container con = getContentPane();
	JTextField zahl1 = new JTextField(20);
	JTextField zahl2 = new JTextField(20);
	JTextField res   = new JTextField(20);
	JButton    calc  = new JButton("Berechne");
	
	public View()
	{
		setTitle("KGV @ MVC");
		setSize(250,150);
		setDefaultCloseOperation(EXIT_ON_CLOSE);
		con.setLayout(new FlowLayout());
		
		con.add(zahl1);
		con.add(zahl2);
		con.add(calc);
		con.add(res);
		
		calc.addActionListener(new Lauscher(this));
		
		setVisible(true);
	}
	
	public String getZ1()
	{
		return zahl1.getText();
	}
	
	public String getZ2()
	{
		return zahl2.getText();
	}
	
	public JTextField setRes()
	{
		return res;
	}
}
