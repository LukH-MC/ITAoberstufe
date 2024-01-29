#include<iostream>
using namespace std;

#pragma warning(disable:4996)

class TTest
{
private:
	char * Bezeichnung;
	int x;

public:
	TTest() { Bezeichnung = NULL; }

	TTest(char * X)
	{
		int k = strlen(X);
		Bezeichnung = new char[k + 1];
		strcpy(Bezeichnung, X);
	}

	~TTest()
	{
		if (Bezeichnung != NULL)
		{
			if (strlen(Bezeichnung) > 1) delete[] Bezeichnung;
			else delete Bezeichnung;
		}
	}

	TTest(TTest &X)
	{
		strcpy(Bezeichnung, X.Bezeichnung);
	}

	void SetzeBezeichnung(char * X)
	{
		int k = strlen(X);

		if (Bezeichnung != NULL)
		{
			if (strlen(Bezeichnung) > 1) delete[] Bezeichnung;
			else delete Bezeichnung;
		}
		Bezeichnung = new char[k + 1];
		strcpy(Bezeichnung, X);
	}

	void GibBezeichnung(char * X)
	{
		if (Bezeichnung != NULL)
			strcpy(X, Bezeichnung);
	}
};

void main()
{
	TTest X("Hallo");
	TTest Y(X); //1-1 Zuweisung
	char Kette[30 + 1];
	//--> X und Y zeigen beide auf gleichen Speicher

	X.GibBezeichnung(Kette);
	cout << Kette << endl;
	Y.SetzeBezeichnung("C++");
	X.GibBezeichnung(Kette);
	cout << Kette << endl;
	system("pause");
}