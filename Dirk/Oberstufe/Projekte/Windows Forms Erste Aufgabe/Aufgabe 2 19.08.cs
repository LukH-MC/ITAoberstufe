using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Drawing;
using System.Windows.Forms;

namespace ConsoleApplication1
{
    class Program: Form
    {
        protected override void OnResize(EventArgs e)
        {
            this.Invalidate();
        }
        protected override void OnPaint(PaintEventArgs e)
        {
            Graphics gra = e.Graphics;


            gra.DrawEllipse(Pens.Black, (this.Width / 3), (this.Height / 3), 50, 50);
        }
        static void Main(string[] args)
        {
            Form Ausgabe = new Program();
            Application.Run(Ausgabe);
        }
    }
}
