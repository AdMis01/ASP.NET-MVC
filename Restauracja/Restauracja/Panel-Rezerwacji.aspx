<%@ Page Title="" Language="C#" MasterPageFile="~/Site1.Master" AutoEventWireup="true" CodeBehind="Panel-Rezerwacji.aspx.cs" Inherits="Restauracja.Panel_Rezerwacji" %>
<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <h3 class="title-restriction">Zarezerwuj stolik</h3>
    <div class="div-rezerwacja-panel">
        <div class="rezerwacje-left">
            <img src="Photo/Stoliki.png" alt="rozmieszczenie stolików w restaulacji" />
        </div>
        <div class="rezerwacje-right">
            <asp:dropdownlist id="StolikListDrop" runat="server" AutoPostBack="true" OnSelectedIndexChanged="OnSelectedIndexChanged" class="long">
                <asp:listitem Text="Stolik" value ="Stolik" />
                <asp:listitem Text="Stolik 1" value="1" />
                <asp:listitem Text="Stolik 2" value="2" />
                <asp:listitem Text="Stolik 3" value="3" />
                <asp:listitem Text="Stolik 4" value="4" />
                <asp:listitem Text="Stolik 5" value="5" />
                <asp:listitem Text="Stolik 6" value="6" />
            </asp:dropdownlist>
            <asp:dropdownlist id="Dropdownlist1" AutoPostBack="false" runat="server" class="long">
                <asp:listitem Text="Wybierz godzinę:" value ="Wybierz godzinę:" />
            </asp:dropdownlist>
            <asp:Label ID="Label2" runat="server" Text="Podaj na kogo ma być rezerwacja:"></asp:Label>
            <asp:textbox runat="server" id="textBoxName" class="long"></asp:textbox>
            <asp:button runat="server" text="Zarezerwuj wizytę" OnClick="Unnamed1_Click" class="buttons-sign" />
        </div>
    </div>
    <div class="last-divPanel">
        <asp:label id="Label1" runat="server" text=""></asp:label>
        <asp:Button ID="Button1" runat="server" Text="Wyloguj się" OnClick="Button1_Click" class="buttons-sign dodatek" />
    </div>
</asp:Content>
