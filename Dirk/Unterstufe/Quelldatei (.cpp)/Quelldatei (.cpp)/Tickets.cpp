#include<iostream>

using namespace std;

void main()
{
	int Alter;
	float Ticketpreis;
	float Ticketpreis_Kind;
	float Ticketpreis_Student;
	int Student;

	cout << "Bitte Ticketpreis eingeben: " << endl;
	cin >> Ticketpreis;
	cout << "Bitte Alter eingeben: " << endl;
	cin >> Alter;
	if (Alter < 18)
		{
			Ticketpreis_Kind = Ticketpreis / 100 * 10;
			cout << "Ihr Ticket kostet " << Ticketpreis_Kind << endl;
		}
	if (Alter >= 18)
		{
			cout << "Sind Sie Student? (1 = ja / 0 = nein" << endl;
			cin >> Student;

			if (Student == 1)
			{
				Ticketpreis_Student = Ticketpreis / 100 * 60;
				cout << "Ihr Ticket kostet " << Ticketpreis_Student << endl;

			}
			else
			{
				cout << "Ihr Ticket kostet: " << Ticketpreis << endl;
			}
		}
	

		
}