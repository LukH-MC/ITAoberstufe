using System;

namespace Indexer
{
    class CSatz
    {
        private char[] _satz = new char[char.MaxValue];
        
        public CSatz(string ein)
        {
            ein.Split(' ', ',', '.', ':', '\t');
        }
        
    }
    
    class Program
    {
        private int Main()
        {
            return 0;
        }
    }
}