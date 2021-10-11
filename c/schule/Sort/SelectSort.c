/*
Autor      : Alex Beirith
Datum      : 24. November 2005
Programm   : SelectSort
Version    : 1.0.0
Funktionen : MAIN
Copyright  : UltraBit Interactive (c)
*/

#include <stdio.h>

int main(void)
{
    int Sort[1000];
    int n = 0, m = 0, i = 0, v = 0, r = 0, x = 0;
    int min = 0, minindex = 0, anfang = 0, temp = 0;

    for(v = 0; v < 1000; v++) Sort[v] = rand()%10000+1;

    for(i = 0; i < 999; i++)
    {
            min = Sort[anfang];
            for(m = anfang; m < 999; m++)
            {
                    if(Sort[m] < min)
                    {
                            min = Sort[m];
                            minindex = m;
                    }
            }
            temp = Sort[anfang];
            Sort[anfang] = Sort[minindex];
            Sort[minindex] = temp;
            anfang++;
    }

    for(r = 0; r < 1000; r++) printf("%i\t", Sort[r]);

    getchar(); getchar();
    return 0;
}
