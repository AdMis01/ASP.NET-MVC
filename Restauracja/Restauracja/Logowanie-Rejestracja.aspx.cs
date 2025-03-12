using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data.SqlClient;
using System.Data;
using System.Configuration;
using System.Reflection.Emit;
using System.Drawing;
using System.Xml.Linq;

namespace Restauracja
{
    public partial class Logowanie_Rejestracja : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void Button1_Click(object sender, EventArgs e)
        {
            //SqlConnection con = new SqlConnection(@"Data Source=.\SQLEXPRESS;AttachDbFilename=|DataDirectory|\Database.mdf;Integrated Security=True;User Instance=True");
            SqlConnection con = new SqlConnection(@"Data Source = (LocalDB)\MSSQLLocalDB;AttachDbFilename=|DataDirectory|\Baza-Restauracji.mdf;Integrated Security = True");
            SqlCommand cmd = new SqlCommand("select * from users where name=@name and password=@password", con);
            cmd.Parameters.AddWithValue("@name", TextBox1.Text);
            cmd.Parameters.AddWithValue("password", PasswordBox1.Text);
            SqlDataAdapter sda = new SqlDataAdapter(cmd);
            DataTable dt = new DataTable();
            sda.Fill(dt);
            con.Open();
            int i = cmd.ExecuteNonQuery();
            con.Close();

            if (dt.Rows.Count > 0)
            {
                if (checkboxRemember.Checked == true)
                {
                    Response.Cookies["userName"].Value = TextBox1.Text;
                    Response.Cookies["pwd"].Value = PasswordBox1.Text;
                    Response.Cookies["userName"].Expires = DateTime.Now.AddDays(15);
                    Response.Cookies["pwd"].Expires = DateTime.Now.AddDays(15);
                }
                else
                {
                    Response.Cookies["userName"].Expires = DateTime.Now.AddDays(-1);
                    Response.Cookies["pwd"].Expires = DateTime.Now.AddDays(-1);
                }
                Session["id"] = TextBox1.Text;
                Response.Redirect("Panel-Rezerwacji.aspx");
                Session.RemoveAll();
            }else if(dt.Rows.Count == 0)
            {
                Label1.Text = "Nie ma takiego konta";
                Label1.ForeColor = System.Drawing.Color.Red;
            }
            else
            {
                Label1.Text = "Spróbuj sie zalogować jeszcze raz";
                Label1.ForeColor = System.Drawing.Color.Red;

            }
        }

        protected void Button2_Click(object sender, EventArgs e)
        {
            SqlConnection con = new SqlConnection(@"Data Source = (LocalDB)\MSSQLLocalDB;AttachDbFilename=|DataDirectory|\Baza-Restauracji.mdf;Integrated Security = True");
            SqlCommand cmd = new SqlCommand("select * from users where name=@name", con);
            cmd.Parameters.AddWithValue("@name", TextBox2.Text);
            SqlDataAdapter sda = new SqlDataAdapter(cmd);
            DataTable dt = new DataTable();
            sda.Fill(dt);
            con.Open();
            int i = cmd.ExecuteNonQuery();

            if (dt.Rows.Count > 0)
            {
                Label2.Text = "Konto już istnieje użyj innego maila";
                Label2.ForeColor = System.Drawing.Color.Red;
            }
            else
            {
                if (TextBox2.Text == "" || PasswordBox2.Text =="")
                {
                    Label2.Text = "Proszę wypełnić pola";
                    Label2.ForeColor = System.Drawing.Color.Red;
                }
                else
                {
                    SqlCommand cmd2 = new SqlCommand("insert into users(name,password) values(@name,@password)", con);
                    cmd2.Parameters.AddWithValue("@name", TextBox2.Text);
                    cmd2.Parameters.AddWithValue("password", PasswordBox2.Text);
                    SqlDataAdapter sda2 = new SqlDataAdapter(cmd);
                    int i2 = cmd2.ExecuteNonQuery();
                    //Response.Redirect("~/Logowanie-Rejestracja.aspx");
                    Label2.Text = "Konto zostało utworzone";
                    Label2.ForeColor = System.Drawing.Color.Green;
                }
                
            }
            con.Close();

        }
    }
}