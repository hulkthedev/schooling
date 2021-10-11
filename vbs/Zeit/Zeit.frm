VERSION 5.00
Begin VB.Form frmZeitenStoppen 
   Caption         =   "Zeiten Stoppen"
   ClientHeight    =   855
   ClientLeft      =   3795
   ClientTop       =   6105
   ClientWidth     =   8175
   LinkTopic       =   "Form1"
   ScaleHeight     =   855
   ScaleWidth      =   8175
   Begin VB.CommandButton cmdStoppen 
      Caption         =   "S&toppen"
      Height          =   375
      Left            =   6120
      TabIndex        =   1
      Top             =   240
      Width           =   1935
   End
   Begin VB.CommandButton cmdStarten 
      Caption         =   "&Starten"
      Height          =   375
      Left            =   120
      TabIndex        =   0
      Top             =   240
      Width           =   1935
   End
   Begin VB.Label lblZeit 
      Alignment       =   2  'Zentriert
      BeginProperty Font 
         Name            =   "Arial Black"
         Size            =   12
         Charset         =   0
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   375
      Left            =   2280
      TabIndex        =   2
      Top             =   240
      Width           =   3615
   End
End
Attribute VB_Name = "frmZeitenStoppen"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Dim Startzeit

Private Sub cmdStarten_Click()
    Startzeit = Time
End Sub

Private Sub cmdStoppen_Click()
    lblZeit = Time - Startzeit
    lblZeit = Format(lblZeit, "hh:mm:ss ")
End Sub
