<%@ Page Title="" Language="C#" MasterPageFile="~/NestedMasterPage1.master" AutoEventWireup="true" CodeBehind="Galeria.aspx.cs" Inherits="Restauracja.Galeria" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <div class="title-conteiner">
        <h3 class="title-restriction">Galeria</h3>
    </div>
    <div class="galeri-content">
        <div class="left-main">
            <img src="Photo/galeria/pexels-brett-sayles-1322184.jpg" />
            <img src="Photo/galeria/pexels-burak-the-weekender-735869.jpg" />
            <img src="Photo/galeria/pexels-dorota-semla-8969237.jpg" />
        </div>
        <div class="right-main">
            <img src="Photo/galeria/pexels-life-of-pix-67468.jpg" />
            <img src="Photo/galeria/pexels-lisa-fotios-1126728.jpg" />
            <img src="Photo/galeria/pexels-spencer-davis-4393021.jpg" />
        </div>
    </div>
</asp:Content>
