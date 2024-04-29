using System;

namespace Vererbung
{
  class CPerson
  {
    protected string name;

    public CPerson(string n) {
      name = n;
    }
    public override string ToString() {
      return "\nName: " + name;
    }
  }

  class CKunde : CPerson
  {
    private string firma;

    public CKunde(string n, string f) : base(n) {
      firma = f;
    }
    public override string ToString() {
      return base.ToString() + "\nFirma: " + firma;
    }
  }

  class CMitarbeiter : CPerson
  {
    private string abteilung;

    public CMitarbeiter(string n, string a) : base(n) {
      abteilung = a;
    }
    public override string ToString() {
      return base.ToString() + "\nAbteilung: " + abteilung;
    }
  }

  class Program
  {
    public static int Main()
    {
      CPerson person = new CPerson("Hans");
      Console.WriteLine(person.ToString());
      CKunde kunde = new CKunde("Dieter", "IT Pro GMBH");
      Console.WriteLine(kunde.ToString());
      CMitarbeiter mitarbeiter = new CMitarbeiter("Klaus", "Verhandlung");
      Console.WriteLine(mitarbeiter.ToString());

      return 0;
    }
  }
}
