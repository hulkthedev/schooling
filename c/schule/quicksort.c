/*	quicksort.c -- Programm unter GPL, (c) 2003 by RTC <rtc@linux-related.de>	*/
/*	Programm implementiert Quicksort und seine Verbesserungen...			*/

#include <stdio.h>
#include <stdlib.h>
#include <time.h>

#define MAX_N 	500000
#define M	300


/* ---- Funktionsdeklarationen --------------------------------------------------------	*/
void quicksort(int a[], int l, int r);
void qsort_median(int a[], int l, int r);
void qsort_ins(int a[], int l, int r);
void qsort_ins2(int a[], int l, int r);
void qsort_comb(int a[], int l, int r);
void qsort_M(int a[], int l, int r);	//Hilfsfunktion für qsort_ins2()

void (*(sortfunk[]))(int a[], int l, int r)={quicksort, qsort_median, qsort_ins, qsort_ins2, qsort_comb};


/* ---- main() ------------------------------------------------------------------------	*/
int main(void){
	int a[MAX_N], temp[MAX_N], i, j;
	char *sortname[]={"Quicksort", "QSort/Median of three", "QSort/Insertion Sort",
			  "QSort/Insertion Sort2", "QSort/Median+Insertion"};
	clock_t start, ende;
	srand(time(NULL));

	for(i=0; i<MAX_N; ++i)
		a[i]=rand()%1000+1;

	printf(	"Benoetigte Zeiten fuer %d Elemente\n"
		"=========================================\n", MAX_N);

	for(i=0; i<5; ++i){
		for(j=0; j<MAX_N; ++j)
			 temp[j]=a[j];
		printf("Berechne...\t"); fflush(NULL);
		start=clock();
		sortfunk[i](temp, 0, MAX_N-1);
		ende=clock();
		printf("Benoetigte Zeit \"%s\": %6.3fs\n", sortname[i], (ende-start)/(double)CLOCKS_PER_SEC);
	}
	printf("\n");
    getchar(); getchar();
	return 0;
}

/* ---- quicksort() -------------------------------------------------------------------	*/
/* - sortiert ein Feld a[], indem es das Feld in jedem Durchlauf in 2 Teilfelder      -	*/
/* - aufteilt, die die Eigenschaft haben, dass alle Elemente im linken Teilfeld       -	*/
/* - kleiner als die Elemente im rechten Teilfeld sind; die Funktion ruft sich für    -	*/
/* - beide Teilfelder immer wieder selber auf, bis nur noch ein Element im Teilfeld   -	*/
/* - enthalten ist - dadurch entsteht die Sortierung ----------------------------------	*/
void quicksort(int a[], int l, int r){
	if(r>l){
		int i=l-1, j=r, tmp;
		for(;;){
			while(a[++i]<a[r]);
			while(a[--j]>a[r]);
			if(i>=j) break;
			tmp=a[i]; a[i]=a[j]; a[j]=tmp;
		}
		tmp=a[i]; a[i]=a[r]; a[r]=tmp;

		quicksort(a, l, i-1);
		quicksort(a, i+1, r);
	}

}

/* ---- qsort_median() ----------------------------------------------------------------	*/
/* - verbessertes Quicksort, welches als Trennelement das der Größe nach mittlere von -	*/
/* - 3 Zahlen nimmt und anhand dessen das Feld teilt; dadurch wird der "worst case",  -	*/
/* - nämlich dass die Teilfelder sehr unterschiedlich groß sind, rel. gut verhindert  -	*/
void qsort_median(int a[], int l, int r){
	if(r>l){
		int i=l-1, j=r, tmp;
		if(r-l > 3){ //Median of three
			int m=l+(r-l)/2;
			if(a[l]>a[m]){
				tmp=a[l]; a[l]=a[m]; a[m]=tmp;
			}
			if(a[l]>a[r]){
				tmp=a[l]; a[l]=a[r]; a[r]=tmp;
			}
			else if(a[r]>a[m]){
				tmp=a[r]; a[r]=a[m]; a[m]=tmp;
			}
		}

		for(;;){
			while(a[++i]<a[r]);
			while(a[--j]>a[r]);
			if(i>=j) break;
			tmp=a[i]; a[i]=a[j]; a[j]=tmp;
		}
		tmp=a[i]; a[i]=a[r]; a[r]=tmp;

		qsort_median(a, l, i-1);
		qsort_median(a, i+1, r);
	}
}

