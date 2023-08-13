If vbYes = MsgBox("Willst du fortfahren?", vbYesNo, "Spam") Then 

	dim objshell
	set objshell = wscript.createobject("wscript.shell")
	objshell.Run "shutdown.bat"
	set shell=nothing

Else
	MsgBox("Abbruch")
End If