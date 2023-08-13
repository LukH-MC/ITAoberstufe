echo off
md c:\Mitarbeiter\Meier
md c:\Mitarbeiter\Koch
md c:\Mitarbeiter\Lose
md c:\Chef
echo on
xcopy c:\Mitarbeiter\Meier\*.* c:\Chef
xcopy c:\Mitarbeiter\Koch\*.* c:\Chef
xcopy c:\Mitarbeiter\Lose\*.* c:\Chef
pause