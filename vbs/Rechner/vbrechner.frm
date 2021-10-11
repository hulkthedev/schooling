VERSION 5.00
Begin VB.Form frmRechner 
   BorderStyle     =   1  'Fest Einfach
   Caption         =   "Rechner"
   ClientHeight    =   3930
   ClientLeft      =   5940
   ClientTop       =   4125
   ClientWidth     =   5535
   Icon            =   "vbrechner.frx":0000
   LinkTopic       =   "frmRechner"
   MaxButton       =   0   'False
   MinButton       =   0   'False
   ScaleHeight     =   3930
   ScaleWidth      =   5535
   StartUpPosition =   2  'Bildschirmmitte
   Begin VB.CommandButton cmdGleich 
      Caption         =   "="
      Height          =   495
      Left            =   1560
      TabIndex        =   24
      Top             =   3000
      Width           =   615
   End
   Begin VB.CommandButton cmdEnde 
      Caption         =   "Beenden"
      Height          =   495
      Left            =   3600
      TabIndex        =   23
      ToolTipText     =   "Beenden"
      Top             =   3000
      Width           =   1815
   End
   Begin VB.CommandButton cmdDurch 
      Caption         =   "/"
      BeginProperty Font 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   700
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   2520
      TabIndex        =   22
      ToolTipText     =   "/"
      Top             =   3000
      Width           =   735
   End
   Begin VB.CommandButton cmdMal 
      Caption         =   "*"
      BeginProperty Font 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   700
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   2520
      TabIndex        =   21
      ToolTipText     =   "*"
      Top             =   2400
      Width           =   735
   End
   Begin VB.CommandButton cmdMinus 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   700
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   2520
      TabIndex        =   20
      ToolTipText     =   "-"
      Top             =   1800
      Width           =   735
   End
   Begin VB.CommandButton cmdPlus 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   700
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   2520
      TabIndex        =   19
      ToolTipText     =   "+"
      Top             =   1200
      Width           =   735
   End
   Begin VB.CommandButton cmdAutor 
      Caption         =   "Über"
      Height          =   495
      Left            =   3600
      TabIndex        =   18
      ToolTipText     =   "Über"
      Top             =   2400
      Width           =   1815
   End
   Begin VB.CommandButton cmd0 
      Caption         =   "&0"
      BeginProperty Font 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   700
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   840
      TabIndex        =   17
      ToolTipText     =   "0"
      Top             =   3000
      Width           =   615
   End
   Begin VB.CommandButton cmd9 
      Caption         =   "&9"
      BeginProperty Font 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   700
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   1560
      TabIndex        =   16
      ToolTipText     =   "9"
      Top             =   2400
      Width           =   615
   End
   Begin VB.CommandButton cmd8 
      Caption         =   "&8"
      BeginProperty Font 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   700
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   840
      TabIndex        =   15
      ToolTipText     =   "8"
      Top             =   2400
      Width           =   615
   End
   Begin VB.CommandButton cmd7 
      Caption         =   "&7"
      BeginProperty Font 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   700
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   120
      TabIndex        =   14
      ToolTipText     =   "7"
      Top             =   2400
      Width           =   615
   End
   Begin VB.CommandButton cmd6 
      Caption         =   "&6"
      BeginProperty Font 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   700
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   1560
      TabIndex        =   13
      ToolTipText     =   "6"
      Top             =   1800
      Width           =   615
   End
   Begin VB.CommandButton cmd5 
      Caption         =   "&5"
      BeginProperty Font 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   700
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   840
      TabIndex        =   12
      ToolTipText     =   "5"
      Top             =   1800
      Width           =   615
   End
   Begin VB.CommandButton cmd4 
      Caption         =   "&4"
      BeginProperty Font 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   700
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   120
      TabIndex        =   11
      ToolTipText     =   "4"
      Top             =   1800
      Width           =   615
   End
   Begin VB.CommandButton cmd3 
      Caption         =   "&3"
      BeginProperty Font 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   700
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   1560
      TabIndex        =   10
      ToolTipText     =   "3"
      Top             =   1200
      Width           =   615
   End
   Begin VB.CommandButton cmd2 
      Caption         =   "&2"
      BeginProperty Font 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   700
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   840
      TabIndex        =   9
      ToolTipText     =   "2"
      Top             =   1200
      Width           =   615
   End
   Begin VB.CommandButton cmd1 
      Caption         =   "&1"
      BeginProperty Font 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   700
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   120
      TabIndex        =   8
      ToolTipText     =   "1"
      Top             =   1200
      Width           =   615
   End
   Begin VB.TextBox txtSpeicher 
      Alignment       =   1  'Rechts
      Enabled         =   0   'False
      Height          =   285
      Left            =   3600
      TabIndex        =   7
      Top             =   600
      Width           =   1815
   End
   Begin VB.CommandButton Command4 
      Caption         =   "MS"
      BeginProperty Font 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   700
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   3600
      TabIndex        =   6
      ToolTipText     =   "In Memory ==>"
      Top             =   1200
      Width           =   855
   End
   Begin VB.CommandButton Command3 
      Caption         =   "ME"
      BeginProperty Font 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   700
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   4560
      TabIndex        =   5
      ToolTipText     =   "<== Aus Memory"
      Top             =   1200
      Width           =   855
   End
   Begin VB.CommandButton cmdkomma 
      Caption         =   ","
      BeginProperty Font 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   700
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   120
      TabIndex        =   4
      ToolTipText     =   "CE"
      Top             =   3000
      Width           =   615
   End
   Begin VB.CommandButton cmdC 
      Caption         =   "C"
      BeginProperty Font 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   700
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   3600
      TabIndex        =   3
      ToolTipText     =   "C"
      Top             =   1800
      Width           =   1815
   End
   Begin VB.TextBox txtEingabe 
      Alignment       =   1  'Rechts
      BeginProperty DataFormat 
         Type            =   1
         Format          =   "#.##0,0000"
         HaveTrueFalseNull=   0
         FirstDayOfWeek  =   0
         FirstWeekOfYear =   0
         LCID            =   1031
         SubFormatType   =   1
      EndProperty
      Enabled         =   0   'False
      Height          =   285
      Left            =   120
      TabIndex        =   2
      Top             =   600
      Width           =   3135
   End
   Begin VB.Label Label1 
      Caption         =   "- Punkt vor Strich wird nicht beachtet! -"
      Enabled         =   0   'False
      Height          =   255
      Left            =   1320
      TabIndex        =   25
      Top             =   3600
      Width           =   2895
   End
   Begin VB.Label lblVersion 
      Caption         =   "Version 2.0.1a"
      Enabled         =   0   'False
      Height          =   255
      Left            =   4320
      TabIndex        =   1
      Top             =   120
      Width           =   1095
   End
   Begin VB.Label lblRechner 
      Caption         =   "Visual Basic Generierter Rechner"
      Enabled         =   0   'False
      BeginProperty Font 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   700
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Left            =   120
      TabIndex        =   0
      Top             =   120
      Width           =   3135
   End
