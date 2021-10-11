/*
Autor      : Alex Beirith
Datum      : 24. November 2005
Programm   : TauschSort
Version    : 1.0.0
Funktionen : MAIN
Copyright  : UltraBit Interactive (c)
*/

#include <stdio.h>

int main(void)
{
    int Sort[1000];
    int n = 0, m = 0, v = 0, r = 0;
    int x = 0;

    for(v = 0; v < 1000; v++) Sort[v] = rand()%10000+1;

    do
    {
            for(n = 0; n < 999; n++)
            {
                    if(Sort[n] > Sort[m])
                    {
                            x = Sort[m];
                            Sort[m] = Sort[n];
                            Sort[n] = x;
                    }
            }
            m++;
    }
    while(m != 1000);

    for(r = 0; r < 1000; r++) printf("%i\t", Sort[r]);

    getchar(); getchar();
    return 0;
}