/* ---- qsort_ins() ------------------------------------------------------------------	*/
/* - verbessertes Quicksort, welches für kleine Teilfelder (r-l <= M) insertion sort  -	*/
/* - aufruft -> dadurch Performance-Steigerung bis 20% (abhängig von M) ---------------	*/
void qsort_ins(int a[], int l, int r){
	int i, j, tmp;
	if(r-l > M){ //Quicksort
		i=l-1; j=r;
		for(;;){
			while(a[++i]<a[r]);
			while(a[--j]>a[r]);
			if(i>=j) break;
			tmp=a[i]; a[i]=a[j]; a[j]=tmp;
		}
		tmp=a[i]; a[i]=a[r]; a[r]=tmp;

		qsort_ins(a, l, i-1);
		qsort_ins(a, i+1, r);
	}
	else{ //insertion sort
		for(i=l+1; i<=r; ++i){
			tmp=a[i];
			for(j=i-1; j>=l && tmp<a[j]; --j)
				a[j+1]=a[j];
			a[j+1]=tmp;
		}
	}
}

/* ---- qsort_ins2() ------------------------------------------------------------------	*/
/* - missachtet zunächst kleine Teilfelder (r-l <= M), um das komplette vorsortierte  -	*/
/* - Feld schlussendlich durch insertion sort zu jagen	-------------------------------	*/
void qsort_ins2(int a[], int l, int r){
	int i, j, tmp;
	qsort_M(a, l, r); //qsort_M zur Vorsortierung
	for(i=l+1; i<=r; ++i){ //insertion sort
		tmp=a[i];
		for(j=i-1; j>=l && tmp<a[j]; --j)
			a[j+1]=a[j];
		a[j+1]=tmp;
	}
}
//Hilfsfunktion für qsort_ins2()
void qsort_M(int a[], int l, int r){
	int i, j, tmp;
	if(r-l > M){ //Quicksort
		i=l-1; j=r;
		for(;;){
			while(a[++i]<a[r]);
			while(a[--j]>a[r]);
			if(i>=j) break;
			tmp=a[i]; a[i]=a[j]; a[j]=tmp;
		}
		tmp=a[i]; a[i]=a[r]; a[r]=tmp;

		qsort_M(a, l, i-1);
		qsort_M(a, i+1, r);
	}
}

/* ---- qsort_comb() ------------------------------------------------------------------	*/
/* - Quicksort, welches sowohl "median of three" als auch "insertion sort" verwendet  -	*/
void qsort_comb(int a[], int l, int r){
	int i, j, tmp;
	if(r-l > M){ //Quicksort
		i=l-1; j=r;
		if(r-l > 3){ //Median of three
			int m=l+(r-l)/2;
			if(a[l]>a[m]){
				tmp=a[l]; a[l]=a[m]; a[m]=tmp;
			}
			if(a[l]>a[r]){
				tmp=a[l]; a[l]=a[r]; a[r]=tmp;
			}
			else if(a[r]>a[m]){
				tmp=a[r]; a[r]=a[m]; a[m]=tmp;
			}
		}

		for(;;){
			while(a[++i]<a[r]);
			while(a[--j]>a[r]);
			if(i>=j) break;
			tmp=a[i]; a[i]=a[j]; a[j]=tmp;
		}
		tmp=a[i]; a[i]=a[r]; a[r]=tmp;

		qsort_comb(a, l, i-1);
		qsort_comb(a, i+1, r);
	}
	else{ //insertion sort
		for(i=l+1; i<=r; ++i){
			tmp=a[i];
			for(j=i-1; j>=l && tmp<a[j]; --j)
				a[j+1]=a[j];
			a[j+1]=tmp;
		}
	}
}
