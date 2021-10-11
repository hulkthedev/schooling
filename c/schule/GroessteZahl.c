/* Autor   : Alex Beirith
   Datum   : 30.09.2005
   Version : 1.0.0
   Programm: Groesste Zahl
*/

#include <stdio.h>

int max(int intValue1, int intValue2, int intValue3);

int main(void)
{

int zahl1, zahl2, zahl3, ergebnis;


    printf("Ermittlung der groesten Zahl\n_________________________________________\n\n\n");
    
    printf("\nBitte die erste Zahl eingeben: ");
    scanf("%i", &zahl1);
    
    printf("\nBitte die zweite Zahl eingeben: ");
    scanf("%i", &zahl2);
    
    printf("\nBitte die dritte Zahl eingeben: ");
    scanf("%i", &zahl3);
    
    ergebnis = max(zahl1, zahl2, zahl3);
    printf("\n\n\n\nDie Groesste Zahl ist: %i\n\n\n\n\n\n\n\n\nDruecken Sie eine beliebige Taste zum verlassen...", ergebnis);
    
    getchar(); getchar();
    
    return max(zahl1, zahl2, zahl3);
    
}

int max(int intValue1, int intValue2, int intValue3)
{
    if(intValue1 > intValue2)
    {
                 if(intValue1 > intValue3) return intValue1;
                 else if(intValue2 > intValue3) return intValue2;
    }
    return intValue3;
}
