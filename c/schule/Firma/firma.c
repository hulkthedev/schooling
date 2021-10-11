/*
Autor           : Alex Beirith
Version / Datum : 3.5.a / 07.06.2006 
ProgrammName    : firma.c
*/

#include <stdio.h>
#include <stdlib.h>
#include <string.h>

	// Deklaration der Dateinamen & Links //
	char programmNameString[80] = "firma.c",
	     firmaName[80]          = "UltraBit Interactive",
	     Mitarbeiter1[80]       = "Peter Panse",
	     Mitarbeiter2[80]       = "Jacko Banana";

	// XML //
	char  xmlDatei[80]      = "rechnung.xml";
	char  xmlProlog[80]     = "<?xml version=\"1.0\" encoding = \"ISO-8859-1\" ?>";

	// CSS //
	char  cssDatei[80]      = "rechnung.css";
	char  cssLink[80]       = "<?xml-stylesheet type=\"text/css\" href=\"rechnung.css\" ?>";

	// XSD //
	char  xsdDatei[80]      = "rechnung.xsd";
	char  xsdSchema[80]     = "<xsd:schema xmlns:xsd = \"http://www.w3.org/2001/XMLSchema\">";
	char  xsdLink[120]      = "<rechnung xmlns:xsi = \"http://www.w3.org/XML/Schema\" xsi:noNamespaceSchemaLocation = \"rechnung.xsd\">";

	// HTML //
	char  htmlMainDatei[80] = "rechnung.html";

	// TXT //
	char  txtDatei[80]      = "rechnung.txt";
	
	// SVG //
    char  svgMain[80]      = "rechnungMain.svg";
    char  svgX[80]         = "rechnungX.svg";
    char  svgY[80]         = "rechnungY.svg";
    char  svgA[80]         = "rechnungA.svg";    
    char  TickX[80]        = "rechnungTickX.svg";
    char  TickY[80]        = "rechnungTickY.svg";

	// Deklaration der Variablen //
	int     firmaID = 155098,
		    bauStellenNr = 115502,
		    width  = 550,
		    height = 470,
		    i = 0; // Universal-zähler //

	const float	MWST_16 = 16.0;

	float   gesamtMinuten = 0.0,
		    summeMinuten1 = 450.0,
		    summeMinuten2 = 350.0,
		    Stundenlohn1 = 12.5,
		    Stundenlohn2 = 5.0,
		    gesamtStunden = 0.0,
		    summeStunden1 = 0.0,
		    summeStunden2 = 0.0,
		    gesamtnetto = 0.0,
		    netto1 = 0.0,
		    netto2 = 0.0,
		    gesamtmwst = 0.0,
		    mwst1 = 0.0,
		    mwst2 = 0.0,
		    gesamtbrutto = 0.0,
		    brutto1 = 0.0,
		    brutto2 = 0.0;

	        FILE* meinFILE;

void svg(void);
void xsd(void);
void xml(void);
void css(void);
void html(void);
void text(void);

float berechneGesamtMin(float summeMinuten1, float summeMinuten2);

float berechneSummeStunden1(float summeMinuten1);
float berechneSummeStunden2(float summeMinuten2);
float berechneGesamtStunden(float summeStunden1, float summeStunden2);

float berechneNetto1(float brutto1, float mwst1);
float berechneNetto2(float brutto2, float mwst2);
float berechneGesamtNetto(float netto1, float netto2);

float berechneMWST1(float brutto1, float MWST_16);
float berechneMWST2(float brutto2, float MWST_16);
float berechneGesamtMWST(float mwst1, float mwst2);

float berechneBrutto1(float summeStunden1, float Stundenlohn1);
float berechneBrutto2(float summeStunden2, float Stundenlohn2);
float berechneGesamtBrutto(float brutto1, float brutto2);

