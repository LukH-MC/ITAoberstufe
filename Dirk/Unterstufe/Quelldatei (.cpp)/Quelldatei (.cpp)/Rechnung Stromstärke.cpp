#include <iostream>
using namespace std;

void main()

{
	float volt;
	float ohm;
	float ampere;

	cout << "Bitte Spannung in Volt eingeben:" << endl;
		cin >> volt;
		cout << "Sie haben folgendes eingegeben: " << volt << " Volt" << endl;

	cout << "Bitte Widerstand in Ohm eingeben:" << endl;
		cin >> ohm;
		cout << "Sie haben folgendes eingegeben: " << ohm << " Ohm" << endl;

//Berechnung:
	ampere = volt / ohm;

	cout << "Die Stromstärke betraegt: " << ampere << " Ampere" << endl;
}