End
Attribute VB_Name = "frmRechner"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Dim eingabe As String
Dim speicher As String
Dim rechenart As String

Private Sub cmd0_Click()
    txtEingabe = txtEingabe + "0"
End Sub

Private Sub cmd1_Click()
    txtEingabe = txtEingabe + "1"
End Sub

Private Sub cmd2_Click()
    txtEingabe = txtEingabe + "2"
End Sub

Private Sub cmd3_Click()
    txtEingabe = txtEingabe + "3"
End Sub

Private Sub cmd4_Click()
    txtEingabe = txtEingabe + "4"
End Sub

Private Sub cmd5_Click()
    txtEingabe = txtEingabe + "5"
End Sub

Private Sub cmd6_Click()
    txtEingabe = txtEingabe + "6"
End Sub

Private Sub cmd7_Click()
    txtEingabe = txtEingabe + "7"
End Sub

Private Sub cmd8_Click()
    txtEingabe = txtEingabe + "8"
End Sub

Private Sub cmd9_Click()
    txtEingabe = txtEingabe + "9"
End Sub

Private Sub cmdAutor_Click()
    MsgBox ("Autor & Programmierer: Virus X")
End Sub


Private Sub cmdC_Click()
    txtEingabe = ""
    txtSpeicher = ""
    eingabe = ""
    speicher = ""
End Sub


Private Sub cmdDurch_Click()
    eingabe = txtEingabe
    rechenart = "dividieren"
    txtEingabe = ""
End Sub

Private Sub cmdEnde_Click()
    End
End Sub

Private Sub cmdGleich_Click()

    If rechenart = "addieren" Then
    txtEingabe = CDbl(eingabe) + CDbl(txtEingabe)
        ElseIf rechenart = "subtrahieren" Then
        txtEingabe = CDbl(eingabe) - CDbl(txtEingabe)
            ElseIf rechenart = "multiplizieren" Then
            txtEingabe = CDbl(eingabe) * CDbl(txtEingabe)
                ElseIf rechenart = "dividieren" Then
                txtEingabe = CDbl(eingabe) / CDbl(txtEingabe)
    End If

End Sub

Private Sub cmdkomma_Click()
    txtEingabe = txtEingabe + ","
End Sub

Private Sub cmdMal_Click()
    eingabe = txtEingabe
    rechenart = "multiplizieren"
    txtEingabe = ""
End Sub

Private Sub cmdMinus_Click()
    eingabe = txtEingabe
    rechenart = "subtrahieren"
    txtEingabe = ""
End Sub

Private Sub cmdPlus_Click()
    eingabe = txtEingabe
    rechenart = "addieren"
    txtEingabe = ""
End Sub

Private Sub Command3_Click()
    speicher = txtSpeicher
    txtSpeicher = ""
    txtEingabe = speicher
    speicher = ""
End Sub

Private Sub Command4_Click()
    speicher = txtEingabe
    txtEingabe = ""
    txtSpeicher = speicher
    speicher = ""
End Sub