// Main //
int main(void)
{
	berechneGesamtMin(summeMinuten1, summeMinuten2);

	berechneSummeStunden1(summeMinuten1);
	berechneSummeStunden2(summeMinuten2);
	berechneGesamtStunden(summeStunden1, summeStunden2);
	
	berechneBrutto1(summeStunden1, Stundenlohn1);
	berechneBrutto2(summeStunden2, Stundenlohn2);
	berechneGesamtBrutto(brutto1, brutto2);

	berechneMWST1(brutto1, MWST_16);
	berechneMWST2(brutto2, MWST_16);
	berechneGesamtMWST(mwst1, mwst2);

	berechneNetto1(brutto1, mwst1);
	berechneNetto2(brutto2, mwst2);
	berechneGesamtNetto(netto1, netto2);

	html();
	css();
    xsd();
	xml();
	svg();
	text();

	return 0;
}

// Minuten //
float berechneGesamtMin(float summeMinuten1, float summeMinuten2)
{
	gesamtMinuten = summeMinuten1 + summeMinuten2;
	return gesamtMinuten;
}

// Stunden 1 //
float berechneSummeStunden1(float summeMinuten1)
{
	summeStunden1 = summeMinuten1/60.0;
	return summeStunden1;
}

// Stunden 2 //
float berechneSummeStunden2(float summeMinuten2)
{
	summeStunden2 = summeMinuten2/60.0;
	return summeStunden2;
}

// Gesamt Stunden //
float berechneGesamtStunden(float summeStunden1, float summeStunden2)
{
	gesamtStunden = summeStunden1 + summeStunden2;
	return gesamtStunden;
}

// Netto 1 //
float berechneNetto1(float brutto1, float mwst1)
{
	netto1 = brutto1 - mwst1;
	return netto1;
}

// Netto 2 //
float berechneNetto2(float brutto2, float mwst2)
{
	netto2 = brutto2 - mwst2;
	return netto2;
}

// Gesamtnetto //
float berechneGesamtNetto(float netto1, float netto2)
{
	gesamtnetto = netto1 + netto2;
	return gesamtnetto;
}

// MwSt 1 //
float berechneMWST1(float brutto1, float MWST_16)
{
	mwst1 = (brutto1 / 100) * MWST_16;
	return mwst1;
}
// MwSt 2 //
float berechneMWST2(float brutto2, float MWST_16)
{
	mwst2 = (brutto2 / 100) * MWST_16;
	return mwst2;
}

// Gesamt MwSt //
float berechneGesamtMWST(float mwst1, float mwst2)
{
	gesamtmwst = mwst1 + mwst2;
	return gesamtmwst;
}

// Brutto 1 //
float berechneBrutto1(float summeStunden1, float Stundenlohn1)
{
	brutto1 = summeStunden1 * Stundenlohn1;
	return brutto1;
}

// Brutto 2 //
float berechneBrutto2(float summeStunden2, float Stundenlohn2)
{
	brutto2 = summeStunden2 * Stundenlohn2;
	return brutto2;
}

// Gesamt Brutto //
float berechneGesamtBrutto(float brutto1, float brutto2)
{
	gesamtbrutto = brutto1 + brutto2;
	return gesamtbrutto;
}

// HTML-Ausgabe // OKAY
void html(void)
{
	meinFILE = fopen(htmlMainDatei, "w");
	fprintf(meinFILE, "%s", "<html> </br>");
	fprintf(meinFILE, "%s", " <body> </br>");
	fprintf(meinFILE, "programmName: %s </br>\n", programmNameString);
	fprintf(meinFILE, "Genneriert am %s um %s </br>\n", __DATE__, __TIME__);
	fprintf(meinFILE, "%s", "</br>");
	fprintf(meinFILE, "%s", "<a href=\"rechnung.xml\"> xmlDatei </a> </br> \n"); // Link auf die XML //
	fprintf(meinFILE, "%s", "<a href=\"rechnung.xsd\"> xsdDatei </a> </br> \n"); // Link auf die XSD //
	fprintf(meinFILE, "%s", "<a href=\"rechnung.css\"> cssDatei </a> </br> \n"); // Link auf die CSS //
	fprintf(meinFILE, "%s", "<a href=\"rechnungMain.svg\"> svgDatei </a> </br> \n"); // Link auf die SVG //
	fprintf(meinFILE, "%s", "<a href=\"rechnung.txt\"> txtDatei </a> </br></br>\n"); // Link auf die TXT //
	fprintf(meinFILE, "%s", "<a href=\"rechnung.html\"> Reload der Seite </a> </br>\n"); // Link auf die HTML //
	fprintf(meinFILE, "%s", " </body> </br>");
	fprintf(meinFILE, "%s", "</html> </br>");
	fclose(meinFILE);
}

