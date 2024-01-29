#include <iostream>
#include <stdio.h>
using namespace std;
#pragma warning(disable:4996)

void main() {
	FILE* f = fopen("C:/Users/frosendahl/Documents/test.txt", "r");
	char kette[1000000 + 1];
	while (feof(f) == 0) {
		printf("%c", fgetc(f));
	}
	fclose(f);

	system("pause");
}