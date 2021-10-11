/*
Autor      : Alex Beirith
Datum      : 24. November 2005
Programm   : BubbleSort
Version    : 1.0.0
Funktionen : MAIN
Copyright  : UltraBit Interactive (c)
*/

#include <stdio.h>

int main(void)
{
    int Sort[1000];
    int i = 0, n = 0, v = 0, r = 0;
    int x = 0, y = 0;

    for(v = 0; v < 1000; v++) Sort[v] = rand()%10000+1;

    for(i = 0; i < 1000; i++)
    {
            for(n = 0; n < 999; n++)
            {
                    if(Sort[n] > Sort[n+1])
                    {
                            x = Sort[n];
                            y = Sort[n+1];
                            Sort[n] = y;
                            Sort[n+1] = x;
                    }
            }
    }

    for(r = 0; r < 1000; r++) printf("%i\t", Sort[r]);

    getchar(); getchar();
    return 0;
}
