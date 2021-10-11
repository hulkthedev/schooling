import java.util.*;

public class Main
{
	public static void main(String[] args)
	{
		Vector myVector = new Vector();
		
		Titten titis1 = new Titten("75B", 2, 1.6);
		Titten titis2 = new Titten("80A", 2, 4.5);
		Titten titis3 = new Titten("95D", 1, 6.0);
		
		Gesicht face1 = new Gesicht("Blond", "Blau", 1.1);
		Gesicht face2 = new Gesicht("Bruenett", "Braun", 2.4);
		Gesicht face3 = new Gesicht("Schwarz", "Gruen", 2.2);
		
		Figur body1 = new Figur(1.80, 1.3);
		Figur body2 = new Figur(1.64, 2.7);
		Figur body3 = new Figur(1.75, 4.5);
		
		myVector.add(titis1);
		myVector.add(titis2);
		myVector.add(titis3);
		
		myVector.add(face1);
		myVector.add(face2);
		myVector.add(face3);
		
		myVector.add(body1);
		myVector.add(body2);
		myVector.add(body3);
		
		Iterator myIterator = myVector.iterator();
		
		while(myIterator.hasNext())
		{
			Object myObject = myIterator.next();
			System.out.println("" + myObject.getClass().getName());
		}
	}
}
