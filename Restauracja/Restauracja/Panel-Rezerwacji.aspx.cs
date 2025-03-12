using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data;
using System.Data.SqlClient;

namespace Restauracja
{
    public partial class Panel_Rezerwacji : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            
            if(Session["id"] == null || Session["id"] == "")
            {
                Response.Redirect("Logowanie-Rejestracja.aspx");
            }
            
        }
        

        protected void Button1_Click(object sender, EventArgs e)
        {
            Session.RemoveAll();
            Response.Cookies["userid"].Expires = DateTime.Now.AddDays(-1);
            Response.Cookies["pwd"].Expires = DateTime.Now.AddDays(-1);
            Response.Redirect("Strona-Glowna.aspx");

        }
        protected void OnSelectedIndexChanged(object sender, EventArgs e)
        {
            //string message = StolikListDrop.SelectedIndex + " " + StolikListDrop.SelectedValue;
            //Label1.Text = message;

            SqlConnection con = new SqlConnection(@"Data Source = (LocalDB)\MSSQLLocalDB;AttachDbFilename=|DataDirectory|\Baza-Restauracji.mdf;Integrated Security = True");
            SqlCommand cmd = new SqlCommand("select * from rezerwacje where id=@id", con);
            cmd.Parameters.AddWithValue("@id", StolikListDrop.SelectedValue);
            SqlDataAdapter sda = new SqlDataAdapter(cmd);
            DataTable dt = new DataTable();
            sda.Fill(dt);
            con.Open();
            int i = cmd.ExecuteNonQuery();
            con.Close();
            Dropdownlist1.Items.Clear();
            Dropdownlist1.Items.Add("Wybierz godzinę:");
            for (int s = 1; s < dt.Columns.Count; s++)
            {
                // Label1.Text += dt.Rows[0][s].ToString();
                if (dt.Rows[0][s].ToString() == "False")
                {
                    //DataColumn column = dt.Columns[s];
                    Dropdownlist1.Items.Add(dt.Columns[s].ToString().Trim());
                }

            }
            
        }

        protected void Unnamed1_Click(object sender, EventArgs e)
        {
            SqlConnection con = new SqlConnection(@"Data Source = (LocalDB)\MSSQLLocalDB;AttachDbFilename=|DataDirectory|\Baza-Restauracji.mdf;Integrated Security = True");
            SqlCommand cmd = new SqlCommand("insert into daneRezerwacji(name,stolik,godzina) values(@name,@stolik,@godzina)", con);
            cmd.Parameters.AddWithValue("@name", textBoxName.Text);
            cmd.Parameters.AddWithValue("@stolik", StolikListDrop.SelectedValue);
            cmd.Parameters.AddWithValue("@godzina", Dropdownlist1.SelectedValue);
            if(textBoxName.Text == "" || (StolikListDrop.SelectedValue == null || StolikListDrop.SelectedValue == "Stolik") || (Dropdownlist1.SelectedValue == null || Dropdownlist1.SelectedValue == "Wybierz godzinę:"))
            {
                if(textBoxName.Text == "")
                {
                    Label1.Text = "Podaj imię na kogo ma być rezerwacja!";
                }
                if (StolikListDrop.SelectedValue == null || StolikListDrop.SelectedValue == "Stolik")
                {
                    Label1.Text = "Wybierz stolik!";
                }
                if (Dropdownlist1.SelectedValue == null || Dropdownlist1.SelectedValue == "Wybierz godzinę:")
                {
                    Label1.Text = "Wybeirz godzinne rezerwacji!";
                }
            }
            else
            {
                con.Open();
                int i = cmd.ExecuteNonQuery();
                con.Close();

                SqlCommand cmd2 = new SqlCommand("update rezerwacje set [" + Dropdownlist1.SelectedValue + "] = 1 where id = " + StolikListDrop.SelectedValue, con);
                //cmd2.Parameters.AddWithValue("@id", StolikListDrop.SelectedValue);
                con.Open();
                int j = cmd2.ExecuteNonQuery();
                con.Close();

                Label1.Text = "Zarezerwowałeś stolik";
                Label1.ForeColor = System.Drawing.Color.Green;
                StolikListDrop.ClearSelection();
                Dropdownlist1.ClearSelection();
            }

        }
    }
}