                      function datumuhr ()

     {

       var jahr;
       var monat;
       var tag;
       var stunden;
       var minuten;
       var sekunden;


           var AktuellesDatum=new Date();

           jahr=AktuellesDatum.getFullYear ();
           monat=AktuellesDatum.getMonth ()+1;
           tag=AktuellesDatum.getDate ();
           stunden=AktuellesDatum.getHours ();
           minuten=AktuellesDatum.getMinutes ();
           sekunden=AktuellesDatum.getSeconds ();

    if (stunden<10)
             {
               stunden="0"+String(stunden);
             }
           if (minuten<10)
             {
               minuten="0"+String(minuten);
             }
           if (sekunden<10)
             {
               sekunden="0"+String(sekunden);
             }
           if (tag<10)
             {
               tag="0"+String(tag);
             }
           if (monat<10)
             {
               monat="0"+String(monat);
             }

           window.document.anzeige.date.value=tag+"."+monat+"."+jahr;
           window.document.anzeige2.time.value=stunden+":"+minuten+":"+sekunden;
           window.setTimeout ('datumuhr()',1000);


     }
