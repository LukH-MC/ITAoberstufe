namespace Kontrollstrukuren;
public class Program
{
    public static int Main()
    {
        char c1, c2, c3, c4;
        char[] ok = {'p', 'P', 'r', 'R', 'o', 'O', 'g', 'G'};
        Console.WriteLine("Passwort eingeben: ");
        c1 = Convert.ToChar(Console.ReadLine());
        c2 = Convert.ToChar(Console.ReadLine());
        c3 = Convert.ToChar(Console.ReadLine());
        c4 = Convert.ToChar(Console.ReadLine());
        if (ok.Contains(c1) && ok.Contains(c2) && ok.Contains(c3) && ok.Contains(c4))
        {
            Console.WriteLine("LOGIN korrekt");
        }
        Console.ReadKey();
        return 0;
    }
}