// XSD // OKAY
void xsd(void)
{
	meinFILE = fopen(xsdDatei,"w");
	fprintf(meinFILE, "%s \n", xmlProlog);
	fprintf(meinFILE, "%s \n", xsdSchema);
	// Firmen-Daten //
	fprintf(meinFILE, "%s \n", "<xsd:element name = \"firmaID\"      type = xsd:string>");
	fprintf(meinFILE, "%s \n", "<xsd:element name = \"firmaName\"    type = xsd:string>");
	fprintf(meinFILE, "%s \n", "<xsd:element name = \"bauStellenNr\" type = xsd:string>");
	fprintf(meinFILE, "%s \n", "</xsd:element>");
	// Minuten //
	fprintf(meinFILE, "%s \n", "<xsd:element name = \"minuten\">");
	fprintf(meinFILE, "%s \n", " <xsd:complexType>");
	fprintf(meinFILE, "%s \n", "  <xsd:element name = \"summeMinuten1\" type = xsd:integer>");
	fprintf(meinFILE, "%s \n", "  <xsd:sequence>");
	fprintf(meinFILE, "%s \n", "  <xsd:element name = \"summeMinuten2\" type = xsd:integer>");
	fprintf(meinFILE, "%s \n", "  <xsd:sequence>");
	fprintf(meinFILE, "%s \n", "  <xsd:element name = \"gesamtMinuten\" type = xsd:integer>");
	fprintf(meinFILE, "%s \n", "  </xsd:sequence>");
	fprintf(meinFILE, "%s \n", " </xsd:complexType>");	
	fprintf(meinFILE, "%s \n", "</xsd:element>");
	// Namen //
	fprintf(meinFILE, "%s \n", "<xsd:element name = \"name\">");
	fprintf(meinFILE, "%s \n", " <xsd:complexType>");
	fprintf(meinFILE, "%s \n", "  <xsd:element name = \"Mitarbeiter1\" type = xsd:string>");
	fprintf(meinFILE, "%s \n", "  <xsd:sequence>");
	fprintf(meinFILE, "%s \n", "  <xsd:element name = \"Mitarbeiter2\" type = xsd:string>");
	fprintf(meinFILE, "%s \n", "  </xsd:sequence>");
	fprintf(meinFILE, "%s \n", " </xsd:complexType>");	
	fprintf(meinFILE, "%s \n", "</xsd:element>");
	// Std. Lohn //
	fprintf(meinFILE, "%s \n", "<xsd:element name = \"std_lohn\">");
	fprintf(meinFILE, "%s \n", " <xsd:complexType>");
	fprintf(meinFILE, "%s \n", "  <xsd:element name = \"Stundenlohn1\" type = xsd:integer>");
	fprintf(meinFILE, "%s \n", "  <xsd:sequence>");
	fprintf(meinFILE, "%s \n", "  <xsd:element name = \"Stundenlohn2\" type = xsd:integer>");
	fprintf(meinFILE, "%s \n", "  </xsd:sequence>");
	fprintf(meinFILE, "%s \n", " </xsd:complexType>");	
	fprintf(meinFILE, "%s \n", "</xsd:element>");
	// Netto //
	fprintf(meinFILE, "%s \n", "<xsd:element name = \"netto\">");
	fprintf(meinFILE, "%s \n", " <xsd:complexType>");
	fprintf(meinFILE, "%s \n", "  <xsd:element name = \"netto1\"      type = xsd:integer>");
	fprintf(meinFILE, "%s \n", "  <xsd:sequence>");
	fprintf(meinFILE, "%s \n", "  <xsd:element name = \"netto2\"      type = xsd:integer>");
	fprintf(meinFILE, "%s \n", "  <xsd:sequence>");
	fprintf(meinFILE, "%s \n", "  <xsd:element name = \"gesamtnetto\" type = xsd:integer>");
	fprintf(meinFILE, "%s \n", "  </xsd:sequence>");
	fprintf(meinFILE, "%s \n", " </xsd:complexType>");	
	fprintf(meinFILE, "%s \n", "</xsd:element>");
	// MwSt //
	fprintf(meinFILE, "%s \n", "<xsd:element name = \"mwst\">");
	fprintf(meinFILE, "%s \n", " <xsd:complexType>");
	fprintf(meinFILE, "%s \n", "  <xsd:element name = \"mwst1\"      type = xsd:integer>");
	fprintf(meinFILE, "%s \n", "  <xsd:sequence>");
	fprintf(meinFILE, "%s \n", "  <xsd:element name = \"mwst2\"      type = xsd:integer>");
	fprintf(meinFILE, "%s \n", "  <xsd:sequence>");
	fprintf(meinFILE, "%s \n", "  <xsd:element name = \"gesamtmwst\" type = xsd:integer>");
	fprintf(meinFILE, "%s \n", "  </xsd:sequence>");
	fprintf(meinFILE, "%s \n", " </xsd:complexType>");	
	fprintf(meinFILE, "%s \n", "</xsd:element>");
	// Brutto //
	fprintf(meinFILE, "%s \n", "<xsd:element name = \"brutto\">");
	fprintf(meinFILE, "%s \n", " <xsd:complexType>");
	fprintf(meinFILE, "%s \n", "  <xsd:element name = \"brutto1\"      type = xsd:integer>");
	fprintf(meinFILE, "%s \n", "  <xsd:sequence>");
	fprintf(meinFILE, "%s \n", "  <xsd:element name = \"brutto2\"      type = xsd:integer>");
	fprintf(meinFILE, "%s \n", "  <xsd:sequence>");
	fprintf(meinFILE, "%s \n", "  <xsd:element name = \"gesamtbrutto\" type = xsd:integer>");
	fprintf(meinFILE, "%s \n", "  </xsd:sequence>");
	fprintf(meinFILE, "%s \n", " </xsd:complexType>");	
	fprintf(meinFILE, "%s \n", "</xsd:element>");
	
	fprintf(meinFILE, "%s \n", "</xsd:schema>");
	fclose(meinFILE); 
}

