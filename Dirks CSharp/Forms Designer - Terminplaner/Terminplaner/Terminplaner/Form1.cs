using System;
using System.Linq;
using System.Windows.Forms;

namespace Terminplaner
{
    public partial class Form1 : Form
    {
        private string time; //Uhrzeit
        private string date; //Datum
        private string desc; //Beschreibung

        private string selectedItem; //Termin zum Bearbeiten

        public Form1()
        {
            InitializeComponent();
        }
        private void Form1_Load(object sender, EventArgs e)
        {
            //Form Load
        }

        private void Time8_CheckedChanged(object sender, EventArgs e)
        {
            //8 Uhr
            time = "8:00";

        }

        private void Time9_CheckedChanged(object sender, EventArgs e)
        {
            //9 Uhr
            time = "9:00";
        }
        private void Time10_CheckedChanged(object sender, EventArgs e)
        {
            //10 Uhr
            time = "10:00";
        }

        private void Time11_CheckedChanged(object sender, EventArgs e)
        {
            //11 Uhr
            time = "11:00";
        }

        private void Time12_CheckedChanged(object sender, EventArgs e)
        {
            //12 Uhr
            time = "12:00";
        }

        private void Time13_CheckedChanged(object sender, EventArgs e)
        {
            //13 Uhr
            time = "13:00";
        }

        private void Time14_CheckedChanged(object sender, EventArgs e)
        {
            //14 Uhr
            time = "14:00";
        }

        private void Time15_CheckedChanged(object sender, EventArgs e)
        {
            //15 Uhr
            time = "15:00";

        }

        private void TextUnknownTime_TextChanged(object sender, EventArgs e)
        {
            //Selbstbestimmung Zeit (Textfeld)
            time = TxtUnknownTime.Text;
        }

        private void TxtBoxDesc_TextChanged(object sender, EventArgs e)
        {
            //Terminbeschreibung
            desc = TxtBoxDesc.Text;
        }

        private void DatePicker_ValueChanged(object sender, EventArgs e)
        {
            //Datum auswählen
            DatePicker.Format = DateTimePickerFormat.Custom;
            DatePicker.CustomFormat = "dddd, d.M.yyyy";

            date = DatePicker.Text;
        }

        private void BtnSave_Click(object sender, EventArgs e)
        {
            //Speichern

            if (LabelHint.Visible) LabelHint.Hide(); //Hinweis verstecken

            //"|" als Zeichen nicht nutzbar machen, da Trennzeichen in der Ausgabe
            if (TxtBoxDesc.Text.Contains('|'))
            {
                string message = "Terminbeschreibung \"|\" nicht enthalten.";
                string caption = "Termin konnte nicht erstellt werden.";
                MessageBoxButtons buttons = MessageBoxButtons.OK;

                //Zeigt MessageBox an
                MessageBox.Show(message, caption, buttons);

                //Löscht Inhalt der Textbox
                //TxtBoxDesc.Clear();
            }
            else
            {
                LstBoxPrint.Items.Add(date + " | " + time + " Uhr | " + desc); //Strings zusammenfügen und in Listbox schreiben
            }
        }

        private void SaveToFile_Click(object sender, EventArgs e)
        {
            //Termine als Datei speichern
        }

        private void BtnDelete_Click(object sender, EventArgs e)
        {
            //Termin löschen

            LstBoxPrint.Items.Remove(LstBoxPrint.SelectedItem);
            LstBoxPrint.ClearSelected();
        }

        private void BtnEdit_Click(object sender, EventArgs e)
        {
            //Termin bearbeiten

            if (!LabelHint.Visible) LabelHint.Show(); //Hinweis zeigen

            selectedItem = LstBoxPrint.SelectedItem.ToString();

            string[] splittedItem = selectedItem.Split('|'); //String Splitten

            TxtBoxDesc.Text = splittedItem[2].Trim(); //Beschreibung in Textbox schreiben   
            LstBoxPrint.Items.Remove(LstBoxPrint.SelectedItem); //Listbox Item entfernen
        }
    }
}