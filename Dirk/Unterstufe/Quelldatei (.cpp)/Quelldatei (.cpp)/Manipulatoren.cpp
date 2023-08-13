#include<iostream>
#include<iomanip>

using namespace std;

void main()

{
	locale::global(locale("German_germany"));

	cout << setfill('.');
	cout << setw(1) << 1 << endl;
	cout << setw(2) << 2 << endl;
	cout << setw(3) << 3 << endl;
	cout << setw(4) << 4 << endl;
	cout << setw(5) << 5 << endl;

	cout << hex << 10 << 11 << 11 << 10 << endl;
}