// XML // OKAY
void xml(void)
{
	// Dateispeicherung //
	meinFILE = fopen(xmlDatei, "w");
	fprintf(meinFILE, "%s \n", xmlProlog);
	fprintf(meinFILE, "%s \n", cssLink); // CSS-Einbindung //
	fprintf(meinFILE, "%s \n", xsdLink); // XSD-Einbindung //

		fprintf(meinFILE, "%s \n", "<firmaID>"); // Tag öffnen //
				fprintf(meinFILE, "%s %.2i\n", "firma ID: ", firmaID); // Wert //
		fprintf(meinFILE, "%s \n", "</firmaID>"); // Tag schließen //
		fprintf(meinFILE, "%s \n", "<firmaName>");
				fprintf(meinFILE, "%s %s\n", "firmenName: ", firmaName);
		fprintf(meinFILE, "%s \n", "</firmaName>");
		fprintf(meinFILE, "%s \n", "<bauStellenNr>");
				fprintf(meinFILE, "%s %.2i\n", "bauStellenNr: ", bauStellenNr);
		fprintf(meinFILE, "%s \n", "</bauStellenNr>");
		fprintf(meinFILE, "%s \n", "<minuten>");
				fprintf(meinFILE, "%s %.2f\n", "Minuten, Mitarbeiter 1: ", summeMinuten1);
				fprintf(meinFILE, "%s %.2f\n", "Minuten, Mitarbeiter 2: ", summeMinuten2);
				fprintf(meinFILE, "%s %.2f\n", "Minuten, Gesamt: ", gesamtMinuten);
		fprintf(meinFILE, "%s \n", "</minuten>");
		fprintf(meinFILE, "%s \n", "<name>");
				fprintf(meinFILE, "%s %s\n", "Name, Mitarbeiter 1: ", Mitarbeiter1);
				fprintf(meinFILE, "%s %s\n", "Name, Mitarbeiter 2: ", Mitarbeiter2);
		fprintf(meinFILE, "%s \n", "</name>");
		fprintf(meinFILE, "%s \n", "<sdt_lohn>");
				fprintf(meinFILE, "%s %.2f\n", "Std.-Lohn, Mitarbeiter 1: ", Stundenlohn1);
				fprintf(meinFILE, "%s %.2f\n", "Std.-Lohn, Mitarbeiter 2: ", Stundenlohn2);
		fprintf(meinFILE, "%s \n", "</sdt_lohn>");
		fprintf(meinFILE, "%s \n", "<netto>");
				fprintf(meinFILE, "%s %.2f\n", "Netto, Mitarbeiter 1: ", netto1);
				fprintf(meinFILE, "%s %.2f\n", "Netto, Mitarbeiter 2: ", netto2);
				fprintf(meinFILE, "%s %.2f\n", "Netto, Gesamt: ", gesamtnetto);
		fprintf(meinFILE, "%s \n", "</netto>");
		fprintf(meinFILE, "%s \n", "<mwst>");
				fprintf(meinFILE, "%s %.2f\n", "MwSt, Mitarbeiter 1: ", mwst1);
				fprintf(meinFILE, "%s %.2f\n", "MwSt, Mitarbeiter 2: ", mwst2);
				fprintf(meinFILE, "%s %.2f\n", "MwSt, Gesamt: ", gesamtmwst);
		fprintf(meinFILE, "%s \n", "</mwst>");
		fprintf(meinFILE, "%s \n", "<brutto>");
				fprintf(meinFILE, "%s %.2f\n", "Brutto, Mitarbeiter 1: ", brutto1);
				fprintf(meinFILE, "%s %.2f\n", "Brutto, Mitarbeiter 2: ", brutto2);
				fprintf(meinFILE, "%s %.2f\n", "Brutto, Gesamt: ", gesamtbrutto);
		fprintf(meinFILE, "%s \n", "</brutto>");
	fprintf(meinFILE, "%s \n", "</rechnung>");
	fclose(meinFILE); 
}

