#include <iostream>
#include <iomanip>

using namespace std;

int main(int argc, char *argv[])
{
    int x=0; //Zahl
    int d=0; //Dual
    int q=0; //Quersumme
    int y; 
    int z;
    do
    {
        cout << "Bitte geben sie eine Zahl ein: " << endl;
        cin >> x;
        
        y = x;
        z = x;
    }
    while (x==0);
    
    do
    {
          q = q + y % 10;
          x = y /10; 
    }
    while (y > 0);
    
    cout << "Quersumme: "<<q << endl;
    cout << endl << endl;
        
    system("PAUSE");
    return EXIT_SUCCESS;
}


