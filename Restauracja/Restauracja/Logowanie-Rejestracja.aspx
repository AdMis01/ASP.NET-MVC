<%@ Page Title="" Language="C#" MasterPageFile="~/Site1.Master" AutoEventWireup="true" CodeBehind="Logowanie-Rejestracja.aspx.cs" Inherits="Restauracja.Logowanie_Rejestracja" %>
<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
     <div class="content-sign">
                <form action="#" method="post" enctype="multipart/form-data">
        <div class="logowanie">
            <div class="cont-logowanie">
                    <h3 class="long">Logowanie</h3>
                    <label for="email" class="long">Email:</label>
                    <asp:TextBox ID="TextBox1" runat="server" class="long" name="email"></asp:TextBox>
                    <label for="passowrd1" class="long">Hasło:</label>
                    <asp:TextBox ID="PasswordBox1" runat="server" class="long" name="password1" TextMode="Password"></asp:TextBox>
                    <p style="font-size: 14px;line-height:18px;">
                         <asp:CheckBox ID ="checkboxRemember" runat="server"  Text =" Zapamiętaj mnie" /><br />  
                    </p>
                    <asp:Button ID="Button1" runat="server" Text="Zaloguj się" class="buttons-sign" OnClick="Button1_Click"/>
                    <asp:Label ID="Label1" runat="server" Text=""></asp:Label>
            </div>
        </div>
                    <div class="rejestrowanie">
            <div class="cont-rejestracja">
                    <h3 class="long">Rejestrowanie</h3>
                    <label for="email2" class="long">Email:</label>
                    <asp:TextBox ID="TextBox2" runat="server" name="email2" class="long"></asp:TextBox>
                    <label for="passowrd2" class="long">Hasło:</label>
                    <asp:TextBox ID="PasswordBox2" runat="server" class="long" name="password2" TextMode="Password"></asp:TextBox>
                    <p style="font-size: 14px">Twoje dane osobowe będą wykorzystywane do celów opisanych w naszej Polityce Prywatności.</p>
                    <asp:Button ID="Button2" runat="server" Text="Zarejestruj się" class="buttons-sign" OnClick="Button2_Click"/>
                    <asp:Label ID="Label2" runat="server" Text=""></asp:Label>
            </div>
        </div>
                </form>
        
    </div>
</asp:Content>