// CSS // OKAY
void css(void)
{
	// Dateispeicherung // 
	meinFILE = fopen(cssDatei, "w");
	fprintf(meinFILE, "%s \n", "firmaID {display: block; font-size: 14pt; font-weight: bold; color: red}"); // Tagname, schrifftgröße, Schriffttyp, Schrifftfarbe //
	fprintf(meinFILE, "%s \n", "firmaName {display: block; font-size: 14pt; font-weight: bold; color: red}");
	fprintf(meinFILE, "%s \n", "bauStellenNr {display: block; font-size: 14pt; font-weight: bold; color: red}");
	fprintf(meinFILE, "%s \n", "minuten {display: block; font-size: 14pt; font-weight: bold; color: grey}");
	fprintf(meinFILE, "%s \n", "name {display: block; font-size: 14pt; font-weight: bold; color: blue}");
	fprintf(meinFILE, "%s \n", "sdt_lohn {display: block; font-size: 14pt; font-weight: bold; color: grey}");
	fprintf(meinFILE, "%s \n", "netto {display: block; font-size: 14pt; font-weight: bold; color: grey}");
	fprintf(meinFILE, "%s \n", "mwst {display: block; font-size: 14pt; font-weight: bold; color: green}");
	fprintf(meinFILE, "%s \n", "brutto {display: block; font-size: 14pt; font-weight: bold; color: grey}");
	fclose(meinFILE);
}

