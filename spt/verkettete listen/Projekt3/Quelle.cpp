#include <string.h>
#include <iostream>
using namespace std;
#pragma warning(disable:4996)

struct TAdresse
{
	char Name[50 + 1];
	char Vorname[50 + 1];
	char Geburtsdatum[10 + 1];
	char Telefon[20 + 1];

	TAdresse  *prev;
	TAdresse  *next;
};

void input(TAdresse * root, TAdresse inhalt)
{
	TAdresse* Laeufer = root;
	TAdresse* dummy;

	while (Laeufer->next != NULL)
	{
		Laeufer = Laeufer->next;
	}

	Laeufer->next = new TAdresse;  // TRICK: neues Element auf nach
	dummy = Laeufer;  // Adresse sichern
	Laeufer = Laeufer->next;  // Laeufer geht weiter
	Laeufer->prev = dummy;  // vor-Zeiger korrekt setzen
	Laeufer->next = NULL;  // Noch kein Nachfolger

	strcpy(Laeufer->Name, inhalt.Name);
	strcpy(Laeufer->Vorname, inhalt.Vorname);
	strcpy(Laeufer->Geburtsdatum, inhalt.Geburtsdatum);
	strcpy(Laeufer->Telefon, inhalt.Telefon);
}

void output(TAdresse * root)
{
	//Ausgabe der Liste
	TAdresse*    Laeufer = root;

	system("cls");
	cout << endl << "Ausgabe der Daten:" << endl;
	int i = 1;

	while (Laeufer->next != NULL)
	{
		Laeufer = Laeufer->next;
		cout << "[" << i << "] ";
		cout << Laeufer->Name << ", ";
		cout << Laeufer->Vorname << ", ";
		cout << Laeufer->Geburtsdatum << ", ";
		cout << Laeufer->Telefon << endl;
		i++;
	}
	system("pause");
}

int selection(const char title[]) {
	cout << title;
	cout << "<1> Name" << endl;
	cout << "<2> Vorname" << endl;
	cout << "<3> Telefon" << endl;
	cout << "<4> Geburtsdatum" << endl;
	int i = 0;
	do {
		if (i < 0 || i > 4)
			cout << "Bitte gebe einen gültigen Wert ein." << endl;

		cin >> i;
	} while (i < 0 || i > 4);
	return i;
}

void search(TAdresse * root)
{
	TAdresse* laeufer = root;
	char strToCmp[50 + 1];
	int choice = selection("Nach welcher Eigenschaft möchtest du Suchen?\n");

	cout << "Bitte den Suchbegriff eingeben: ";
	cin >> strToCmp;

	while (laeufer->next != NULL) {
		laeufer = find(choice, strToCmp, laeufer);
		if (laeufer == NULL)
			break;
		print(laeufer);
	}
}

void del(TAdresse * root)
{
	
}

TAdresse* find(int choice, char* strToCmp, TAdresse* start) {
	TAdresse* laeufer = start;
	bool found;

	while (laeufer->next != NULL) {
		laeufer = laeufer->next;
		found = false;
		if (choice == 1 && !strcmp(strToCmp, laeufer->Name))
			found = true;
		else if (choice == 2 && !strcmp(strToCmp, laeufer->Vorname))
			found = true;
		else if (choice == 3 && !strcmp(strToCmp, laeufer->Telefon))
			found = true;
		else if (choice == 4 && !strcmp(strToCmp, laeufer->Geburtsdatum))
			found = true;
		else if (choice == 5 && (!strcmp(strToCmp, laeufer->Vorname) || !strcmp(strToCmp, laeufer->Name) || !strcmp(strToCmp, laeufer->Telefon) || !strcmp(strToCmp, laeufer->Geburtsdatum)))
			found = true;

		if (found)
			return laeufer;
	}
	return NULL;
}

void print(TAdresse* address) {
	cout << address->Name << ", " << address->Vorname << ", " << address->Telefon << ", " << address->Geburtsdatum << endl;
}

