using System.Text;

namespace Eigenschaften
{
    class CPassword
    {
        private string password;
        private string pwnew;
        public string PWD
        {
            set
            {
                password = value;
            }
        }
        public string PWD_CODE
        {
            get
            {
                string pwtemp = password;
                foreach (var chr in pwtemp)
                {
                    int temp = chr + password.Length;
                    if (temp > 127)
                    {
                        temp = temp - 93;
                    }
                    pwnew += Convert.ToChar(temp);
                }

                return pwnew;
            }
        }
    }

    class Program
    {
        static int Main(string[] args)
        {
            CPassword P = new CPassword();
            P.PWD = Console.ReadLine();
            Console.WriteLine(P.PWD_CODE);
            
            return 0;
        }
    }
}