// SVG-Ausgabe // OKAY
void svg(void)
{
    // X-Axe //
    meinFILE = fopen(svgX, "w");
    fprintf(meinFILE, "%s", xmlProlog );
    fprintf(meinFILE, "%s%i%s%i%s", "<svg width=\"",width,"\" height=\"",height,"\">\n");
    fprintf(meinFILE, "%s", "<defs>\n");
    fprintf(meinFILE, "%s", "  <g id=\"xAxes\">\n");
    fprintf(meinFILE, "%s", "    <line x1=\"0\" y1=\"200\" x2=\"500\" y2=\"200\" style=\"stroke:blue;\"/>\n" ); // Line X //
    fprintf(meinFILE, "%s", "    <text x=\"492\" y=\"220\">X</text>\n"); // Label X //
    fprintf(meinFILE, "%s", "  </g>\n");
    fprintf(meinFILE, "%s", "  <g id=\"default_xAxes\">\n");
    fprintf(meinFILE, "%s", "    <use xlink:href=\"#xAxes\" style=\"stroke:blue;\"/>\n");
    fprintf(meinFILE, "%s", "  </g>\n");
    fprintf(meinFILE, "%s", "</defs>\n");
    fprintf(meinFILE, "%s", "<use xlink:href=\"#default_xAxes\" transform=\"translate(0, 0)\"/>\n");
    fprintf(meinFILE, "%s", "</svg>\n");
    fclose(meinFILE);
    
    // Y-Axe //
    meinFILE = fopen(svgY, "w");
    fprintf(meinFILE, "%s", xmlProlog );
    fprintf(meinFILE, "%s%i%s%i%s", "<svg width=\"", width, "\" height=\"", height, "\">\n");
    fprintf(meinFILE, "%s", "<defs>\n");
    fprintf(meinFILE, "%s", "  <g id=\"yAxes\">\n");
    fprintf(meinFILE, "%s", "    <line x1=\"250\" y1=\"0\" x2=\"250\" y2=\"400\" style=\"stroke:blue;\"/>\n" ); // Line Y //
    fprintf(meinFILE, "%s", "    <text x=\"270\" y=\"10\">Y</text>\n"); // Label Y //
    fprintf(meinFILE, "%s", "  </g>\n");
    fprintf(meinFILE, "%s", "  <g id=\"default_yAxes\">\n");
    fprintf(meinFILE, "%s", "    <use xlink:href=\"#yAxes\" style=\"stroke:blue;\"/>\n");
    fprintf(meinFILE, "%s", "  </g>\n");
    fprintf(meinFILE, "%s", "</defs>\n");
    fprintf(meinFILE, "%s", "<use xlink:href=\"#default_yAxes\" transform=\"translate(0, 0)\"/>\n");
    fprintf(meinFILE, "%s", "</svg>\n");
    fclose(meinFILE);
  
    // Balken //
    meinFILE = fopen(svgA, "w");
    fprintf(meinFILE, "%s", xmlProlog );
    fprintf(meinFILE, "%s%i%s%i%s", "<svg width=\"", width, "\" height=\"", height, "\">\n");
    fprintf(meinFILE, "%s", "<defs>\n");
    fprintf(meinFILE, "%s", "  <g id=\"aAxes\">\n");
    fprintf(meinFILE, "%s", "    <line x1=\"270\" y1=\"200\" x2=\"270\" y2=\"10\" style=\"stroke:red;\"/>\n" ); // Line A //
    fprintf(meinFILE, "%s", "    <text x=\"280\" y=\"30\">ges. Brutto</text>\n"); // Label A //
    fprintf(meinFILE, "%s", "  </g>\n");
    fprintf(meinFILE, "%s", "  <g id=\"default_aAxes\">\n");
    fprintf(meinFILE, "%s", "    <use xlink:href=\"#aAxes\" style=\"stroke:red;\"/>\n");
    fprintf(meinFILE, "%s", "  </g>\n");
    fprintf(meinFILE, "%s", "</defs>\n");
    fprintf(meinFILE, "%s", "<use xlink:href=\"#default_aAxes\" transform=\"translate(0, 0)\"/>\n");
    fprintf(meinFILE, "%s", "</svg>\n");
    fclose(meinFILE);
     
    // Tick X //
    meinFILE = fopen(TickX, "w");
    fprintf(meinFILE, "%s", xmlProlog );
    fprintf(meinFILE, "%s%i%s%i%s", "<svg width=\"", width, "\" height=\"", height, "\">\n");
    fprintf(meinFILE, "%s", "<defs>\n");
    fprintf(meinFILE, "%s", "  <g id=\"TickX\">\n");
	
	for(i = 10; i < 500; i += 10)
	{
	      fprintf(meinFILE, "<line x1=\"%i\" y1=\"190\" x2=\"%i\" y2=\"210\" style=\"stroke:blue;\"/>", i, i);
	}
	
	fprintf(meinFILE, "%s", "  </g>\n");
    fprintf(meinFILE, "%s", "  <g id=\"default_TickX\">\n");
    fprintf(meinFILE, "%s", "    <use xlink:href=\"#TickX\" style=\"stroke:blue;\"/>\n");
    fprintf(meinFILE, "%s", "  </g>\n");
    fprintf(meinFILE, "%s", "</defs>\n");
    fprintf(meinFILE, "%s", "<use xlink:href=\"#default_TickX\" transform=\"translate(0, 0)\"/>\n");
    fprintf(meinFILE, "%s", "</svg>\n");
    fclose(meinFILE);
 
    // Tick Y //
    meinFILE = fopen(TickY, "w");
    fprintf(meinFILE, "%s", xmlProlog );
    fprintf(meinFILE, "%s%i%s%i%s", "<svg width=\"",width,"\" height=\"",height,"\">\n");
    fprintf(meinFILE, "%s", "<defs>\n");
    fprintf(meinFILE, "%s", "  <g id=\"TickY\">\n");
	
	for(i = 10; i < 400; i += 10)
	{
	      fprintf(meinFILE, "<line x1=\"240\" y1=\"%i\" x2=\"260\" y2=\"%i\" style=\"stroke:blue;\"/>", i, i);
	}
 
    fprintf(meinFILE, "%s%.2f%s", "    <text x=\"200\" y=\"15\">", gesamtbrutto ,"</text>\n"); // Label A //
	fprintf(meinFILE, "%s", "  </g>\n");
    fprintf(meinFILE, "%s", "  <g id=\"default_TickY\">\n");
    fprintf(meinFILE, "%s", "    <use xlink:href=\"#TickY\" style=\"stroke:blue;\"/>\n");
    fprintf(meinFILE, "%s", "  </g>\n");
    fprintf(meinFILE, "%s", "</defs>\n");
    fprintf(meinFILE, "%s", "<use xlink:href=\"#default_TickY\" transform=\"translate(0, 0)\"/>\n");
    fprintf(meinFILE, "%s", "</svg>\n");
    fclose(meinFILE);
     
    // SVG-Main //
    meinFILE=fopen(svgMain, "w");
    fprintf(meinFILE,  xmlProlog);
    fprintf(meinFILE, "%s%i%s%i%s", "<svg width=\"", width, "\" height=\"", height, "\">\n");
    fprintf(meinFILE, "%s%i%s%i%s", "<image xlink:href=\"rechnungX.svg\" x=\"0\" y=\"0\" width=\"",width,"\" height=\"",height,"\" />\n");
    fprintf(meinFILE, "%s%i%s%i%s", "<image xlink:href=\"rechnungY.svg\" x=\"0\" y=\"0\" width=\"",width,"\" height=\"",height,"\" />\n");
    fprintf(meinFILE, "%s%i%s%i%s", "<image xlink:href=\"rechnungA.svg\" x=\"0\" y=\"0\" width=\"",width,"\" height=\"",height,"\" />\n");
    fprintf(meinFILE, "%s%i%s%i%s", "<image xlink:href=\"rechnungTickX.svg\" x=\"0\" y=\"0\" width=\"",width,"\" height=\"",height,"\" />\n");
    fprintf(meinFILE, "%s%i%s%i%s", "<image xlink:href=\"rechnungTickY.svg\" x=\"0\" y=\"0\" width=\"",width,"\" height=\"",height,"\" />\n");
    fprintf(meinFILE, "</svg>\n");
    fclose(meinFILE);
}

