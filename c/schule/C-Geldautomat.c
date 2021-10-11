/* Dokumentdaten
   Autor   : Alex Beirith
   Datum   : 16.10.2005
   Version : 3.0.beta
   Programm: Geldautomat
*/

#include <stdio.h>

// MAIN //
int main(void)
{

    // Geldscheine und Eingabe //
    int ein, s1 = 0, s2 = 0, s3 = 0, s4 = 0, s5 = 0, s6 = 0, s7 = 0;
    // Passwort //
    int passein, passfest = 1430, passsave = 112;
    
    // Programmstart //
    printf("Digitaler C-Geldautomat                                         Version 3.0.beta");
    printf("________________________________________________________________________________\n\n\n");
    
    printf("ID       : <Autonomy>\nLogin    : <YES>\nHelp     : <%i>\n\n", passsave);            
             
             // Passwortabfrage //
             do
             {
                  printf("Passwort : ");
                  scanf("%i", &passein);
                  
                  if(passein == passfest || passein == passsave) printf("Passwort : <KORREKT>\n\n");
                  else printf("Passwort : \a<INKORREKT>\n\n");
                  
                  // Passwort LastHelp //
                  if(passein == passsave)
                  {
                       for(passein; passein < passfest; passein++)
                       {
                              printf(".\n");
                       }
                       
                       printf("\n\aPasswort : <%i>\n", passfest);
                  }
                  
             }
             while(passein != passfest);
             
    printf("________________________________________________________________________________\n\n");
             
             // Geldeingabe //
             do
             {
                  printf("Der auszuzahlender Geldbetrag : ");
                  scanf("%i", &ein);
               
                  if(ein >= 5001) printf("\n\aZU GROSSER BETRAG\n");
                  else if(ein < 5) printf("\n\aZU KLEINER BETRAG\n");
             }
             while(ein >= 5001 || ein < 5);
                          
    printf("________________________________________________________________________________\n");
             
             // Geldausgabe //
             do
             {
                  if(ein >= 500)
                  {
                       ein -= 500;
                       s7 += 1;
                  }
                  if(ein >= 200)
                  {
                       ein -= 200;
                       s6 += 1;
                  }
                  if(ein >= 100)
                  {
                       ein -= 100;
                       s5 += 1;                  
                  }
                  if(ein >= 50)
                  {
                       ein -= 50;
                       s4 += 1;                  
                  }
                  if(ein >= 20)
                  {
                       ein -= 20;
                       s3 += 1;                  
                  }
                  if(ein >= 10)
                  {
                       ein -= 10;
                       s2 += 1;                  
                  }
                  if(ein >= 5)
                  {
                       ein -= 5;
                       s1 += 1;                  
                  }
             }
             while(ein > 4);
    
    // Ausgabe der Eingabe //
    printf("Die Auszahlung erfolgt in folgenden Scheinen\n\n");
    printf("[%i x 500 EUR]\n[%i x 200 EUR]\n[%i x 100 EUR]\n[%i x  50 EUR]\n[%i x  20 EUR]\n[%i x  10 EUR]\n[%i x   5 EUR]\n\nRESTBETRAG %i EUR", s7, s6, s5, s5, s3, s2, s1, ein);
    
    // Programmende //
    getchar(); getchar();
    return 0;
}
