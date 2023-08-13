using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Forms_Designer___Explorer_für_Arme
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void treeView_AfterSelect(object sender, TreeViewEventArgs e)
        {
            TreeNode selected = treeView.SelectedNode;
            
            string Pfad = "C:/";
            System.IO.DirectoryInfo verzeichnisse = new System.IO.DirectoryInfo(Pfad);
            foreach (System.IO.DirectoryInfo dir in verzeichnisse.GetDirectories())
            {
                //dir.Name
                string[] verzeichnisse = System.IO.Directory.GetDirectories(Pfad);
            }
        }

        private void getDir_Click(object sender, EventArgs e)
        {
            folderBrowserDialog.ShowDialog();
            string topLevelPath = folderBrowserDialog.SelectedPath;
            TreeNode topLevelNode = new TreeNode(folderBrowserDialog.SelectedPath);
            treeView.Nodes.Add(topLevelNode);
            MessageBox.Show(topLevelPath, "Pfad");
        }
    }
}