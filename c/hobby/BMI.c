/* Programmdaten
   Autor      : Alex Beirith
   Datum      : Montag, 07. Nov. 2005 - 22:37
   Programm   : BMI-Rechner
   Version    : 2.9.full
   Funktionen : MAIN, EINGABE, BERECHNEN, AUSGABE
   Zweck      : Hobby, Übung
*/

/* VersionsInfo
   2.9.full
   Reelle Körpermassen-Eingaben
   Anzeige für "untergewicht", "übergewicht" und "optimal gewicht"
   Anzeige der zuvielen bzw. zuwenigen kg, genauigkeit: 90%
   FREEWARE
*/

/* BMI
BMI (Body Mass Index) ermittelt die optimale definition
zwischen Größe und Gewicht eines Menschen: [+25 Viel] [20-25 Gut] [-20 Wenig]
Achtung: Programm unterscheidet nicht zwischen FETT und MUSKELN...
         Mögliche Abweichungen sind möglich, keine 100% Garantie...
*/

#include <stdio.h>

int eingabe();
int berechnen();
int ausgabe();

float groesse = 0, gewicht = 0, bmi = 0;
float kg = 0, temppos = 0, tempneg = 0;


int main(void)
{
    char version[10] = "2.9.full";

    printf("                               B M I rechner\n");
    printf("                              Version %s\n", version);
    printf("                       ______________________________\n\n\n");

    eingabe();
    berechnen();
    ausgabe();

    getchar(); getchar();
    return 0;
}

int eingabe(void)
{
    do
    {
        printf("\n                  Ihre aktuelle Koerpergoesse (z.B. 1.65): ");
        scanf("%f", &groesse);
        if(groesse < 1.00 || groesse > 2.50) printf("\n                      GROESSE NICHT REAL!\n");
    }
    while(groesse < 1.00 || groesse > 2.50);

    do
    {
        printf("\n                 Ihr aktuelles Koerpergewicht (z.B. 60): ");
        scanf("%f", &gewicht);
        if(gewicht < 20 || gewicht > 200) printf("\n                      GEWICHT NICHT REAL!\n");
    }
    while(gewicht < 20 || gewicht > 200);
}

int berechnen(void)
{
    bmi = gewicht / (groesse * groesse);
    kg = gewicht / bmi;

    if(bmi > 25)
    {
        temppos = bmi - 25;
        temppos *= kg;
    }

    else if(bmi < 20)
    {
        tempneg = bmi - 20;
        tempneg *= (kg * -1);
    }
}

int ausgabe(void)
{
    printf("\n\n\n                       ______________________________\n");
    printf("\n                               Ihr  BMI: %.2f \n", bmi);

    if(bmi < 20) printf("\n                              >> untergewicht <<\n\a");
    else if(bmi > 25) printf("\n                              << uebergewicht >>\n\a");
    else printf("\n                             < optimal gewicht >\n");

    if(temppos != 0) printf("                                 ca. %.1f kg", temppos);
    else if(tempneg != 0) printf("                                 ca. %.1f kg", tempneg);

    printf("\n\n\n\n\n\n                  Copyright UltraBit Interactive (c) 2005\n");
}
