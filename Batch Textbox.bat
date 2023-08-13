@echo off
:A
echo msgbox"still using this computer?",vbInformation , "lol"> %temp%\msg.vbs 
%Temp%\msg.vbs 
erase %temp%\msg.vbs
goto A