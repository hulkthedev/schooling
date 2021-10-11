/* Autor   : Alex Beirith
   Datum   : 06.10.2005
   Version : 1.0.alpha
   Programm: Strich-Game-2Player.c
   Player  : 2
*/

#include <stdio.h>

int main(void)
{

int ein;
int striche = 21;
int spieler = 1;

    // Ueberschrift //
    printf("Strich '21 Game\nVersion 1.0.alpha");
    printf("\n___________________________________________________\n\n");
    
    // Spieler #1 Eingabe, Ueberpruefung und Berechnung //
    do
    {
          if(spieler == 1)
          {
                     do
                     {
                     // Eingabe //
                     printf("\n\nSpieler #1\nIhre Eingabe: ");
                     scanf("%i", &ein);
                     
                     // Ueberpruefung //    
                     if(ein <= 0 || 4 < ein) printf("\n- FALSCHE ZAHL -\n");
                     
                     // Berechnung //    
                     striche -= ein;
                     printf("\nNoch %i Strich(e) uebrig...\n", striche);
                     if(striche == 1) printf("\n\nSPIELER #1 - GEWONNEN!\n\n");
                     }
                     while(ein <= 0 || 4 < ein);
                     
          spieler += 1;                     
          }
          // Spieler #2 Eingabe, Ueberpruefung und Berechnung //         
          else
          {
                    do
                    {
                    // Eingabe //
                    printf("\n\nSpieler #2\nIhre Eingabe: ");
                    scanf("%i", &ein);
                    
                    // Ueberpruefung //         
                    if(ein <= 0 || 4 < ein) printf("\n- FALSCHE ZAHL -\n");
                    
                    // Berechnung //          
                    striche -= ein;
                    printf("\nNoch %i Strich(e) uebrig...\n", striche);
                    if(striche == 1) printf("\n\nSPIELER #2 - GEWONNEN!\n\n");                             
                    }
                    while(ein <= 0 || 4 < ein);
                    
          spieler -= 1;                    
          }
    }
    while(striche > 1);
    
    getchar(); getchar();
    return 0;
}
