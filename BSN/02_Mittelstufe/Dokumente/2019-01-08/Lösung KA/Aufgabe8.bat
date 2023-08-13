echo off
cls
IF EXIST c:\Chef\Lohn.xls (
	echo Lohn.xls vorhanden
) ELSE (
	copy c:\temp\Lohn.xls c:\Chef\Lohn.xls )
pause