/* Autor   : Alex Beirith
   Datum   : 28.09.2005
   Version : 2.0.full KI 1.0
   Programm: Strich-Game-Vs-PC.c
   Player  : 1 vs PC
*/

#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main(void)
{

int ein;
int spieler = 1;
int striche = 21;
int z = 0;
int seed = 0;
int str = 0;

    // Ueberschrift //
    printf("Strich Game '21 Game\nVersion 2.0.full - KI 1.0");
    printf("\n______________________________________________________\n\n\n");
    
    // Zufallsgenerator //
    time_t tim;
    seed=time(&tim);
    srand(seed);
        
    do
    {
           z = rand()%4+1;                      

           // Computer Intelligenz (KI 1.0) //
           if     (striche == 5) striche -= 4;
           else if(striche == 4) striche -= 3;
           else if(striche == 3) striche -= 2;
           else if(striche == 2) striche -= 1;
           else                  striche -= z;
           
           // Computer Pruefung //
           if(striche == 1)
           {
           printf("\n\nCOMPUTER - GEWONNEN!\n\n");
           break;
           }
           
           // Grafische Strich-Darstellung und Berechnung //
           do
           {
           printf("|");
           str += 1;
           }
           while(str < striche);
           str = 0;
           
           //Nummerische Unterstuetzung der Grafischen Darstellung //
           printf(" - %i Striche\n", striche);
           
           // Spieler Eingabe und Ueberpruefung //
           do
           {
           printf("\nSpieler Eingabe: ");
           scanf("%i", &ein);
                         
           if(ein <= 0 || 4 < ein) printf("\n- FALSCHE ZAHL -\n");
           }
           while(ein < 1 || ein > 4);
           
           // Gewinnbedienung und Strichabzug //
           striche -= ein;
           if(striche == 1) printf("\n\nSPIELER - GEWONNEN!\n\n");
    }
    while(striche > 1);
    
    getchar(); getchar();
    return 0;
}
