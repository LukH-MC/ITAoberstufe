#include <pch.h>

#include <iostream>
using namespace std;

void main()

{
	float s; //s= startkapital
	float z; //z= zinssatz (%)
	float e; //endkapital
	float v_1; // z / 100
	float v_2; // v_1 + 1
	float v_3; // v_1 + 1 ^ 3 

	cout << "Bitte geben Sie das Startkapital ein: "; cin >> s;
	cout << "Bitte geben Sie den Zinssatz ein: "; cin >> z;
		
		v_1 = z / 100;
		v_2 = v_1 + 1;
		v_3 = v_2 * v_2 * v_2;
		e = s * v_3;

	cout << "Ihre Anlagen betragen " << e << " Euro in 3 Jahren." << endl;
}
