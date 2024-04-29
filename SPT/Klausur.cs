using System;
using System.Collections;

namespace Klausur
{
    class CListe
    {
        private ArrayList array = new ArrayList();
        public void Add(Object obj)
        {
            this.array.Add(obj);
        }
        public void ShowNumeric()
        {
            Console.WriteLine("\nNumerische Werte:");
            for (int i = 0; i < this.array.Count; i++)
            {
                if (this.array[i].GetType() == typeof(int) || this.array[i].GetType() == typeof(double))
                {
                    Console.WriteLine(this.array[i].ToString());
                }
            }
        }
        public void ShowString()
        {
            Console.WriteLine("\nZeichenketten:");
            for (int i = 0; i < this.array.Count; i++)
            {
                if (this.array[i].GetType() == typeof(string))
                {
                    Console.WriteLine(this.array[i].ToString());
                }
            }
        }
        public void ShowOther()
        {
            Console.WriteLine("\nRest:");
            for (int i = 0; i < this.array.Count; i++)
            {
                if (this.array[i].GetType() != typeof(int) && this.array[i].GetType() != typeof(double) && this.array[i].GetType() != typeof(string))
                {
                    Console.WriteLine(this.array[i].ToString());
                }
            }
        }
        public void ShowNumericSorted()
        {
            Console.WriteLine("\nNumerische Werte sortiert:");
            ArrayList nums = new ArrayList();
            for (int i = 0; i < this.array.Count; i++)
            {
                if (this.array[i].GetType() == typeof(int) || this.array[i].GetType() == typeof(double))
                {
                    nums.Add(Convert.ToDouble(this.array[i]));
                }
            }
            nums.Sort();
            for (int i = 0; i < nums.Count; i++)
            {
                Console.WriteLine(nums[i].ToString());
            }
        }
    }

    internal class Program
    {
        static void Main(string[] args)
        {
            CListe liste = new CListe();
            System.IO.DriveInfo info = new System.IO.DriveInfo("C:/");
            object einobjekt = new object();

            liste.Add(10);
            liste.Add(243);
            liste.Add(info);
            liste.Add(20);
            liste.Add("hallo");
            liste.Add(3.5);
            liste.Add("test");
            liste.Add(einobjekt);
            liste.Add(2.8);
            liste.ShowNumeric();
            liste.ShowString();
            liste.ShowOther();
            liste.ShowNumericSorted();

            Console.ReadKey();
        }
    }
}

//HAR: Super Lösung!!!

/*
Beurteilung:
Anlegen der Klasse mit Attribut Liste: 	6 / 6 Punkte
Methode Add                               3 / 3 Punkte
Methode ShowNumeric                       4 / 4 Punkte
Methode ShowString                        3 / 3 Punkte
Methode ShowRest                          4 / 4 Punkte
Methode ShowNumericSort                   5 / 5 Punkte

gesamt: 		25 / 25 Punkten

Note: sehr gut (plus)

06.11.2023 Hardy

sehr gut (+)            :25 bis 25 Punkte
sehr gut                :24 bis 23 Punkte
sehr gut (-)            :22 bis 22 Punkte
gut (+)                 :21 bis 21 Punkte
gut                     :20 bis 19 Punkte
gut (-)                 :18 bis 18 Punkte
befriedigend (+)        :17 bis 17 Punkte
befriedigend            :16 bis 15 Punkte
befriedigend (-)        :14 bis 14 Punkte
ausreichend (+)         :13 bis 13 Punkte
ausreichend             :12 bis 11 Punkte
ausreichend (-)         :10 bis 10 Punkte
*/

