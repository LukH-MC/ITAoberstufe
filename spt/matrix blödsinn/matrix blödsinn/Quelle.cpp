#include <iostream>
using namespace std;

void main() {
	int anzahlz;
	int anzahls;
	cout << "Anzahl an Zeilen angeben: ";
	cin >> anzahlz;
	cout << "Anzahl an Spalten angeben: ";
	cin >> anzahls;
	system("cls");
	int **tabelle = new int*[2];
	tabelle[0] = new int[10];
	tabelle[1] = new int[10];

	if (tabelle == NULL) cout << endl << "Fehler" << endl;
	else {
		for (int i = 0; i < anzahlz; i++) {
			for (int j = 0; j < anzahls; j++) {
				cout << "Zeile " << i+1 << ", Spalte " << j+1 << ": ";
				cin >> tabelle[i][j];
			}
		}
		for (int k = 0; k < anzahlz; k++) {
			cout << "| ";
			for (int l = 0; l < anzahls; l++) {
				cout << tabelle[k][l] << " | ";
			}
			cout << endl;
		}
		delete[] tabelle;
	}
	system("pause");
}