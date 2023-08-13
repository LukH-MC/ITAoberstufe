#include <iostream>

using namespace std;

void main()
{
	locale::global(locale("German_germany"));

	int x;
	int y = 0;

	cout << "Bitte Zahl eingeben: " << endl;
	cin >> x;

	do
	{
		
		cout << "Da Zahlen: " << y << endl;
		y += 2;

	} while (y < x);
}