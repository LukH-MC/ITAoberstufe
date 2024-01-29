#include <iostream>

using namespace std;

void main() {
	int anzahl = 0;
	cout << "Bitte Anzahl an Werten angeben: ";
	cin >> anzahl;
	double *Zeiger = new double[anzahl];
	if (Zeiger == NULL) cout << endl << "Fehler" << endl;
	else {
		double x = 0;
		for (int i = 0; i < anzahl; i++) {
			system("cls");
			cout << "Anzahl Werte: " << anzahl << endl << "Bitte Wert " << i + 1 << " eingeben: ";
			cin >> Zeiger[i];
		}
		for (int j = 0; j < anzahl; j++) {
			x = x + Zeiger[j];
		}
		x = x / anzahl;
		system("cls");
		cout << "Mittelwert: " << x << endl << endl;
		delete[] Zeiger;
	}
	system("pause");
}