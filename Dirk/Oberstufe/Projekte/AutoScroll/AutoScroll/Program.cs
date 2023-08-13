using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Drawing;

namespace AutoScroll
{
    class Program : Form
    {
        // protected override void OnResize(EventArgs e)
        // {
        //     this.Invalidate();
        // }
        protected override void OnPaint(PaintEventArgs e)
        {
            float a = (float)this.Height / 10;
            Graphics gra = e.Graphics;
 
            int abstand; 
 
            abstand = this.Font.Height;
            int position =  AutoScrollPosition.Y;

            string[] lines = System.IO.File.ReadAllLines(@"E:\Schule\06 PRO\Oberstufe\Projekte\AutoScroll\Test.txt");

            AutoScroll = true;
            AutoScrollMinSize = new Size(200, this.Font.Height * lines.Length);
            Console.WriteLine(AutoScrollMinSize);

            foreach (string line in lines)
            {
                gra.DrawString(line, new Font("Times New Roman", 10), Brushes.Black, 0, position);
                position = position + this.Font.Height;
            }
        }
        static void Main(string[] args)
        {
            Form AutoScroll = new Program();
            Application.Run(AutoScroll);
        }
    }
}