void fill(TAdresse* address) {
	cout << "Bitte Namen eingeben: ";
	cin >> address->Name;
	cout << "Bitte Vornamen eingeben: ";
	cin >> address->Vorname;
	cout << "Bitte Telefon eingeben: ";
	cin >> address->Telefon;
	cout << "Bitte Geburtsdatum eingeben: ";
	cin >> address->Geburtsdatum;
}

void edit(TAdresse * root)
{
	TAdresse* laeufer = root;
	char str[50+1];
	int i = 0;
	int wahl = selection("Nach was soll gesucht werden?\n");
	
	cout << "Suche: ";
	cin >> str;

	while (laeufer->next != NULL) {
		laeufer = find(wahl, str, laeufer);
		if (laeufer == NULL)
			return;

		cout << "Gefunden: "; print(laeufer);
		cout << "<1> Weiter suchen" << endl;
		cout << "<2> Adresse bearbeiten" << endl;
		cout << "<3> Abbrechen" << endl;
		int i = 0;
		cin >> i;

		if (i == 1)
			continue;
		else if (i == 2) {
			fill(laeufer);
			return;
		}
		else
			return;
	}
}

int menu()
{
	int wahl;
	do
	{
		cout << "Adressverwaltung mit TAdresse Version 1.0" << endl;
		cout << "<1> Adresse eingeben" << endl;
		cout << "<2> Adresse suchen" << endl;
		cout << "<3> Adresse löschen" << endl;
		cout << "<4> Adresse ändern" << endl;
		cout << "<5> Adressen ausgeben" << endl << endl;
		cout << "<6> 15 Adressen automatisch einfügen" << endl << endl;
		cout << "<0> ENDE" << endl;

		cin >> wahl;
	} while (wahl < 0 || wahl > 6);

	return wahl;
}

void main()
{
	locale::global(locale("German_germany"));

	TAdresse Testadressen[15] = {
		{ "Mueller", "Peter", "03.11.1992", "2388794" },
		{ "Schmidt", "Jens", "30.07.1978", "4494533" },
		{ "Weber", "Aaron", "02.02.1984", "1370940" },
		{ "Schneider", "Ralf", "11.11.1982", "2903438" },
		{ "Johannes", "Thomas", "14.06.1989", "5590858" },
		{ "Meyer", "Annett ", "09.04.1987", "8753860" },
		{ "Samson", "Julia", "01.12.1973", "8341813" },
		{ "Mueller", "Sven", "18.06.1984", "4979783" },
		{ "Wagner", "Katja", "24.02.1960", "3374941" },
		{ "Becker", "Matthias", "15.03.1983", "8417581" },
		{ "Schulz", "Martin", "11.09.1985", "2676860" },
		{ "Hoffmann", "Stefan", "04.02.1994", "7021449" },
		{ "Koch", "Marcel", "02.06.1987", "4263255" },
		{ "Bauer", "Daniel", "10.03.1987", "6390352" },
		{ "Richter", "Sandra", "28.02.1991", "7345123" }
	};


	TAdresse* root;


	root = new TAdresse; // Element dynamisch anlegen
	int wahl = 1;

	TAdresse* runner = root;

	root->prev = NULL;  // noch kein Vorgänger
	root->next = NULL; // noch kein Nachfolger

	while (wahl != 0)
	{
		system("cls");
		wahl = menu();

		switch (wahl)
		{
		case 1: TAdresse inhalt;
			cout << "Bitte Namen eingeben: "; cin >> inhalt.Name;
			cout << "Bitte Vornamen eingeben: "; cin >> inhalt.Vorname;
			cout << "Bitte Geburtsdatum eingeben: "; cin >> inhalt.Geburtsdatum;
			cout << "Bitte Telefon eingeben: "; cin >> inhalt.Telefon;
			input(root, inhalt);
			break;

		case 2: search(root); break;

		case 3: del(root); break;

		case 4: edit(root); break;

		case 5: output(root); break;

		case 6: for (int i = 0; i < 15; i++) input(root, Testadressen[i]); break;

		}
	}
}