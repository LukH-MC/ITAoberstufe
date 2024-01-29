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
struct zahleintr�ge {
	string eintragnr;
};

//Neuen Eintag
void new_entry(eintrag eintr�ge[512], zahleintr�ge eintragnr[1]){
	fread(eintragnr, sizeof(eintragnr), 1, e);
	cout << "Name: ";
	cin >> eintr�ge[0].name;
	cout << "Vorname: ";
	cin >> eintr�ge[0].vorname;
	cout << "Adresse: ";
	cin >> eintr�ge[0].adresse;
	cout << "Geburtsdatum: ";
	cin >> eintr�ge[0].geburtsdatum;
	cout << "Telefon: ";
	cin >> eintr�ge[0].telefon;
	fwrite(eintr�ge, sizeof(eintrag), 1, f);
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
void single_show(eintrag eintr�ge[512]){
	cout << "Welchen Datensatz anzeigen? ";
	int nr;
	cin >> nr;
	fseek(f, (nr - 1) * sizeof(eintrag), SEEK_SET);
	fread(eintr�ge, sizeof(eintrag), 1, f);
	cout << "Name:         " << eintr�ge[0].name << endl;
	cout << "Vorname:      " << eintr�ge[0].vorname << endl;
	cout << "Adresse:      " << eintr�ge[0].adresse << endl;
	cout << "Geburtsdatum: " << eintr�ge[0].geburtsdatum << endl;
	cout << "Telefon:      " << eintr�ge[0].telefon << endl;

	system("pause");
}

//einzelnen Eintag l�schen
void delete_single(){

}

//Alle Eintr�ge l�schen
void delete_all() {

}

int menu() {
	string input;
	system("cls");
	cout << "Adressbuchverwaltung 2.0" << endl;
	cout << "[1] Neuen Eintrag\n[2] Eintag Editieren\n[3] Eintag Suchen\n[4] Eintr�ge Sortieren\n[5] Eintrag anzeigen\n[6] Einen Eintrag l�schen\n[7] Alle Eintr�ge l�schen\n[8] Anzahl Eintr�ge ausgeben\n[0] Verlassen" << endl;

	//f�r einen g�ltigen Eintrag sorgen
	while (true) {
		cout << "\n> ";
		getline(cin, input);
		if (isdigit(input[0])) {
			input = input[0];
			int selection = stoi(input);

			if (selection >= 0 && selection <= 7) return selection;
			else cout << "Ung�ltige Auswahl" << endl;
		}
		else cout << "Eingabe war keine g�ltige Zahl" << endl;
	}
}

int main() {
	locale::global(locale("German_germany"));

	//VARIABLEN
	int selection;
	eintrag eintr�ge[512] = {};
	zahleintr�ge eintragnr[1] = {};
	f = fopen("C:\\Users\\frosendahl\\Documents\\adressbuch.txt", "w+b");
	e = fopen("C:\\Users\\frosendahl\\Documents\\eintragnr.txt", "w+b");

	if (f == NULL) {
		cout << "Fehler beim �ffnen der Datei" << endl;
		system("pause");
		return 0;
	}

	// MEN�
	while (true)
	{
		selection = menu();
		switch (selection)
		{
		case 0:
			exit(0);
			break;
		case 1:
			new_entry(eintr�ge);
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
			single_show(eintr�ge);
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