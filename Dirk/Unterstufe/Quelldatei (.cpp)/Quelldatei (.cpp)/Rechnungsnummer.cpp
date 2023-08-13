#include<iostream>

using namespace std;

void main()
{
	int Rechnungsnr;

	cout << "Bitte Rechnungsnummer eingeben: ";
	cin >> Rechnungsnr;

	if ( Rechnungsnr >=1000 && Rechnungsnr <=1999 )
	{
		if ( Rechnungsnr <1200 )
		{
			Rechnungsnr = Rechnungsnr + 1000;
			cout << "Ihre Rechnungsnummer betraegt: " << Rechnungsnr << endl;
		}
		else
		{
			if (Rechnungsnr >= 1200 && Rechnungsnr < 1500)
			{
				Rechnungsnr = Rechnungsnr + 1500;
				cout << "Ihre Rechnungsnummer betraegt: " << Rechnungsnr << endl;
			}
			else
			{
				if (Rechnungsnr >=2000)
				{
					Rechnungsnr = Rechnungsnr + 2000;
					cout << "Ihre Rechnungsnummer betraegt: " << Rechnungsnr << endl;
				}
			}
		}
	}
	else
	{
		cout << "Fehler: Rechnungsnummer nicht zwischen 1000 und 1999";
	}
}