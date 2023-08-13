#include <iostream>
using namespace std;

void main()
{
	float wert_1;
	float wert_2;
	float ergebnis_1;
	float ergebnis_2;
	float ergebnis_3;

	cout << "Bitte geben Wert 1 eingeben:" << endl;
	cin >> wert_1;
	cout << "Wert 1 lautet: " << wert_1 << endl;

	cout << "Bitte Wert 2 eingeben:" << endl;
	cin >> wert_2;
	cout << "Wert 2 lautet: " << wert_2 << endl;

	ergebnis_1 = wert_1 + wert_2;
	cout << wert_1 <<"+" wert_2 << "=" << ergebnis_1 << endl;

	ergebnis_2 = wert_1 * wert_2;
	cout << "Wert 1 mal Wert 2 ergibt: " << ergebnis_2 << endl;

	ergebnis_3 = wert_1 - wert_2;
	cout << "Wert 1 minus Wert 2 ergibt: " << ergebnis_3 << endl;
}