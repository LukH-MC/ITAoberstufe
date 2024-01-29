#include <iostream>
using namespace std;

int StrLaenge(char K[]) {
    int laenge = 0;
    for (int i = 0; K[i] != '\0'; i++) laenge++;

    return laenge;
}

void StrKopie(char Quelle[], char Ziel[]) {
	int j;
	for (int i = 0; Quelle[i] != '\0'; i++) {
	Ziel[i] = Quelle[i];
	j = i;
	}
	Ziel[j + 1] = '\0';
}

void StrVergleich(char Str1[], char Str2[]) {
	int vergleich = 0;
	int länger = 0;
	int kürzer = 0;
	for (int i = 0; Str1[i] != '\0'; i++) {
		if (Str1[i + 1] == '\0' && Str2[i + 1] != '\0') { kürzer = 1; break; }
		else if (Str1[i + 1] != '\0' && Str2[i + 1] == '\0') { länger = 1; break; }
		if (Str1[i] > Str2[i] && vergleich <= 1) { vergleich = vergleich + 1; }
		else if (Str1[i] < Str2[i] && vergleich >= -1) { vergleich = vergleich - 1; }
	}
	if (länger == 1) { vergleich = 1; }
	if (kürzer == 1) { vergleich = -1; }
	if (vergleich == 0) { cout << "Kette 1 und 2 sind gleich groß" << endl << endl; }
	else if (vergleich == 1) { cout << "Kette 1 ist größer als Kette 2" << endl << endl; }
	else if (vergleich == -1) { cout << "Kette 1 ist kleiner als Kette 2" << endl << endl; }
}

void main() {
	locale::global(locale("German_germany"));
    char Kette[20 + 1];
	char Kette1[20 + 1];
	char Kette2[20 + 1];
    int length;

    cout << "Bitte eine Zeichenkette eingeben: ";
    cin >> Kette;

    cout << "Anzahl Zeichen: " << StrLaenge(Kette) << endl;
	StrKopie(Kette, Kette1);
	cout << "Kopierte Kette: " << Kette1 << endl;
	cout << "Weitere Zeichenkette eingeben: ";
	cin >> Kette2;
	StrVergleich(Kette, Kette2);
    
    system("pause");
}