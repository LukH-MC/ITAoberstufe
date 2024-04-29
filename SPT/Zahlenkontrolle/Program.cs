using System;

namespace Zahlenkontrolle
{
    class Program
    {
        static void Main(string[] args)
        {
            bool correct = false;
            while (correct == false)
            {
                Console.WriteLine("Eingabe: ");
                int num = Convert.ToInt32(Console.ReadLine());
                int len = 0;
                int sum = (num / 10000) + (num / 1000 % 10) + (num / 100 % 10) + (num / 10 % 10);
                int check = num % 10;
                for (int i = num; i >= 1; len++)
                {
                    i /= 10;
                }

                if (len == 5)
                {
                    if (num % 3 != 0 && num % 5 != 0 && num % 7 != 0)
                    {
                        if (num / 10000 == 1)
                        {
                            if (num % 10 == 1)
                            {
                                if (sum % 7 == check)
                                {
                                    Console.WriteLine("Eingabe korrekt");
                                    correct = true;
                                }
                                else
                                {
                                    Console.WriteLine("Die Prüfziffer ist falsch.");
                                }
                            }
                            else
                            {
                                Console.WriteLine("Die erste Ziffer ist 1, die letzte aber nicht.");
                            }
                        }
                        else
                        {
                            if (sum % 7 == check)
                            {
                                Console.WriteLine("Eingabe korrekt");
                                correct = true;
                            }
                            else
                            {
                                Console.WriteLine("Die Prüfziffer ist falsch.");
                            }
                        }
                    }
                    else
                    {
                        Console.WriteLine("Zahl Darf nicht durch 3, 5 oder 7 teilbar sein.");
                    }
                }
                else
                {
                    Console.WriteLine("Länge muss 5 sein.");
                }
            }
        }
    }
}