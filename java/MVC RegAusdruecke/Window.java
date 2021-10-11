import javax.swing.*;
import java.awt.*;

public class Window extends JFrame
{
	private Container con;
	
	private JTextField counter;
	private JTextField output;
	private JTextField datum;
	private JButton knopf;
	
	public Window()
	{
		con = getContentPane();
		
		counter = new JTextField(10);
		output = new JTextField(10);
		datum = new JTextField(10);
		knopf = new JButton("OK");
		
		con.add(counter);
		con.add(datum);
		con.add(knopf);
		con.add(output);
		
		knopf.addActionListener(new Lauscher(this));
		
		datum.setText("Hier Datum ...");
		counter.setText("Hier Zahl ...");
		
		setTitle("Regulären Ausdrücke");
		setLayout(new FlowLayout());
		con.setBackground(Color.GRAY);
		setDefaultCloseOperation(EXIT_ON_CLOSE);
		setSize(180,150);
		setVisible(true);
	}
	
	public JTextField setAnswer()
	{
		return output;
	}
	
	public String getDatum()
	{
		return datum.getText();
	}
	
	public String getCounter()
	{
		return counter.getText();
	}
}
