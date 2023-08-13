using System.Windows.Forms;

namespace Terminplaner
{
    partial class Form1
    {
        /// <summary>
        /// Erforderliche Designervariable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Verwendete Ressourcen bereinigen.
        /// </summary>
        /// <param name="disposing">True, wenn verwaltete Ressourcen gelöscht werden sollen; andernfalls False.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Vom Windows Form-Designer generierter Code

        /// <summary>
        /// Erforderliche Methode für die Designerunterstützung.
        /// Der Inhalt der Methode darf nicht mit dem Code-Editor geändert werden.
        /// </summary>
        private void InitializeComponent()
        {
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Form1));
            this.BtnSave = new System.Windows.Forms.Button();
            this.BtnDelete = new System.Windows.Forms.Button();
            this.BtnEdit = new System.Windows.Forms.Button();
            this.BtnSaveToFile = new System.Windows.Forms.Button();
            this.LstBoxPrint = new System.Windows.Forms.ListBox();
            this.LabelLstBox = new System.Windows.Forms.Label();
            this.LabelDate = new System.Windows.Forms.Label();
            this.LabelDesc = new System.Windows.Forms.Label();
            this.LabelTimeOther = new System.Windows.Forms.Label();
            this.LabelHint = new System.Windows.Forms.Label();
            this.DatePicker = new System.Windows.Forms.DateTimePicker();
            this.Time8am = new System.Windows.Forms.RadioButton();
            this.Time9am = new System.Windows.Forms.RadioButton();
            this.Time10am = new System.Windows.Forms.RadioButton();
            this.Time11am = new System.Windows.Forms.RadioButton();
            this.Time12am = new System.Windows.Forms.RadioButton();
            this.Time1pm = new System.Windows.Forms.RadioButton();
            this.Time2pm = new System.Windows.Forms.RadioButton();
            this.Time3pm = new System.Windows.Forms.RadioButton();
            this.TxtUnknownTime = new System.Windows.Forms.TextBox();
            this.TxtBoxDesc = new System.Windows.Forms.TextBox();
            this.DiagSaveItemsToFile = new System.Windows.Forms.SaveFileDialog();
            this.DiagOpenSaved = new System.Windows.Forms.OpenFileDialog();
            
