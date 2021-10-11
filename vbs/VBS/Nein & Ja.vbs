' Beispiel für Prozeduren
Start

Sub Start
    Alter = InputBox("Geben Sie Ihr Alter ein:")
    If Alter < 18 Then
       Msgbox "Du bis noch nicht alt genug!", 48
       Exit Sub
    End If
    Msgbox "Alles klar, Sie dürfen passieren!", 64
End Sub