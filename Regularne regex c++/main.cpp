#include <regex>
#include <iostream>
#include <fstream>
#include <string>

using namespace std;

int main()
{
	try
	{
		ifstream in("plik.txt");
		regex regularne("[0-9]{2}-[0-9]{3}");
		
			int regex = 0;
			string input;
			
			while (getline(in, input)) 
			{
				++regex;
				smatch match;
				if (regex_search(input, match, regularne)) 
				{
					cout << regex << ": " << match[0] << '\n';
				}
			}
	}
	
catch (...){//Taki blok �apie wszystko. Dlatego kompilator nie dopu�ci by wszystko�api�cy catch by� przed innymi instrukcjami catch.
}



return 0;
}
