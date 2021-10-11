StartBetrag = Inputbox ("Bitte Startbetrag eingeben:","Startbetrag", "1000")
Zinssatz = Inputbox("Wie hoch ist der Zinssatz?", "Zinssatz", "3,5")
Do
  StartBetrag = StartBetrag * (1+Zinssatz/100)
  Jahre = Jahre + 1
Loop Until StartBetrag > 1E6
Msgbox "In " & Jahre & " Jahren sind sie (endlich) Millionär"