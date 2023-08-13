#include<iostream>

using namespace std;

void main()
{

	locale::global(locale("German_germany"));
	float GB = 620; 
	int Rabatt = 0;
	int Geschosse;
	int Versicherung;
	int Baujahr;

	cout << "Bitte geben Sie die Anzahl der Geschosse ein: " << endl;
	cin >> Geschosse;

	if (Geschosse > 5)
	{
		GB = GB * 1.25;
	}
	else
	{
		if (Geschosse > 3)
		{
			GB = GB * 1.15;
		}
		else
		{
			if (Geschosse == 1)
			{
				GB = GB * 0.95;
			}
		}
	}

	cout << "Sind Versicherungen vorhanden? (1=JA, 0=NEIN)" << endl;
	cin >> Versicherung;

	if (Versicherung == 1)
	{
		Rabatt += 6;
	}

	cout << "Liegt das Baujahr vor 1975 ( 1=JA, 0=NEIN)" << endl;
	cin >> Baujahr;

	if (Baujahr == 0)
	{
		Rabatt += 2;
	}

	GB -= GB * Rabatt / 100;

	cout << "Der Versicherungsbeitrag beträgt: " << GB << Euro << endl;

}

