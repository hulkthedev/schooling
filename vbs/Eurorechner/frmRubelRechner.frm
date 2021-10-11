VERSION 5.00
Begin VB.Form frmUmrechnen 
   BorderStyle     =   3  'Fester Dialog
   Caption         =   "Rubel Rechner '05"
   ClientHeight    =   3000
   ClientLeft      =   3930
   ClientTop       =   4890
   ClientWidth     =   8280
   Icon            =   "FRMEUR~1.frx":0000
   LinkTopic       =   "Form1"
   MaxButton       =   0   'False
   MinButton       =   0   'False
   ScaleHeight     =   3000
   ScaleWidth      =   8280
   ShowInTaskbar   =   0   'False
   Begin VB.CommandButton cmdAbout 
      Caption         =   "&Über"
      Height          =   375
      Left            =   6120
      TabIndex        =   11
      ToolTipText     =   "Über..."
      Top             =   1800
      Width           =   1935
   End
   Begin VB.Frame fraUmrechnung 
      Caption         =   "Umrechnungsmodus"
      Height          =   975
      Left            =   240
      TabIndex        =   3
      Top             =   1800
      Width           =   5775
      Begin VB.OptionButton optEuroRubel 
         Caption         =   "&Euro in Russische Rubel"
         Height          =   255
         Left            =   3000
         TabIndex        =   5
         ToolTipText     =   "Rechnet Euro in Rubel um"
         Top             =   360
         Width           =   2055
      End
      Begin VB.OptionButton optRubelEuro 
         Caption         =   "&Russische Rubel in Euro"
         Height          =   255
         Left            =   480
         TabIndex        =   4
         ToolTipText     =   "Rechnet Rubel in Euro um"
         Top             =   360
         Width           =   2175
      End
   End
   Begin VB.CommandButton cmdSetzen 
      Caption         =   "&Zurücksetzen"
      Height          =   375
      Left            =   6120
      TabIndex        =   2
      ToolTipText     =   "Leert alle Felder"
      Top             =   1200
      Width           =   1935
   End
   Begin VB.CommandButton cmdBeenden 
      Caption         =   "&Beenden"
      Height          =   375
      Left            =   6120
      TabIndex        =   1
      ToolTipText     =   "Beendet das Programm"
      Top             =   2400
      Width           =   1935
   End
   Begin VB.CommandButton cmdUmrechnen 
      Caption         =   "&Umrechnen"
      Height          =   375
      Left            =   6120
      TabIndex        =   0
      ToolTipText     =   "Rechnet die Währung um"
      Top             =   600
      Width           =   1935
   End
   Begin VB.Frame fraInfo 
      Caption         =   "Eingabe"
      Height          =   1215
      Left            =   240
      TabIndex        =   6
      Top             =   480
      Width           =   5775
      Begin VB.TextBox txtEuro 
         Alignment       =   1  'Rechts
         Height          =   285
         Left            =   2880
         TabIndex        =   10
         ToolTipText     =   "Hier die Eingabe von Euro"
         Top             =   720
         Width           =   2535
      End
      Begin VB.TextBox txtRubel 
         Alignment       =   1  'Rechts
         Height          =   285
         Left            =   2880
         TabIndex        =   9
         ToolTipText     =   "Hier die Eingabe von Rubel"
         Top             =   360
         Width           =   2535
      End
      Begin VB.Label lblEuro 
         Caption         =   "Eingabe in Euro ( € ) :"
         Height          =   255
         Left            =   240
         TabIndex        =   8
         Top             =   720
         Width           =   1815
      End
      Begin VB.Label lbRubel 
         Caption         =   "Eingabe in Russische Rubel ( RB ) :"
         Height          =   255
         Left            =   240
         TabIndex        =   7
         Top             =   360
         Width           =   2775
      End
   End
   Begin VB.Label lblVersion 
      Alignment       =   1  'Rechts
      Caption         =   "Version 2.1.0.d"
      Height          =   255
      Left            =   6960
      TabIndex        =   13
      Top             =   120
      Width           =   1095
   End
   Begin VB.Label lblName 
      Caption         =   "Rubel Rechner '05"
      BeginProperty Font 
         Name            =   "MS Sans Serif"
         Size            =   13.5
         Charset         =   0
         Weight          =   700
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   375
      Left            =   240
      TabIndex        =   12
      Top             =   120
      Width           =   2415
   End
End
Attribute VB_Name = "frmUmrechnen"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Private Sub cmdAbout_Click()
    MsgBox ("Autor & Programmierer: Virus X")
        Leeren
        Setzen
        txtRubel = ""
        txtEuro = ""
End Sub

Private Sub cmdBeenden_Click()
    End
End Sub

Private Sub cmdSetzen_Click()
    Leeren
    Setzen
End Sub

Private Sub cmdUmrechnen_Click()
    If optRubelEuro = True Then
        txtEuro = Format(txtRubel / 37.5, "#,##0.00")
    Else
        txtRubel = Format(txtEuro * 37.5, "#,##0.00")
    End If
End Sub

Private Sub optRubelEuro_Click()
    txtEuro.Enabled = False
    txtRubel.Enabled = True
    Leeren
End Sub

Private Sub optEuroRubel_Click()
    txtRubel.Enabled = False
    txtEuro.Enabled = True
    Leeren
End Sub

Public Sub Leeren()
    txtEuro = ""
    txtRubel = ""
End Sub

Public Sub Setzen()
    optRubelEuro.Value = False
    optEuroRubel.Value = False
    txtEuro.Enabled = True
    txtRubel.Enabled = True
End Sub
