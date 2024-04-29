using System;

namespace Klassen
{
    class CPunkt
    {
        private double x, y;

        public CPunkt() {}
        public CPunkt(double a, double b)
        {
            this.x = a;
            this.y = b;
        }
        public CPunkt(CPunkt P)
        {
            this.x = P.x;
            this.y = P.y;
        }
        public int SetCoords(double a, double b)
        {
            this.x = a;
            this.y = b;
            return 0;
        }
        public double GetX()
        {
            return this.x;
        }
        public double GetY()
        {
            return this.y;
        }
        public double Diff()
        {
            double diff = Math.Pow(this.x, 2) + Math.Pow(this.y, 2);
            return Math.Sqrt(diff);
        }
    }

    class Programm
    {
        static int Main(string[] args)
        {
            CPunkt A = new CPunkt(10, 20);
            CPunkt B = new CPunkt(A);
            CPunkt C = new CPunkt();

            C.SetCoords(Convert.ToDouble(Console.ReadLine()), Convert.ToDouble(Console.ReadLine()));

            Console.WriteLine("Punkt A <" + A.GetX() + "|" + A.GetY() + ">");
            Console.WriteLine("Abstand von Punkt A zu <0|0>: " + A.Diff());
            Console.WriteLine("Punkt B <" + B.GetX() + "|" + B.GetY() + ">");
            Console.WriteLine("Abstand von Punkt B zu <0|0>: " + B.Diff());
            Console.WriteLine("Punkt C <" + C.GetX() + "|" + C.GetY() + ">");
            Console.WriteLine("Abstand von Punkt C zu <0|0>: " + C.Diff());

            return 0;
        }
    }
}