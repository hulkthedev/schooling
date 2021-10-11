/* 
Autor           : Alex Beirith
Version / Datum : 1.0.0 / 01.12.2005 
ProgrammName    : Passwort
Funktionen      : MAIN
*/

#include <stdio.h>
#include <string.h>

int main (void)
{
	char passwort[5] = "alex";
	char eingabe[5];
	int x = 0, y;

	do
	{
		printf("\nBitte geben Sie das Passwort ein: ");
		scanf("%s", eingabe);
		y = strcmp(passwort,eingabe);

		if(y == 0)
		{ 
			printf("\nZugang genehmigt. Willkommen Alex!!\n");
			break;
		}
		
		else printf("\nZugang verweigert\n");
		x++;    
	}   
	while(x < 3);

    getchar(); getchar();
    return 0;
}

