#include <iostream>
#include <stdio.h>
#include <string>

using namespace std;
#pragma warning(disable:4996)

FILE* f;
struct eintrag {
	string name, vorname, adresse, geburtsdatum, telefon;
};

FILE* e;
struct zahleinträge {
	string eintragnr;
};

//Neuen Eintag
void new_entry(eintrag einträge[512], zahleinträge eintragnr[1]){
	fread(eintragnr, sizeof(eintragnr), 1, e);
	cout << "Name: ";
	cin >> einträge[0].name;
	cout << "Vorname: ";
	cin >> einträge[0].vorname;
	cout << "Adresse: ";
	cin >> einträge[0].adresse;
	cout << "Geburtsdatum: ";
	cin >> einträge[0].geburtsdatum;
	cout << "Telefon: ";
	cin >> einträge[0].telefon;
	fwrite(einträge, sizeof(eintrag), 1, f);
	eintragnr++;
	fwrite(eintragnr, sizeof(eintragnr), 1, e);
}

//Eintag editieren
void edit_entry() {
}

//Eintag suche
void search_entry() {

}

//Eintag sortieren
void sort_entry() {

}

//Eintrag anzeigen
void single_show(eintrag einträge[512]){
	cout << "Welchen Datensatz anzeigen? ";
	int nr;
	cin >> nr;
	fseek(f, (nr - 1) * sizeof(eintrag), SEEK_SET);
	fread(einträge, sizeof(eintrag), 1, f);
	cout << "Name:         " << einträge[0].name << endl;
	cout << "Vorname:      " << einträge[0].vorname << endl;
	cout << "Adresse:      " << einträge[0].adresse << endl;
	cout << "Geburtsdatum: " << einträge[0].geburtsdatum << endl;
	cout << "Telefon:      " << einträge[0].telefon << endl;

	system("pause");
}

//einzelnen Eintag löschen
void delete_single(){

}

//Alle Einträge löschen
void delete_all() {

}

int menu() {
	string input;
	system("cls");
	cout << "Adressbuchverwaltung 2.0" << endl;
	cout << "[1] Neuen Eintrag\n[2] Eintag Editieren\n[3] Eintag Suchen\n[4] Einträge Sortieren\n[5] Eintrag anzeigen\n[6] Einen Eintrag löschen\n[7] Alle Einträge löschen\n[8] Anzahl Einträge ausgeben\n[0] Verlassen" << endl;

	//für einen gültigen Eintrag sorgen
	while (true) {
		cout << "\n> ";
		getline(cin, input);
		if (isdigit(input[0])) {
			input = input[0];
			int selection = stoi(input);

			if (selection >= 0 && selection <= 7) return selection;
			else cout << "Ungültige Auswahl" << endl;
		}
		else cout << "Eingabe war keine gültige Zahl" << endl;
	}
}

int main() {
	locale::global(locale("German_germany"));

	//VARIABLEN
	int selection;
	eintrag einträge[512] = {};
	zahleinträge eintragnr[1] = {};
	f = fopen("C:\\Users\\frosendahl\\Documents\\adressbuch.txt", "w+b");
	e = fopen("C:\\Users\\frosendahl\\Documents\\eintragnr.txt", "w+b");

	if (f == NULL) {
		cout << "Fehler beim öffnen der Datei" << endl;
		system("pause");
		return 0;
	}

	// MENÜ
	while (true)
	{
		selection = menu();
		switch (selection)
		{
		case 0:
			exit(0);
			break;
		case 1:
			new_entry(einträge);
			break;
		case 2:
			edit_entry();
			break;
		case 3:
			search_entry();
			break;
		case 4:
			sort_entry();
			break;
		case 5:
			single_show(einträge);
			break;
		case 6:
			delete_single();
			break;
		case 7:
			delete_all();
			break;
		}
		case 8:
			cout << eintragnr;
		cin.clear();
		cin.ignore();
	}

	//ende
	fclose(f);
}