// Text-Ausgabe // OKAY
void text(void)
{
	// Dateispeicherung //
	meinFILE = fopen(txtDatei,"w");
	fprintf(meinFILE, "\n%s %.2i %s %s %s %.2i \t\n", "firmaID:", firmaID, "firmaName:", firmaName, "baustelleNr:", bauStellenNr);
	fprintf(meinFILE, "%s \t\n", "-------------------------------------------------------------------");
	fprintf(meinFILE, "%s %s %s %s %s %s \t\n", "anzahlMinuten   ", "mitArbeiterName   ", "Stundenlohn   ", "Netto   ", "mwst   ", "brutto   ");
	fprintf(meinFILE, "%s \t\n", "--------------------------------------------------------------------------");
	fprintf(meinFILE, "%.2f           %s         %.2f         %.2f    %.2f    %.2f \n", summeMinuten1, Mitarbeiter1, Stundenlohn1, netto1, mwst1, brutto1);
	fprintf(meinFILE, "%.2f           %s         %.2f         %.2f     %.2f    %.2f \n", summeMinuten2, Mitarbeiter2, Stundenlohn2, netto2, mwst2, brutto2);
	fprintf(meinFILE, "%s \t\n", "--------------------------------------------------------------------------");
	fprintf(meinFILE, "%.2f                                            %.2f    %.2f   %.2f \n\n", gesamtMinuten, gesamtnetto, gesamtmwst, gesamtbrutto);
	fclose(meinFILE);

	// Shellausgabe //
	fprintf(stdout, "\n%s %.2i %s %s %s %.2i \t\n", "firmaID:", firmaID, "firmaName:", firmaName, "baustelleNr:", bauStellenNr);
	fprintf(stdout, "%s \t\n", "-------------------------------------------------------------------");
	fprintf(stdout, "%s %s %s %s %s %s \t\n", "anzahlMinuten   ", "mitArbeiterName   ", "Stundenlohn   ", "Netto   ", "mwst   ", "brutto   ");
	fprintf(stdout, "%s \t\n", "--------------------------------------------------------------------------");
	fprintf(stdout, "%.2f           %s         %.2f         %.2f    %.2f    %.2f \n", summeMinuten1, Mitarbeiter1, Stundenlohn1, netto1, mwst1, brutto1);
	fprintf(stdout, "%.2f           %s         %.2f         %.2f     %.2f    %.2f \n", summeMinuten2, Mitarbeiter2, Stundenlohn2, netto2, mwst2, brutto2);
	fprintf(stdout, "%s \t\n", "--------------------------------------------------------------------------");
	fprintf(stdout, "%.2f                                            %.2f    %.2f   %.2f \n\n", gesamtMinuten, gesamtnetto, gesamtmwst, gesamtbrutto);
}
