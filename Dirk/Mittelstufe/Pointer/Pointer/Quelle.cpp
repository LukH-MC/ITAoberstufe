#include<iostream>

using namespace std;

//void quad(int *px)
//{
//	*px = *px * *px;
//}
//
//void sort(char *pxChar, char *pyChar, char *pzChar)
//{
//	char s1;
//
//	
//	if (*pxChar > *pyChar)
//	{
//		s1 = *pxChar;
//		*pxChar = *pyChar;
//		*pyChar = s1;
//	}
//	if (*pxChar = *pzChar)
//	{
//		s1 = *pxChar;
//		*pxChar = *pzChar;
//		*pzChar = s1;
//	}
//	if (*pyChar > *pzChar)
//	{
//		s1 = *pyChar;
//		*pyChar = *pzChar;
//		*pzChar = s1;
//	}
//	
//}

void ausgabe()
{
	cout << "Zeiger und Funktionen sind toll!" << endl;
}

void main()
{
	////Quadrieren mit Pointern

	//int x;
	//int x1;

	//cout << "Bitte geben Sie eine Zahl ein." << endl;
	//cin >> x;

	//x1 = x;

	//quad(&x);

	//cout << x1 << "^2 = " << x << endl << endl;


	////Sortieren mit Pointern

	//char xChar = 'c';
	//char yChar = 'b';
	//char zChar = 'a';

	//sort(&xChar, &yChar, &zChar);

	//cout << xChar << yChar << zChar;

	void(*pFunc)();

	pFunc = ausgabe;

	ausgabe();
	(*pFunc)();
}