            this.SuspendLayout();
            // 
            // BtnSave
            // 
            this.BtnSave.BackgroundImageLayout = System.Windows.Forms.ImageLayout.None;
            this.BtnSave.Location = new System.Drawing.Point(11, 261);
            this.BtnSave.Name = "BtnSave";
            this.BtnSave.Size = new System.Drawing.Size(98, 23);
            this.BtnSave.TabIndex = 0;
            this.BtnSave.Text = "Termin erstellen";
            this.BtnSave.UseVisualStyleBackColor = true;
            this.BtnSave.Click += new System.EventHandler(this.BtnSave_Click);
            // 
            // BtnSaveToFile
            // 
            this.BtnSaveToFile.Location = new System.Drawing.Point(8, 567);
            this.BtnSaveToFile.Name = "BtnSaveToFile";
            this.BtnSaveToFile.Size = new System.Drawing.Size(75, 23);
            this.BtnSaveToFile.TabIndex = 18;
            this.BtnSaveToFile.Text = "Speichern";
            this.BtnSaveToFile.UseVisualStyleBackColor = true;
            this.BtnSaveToFile.Click += new System.EventHandler(this.SaveToFile_Click);
            // 
            // BtnDelete
            // 
            this.BtnDelete.Location = new System.Drawing.Point(170, 567);
            this.BtnDelete.Name = "BtnDelete";
            this.BtnDelete.Size = new System.Drawing.Size(86, 23);
            this.BtnDelete.TabIndex = 19;
            this.BtnDelete.Text = "Löschen";
            this.BtnDelete.UseVisualStyleBackColor = true;
            this.BtnDelete.Click += new System.EventHandler(this.BtnDelete_Click);
            // 
            // BtnEdit
            // 
            this.BtnEdit.Location = new System.Drawing.Point(89, 567);
            this.BtnEdit.Name = "BtnEdit";
            this.BtnEdit.Size = new System.Drawing.Size(75, 23);
            this.BtnEdit.TabIndex = 20;
            this.BtnEdit.Text = "Bearbeiten";
            this.BtnEdit.UseVisualStyleBackColor = true;
            this.BtnEdit.Click += new System.EventHandler(this.BtnEdit_Click);
            // 
            // DatePicker
            // 
            this.DatePicker.Location = new System.Drawing.Point(75, 8);
            this.DatePicker.Name = "DatePicker";
            this.DatePicker.Size = new System.Drawing.Size(214, 20);
            this.DatePicker.TabIndex = 4;
            this.DatePicker.ValueChanged += new System.EventHandler(this.DatePicker_ValueChanged);
            // 
            // LstBoxPrint
            // 
            this.LstBoxPrint.FormattingEnabled = true;
            this.LstBoxPrint.Location = new System.Drawing.Point(11, 352);
            this.LstBoxPrint.Name = "LstBoxPrint";
            this.LstBoxPrint.Size = new System.Drawing.Size(734, 212);
            this.LstBoxPrint.TabIndex = 1;
            // 
            // LabelLstBox
            // 
            this.LabelLstBox.AutoSize = true;
            this.LabelLstBox.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.LabelLstBox.Location = new System.Drawing.Point(7, 329);
            this.LabelLstBox.Name = "TabelLstBox";
            this.LabelLstBox.Size = new System.Drawing.Size(102, 20);
            this.LabelLstBox.TabIndex = 3;
            this.LabelLstBox.Text = "Ihre Termine:";
            // 
            // LabelDate
            // 
            this.LabelDate.AutoSize = true;
            this.LabelDate.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.LabelDate.Location = new System.Drawing.Point(7, 8);
            this.LabelDate.Name = "LabelDate";
            this.LabelDate.Size = new System.Drawing.Size(61, 20);
            this.LabelDate.TabIndex = 5;
            this.LabelDate.Text = "Datum:";
            // 
            // LabelDesc
            // 
            this.LabelDesc.AutoSize = true;
            this.LabelDesc.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.LabelDesc.Location = new System.Drawing.Point(7, 31);
            this.LabelDesc.Name = "LabelDesc";
            this.LabelDesc.Size = new System.Drawing.Size(157, 20);
            this.LabelDesc.TabIndex = 6;
            this.LabelDesc.Text = "Terminbeschreibung:";
            // 
            // LabelHint
            // 
            this.LabelHint.AutoSize = true;
            this.LabelHint.Location = new System.Drawing.Point(115, 258);
            this.LabelHint.Name = "LabelHint";
            this.LabelHint.Size = new System.Drawing.Size(354, 13);
            this.LabelHint.TabIndex = 21;
            this.LabelHint.Text = "Zu Bearbeitender Termin wird gelöscht, wenn dieser nicht neu erstellt wird";
            this.LabelHint.Visible = false;
            // 
            // LabelTimeOther
            // 
            this.LabelTimeOther.AutoSize = true;
            this.LabelTimeOther.Location = new System.Drawing.Point(555, 242);
            this.LabelTimeOther.Name = "LabelTimeOther";
            this.LabelTimeOther.Size = new System.Drawing.Size(80, 13);
            this.LabelTimeOther.TabIndex = 17;
            this.LabelTimeOther.Text = "Andere Uhrzeit:";
            // 
            // Time8am
            // 
            this.Time8am.AutoSize = true;
            this.Time8am.Checked = true;
            this.Time8am.Location = new System.Drawing.Point(558, 54);
            this.Time8am.Name = "Time8am";
            this.Time8am.Size = new System.Drawing.Size(66, 17);
            this.Time8am.TabIndex = 7;
            this.Time8am.TabStop = true;
            this.Time8am.Text = "8:00 Uhr";
            this.Time8am.UseVisualStyleBackColor = true;
            this.Time8am.CheckedChanged += new System.EventHandler(this.Time8_CheckedChanged);
            // 
            // Time9am
            // 
            this.Time9am.AutoSize = true;
            this.Time9am.Location = new System.Drawing.Point(558, 77);
            this.Time9am.Name = "Time9am";
            this.Time9am.Size = new System.Drawing.Size(66, 17);
            this.Time9am.TabIndex = 8;
            this.Time9am.Text = "9:00 Uhr";
            this.Time9am.UseVisualStyleBackColor = true;
            this.Time9am.CheckedChanged += new System.EventHandler(this.Time9_CheckedChanged);
            // 
            // Time10am
            // 
            this.Time10am.AutoSize = true;
            this.Time10am.Location = new System.Drawing.Point(558, 100);
            this.Time10am.Name = "Time10am";
            this.Time10am.Size = new System.Drawing.Size(72, 17);
            this.Time10am.TabIndex = 9;
            this.Time10am.Text = "10:00 Uhr";
            this.Time10am.UseVisualStyleBackColor = true;
            this.Time10am.CheckedChanged += new System.EventHandler(this.Time10_CheckedChanged);
            // 
            // Time11am
            // 
            this.Time11am.AutoSize = true;
            this.Time11am.Location = new System.Drawing.Point(558, 123);
            this.Time11am.Name = "Time11am";
            this.Time11am.Size = new System.Drawing.Size(72, 17);
            this.Time11am.TabIndex = 10;
            this.Time11am.Text = "11:00 Uhr";
            this.Time11am.UseVisualStyleBackColor = true;
            this.Time11am.CheckedChanged += new System.EventHandler(this.Time11_CheckedChanged);
            // 
            // Time12am
            // 
            this.Time12am.AutoSize = true;
            this.Time12am.Location = new System.Drawing.Point(558, 146);
            this.Time12am.Name = "Time12am";
            this.Time12am.Size = new System.Drawing.Size(72, 17);
            this.Time12am.TabIndex = 11;
            this.Time12am.Text = "12:00 Uhr";
            this.Time12am.UseVisualStyleBackColor = true;
            this.Time12am.CheckedChanged += new System.EventHandler(this.Time12_CheckedChanged);
            // 
            // Time1pm
            // 
            this.Time1pm.AutoSize = true;
            this.Time1pm.Location = new System.Drawing.Point(558, 169);
            this.Time1pm.Name = "Time1pm";
            this.Time1pm.Size = new System.Drawing.Size(72, 17);
            this.Time1pm.TabIndex = 12;
            this.Time1pm.Text = "13:00 Uhr";
            this.Time1pm.UseVisualStyleBackColor = true;
            this.Time1pm.CheckedChanged += new System.EventHandler(this.Time13_CheckedChanged);
            // 
            // Time2pm
            // 
            this.Time2pm.AutoSize = true;
            this.Time2pm.Location = new System.Drawing.Point(558, 192);
            this.Time2pm.Name = "Time2pm";
            this.Time2pm.Size = new System.Drawing.Size(72, 17);
            this.Time2pm.TabIndex = 13;
            this.Time2pm.Text = "14:00 Uhr";
            this.Time2pm.UseVisualStyleBackColor = true;
            this.Time2pm.CheckedChanged += new System.EventHandler(this.Time14_CheckedChanged);
            // 
            // Time3pm
            // 
            this.Time3pm.AutoSize = true;
            this.Time3pm.Location = new System.Drawing.Point(558, 215);
            this.Time3pm.Name = "Time3pm";
            this.Time3pm.CheckedChanged += new System.EventHandler(this.Time15_CheckedChanged);
            this.Time3pm.Size = new System.Drawing.Size(72, 17);
            this.Time3pm.TabIndex = 14;
            this.Time3pm.Text = "15:00 Uhr";
            this.Time3pm.UseVisualStyleBackColor = true;
            // 
            // TxtUnknownTime
            // 
            this.TxtUnknownTime.AccessibleRole = System.Windows.Forms.AccessibleRole.Text;
            this.TxtUnknownTime.Location = new System.Drawing.Point(641, 239);
            this.TxtUnknownTime.Name = "TxtUnknownTime";
            this.TxtUnknownTime.Size = new System.Drawing.Size(66, 20);
            this.TxtUnknownTime.TabIndex = 16;
            this.TxtUnknownTime.TextChanged += new System.EventHandler(this.TextUnknownTime_TextChanged);
            // 
            // TxtBoxDesc
            // 
            this.TxtBoxDesc.Location = new System.Drawing.Point(12, 54);
            this.TxtBoxDesc.Multiline = true;
            this.TxtBoxDesc.Name = "TxtBoxDesc";
            this.TxtBoxDesc.Size = new System.Drawing.Size(528, 201);
            this.TxtBoxDesc.TabIndex = 2;
            this.TxtBoxDesc.TextChanged += new System.EventHandler(this.TxtBoxDesc_TextChanged);
            // 
            // DiagOpenSaved
            // 
            this.DiagOpenSaved.FileName = "DiagOpenSaved";
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(758, 602);
            this.Controls.Add(this.LabelHint);
            this.Controls.Add(this.LabelLstBox);
            this.Controls.Add(this.LabelDesc);
            this.Controls.Add(this.LabelDate);
            this.Controls.Add(this.BtnEdit);
            this.Controls.Add(this.BtnDelete);
            this.Controls.Add(this.BtnSave);
            this.Controls.Add(this.BtnSaveToFile);
            this.Controls.Add(this.TxtUnknownTime);
            this.Controls.Add(this.TxtBoxDesc);
            this.Controls.Add(this.DatePicker);
            this.Controls.Add(this.Time8am);
            this.Controls.Add(this.Time9am);
            this.Controls.Add(this.Time10am);
            this.Controls.Add(this.Time11am);
            this.Controls.Add(this.Time12am);
            this.Controls.Add(this.Time1pm);
            this.Controls.Add(this.Time2pm);
            this.Controls.Add(this.Time3pm);
            this.Controls.Add(this.LabelTimeOther);
            this.Controls.Add(this.LstBoxPrint);
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.Name = "Form1";
            this.Text = "Terminplaner";
            this.Load += new System.EventHandler(this.Form1_Load);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button BtnSave;
        private System.Windows.Forms.Button BtnDelete;
        private System.Windows.Forms.Button BtnEdit;
        private System.Windows.Forms.Button BtnSaveToFile;
        private System.Windows.Forms.Label LabelLstBox;
        private System.Windows.Forms.Label LabelDate;
        private System.Windows.Forms.Label LabelDesc;
        private System.Windows.Forms.Label LabelHint;
        private System.Windows.Forms.Label LabelTimeOther;
        private System.Windows.Forms.ListBox LstBoxPrint;
        private System.Windows.Forms.TextBox TxtBoxDesc;
        private System.Windows.Forms.TextBox TxtUnknownTime;
        private System.Windows.Forms.RadioButton Time8am;
        private System.Windows.Forms.RadioButton Time9am;
        private System.Windows.Forms.RadioButton Time10am;
        private System.Windows.Forms.RadioButton Time11am;
        private System.Windows.Forms.RadioButton Time12am;
        private System.Windows.Forms.RadioButton Time1pm;
        private System.Windows.Forms.RadioButton Time2pm;
        private System.Windows.Forms.RadioButton Time3pm;
        private System.Windows.Forms.DateTimePicker DatePicker;
        private System.Windows.Forms.SaveFileDialog DiagSaveItemsToFile;
        private System.Windows.Forms.OpenFileDialog DiagOpenSaved;
        
    }
}