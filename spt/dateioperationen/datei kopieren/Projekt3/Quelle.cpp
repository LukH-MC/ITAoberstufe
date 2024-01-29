#include <iostream>
#include <stdio.h>
using namespace std;
#pragma warning(disable:4996)

void main() {
	FILE* f = fopen("C:/Users/frosendahl/Documents/test.txt", "rb");
	FILE* e = fopen("C:/Users/frosendahl/Documents/test2.txt", "wb");
	while (feof(f) == 0) {
		int zeichen = fgetc(f);
		if (feof(f) == 0) {
			fputc(zeichen, e);
		}
	}
	fclose(f);
	fclose(e);
}