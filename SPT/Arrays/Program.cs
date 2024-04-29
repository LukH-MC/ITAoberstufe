using System;
using System.Collections;

namespace Arrays {
    internal class CVokabel {
        private Hashtable _en = new Hashtable();
        private Hashtable _sp = new Hashtable();
        private string[] _vocs = File.ReadAllLines(Directory.GetCurrentDirectory() + "/Vokabeln.dat");
        private int _num;
        
        public void Read() {
            for (int i = 0; i < 23; i+=3) {
                _en.Add(_vocs[i], _vocs[i+1]);
                _sp.Add(_vocs[i], _vocs[i+2]);
                _num++;
            }
        }
        public void Output() {
            Console.Clear();
            Console.WriteLine("Deutsch-Englisch\n----------------");
            foreach (DictionaryEntry d in _en) {
                Console.WriteLine("Deutsch: " + d.Key + "\t\tEnglisch: " + d.Value);
            }
            Console.WriteLine("\nDeutsch-Spanisch\n----------------");
            foreach (DictionaryEntry d in _sp) {
                Console.WriteLine("Deutsch: " + d.Key + "\t\tSpanisch: " + d.Value);
            }
            Console.ReadKey();
        }
        public void Test(string lang) {
            int correct = 0;
            Console.Clear();
            if (lang == "en") {
                Console.WriteLine("Englischüberprüfung\n-------------------");
                foreach (DictionaryEntry e in _en) {
                    Console.Write("Deutsch: " + e.Key + "\t\tEnglisch: ");
                    string? answer = Console.ReadLine()?.ToLower();
                    if (answer == e.Value?.ToString()) {
                        correct++;
                    }
                }
            }
            else if (lang == "sp") {
                Console.WriteLine("Spanischüberprüfung\n-------------------");
                foreach (DictionaryEntry s in _sp) {
                    Console.Write("Deutsch: " + s.Key + "\t\tSpanisch: ");
                    string? answer = Console.ReadLine()?.ToLower();
                    if (answer == s.Value?.ToString()) {
                        correct++;
                    }
                }
            }
            Console.WriteLine("\nSie haben " + correct + " von " + _num + " richtige Antworten.\nZum fortfahren eine beliebige Taste drücken");
            Console.ReadKey();
        }
    }
    
    internal static class Program {
        private static int Main() {
            bool running = true;
            CVokabel abfrage = new CVokabel();
            abfrage.Read();
            while (running) {
                Console.Clear();
                Console.WriteLine("Vokabelabfrage\n" +
                                  "--------------\n" +
                                  "[1] Alle Vokabeln anzeigen\n" +
                                  "[2] Deutsch-Englisch\n" +
                                  "[3] Deutsch-Spanisch\n" +
                                  "[X] Beenden");
                ConsoleKeyInfo key = Console.ReadKey(true);
                switch (key.Key) {
                    case ConsoleKey.D1:
                        abfrage.Output();
                        break;
                    case ConsoleKey.D2:
                        abfrage.Test("en");
                        break;
                    case ConsoleKey.D3:
                        abfrage.Test("sp");
                        break;
                    case ConsoleKey.X:
                        running = false;
                        break;
                }
            }
            return 0;
        }
    }
}