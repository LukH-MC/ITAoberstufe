#include<iostream>

using namespace std;

bool palindrom(char kettePalindrom [])
{
	bool boolPalindrom;

	int strSize = 0;
	int j = 0;
	const int strLength = 4;

	char kettePalindromReversed[strLength + 1];
	

	for (; kettePalindrom[strSize] != '\0'; strSize++);
	
	for (int i = strSize ; kettePalindrom[i] != 0 ; i--)
	{
		kettePalindromReversed[i] = kettePalindrom[j];
		j++;
	}
	kettePalindromReversed[j] = '\0';
	
	for (int i = 0; i < strSize; i++)
	{
		if (kettePalindrom[i] == kettePalindromReversed[i]) boolPalindrom = true;
		else
		{
			boolPalindrom = false;
			break;
		}
	}

	
}

void main()
{
	const int strLength = 4;
	char kettePalindrom[strLength + 1] = "otto";

	if (palindrom(kettePalindrom) == true) cout << kettePalindrom << " ist ein Palindrom." << endl;
}