import java.awt.event.*;

public class Lauscher implements ActionListener
{
	private View myView;
	private Berechne myCalc = new Berechne();
	
	public void actionPerformed(ActionEvent ae)
	{
		String zahl = myView.getZ1();
		int z1 = Integer.parseInt(zahl);
		System.out.println("Z1: " + z1);

		zahl = myView.getZ2();
		int z2 = Integer.parseInt(zahl);
		System.out.println("Z2: " + z2);
		
		int res = myCalc.getKGV(z1, z2);
		
		myView.setRes().setText("KGV: " + res);		
	}
	
	public Lauscher(View myView)
	{
		this.myView = myView;
	}
}
