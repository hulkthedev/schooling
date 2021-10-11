/*
Autor     : Alex Beirith
Datum     : 22.09.2005
Programm  : Mobiler C-Rechner
Zweck     : ÜBUNG
Copyright : UltraBit Interactive (c)(r)
*/

#include <stdio.h> /* Include Datei wird geladen "stdio.h" */

int main(void) /* Programmkopf wird gestartet, void = leer */

{

float ein, aus = 0; /* ZAHLEN - Deklaration der Variabeln "ein" (eingabe) und "aus" (ausgabe) */
char op = '+'; /* ZEICHENKETTE - Deklaration der Variabel "op" (opearator) */
    
    printf("Mobiler C-Rechner    -    Version 1.1\n"); /* Ueberschrift des Programms */
    printf("_______________________________________\n\n"); /* Trennstrich */
    
    printf("Ihre Rechnung > "); /* Hier wird die Rechnung vom User eingegeben */
    
    do /* Die "do-schleife" wird gestartet */
    {
                 scanf("%f", &ein); /* Hier wird die Rechnung in die Variabel "ein" geschrieben */
                 
                 switch(op) /* Moeglichen Rechenwege werden hier festgelegt */
                 {
                            case '+' : aus += ein; /* Bei "+" wird diese Formel aktiv */
                            break; /* Abbruch dieser Funktion */
                            
                            case '-' : aus -= ein;
                            break;
                            
                            case 'x' : /* Mögliche Operatoren 3x */
                            case 'X' :
                            case '*' : aus *= ein;
                            break;
                            
                            case ':' :
                            case '/' : aus /= ein;
                            break;
                            
                            default  : printf("\n\nDiese Operation / Zahl ist nicht bekannt!\n\n");
                 }          /* Notfalltext (oben) */
                 
    scanf("%1s", &op); /* Hier wird der Operator festgesetzt */
    
    }
    while(op != '='); /* Bei "=" wird die Schleife verlassen und das Ergebnis ausgegeben */
    
    printf("\n\nErgebnis: %.2f\n\n", aus); /* Hier wird die Antwort ausgegeben */
    printf("\nDrueken Sie eine beliebige Taste zum beenden...\n"); /* Hilfstext */
    
    getchar(); getchar(); /* Stellt die Fensteraktivitaet sicher */
    
    return 0; /* Stellt alle Werte auf Startanfang zurueck */
} /* Ende des Programms */
