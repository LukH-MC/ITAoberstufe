#include <iostream>
#include <stdlib.h>
#include <string>
#include <cstdlib>
using namespace std;

int i = 0;

struct TAdresse
{
	char Nachname[50 + 1];
	char Vorname[50 + 1];
	int Alter;
};

void Einlesen(TAdresse N[], int anzahl)
{
	system("cls");
	if (i < anzahl) {
		cout << "Bitte Namen von Person " << i + 1 << " eingeben: ";
		cin >> N[i].Nachname;
		cout << "Bitte Vorname von Person " << i + 1 << " eingeben: ";
		cin >> N[i].Vorname;
		cout << "Bitte das Alter von Person " << i + 1 << " eingeben: ";
		cin >> N[i].Alter;
		i++;
	}
	else { cout << "Keine weiteren Personen mehr möglich"; }
}

void Ausgabe(TAdresse N[], int anzahl)
{
	system("cls");
	for (int j = 0; j < i; j++)
	{
		cout << "Name von Person " << j + 1 << ": " << N[j].Nachname << endl;
		cout << "Vorname von Person " << j + 1 << ": " << N[j].Vorname << endl;
		cout << "Alter von Person " << j + 1 << ": " << N[j].Alter << endl;
		cout << endl;
	}
	system("pause");
}

void loeschen(TAdresse N[]) {
	system("cls");
	int auswahl;

	cout << "Wer soll gelöscht werden?" << endl;
	cin >> auswahl;
	for (auswahl; auswahl <= i; auswahl++)
	{
		N[auswahl] = N[auswahl++];
		cout << auswahl;
	}
}

void aendern(TAdresse N[]) {
	system("cls");
	int person = 0;
	int wahl = 0;

	cout << "Welche Person soll geändert werden?" << endl;
	cin >> person;
	cout << "Was soll geändert werden?" << endl << "[1] Name" << endl << "[2] Vorname" << endl << "[3] Alter" << endl;
	cin >> wahl;
	cout << "Auf was soll geändert werden?" << endl;
	if (wahl == 1) { cin >> N[person-1].Nachname; }
	if (wahl == 2) { cin >> N[person-1].Vorname; }
	if (wahl == 3) { cin >> N[person-1].Alter; }
}

void sortieren() {

}

void main()
{
	locale::global(locale("German_germany"));
	const int MAX = 100;
	char auswahl;
	TAdresse Namen[MAX];

start:
	system("cls");
	cout << "[1] Anlegen" << endl << "[2] Ausgeben" << endl << "[3] Ändern" << endl << "[4] Löschen" << endl << "[5] Sortieren" << endl << "[X] Beenden" << endl;
	cin >> auswahl;
	if (auswahl == '1') { Einlesen(Namen, MAX); }
	else if (auswahl == '2') { Ausgabe(Namen, MAX); }
	else if (auswahl == '3') { aendern(Namen); }
	else if (auswahl == '4') { loeschen(Namen); }
	else if (auswahl == '5') { sortieren(); }
	else if (auswahl == 'X' || auswahl == 'x') { goto ende; }

	goto start;
ende:
	;
}