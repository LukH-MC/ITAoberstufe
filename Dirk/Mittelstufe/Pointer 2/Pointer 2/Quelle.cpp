#include<iostream>
#include<iomanip>
using namespace std;

void hexa(int num)
{
	cout << hex << num << endl;
}

void deci(int num)
{
	cout << dec << num << endl;
}

void octa(int num)
{
	cout << oct << num << endl;
}

void main()
{

	void(*pHexa)(int);
	void(*pDeci)(int);
	void(*pOcta)(int);

	pHexa = hexa;
	pDeci = deci;
	pOcta = octa;


	int num;
	int type;


	cout << "Bitte geben sie eine Zahl ein: " << endl;
	cin >> num;
	cout << endl << "1 fuer Hexadezimal" << endl << "2 fuer Dezimal" << endl << "3 fuer Octal" << endl;
	cin >> type;
	cout << endl << endl << endl;

	if (type == 1)
	{
		(*pHexa)(num);
	}

	else if (type == 2)
	{
		(*pDeci)(num);
	}

	else if (type == 3)
	{
		(*pOcta)(num);
	}

	else
	{
		cout << endl  << "ERROR" << endl << endl;
	}
}