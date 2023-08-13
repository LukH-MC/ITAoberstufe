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
            float a = (float)this.Height / 10;
            Pen blackPen = new Pen(Color.FromArgb(255, 10, 10, 200), 10.0f);
            blackPen.Alignment = System.Drawing.Drawing2D.PenAlignment.Center;
            Graphics gra = e.Graphics;
            
            gra.DrawEllipse(Pens.Black, (40), (40), this.Width-150, this.Height-150);
            gra.DrawRectangle(Pens.Blue, 10,10,this.Width - 35, this.Height - 65);

            PointF point1 = new PointF(100.0F, 100.0F);
            PointF point2 = new PointF(200.0F, 200.0F);

            PointF point3 = new PointF(100.0F, 200.0F);
            PointF point4 = new PointF(200.0F, 100.0F);

            gra.DrawLine(Pens.Blue, point1, point2);
            gra.DrawLine(Pens.Black, point3, point4);
        }
        static void Main(string[] args)
        {
            Form Ausgabe = new Program();
            Application.Run(Ausgabe);
        }
    }
}
